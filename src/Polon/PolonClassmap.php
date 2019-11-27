<?php

namespace Polon;

use Polon\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class PolonClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ExcludedDate', Type\ExcludedDate::class),
            new ClassMap('GetBalanceResult', Type\GetBalanceResult::class),
            new ClassMap('GetExcludedDatesResult', Type\GetExcludedDatesResult::class),
            new ClassMap('ExcludedDate_Tab', Type\ExcludedDateTab::class),
            new ClassMap('GetItemsAvailResult', Type\GetItemsAvailResult::class),
            new ClassMap('GetMaterialDataResult', Type\GetMaterialDataResult::class),
            new ClassMap('MaterialCharacteristics', Type\MaterialCharacteristics::class),
            new ClassMap('GetOperationResultResult', Type\GetOperationResultResult::class),
            new ClassMap('GetOrderListResult', Type\GetOrderListResult::class),
            new ClassMap('GetOrderResult', Type\GetOrderResult::class),
            new ClassMap('GetPriceDataResult', Type\GetPriceDataResult::class),
            new ClassMap('Material', Type\Material::class),
            new ClassMap('MaterialCharacteristic', Type\MaterialCharacteristic::class),
            new ClassMap('MaterialGroup', Type\MaterialGroup::class),
            new ClassMap('MaterialGroup_Tab', Type\MaterialGroupTab::class),
            new ClassMap('MaterialID', Type\MaterialID::class),
            new ClassMap('MaterialID_Tab', Type\MaterialIDTab::class),
            new ClassMap('Material_Tab', Type\MaterialTab::class),
            new ClassMap('NewOrderDate', Type\NewOrderDate::class),
            new ClassMap('Order', Type\Order::class),
            new ClassMap('OrderItem', Type\OrderItem::class),
            new ClassMap('OrderItems', Type\OrderItems::class),
            new ClassMap('OrderList', Type\OrderList::class),
            new ClassMap('OrderList_Tab', Type\OrderListTab::class),
            new ClassMap('Orders_Tab', Type\OrdersTab::class),
            new ClassMap('Personnel', Type\Personnel::class),
            new ClassMap('Personnel_Tab', Type\PersonnelTab::class),
            new ClassMap('Price', Type\Price::class),
            new ClassMap('Price_Tab', Type\PriceTab::class),
            new ClassMap('SetDeleteOrderResult', Type\SetDeleteOrderResult::class),
            new ClassMap('SetDeliveryRouteResult', Type\SetDeliveryRouteResult::class),
            new ClassMap('SetFinalOrderResult', Type\SetFinalOrderResult::class),
            new ClassMap('SetOrderChangeResult', Type\SetOrderChangeResult::class),
            new ClassMap('SetOrderCreateResult', Type\SetOrderCreateResult::class),
            new ClassMap('SetSignOrderResult', Type\SetSignOrderResult::class),
            new ClassMap('Vehicle', Type\Vehicle::class),
            new ClassMap('Vehicle_Tab', Type\VehicleTab::class),
            new ClassMap('GetItemsAvail', Type\GetItemsAvail::class),
            new ClassMap('GetItemsAvailResponse', Type\GetItemsAvailResponse::class),
            new ClassMap('GetMaterialData', Type\GetMaterialData::class),
            new ClassMap('GetMaterialDataResponse', Type\GetMaterialDataResponse::class),
            new ClassMap('GetPriceData', Type\GetPriceData::class),
            new ClassMap('GetPriceDataResponse', Type\GetPriceDataResponse::class),
            new ClassMap('GetExcludedDates', Type\GetExcludedDates::class),
            new ClassMap('GetExcludedDatesResponse', Type\GetExcludedDatesResponse::class),
            new ClassMap('GetBalance', Type\GetBalance::class),
            new ClassMap('GetBalanceResponse', Type\GetBalanceResponse::class),
            new ClassMap('GetOrder', Type\GetOrder::class),
            new ClassMap('GetOrderResponse', Type\GetOrderResponse::class),
            new ClassMap('SetOrderCreate', Type\SetOrderCreate::class),
            new ClassMap('SetOrderCreateResponse', Type\SetOrderCreateResponse::class),
            new ClassMap('SetOrderCreateExtended', Type\SetOrderCreateExtended::class),
            new ClassMap('SetOrderCreateExtendedResponse', Type\SetOrderCreateExtendedResponse::class),
            new ClassMap('SetOrderChange', Type\SetOrderChange::class),
            new ClassMap('SetOrderChangeResponse', Type\SetOrderChangeResponse::class),
            new ClassMap('SetSignOrder', Type\SetSignOrder::class),
            new ClassMap('SetSignOrderResponse', Type\SetSignOrderResponse::class),
            new ClassMap('SetDeleteOrder', Type\SetDeleteOrder::class),
            new ClassMap('SetDeleteOrderResponse', Type\SetDeleteOrderResponse::class),
            new ClassMap('SetFinalOrder', Type\SetFinalOrder::class),
            new ClassMap('SetFinalOrderResponse', Type\SetFinalOrderResponse::class),
            new ClassMap('SetDeliveryRoute', Type\SetDeliveryRoute::class),
            new ClassMap('SetDeliveryRouteResponse', Type\SetDeliveryRouteResponse::class),
            new ClassMap('GetOperationResult', Type\GetOperationResult::class),
            new ClassMap('GetOperationResultResponse', Type\GetOperationResultResponse::class),
            new ClassMap('SetOrderCreatePhys', Type\SetOrderCreatePhys::class),
            new ClassMap('SetOrderCreatePhysResponse', Type\SetOrderCreatePhysResponse::class),
            new ClassMap('GetOrderGUID', Type\GetOrderGUID::class),
            new ClassMap('GetOrderGUIDResponse', Type\GetOrderGUIDResponse::class),
            new ClassMap('GetOrderList', Type\GetOrderList::class),
            new ClassMap('GetOrderListResponse', Type\GetOrderListResponse::class),
        ]);
    }


}

