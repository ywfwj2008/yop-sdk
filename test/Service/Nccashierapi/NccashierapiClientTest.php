<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Nccashierapi\Model as Model;

class NccashierapiClientTest extends TestCase
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
        self::$client = NccashierapiClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function apiOrderpayTest()
    {
        $request = new Model\ApiOrderpayRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount("orderAmount_example");
        $request->setTimeoutExpress("timeoutExpress_example");
        $request->setTimeoutExpressType("timeoutExpressType_example");
        $request->setRequestDate("requestDate_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setGoodsParamExt("goodsParamExt_example");
        $request->setIndustryParamExt("industryParamExt_example");
        $request->setRiskParamExt("riskParamExt_example");
        $request->setMemo("memo_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setHmac("hmac_example");
        $request->setDivideDetail("divideDetail_example");
        $request->setCsUrl("csUrl_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setTimeoutNotifyUrl("timeoutNotifyUrl_example");
        $request->setPayTool("payTool_example");
        $request->setPayType("payType_example");
        $request->setAppId("appId_example");
        $request->setOpenId("openId_example");
        $request->setMerchantTerminalId("merchantTerminalId_example");
        $request->setPayEmpowerNo("payEmpowerNo_example");
        $request->setMerchantStoreNo("merchantStoreNo_example");
        $request->setUserIp("userIp_example");
        $request->setExtParamMap("extParamMap_example");
        try{
            $response = self::$client->apiOrderpay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling NccashierapiClient->apiOrderpay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function apiPayTest()
    {
        $request = new Model\ApiPayRequest();

        $request->setPayTool("payTool_example");
        $request->setPayType("payType_example");
        $request->setToken("token_example");
        $request->setAppId("appId_example");
        $request->setOpenId("openId_example");
        $request->setVersion("version_example");
        $request->setPayEmpowerNo("payEmpowerNo_example");
        $request->setMerchantTerminalId("merchantTerminalId_example");
        $request->setMerchantStoreNo("merchantStoreNo_example");
        $request->setUserIp("userIp_example");
        $request->setExtParamMap("extParamMap_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        try{
            $response = self::$client->apiPay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling NccashierapiClient->apiPay: ', $e->getMessage(), PHP_EOL;
        }
    }
}
