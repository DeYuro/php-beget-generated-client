<?php
/**
 * ManageGetStatusesResponseStatusInfo
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
 * ManageGetStatusesResponseStatusInfo Class Doc Comment
 *
 * @category Class
 * @package  Generated\Client\Vps
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ManageGetStatusesResponseStatusInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Manage_GetStatusesResponse_StatusInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status' => 'string',
        'rescue_mode' => 'bool',
        'migrating' => 'bool',
        'manage_enabled' => 'bool',
        'restoring' => 'bool',
        'archived' => 'bool',
        'unblocking' => 'bool',
        'unarchiving' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => 'enum',
        'rescue_mode' => null,
        'migrating' => null,
        'manage_enabled' => null,
        'restoring' => null,
        'archived' => null,
        'unblocking' => null,
        'unarchiving' => null
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
        'status' => 'status',
        'rescue_mode' => 'rescue_mode',
        'migrating' => 'migrating',
        'manage_enabled' => 'manage_enabled',
        'restoring' => 'restoring',
        'archived' => 'archived',
        'unblocking' => 'unblocking',
        'unarchiving' => 'unarchiving'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'rescue_mode' => 'setRescueMode',
        'migrating' => 'setMigrating',
        'manage_enabled' => 'setManageEnabled',
        'restoring' => 'setRestoring',
        'archived' => 'setArchived',
        'unblocking' => 'setUnblocking',
        'unarchiving' => 'setUnarchiving'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'rescue_mode' => 'getRescueMode',
        'migrating' => 'getMigrating',
        'manage_enabled' => 'getManageEnabled',
        'restoring' => 'getRestoring',
        'archived' => 'getArchived',
        'unblocking' => 'getUnblocking',
        'unarchiving' => 'getUnarchiving'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['rescue_mode'] = $data['rescue_mode'] ?? null;
        $this->container['migrating'] = $data['migrating'] ?? null;
        $this->container['manage_enabled'] = $data['manage_enabled'] ?? null;
        $this->container['restoring'] = $data['restoring'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['unblocking'] = $data['unblocking'] ?? null;
        $this->container['unarchiving'] = $data['unarchiving'] ?? null;
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
     * @param string|null $id Идентификатор Vps (uuid)
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets rescue_mode
     *
     * @return bool|null
     */
    public function getRescueMode()
    {
        return $this->container['rescue_mode'];
    }

    /**
     * Sets rescue_mode
     *
     * @param bool|null $rescue_mode Включен rescue-режим
     *
     * @return self
     */
    public function setRescueMode($rescue_mode)
    {
        $this->container['rescue_mode'] = $rescue_mode;

        return $this;
    }

    /**
     * Gets migrating
     *
     * @return bool|null
     */
    public function getMigrating()
    {
        return $this->container['migrating'];
    }

    /**
     * Sets migrating
     *
     * @param bool|null $migrating VPS находится в состоянии миграции на другой хост
     *
     * @return self
     */
    public function setMigrating($migrating)
    {
        $this->container['migrating'] = $migrating;

        return $this;
    }

    /**
     * Gets manage_enabled
     *
     * @return bool|null
     */
    public function getManageEnabled()
    {
        return $this->container['manage_enabled'];
    }

    /**
     * Sets manage_enabled
     *
     * @param bool|null $manage_enabled Доступно ли управление VPS
     *
     * @return self
     */
    public function setManageEnabled($manage_enabled)
    {
        $this->container['manage_enabled'] = $manage_enabled;

        return $this;
    }

    /**
     * Gets restoring
     *
     * @return bool|null
     */
    public function getRestoring()
    {
        return $this->container['restoring'];
    }

    /**
     * Sets restoring
     *
     * @param bool|null $restoring VPS находится в состоянии восстановления из резервной копии
     *
     * @return self
     */
    public function setRestoring($restoring)
    {
        $this->container['restoring'] = $restoring;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived VPS заархивирована, управление невозможно
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets unblocking
     *
     * @return bool|null
     */
    public function getUnblocking()
    {
        return $this->container['unblocking'];
    }

    /**
     * Sets unblocking
     *
     * @param bool|null $unblocking VPS разблокируется после отключения по оплате или архивации
     *
     * @return self
     */
    public function setUnblocking($unblocking)
    {
        $this->container['unblocking'] = $unblocking;

        return $this;
    }

    /**
     * Gets unarchiving
     *
     * @return bool|null
     */
    public function getUnarchiving()
    {
        return $this->container['unarchiving'];
    }

    /**
     * Sets unarchiving
     *
     * @param bool|null $unarchiving VPS в процессе разархивации
     *
     * @return self
     */
    public function setUnarchiving($unarchiving)
    {
        $this->container['unarchiving'] = $unarchiving;

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


