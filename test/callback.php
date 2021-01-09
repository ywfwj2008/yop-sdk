<?php
include 'conf.php';
require_once("./lib/YopClient.php");
require_once("./lib/YopClient3.php");
require_once("./lib/Util/YopSignUtils.php");

//���֪ͨ����ԭ������
function callback($source)
{

    global $merchantno;
    global $private_key;
    global $yop_public_key;
    //���ص�����
    //��ԭ��ԭ��
    return YopSignUtils::decrypt($source, $private_key, $yop_public_key);

}

$data = $_REQUEST["response"];
//var_dump($data);
callback($data);
echo "SUCCESS";
?>
