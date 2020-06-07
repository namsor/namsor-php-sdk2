# OpenAPI\Client\JapaneseApi

All URIs are relative to *https://v2.namsor.com/NamSorAPIv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**genderJapaneseNameFull**](JapaneseApi.md#genderJapaneseNameFull) | **GET** /api2/json/genderJapaneseNameFull/{japaneseName} | Infer the likely gender of a Japanese full name ex. 王晓明
[**genderJapaneseNameFullBatch**](JapaneseApi.md#genderJapaneseNameFullBatch) | **POST** /api2/json/genderJapaneseNameFullBatch | Infer the likely gender of up to 100 full names
[**genderJapaneseNamePinyin**](JapaneseApi.md#genderJapaneseNamePinyin) | **GET** /api2/json/genderJapaneseName/{japaneseSurname}/{japaneseGivenName} | Infer the likely gender of a Japanese name in LATIN (Pinyin).
[**genderJapaneseNamePinyinBatch**](JapaneseApi.md#genderJapaneseNamePinyinBatch) | **POST** /api2/json/genderJapaneseNameBatch | Infer the likely gender of up to 100 Japanese names in LATIN (Pinyin).
[**japaneseNameKanjiCandidates**](JapaneseApi.md#japaneseNameKanjiCandidates) | **GET** /api2/json/japaneseNameKanjiCandidates/{japaneseSurnameLatin}/{japaneseGivenNameLatin} | Identify japanese name candidates in KANJI, based on the romanized name ex. Yamamoto Sanae
[**japaneseNameKanjiCandidatesBatch**](JapaneseApi.md#japaneseNameKanjiCandidatesBatch) | **POST** /api2/json/japaneseNameKanjiCandidatesBatch | Identify japanese name candidates in KANJI, based on the romanized name (firstName &#x3D; japaneseGivenName; lastName&#x3D;japaneseSurname), ex. Yamamoto Sanae
[**japaneseNameLatinCandidates**](JapaneseApi.md#japaneseNameLatinCandidates) | **GET** /api2/json/japaneseNameLatinCandidates/{japaneseSurnameKanji}/{japaneseGivenNameKanji} | Romanize japanese name, based on the name in Kanji.
[**japaneseNameLatinCandidatesBatch**](JapaneseApi.md#japaneseNameLatinCandidatesBatch) | **POST** /api2/json/japaneseNameLatinCandidatesBatch | Romanize japanese names, based on the name in KANJI
[**japaneseNameMatch**](JapaneseApi.md#japaneseNameMatch) | **GET** /api2/json/japaneseNameMatch/{japaneseSurnameLatin}/{japaneseGivenNameLatin}/{japaneseName} | Return a score for matching Japanese name in KANJI ex. 山本 早苗 with a romanized name ex. Yamamoto Sanae
[**japaneseNameMatchBatch**](JapaneseApi.md#japaneseNameMatchBatch) | **POST** /api2/json/japaneseNameMatchBatch | Return a score for matching a list of Japanese names in KANJI ex. 山本 早苗 with romanized names ex. Yamamoto Sanae
[**japaneseNameMatchFeedbackLoop**](JapaneseApi.md#japaneseNameMatchFeedbackLoop) | **GET** /api2/json/japaneseNameMatchFeedbackLoop/{japaneseSurnameLatin}/{japaneseGivenNameLatin}/{japaneseName} | [CREDITS 1 UNIT] Feedback loop to better perform matching Japanese name in KANJI ex. 山本 早苗 with a romanized name ex. Yamamoto Sanae
[**parseJapaneseName**](JapaneseApi.md#parseJapaneseName) | **GET** /api2/json/parseJapaneseName/{japaneseName} | Infer the likely first/last name structure of a name, ex. 山本 早苗 or Yamamoto Sanae
[**parseJapaneseNameBatch**](JapaneseApi.md#parseJapaneseNameBatch) | **POST** /api2/json/parseJapaneseNameBatch | Infer the likely first/last name structure of a name, ex. 山本 早苗 or Yamamoto Sanae


# **genderJapaneseNameFull**
> \OpenAPI\Client\Model\PersonalNameGenderedOut genderJapaneseNameFull($japanese_name)

Infer the likely gender of a Japanese full name ex. 王晓明

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$japanese_name = 'japanese_name_example'; // string | 

try {
    $result = $apiInstance->genderJapaneseNameFull($japanese_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->genderJapaneseNameFull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **japanese_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PersonalNameGenderedOut**](../Model/PersonalNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderJapaneseNameFullBatch**
> \OpenAPI\Client\Model\BatchPersonalNameGenderedOut genderJapaneseNameFullBatch($batch_personal_name_in)

Infer the likely gender of up to 100 full names

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_personal_name_in = new \OpenAPI\Client\Model\BatchPersonalNameIn(); // \OpenAPI\Client\Model\BatchPersonalNameIn | A list of personal names

try {
    $result = $apiInstance->genderJapaneseNameFullBatch($batch_personal_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->genderJapaneseNameFullBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_personal_name_in** | [**\OpenAPI\Client\Model\BatchPersonalNameIn**](../Model/BatchPersonalNameIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchPersonalNameGenderedOut**](../Model/BatchPersonalNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderJapaneseNamePinyin**
> \OpenAPI\Client\Model\FirstLastNameGenderedOut genderJapaneseNamePinyin($japanese_surname, $japanese_given_name)

Infer the likely gender of a Japanese name in LATIN (Pinyin).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$japanese_surname = 'japanese_surname_example'; // string | 
$japanese_given_name = 'japanese_given_name_example'; // string | 

try {
    $result = $apiInstance->genderJapaneseNamePinyin($japanese_surname, $japanese_given_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->genderJapaneseNamePinyin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **japanese_surname** | **string**|  |
 **japanese_given_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNameGenderedOut**](../Model/FirstLastNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderJapaneseNamePinyinBatch**
> \OpenAPI\Client\Model\BatchFirstLastNameGenderedOut genderJapaneseNamePinyinBatch($batch_first_last_name_in)

Infer the likely gender of up to 100 Japanese names in LATIN (Pinyin).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_in = new \OpenAPI\Client\Model\BatchFirstLastNameIn(); // \OpenAPI\Client\Model\BatchFirstLastNameIn | A list of names, with country code.

try {
    $result = $apiInstance->genderJapaneseNamePinyinBatch($batch_first_last_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->genderJapaneseNamePinyinBatch: ', $e->getMessage(), PHP_EOL;
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

# **japaneseNameKanjiCandidates**
> \OpenAPI\Client\Model\RomanizedNameOut japaneseNameKanjiCandidates($japanese_surname_latin, $japanese_given_name_latin)

Identify japanese name candidates in KANJI, based on the romanized name ex. Yamamoto Sanae

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$japanese_surname_latin = 'japanese_surname_latin_example'; // string | 
$japanese_given_name_latin = 'japanese_given_name_latin_example'; // string | 

try {
    $result = $apiInstance->japaneseNameKanjiCandidates($japanese_surname_latin, $japanese_given_name_latin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->japaneseNameKanjiCandidates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **japanese_surname_latin** | **string**|  |
 **japanese_given_name_latin** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RomanizedNameOut**](../Model/RomanizedNameOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **japaneseNameKanjiCandidatesBatch**
> \OpenAPI\Client\Model\BatchNameMatchCandidatesOut japaneseNameKanjiCandidatesBatch($batch_first_last_name_in)

Identify japanese name candidates in KANJI, based on the romanized name (firstName = japaneseGivenName; lastName=japaneseSurname), ex. Yamamoto Sanae

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_in = new \OpenAPI\Client\Model\BatchFirstLastNameIn(); // \OpenAPI\Client\Model\BatchFirstLastNameIn | A list of personal japanese names in LATIN, firstName = japaneseGivenName; lastName=japaneseSurname

try {
    $result = $apiInstance->japaneseNameKanjiCandidatesBatch($batch_first_last_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->japaneseNameKanjiCandidatesBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameIn**](../Model/BatchFirstLastNameIn.md)| A list of personal japanese names in LATIN, firstName &#x3D; japaneseGivenName; lastName&#x3D;japaneseSurname | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchNameMatchCandidatesOut**](../Model/BatchNameMatchCandidatesOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **japaneseNameLatinCandidates**
> \OpenAPI\Client\Model\RomanizedNameOut japaneseNameLatinCandidates($japanese_surname_kanji, $japanese_given_name_kanji)

Romanize japanese name, based on the name in Kanji.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$japanese_surname_kanji = 'japanese_surname_kanji_example'; // string | 
$japanese_given_name_kanji = 'japanese_given_name_kanji_example'; // string | 

try {
    $result = $apiInstance->japaneseNameLatinCandidates($japanese_surname_kanji, $japanese_given_name_kanji);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->japaneseNameLatinCandidates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **japanese_surname_kanji** | **string**|  |
 **japanese_given_name_kanji** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RomanizedNameOut**](../Model/RomanizedNameOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **japaneseNameLatinCandidatesBatch**
> \OpenAPI\Client\Model\BatchNameMatchCandidatesOut japaneseNameLatinCandidatesBatch($batch_first_last_name_in)

Romanize japanese names, based on the name in KANJI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_in = new \OpenAPI\Client\Model\BatchFirstLastNameIn(); // \OpenAPI\Client\Model\BatchFirstLastNameIn | A list of personal japanese names in KANJI, firstName = japaneseGivenName; lastName=japaneseSurname

try {
    $result = $apiInstance->japaneseNameLatinCandidatesBatch($batch_first_last_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->japaneseNameLatinCandidatesBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameIn**](../Model/BatchFirstLastNameIn.md)| A list of personal japanese names in KANJI, firstName &#x3D; japaneseGivenName; lastName&#x3D;japaneseSurname | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchNameMatchCandidatesOut**](../Model/BatchNameMatchCandidatesOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **japaneseNameMatch**
> \OpenAPI\Client\Model\RomanizedNameOut japaneseNameMatch($japanese_surname_latin, $japanese_given_name_latin, $japanese_name)

Return a score for matching Japanese name in KANJI ex. 山本 早苗 with a romanized name ex. Yamamoto Sanae

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$japanese_surname_latin = 'japanese_surname_latin_example'; // string | 
$japanese_given_name_latin = 'japanese_given_name_latin_example'; // string | 
$japanese_name = 'japanese_name_example'; // string | 

try {
    $result = $apiInstance->japaneseNameMatch($japanese_surname_latin, $japanese_given_name_latin, $japanese_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->japaneseNameMatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **japanese_surname_latin** | **string**|  |
 **japanese_given_name_latin** | **string**|  |
 **japanese_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RomanizedNameOut**](../Model/RomanizedNameOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **japaneseNameMatchBatch**
> \OpenAPI\Client\Model\BatchNameMatchCandidatesOut japaneseNameMatchBatch($batch_first_last_name_in)

Return a score for matching a list of Japanese names in KANJI ex. 山本 早苗 with romanized names ex. Yamamoto Sanae

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_in = new \OpenAPI\Client\Model\BatchFirstLastNameIn(); // \OpenAPI\Client\Model\BatchFirstLastNameIn | A list of personal Japanese names in LATIN, firstName = japaneseGivenName; lastName=japaneseSurname

try {
    $result = $apiInstance->japaneseNameMatchBatch($batch_first_last_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->japaneseNameMatchBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameIn**](../Model/BatchFirstLastNameIn.md)| A list of personal Japanese names in LATIN, firstName &#x3D; japaneseGivenName; lastName&#x3D;japaneseSurname | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchNameMatchCandidatesOut**](../Model/BatchNameMatchCandidatesOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **japaneseNameMatchFeedbackLoop**
> \OpenAPI\Client\Model\RomanizedNameOut japaneseNameMatchFeedbackLoop($japanese_surname_latin, $japanese_given_name_latin, $japanese_name)

[CREDITS 1 UNIT] Feedback loop to better perform matching Japanese name in KANJI ex. 山本 早苗 with a romanized name ex. Yamamoto Sanae

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$japanese_surname_latin = 'japanese_surname_latin_example'; // string | 
$japanese_given_name_latin = 'japanese_given_name_latin_example'; // string | 
$japanese_name = 'japanese_name_example'; // string | 

try {
    $result = $apiInstance->japaneseNameMatchFeedbackLoop($japanese_surname_latin, $japanese_given_name_latin, $japanese_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->japaneseNameMatchFeedbackLoop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **japanese_surname_latin** | **string**|  |
 **japanese_given_name_latin** | **string**|  |
 **japanese_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RomanizedNameOut**](../Model/RomanizedNameOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parseJapaneseName**
> \OpenAPI\Client\Model\PersonalNameParsedOut parseJapaneseName($japanese_name)

Infer the likely first/last name structure of a name, ex. 山本 早苗 or Yamamoto Sanae

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$japanese_name = 'japanese_name_example'; // string | 

try {
    $result = $apiInstance->parseJapaneseName($japanese_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->parseJapaneseName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **japanese_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PersonalNameParsedOut**](../Model/PersonalNameParsedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parseJapaneseNameBatch**
> \OpenAPI\Client\Model\BatchPersonalNameParsedOut parseJapaneseNameBatch($batch_personal_name_in)

Infer the likely first/last name structure of a name, ex. 山本 早苗 or Yamamoto Sanae

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\JapaneseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_personal_name_in = new \OpenAPI\Client\Model\BatchPersonalNameIn(); // \OpenAPI\Client\Model\BatchPersonalNameIn | A list of personal names

try {
    $result = $apiInstance->parseJapaneseNameBatch($batch_personal_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JapaneseApi->parseJapaneseNameBatch: ', $e->getMessage(), PHP_EOL;
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

