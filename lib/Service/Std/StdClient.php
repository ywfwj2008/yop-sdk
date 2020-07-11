<?php


namespace Yeepay\Yop\Sdk\Service\Std;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Std\Model as Model;

class StdClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * StdClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BillCashdaydownloadRequest $request
     * @return Model\BillCashdaydownloadResponse
     * @throws YopClientException
     */
    public function billCashdaydownload(Model\BillCashdaydownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillCashdaydownloadRequestMarshaller::getInstance(),
            Model\BillCashdaydownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillRemitdaydownloadRequest $request
     * @return Model\BillRemitdaydownloadResponse
     * @throws YopClientException
     */
    public function billRemitdaydownload(Model\BillRemitdaydownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillRemitdaydownloadRequestMarshaller::getInstance(),
            Model\BillRemitdaydownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillYfcashdaydownloadRequest $request
     * @return Model\BillYfcashdaydownloadResponse
     * @throws YopClientException
     */
    public function billYfcashdaydownload(Model\BillYfcashdaydownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillYfcashdaydownloadRequestMarshaller::getInstance(),
            Model\BillYfcashdaydownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillYftradedaydownloadRequest $request
     * @return Model\BillYftradedaydownloadResponse
     * @throws YopClientException
     */
    public function billYftradedaydownload(Model\BillYftradedaydownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillYftradedaydownloadRequestMarshaller::getInstance(),
            Model\BillYftradedaydownloadResponseUnMarshaller::getInstance());
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
