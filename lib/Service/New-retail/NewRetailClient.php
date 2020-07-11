<?php


namespace Yeepay\Yop\Sdk\Service\New-retail;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\New-retail\Model as Model;

class NewRetailClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * NewRetailClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\MarketingApplyPublicRequest $request
     * @return Model\MarketingApplyPublicResponse
     * @throws YopClientException
     */
    public function marketingApplyPublic(Model\MarketingApplyPublicRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MarketingApplyPublicRequestMarshaller::getInstance(),
            Model\MarketingApplyPublicResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MarketingQueryOpenIdRequest $request
     * @return Model\MarketingQueryOpenIdResponse
     * @throws YopClientException
     */
    public function marketingQueryOpenId(Model\MarketingQueryOpenIdRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MarketingQueryOpenIdRequestMarshaller::getInstance(),
            Model\MarketingQueryOpenIdResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MarketingQueryresultPublicRequest $request
     * @return Model\MarketingQueryresultPublicResponse
     * @throws YopClientException
     */
    public function marketingQueryresultPublic(Model\MarketingQueryresultPublicRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MarketingQueryresultPublicRequestMarshaller::getInstance(),
            Model\MarketingQueryresultPublicResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
