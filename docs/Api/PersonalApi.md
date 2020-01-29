# OpenAPI\Client\PersonalApi

All URIs are relative to *https://v2.namsor.com/NamSorAPIv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**country**](PersonalApi.md#country) | **GET** /api2/json/country/{personalNameFull} | [USES 10 UNITS PER NAME] Infer the likely country of residence of a personal full name, or one surname. Assumes names as they are in the country of residence OR the country of origin.
[**countryBatch**](PersonalApi.md#countryBatch) | **POST** /api2/json/countryBatch | [USES 10 UNITS PER NAME] Infer the likely country of residence of up to 100 personal full names, or surnames. Assumes names as they are in the country of residence OR the country of origin.
[**diaspora**](PersonalApi.md#diaspora) | **GET** /api2/json/diaspora/{countryIso2}/{firstName}/{lastName} | [USES 20 UNITS PER NAME] Infer the likely ethnicity/diaspora of a personal name, given a country of residence ISO2 code (ex. US, CA, AU, NZ etc.)
[**diasporaBatch**](PersonalApi.md#diasporaBatch) | **POST** /api2/json/diasporaBatch | [USES 20 UNITS PER NAME] Infer the likely ethnicity/diaspora of up to 100 personal names, given a country of residence ISO2 code (ex. US, CA, AU, NZ etc.)
[**gender**](PersonalApi.md#gender) | **GET** /api2/json/gender/{firstName}/{lastName} | Infer the likely gender of a name.
[**genderBatch**](PersonalApi.md#genderBatch) | **POST** /api2/json/genderBatch | Infer the likely gender of up to 100 names, detecting automatically the cultural context.
[**genderFull**](PersonalApi.md#genderFull) | **GET** /api2/json/genderFull/{fullName} | Infer the likely gender of a full name, ex. John H. Smith
[**genderFullBatch**](PersonalApi.md#genderFullBatch) | **POST** /api2/json/genderFullBatch | Infer the likely gender of up to 100 full names, detecting automatically the cultural context.
[**genderFullGeo**](PersonalApi.md#genderFullGeo) | **GET** /api2/json/genderFullGeo/{fullName}/{countryIso2} | Infer the likely gender of a full name, given a local context (ISO2 country code).
[**genderFullGeoBatch**](PersonalApi.md#genderFullGeoBatch) | **POST** /api2/json/genderFullGeoBatch | Infer the likely gender of up to 100 full names, with a given cultural context (country ISO2 code).
[**genderGeo**](PersonalApi.md#genderGeo) | **GET** /api2/json/genderGeo/{firstName}/{lastName}/{countryIso2} | Infer the likely gender of a name, given a local context (ISO2 country code).
[**genderGeoBatch**](PersonalApi.md#genderGeoBatch) | **POST** /api2/json/genderGeoBatch | Infer the likely gender of up to 100 names, each given a local context (ISO2 country code).
[**origin**](PersonalApi.md#origin) | **GET** /api2/json/origin/{firstName}/{lastName} | [USES 10 UNITS PER NAME] Infer the likely country of origin of a personal name. Assumes names as they are in the country of origin. For US, CA, AU, NZ and other melting-pots : use &#39;diaspora&#39; instead.
[**originBatch**](PersonalApi.md#originBatch) | **POST** /api2/json/originBatch | [USES 10 UNITS PER NAME] Infer the likely country of origin of up to 100 names, detecting automatically the cultural context.
[**parseName**](PersonalApi.md#parseName) | **GET** /api2/json/parseName/{nameFull} | Infer the likely first/last name structure of a name, ex. John Smith or SMITH, John or SMITH; John.
[**parseNameBatch**](PersonalApi.md#parseNameBatch) | **POST** /api2/json/parseNameBatch | Infer the likely first/last name structure of a name, ex. John Smith or SMITH, John or SMITH; John.
[**parseNameGeo**](PersonalApi.md#parseNameGeo) | **GET** /api2/json/parseName/{nameFull}/{countryIso2} | Infer the likely first/last name structure of a name, ex. John Smith or SMITH, John or SMITH; John. For better accuracy, provide a geographic context.
[**parseNameGeoBatch**](PersonalApi.md#parseNameGeoBatch) | **POST** /api2/json/parseNameGeoBatch | Infer the likely first/last name structure of a name, ex. John Smith or SMITH, John or SMITH; John. Giving a local context improves precision.
[**parsedGenderBatch**](PersonalApi.md#parsedGenderBatch) | **POST** /api2/json/parsedGenderBatch | Infer the likely gender of up to 100 fully parsed names, detecting automatically the cultural context.
[**parsedGenderGeoBatch**](PersonalApi.md#parsedGenderGeoBatch) | **POST** /api2/json/parsedGenderGeoBatch | Infer the likely gender of up to 100 fully parsed names, detecting automatically the cultural context.
[**usRaceEthnicity**](PersonalApi.md#usRaceEthnicity) | **GET** /api2/json/usRaceEthnicity/{firstName}/{lastName} | [USES 10 UNITS PER NAME] Infer a US resident&#39;s likely race/ethnicity according to US Census taxonomy W_NL (white, non latino), HL (hispano latino),  A (asian, non latino), B_NL (black, non latino).
[**usRaceEthnicityBatch**](PersonalApi.md#usRaceEthnicityBatch) | **POST** /api2/json/usRaceEthnicityBatch | [USES 10 UNITS PER NAME] Infer up-to 100 US resident&#39;s likely race/ethnicity according to US Census taxonomy.
[**usRaceEthnicityZIP5**](PersonalApi.md#usRaceEthnicityZIP5) | **GET** /api2/json/usRaceEthnicityZIP5/{firstName}/{lastName}/{zip5Code} | [USES 10 UNITS PER NAME] Infer a US resident&#39;s likely race/ethnicity according to US Census taxonomy, using (optional) ZIP5 code info. Output is W_NL (white, non latino), HL (hispano latino),  A (asian, non latino), B_NL (black, non latino).
[**usZipRaceEthnicityBatch**](PersonalApi.md#usZipRaceEthnicityBatch) | **POST** /api2/json/usZipRaceEthnicityBatch | [USES 10 UNITS PER NAME] Infer up-to 100 US resident&#39;s likely race/ethnicity according to US Census taxonomy, with (optional) ZIP code.


# **country**
> \OpenAPI\Client\Model\PersonalNameGeoOut country($personal_name_full)

[USES 10 UNITS PER NAME] Infer the likely country of residence of a personal full name, or one surname. Assumes names as they are in the country of residence OR the country of origin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personal_name_full = 'personal_name_full_example'; // string | 

try {
    $result = $apiInstance->country($personal_name_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->country: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_name_full** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PersonalNameGeoOut**](../Model/PersonalNameGeoOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryBatch**
> \OpenAPI\Client\Model\BatchPersonalNameGeoOut countryBatch($batch_personal_name_in)

[USES 10 UNITS PER NAME] Infer the likely country of residence of up to 100 personal full names, or surnames. Assumes names as they are in the country of residence OR the country of origin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_personal_name_in = new \OpenAPI\Client\Model\BatchPersonalNameIn(); // \OpenAPI\Client\Model\BatchPersonalNameIn | A list of personal names

try {
    $result = $apiInstance->countryBatch($batch_personal_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->countryBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_personal_name_in** | [**\OpenAPI\Client\Model\BatchPersonalNameIn**](../Model/BatchPersonalNameIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchPersonalNameGeoOut**](../Model/BatchPersonalNameGeoOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diaspora**
> \OpenAPI\Client\Model\FirstLastNameDiasporaedOut diaspora($country_iso2, $first_name, $last_name)

[USES 20 UNITS PER NAME] Infer the likely ethnicity/diaspora of a personal name, given a country of residence ISO2 code (ex. US, CA, AU, NZ etc.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_iso2 = 'country_iso2_example'; // string | 
$first_name = 'first_name_example'; // string | 
$last_name = 'last_name_example'; // string | 

try {
    $result = $apiInstance->diaspora($country_iso2, $first_name, $last_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->diaspora: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_iso2** | **string**|  |
 **first_name** | **string**|  |
 **last_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNameDiasporaedOut**](../Model/FirstLastNameDiasporaedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diasporaBatch**
> \OpenAPI\Client\Model\BatchFirstLastNameDiasporaedOut diasporaBatch($batch_first_last_name_geo_in)

[USES 20 UNITS PER NAME] Infer the likely ethnicity/diaspora of up to 100 personal names, given a country of residence ISO2 code (ex. US, CA, AU, NZ etc.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_geo_in = new \OpenAPI\Client\Model\BatchFirstLastNameGeoIn(); // \OpenAPI\Client\Model\BatchFirstLastNameGeoIn | A list of personal names

try {
    $result = $apiInstance->diasporaBatch($batch_first_last_name_geo_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->diasporaBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_geo_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameGeoIn**](../Model/BatchFirstLastNameGeoIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNameDiasporaedOut**](../Model/BatchFirstLastNameDiasporaedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gender**
> \OpenAPI\Client\Model\FirstLastNameGenderedOut gender($first_name, $last_name)

Infer the likely gender of a name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = 'first_name_example'; // string | 
$last_name = 'last_name_example'; // string | 

try {
    $result = $apiInstance->gender($first_name, $last_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->gender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**|  |
 **last_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNameGenderedOut**](../Model/FirstLastNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderBatch**
> \OpenAPI\Client\Model\BatchFirstLastNameGenderedOut genderBatch($batch_first_last_name_in)

Infer the likely gender of up to 100 names, detecting automatically the cultural context.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_in = new \OpenAPI\Client\Model\BatchFirstLastNameIn(); // \OpenAPI\Client\Model\BatchFirstLastNameIn | A list of personal names

try {
    $result = $apiInstance->genderBatch($batch_first_last_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->genderBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameIn**](../Model/BatchFirstLastNameIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNameGenderedOut**](../Model/BatchFirstLastNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderFull**
> \OpenAPI\Client\Model\PersonalNameGenderedOut genderFull($full_name)

Infer the likely gender of a full name, ex. John H. Smith

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_name = 'full_name_example'; // string | 

try {
    $result = $apiInstance->genderFull($full_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->genderFull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PersonalNameGenderedOut**](../Model/PersonalNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderFullBatch**
> \OpenAPI\Client\Model\BatchPersonalNameGenderedOut genderFullBatch($batch_personal_name_in)

Infer the likely gender of up to 100 full names, detecting automatically the cultural context.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_personal_name_in = new \OpenAPI\Client\Model\BatchPersonalNameIn(); // \OpenAPI\Client\Model\BatchPersonalNameIn | A list of personal names

try {
    $result = $apiInstance->genderFullBatch($batch_personal_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->genderFullBatch: ', $e->getMessage(), PHP_EOL;
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

# **genderFullGeo**
> \OpenAPI\Client\Model\PersonalNameGenderedOut genderFullGeo($full_name, $country_iso2)

Infer the likely gender of a full name, given a local context (ISO2 country code).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_name = 'full_name_example'; // string | 
$country_iso2 = 'country_iso2_example'; // string | 

try {
    $result = $apiInstance->genderFullGeo($full_name, $country_iso2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->genderFullGeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_name** | **string**|  |
 **country_iso2** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PersonalNameGenderedOut**](../Model/PersonalNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderFullGeoBatch**
> \OpenAPI\Client\Model\BatchPersonalNameGenderedOut genderFullGeoBatch($batch_personal_name_geo_in)

Infer the likely gender of up to 100 full names, with a given cultural context (country ISO2 code).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_personal_name_geo_in = new \OpenAPI\Client\Model\BatchPersonalNameGeoIn(); // \OpenAPI\Client\Model\BatchPersonalNameGeoIn | A list of personal names, with a country ISO2 code

try {
    $result = $apiInstance->genderFullGeoBatch($batch_personal_name_geo_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->genderFullGeoBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_personal_name_geo_in** | [**\OpenAPI\Client\Model\BatchPersonalNameGeoIn**](../Model/BatchPersonalNameGeoIn.md)| A list of personal names, with a country ISO2 code | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchPersonalNameGenderedOut**](../Model/BatchPersonalNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderGeo**
> \OpenAPI\Client\Model\FirstLastNameGenderedOut genderGeo($first_name, $last_name, $country_iso2)

Infer the likely gender of a name, given a local context (ISO2 country code).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = 'first_name_example'; // string | 
$last_name = 'last_name_example'; // string | 
$country_iso2 = 'country_iso2_example'; // string | 

try {
    $result = $apiInstance->genderGeo($first_name, $last_name, $country_iso2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->genderGeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**|  |
 **last_name** | **string**|  |
 **country_iso2** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNameGenderedOut**](../Model/FirstLastNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderGeoBatch**
> \OpenAPI\Client\Model\BatchFirstLastNameGenderedOut genderGeoBatch($batch_first_last_name_geo_in)

Infer the likely gender of up to 100 names, each given a local context (ISO2 country code).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_geo_in = new \OpenAPI\Client\Model\BatchFirstLastNameGeoIn(); // \OpenAPI\Client\Model\BatchFirstLastNameGeoIn | A list of names, with country code.

try {
    $result = $apiInstance->genderGeoBatch($batch_first_last_name_geo_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->genderGeoBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_geo_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameGeoIn**](../Model/BatchFirstLastNameGeoIn.md)| A list of names, with country code. | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNameGenderedOut**](../Model/BatchFirstLastNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **origin**
> \OpenAPI\Client\Model\FirstLastNameOriginedOut origin($first_name, $last_name)

[USES 10 UNITS PER NAME] Infer the likely country of origin of a personal name. Assumes names as they are in the country of origin. For US, CA, AU, NZ and other melting-pots : use 'diaspora' instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = 'first_name_example'; // string | 
$last_name = 'last_name_example'; // string | 

try {
    $result = $apiInstance->origin($first_name, $last_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->origin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**|  |
 **last_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNameOriginedOut**](../Model/FirstLastNameOriginedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **originBatch**
> \OpenAPI\Client\Model\BatchFirstLastNameOriginedOut originBatch($batch_first_last_name_in)

[USES 10 UNITS PER NAME] Infer the likely country of origin of up to 100 names, detecting automatically the cultural context.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_in = new \OpenAPI\Client\Model\BatchFirstLastNameIn(); // \OpenAPI\Client\Model\BatchFirstLastNameIn | A list of personal names

try {
    $result = $apiInstance->originBatch($batch_first_last_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->originBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameIn**](../Model/BatchFirstLastNameIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNameOriginedOut**](../Model/BatchFirstLastNameOriginedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parseName**
> \OpenAPI\Client\Model\PersonalNameParsedOut parseName($name_full)

Infer the likely first/last name structure of a name, ex. John Smith or SMITH, John or SMITH; John.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name_full = 'name_full_example'; // string | 

try {
    $result = $apiInstance->parseName($name_full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->parseName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name_full** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PersonalNameParsedOut**](../Model/PersonalNameParsedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parseNameBatch**
> \OpenAPI\Client\Model\BatchPersonalNameParsedOut parseNameBatch($batch_personal_name_in)

Infer the likely first/last name structure of a name, ex. John Smith or SMITH, John or SMITH; John.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_personal_name_in = new \OpenAPI\Client\Model\BatchPersonalNameIn(); // \OpenAPI\Client\Model\BatchPersonalNameIn | A list of personal names

try {
    $result = $apiInstance->parseNameBatch($batch_personal_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->parseNameBatch: ', $e->getMessage(), PHP_EOL;
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

# **parseNameGeo**
> \OpenAPI\Client\Model\PersonalNameParsedOut parseNameGeo($name_full, $country_iso2)

Infer the likely first/last name structure of a name, ex. John Smith or SMITH, John or SMITH; John. For better accuracy, provide a geographic context.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name_full = 'name_full_example'; // string | 
$country_iso2 = 'country_iso2_example'; // string | 

try {
    $result = $apiInstance->parseNameGeo($name_full, $country_iso2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->parseNameGeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name_full** | **string**|  |
 **country_iso2** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PersonalNameParsedOut**](../Model/PersonalNameParsedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parseNameGeoBatch**
> \OpenAPI\Client\Model\BatchPersonalNameParsedOut parseNameGeoBatch($batch_personal_name_geo_in)

Infer the likely first/last name structure of a name, ex. John Smith or SMITH, John or SMITH; John. Giving a local context improves precision.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_personal_name_geo_in = new \OpenAPI\Client\Model\BatchPersonalNameGeoIn(); // \OpenAPI\Client\Model\BatchPersonalNameGeoIn | A list of personal names

try {
    $result = $apiInstance->parseNameGeoBatch($batch_personal_name_geo_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->parseNameGeoBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_personal_name_geo_in** | [**\OpenAPI\Client\Model\BatchPersonalNameGeoIn**](../Model/BatchPersonalNameGeoIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchPersonalNameParsedOut**](../Model/BatchPersonalNameParsedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parsedGenderBatch**
> \OpenAPI\Client\Model\BatchFirstLastNameGenderedOut parsedGenderBatch($batch_parsed_full_name_in)

Infer the likely gender of up to 100 fully parsed names, detecting automatically the cultural context.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_parsed_full_name_in = new \OpenAPI\Client\Model\BatchParsedFullNameIn(); // \OpenAPI\Client\Model\BatchParsedFullNameIn | A list of personal names

try {
    $result = $apiInstance->parsedGenderBatch($batch_parsed_full_name_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->parsedGenderBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_parsed_full_name_in** | [**\OpenAPI\Client\Model\BatchParsedFullNameIn**](../Model/BatchParsedFullNameIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNameGenderedOut**](../Model/BatchFirstLastNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parsedGenderGeoBatch**
> \OpenAPI\Client\Model\BatchFirstLastNameGenderedOut parsedGenderGeoBatch($batch_parsed_full_name_geo_in)

Infer the likely gender of up to 100 fully parsed names, detecting automatically the cultural context.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_parsed_full_name_geo_in = new \OpenAPI\Client\Model\BatchParsedFullNameGeoIn(); // \OpenAPI\Client\Model\BatchParsedFullNameGeoIn | A list of personal names

try {
    $result = $apiInstance->parsedGenderGeoBatch($batch_parsed_full_name_geo_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->parsedGenderGeoBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_parsed_full_name_geo_in** | [**\OpenAPI\Client\Model\BatchParsedFullNameGeoIn**](../Model/BatchParsedFullNameGeoIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNameGenderedOut**](../Model/BatchFirstLastNameGenderedOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usRaceEthnicity**
> \OpenAPI\Client\Model\FirstLastNameUSRaceEthnicityOut usRaceEthnicity($first_name, $last_name)

[USES 10 UNITS PER NAME] Infer a US resident's likely race/ethnicity according to US Census taxonomy W_NL (white, non latino), HL (hispano latino),  A (asian, non latino), B_NL (black, non latino).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = 'first_name_example'; // string | 
$last_name = 'last_name_example'; // string | 

try {
    $result = $apiInstance->usRaceEthnicity($first_name, $last_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->usRaceEthnicity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**|  |
 **last_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNameUSRaceEthnicityOut**](../Model/FirstLastNameUSRaceEthnicityOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usRaceEthnicityBatch**
> \OpenAPI\Client\Model\BatchFirstLastNameUSRaceEthnicityOut usRaceEthnicityBatch($batch_first_last_name_geo_in)

[USES 10 UNITS PER NAME] Infer up-to 100 US resident's likely race/ethnicity according to US Census taxonomy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_geo_in = new \OpenAPI\Client\Model\BatchFirstLastNameGeoIn(); // \OpenAPI\Client\Model\BatchFirstLastNameGeoIn | A list of personal names

try {
    $result = $apiInstance->usRaceEthnicityBatch($batch_first_last_name_geo_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->usRaceEthnicityBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_geo_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameGeoIn**](../Model/BatchFirstLastNameGeoIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNameUSRaceEthnicityOut**](../Model/BatchFirstLastNameUSRaceEthnicityOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usRaceEthnicityZIP5**
> \OpenAPI\Client\Model\FirstLastNameUSRaceEthnicityOut usRaceEthnicityZIP5($first_name, $last_name, $zip5_code)

[USES 10 UNITS PER NAME] Infer a US resident's likely race/ethnicity according to US Census taxonomy, using (optional) ZIP5 code info. Output is W_NL (white, non latino), HL (hispano latino),  A (asian, non latino), B_NL (black, non latino).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = 'first_name_example'; // string | 
$last_name = 'last_name_example'; // string | 
$zip5_code = 'zip5_code_example'; // string | 

try {
    $result = $apiInstance->usRaceEthnicityZIP5($first_name, $last_name, $zip5_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->usRaceEthnicityZIP5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**|  |
 **last_name** | **string**|  |
 **zip5_code** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\FirstLastNameUSRaceEthnicityOut**](../Model/FirstLastNameUSRaceEthnicityOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usZipRaceEthnicityBatch**
> \OpenAPI\Client\Model\BatchFirstLastNameUSRaceEthnicityOut usZipRaceEthnicityBatch($batch_first_last_name_geo_zipped_in)

[USES 10 UNITS PER NAME] Infer up-to 100 US resident's likely race/ethnicity according to US Census taxonomy, with (optional) ZIP code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PersonalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_first_last_name_geo_zipped_in = new \OpenAPI\Client\Model\BatchFirstLastNameGeoZippedIn(); // \OpenAPI\Client\Model\BatchFirstLastNameGeoZippedIn | A list of personal names

try {
    $result = $apiInstance->usZipRaceEthnicityBatch($batch_first_last_name_geo_zipped_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalApi->usZipRaceEthnicityBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_first_last_name_geo_zipped_in** | [**\OpenAPI\Client\Model\BatchFirstLastNameGeoZippedIn**](../Model/BatchFirstLastNameGeoZippedIn.md)| A list of personal names | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchFirstLastNameUSRaceEthnicityOut**](../Model/BatchFirstLastNameUSRaceEthnicityOut.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

