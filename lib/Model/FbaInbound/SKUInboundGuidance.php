<?php
/**
 * SKUInboundGuidance
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaInbound;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * SKUInboundGuidance Class Doc Comment
 *
 * @category Class
 * @description Reasons why a given seller SKU is not recommended for shipment to Amazon&#39;s fulfillment network.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SKUInboundGuidance implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SKUInboundGuidance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'asin' => 'string',
        'inbound_guidance' => '\SellingPartnerApi\Model\FbaInbound\InboundGuidance',
        'guidance_reason_list' => '\SellingPartnerApi\Model\FbaInbound\GuidanceReason[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_sku' => null,
        'asin' => null,
        'inbound_guidance' => null,
        'guidance_reason_list' => null
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
        'seller_sku' => 'SellerSKU',
        'asin' => 'ASIN',
        'inbound_guidance' => 'InboundGuidance',
        'guidance_reason_list' => 'GuidanceReasonList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'seller_sku' => 'setSellerSku',
        'asin' => 'setAsin',
        'inbound_guidance' => 'setInboundGuidance',
        'guidance_reason_list' => 'setGuidanceReasonList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'asin' => 'getAsin',
        'inbound_guidance' => 'getInboundGuidance',
        'guidance_reason_list' => 'getGuidanceReasonList'
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
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['inbound_guidance'] = $data['inbound_guidance'] ?? null;
        $this->container['guidance_reason_list'] = $data['guidance_reason_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if ($this->container['inbound_guidance'] === null) {
            $invalidProperties[] = "'inbound_guidance' can't be null";
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
     * Gets seller_sku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string $seller_sku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }
    /**
     * Gets asin
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets inbound_guidance
     *
     * @return \SellingPartnerApi\Model\FbaInbound\InboundGuidance
     */
    public function getInboundGuidance()
    {
        return $this->container['inbound_guidance'];
    }

    /**
     * Sets inbound_guidance
     *
     * @param \SellingPartnerApi\Model\FbaInbound\InboundGuidance $inbound_guidance inbound_guidance
     *
     * @return self
     */
    public function setInboundGuidance($inbound_guidance)
    {
        $this->container['inbound_guidance'] = $inbound_guidance;

        return $this;
    }
    /**
     * Gets guidance_reason_list
     *
     * @return \SellingPartnerApi\Model\FbaInbound\GuidanceReason[]|null
     */
    public function getGuidanceReasonList()
    {
        return $this->container['guidance_reason_list'];
    }

    /**
     * Sets guidance_reason_list
     *
     * @param \SellingPartnerApi\Model\FbaInbound\GuidanceReason[]|null $guidance_reason_list A list of inbound guidance reason information.
     *
     * @return self
     */
    public function setGuidanceReasonList($guidance_reason_list)
    {
        $this->container['guidance_reason_list'] = $guidance_reason_list;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


