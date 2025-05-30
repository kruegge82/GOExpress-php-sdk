<?php
/**
 * OrderRequest
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  kruegge82\goexpress
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GO! Connect Realtime Order & Label API
 *
 * API for creating, updating, canceling shipments and generating labels for GO! Express & Logistics.
 *
 * The version of the OpenAPI document: 2.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\goexpress\Model;

use \ArrayAccess;
use \kruegge82\goexpress\ObjectSerializer;

/**
 * OrderRequest Class Doc Comment
 *
 * @category Class
 * @description Request payload to create or update a shipment order including addresses, shipment details, label preferences, and package dimensions.
 * @package  kruegge82\goexpress
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'responsible_station' => 'string',
        'customer_id' => 'string',
        'shipment' => '\kruegge82\goexpress\Model\Shipment',
        'consignor_address' => '\kruegge82\goexpress\Model\Address',
        'neutral_address' => '\kruegge82\goexpress\Model\Address',
        'consignee_address' => '\kruegge82\goexpress\Model\Address',
        'label' => 'string',
        'packages' => '\kruegge82\goexpress\Model\Package[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'responsible_station' => null,
        'customer_id' => null,
        'shipment' => null,
        'consignor_address' => null,
        'neutral_address' => null,
        'consignee_address' => null,
        'label' => null,
        'packages' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'responsible_station' => false,
        'customer_id' => false,
        'shipment' => false,
        'consignor_address' => false,
        'neutral_address' => false,
        'consignee_address' => false,
        'label' => false,
        'packages' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'responsible_station' => 'responsibleStation',
        'customer_id' => 'customerId',
        'shipment' => 'shipment',
        'consignor_address' => 'consignorAddress',
        'neutral_address' => 'neutralAddress',
        'consignee_address' => 'consigneeAddress',
        'label' => 'label',
        'packages' => 'packages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'responsible_station' => 'setResponsibleStation',
        'customer_id' => 'setCustomerId',
        'shipment' => 'setShipment',
        'consignor_address' => 'setConsignorAddress',
        'neutral_address' => 'setNeutralAddress',
        'consignee_address' => 'setConsigneeAddress',
        'label' => 'setLabel',
        'packages' => 'setPackages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'responsible_station' => 'getResponsibleStation',
        'customer_id' => 'getCustomerId',
        'shipment' => 'getShipment',
        'consignor_address' => 'getConsignorAddress',
        'neutral_address' => 'getNeutralAddress',
        'consignee_address' => 'getConsigneeAddress',
        'label' => 'getLabel',
        'packages' => 'getPackages'
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

    public const LABEL__1 = '1';
    public const LABEL__2 = '2';
    public const LABEL__4 = '4';
    public const LABEL__5 = '5';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelAllowableValues()
    {
        return [
            self::LABEL__1,
            self::LABEL__2,
            self::LABEL__4,
            self::LABEL__5,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('responsible_station', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('shipment', $data ?? [], null);
        $this->setIfExists('consignor_address', $data ?? [], null);
        $this->setIfExists('neutral_address', $data ?? [], null);
        $this->setIfExists('consignee_address', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('packages', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['responsible_station'] === null) {
            $invalidProperties[] = "'responsible_station' can't be null";
        }
        if ((mb_strlen($this->container['responsible_station']) > 3)) {
            $invalidProperties[] = "invalid value for 'responsible_station', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ((mb_strlen($this->container['customer_id']) > 7)) {
            $invalidProperties[] = "invalid value for 'customer_id', the character length must be smaller than or equal to 7.";
        }

        if ($this->container['shipment'] === null) {
            $invalidProperties[] = "'shipment' can't be null";
        }
        if ($this->container['consignor_address'] === null) {
            $invalidProperties[] = "'consignor_address' can't be null";
        }
        if ($this->container['consignee_address'] === null) {
            $invalidProperties[] = "'consignee_address' can't be null";
        }
        $allowedValues = $this->getLabelAllowableValues();
        if (!is_null($this->container['label']) && !in_array($this->container['label'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'label', must be one of '%s'",
                $this->container['label'],
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
     * Gets responsible_station
     *
     * @return string
     */
    public function getResponsibleStation()
    {
        return $this->container['responsible_station'];
    }

    /**
     * Sets responsible_station
     *
     * @param string $responsible_station responsible_station
     *
     * @return self
     */
    public function setResponsibleStation($responsible_station)
    {
        if (is_null($responsible_station)) {
            throw new \InvalidArgumentException('non-nullable responsible_station cannot be null');
        }
        if ((mb_strlen($responsible_station) > 3)) {
            throw new \InvalidArgumentException('invalid length for $responsible_station when calling OrderRequest., must be smaller than or equal to 3.');
        }

        $this->container['responsible_station'] = $responsible_station;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            throw new \InvalidArgumentException('non-nullable customer_id cannot be null');
        }
        if ((mb_strlen($customer_id) > 7)) {
            throw new \InvalidArgumentException('invalid length for $customer_id when calling OrderRequest., must be smaller than or equal to 7.');
        }

        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets shipment
     *
     * @return \kruegge82\goexpress\Model\Shipment
     */
    public function getShipment()
    {
        return $this->container['shipment'];
    }

    /**
     * Sets shipment
     *
     * @param \kruegge82\goexpress\Model\Shipment $shipment shipment
     *
     * @return self
     */
    public function setShipment($shipment)
    {
        if (is_null($shipment)) {
            throw new \InvalidArgumentException('non-nullable shipment cannot be null');
        }
        $this->container['shipment'] = $shipment;

        return $this;
    }

    /**
     * Gets consignor_address
     *
     * @return \kruegge82\goexpress\Model\Address
     */
    public function getConsignorAddress()
    {
        return $this->container['consignor_address'];
    }

    /**
     * Sets consignor_address
     *
     * @param \kruegge82\goexpress\Model\Address $consignor_address consignor_address
     *
     * @return self
     */
    public function setConsignorAddress($consignor_address)
    {
        if (is_null($consignor_address)) {
            throw new \InvalidArgumentException('non-nullable consignor_address cannot be null');
        }
        $this->container['consignor_address'] = $consignor_address;

        return $this;
    }

    /**
     * Gets neutral_address
     *
     * @return \kruegge82\goexpress\Model\Address|null
     */
    public function getNeutralAddress()
    {
        return $this->container['neutral_address'];
    }

    /**
     * Sets neutral_address
     *
     * @param \kruegge82\goexpress\Model\Address|null $neutral_address neutral_address
     *
     * @return self
     */
    public function setNeutralAddress($neutral_address)
    {
        if (is_null($neutral_address)) {
            throw new \InvalidArgumentException('non-nullable neutral_address cannot be null');
        }
        $this->container['neutral_address'] = $neutral_address;

        return $this;
    }

    /**
     * Gets consignee_address
     *
     * @return \kruegge82\goexpress\Model\Address
     */
    public function getConsigneeAddress()
    {
        return $this->container['consignee_address'];
    }

    /**
     * Sets consignee_address
     *
     * @param \kruegge82\goexpress\Model\Address $consignee_address consignee_address
     *
     * @return self
     */
    public function setConsigneeAddress($consignee_address)
    {
        if (is_null($consignee_address)) {
            throw new \InvalidArgumentException('non-nullable consignee_address cannot be null');
        }
        $this->container['consignee_address'] = $consignee_address;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label 1 - ZPL Code 2 - Base64 encoded PDF (4x6’’ package label) 4 – Base64 encoded PDF (A4 houseway bill) 5 – TPCL (TEC Printer Command Language)
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $allowedValues = $this->getLabelAllowableValues();
        if (!in_array($label, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'label', must be one of '%s'",
                    $label,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \kruegge82\goexpress\Model\Package[]|null
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \kruegge82\goexpress\Model\Package[]|null $packages packages
     *
     * @return self
     */
    public function setPackages($packages)
    {
        if (is_null($packages)) {
            throw new \InvalidArgumentException('non-nullable packages cannot be null');
        }
        $this->container['packages'] = $packages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


