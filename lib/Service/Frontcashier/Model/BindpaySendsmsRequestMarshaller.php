<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BindpaySendsmsRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BindpaySendsmsRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindpaySendsmsRequestMarshaller();
    }

    /**
     * @return BindpaySendsmsRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Frontcashier';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/frontcashier/bindpay/sendsms';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BindpaySendsmsRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getToken() != null){
            $internalRequest->addParameter('token', ObjectSerializer::sanitizeForSerialization($request->getToken(), 'string'));
        }
        if($request->getVersion() != null){
            $internalRequest->addParameter('version', ObjectSerializer::sanitizeForSerialization($request->getVersion(), 'string'));
        }
        if($request->getCardno() != null){
            $internalRequest->addParameter('cardno', ObjectSerializer::sanitizeForSerialization($request->getCardno(), 'string'));
        }
        if($request->getOwner() != null){
            $internalRequest->addParameter('owner', ObjectSerializer::sanitizeForSerialization($request->getOwner(), 'string'));
        }
        if($request->getIdno() != null){
            $internalRequest->addParameter('idno', ObjectSerializer::sanitizeForSerialization($request->getIdno(), 'string'));
        }
        if($request->getPhoneNo() != null){
            $internalRequest->addParameter('phoneNo', ObjectSerializer::sanitizeForSerialization($request->getPhoneNo(), 'string'));
        }
        if($request->getYpMobile() != null){
            $internalRequest->addParameter('ypMobile', ObjectSerializer::sanitizeForSerialization($request->getYpMobile(), 'string'));
        }
        if($request->getAvlidDate() != null){
            $internalRequest->addParameter('avlidDate', ObjectSerializer::sanitizeForSerialization($request->getAvlidDate(), 'string'));
        }
        if($request->getCvv2() != null){
            $internalRequest->addParameter('cvv2', ObjectSerializer::sanitizeForSerialization($request->getCvv2(), 'string'));
        }
        if($request->getIdCardType() != null){
            $internalRequest->addParameter('idCardType', ObjectSerializer::sanitizeForSerialization($request->getIdCardType(), 'string'));
        }
        if($request->getBankPWD() != null){
            $internalRequest->addParameter('bankPWD', ObjectSerializer::sanitizeForSerialization($request->getBankPWD(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BindpaySendsmsRequestMarshaller::__init();
