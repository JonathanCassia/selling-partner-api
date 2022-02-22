<?php
/**
 * RentalTransactionEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\Finances;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * RentalTransactionEvent Class Doc Comment
 *
 * @category Class
 * @description An event related to a rental transaction.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RentalTransactionEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RentalTransactionEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazon_order_id' => 'string',
        'rental_event_type' => 'string',
        'extension_length' => 'int',
        'posted_date' => 'string',
        'rental_charge_list' => '\SellingPartnerApi\Model\Finances\ChargeComponent[]',
        'rental_fee_list' => '\SellingPartnerApi\Model\Finances\FeeComponent[]',
        'marketplace_name' => 'string',
        'rental_initial_value' => '\SellingPartnerApi\Model\Finances\Currency',
        'rental_reimbursement' => '\SellingPartnerApi\Model\Finances\Currency',
        'rental_tax_withheld_list' => '\SellingPartnerApi\Model\Finances\TaxWithheldComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazon_order_id' => null,
        'rental_event_type' => null,
        'extension_length' => 'int32',
        'posted_date' => null,
        'rental_charge_list' => null,
        'rental_fee_list' => null,
        'marketplace_name' => null,
        'rental_initial_value' => null,
        'rental_reimbursement' => null,
        'rental_tax_withheld_list' => null
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
        'amazon_order_id' => 'AmazonOrderId',
        'rental_event_type' => 'RentalEventType',
        'extension_length' => 'ExtensionLength',
        'posted_date' => 'PostedDate',
        'rental_charge_list' => 'RentalChargeList',
        'rental_fee_list' => 'RentalFeeList',
        'marketplace_name' => 'MarketplaceName',
        'rental_initial_value' => 'RentalInitialValue',
        'rental_reimbursement' => 'RentalReimbursement',
        'rental_tax_withheld_list' => 'RentalTaxWithheldList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'amazon_order_id' => 'setAmazonOrderId',
        'rental_event_type' => 'setRentalEventType',
        'extension_length' => 'setExtensionLength',
        'posted_date' => 'setPostedDate',
        'rental_charge_list' => 'setRentalChargeList',
        'rental_fee_list' => 'setRentalFeeList',
        'marketplace_name' => 'setMarketplaceName',
        'rental_initial_value' => 'setRentalInitialValue',
        'rental_reimbursement' => 'setRentalReimbursement',
        'rental_tax_withheld_list' => 'setRentalTaxWithheldList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'rental_event_type' => 'getRentalEventType',
        'extension_length' => 'getExtensionLength',
        'posted_date' => 'getPostedDate',
        'rental_charge_list' => 'getRentalChargeList',
        'rental_fee_list' => 'getRentalFeeList',
        'marketplace_name' => 'getMarketplaceName',
        'rental_initial_value' => 'getRentalInitialValue',
        'rental_reimbursement' => 'getRentalReimbursement',
        'rental_tax_withheld_list' => 'getRentalTaxWithheldList'
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['rental_event_type'] = $data['rental_event_type'] ?? null;
        $this->container['extension_length'] = $data['extension_length'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['rental_charge_list'] = $data['rental_charge_list'] ?? null;
        $this->container['rental_fee_list'] = $data['rental_fee_list'] ?? null;
        $this->container['marketplace_name'] = $data['marketplace_name'] ?? null;
        $this->container['rental_initial_value'] = $data['rental_initial_value'] ?? null;
        $this->container['rental_reimbursement'] = $data['rental_reimbursement'] ?? null;
        $this->container['rental_tax_withheld_list'] = $data['rental_tax_withheld_list'] ?? null;
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
     * Gets amazon_order_id
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string|null $amazon_order_id An Amazon-defined identifier for an order.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }
    /**
     * Gets rental_event_type
     *
     * @return string|null
     */
    public function getRentalEventType()
    {
        return $this->container['rental_event_type'];
    }

    /**
     * Sets rental_event_type
     *
     * @param string|null $rental_event_type The type of rental event. Possible values: * RentalCustomerPayment-Buyout - Transaction type that represents when the customer wants to buy out a rented item. * RentalCustomerPayment-Extension - Transaction type that represents when the customer wants to extend the rental period. * RentalCustomerRefund-Buyout - Transaction type that represents when the customer requests a refund for the buyout of the rented item. * RentalCustomerRefund-Extension - Transaction type that represents when the customer requests a refund over the extension on the rented item. * RentalHandlingFee - Transaction type that represents the fee that Amazon charges sellers who rent through Amazon. * RentalChargeFailureReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a failed charge. * RentalLostItemReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a lost item.
     *
     * @return self
     */
    public function setRentalEventType($rental_event_type)
    {
        $this->container['rental_event_type'] = $rental_event_type;

        return $this;
    }
    /**
     * Gets extension_length
     *
     * @return int|null
     */
    public function getExtensionLength()
    {
        return $this->container['extension_length'];
    }

    /**
     * Sets extension_length
     *
     * @param int|null $extension_length The number of days that the buyer extended an already rented item. This value is only returned for RentalCustomerPayment-Extension and RentalCustomerRefund-Extension events.
     *
     * @return self
     */
    public function setExtensionLength($extension_length)
    {
        $this->container['extension_length'] = $extension_length;

        return $this;
    }
    /**
     * Gets posted_date
     *
     * @return string|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param string|null $posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }
    /**
     * Gets rental_charge_list
     *
     * @return \SellingPartnerApi\Model\Finances\ChargeComponent[]|null
     */
    public function getRentalChargeList()
    {
        return $this->container['rental_charge_list'];
    }

    /**
     * Sets rental_charge_list
     *
     * @param \SellingPartnerApi\Model\Finances\ChargeComponent[]|null $rental_charge_list A list of charge information on the seller's account.
     *
     * @return self
     */
    public function setRentalChargeList($rental_charge_list)
    {
        $this->container['rental_charge_list'] = $rental_charge_list;

        return $this;
    }
    /**
     * Gets rental_fee_list
     *
     * @return \SellingPartnerApi\Model\Finances\FeeComponent[]|null
     */
    public function getRentalFeeList()
    {
        return $this->container['rental_fee_list'];
    }

    /**
     * Sets rental_fee_list
     *
     * @param \SellingPartnerApi\Model\Finances\FeeComponent[]|null $rental_fee_list A list of fee component information.
     *
     * @return self
     */
    public function setRentalFeeList($rental_fee_list)
    {
        $this->container['rental_fee_list'] = $rental_fee_list;

        return $this;
    }
    /**
     * Gets marketplace_name
     *
     * @return string|null
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplace_name'];
    }

    /**
     * Sets marketplace_name
     *
     * @param string|null $marketplace_name The name of the marketplace.
     *
     * @return self
     */
    public function setMarketplaceName($marketplace_name)
    {
        $this->container['marketplace_name'] = $marketplace_name;

        return $this;
    }
    /**
     * Gets rental_initial_value
     *
     * @return \SellingPartnerApi\Model\Finances\Currency|null
     */
    public function getRentalInitialValue()
    {
        return $this->container['rental_initial_value'];
    }

    /**
     * Sets rental_initial_value
     *
     * @param \SellingPartnerApi\Model\Finances\Currency|null $rental_initial_value rental_initial_value
     *
     * @return self
     */
    public function setRentalInitialValue($rental_initial_value)
    {
        $this->container['rental_initial_value'] = $rental_initial_value;

        return $this;
    }
    /**
     * Gets rental_reimbursement
     *
     * @return \SellingPartnerApi\Model\Finances\Currency|null
     */
    public function getRentalReimbursement()
    {
        return $this->container['rental_reimbursement'];
    }

    /**
     * Sets rental_reimbursement
     *
     * @param \SellingPartnerApi\Model\Finances\Currency|null $rental_reimbursement rental_reimbursement
     *
     * @return self
     */
    public function setRentalReimbursement($rental_reimbursement)
    {
        $this->container['rental_reimbursement'] = $rental_reimbursement;

        return $this;
    }
    /**
     * Gets rental_tax_withheld_list
     *
     * @return \SellingPartnerApi\Model\Finances\TaxWithheldComponent[]|null
     */
    public function getRentalTaxWithheldList()
    {
        return $this->container['rental_tax_withheld_list'];
    }

    /**
     * Sets rental_tax_withheld_list
     *
     * @param \SellingPartnerApi\Model\Finances\TaxWithheldComponent[]|null $rental_tax_withheld_list A list of information about taxes withheld.
     *
     * @return self
     */
    public function setRentalTaxWithheldList($rental_tax_withheld_list)
    {
        $this->container['rental_tax_withheld_list'] = $rental_tax_withheld_list;

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


