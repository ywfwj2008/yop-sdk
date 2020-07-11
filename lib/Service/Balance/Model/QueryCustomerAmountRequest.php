<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class QueryCustomerAmountRequest extends BaseRequest
{


    public static function getOperationId()
    {
        return 'queryCustomerAmount';
    }


}
