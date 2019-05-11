# OpenAPI\Client\SocialApi

All URIs are relative to *https://v2.namsor.com/NamSorAPIv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**phoneCode**](SocialApi.md#phoneCode) | **GET** /api2/json/phoneCode/{firstName}/{lastName}/{phoneNumber} | [USES 11 UNITS] Infer the likely country and phone prefix, given a personal name and formatted / unformatted phone number.
[**phoneCodeBatch**](SocialApi.md#phoneCodeBatch) | **POST** /api2/json/phoneCodeBatch | [USES 11 UNITS] Infer the likely country and phone prefix, of up to 1000 personal names, detecting automatically the local context given a name and formatted / unformatted phone number.
[**phoneCodeGeo**](SocialApi.md#phoneCodeGeo) | **GET** /api2/json/phoneCodeGeo/{firstName}/{lastName}/{phoneNumber}/{countryIso2} | [USES 11 UNITS] Infer the likely phone prefix, given a personal name and formatted / unformatted phone number, with a local context (ISO2 country of residence).
[**phoneCodeGeoBatch**](SocialApi.md#phoneCodeGeoBatch) | **POST** /api2/json/phoneCodeGeoBatch | [USES 11 UNITS] Infer the likely country and phone prefix, of up to 1000 personal names, with a local context (ISO2 country of residence).
[**phoneCodeGeoFeedbackLoop**](SocialApi.md#phoneCodeGeoFeedbackLoop) | **GET** /api2/json/phoneCodeGeoFeedbackLoop/{firstName}/{lastName}/{phoneNumber}/{phoneNumberE164}/{countryIso2} | [CREDITS 1 UNIT] Feedback loop to better infer the likely phone prefix, given a personal name and formatted / unformatted phone number, with a local context (ISO2 country of residence).


# **phoneCode**
> \OpenAPI\Client\Model\FirstLastNamePhoneCodedOut phoneCode($first_name, $last_name, $phone_number)

[USES 11 UNITS] Infer the likely country and phone prefix, given a personal name and formatted / unformatted phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = 'first_name_example'; // string | 
$last_name = 'last_name_example'; // string | 
$phone_number = 'phone_number_example'; // string | 

try {
    $result = $apiInstance->phoneCode($first_name, $last_name, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->phoneCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**|  |
 **last_name** | **string**|  |
 **phone_number** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNamePhoneCodedOut**](../Model/FirstLastNamePhoneCodedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **phoneCodeBatch**
> \OpenAPI\Client\Model\BatchFirstLastNamePhoneCodedOut phoneCodeBatch($batch_first_last_name_phone_number_in)

[USES 11 UNITS] Infer the likely country and phone prefix, of up to 1000 personal names, detecting automatically the local context given a name and formatted / unformatted phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_phone_number_in = new \OpenAPI\Client\Model\BatchFirstLastNamePhoneNumberIn(); // \OpenAPI\Client\Model\BatchFirstLastNamePhoneNumberIn | A list of personal names

try {
    $result = $apiInstance->phoneCodeBatch($batch_first_last_name_phone_number_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->phoneCodeBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_phone_number_in** | [**\OpenAPI\Client\Model\BatchFirstLastNamePhoneNumberIn**](../Model/BatchFirstLastNamePhoneNumberIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNamePhoneCodedOut**](../Model/BatchFirstLastNamePhoneCodedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **phoneCodeGeo**
> \OpenAPI\Client\Model\FirstLastNamePhoneCodedOut phoneCodeGeo($first_name, $last_name, $phone_number, $country_iso2)

[USES 11 UNITS] Infer the likely phone prefix, given a personal name and formatted / unformatted phone number, with a local context (ISO2 country of residence).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = 'first_name_example'; // string | 
$last_name = 'last_name_example'; // string | 
$phone_number = 'phone_number_example'; // string | 
$country_iso2 = 'country_iso2_example'; // string | 

try {
    $result = $apiInstance->phoneCodeGeo($first_name, $last_name, $phone_number, $country_iso2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->phoneCodeGeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**|  |
 **last_name** | **string**|  |
 **phone_number** | **string**|  |
 **country_iso2** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNamePhoneCodedOut**](../Model/FirstLastNamePhoneCodedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **phoneCodeGeoBatch**
> \OpenAPI\Client\Model\BatchFirstLastNamePhoneCodedOut phoneCodeGeoBatch($batch_first_last_name_phone_number_geo_in)

[USES 11 UNITS] Infer the likely country and phone prefix, of up to 1000 personal names, with a local context (ISO2 country of residence).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_phone_number_geo_in = new \OpenAPI\Client\Model\BatchFirstLastNamePhoneNumberGeoIn(); // \OpenAPI\Client\Model\BatchFirstLastNamePhoneNumberGeoIn | A list of personal names

try {
    $result = $apiInstance->phoneCodeGeoBatch($batch_first_last_name_phone_number_geo_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->phoneCodeGeoBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_phone_number_geo_in** | [**\OpenAPI\Client\Model\BatchFirstLastNamePhoneNumberGeoIn**](../Model/BatchFirstLastNamePhoneNumberGeoIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNamePhoneCodedOut**](../Model/BatchFirstLastNamePhoneCodedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **phoneCodeGeoFeedbackLoop**
> \OpenAPI\Client\Model\FirstLastNamePhoneCodedOut phoneCodeGeoFeedbackLoop($first_name, $last_name, $phone_number, $phone_number_e164, $country_iso2)

[CREDITS 1 UNIT] Feedback loop to better infer the likely phone prefix, given a personal name and formatted / unformatted phone number, with a local context (ISO2 country of residence).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = 'first_name_example'; // string | 
$last_name = 'last_name_example'; // string | 
$phone_number = 'phone_number_example'; // string | 
$phone_number_e164 = 'phone_number_e164_example'; // string | 
$country_iso2 = 'country_iso2_example'; // string | 

try {
    $result = $apiInstance->phoneCodeGeoFeedbackLoop($first_name, $last_name, $phone_number, $phone_number_e164, $country_iso2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->phoneCodeGeoFeedbackLoop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**|  |
 **last_name** | **string**|  |
 **phone_number** | **string**|  |
 **phone_number_e164** | **string**|  |
 **country_iso2** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNamePhoneCodedOut**](../Model/FirstLastNamePhoneCodedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

