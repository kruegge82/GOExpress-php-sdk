# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hwb_number** | **string** |  | [optional]
**order_status** | **string** |  | [optional]
**validation** | **string** |  | [optional]
**service** | **string** | Service code for the shipment. - ON: GO! Overnight - INT: GO! Worldwide - LET: GO! Overnight - Letter - INL: GO! Worldwide - Letter - PSN: Parcel Service National - PSI: Parcel Service International - ONC: GO! Overnight coded delivery (Germany only) - LEC: GO! Overnight Letter coded delivery (Germany only) - DI: Direct Shipment (prior coordination required) |
**weight** | **string** |  |
**content** | **string** |  | [optional]
**customer_reference** | **string** |  | [optional]
**cost_center** | **string** |  | [optional]
**self_pickup** | **string** |  | [optional]
**self_delivery** | **string** |  | [optional]
**dimensions** | **string** |  | [optional]
**package_count** | **string** |  |
**freight_collect** | **string** |  | [optional]
**ident_check** | **string** |  | [optional]
**receipt_notice** | **string** |  | [optional]
**is_neutral_pickup** | **string** |  | [optional]
**pickup** | [**\kruegge82\goexpress\Model\TimeWindow**](TimeWindow.md) |  |
**delivery** | [**\kruegge82\goexpress\Model\TimeWindow**](TimeWindow.md) |  | [optional]
**insurance** | [**\kruegge82\goexpress\Model\Money**](Money.md) |  | [optional]
**value_of_goods** | [**\kruegge82\goexpress\Model\Money**](Money.md) |  | [optional]
**cash_on_delivery** | [**\kruegge82\goexpress\Model\Money**](Money.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
