<?php
/**
 * ManageGetAvailableSoftwareResponseSoftwareInfo
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Generated\Client\Vps
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Generated\Client\Vps\Model;

use \ArrayAccess;
use \Generated\Client\Vps\ObjectSerializer;

/**
 * ManageGetAvailableSoftwareResponseSoftwareInfo Class Doc Comment
 *
 * @category Class
 * @package  Generated\Client\Vps
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ManageGetAvailableSoftwareResponseSoftwareInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Manage_GetAvailableSoftwareResponse_SoftwareInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'display_name' => 'string',
        'version' => 'string',
        'type' => 'string',
        'description' => 'string',
        'description_version' => 'string',
        'image_id' => 'int[]',
        'variable' => 'string[]',
        'requirements' => '\Generated\Client\Vps\Model\ManageGetAvailableSoftwareResponseSoftwareInfoRequirements'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uint32',
        'name' => null,
        'display_name' => null,
        'version' => null,
        'type' => 'enum',
        'description' => null,
        'description_version' => null,
        'image_id' => 'uint32',
        'variable' => null,
        'requirements' => null
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
        'display_name' => 'display_name',
        'version' => 'version',
        'type' => 'type',
        'description' => 'description',
        'description_version' => 'description_version',
        'image_id' => 'image_id',
        'variable' => 'variable',
        'requirements' => 'requirements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'display_name' => 'setDisplayName',
        'version' => 'setVersion',
        'type' => 'setType',
        'description' => 'setDescription',
        'description_version' => 'setDescriptionVersion',
        'image_id' => 'setImageId',
        'variable' => 'setVariable',
        'requirements' => 'setRequirements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'display_name' => 'getDisplayName',
        'version' => 'getVersion',
        'type' => 'getType',
        'description' => 'getDescription',
        'description_version' => 'getDescriptionVersion',
        'image_id' => 'getImageId',
        'variable' => 'getVariable',
        'requirements' => 'getRequirements'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['description_version'] = $data['description_version'] ?? null;
        $this->container['image_id'] = $data['image_id'] ?? null;
        $this->container['variable'] = $data['variable'] ?? null;
        $this->container['requirements'] = $data['requirements'] ?? null;
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
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
     * @param string|null $name Внутреннее имя (напр. redmine)
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name Отображаемое имя (напр. Redmine)
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version Версия (напр. 1.0.1)
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Тип ПО (панель управления, обычное ПО)
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Описание ПО
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_version
     *
     * @return string|null
     */
    public function getDescriptionVersion()
    {
        return $this->container['description_version'];
    }

    /**
     * Sets description_version
     *
     * @param string|null $description_version Дополнительное описание для конкретной версии ПО
     *
     * @return self
     */
    public function setDescriptionVersion($description_version)
    {
        $this->container['description_version'] = $description_version;

        return $this;
    }

    /**
     * Gets image_id
     *
     * @return int[]|null
     */
    public function getImageId()
    {
        return $this->container['image_id'];
    }

    /**
     * Sets image_id
     *
     * @param int[]|null $image_id Список ID образов, для которых возможна установка этого ПО
     *
     * @return self
     */
    public function setImageId($image_id)
    {
        $this->container['image_id'] = $image_id;

        return $this;
    }

    /**
     * Gets variable
     *
     * @return string[]|null
     */
    public function getVariable()
    {
        return $this->container['variable'];
    }

    /**
     * Sets variable
     *
     * @param string[]|null $variable Список дополнительных полей, которые необходимо передать для установки ПО
     *
     * @return self
     */
    public function setVariable($variable)
    {
        $this->container['variable'] = $variable;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return \Generated\Client\Vps\Model\ManageGetAvailableSoftwareResponseSoftwareInfoRequirements|null
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param \Generated\Client\Vps\Model\ManageGetAvailableSoftwareResponseSoftwareInfoRequirements|null $requirements requirements
     *
     * @return self
     */
    public function setRequirements($requirements)
    {
        $this->container['requirements'] = $requirements;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


