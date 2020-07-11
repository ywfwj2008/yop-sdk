<?php


namespace Yeepay\Yop\Sdk\Service\Router;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Router\Model as Model;

class RouterClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * RouterClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ModifyPayProductInfoRequest $request
     * @return Model\ModifyPayProductInfoResponse
     * @throws YopClientException
     */
    public function modifyPayProductInfo(Model\ModifyPayProductInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ModifyPayProductInfoRequestMarshaller::getInstance(),
            Model\ModifyPayProductInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenPayAsyncReportConfigRequest $request
     * @return Model\OpenPayAsyncReportConfigResponse
     * @throws YopClientException
     */
    public function openPayAsyncReportConfig(Model\OpenPayAsyncReportConfigRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenPayAsyncReportConfigRequestMarshaller::getInstance(),
            Model\OpenPayAsyncReportConfigResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenPayAsyncReportReportRequest $request
     * @return Model\OpenPayAsyncReportReportResponse
     * @throws YopClientException
     */
    public function openPayAsyncReportReport(Model\OpenPayAsyncReportReportRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenPayAsyncReportReportRequestMarshaller::getInstance(),
            Model\OpenPayAsyncReportReportResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenPayReportQueryRequest $request
     * @return Model\OpenPayReportQueryResponse
     * @throws YopClientException
     */
    public function openPayReportQuery(Model\OpenPayReportQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenPayReportQueryRequestMarshaller::getInstance(),
            Model\OpenPayReportQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryPayProductInfoRequest $request
     * @return Model\QueryPayProductInfoResponse
     * @throws YopClientException
     */
    public function queryPayProductInfo(Model\QueryPayProductInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryPayProductInfoRequestMarshaller::getInstance(),
            Model\QueryPayProductInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
