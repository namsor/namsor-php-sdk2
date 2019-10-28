# OpenAPI\Client\ChineseApi

All URIs are relative to *https://v2.namsor.com/NamSorAPIv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chineseNameCandidates**](ChineseApi.md#chineseNameCandidates) | **GET** /api2/json/chineseNameCandidates/{chineseSurnameLatin}/{chineseGivenNameLatin} | Identify Chinese name candidates, based on the romanized name ex. Wang Xiaoming
[**chineseNameCandidatesBatch**](ChineseApi.md#chineseNameCandidatesBatch) | **POST** /api2/json/chineseNameCandidatesBatch | Identify Chinese name candidates, based on the romanized name (firstName &#x3D; chineseGivenName; lastName&#x3D;chineseSurname), ex. Wang Xiaoming
[**chineseNameCandidatesGenderBatch**](ChineseApi.md#chineseNameCandidatesGenderBatch) | **POST** /api2/json/chineseNameCandidatesGenderBatch | Identify Chinese name candidates, based on the romanized name (firstName &#x3D; chineseGivenName; lastName&#x3D;chineseSurname) ex. Wang Xiaoming.
[**chineseNameGenderCandidates**](ChineseApi.md#chineseNameGenderCandidates) | **GET** /api2/json/chineseNameGenderCandidates/{chineseSurnameLatin}/{chineseGivenNameLatin}/{knownGender} | Identify Chinese name candidates, based on the romanized name ex. Wang Xiaoming - having a known gender (&#39;male&#39; or &#39;female&#39;)
[**chineseNameMatch**](ChineseApi.md#chineseNameMatch) | **GET** /api2/json/chineseNameMatch/{chineseSurnameLatin}/{chineseGivenNameLatin}/{chineseName} | Return a score for matching Chinese name ex. 王晓明 with a romanized name ex. Wang Xiaoming
[**chineseNameMatchBatch**](ChineseApi.md#chineseNameMatchBatch) | **POST** /api2/json/chineseNameMatchBatch | Identify Chinese name candidates, based on the romanized name (firstName &#x3D; chineseGivenName; lastName&#x3D;chineseSurname), ex. Wang Xiaoming
[**genderChineseName**](ChineseApi.md#genderChineseName) | **GET** /api2/json/genderChineseName/{chineseName} | Infer the likely gender of a Chinese full name ex. 王晓明
[**genderChineseNameBatch**](ChineseApi.md#genderChineseNameBatch) | **POST** /api2/json/genderChineseNameBatch | Infer the likely gender of up to 100 full names ex. 王晓明
[**genderChineseNamePinyin**](ChineseApi.md#genderChineseNamePinyin) | **GET** /api2/json/genderChineseNamePinyin/{chineseSurnameLatin}/{chineseGivenNameLatin} | Infer the likely gender of a Chinese name in LATIN (Pinyin).
[**genderChineseNamePinyinBatch**](ChineseApi.md#genderChineseNamePinyinBatch) | **POST** /api2/json/genderChineseNamePinyinBatch | Infer the likely gender of up to 100 Chinese names in LATIN (Pinyin).
[**parseChineseName**](ChineseApi.md#parseChineseName) | **GET** /api2/json/parseChineseName/{chineseName} | Infer the likely first/last name structure of a name, ex. 王晓明 -&gt; 王(surname) 晓明(given name)
[**parseChineseNameBatch**](ChineseApi.md#parseChineseNameBatch) | **POST** /api2/json/parseChineseNameBatch | Infer the likely first/last name structure of a name, ex. 王晓明 -&gt; 王(surname) 晓明(given name).
[**pinyinChineseName**](ChineseApi.md#pinyinChineseName) | **GET** /api2/json/pinyinChineseName/{chineseName} | Romanize the Chinese name to Pinyin, ex. 王晓明 -&gt; Wang (surname) Xiaoming (given name)
[**pinyinChineseNameBatch**](ChineseApi.md#pinyinChineseNameBatch) | **POST** /api2/json/pinyinChineseNameBatch | Romanize a list of Chinese name to Pinyin, ex. 王晓明 -&gt; Wang (surname) Xiaoming (given name).


# **chineseNameCandidates**
> \OpenAPI\Client\Model\RomanizedNameOut chineseNameCandidates($chinese_surname_latin, $chinese_given_name_latin)

Identify Chinese name candidates, based on the romanized name ex. Wang Xiaoming

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

Identify Chinese name candidates, based on the romanized name (firstName = chineseGivenName; lastName=chineseSurname), ex. Wang Xiaoming

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

Identify Chinese name candidates, based on the romanized name (firstName = chineseGivenName; lastName=chineseSurname) ex. Wang Xiaoming.

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

Identify Chinese name candidates, based on the romanized name ex. Wang Xiaoming - having a known gender ('male' or 'female')

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

# **chineseNameMatch**
> \OpenAPI\Client\Model\RomanizedNameOut chineseNameMatch($chinese_surname_latin, $chinese_given_name_latin, $chinese_name)

Return a score for matching Chinese name ex. 王晓明 with a romanized name ex. Wang Xiaoming

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
$chinese_name = 'chinese_name_example'; // string | 

try {
    $result = $apiInstance->chineseNameMatch($chinese_surname_latin, $chinese_given_name_latin, $chinese_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->chineseNameMatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chinese_surname_latin** | **string**|  |
 **chinese_given_name_latin** | **string**|  |
 **chinese_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RomanizedNameOut**](../Model/RomanizedNameOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chineseNameMatchBatch**
> \OpenAPI\Client\Model\BatchNameMatchCandidatesOut chineseNameMatchBatch($batch_first_last_name_in)

Identify Chinese name candidates, based on the romanized name (firstName = chineseGivenName; lastName=chineseSurname), ex. Wang Xiaoming

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
    $result = $apiInstance->chineseNameMatchBatch($batch_first_last_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->chineseNameMatchBatch: ', $e->getMessage(), PHP_EOL;
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

# **genderChineseName**
> \OpenAPI\Client\Model\PersonalNameGenderedOut genderChineseName($chinese_name)

Infer the likely gender of a Chinese full name ex. 王晓明

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
$chinese_name = 'chinese_name_example'; // string | 

try {
    $result = $apiInstance->genderChineseName($chinese_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->genderChineseName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chinese_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PersonalNameGenderedOut**](../Model/PersonalNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderChineseNameBatch**
> \OpenAPI\Client\Model\BatchPersonalNameGenderedOut genderChineseNameBatch($batch_personal_name_in)

Infer the likely gender of up to 100 full names ex. 王晓明

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
$batch_personal_name_in = new \OpenAPI\Client\Model\BatchPersonalNameIn(); // \OpenAPI\Client\Model\BatchPersonalNameIn | A list of personal names, with a country ISO2 code

try {
    $result = $apiInstance->genderChineseNameBatch($batch_personal_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->genderChineseNameBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_personal_name_in** | [**\OpenAPI\Client\Model\BatchPersonalNameIn**](../Model/BatchPersonalNameIn.md)| A list of personal names, with a country ISO2 code | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchPersonalNameGenderedOut**](../Model/BatchPersonalNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderChineseNamePinyin**
> \OpenAPI\Client\Model\FirstLastNameGenderedOut genderChineseNamePinyin($chinese_surname_latin, $chinese_given_name_latin)

Infer the likely gender of a Chinese name in LATIN (Pinyin).

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
    $result = $apiInstance->genderChineseNamePinyin($chinese_surname_latin, $chinese_given_name_latin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->genderChineseNamePinyin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chinese_surname_latin** | **string**|  |
 **chinese_given_name_latin** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNameGenderedOut**](../Model/FirstLastNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderChineseNamePinyinBatch**
> \OpenAPI\Client\Model\BatchFirstLastNameGenderedOut genderChineseNamePinyinBatch($batch_first_last_name_in)

Infer the likely gender of up to 100 Chinese names in LATIN (Pinyin).

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
$batch_first_last_name_in = new \OpenAPI\Client\Model\BatchFirstLastNameIn(); // \OpenAPI\Client\Model\BatchFirstLastNameIn | A list of names, with country code.

try {
    $result = $apiInstance->genderChineseNamePinyinBatch($batch_first_last_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->genderChineseNamePinyinBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameIn**](../Model/BatchFirstLastNameIn.md)| A list of names, with country code. | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNameGenderedOut**](../Model/BatchFirstLastNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parseChineseName**
> \OpenAPI\Client\Model\PersonalNameParsedOut parseChineseName($chinese_name)

Infer the likely first/last name structure of a name, ex. 王晓明 -> 王(surname) 晓明(given name)

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
$chinese_name = 'chinese_name_example'; // string | 

try {
    $result = $apiInstance->parseChineseName($chinese_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->parseChineseName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chinese_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PersonalNameParsedOut**](../Model/PersonalNameParsedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parseChineseNameBatch**
> \OpenAPI\Client\Model\BatchPersonalNameParsedOut parseChineseNameBatch($batch_personal_name_in)

Infer the likely first/last name structure of a name, ex. 王晓明 -> 王(surname) 晓明(given name).

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
$batch_personal_name_in = new \OpenAPI\Client\Model\BatchPersonalNameIn(); // \OpenAPI\Client\Model\BatchPersonalNameIn | A list of personal names

try {
    $result = $apiInstance->parseChineseNameBatch($batch_personal_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->parseChineseNameBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_personal_name_in** | [**\OpenAPI\Client\Model\BatchPersonalNameIn**](../Model/BatchPersonalNameIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchPersonalNameParsedOut**](../Model/BatchPersonalNameParsedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pinyinChineseName**
> \OpenAPI\Client\Model\PersonalNameParsedOut pinyinChineseName($chinese_name)

Romanize the Chinese name to Pinyin, ex. 王晓明 -> Wang (surname) Xiaoming (given name)

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
$chinese_name = 'chinese_name_example'; // string | 

try {
    $result = $apiInstance->pinyinChineseName($chinese_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->pinyinChineseName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chinese_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PersonalNameParsedOut**](../Model/PersonalNameParsedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pinyinChineseNameBatch**
> \OpenAPI\Client\Model\BatchPersonalNameParsedOut pinyinChineseNameBatch($batch_personal_name_in)

Romanize a list of Chinese name to Pinyin, ex. 王晓明 -> Wang (surname) Xiaoming (given name).

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
$batch_personal_name_in = new \OpenAPI\Client\Model\BatchPersonalNameIn(); // \OpenAPI\Client\Model\BatchPersonalNameIn | A list of Chinese names

try {
    $result = $apiInstance->pinyinChineseNameBatch($batch_personal_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChineseApi->pinyinChineseNameBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_personal_name_in** | [**\OpenAPI\Client\Model\BatchPersonalNameIn**](../Model/BatchPersonalNameIn.md)| A list of Chinese names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchPersonalNameParsedOut**](../Model/BatchPersonalNameParsedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

