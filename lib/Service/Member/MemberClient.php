<?php


namespace Yeepay\Yop\Sdk\Service\Member;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Member\Model as Model;

class MemberClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MemberClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\CommonBindingRequest $request
     * @return Model\CommonBindingResponse
     * @throws YopClientException
     */
    public function commonBinding(Model\CommonBindingRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonBindingRequestMarshaller::getInstance(),
            Model\CommonBindingResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CommonBindingconfirmRequest $request
     * @return Model\CommonBindingconfirmResponse
     * @throws YopClientException
     */
    public function commonBindingconfirm(Model\CommonBindingconfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonBindingconfirmRequestMarshaller::getInstance(),
            Model\CommonBindingconfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CommonQueryaccountRequest $request
     * @return Model\CommonQueryaccountResponse
     * @throws YopClientException
     */
    public function commonQueryaccount(Model\CommonQueryaccountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonQueryaccountRequestMarshaller::getInstance(),
            Model\CommonQueryaccountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CommonRechargeRequest $request
     * @return Model\CommonRechargeResponse
     * @throws YopClientException
     */
    public function commonRecharge(Model\CommonRechargeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonRechargeRequestMarshaller::getInstance(),
            Model\CommonRechargeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CommonRegisterRequest $request
     * @return Model\CommonRegisterResponse
     * @throws YopClientException
     */
    public function commonRegister(Model\CommonRegisterRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonRegisterRequestMarshaller::getInstance(),
            Model\CommonRegisterResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CommonSendsmsRequest $request
     * @return Model\CommonSendsmsResponse
     * @throws YopClientException
     */
    public function commonSendsms(Model\CommonSendsmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonSendsmsRequestMarshaller::getInstance(),
            Model\CommonSendsmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CommonTransferListRequest $request
     * @return Model\CommonTransferListResponse
     * @throws YopClientException
     */
    public function commonTransferList(Model\CommonTransferListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonTransferListRequestMarshaller::getInstance(),
            Model\CommonTransferListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CommonTransferPublicRequest $request
     * @return Model\CommonTransferPublicResponse
     * @throws YopClientException
     */
    public function commonTransferPublic(Model\CommonTransferPublicRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonTransferPublicRequestMarshaller::getInstance(),
            Model\CommonTransferPublicResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CommonUnbindingRequest $request
     * @return Model\CommonUnbindingResponse
     * @throws YopClientException
     */
    public function commonUnbinding(Model\CommonUnbindingRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonUnbindingRequestMarshaller::getInstance(),
            Model\CommonUnbindingResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CommonVerifyRequest $request
     * @return Model\CommonVerifyResponse
     * @throws YopClientException
     */
    public function commonVerify(Model\CommonVerifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonVerifyRequestMarshaller::getInstance(),
            Model\CommonVerifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CommonVerifyconfirmRequest $request
     * @return Model\CommonVerifyconfirmResponse
     * @throws YopClientException
     */
    public function commonVerifyconfirm(Model\CommonVerifyconfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CommonVerifyconfirmRequestMarshaller::getInstance(),
            Model\CommonVerifyconfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
