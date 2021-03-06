<?php
/**
 * APIClassifierOut
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
 * OpenAPI spec version: 2.0.11
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
 * APIClassifierOut Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class APIClassifierOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'APIClassifierOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'classifier_name' => 'string',
        'serving' => 'bool',
        'learning' => 'bool',
        'shutting_down' => 'bool',
        'probability_calibrated' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'classifier_name' => null,
        'serving' => null,
        'learning' => null,
        'shutting_down' => null,
        'probability_calibrated' => null
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
        'serving' => 'serving',
        'learning' => 'learning',
        'shutting_down' => 'shuttingDown',
        'probability_calibrated' => 'probabilityCalibrated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'classifier_name' => 'setClassifierName',
        'serving' => 'setServing',
        'learning' => 'setLearning',
        'shutting_down' => 'setShuttingDown',
        'probability_calibrated' => 'setProbabilityCalibrated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'classifier_name' => 'getClassifierName',
        'serving' => 'getServing',
        'learning' => 'getLearning',
        'shutting_down' => 'getShuttingDown',
        'probability_calibrated' => 'getProbabilityCalibrated'
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
        $this->container['serving'] = isset($data['serving']) ? $data['serving'] : null;
        $this->container['learning'] = isset($data['learning']) ? $data['learning'] : null;
        $this->container['shutting_down'] = isset($data['shutting_down']) ? $data['shutting_down'] : null;
        $this->container['probability_calibrated'] = isset($data['probability_calibrated']) ? $data['probability_calibrated'] : null;
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
     * Gets serving
     *
     * @return bool|null
     */
    public function getServing()
    {
        return $this->container['serving'];
    }

    /**
     * Sets serving
     *
     * @param bool|null $serving serving
     *
     * @return $this
     */
    public function setServing($serving)
    {
        $this->container['serving'] = $serving;

        return $this;
    }

    /**
     * Gets learning
     *
     * @return bool|null
     */
    public function getLearning()
    {
        return $this->container['learning'];
    }

    /**
     * Sets learning
     *
     * @param bool|null $learning learning
     *
     * @return $this
     */
    public function setLearning($learning)
    {
        $this->container['learning'] = $learning;

        return $this;
    }

    /**
     * Gets shutting_down
     *
     * @return bool|null
     */
    public function getShuttingDown()
    {
        return $this->container['shutting_down'];
    }

    /**
     * Sets shutting_down
     *
     * @param bool|null $shutting_down shutting_down
     *
     * @return $this
     */
    public function setShuttingDown($shutting_down)
    {
        $this->container['shutting_down'] = $shutting_down;

        return $this;
    }

    /**
     * Gets probability_calibrated
     *
     * @return bool|null
     */
    public function getProbabilityCalibrated()
    {
        return $this->container['probability_calibrated'];
    }

    /**
     * Sets probability_calibrated
     *
     * @param bool|null $probability_calibrated probability_calibrated
     *
     * @return $this
     */
    public function setProbabilityCalibrated($probability_calibrated)
    {
        $this->container['probability_calibrated'] = $probability_calibrated;

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


