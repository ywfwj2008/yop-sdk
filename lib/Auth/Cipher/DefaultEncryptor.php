<?php


namespace Yeepay\Yop\Sdk\Auth\Cipher;


use Yeepay\Yop\Sdk\Auth\Encryptor;
use Yeepay\Yop\Sdk\Http\ContentType;
use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Security\Aes\AesEncryptor;

class DefaultEncryptor implements Encryptor
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var int
     */
    private $keyLength;

    /**
     * DefaultEncryptor constructor.
     * @param $base64EncodedKey string
     */
    public function __construct($base64EncodedKey)
    {
        $this->key = base64_decode($base64EncodedKey);
        $this->keyLength = strlen($this->key);
    }


    /**
     * @param $request
     * @return mixed
     */
    public function encrypt(Request $request)
    {
        if ($request->getContentType() == ContentType::APPLICATION_OCTET_STREAM) {
            return;
        }
        $request->addHeader(Headers::YOP_ENCRYPT_TYPE, "aes" . $this->keyLength);
        if (!empty($request->getParameters()) > 0) {
            $encryptedParameters = array();
            foreach ($request->getParameters() as $paramName => $paramValues) {
                $encryptedParamValues = array();
                foreach ($paramValues as $paramValue) {
                    $encryptedParamValues[] = AesEncryptor::encryptAndEncodeBase64($paramValue, $this->key);
                }
                $encryptedParameters[$paramName] = $encryptedParamValues;
            }
            $request->setParameters($encryptedParameters);
        }
        if (empty($request->getContent())) {
            if (is_string($request->getContent())) {
                $request->setContent(AesEncryptor::decodeBase64AndDecrypt($request->getContent(), $this->key));
            } else if (is_resource($request->getContent())) {
                //todo 忽略对resource的签名
            }
        }
    }

    /**
     * @param $content string
     * @return string
     */
    public function decrypt($content)
    {
        return AesEncryptor::decodeBase64AndDecrypt($content, $this->key);
    }
}
