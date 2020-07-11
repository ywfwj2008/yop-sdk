<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Frontcashier\Model as Model;

class FrontcashierClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * FrontcashierClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BindcardConfirmRequest $request
     * @return Model\BindcardConfirmResponse
     * @throws YopClientException
     */
    public function bindcardConfirm(Model\BindcardConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardConfirmRequestMarshaller::getInstance(),
            Model\BindcardConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardGetcardbinRequest $request
     * @return Model\BindcardGetcardbinResponse
     * @throws YopClientException
     */
    public function bindcardGetcardbin(Model\BindcardGetcardbinRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardGetcardbinRequestMarshaller::getInstance(),
            Model\BindcardGetcardbinResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardPayerrequestRequest $request
     * @return Model\BindcardPayerrequestResponse
     * @throws YopClientException
     */
    public function bindcardPayerrequest(Model\BindcardPayerrequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardPayerrequestRequestMarshaller::getInstance(),
            Model\BindcardPayerrequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardQueryorderRequest $request
     * @return Model\BindcardQueryorderResponse
     * @throws YopClientException
     */
    public function bindcardQueryorder(Model\BindcardQueryorderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardQueryorderRequestMarshaller::getInstance(),
            Model\BindcardQueryorderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardRequestRequest $request
     * @return Model\BindcardRequestResponse
     * @throws YopClientException
     */
    public function bindcardRequest(Model\BindcardRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardRequestRequestMarshaller::getInstance(),
            Model\BindcardRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindpayConfirmRequest $request
     * @return Model\BindpayConfirmResponse
     * @throws YopClientException
     */
    public function bindpayConfirm(Model\BindpayConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindpayConfirmRequestMarshaller::getInstance(),
            Model\BindpayConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindpayRequestRequest $request
     * @return Model\BindpayRequestResponse
     * @throws YopClientException
     */
    public function bindpayRequest(Model\BindpayRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindpayRequestRequestMarshaller::getInstance(),
            Model\BindpayRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindpaySendsmsRequest $request
     * @return Model\BindpaySendsmsResponse
     * @throws YopClientException
     */
    public function bindpaySendsms(Model\BindpaySendsmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindpaySendsmsRequestMarshaller::getInstance(),
            Model\BindpaySendsmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EntrustConfirmRequest $request
     * @return Model\EntrustConfirmResponse
     * @throws YopClientException
     */
    public function entrustConfirm(Model\EntrustConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EntrustConfirmRequestMarshaller::getInstance(),
            Model\EntrustConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EntrustPayRequest $request
     * @return Model\EntrustPayResponse
     * @throws YopClientException
     */
    public function entrustPay(Model\EntrustPayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EntrustPayRequestMarshaller::getInstance(),
            Model\EntrustPayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EntrustQueryRequest $request
     * @return Model\EntrustQueryResponse
     * @throws YopClientException
     */
    public function entrustQuery(Model\EntrustQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EntrustQueryRequestMarshaller::getInstance(),
            Model\EntrustQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EntrustRequestRequest $request
     * @return Model\EntrustRequestResponse
     * @throws YopClientException
     */
    public function entrustRequest(Model\EntrustRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EntrustRequestRequestMarshaller::getInstance(),
            Model\EntrustRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
