<?php
/**
 * PersonalNameParsedOut
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
 * OpenAPI spec version: 2.0.8
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
 * PersonalNameParsedOut Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PersonalNameParsedOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PersonalNameParsedOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'name_parser_type' => 'string',
        'name_parser_type_alt' => 'string',
        'first_last_name' => '\OpenAPI\Client\Model\FirstLastNameOut',
        'score' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'name_parser_type' => null,
        'name_parser_type_alt' => null,
        'first_last_name' => null,
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
        'name' => 'name',
        'name_parser_type' => 'nameParserType',
        'name_parser_type_alt' => 'nameParserTypeAlt',
        'first_last_name' => 'firstLastName',
        'score' => 'score'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'name_parser_type' => 'setNameParserType',
        'name_parser_type_alt' => 'setNameParserTypeAlt',
        'first_last_name' => 'setFirstLastName',
        'score' => 'setScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'name_parser_type' => 'getNameParserType',
        'name_parser_type_alt' => 'getNameParserTypeAlt',
        'first_last_name' => 'getFirstLastName',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_parser_type'] = isset($data['name_parser_type']) ? $data['name_parser_type'] : null;
        $this->container['name_parser_type_alt'] = isset($data['name_parser_type_alt']) ? $data['name_parser_type_alt'] : null;
        $this->container['first_last_name'] = isset($data['first_last_name']) ? $data['first_last_name'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_parser_type
     *
     * @return string|null
     */
    public function getNameParserType()
    {
        return $this->container['name_parser_type'];
    }

    /**
     * Sets name_parser_type
     *
     * @param string|null $name_parser_type name_parser_type
     *
     * @return $this
     */
    public function setNameParserType($name_parser_type)
    {
        $this->container['name_parser_type'] = $name_parser_type;

        return $this;
    }

    /**
     * Gets name_parser_type_alt
     *
     * @return string|null
     */
    public function getNameParserTypeAlt()
    {
        return $this->container['name_parser_type_alt'];
    }

    /**
     * Sets name_parser_type_alt
     *
     * @param string|null $name_parser_type_alt name_parser_type_alt
     *
     * @return $this
     */
    public function setNameParserTypeAlt($name_parser_type_alt)
    {
        $this->container['name_parser_type_alt'] = $name_parser_type_alt;

        return $this;
    }

    /**
     * Gets first_last_name
     *
     * @return \OpenAPI\Client\Model\FirstLastNameOut|null
     */
    public function getFirstLastName()
    {
        return $this->container['first_last_name'];
    }

    /**
     * Sets first_last_name
     *
     * @param \OpenAPI\Client\Model\FirstLastNameOut|null $first_last_name first_last_name
     *
     * @return $this
     */
    public function setFirstLastName($first_last_name)
    {
        $this->container['first_last_name'] = $first_last_name;

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


