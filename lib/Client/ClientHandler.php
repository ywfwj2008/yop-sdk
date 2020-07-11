<?php


namespace Yeepay\Yop\Sdk\Client;


use Yeepay\Yop\Sdk\Auth\AuthorizationReqRegistry;
use Yeepay\Yop\Sdk\Auth\Cipher\DefaultEncryptor;
use Yeepay\Yop\Sdk\Auth\SignerFactory;
use Yeepay\Yop\Sdk\Auth\SignOptions;
use Yeepay\Yop\Sdk\Auth\YopCredentialProvider;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Http\ExecutionContext;
use Yeepay\Yop\Sdk\Http\YopHttpClient;
use Yeepay\Yop\Sdk\Model\Transform\ResponseUnMarshalParams;

class ClientHandler
{
    /**
     * @var YopCredentialProvider
     */
    private $credentialsProvider;

    /**
     * @var AuthorizationReqRegistry
     */
    private $authorizationReqRegistry;

    /**
     * @var YopHttpClient
     */
    private $yopHttpClient;

    /**
     * @var GateWayRouter
     */
    private $gatewayRouter;

    /**
     * ClientHandler constructor.
     * @param ClientParams $clientParams
     */
    public function __construct(ClientParams $clientParams)
    {
        $this->credentialsProvider = $clientParams->getCredentialsProvider();
        $this->authorizationReqRegistry = $clientParams->getAuthorizationReqRegistry();
        $this->yopHttpClient = new YopHttpClient($clientParams->getClientConfiguration());
        $this->gatewayRouter = new GateWayRouter(new ServerRootSpace($clientParams->getEndPoint(),
            $clientParams->getYosEndPoint(),
            $clientParams->getSandboxEndPoint()),
            $clientParams->getModes());
    }


    /**
     * @param ClientExecutionParams $executionParams
     * @return mixed
     * @throws YopClientException
     */
    public function execute(ClientExecutionParams $executionParams)
    {

        $executionContext = $this->getExecutionContext($executionParams);
        $request = $executionParams->getRequestMarshaller()->marshal($executionParams->getRequest());

        /** @var ExecutionContext $httpExecutionContext */
        $httpExecutionContext = $executionContext[0];
        $request->setEndpoint($this->gatewayRouter->route($httpExecutionContext->getCredentials()->getAppKey(), $request));
        $yopHttpResponse = $this->yopHttpClient->execute($request, $httpExecutionContext);
        /** @var ResponseUnMarshalParams $ResponseUnMarshalParams */
        $ResponseUnMarshalParams = $executionContext[1];
        return $executionParams->getResponseUnMarshaller()->unmarshal($yopHttpResponse, $ResponseUnMarshalParams);
    }

    /**
     * @param ClientExecutionParams $executionParams
     * @return array
     * @throws YopClientException
     */
    private function getExecutionContext(ClientExecutionParams $executionParams)
    {
        $httpExecutionContext = new ExecutionContext();
        $ResponseUnMarshalParams = new ResponseUnMarshalParams();

        $request = $executionParams->getRequest();
        $authorizationReq = $this->authorizationReqRegistry->getAuthorizationReq($request::getOperationId());
        if (isset($authorizationReq)) {
            $signer = SignerFactory::getSigner($authorizationReq->getSignerType());
            $signOptions = new SignOptions($authorizationReq->getDigestAlg(), $authorizationReq->getProtocolPrefix());
            $httpExecutionContext->setSigner($signer)->setSignOptions($signOptions);
            $ResponseUnMarshalParams->setSigner($signer)->setSignOptions($signOptions)
                ->setPublicKey($this->credentialsProvider->getYopPublicKey($authorizationReq->getCredentialType()));

            $credentials = null;
            $requestConfig = $request->getRequestConfig();
            $needEncrypt = false;
            if (isset($requestConfig)) {
                if (!empty($requestConfig->getCredentials())) {
                    $credentials = $requestConfig->getCredentials();
                } else {
                    $customAppKey = $requestConfig->getAppKey();
                    if (!empty($customAppKey)) {
                        $credentials = $this->credentialsProvider->getCredential($customAppKey,
                            $authorizationReq->getCredentialType());
                        if (!isset($credentials)) {
                            throw new YopClientException('no credentials specified, appKey:' . $customAppKey
                                . ', credentialType:' . $authorizationReq->getCredentialType());
                        }
                    }
                }
                $needEncrypt = $requestConfig->isNeedEncrypt();
            }
            if (!isset($credentials)) {
                $credentials = $this->credentialsProvider->getDefaultAppCredential($authorizationReq->getCredentialType());
            }
            if (!isset($credentials)) {
                throw new YopClientException('no credentials specified for defaultAppKey, credentialType:'
                    . $authorizationReq->getCredentialType());
            }
            $httpExecutionContext->setCredentials($credentials);
            if ($needEncrypt) {
                $encryptor = new DefaultEncryptor($credentials->getEncryptKey());
                $httpExecutionContext->setNeedEncrypt(true)->setEncryptor($encryptor);
                $ResponseUnMarshalParams->setNeedDecrypt(true)->setEncryptor($encryptor);
            }
            return array($httpExecutionContext, $ResponseUnMarshalParams);
        } else {
            throw new YopClientException("no securityReq assigned, api:" . $request::getOperationId());
        }
    }

}