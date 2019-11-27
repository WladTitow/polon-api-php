<?php

namespace Polon;

use Polon\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class PolonClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\GetItemsAvail $parameters
     * @return ResultInterface|Type\GetItemsAvailResponse
     * @throws SoapException
     */
    public function getItemsAvail(\Polon\Type\GetItemsAvail $parameters) : \Polon\Type\GetItemsAvailResponse
    {
        $response = $this->call('GetItemsAvail', $parameters);
        return $response;
    }

    /**
     * @param RequestInterface|Type\GetMaterialData $parameters
     * @return ResultInterface|Type\GetMaterialDataResponse
     * @throws SoapException
     */
    public function getMaterialData(\Polon\Type\GetMaterialData $parameters) : \Polon\Type\GetMaterialDataResponse
    {
        return $this->call('GetMaterialData', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetPriceData $parameters
     * @return ResultInterface|Type\GetPriceDataResponse
     * @throws SoapException
     */
    public function getPriceData(\Polon\Type\GetPriceData $parameters) : \Polon\Type\GetPriceDataResponse
    {
        return $this->call('GetPriceData', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetExcludedDates $parameters
     * @return ResultInterface|Type\GetExcludedDatesResponse
     * @throws SoapException
     */
    public function getExcludedDates(\Polon\Type\GetExcludedDates $parameters) : \Polon\Type\GetExcludedDatesResponse
    {
        return $this->call('GetExcludedDates', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetBalance $parameters
     * @return ResultInterface|Type\GetBalanceResponse
     * @throws SoapException
     */
    public function getBalance(\Polon\Type\GetBalance $parameters) : \Polon\Type\GetBalanceResponse
    {
        return $this->call('GetBalance', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetOrder $parameters
     * @return ResultInterface|Type\GetOrderResponse
     * @throws SoapException
     */
    public function getOrder(\Polon\Type\GetOrder $parameters) : \Polon\Type\GetOrderResponse
    {
        return $this->call('GetOrder', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetOrderCreate $parameters
     * @return ResultInterface|Type\SetOrderCreateResponse
     * @throws SoapException
     */
    public function setOrderCreate(\Polon\Type\SetOrderCreate $parameters) : \Polon\Type\SetOrderCreateResponse
    {
        return $this->call('SetOrderCreate', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetOrderCreateExtended $parameters
     * @return ResultInterface|Type\SetOrderCreateExtendedResponse
     * @throws SoapException
     */
    public function setOrderCreateExtended(\Polon\Type\SetOrderCreateExtended $parameters) : \Polon\Type\SetOrderCreateExtendedResponse
    {
        return $this->call('SetOrderCreateExtended', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetOrderChange $parameters
     * @return ResultInterface|Type\SetOrderChangeResponse
     * @throws SoapException
     */
    public function setOrderChange(\Polon\Type\SetOrderChange $parameters) : \Polon\Type\SetOrderChangeResponse
    {
        return $this->call('SetOrderChange', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetSignOrder $parameters
     * @return ResultInterface|Type\SetSignOrderResponse
     * @throws SoapException
     */
    public function setSignOrder(\Polon\Type\SetSignOrder $parameters) : \Polon\Type\SetSignOrderResponse
    {
        return $this->call('SetSignOrder', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetDeleteOrder $parameters
     * @return ResultInterface|Type\SetDeleteOrderResponse
     * @throws SoapException
     */
    public function setDeleteOrder(\Polon\Type\SetDeleteOrder $parameters) : \Polon\Type\SetDeleteOrderResponse
    {
        return $this->call('SetDeleteOrder', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetFinalOrder $parameters
     * @return ResultInterface|Type\SetFinalOrderResponse
     * @throws SoapException
     */
    public function setFinalOrder(\Polon\Type\SetFinalOrder $parameters) : \Polon\Type\SetFinalOrderResponse
    {
        return $this->call('SetFinalOrder', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetDeliveryRoute $parameters
     * @return ResultInterface|Type\SetDeliveryRouteResponse
     * @throws SoapException
     */
    public function setDeliveryRoute(\Polon\Type\SetDeliveryRoute $parameters) : \Polon\Type\SetDeliveryRouteResponse
    {
        return $this->call('SetDeliveryRoute', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetOperationResult $parameters
     * @return ResultInterface|Type\GetOperationResultResponse
     * @throws SoapException
     */
    public function getOperationResult(\Polon\Type\GetOperationResult $parameters) : \Polon\Type\GetOperationResultResponse
    {
        return $this->call('GetOperationResult', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetOrderCreatePhys $parameters
     * @return ResultInterface|Type\SetOrderCreatePhysResponse
     * @throws SoapException
     */
    public function setOrderCreatePhys(\Polon\Type\SetOrderCreatePhys $parameters) : \Polon\Type\SetOrderCreatePhysResponse
    {
        return $this->call('SetOrderCreatePhys', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetOrderGUID $parameters
     * @return ResultInterface|Type\GetOrderGUIDResponse
     * @throws SoapException
     */
    public function getOrderGUID(\Polon\Type\GetOrderGUID $parameters) : \Polon\Type\GetOrderGUIDResponse
    {
        return $this->call('GetOrderGUID', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetOrderList $parameters
     * @return ResultInterface|Type\GetOrderListResponse
     * @throws SoapException
     */
    public function getOrderList(\Polon\Type\GetOrderList $parameters) : \Polon\Type\GetOrderListResponse
    {
        return $this->call('GetOrderList', $parameters);
    }


}

