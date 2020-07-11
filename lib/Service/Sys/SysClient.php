<?php


namespace Yeepay\Yop\Sdk\Service\Sys;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Sys\Model as Model;

class SysClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * SysClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\MerchantQuaInfoSupplementRequest $request
     * @return Model\MerchantQuaInfoSupplementResponse
     * @throws YopClientException
     */
    public function merchantQuaInfoSupplement(Model\MerchantQuaInfoSupplementRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantQuaInfoSupplementRequestMarshaller::getInstance(),
            Model\MerchantQuaInfoSupplementResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantQualUploadRequest $request
     * @return Model\MerchantQualUploadResponse
     * @throws YopClientException
     */
    public function merchantQualUpload(Model\MerchantQualUploadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantQualUploadRequestMarshaller::getInstance(),
            Model\MerchantQualUploadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantQueryBankCardBinInfoRequest $request
     * @return Model\MerchantQueryBankCardBinInfoResponse
     * @throws YopClientException
     */
    public function merchantQueryBankCardBinInfo(Model\MerchantQueryBankCardBinInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantQueryBankCardBinInfoRequestMarshaller::getInstance(),
            Model\MerchantQueryBankCardBinInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubcompanyTradeOrderRequest $request
     * @return Model\SubcompanyTradeOrderResponse
     * @throws YopClientException
     */
    public function subcompanyTradeOrder(Model\SubcompanyTradeOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubcompanyTradeOrderRequestMarshaller::getInstance(),
            Model\SubcompanyTradeOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubcompanyTradeOrderqueryRequest $request
     * @return Model\SubcompanyTradeOrderqueryResponse
     * @throws YopClientException
     */
    public function subcompanyTradeOrderquery(Model\SubcompanyTradeOrderqueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubcompanyTradeOrderqueryRequestMarshaller::getInstance(),
            Model\SubcompanyTradeOrderqueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubcompanyTradeSettlementsqueryRequest $request
     * @return Model\SubcompanyTradeSettlementsqueryResponse
     * @throws YopClientException
     */
    public function subcompanyTradeSettlementsquery(Model\SubcompanyTradeSettlementsqueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubcompanyTradeSettlementsqueryRequestMarshaller::getInstance(),
            Model\SubcompanyTradeSettlementsqueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeDividebackRequest $request
     * @return Model\TradeDividebackResponse
     * @throws YopClientException
     */
    public function tradeDivideback(Model\TradeDividebackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeDividebackRequestMarshaller::getInstance(),
            Model\TradeDividebackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeEnddivideRequest $request
     * @return Model\TradeEnddivideResponse
     * @throws YopClientException
     */
    public function tradeEnddivide(Model\TradeEnddivideRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeEnddivideRequestMarshaller::getInstance(),
            Model\TradeEnddivideResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeMultiorderqueryRequest $request
     * @return Model\TradeMultiorderqueryResponse
     * @throws YopClientException
     */
    public function tradeMultiorderquery(Model\TradeMultiorderqueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeMultiorderqueryRequestMarshaller::getInstance(),
            Model\TradeMultiorderqueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeOrderRequest $request
     * @return Model\TradeOrderResponse
     * @throws YopClientException
     */
    public function tradeOrder(Model\TradeOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeOrderRequestMarshaller::getInstance(),
            Model\TradeOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeOrdercloseRequest $request
     * @return Model\TradeOrdercloseResponse
     * @throws YopClientException
     */
    public function tradeOrderclose(Model\TradeOrdercloseRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeOrdercloseRequestMarshaller::getInstance(),
            Model\TradeOrdercloseResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeOrderqueryRequest $request
     * @return Model\TradeOrderqueryResponse
     * @throws YopClientException
     */
    public function tradeOrderquery(Model\TradeOrderqueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeOrderqueryRequestMarshaller::getInstance(),
            Model\TradeOrderqueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeQuerydividebackRequest $request
     * @return Model\TradeQuerydividebackResponse
     * @throws YopClientException
     */
    public function tradeQuerydivideback(Model\TradeQuerydividebackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeQuerydividebackRequestMarshaller::getInstance(),
            Model\TradeQuerydividebackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeRefundRequest $request
     * @return Model\TradeRefundResponse
     * @throws YopClientException
     */
    public function tradeRefund(Model\TradeRefundRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeRefundRequestMarshaller::getInstance(),
            Model\TradeRefundResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeRefundqueryRequest $request
     * @return Model\TradeRefundqueryResponse
     * @throws YopClientException
     */
    public function tradeRefundquery(Model\TradeRefundqueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeRefundqueryRequestMarshaller::getInstance(),
            Model\TradeRefundqueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeSettlementsqueryRequest $request
     * @return Model\TradeSettlementsqueryResponse
     * @throws YopClientException
     */
    public function tradeSettlementsquery(Model\TradeSettlementsqueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeSettlementsqueryRequestMarshaller::getInstance(),
            Model\TradeSettlementsqueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
