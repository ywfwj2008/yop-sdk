<?php
include 'conf.php';
require_once("./lib/YopClient3.php");


function object_array($array)
{
    if (is_object($array)) {
        $array = (array)$array;
    }
    if (is_array($array)) {
        foreach ($array as $key => $value) {
            $array[$key] = object_array($value);
        }
    }
    return $array;
}


function fee()
{


    global $merchantNo;
    global $parentMerchantNo;
    global $private_key;
    global $yop_public_key;
    global $appKey;
    $request = new YopRequest($appKey, $private_key);
    $request->addParam("bankCardNo", $_REQUEST['bankCardNo']);


    $response = YopClient3::post("/rest/v1.0/sys/merchant/query-bank-card-bin-info", $request);
    if ($response->validSign == 1) {
        echo "返回结果签名验证成功!\n";
    }
    //取得返回结果
    $data = object_array($response);

    return $data;

}

$array = fee();

if ($array['result'] == NULL) {
    echo "error:" . $array['error'];
    return;
} else {
    $result = $array['result'];

}
?>


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> 卡BIN查询结果</title>
</head>
<body>
<br/> <br/>
<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
    <tr>
        <th align="center" height="30" colspan="5" bgcolor="#6BBE18">
            卡BIN查询结果
        </th>
    </tr>

    <tr>
        <td width="25%" align="left">&nbsp;返回码</td>
        <td width="5%" align="center"> :</td>
        <td width="45" align="left"> <?php echo $result['returnCode']; ?> </td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">returnCode</td>
    </tr>

    <tr>
        <td width="25%" align="left">&nbsp;返回信息</td>
        <td width="5%" align="center"> :</td>
        <td width="35%" align="left"> <?php echo $result['returnMsg']; ?> </td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">returnMsg</td>
    </tr>


    <tr>
        <td width="25%" align="left">&nbsp;总行编码</td>
        <td width="5%" align="center"> :</td>
        <td width="45" align="left"> <?php echo $result['bankId']; ?> </td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">bankId</td>
    </tr>

    <tr>
        <td width="25%" align="left">&nbsp;银行代码</td>
        <td width="5%" align="center"> :</td>
        <td width="35%" align="left"> <?php echo $result['bankCode']; ?> </td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">bankCode</td>
    </tr>

    <tr>
        <td width="25%" align="left">&nbsp;银行名称</td>
        <td width="5%" align="center"> :</td>
        <td width="35%" align="left"> <?php echo $result['bankName']; ?> </td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">bankName</td>
    </tr>
    <tr>
        <td width="25%" align="left">&nbsp;卡类型</td>
        <td width="5%" align="center"> :</td>
        <td width="35%" align="left"> <?php echo $result['cardType']; ?> </td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">cardType</td>
    </tr>


    <tr>
        <td width="25%" align="left">&nbsp;卡名</td>
        <td width="5%" align="center"> :</td>
        <td width="35%" align="left"> <?php echo $result['cardName']; ?> </td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">cardName</td>
    </tr>


    <tr>
        <td width="25%" align="left">&nbsp;卡号长度</td>
        <td width="5%" align="center"> :</td>
        <td width="35%" align="left"> <?php echo $result['cardLength']; ?> </td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">cardLength</td>
    </tr>


    <tr>
        <td width="25%" align="left">&nbsp;发卡行标识长度</td>
        <td width="5%" align="center"> :</td>
        <td width="35%" align="left"> <?php echo $result['verifyLength']; ?> </td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">verifyLength</td>
    </tr>


    <tr>
        <td width="25%" align="left">&nbsp;发卡行标识取值</td>
        <td width="5%" align="center"> :</td>
        <td width="35%" align="left"> <?php echo $result['verifyCode']; ?> </td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">verifyCode</td>
    </tr>


</table>

</body>
</html>
