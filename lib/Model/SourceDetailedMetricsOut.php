<?php
/**
 * SourceDetailedMetricsOut
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NamSor API v2
 *
 * NamSor API v2 : enpoints to process personal names (gender, cultural origin or ethnicity) in all alphabets or languages. Use GET methods for small tests, but prefer POST methods for higher throughput (batch processing of up to 1000 names at a time). Need something you can't find here? We have many more features coming soon. Let us know, we'll do our best to add it!
 *
 * OpenAPI spec version: 2.0.2-beta
 * Contact: contact@namsor.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SourceDetailedMetricsOut Class Doc Comment
 *
 * @category Class
 * @description Simple metrics on source, with details by classifier.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SourceDetailedMetricsOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SourceDetailedMetricsOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'classifier_name' => 'string',
        'source' => '\OpenAPI\Client\Model\APIKeyOut',
        'ai_estimate_total' => 'int',
        'ai_estimate_precision' => 'double',
        'ai_estimate_recall' => 'double',
        'metric_time_stamp' => 'int',
        'ai_start_time' => 'int',
        'ai_learn_total' => 'int',
        'snapshot_date' => 'int',
        'expected_class_metrics' => '\OpenAPI\Client\Model\ExpectedClassMetricsOut[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'classifier_name' => null,
        'source' => null,
        'ai_estimate_total' => 'int64',
        'ai_estimate_precision' => 'double',
        'ai_estimate_recall' => 'double',
        'metric_time_stamp' => 'int64',
        'ai_start_time' => 'int64',
        'ai_learn_total' => 'int64',
        'snapshot_date' => 'int64',
        'expected_class_metrics' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'classifier_name' => 'classifierName',
        'source' => 'source',
        'ai_estimate_total' => 'aiEstimateTotal',
        'ai_estimate_precision' => 'aiEstimatePrecision',
        'ai_estimate_recall' => 'aiEstimateRecall',
        'metric_time_stamp' => 'metricTimeStamp',
        'ai_start_time' => 'aiStartTime',
        'ai_learn_total' => 'aiLearnTotal',
        'snapshot_date' => 'snapshotDate',
        'expected_class_metrics' => 'expectedClassMetrics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'classifier_name' => 'setClassifierName',
        'source' => 'setSource',
        'ai_estimate_total' => 'setAiEstimateTotal',
        'ai_estimate_precision' => 'setAiEstimatePrecision',
        'ai_estimate_recall' => 'setAiEstimateRecall',
        'metric_time_stamp' => 'setMetricTimeStamp',
        'ai_start_time' => 'setAiStartTime',
        'ai_learn_total' => 'setAiLearnTotal',
        'snapshot_date' => 'setSnapshotDate',
        'expected_class_metrics' => 'setExpectedClassMetrics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'classifier_name' => 'getClassifierName',
        'source' => 'getSource',
        'ai_estimate_total' => 'getAiEstimateTotal',
        'ai_estimate_precision' => 'getAiEstimatePrecision',
        'ai_estimate_recall' => 'getAiEstimateRecall',
        'metric_time_stamp' => 'getMetricTimeStamp',
        'ai_start_time' => 'getAiStartTime',
        'ai_learn_total' => 'getAiLearnTotal',
        'snapshot_date' => 'getSnapshotDate',
        'expected_class_metrics' => 'getExpectedClassMetrics'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['classifier_name'] = isset($data['classifier_name']) ? $data['classifier_name'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['ai_estimate_total'] = isset($data['ai_estimate_total']) ? $data['ai_estimate_total'] : null;
        $this->container['ai_estimate_precision'] = isset($data['ai_estimate_precision']) ? $data['ai_estimate_precision'] : null;
        $this->container['ai_estimate_recall'] = isset($data['ai_estimate_recall']) ? $data['ai_estimate_recall'] : null;
        $this->container['metric_time_stamp'] = isset($data['metric_time_stamp']) ? $data['metric_time_stamp'] : null;
        $this->container['ai_start_time'] = isset($data['ai_start_time']) ? $data['ai_start_time'] : null;
        $this->container['ai_learn_total'] = isset($data['ai_learn_total']) ? $data['ai_learn_total'] : null;
        $this->container['snapshot_date'] = isset($data['snapshot_date']) ? $data['snapshot_date'] : null;
        $this->container['expected_class_metrics'] = isset($data['expected_class_metrics']) ? $data['expected_class_metrics'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets classifier_name
     *
     * @return string|null
     */
    public function getClassifierName()
    {
        return $this->container['classifier_name'];
    }

    /**
     * Sets classifier_name
     *
     * @param string|null $classifier_name classifier_name
     *
     * @return $this
     */
    public function setClassifierName($classifier_name)
    {
        $this->container['classifier_name'] = $classifier_name;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\APIKeyOut|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\APIKeyOut|null $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets ai_estimate_total
     *
     * @return int|null
     */
    public function getAiEstimateTotal()
    {
        return $this->container['ai_estimate_total'];
    }

    /**
     * Sets ai_estimate_total
     *
     * @param int|null $ai_estimate_total ai_estimate_total
     *
     * @return $this
     */
    public function setAiEstimateTotal($ai_estimate_total)
    {
        $this->container['ai_estimate_total'] = $ai_estimate_total;

        return $this;
    }

    /**
     * Gets ai_estimate_precision
     *
     * @return double|null
     */
    public function getAiEstimatePrecision()
    {
        return $this->container['ai_estimate_precision'];
    }

    /**
     * Sets ai_estimate_precision
     *
     * @param double|null $ai_estimate_precision ai_estimate_precision
     *
     * @return $this
     */
    public function setAiEstimatePrecision($ai_estimate_precision)
    {
        $this->container['ai_estimate_precision'] = $ai_estimate_precision;

        return $this;
    }

    /**
     * Gets ai_estimate_recall
     *
     * @return double|null
     */
    public function getAiEstimateRecall()
    {
        return $this->container['ai_estimate_recall'];
    }

    /**
     * Sets ai_estimate_recall
     *
     * @param double|null $ai_estimate_recall ai_estimate_recall
     *
     * @return $this
     */
    public function setAiEstimateRecall($ai_estimate_recall)
    {
        $this->container['ai_estimate_recall'] = $ai_estimate_recall;

        return $this;
    }

    /**
     * Gets metric_time_stamp
     *
     * @return int|null
     */
    public function getMetricTimeStamp()
    {
        return $this->container['metric_time_stamp'];
    }

    /**
     * Sets metric_time_stamp
     *
     * @param int|null $metric_time_stamp metric_time_stamp
     *
     * @return $this
     */
    public function setMetricTimeStamp($metric_time_stamp)
    {
        $this->container['metric_time_stamp'] = $metric_time_stamp;

        return $this;
    }

    /**
     * Gets ai_start_time
     *
     * @return int|null
     */
    public function getAiStartTime()
    {
        return $this->container['ai_start_time'];
    }

    /**
     * Sets ai_start_time
     *
     * @param int|null $ai_start_time ai_start_time
     *
     * @return $this
     */
    public function setAiStartTime($ai_start_time)
    {
        $this->container['ai_start_time'] = $ai_start_time;

        return $this;
    }

    /**
     * Gets ai_learn_total
     *
     * @return int|null
     */
    public function getAiLearnTotal()
    {
        return $this->container['ai_learn_total'];
    }

    /**
     * Sets ai_learn_total
     *
     * @param int|null $ai_learn_total ai_learn_total
     *
     * @return $this
     */
    public function setAiLearnTotal($ai_learn_total)
    {
        $this->container['ai_learn_total'] = $ai_learn_total;

        return $this;
    }

    /**
     * Gets snapshot_date
     *
     * @return int|null
     */
    public function getSnapshotDate()
    {
        return $this->container['snapshot_date'];
    }

    /**
     * Sets snapshot_date
     *
     * @param int|null $snapshot_date snapshot_date
     *
     * @return $this
     */
    public function setSnapshotDate($snapshot_date)
    {
        $this->container['snapshot_date'] = $snapshot_date;

        return $this;
    }

    /**
     * Gets expected_class_metrics
     *
     * @return \OpenAPI\Client\Model\ExpectedClassMetricsOut[]|null
     */
    public function getExpectedClassMetrics()
    {
        return $this->container['expected_class_metrics'];
    }

    /**
     * Sets expected_class_metrics
     *
     * @param \OpenAPI\Client\Model\ExpectedClassMetricsOut[]|null $expected_class_metrics expected_class_metrics
     *
     * @return $this
     */
    public function setExpectedClassMetrics($expected_class_metrics)
    {
        $this->container['expected_class_metrics'] = $expected_class_metrics;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


