﻿<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #107929">
    <tr>
        <td>
            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                </tr>


                <tr>
                    <td colspan="2" bgcolor="#CEE7BD">子商户结算银行卡修改接口</td>
                </tr>

                <form method="post" action="sendChange.php" targe="_blank">
                    <tr>
                        <td align="left">&nbsp;&nbsp;入网请求号</td>
                        <td align="left">&nbsp;&nbsp;<input size="50" type="text" name="requestNo" id="requestNo"
                                                            value=""/>
                            &nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
                    </tr>

                    <tr>
                        <td align="left">&nbsp;&nbsp;短信验证码</td>
                        <td align="left">&nbsp;&nbsp;<input size="50" type="text" name="merAuthorizeNum"
                                                            id="merAuthorizeNum" value=""/>
                            &nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
                    </tr>

                    <tr>
                        <td align="left">&nbsp;&nbsp;银行卡号</td>
                        <td align="left">&nbsp;&nbsp;<input size="50" type="text" name="bankcardNo" id="bankcardNo"
                                                            value=""/>
                            &nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
                    </tr>

                    <tr>
                        <td align="left">&nbsp;&nbsp;开户银行总行银行编码</td>
                        <td align="left">&nbsp;&nbsp;<input size="50" type="text" name="headBankName" id="headBankName"
                                                            value=""/>
                            &nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
                    </tr>


                    <tr>
                        <td align="left">&nbsp;&nbsp;开户银行分行银行编码</td>
                        <td align="left">&nbsp;&nbsp;<input size="50" type="text" name="bankName" id="bankName"
                                                            value=""/>
                            &nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
                    </tr>

                    <tr>
                        <td align="left">&nbsp;&nbsp;开户省编码</td>
                        <td align="left">&nbsp;&nbsp;<input size="50" type="text" name="bankProvince" id="bankProvince"
                                                            value=""/>
                            &nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
                    </tr>


                    <tr>
                        <td align="left">&nbsp;&nbsp;开户市编码</td>
                        <td align="left">&nbsp;&nbsp;<input size="50" type="text" name="bankCity" id="bankCity"
                                                            value=""/>
                            &nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
                    </tr>


                    <tr>
                        <td align="left">&nbsp;&nbsp;商户回调地址</td>
                        <td align="left">&nbsp;&nbsp;<input size="50" type="text" name="callbackurl" id="callbackurl"
                                                            value=""/>
                        </td>
                    </tr>


                    <tr>
                        <td align="left">&nbsp;</td>
                        <td align="left">&nbsp;&nbsp;<input type="submit" value="submit"/></td>
                    </tr>
                </form>
                <tr>
                    <td height="5" bgcolor="#6BBE18" colspan="2"></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
