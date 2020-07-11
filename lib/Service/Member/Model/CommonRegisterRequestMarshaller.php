<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CommonRegisterRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CommonRegisterRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonRegisterRequestMarshaller();
    }

    /**
     * @return CommonRegisterRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Member';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/member/common/register';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CommonRegisterRequest $request
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
        if($request->getCustomerNo() != null){
            $internalRequest->addParameter('customerNo', ObjectSerializer::sanitizeForSerialization($request->getCustomerNo(), 'string'));
        }
        if($request->getPlatformUserNo() != null){
            $internalRequest->addParameter('platformUserNo', ObjectSerializer::sanitizeForSerialization($request->getPlatformUserNo(), 'string'));
        }
        if($request->getRegType() != null){
            $internalRequest->addParameter('regType', ObjectSerializer::sanitizeForSerialization($request->getRegType(), 'string'));
        }
        if($request->getLoginName() != null){
            $internalRequest->addParameter('loginName', ObjectSerializer::sanitizeForSerialization($request->getLoginName(), 'string'));
        }
        if($request->getLoginPassword() != null){
            $internalRequest->addParameter('loginPassword', ObjectSerializer::sanitizeForSerialization($request->getLoginPassword(), 'string'));
        }
        if($request->getEmail() != null){
            $internalRequest->addParameter('email', ObjectSerializer::sanitizeForSerialization($request->getEmail(), 'string'));
        }
        if($request->getRegIp() != null){
            $internalRequest->addParameter('regIp', ObjectSerializer::sanitizeForSerialization($request->getRegIp(), 'string'));
        }
        if($request->getMemberType() != null){
            $internalRequest->addParameter('memberType', ObjectSerializer::sanitizeForSerialization($request->getMemberType(), 'string'));
        }
        if($request->getTradePassword() != null){
            $internalRequest->addParameter('tradePassword', ObjectSerializer::sanitizeForSerialization($request->getTradePassword(), 'string'));
        }
        if($request->getMobile() != null){
            $internalRequest->addParameter('mobile', ObjectSerializer::sanitizeForSerialization($request->getMobile(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CommonRegisterRequestMarshaller::__init();
