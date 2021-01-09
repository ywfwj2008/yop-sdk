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


function infoquery()
{

    global $merchantNo;
    global $parentMerchantNo;
    global $private_key;
    global $yop_public_key;
    global $appKey;
    $request = new YopRequest($appKey, $private_key);
    $request->addParam("parentMerchantNo", $parentMerchantNo);
    $request->addParam("merchantNo", $merchantNo);
    $request->addParam("requestNo", $_REQUEST['requestNo']);

    $response = YopClient3::post("/rest/v1.0/router/query/pay-product-info", $request);
//	var_dump(  $response );
    if ($response->validSign == 1) {
        echo "返回结果签名验证成功!\n";
    }
    //取得返回结果
    $data = object_array($response);

    return $data;

}

$array = infoquery();

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
    <title> 开通产品及费率信息查询接口查询结果</title>
</head>
<body>
<br/> <br/>
<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
    <tr>
        <th align="center" height="30" colspan="5" bgcolor="#6BBE18">
            查询结果
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
        <td width="25%" align="left">&nbsp;子商户编号</td>
        <td width="5%" align="center"> :</td>
        <td width="35%" align="left"> <?php echo $result['merchantNo']; ?></td>
        <td width="5%" align="center"> -</td>
        <td width="30%" align="left">merchantNo</td>
    </tr>


    <tr>
        <td width="25%" align="left">&nbsp;开通产品</td>
        <td width="5%" align="center"> :</td>
        <td width="55%" align="left"><textarea id="openProductInfo" style="width:100%;" name="openProductInfo"
                                               rows="10">  <?php echo $result['openProductInfo']; ?> </textarea></td>
        <td width="5%" align="center"> -</td>
        <td width="10%" align="left">openProductInfo</td>
    </tr>


</table>

</body>
</html>
