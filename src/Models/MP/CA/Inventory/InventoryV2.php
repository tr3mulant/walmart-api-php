<?php

/**
 * InventoryV2
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Inventory Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\CA\Inventory;
use Walmart\Models\BaseModel;

/**
 * InventoryV2 Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class InventoryV2 extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InventoryV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sku' => 'string',
        'quantity' => '\Walmart\Models\MP\CA\Inventory\GetInventory200ResponseQuantity',
        'fulfillmentLagTime' => 'int',
        'partnerId' => 'string',
        'offerId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sku' => null,
        'quantity' => null,
        'fulfillmentLagTime' => 'int32',
        'partnerId' => null,
        'offerId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku' => false,
        'quantity' => false,
        'fulfillmentLagTime' => false,
        'partnerId' => false,
        'offerId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sku' => 'sku',
        'quantity' => 'quantity',
        'fulfillmentLagTime' => 'fulfillmentLagTime',
        'partnerId' => 'partnerId',
        'offerId' => 'offerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku' => 'setSku',
        'quantity' => 'setQuantity',
        'fulfillmentLagTime' => 'setFulfillmentLagTime',
        'partnerId' => 'setPartnerId',
        'offerId' => 'setOfferId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku' => 'getSku',
        'quantity' => 'getQuantity',
        'fulfillmentLagTime' => 'getFulfillmentLagTime',
        'partnerId' => 'getPartnerId',
        'offerId' => 'getOfferId'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('fulfillmentLagTime', $data ?? [], null);
        $this->setIfExists('partnerId', $data ?? [], null);
        $this->setIfExists('offerId', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['fulfillmentLagTime'] === null) {
            $invalidProperties[] = "'fulfillmentLagTime' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets sku
     *
     * @return string
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku An arbitrary alphanumeric unique ID, seller-specified, identifying each item.
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets quantity
     *
     * @return \Walmart\Models\MP\CA\Inventory\GetInventory200ResponseQuantity
    
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param \Walmart\Models\MP\CA\Inventory\GetInventory200ResponseQuantity $quantity quantity
     *
     * @return self
    
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        $this->container['quantity'] = $quantity;
        return $this;
    }

    /**
     * Gets fulfillmentLagTime
     *
     * @return int
    
     */
    public function getFulfillmentLagTime()
    {
        return $this->container['fulfillmentLagTime'];
    }

    /**
     * Sets fulfillmentLagTime
     *
     * @param int $fulfillmentLagTime The number of days between when the item is ordered and when it is shipped
     *
     * @return self
    
     */
    public function setFulfillmentLagTime($fulfillmentLagTime)
    {
        if (is_null($fulfillmentLagTime)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentLagTime cannot be null');
        }

        $this->container['fulfillmentLagTime'] = $fulfillmentLagTime;
        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
    
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId partnerId
     *
     * @return self
    
     */
    public function setPartnerId($partnerId)
    {
        if (is_null($partnerId)) {
            throw new \InvalidArgumentException('non-nullable partnerId cannot be null');
        }

        $this->container['partnerId'] = $partnerId;
        return $this;
    }

    /**
     * Gets offerId
     *
     * @return string|null
    
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param string|null $offerId offerId
     *
     * @return self
    
     */
    public function setOfferId($offerId)
    {
        if (is_null($offerId)) {
            throw new \InvalidArgumentException('non-nullable offerId cannot be null');
        }

        $this->container['offerId'] = $offerId;
        return $this;
    }
}


