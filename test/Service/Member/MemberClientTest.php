<?php


namespace Yeepay\Yop\Sdk\Service\Member;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Member\Model as Model;

class MemberClientTest extends TestCase
{


    private static $client;

    public static function setUpBeforeClass()
    {
        $data = \GuzzleHttp\json_decode('{"app_key":"app_Fe51qCyZWcEnDMtK","aes_secret_key":"ytrbMFjRqLpLgY58J6LN9Q==","server_root":"http://ycetest.yeepay.com:30228/yop-center","yos_server_root":"http://ycetest.yeepay.com:30228/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4g7dPL+CBeuzFmARI2GFjZpKODUROaMG+E6wdNfv5lhPqC3jjTIeljWU8AiruZLGRhl92QWcTjb3XonjaV6k9rf9adQtyv2FLS7bl2Vz2WgjJ0FJ5/qMaoXaT+oAgWFk2GypyvoIZsscsGpUStm6BxpWZpbPrGJR0N95un/130cQI9VCmfvgkkCaXt7TU1BbiYzkc8MDpLScGm/GUCB2wB5PclvOxvf5BR/zNVYywTEFmw2Jo0hIPPSWB5Yyf2mx950Fx8da56co/FxLdMwkDOO51Qg3fbaExQDVzTm8Odi++wVJEP1y34tlmpwFUVbAKIEbyyELmi/2S6GG0j9vNwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":10000,"read_timeout":30000,"max_conn_total":2000,"max_conn_per_route":1000}}', true);
        try {
            $appSdkConfig = new AppSdkConfig($data);
        } catch (YopClientException $e) {
            throw $e;
        }
        self::$client = MemberClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function commonBindingTest()
    {
        $request = new Model\CommonBindingRequest();

        $request->setCustomerNo("customerNo_example");
        $request->setRequestId("requestId_example");
        $request->setPlatformUserNo("platformUserNo_example");
        $request->setBusinessNo("businessNo_example");
        $request->setMobilePhone("mobilePhone_example");
        $request->setBankCardNum("bankCardNum_example");
        $request->setCvv2("cvv2_example");
        $request->setBindvalidthru("bindvalidthru_example");
        $request->setIsSmsVerify("isSmsVerify_example");
        $request->setPageNotifyUrl("pageNotifyUrl_example");
        $request->setSaleProductCode("saleProductCode_example");
        $request->setSmsTemplateId("smsTemplateId_example");
        try{
            $response = self::$client->commonBinding($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonBinding: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function commonBindingconfirmTest()
    {
        $request = new Model\CommonBindingconfirmRequest();

        $request->setCustomerNo("customerNo_example");
        $request->setRequestId("requestId_example");
        $request->setBusinessNo("businessNo_example");
        $request->setValidateCode("validateCode_example");
        $request->setPlatformUserNo("platformUserNo_example");
        try{
            $response = self::$client->commonBindingconfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonBindingconfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function commonQueryaccountTest()
    {
        $request = new Model\CommonQueryaccountRequest();

        $request->setCustomerNo("customerNo_example");
        $request->setRequestId("requestId_example");
        $request->setPlatformUserNo("platformUserNo_example");
        try{
            $response = self::$client->commonQueryaccount($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonQueryaccount: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function commonRechargeTest()
    {
        $request = new Model\CommonRechargeRequest();

        $request->setCustomerNo("customerNo_example");
        $request->setRequestId("requestId_example");
        $request->setPlatformUserNo("platformUserNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setBindId("bindId_example");
        $request->setAmount("amount_example");
        $request->setExtendRiskInfo("extendRiskInfo_example");
        $request->setDirectPayType("directPayType_example");
        $request->setProductName("productName_example");
        $request->setSaleProductCode("saleProductCode_example");
        $request->setNotifyURL("notifyURL_example");
        $request->setFrontCallBackUrl("frontCallBackUrl_example");
        $request->setPlatformName("platformName_example");
        $request->setIsYeepayCheck("isYeepayCheck_example");
        try{
            $response = self::$client->commonRecharge($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonRecharge: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function commonRegisterTest()
    {
        $request = new Model\CommonRegisterRequest();

        $request->setCustomerNo("customerNo_example");
        $request->setPlatformUserNo("platformUserNo_example");
        $request->setRegType("regType_example");
        $request->setLoginName("loginName_example");
        $request->setLoginPassword("loginPassword_example");
        $request->setEmail("email_example");
        $request->setRegIp("regIp_example");
        $request->setMemberType("memberType_example");
        $request->setTradePassword("tradePassword_example");
        $request->setMobile("mobile_example");
        try{
            $response = self::$client->commonRegister($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonRegister: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function commonSendsmsTest()
    {
        $request = new Model\CommonSendsmsRequest();

        $request->setBusinessNo("businessNo_example");
        try{
            $response = self::$client->commonSendsms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonSendsms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function commonTransferListTest()
    {
        $request = new Model\CommonTransferListRequest();

        $request->setPlatformUserNo("platformUserNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->commonTransferList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonTransferList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function commonTransferPublicTest()
    {
        $request = new Model\CommonTransferPublicRequest();

        $request->setCustomerNo("customerNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setPlatformUserNo("platformUserNo_example");
        $request->setTargetPlatformUserNo("targetPlatformUserNo_example");
        $request->setAmount("amount_example");
        $request->setNeedCalFee(true);
        try{
            $response = self::$client->commonTransferPublic($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonTransferPublic: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function commonUnbindingTest()
    {
        $request = new Model\CommonUnbindingRequest();

        $request->setCustomerNo("customerNo_example");
        $request->setRequestId("requestId_example");
        $request->setPlatformUserNo("platformUserNo_example");
        $request->setBindId(789);
        try{
            $response = self::$client->commonUnbinding($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonUnbinding: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function commonVerifyTest()
    {
        $request = new Model\CommonVerifyRequest();

        $request->setBusinessNo("businessNo_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCredentialsNo("credentialsNo_example");
        $request->setMobilePhone("mobilePhone_example");
        $request->setBankCardNum("bankCardNum_example");
        $request->setCvv2("cvv2_example");
        $request->setBindvalidthru("bindvalidthru_example");
        $request->setIsBind("isBind_example");
        $request->setPoliceAuth(true);
        $request->setOperatorAuth(true);
        $request->setPageNotifyUrl("pageNotifyUrl_example");
        $request->setIsSmsVerify("isSmsVerify_example");
        $request->setCustomerNo("customerNo_example");
        $request->setRequestId("requestId_example");
        $request->setPlatformUserNo("platformUserNo_example");
        $request->setSaleProductCode("saleProductCode_example");
        try{
            $response = self::$client->commonVerify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonVerify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function commonVerifyconfirmTest()
    {
        $request = new Model\CommonVerifyconfirmRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Member\Model\VerifyRequestConfirmDTO());
        try{
            $response = self::$client->commonVerifyconfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MemberClient->commonVerifyconfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
}
