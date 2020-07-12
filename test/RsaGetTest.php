<?php
require_once ("../lib/YopRsaClient.php");

//Get请求 非对称秘钥
function get_rsa(){
    YopConfig::$debug=true;

    /*商户私钥*/
    $private_key ="MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCRwYA7qq0OkTsmYbEamnh+vUipRzDWox+m6M6Bmac84nUMArbXURGYW64ELs0YI5a/wFaEbtLxlop9agzuP1MP4bp4H7s5Vvi88l+JYhb33BVaLFZJg6mIqn3963sOER1xMQ1bqDPeLxxPSOJ4sbPVzd80FFsToPRmeph5sVIgzg65YWsXwIKJ6R93wCGwMrkZ3hpfJxajQtMXGR4G7lJwT2qs+XFfdmtmy8SrDwYxpAR3zUB3tkV6OHf1U9ghkytL9DAzYzgR1iSI+jCR1smQ2U8UY2ocKSbkXcdb8dMf8NW4cmMqVfkcjZF4j0tLKKQrUI59lqiq5ANThGDGKCiTAgMBAAECggEAW3cYJ1k1fBy7B5zqbI1e6/mQLVoVVbvL0wvo+v8XKWfal4zkfD3NUtTFYK6V2X4LzYy/Ph/lk+EqSwVP0/o8/4xhXZxb+uGO+dMHDMlXLHcZlxqXk05iBvcmVT9+Wxd2aF+lyEzHL7hUhZRxOdgZyCOG28GiXbD1bZGlOUiDBz4U16/SjHFSgtgG+xBnAaMT/BQwVxx7zDZ1iIDZ8B3OepqVY/ZmwvFQKpZYsvryAEDhTSg/7zXWDrG7jsXeaMvAN4ZpJ/AOoeStF+CvMm1MWNNwN79fvT3iuxCtoZJH07h2eRGk9ONSjRCqo66MTLOLJAw2nVn1bdj2R171/Z33sQKBgQDK8d8i36rM+ZlAZYF4/BOD4N4YbUXLl1J+acR7LbsH8TDYU85cBtz0BU0wp3ZbfQ/aQ3KelwqPRwLbWjQr4QECFSBjXi1Gl61z/EeKR4X7gszbxnpP1OLceLLrL7ok1oHX014ow7C+FmoRjX9BXMf83ArCL7aLjr3n3afLMYdWfQKBgQC33D7nWPcAshjCIbkv3jnKP7vxfau985xcM/uFADgEo71HTI7mOoiKXfShE+t//vjFvIerAanZTfCdYxq16LBIV7CzW+HhYVa/L9NcO8WAixF8aPdJLzlxZOk3Kjazd0IvRcx+YnXtABFzHi9/uJJUBlW0V27hV0Txqkqa2wfYTwKBgGTp2JayuW+rPXU0BClwzxNooYdr7qTJ3g9V8Il/t9y/JhartZU1JHGCoVtsKgJcMaHKoBgT6wBLwzPnqsGW5LVwY+aFUeYkTe+6pqgv4IOsCsnN68v+g8A1lGI2HU1sDKyRQeTrSdt7scqAnaKWzCsED6V3rEHA/NVq9qCnRDDRAoGAT5T+iUbBy0RLYSQVszl+TCOgJxwdTV/3yxUZBm2c0a1KDWV+6PpnBXU7oMktgz6K0ZQUKRnUOeH5hzZRZnGsc/O44TmhINvwH1sFIoQgrc4EKJSKjNvrAkEKjT0xZib1t95/cCkQICCKbQigyKjMdaA0UpYRwWnzxqLOHg82axMCgYAjPK11y7tTnQjKbpqnNIX6mVo7eVKB8zO7ecVyUWw90URtkXgzCjR1TSefpWFTeFiJMB/9xuXqkt2R/S8Ad7uW1NYck+eu22rbsDFk8VeO148gjeDrdq6KaJLg3f+8wZMGRLyHkJWmdHcuScEPd2AfGTcZXm+AWf3U8s6qNA1svA==";

    $request = new YopRequest("yop-boss", $private_key);
    //加入请求参数
    $request->addParam("request_flow_id", "12345678");//请求流水标识
    $request->addParam("name", "张文康");//请求流水标识
    $request->addParam("id_card_number", "370982199101186691");//请求流水标识

    //提交Post请求
    $response = YopRsaClient::get("/rest/v3.0/auth/idcard", $request);
}

get_rsa();
