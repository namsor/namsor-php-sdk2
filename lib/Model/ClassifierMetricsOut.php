<?php
/**
 * ClassifierMetricsOut
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
 * NamSor API v2 : enpoints to process personal names (gender, cultural origin or ethnicity) in all alphabets or languages. Use GET methods for small tests, but prefer POST methods for higher throughput (batch processing of up to 100 names at a time). Need something you can't find here? We have many more features coming soon. Let us know, we'll do our best to add it!
 *
 * OpenAPI spec version: 2.0.6
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
 * ClassifierMetricsOut Class Doc Comment
 *
 * @category Class
 * @description Simple metrics on a classifier
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClassifierMetricsOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClassifierMetricsOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'learn_queue_size' => 'int',
        'buffer_size' => 'int',
        'pre_classify_queue_size' => 'int',
        'fact_keys_size' => 'int',
        'facts_learned' => 'int',
        'classify_durations_current' => 'double',
        'classify_durations_summary' => 'double',
        'learn_durations_current' => 'double',
        'learn_durations_summary' => 'double',
        'classifier_name' => 'string',
        'features_size' => 'int',
        'ai_vetted_estimate_total' => 'int',
        'ai_vetted_estimate_precision' => 'double',
        'ai_vetted_estimate_recall' => 'double',
        'ai_vetted_learn_total' => 'int',
        'ai_non_vetted_estimate_total' => 'int',
        'ai_non_vetted_estimate_precision' => 'double',
        'ai_non_vetted_estimate_recall' => 'double',
        'ai_non_vetted_learn_total' => 'int',
        'metric_time_stamp' => 'int',
        'ai_start_time' => 'int',
        'ai_vetted_expected_class_metrics' => '\OpenAPI\Client\Model\ExpectedClassMetricsOut[]',
        'ai_non_vetted_expected_class_metrics' => '\OpenAPI\Client\Model\ExpectedClassMetricsOut[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'learn_queue_size' => 'int32',
        'buffer_size' => 'int32',
        'pre_classify_queue_size' => 'int32',
        'fact_keys_size' => 'int32',
        'facts_learned' => 'int64',
        'classify_durations_current' => 'double',
        'classify_durations_summary' => 'double',
        'learn_durations_current' => 'double',
        'learn_durations_summary' => 'double',
        'classifier_name' => null,
        'features_size' => 'int64',
        'ai_vetted_estimate_total' => 'int64',
        'ai_vetted_estimate_precision' => 'double',
        'ai_vetted_estimate_recall' => 'double',
        'ai_vetted_learn_total' => 'int64',
        'ai_non_vetted_estimate_total' => 'int64',
        'ai_non_vetted_estimate_precision' => 'double',
        'ai_non_vetted_estimate_recall' => 'double',
        'ai_non_vetted_learn_total' => 'int64',
        'metric_time_stamp' => 'int64',
        'ai_start_time' => 'int64',
        'ai_vetted_expected_class_metrics' => null,
        'ai_non_vetted_expected_class_metrics' => null
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
        'learn_queue_size' => 'learnQueueSize',
        'buffer_size' => 'bufferSize',
        'pre_classify_queue_size' => 'preClassifyQueueSize',
        'fact_keys_size' => 'factKeysSize',
        'facts_learned' => 'factsLearned',
        'classify_durations_current' => 'classifyDurationsCurrent',
        'classify_durations_summary' => 'classifyDurationsSummary',
        'learn_durations_current' => 'learnDurationsCurrent',
        'learn_durations_summary' => 'learnDurationsSummary',
        'classifier_name' => 'classifierName',
        'features_size' => 'featuresSize',
        'ai_vetted_estimate_total' => 'aiVettedEstimateTotal',
        'ai_vetted_estimate_precision' => 'aiVettedEstimatePrecision',
        'ai_vetted_estimate_recall' => 'aiVettedEstimateRecall',
        'ai_vetted_learn_total' => 'aiVettedLearnTotal',
        'ai_non_vetted_estimate_total' => 'aiNonVettedEstimateTotal',
        'ai_non_vetted_estimate_precision' => 'aiNonVettedEstimatePrecision',
        'ai_non_vetted_estimate_recall' => 'aiNonVettedEstimateRecall',
        'ai_non_vetted_learn_total' => 'aiNonVettedLearnTotal',
        'metric_time_stamp' => 'metricTimeStamp',
        'ai_start_time' => 'aiStartTime',
        'ai_vetted_expected_class_metrics' => 'aiVettedExpectedClassMetrics',
        'ai_non_vetted_expected_class_metrics' => 'aiNonVettedExpectedClassMetrics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'learn_queue_size' => 'setLearnQueueSize',
        'buffer_size' => 'setBufferSize',
        'pre_classify_queue_size' => 'setPreClassifyQueueSize',
        'fact_keys_size' => 'setFactKeysSize',
        'facts_learned' => 'setFactsLearned',
        'classify_durations_current' => 'setClassifyDurationsCurrent',
        'classify_durations_summary' => 'setClassifyDurationsSummary',
        'learn_durations_current' => 'setLearnDurationsCurrent',
        'learn_durations_summary' => 'setLearnDurationsSummary',
        'classifier_name' => 'setClassifierName',
        'features_size' => 'setFeaturesSize',
        'ai_vetted_estimate_total' => 'setAiVettedEstimateTotal',
        'ai_vetted_estimate_precision' => 'setAiVettedEstimatePrecision',
        'ai_vetted_estimate_recall' => 'setAiVettedEstimateRecall',
        'ai_vetted_learn_total' => 'setAiVettedLearnTotal',
        'ai_non_vetted_estimate_total' => 'setAiNonVettedEstimateTotal',
        'ai_non_vetted_estimate_precision' => 'setAiNonVettedEstimatePrecision',
        'ai_non_vetted_estimate_recall' => 'setAiNonVettedEstimateRecall',
        'ai_non_vetted_learn_total' => 'setAiNonVettedLearnTotal',
        'metric_time_stamp' => 'setMetricTimeStamp',
        'ai_start_time' => 'setAiStartTime',
        'ai_vetted_expected_class_metrics' => 'setAiVettedExpectedClassMetrics',
        'ai_non_vetted_expected_class_metrics' => 'setAiNonVettedExpectedClassMetrics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'learn_queue_size' => 'getLearnQueueSize',
        'buffer_size' => 'getBufferSize',
        'pre_classify_queue_size' => 'getPreClassifyQueueSize',
        'fact_keys_size' => 'getFactKeysSize',
        'facts_learned' => 'getFactsLearned',
        'classify_durations_current' => 'getClassifyDurationsCurrent',
        'classify_durations_summary' => 'getClassifyDurationsSummary',
        'learn_durations_current' => 'getLearnDurationsCurrent',
        'learn_durations_summary' => 'getLearnDurationsSummary',
        'classifier_name' => 'getClassifierName',
        'features_size' => 'getFeaturesSize',
        'ai_vetted_estimate_total' => 'getAiVettedEstimateTotal',
        'ai_vetted_estimate_precision' => 'getAiVettedEstimatePrecision',
        'ai_vetted_estimate_recall' => 'getAiVettedEstimateRecall',
        'ai_vetted_learn_total' => 'getAiVettedLearnTotal',
        'ai_non_vetted_estimate_total' => 'getAiNonVettedEstimateTotal',
        'ai_non_vetted_estimate_precision' => 'getAiNonVettedEstimatePrecision',
        'ai_non_vetted_estimate_recall' => 'getAiNonVettedEstimateRecall',
        'ai_non_vetted_learn_total' => 'getAiNonVettedLearnTotal',
        'metric_time_stamp' => 'getMetricTimeStamp',
        'ai_start_time' => 'getAiStartTime',
        'ai_vetted_expected_class_metrics' => 'getAiVettedExpectedClassMetrics',
        'ai_non_vetted_expected_class_metrics' => 'getAiNonVettedExpectedClassMetrics'
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
        $this->container['learn_queue_size'] = isset($data['learn_queue_size']) ? $data['learn_queue_size'] : null;
        $this->container['buffer_size'] = isset($data['buffer_size']) ? $data['buffer_size'] : null;
        $this->container['pre_classify_queue_size'] = isset($data['pre_classify_queue_size']) ? $data['pre_classify_queue_size'] : null;
        $this->container['fact_keys_size'] = isset($data['fact_keys_size']) ? $data['fact_keys_size'] : null;
        $this->container['facts_learned'] = isset($data['facts_learned']) ? $data['facts_learned'] : null;
        $this->container['classify_durations_current'] = isset($data['classify_durations_current']) ? $data['classify_durations_current'] : null;
        $this->container['classify_durations_summary'] = isset($data['classify_durations_summary']) ? $data['classify_durations_summary'] : null;
        $this->container['learn_durations_current'] = isset($data['learn_durations_current']) ? $data['learn_durations_current'] : null;
        $this->container['learn_durations_summary'] = isset($data['learn_durations_summary']) ? $data['learn_durations_summary'] : null;
        $this->container['classifier_name'] = isset($data['classifier_name']) ? $data['classifier_name'] : null;
        $this->container['features_size'] = isset($data['features_size']) ? $data['features_size'] : null;
        $this->container['ai_vetted_estimate_total'] = isset($data['ai_vetted_estimate_total']) ? $data['ai_vetted_estimate_total'] : null;
        $this->container['ai_vetted_estimate_precision'] = isset($data['ai_vetted_estimate_precision']) ? $data['ai_vetted_estimate_precision'] : null;
        $this->container['ai_vetted_estimate_recall'] = isset($data['ai_vetted_estimate_recall']) ? $data['ai_vetted_estimate_recall'] : null;
        $this->container['ai_vetted_learn_total'] = isset($data['ai_vetted_learn_total']) ? $data['ai_vetted_learn_total'] : null;
        $this->container['ai_non_vetted_estimate_total'] = isset($data['ai_non_vetted_estimate_total']) ? $data['ai_non_vetted_estimate_total'] : null;
        $this->container['ai_non_vetted_estimate_precision'] = isset($data['ai_non_vetted_estimate_precision']) ? $data['ai_non_vetted_estimate_precision'] : null;
        $this->container['ai_non_vetted_estimate_recall'] = isset($data['ai_non_vetted_estimate_recall']) ? $data['ai_non_vetted_estimate_recall'] : null;
        $this->container['ai_non_vetted_learn_total'] = isset($data['ai_non_vetted_learn_total']) ? $data['ai_non_vetted_learn_total'] : null;
        $this->container['metric_time_stamp'] = isset($data['metric_time_stamp']) ? $data['metric_time_stamp'] : null;
        $this->container['ai_start_time'] = isset($data['ai_start_time']) ? $data['ai_start_time'] : null;
        $this->container['ai_vetted_expected_class_metrics'] = isset($data['ai_vetted_expected_class_metrics']) ? $data['ai_vetted_expected_class_metrics'] : null;
        $this->container['ai_non_vetted_expected_class_metrics'] = isset($data['ai_non_vetted_expected_class_metrics']) ? $data['ai_non_vetted_expected_class_metrics'] : null;
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
     * Gets learn_queue_size
     *
     * @return int|null
     */
    public function getLearnQueueSize()
    {
        return $this->container['learn_queue_size'];
    }

    /**
     * Sets learn_queue_size
     *
     * @param int|null $learn_queue_size learn_queue_size
     *
     * @return $this
     */
    public function setLearnQueueSize($learn_queue_size)
    {
        $this->container['learn_queue_size'] = $learn_queue_size;

        return $this;
    }

    /**
     * Gets buffer_size
     *
     * @return int|null
     */
    public function getBufferSize()
    {
        return $this->container['buffer_size'];
    }

    /**
     * Sets buffer_size
     *
     * @param int|null $buffer_size buffer_size
     *
     * @return $this
     */
    public function setBufferSize($buffer_size)
    {
        $this->container['buffer_size'] = $buffer_size;

        return $this;
    }

    /**
     * Gets pre_classify_queue_size
     *
     * @return int|null
     */
    public function getPreClassifyQueueSize()
    {
        return $this->container['pre_classify_queue_size'];
    }

    /**
     * Sets pre_classify_queue_size
     *
     * @param int|null $pre_classify_queue_size pre_classify_queue_size
     *
     * @return $this
     */
    public function setPreClassifyQueueSize($pre_classify_queue_size)
    {
        $this->container['pre_classify_queue_size'] = $pre_classify_queue_size;

        return $this;
    }

    /**
     * Gets fact_keys_size
     *
     * @return int|null
     */
    public function getFactKeysSize()
    {
        return $this->container['fact_keys_size'];
    }

    /**
     * Sets fact_keys_size
     *
     * @param int|null $fact_keys_size fact_keys_size
     *
     * @return $this
     */
    public function setFactKeysSize($fact_keys_size)
    {
        $this->container['fact_keys_size'] = $fact_keys_size;

        return $this;
    }

    /**
     * Gets facts_learned
     *
     * @return int|null
     */
    public function getFactsLearned()
    {
        return $this->container['facts_learned'];
    }

    /**
     * Sets facts_learned
     *
     * @param int|null $facts_learned facts_learned
     *
     * @return $this
     */
    public function setFactsLearned($facts_learned)
    {
        $this->container['facts_learned'] = $facts_learned;

        return $this;
    }

    /**
     * Gets classify_durations_current
     *
     * @return double|null
     */
    public function getClassifyDurationsCurrent()
    {
        return $this->container['classify_durations_current'];
    }

    /**
     * Sets classify_durations_current
     *
     * @param double|null $classify_durations_current classify_durations_current
     *
     * @return $this
     */
    public function setClassifyDurationsCurrent($classify_durations_current)
    {
        $this->container['classify_durations_current'] = $classify_durations_current;

        return $this;
    }

    /**
     * Gets classify_durations_summary
     *
     * @return double|null
     */
    public function getClassifyDurationsSummary()
    {
        return $this->container['classify_durations_summary'];
    }

    /**
     * Sets classify_durations_summary
     *
     * @param double|null $classify_durations_summary classify_durations_summary
     *
     * @return $this
     */
    public function setClassifyDurationsSummary($classify_durations_summary)
    {
        $this->container['classify_durations_summary'] = $classify_durations_summary;

        return $this;
    }

    /**
     * Gets learn_durations_current
     *
     * @return double|null
     */
    public function getLearnDurationsCurrent()
    {
        return $this->container['learn_durations_current'];
    }

    /**
     * Sets learn_durations_current
     *
     * @param double|null $learn_durations_current learn_durations_current
     *
     * @return $this
     */
    public function setLearnDurationsCurrent($learn_durations_current)
    {
        $this->container['learn_durations_current'] = $learn_durations_current;

        return $this;
    }

    /**
     * Gets learn_durations_summary
     *
     * @return double|null
     */
    public function getLearnDurationsSummary()
    {
        return $this->container['learn_durations_summary'];
    }

    /**
     * Sets learn_durations_summary
     *
     * @param double|null $learn_durations_summary learn_durations_summary
     *
     * @return $this
     */
    public function setLearnDurationsSummary($learn_durations_summary)
    {
        $this->container['learn_durations_summary'] = $learn_durations_summary;

        return $this;
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
     * Gets features_size
     *
     * @return int|null
     */
    public function getFeaturesSize()
    {
        return $this->container['features_size'];
    }

    /**
     * Sets features_size
     *
     * @param int|null $features_size features_size
     *
     * @return $this
     */
    public function setFeaturesSize($features_size)
    {
        $this->container['features_size'] = $features_size;

        return $this;
    }

    /**
     * Gets ai_vetted_estimate_total
     *
     * @return int|null
     */
    public function getAiVettedEstimateTotal()
    {
        return $this->container['ai_vetted_estimate_total'];
    }

    /**
     * Sets ai_vetted_estimate_total
     *
     * @param int|null $ai_vetted_estimate_total ai_vetted_estimate_total
     *
     * @return $this
     */
    public function setAiVettedEstimateTotal($ai_vetted_estimate_total)
    {
        $this->container['ai_vetted_estimate_total'] = $ai_vetted_estimate_total;

        return $this;
    }

    /**
     * Gets ai_vetted_estimate_precision
     *
     * @return double|null
     */
    public function getAiVettedEstimatePrecision()
    {
        return $this->container['ai_vetted_estimate_precision'];
    }

    /**
     * Sets ai_vetted_estimate_precision
     *
     * @param double|null $ai_vetted_estimate_precision ai_vetted_estimate_precision
     *
     * @return $this
     */
    public function setAiVettedEstimatePrecision($ai_vetted_estimate_precision)
    {
        $this->container['ai_vetted_estimate_precision'] = $ai_vetted_estimate_precision;

        return $this;
    }

    /**
     * Gets ai_vetted_estimate_recall
     *
     * @return double|null
     */
    public function getAiVettedEstimateRecall()
    {
        return $this->container['ai_vetted_estimate_recall'];
    }

    /**
     * Sets ai_vetted_estimate_recall
     *
     * @param double|null $ai_vetted_estimate_recall ai_vetted_estimate_recall
     *
     * @return $this
     */
    public function setAiVettedEstimateRecall($ai_vetted_estimate_recall)
    {
        $this->container['ai_vetted_estimate_recall'] = $ai_vetted_estimate_recall;

        return $this;
    }

    /**
     * Gets ai_vetted_learn_total
     *
     * @return int|null
     */
    public function getAiVettedLearnTotal()
    {
        return $this->container['ai_vetted_learn_total'];
    }

    /**
     * Sets ai_vetted_learn_total
     *
     * @param int|null $ai_vetted_learn_total ai_vetted_learn_total
     *
     * @return $this
     */
    public function setAiVettedLearnTotal($ai_vetted_learn_total)
    {
        $this->container['ai_vetted_learn_total'] = $ai_vetted_learn_total;

        return $this;
    }

    /**
     * Gets ai_non_vetted_estimate_total
     *
     * @return int|null
     */
    public function getAiNonVettedEstimateTotal()
    {
        return $this->container['ai_non_vetted_estimate_total'];
    }

    /**
     * Sets ai_non_vetted_estimate_total
     *
     * @param int|null $ai_non_vetted_estimate_total ai_non_vetted_estimate_total
     *
     * @return $this
     */
    public function setAiNonVettedEstimateTotal($ai_non_vetted_estimate_total)
    {
        $this->container['ai_non_vetted_estimate_total'] = $ai_non_vetted_estimate_total;

        return $this;
    }

    /**
     * Gets ai_non_vetted_estimate_precision
     *
     * @return double|null
     */
    public function getAiNonVettedEstimatePrecision()
    {
        return $this->container['ai_non_vetted_estimate_precision'];
    }

    /**
     * Sets ai_non_vetted_estimate_precision
     *
     * @param double|null $ai_non_vetted_estimate_precision ai_non_vetted_estimate_precision
     *
     * @return $this
     */
    public function setAiNonVettedEstimatePrecision($ai_non_vetted_estimate_precision)
    {
        $this->container['ai_non_vetted_estimate_precision'] = $ai_non_vetted_estimate_precision;

        return $this;
    }

    /**
     * Gets ai_non_vetted_estimate_recall
     *
     * @return double|null
     */
    public function getAiNonVettedEstimateRecall()
    {
        return $this->container['ai_non_vetted_estimate_recall'];
    }

    /**
     * Sets ai_non_vetted_estimate_recall
     *
     * @param double|null $ai_non_vetted_estimate_recall ai_non_vetted_estimate_recall
     *
     * @return $this
     */
    public function setAiNonVettedEstimateRecall($ai_non_vetted_estimate_recall)
    {
        $this->container['ai_non_vetted_estimate_recall'] = $ai_non_vetted_estimate_recall;

        return $this;
    }

    /**
     * Gets ai_non_vetted_learn_total
     *
     * @return int|null
     */
    public function getAiNonVettedLearnTotal()
    {
        return $this->container['ai_non_vetted_learn_total'];
    }

    /**
     * Sets ai_non_vetted_learn_total
     *
     * @param int|null $ai_non_vetted_learn_total ai_non_vetted_learn_total
     *
     * @return $this
     */
    public function setAiNonVettedLearnTotal($ai_non_vetted_learn_total)
    {
        $this->container['ai_non_vetted_learn_total'] = $ai_non_vetted_learn_total;

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
     * Gets ai_vetted_expected_class_metrics
     *
     * @return \OpenAPI\Client\Model\ExpectedClassMetricsOut[]|null
     */
    public function getAiVettedExpectedClassMetrics()
    {
        return $this->container['ai_vetted_expected_class_metrics'];
    }

    /**
     * Sets ai_vetted_expected_class_metrics
     *
     * @param \OpenAPI\Client\Model\ExpectedClassMetricsOut[]|null $ai_vetted_expected_class_metrics ai_vetted_expected_class_metrics
     *
     * @return $this
     */
    public function setAiVettedExpectedClassMetrics($ai_vetted_expected_class_metrics)
    {
        $this->container['ai_vetted_expected_class_metrics'] = $ai_vetted_expected_class_metrics;

        return $this;
    }

    /**
     * Gets ai_non_vetted_expected_class_metrics
     *
     * @return \OpenAPI\Client\Model\ExpectedClassMetricsOut[]|null
     */
    public function getAiNonVettedExpectedClassMetrics()
    {
        return $this->container['ai_non_vetted_expected_class_metrics'];
    }

    /**
     * Sets ai_non_vetted_expected_class_metrics
     *
     * @param \OpenAPI\Client\Model\ExpectedClassMetricsOut[]|null $ai_non_vetted_expected_class_metrics ai_non_vetted_expected_class_metrics
     *
     * @return $this
     */
    public function setAiNonVettedExpectedClassMetrics($ai_non_vetted_expected_class_metrics)
    {
        $this->container['ai_non_vetted_expected_class_metrics'] = $ai_non_vetted_expected_class_metrics;

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


