# # OrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**responsible_station** | **string** |  |
**customer_id** | **string** |  |
**shipment** | [**\kruegge82\goexpress\Model\Shipment**](Shipment.md) |  |
**consignor_address** | [**\kruegge82\goexpress\Model\Address**](Address.md) |  |
**neutral_address** | [**\kruegge82\goexpress\Model\Address**](Address.md) |  | [optional]
**consignee_address** | [**\kruegge82\goexpress\Model\Address**](Address.md) |  |
**label** | **string** | 1 - ZPL Code 2 - Base64 encoded PDF (4x6’’ package label) 4 – Base64 encoded PDF (A4 houseway bill) 5 – TPCL (TEC Printer Command Language) | [optional]
**packages** | [**\kruegge82\goexpress\Model\Package[]**](Package.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
