# OpenAPI\Client\ChineseApi

All URIs are relative to *https://v2.namsor.com/NamSorAPIv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chineseNameCandidates**](ChineseApi.md#chineseNameCandidates) | **GET** /api2/json/chineseNameCandidates/{chineseSurnameLatin}/{chineseGivenNameLatin} | Identify Chinese name candidates, based on the romanized name.
[**chineseNameCandidatesBatch**](ChineseApi.md#chineseNameCandidatesBatch) | **POST** /api2/json/chineseNameCandidatesBatch | Identify Chinese name candidates, based on the romanized name (firstName &#x3D; chineseGivenName; lastName&#x3D;chineseSurname).
[**chineseNameCandidatesGenderBatch**](ChineseApi.md#chineseNameCandidatesGenderBatch) | **POST** /api2/json/chineseNameCandidatesGenderBatch | Identify Chinese name candidates, based on the romanized name (firstName &#x3D; chineseGivenName; lastName&#x3D;chineseSurname).
[**chineseNameGenderCandidates**](ChineseApi.md#chineseNameGenderCandidates) | **GET** /api2/json/chineseNameGenderCandidates/{chineseSurnameLatin}/{chineseGivenNameLatin}/{knownGender} | Identify Chinese name candidates, based on the romanized name - having a known gender (&#39;male&#39; or &#39;female&#39;)


# **chineseNameCandidates**
> \OpenAPI\Client\Model\RomanizedNameOut chineseNameCandidates($chinese_surname_latin, $chinese_given_name_latin)

Identify Chinese name candidates, based on the romanized name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ChineseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chinese_surname_latin = 'chinese_surname_latin_example'; // string | 
$chinese_given_name_latin = 'chinese_given_name_latin_example'; // string | 

try {
    $result = $apiInstance->chineseNameCandidates($chinese_surname_latin, $chinese_given_name_latin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->chineseNameCandidates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chinese_surname_latin** | **string**|  |
 **chinese_given_name_latin** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RomanizedNameOut**](../Model/RomanizedNameOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chineseNameCandidatesBatch**
> \OpenAPI\Client\Model\BatchNameMatchCandidatesOut chineseNameCandidatesBatch($batch_first_last_name_in)

Identify Chinese name candidates, based on the romanized name (firstName = chineseGivenName; lastName=chineseSurname).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ChineseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_in = new \OpenAPI\Client\Model\BatchFirstLastNameIn(); // \OpenAPI\Client\Model\BatchFirstLastNameIn | A list of personal Chinese names in LATIN, firstName = chineseGivenName; lastName=chineseSurname

try {
    $result = $apiInstance->chineseNameCandidatesBatch($batch_first_last_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->chineseNameCandidatesBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameIn**](../Model/BatchFirstLastNameIn.md)| A list of personal Chinese names in LATIN, firstName &#x3D; chineseGivenName; lastName&#x3D;chineseSurname | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchNameMatchCandidatesOut**](../Model/BatchNameMatchCandidatesOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chineseNameCandidatesGenderBatch**
> \OpenAPI\Client\Model\BatchNameMatchCandidatesOut chineseNameCandidatesGenderBatch($batch_first_last_name_in)

Identify Chinese name candidates, based on the romanized name (firstName = chineseGivenName; lastName=chineseSurname).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ChineseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_in = new \OpenAPI\Client\Model\BatchFirstLastNameIn(); // \OpenAPI\Client\Model\BatchFirstLastNameIn | A list of personal Chinese names in LATIN, firstName = chineseGivenName; lastName=chineseSurname

try {
    $result = $apiInstance->chineseNameCandidatesGenderBatch($batch_first_last_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->chineseNameCandidatesGenderBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameIn**](../Model/BatchFirstLastNameIn.md)| A list of personal Chinese names in LATIN, firstName &#x3D; chineseGivenName; lastName&#x3D;chineseSurname | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchNameMatchCandidatesOut**](../Model/BatchNameMatchCandidatesOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chineseNameGenderCandidates**
> \OpenAPI\Client\Model\RomanizedNameOut chineseNameGenderCandidates($chinese_surname_latin, $chinese_given_name_latin, $known_gender)

Identify Chinese name candidates, based on the romanized name - having a known gender ('male' or 'female')

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ChineseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chinese_surname_latin = 'chinese_surname_latin_example'; // string | 
$chinese_given_name_latin = 'chinese_given_name_latin_example'; // string | 
$known_gender = 'known_gender_example'; // string | 

try {
    $result = $apiInstance->chineseNameGenderCandidates($chinese_surname_latin, $chinese_given_name_latin, $known_gender);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->chineseNameGenderCandidates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chinese_surname_latin** | **string**|  |
 **chinese_given_name_latin** | **string**|  |
 **known_gender** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RomanizedNameOut**](../Model/RomanizedNameOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

