# OpenAPI\Client\GeneralApi

All URIs are relative to *https://v2.namsor.com/NamSorAPIv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**nameType**](GeneralApi.md#nameType) | **GET** /api2/json/nameType/{properNoun} | Infer the likely type of a proper noun (personal name, brand name, place name etc.)
[**nameType1**](GeneralApi.md#nameType1) | **GET** /api2/json/nameType/{properNoun}/{countryIso2} | Infer the likely type of a proper noun (personal name, brand name, place name etc.)


# **nameType**
> \OpenAPI\Client\Model\ProperNounCategorizedOut nameType($proper_noun)

Infer the likely type of a proper noun (personal name, brand name, place name etc.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proper_noun = 'proper_noun_example'; // string | 

try {
    $result = $apiInstance->nameType($proper_noun);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->nameType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **proper_noun** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProperNounCategorizedOut**](../Model/ProperNounCategorizedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nameType1**
> \OpenAPI\Client\Model\ProperNounCategorizedOut nameType1($proper_noun, $country_iso2)

Infer the likely type of a proper noun (personal name, brand name, place name etc.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proper_noun = 'proper_noun_example'; // string | 
$country_iso2 = 'country_iso2_example'; // string | 

try {
    $result = $apiInstance->nameType1($proper_noun, $country_iso2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->nameType1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **proper_noun** | **string**|  |
 **country_iso2** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProperNounCategorizedOut**](../Model/ProperNounCategorizedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

