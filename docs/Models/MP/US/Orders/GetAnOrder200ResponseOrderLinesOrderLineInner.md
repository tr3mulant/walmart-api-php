# Walmart\Models\MP\US\Orders\GetAnOrder200ResponseOrderLinesOrderLineInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lineNumber** | **string** | The line number associated with the details for each individual item in the purchase order |
**item** | [**\Walmart\Models\MP\US\Orders\GetAnOrder200ResponseOrderLinesOrderLineInnerItem**](GetAnOrder200ResponseOrderLinesOrderLineInnerItem.md) |  |
**charges** | [**\Walmart\Models\MP\US\Orders\GetAnOrder200ResponseOrderLinesOrderLineInnerCharges**](GetAnOrder200ResponseOrderLinesOrderLineInnerCharges.md) |  |
**orderLineQuantity** | [**\Walmart\Models\MP\US\Orders\ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity**](ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity.md) |  |
**statusDate** | **int** | The date shown on the recent order status |
**orderLineStatuses** | [**\Walmart\Models\MP\US\Orders\GetAnOrder200ResponseOrderLinesOrderLineInnerOrderLineStatuses**](GetAnOrder200ResponseOrderLinesOrderLineInnerOrderLineStatuses.md) |  |
**returnOrderId** | **string** | Id of the return order created in case of a full refund | [optional]
**refund** | [**\Walmart\Models\MP\US\Orders\RefundOrderLinesRequestOrderLinesOrderLineInnerRefundsRefundInner**](RefundOrderLinesRequestOrderLinesOrderLineInnerRefundsRefundInner.md) |  | [optional]
**originalCarrierMethod** | **string** | Ship method stamped at order line level when order is placed | [optional]
**referenceLineId** | **string** | Reference line Id | [optional]
**fulfillment** | [**\Walmart\Models\MP\US\Orders\GetAnOrder200ResponseOrderLinesOrderLineInnerFulfillment**](GetAnOrder200ResponseOrderLinesOrderLineInnerFulfillment.md) |  | [optional]
**intentToCancel** | **string** |  | [optional]
**configId** | **string** | Sets ConfigID for Personalised orders | [optional]
**sellerOrderId** | **string** | A unique ID associated with the sales order for specified Seller; gives Sellers the ability to print their own custom order ID on the return label; limit of 30 characters | [optional]


[[Back to Model list]](./) [[Back to API list]](../../../../../README.md#supported-apis) [[Back to README]](../../../../../README.md)