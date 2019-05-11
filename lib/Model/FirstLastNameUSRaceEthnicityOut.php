<?php
/**
 * FirstLastNameUSRaceEthnicityOut
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
 * FirstLastNameUSRaceEthnicityOut Class Doc Comment
 *
 * @category Class
 * @description Represents the output of inferring the LIKELY US &#39;race/ethnicity&#39; from a personal name, given US country of residence and (optionally) a ZIP5 code.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FirstLastNameUSRaceEthnicityOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FirstLastNameUSRaceEthnicityOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'race_ethnicity_alt' => 'string',
        'race_ethnicity' => 'string',
        'score' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'first_name' => null,
        'last_name' => null,
        'race_ethnicity_alt' => null,
        'race_ethnicity' => null,
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
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'race_ethnicity_alt' => 'raceEthnicityAlt',
        'race_ethnicity' => 'raceEthnicity',
        'score' => 'score'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'race_ethnicity_alt' => 'setRaceEthnicityAlt',
        'race_ethnicity' => 'setRaceEthnicity',
        'score' => 'setScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'race_ethnicity_alt' => 'getRaceEthnicityAlt',
        'race_ethnicity' => 'getRaceEthnicity',
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

    const RACE_ETHNICITY_ALT_W_NL = 'W_NL';
    const RACE_ETHNICITY_ALT_HL = 'HL';
    const RACE_ETHNICITY_ALT_A = 'A';
    const RACE_ETHNICITY_ALT_B_NL = 'B_NL';
    const RACE_ETHNICITY_W_NL = 'W_NL';
    const RACE_ETHNICITY_HL = 'HL';
    const RACE_ETHNICITY_A = 'A';
    const RACE_ETHNICITY_B_NL = 'B_NL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRaceEthnicityAltAllowableValues()
    {
        return [
            self::RACE_ETHNICITY_ALT_W_NL,
            self::RACE_ETHNICITY_ALT_HL,
            self::RACE_ETHNICITY_ALT_A,
            self::RACE_ETHNICITY_ALT_B_NL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRaceEthnicityAllowableValues()
    {
        return [
            self::RACE_ETHNICITY_W_NL,
            self::RACE_ETHNICITY_HL,
            self::RACE_ETHNICITY_A,
            self::RACE_ETHNICITY_B_NL,
        ];
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['race_ethnicity_alt'] = isset($data['race_ethnicity_alt']) ? $data['race_ethnicity_alt'] : null;
        $this->container['race_ethnicity'] = isset($data['race_ethnicity']) ? $data['race_ethnicity'] : null;
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

        $allowedValues = $this->getRaceEthnicityAltAllowableValues();
        if (!is_null($this->container['race_ethnicity_alt']) && !in_array($this->container['race_ethnicity_alt'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'race_ethnicity_alt', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRaceEthnicityAllowableValues();
        if (!is_null($this->container['race_ethnicity']) && !in_array($this->container['race_ethnicity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'race_ethnicity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets race_ethnicity_alt
     *
     * @return string|null
     */
    public function getRaceEthnicityAlt()
    {
        return $this->container['race_ethnicity_alt'];
    }

    /**
     * Sets race_ethnicity_alt
     *
     * @param string|null $race_ethnicity_alt Second most likely US 'race'/ethnicity
     *
     * @return $this
     */
    public function setRaceEthnicityAlt($race_ethnicity_alt)
    {
        $allowedValues = $this->getRaceEthnicityAltAllowableValues();
        if (!is_null($race_ethnicity_alt) && !in_array($race_ethnicity_alt, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'race_ethnicity_alt', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['race_ethnicity_alt'] = $race_ethnicity_alt;

        return $this;
    }

    /**
     * Gets race_ethnicity
     *
     * @return string|null
     */
    public function getRaceEthnicity()
    {
        return $this->container['race_ethnicity'];
    }

    /**
     * Sets race_ethnicity
     *
     * @param string|null $race_ethnicity Most likely US 'race'/ethnicity
     *
     * @return $this
     */
    public function setRaceEthnicity($race_ethnicity)
    {
        $allowedValues = $this->getRaceEthnicityAllowableValues();
        if (!is_null($race_ethnicity) && !in_array($race_ethnicity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'race_ethnicity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['race_ethnicity'] = $race_ethnicity;

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
     * @param double|null $score Compatibility to NamSor_v1 Origin score value
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


