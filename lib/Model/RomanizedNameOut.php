<?php
/**
 * RomanizedNameOut
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
 * RomanizedNameOut Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RomanizedNameOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RomanizedNameOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'latin_name' => 'string',
        'original_name' => 'string',
        'source_language' => 'string',
        'target_language' => 'string',
        'source_script' => 'string',
        'target_script' => 'string',
        'score' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'latin_name' => null,
        'original_name' => null,
        'source_language' => null,
        'target_language' => null,
        'source_script' => null,
        'target_script' => null,
        'score' => 'double'
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
        'id' => 'id',
        'latin_name' => 'latinName',
        'original_name' => 'originalName',
        'source_language' => 'sourceLanguage',
        'target_language' => 'targetLanguage',
        'source_script' => 'sourceScript',
        'target_script' => 'targetScript',
        'score' => 'score'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'latin_name' => 'setLatinName',
        'original_name' => 'setOriginalName',
        'source_language' => 'setSourceLanguage',
        'target_language' => 'setTargetLanguage',
        'source_script' => 'setSourceScript',
        'target_script' => 'setTargetScript',
        'score' => 'setScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'latin_name' => 'getLatinName',
        'original_name' => 'getOriginalName',
        'source_language' => 'getSourceLanguage',
        'target_language' => 'getTargetLanguage',
        'source_script' => 'getSourceScript',
        'target_script' => 'getTargetScript',
        'score' => 'getScore'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['latin_name'] = isset($data['latin_name']) ? $data['latin_name'] : null;
        $this->container['original_name'] = isset($data['original_name']) ? $data['original_name'] : null;
        $this->container['source_language'] = isset($data['source_language']) ? $data['source_language'] : null;
        $this->container['target_language'] = isset($data['target_language']) ? $data['target_language'] : null;
        $this->container['source_script'] = isset($data['source_script']) ? $data['source_script'] : null;
        $this->container['target_script'] = isset($data['target_script']) ? $data['target_script'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets latin_name
     *
     * @return string|null
     */
    public function getLatinName()
    {
        return $this->container['latin_name'];
    }

    /**
     * Sets latin_name
     *
     * @param string|null $latin_name latin_name
     *
     * @return $this
     */
    public function setLatinName($latin_name)
    {
        $this->container['latin_name'] = $latin_name;

        return $this;
    }

    /**
     * Gets original_name
     *
     * @return string|null
     */
    public function getOriginalName()
    {
        return $this->container['original_name'];
    }

    /**
     * Sets original_name
     *
     * @param string|null $original_name original_name
     *
     * @return $this
     */
    public function setOriginalName($original_name)
    {
        $this->container['original_name'] = $original_name;

        return $this;
    }

    /**
     * Gets source_language
     *
     * @return string|null
     */
    public function getSourceLanguage()
    {
        return $this->container['source_language'];
    }

    /**
     * Sets source_language
     *
     * @param string|null $source_language source_language
     *
     * @return $this
     */
    public function setSourceLanguage($source_language)
    {
        $this->container['source_language'] = $source_language;

        return $this;
    }

    /**
     * Gets target_language
     *
     * @return string|null
     */
    public function getTargetLanguage()
    {
        return $this->container['target_language'];
    }

    /**
     * Sets target_language
     *
     * @param string|null $target_language target_language
     *
     * @return $this
     */
    public function setTargetLanguage($target_language)
    {
        $this->container['target_language'] = $target_language;

        return $this;
    }

    /**
     * Gets source_script
     *
     * @return string|null
     */
    public function getSourceScript()
    {
        return $this->container['source_script'];
    }

    /**
     * Sets source_script
     *
     * @param string|null $source_script source_script
     *
     * @return $this
     */
    public function setSourceScript($source_script)
    {
        $this->container['source_script'] = $source_script;

        return $this;
    }

    /**
     * Gets target_script
     *
     * @return string|null
     */
    public function getTargetScript()
    {
        return $this->container['target_script'];
    }

    /**
     * Sets target_script
     *
     * @param string|null $target_script target_script
     *
     * @return $this
     */
    public function setTargetScript($target_script)
    {
        $this->container['target_script'] = $target_script;

        return $this;
    }

    /**
     * Gets score
     *
     * @return double|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param double|null $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

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


