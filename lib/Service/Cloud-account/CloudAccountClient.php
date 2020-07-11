<?php


namespace Yeepay\Yop\Sdk\Service\Cloud-account;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Cloud-account\Model as Model;

class CloudAccountClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * CloudAccountClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AccountTransferQueryTransferRequest $request
     * @return Model\AccountTransferQueryTransferResponse
     * @throws YopClientException
     */
    public function accountTransferQueryTransfer(Model\AccountTransferQueryTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountTransferQueryTransferRequestMarshaller::getInstance(),
            Model\AccountTransferQueryTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountTransferTransferRequest $request
     * @return Model\AccountTransferTransferResponse
     * @throws YopClientException
     */
    public function accountTransferTransfer(Model\AccountTransferTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountTransferTransferRequestMarshaller::getInstance(),
            Model\AccountTransferTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
