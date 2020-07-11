<?php


namespace Yeepay\Yop\Sdk\Service\MerchantService;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\MerchantService\Model as Model;

class MerchantServiceClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MerchantServiceClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\MerOutInvokeSendMerSmsNotifyRequest $request
     * @return Model\MerOutInvokeSendMerSmsNotifyResponse
     * @throws YopClientException
     */
    public function merOutInvokeSendMerSmsNotify(Model\MerOutInvokeSendMerSmsNotifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerOutInvokeSendMerSmsNotifyRequestMarshaller::getInstance(),
            Model\MerOutInvokeSendMerSmsNotifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerProductInfoMerProductFeeUpdateForO2oRequest $request
     * @return Model\MerProductInfoMerProductFeeUpdateForO2oResponse
     * @throws YopClientException
     */
    public function merProductInfoMerProductFeeUpdateForO2o(Model\MerProductInfoMerProductFeeUpdateForO2oRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerProductInfoMerProductFeeUpdateForO2oRequestMarshaller::getInstance(),
            Model\MerProductInfoMerProductFeeUpdateForO2oResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
