<?php


namespace Yeepay\Yop\Sdk\Service\Balance;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Yeepay\Yop\Sdk\Model\YosDownloadResponseUnMarshaller;
use Yeepay\Yop\Sdk\Service\Balance\Model as Model;

class BalanceClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * BalanceClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AccountQueryRequest $request
     * @return Model\AccountQueryResponse
     * @throws YopClientException
     */
    public function accountQuery(Model\AccountQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountQueryRequestMarshaller::getInstance(),
            Model\AccountQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryCustomerAmountRequest $request
     * @return Model\QueryCustomerAmountResponse
     * @throws YopClientException
     */
    public function queryCustomerAmount(Model\QueryCustomerAmountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryCustomerAmountRequestMarshaller::getInstance(),
            Model\QueryCustomerAmountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferBatchSendRequest $request
     * @return Model\TransferBatchSendResponse
     * @throws YopClientException
     */
    public function transferBatchSend(Model\TransferBatchSendRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferBatchSendRequestMarshaller::getInstance(),
            Model\TransferBatchSendResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferSendRequest $request
     * @return Model\TransferSendResponse
     * @throws YopClientException
     */
    public function transferSend(Model\TransferSendRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferSendRequestMarshaller::getInstance(),
            Model\TransferSendResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YopSimpleRemitDownloadElectronicReceiptRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function yopSimpleRemitDownloadElectronicReceipt(Model\YopSimpleRemitDownloadElectronicReceiptRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBatchNo() == null) {
            throw new YopClientException("request.batchNo is required.");
        }
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YopSimpleRemitDownloadElectronicReceiptRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
