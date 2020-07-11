<?php


namespace Yeepay\Yop\Sdk\Service\Mktg;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Mktg\Model as Model;

class MktgClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MktgClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\PromotionCreateRequest $request
     * @return Model\PromotionCreateResponse
     * @throws YopClientException
     */
    public function promotionCreate(Model\PromotionCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromotionCreateRequestMarshaller::getInstance(),
            Model\PromotionCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PromotionListRequest $request
     * @return Model\PromotionListResponse
     * @throws YopClientException
     */
    public function promotionList(Model\PromotionListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromotionListRequestMarshaller::getInstance(),
            Model\PromotionListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PromotionUpdateRequest $request
     * @return Model\PromotionUpdateResponse
     * @throws YopClientException
     */
    public function promotionUpdate(Model\PromotionUpdateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromotionUpdateRequestMarshaller::getInstance(),
            Model\PromotionUpdateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
