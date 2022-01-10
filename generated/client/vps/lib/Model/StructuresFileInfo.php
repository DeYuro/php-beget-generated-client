<?php
/**
 * StructuresFileInfo
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
 * StructuresFileInfo Class Doc Comment
 *
 * @category Class
 * @package  Generated\Client\Vps
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StructuresFileInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Structures_FileInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_link' => 'bool',
        'is_dir' => 'bool',
        'name' => 'string',
        'ext' => 'string',
        'path' => 'string',
        'owner' => 'string',
        'group' => 'string',
        'size' => 'string',
        'mtime' => 'double',
        'mtime_str' => 'string',
        'mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_link' => null,
        'is_dir' => null,
        'name' => 'bytes',
        'ext' => 'bytes',
        'path' => 'bytes',
        'owner' => null,
        'group' => null,
        'size' => 'uint64',
        'mtime' => 'double',
        'mtime_str' => null,
        'mode' => null
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
        'is_link' => 'is_link',
        'is_dir' => 'is_dir',
        'name' => 'name',
        'ext' => 'ext',
        'path' => 'path',
        'owner' => 'owner',
        'group' => 'group',
        'size' => 'size',
        'mtime' => 'mtime',
        'mtime_str' => 'mtime_str',
        'mode' => 'mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_link' => 'setIsLink',
        'is_dir' => 'setIsDir',
        'name' => 'setName',
        'ext' => 'setExt',
        'path' => 'setPath',
        'owner' => 'setOwner',
        'group' => 'setGroup',
        'size' => 'setSize',
        'mtime' => 'setMtime',
        'mtime_str' => 'setMtimeStr',
        'mode' => 'setMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_link' => 'getIsLink',
        'is_dir' => 'getIsDir',
        'name' => 'getName',
        'ext' => 'getExt',
        'path' => 'getPath',
        'owner' => 'getOwner',
        'group' => 'getGroup',
        'size' => 'getSize',
        'mtime' => 'getMtime',
        'mtime_str' => 'getMtimeStr',
        'mode' => 'getMode'
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
        $this->container['is_link'] = $data['is_link'] ?? null;
        $this->container['is_dir'] = $data['is_dir'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['ext'] = $data['ext'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['owner'] = $data['owner'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['mtime'] = $data['mtime'] ?? null;
        $this->container['mtime_str'] = $data['mtime_str'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
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
     * Gets is_link
     *
     * @return bool|null
     */
    public function getIsLink()
    {
        return $this->container['is_link'];
    }

    /**
     * Sets is_link
     *
     * @param bool|null $is_link Является ли файл символической ссылкой
     *
     * @return self
     */
    public function setIsLink($is_link)
    {
        $this->container['is_link'] = $is_link;

        return $this;
    }

    /**
     * Gets is_dir
     *
     * @return bool|null
     */
    public function getIsDir()
    {
        return $this->container['is_dir'];
    }

    /**
     * Sets is_dir
     *
     * @param bool|null $is_dir Является ли файл директорией
     *
     * @return self
     */
    public function setIsDir($is_dir)
    {
        $this->container['is_dir'] = $is_dir;

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
     * @param string|null $name Название файла
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ext
     *
     * @return string|null
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param string|null $ext Расширение файла, если оно есть
     *
     * @return self
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path Путь к файлу
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string|null $owner Владелец файла
     *
     * @return self
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group Группа владельца
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size Размер файла в байтах
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets mtime
     *
     * @return double|null
     */
    public function getMtime()
    {
        return $this->container['mtime'];
    }

    /**
     * Sets mtime
     *
     * @param double|null $mtime Время изменения (unix timestamp)
     *
     * @return self
     */
    public function setMtime($mtime)
    {
        $this->container['mtime'] = $mtime;

        return $this;
    }

    /**
     * Gets mtime_str
     *
     * @return string|null
     */
    public function getMtimeStr()
    {
        return $this->container['mtime_str'];
    }

    /**
     * Sets mtime_str
     *
     * @param string|null $mtime_str Время изменения в читаемом виде
     *
     * @return self
     */
    public function setMtimeStr($mtime_str)
    {
        $this->container['mtime_str'] = $mtime_str;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode Права на файл, например, \"777\"
     *
     * @return self
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

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


