# kruegge82\goexpress\DefaultApi

All URIs are relative to https://ws.api.general-overnight.com/external/ci, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**labelApiV1GenerateLabelForhwbPost()**](DefaultApi.md#labelApiV1GenerateLabelForhwbPost) | **POST** /label/api/v1/generateLabelForhwb | Generate label for existing HWB |
| [**orderApiV1CreateOrderPost()**](DefaultApi.md#orderApiV1CreateOrderPost) | **POST** /order/api/v1/createOrder | Create or update shipment order |
| [**orderApiV1UpdateOrderStatusPost()**](DefaultApi.md#orderApiV1UpdateOrderStatusPost) | **POST** /order/api/v1/updateOrderStatus | Update order status |


## `labelApiV1GenerateLabelForhwbPost()`

```php
labelApiV1GenerateLabelForhwbPost($label_request)
```

Generate label for existing HWB

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\goexpress\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new kruegge82\goexpress\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_request = new \kruegge82\goexpress\Model\LabelRequest(); // \kruegge82\goexpress\Model\LabelRequest

try {
    $apiInstance->labelApiV1GenerateLabelForhwbPost($label_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->labelApiV1GenerateLabelForhwbPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_request** | [**\kruegge82\goexpress\Model\LabelRequest**](../Model/LabelRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiV1CreateOrderPost()`

```php
orderApiV1CreateOrderPost($order_request): \kruegge82\goexpress\Model\OrderResponse
```

Create or update shipment order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\goexpress\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new kruegge82\goexpress\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_request = new \kruegge82\goexpress\Model\OrderRequest(); // \kruegge82\goexpress\Model\OrderRequest

try {
    $result = $apiInstance->orderApiV1CreateOrderPost($order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->orderApiV1CreateOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_request** | [**\kruegge82\goexpress\Model\OrderRequest**](../Model/OrderRequest.md)|  | |

### Return type

[**\kruegge82\goexpress\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiV1UpdateOrderStatusPost()`

```php
orderApiV1UpdateOrderStatusPost($update_status_request): \kruegge82\goexpress\Model\OrderResponse
```

Update order status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\goexpress\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new kruegge82\goexpress\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_status_request = new \kruegge82\goexpress\Model\UpdateStatusRequest(); // \kruegge82\goexpress\Model\UpdateStatusRequest

try {
    $result = $apiInstance->orderApiV1UpdateOrderStatusPost($update_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->orderApiV1UpdateOrderStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_status_request** | [**\kruegge82\goexpress\Model\UpdateStatusRequest**](../Model/UpdateStatusRequest.md)|  | |

### Return type

[**\kruegge82\goexpress\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
