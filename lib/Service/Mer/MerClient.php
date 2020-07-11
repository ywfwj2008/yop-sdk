<?php


namespace Yeepay\Yop\Sdk\Service\Mer;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Mer\Model as Model;

class MerClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MerClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ElecSignNotifyRequest $request
     * @return Model\ElecSignNotifyResponse
     * @throws YopClientException
     */
    public function elecSignNotify(Model\ElecSignNotifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ElecSignNotifyRequestMarshaller::getInstance(),
            Model\ElecSignNotifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantAccountBindCardRequest $request
     * @return Model\MerchantAccountBindCardResponse
     * @throws YopClientException
     */
    public function merchantAccountBindCard(Model\MerchantAccountBindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantAccountBindCardRequestMarshaller::getInstance(),
            Model\MerchantAccountBindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantAccountBindCardQueryRequest $request
     * @return Model\MerchantAccountBindCardQueryResponse
     * @throws YopClientException
     */
    public function merchantAccountBindCardQuery(Model\MerchantAccountBindCardQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantAccountBindCardQueryRequestMarshaller::getInstance(),
            Model\MerchantAccountBindCardQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantMerchantSettleWayUpdateRequest $request
     * @return Model\MerchantMerchantSettleWayUpdateResponse
     * @throws YopClientException
     */
    public function merchantMerchantSettleWayUpdate(Model\MerchantMerchantSettleWayUpdateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantMerchantSettleWayUpdateRequestMarshaller::getInstance(),
            Model\MerchantMerchantSettleWayUpdateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantProductFeeModifyRequest $request
     * @return Model\MerchantProductFeeModifyResponse
     * @throws YopClientException
     */
    public function merchantProductFeeModify(Model\MerchantProductFeeModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantProductFeeModifyRequestMarshaller::getInstance(),
            Model\MerchantProductFeeModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantQueryMerPayProductFeeRequest $request
     * @return Model\MerchantQueryMerPayProductFeeResponse
     * @throws YopClientException
     */
    public function merchantQueryMerPayProductFee(Model\MerchantQueryMerPayProductFeeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerNo() == null) {
            throw new YopClientException("request.merNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantQueryMerPayProductFeeRequestMarshaller::getInstance(),
            Model\MerchantQueryMerPayProductFeeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantQueryMerchantBasicInfoRequest $request
     * @return Model\MerchantQueryMerchantBasicInfoResponse
     * @throws YopClientException
     */
    public function merchantQueryMerchantBasicInfo(Model\MerchantQueryMerchantBasicInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getAgentNo() == null) {
            throw new YopClientException("request.agentNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantQueryMerchantBasicInfoRequestMarshaller::getInstance(),
            Model\MerchantQueryMerchantBasicInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantSettleBankCardInfoUpdateRequest $request
     * @return Model\MerchantSettleBankCardInfoUpdateResponse
     * @throws YopClientException
     */
    public function merchantSettleBankCardInfoUpdate(Model\MerchantSettleBankCardInfoUpdateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantSettleBankCardInfoUpdateRequestMarshaller::getInstance(),
            Model\MerchantSettleBankCardInfoUpdateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthCancelRequest $request
     * @return Model\MerchantWechatauthCancelResponse
     * @throws YopClientException
     */
    public function merchantWechatauthCancel(Model\MerchantWechatauthCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthCancelRequestMarshaller::getInstance(),
            Model\MerchantWechatauthCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthQueryRequest $request
     * @return Model\MerchantWechatauthQueryResponse
     * @throws YopClientException
     */
    public function merchantWechatauthQuery(Model\MerchantWechatauthQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getSubMerchantNo() == null) {
            throw new YopClientException("request.subMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthQueryRequestMarshaller::getInstance(),
            Model\MerchantWechatauthQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
