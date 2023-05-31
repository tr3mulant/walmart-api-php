<?php

/**
 * CustomerOrderDetailsResponse
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Models\BaseModel;

/**
 * CustomerOrderDetailsResponse Class Doc Comment
 *
 * @category Class

 * @description Order details

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CustomerOrderDetailsResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CustomerOrderDetailsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'orderChannelId' => 'string',
        'sellerOrderId' => 'string',
        'orderType' => 'string',
        'status' => 'string',
        'orderDate' => '\DateTime',
        'buyerInfo' => '\Walmart\Models\MP\US\Fulfillment\BuyerInfo',
        'shipments' => '\Walmart\Models\MP\US\Fulfillment\Shipment[]',
        'orderLines' => '\Walmart\Models\MP\US\Fulfillment\CustomerOrderLinesDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'orderChannelId' => null,
        'sellerOrderId' => null,
        'orderType' => null,
        'status' => null,
        'orderDate' => 'date-time',
        'buyerInfo' => null,
        'shipments' => null,
        'orderLines' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orderChannelId' => false,
        'sellerOrderId' => false,
        'orderType' => false,
        'status' => false,
        'orderDate' => false,
        'buyerInfo' => false,
        'shipments' => false,
        'orderLines' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'orderChannelId' => 'orderChannelId',
        'sellerOrderId' => 'sellerOrderId',
        'orderType' => 'orderType',
        'status' => 'status',
        'orderDate' => 'orderDate',
        'buyerInfo' => 'buyerInfo',
        'shipments' => 'shipments',
        'orderLines' => 'orderLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'orderChannelId' => 'setOrderChannelId',
        'sellerOrderId' => 'setSellerOrderId',
        'orderType' => 'setOrderType',
        'status' => 'setStatus',
        'orderDate' => 'setOrderDate',
        'buyerInfo' => 'setBuyerInfo',
        'shipments' => 'setShipments',
        'orderLines' => 'setOrderLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'orderChannelId' => 'getOrderChannelId',
        'sellerOrderId' => 'getSellerOrderId',
        'orderType' => 'getOrderType',
        'status' => 'getStatus',
        'orderDate' => 'getOrderDate',
        'buyerInfo' => 'getBuyerInfo',
        'shipments' => 'getShipments',
        'orderLines' => 'getOrderLines'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('orderChannelId', $data ?? [], null);
        $this->setIfExists('sellerOrderId', $data ?? [], null);
        $this->setIfExists('orderType', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('orderDate', $data ?? [], null);
        $this->setIfExists('buyerInfo', $data ?? [], null);
        $this->setIfExists('shipments', $data ?? [], null);
        $this->setIfExists('orderLines', $data ?? [], null);
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
     * Gets orderChannelId
     *
     * @return string|null
    
     */
    public function getOrderChannelId()
    {
        return $this->container['orderChannelId'];
    }

    /**
     * Sets orderChannelId
     *
     * @param string|null $orderChannelId orderChannelId of the order
     *
     * @return self
    
     */
    public function setOrderChannelId($orderChannelId)
    {
        if (is_null($orderChannelId)) {
            throw new \InvalidArgumentException('non-nullable orderChannelId cannot be null');
        }

        $this->container['orderChannelId'] = $orderChannelId;
        return $this;
    }

    /**
     * Gets sellerOrderId
     *
     * @return string|null
    
     */
    public function getSellerOrderId()
    {
        return $this->container['sellerOrderId'];
    }

    /**
     * Sets sellerOrderId
     *
     * @param string|null $sellerOrderId sellerOrderId of the order
     *
     * @return self
    
     */
    public function setSellerOrderId($sellerOrderId)
    {
        if (is_null($sellerOrderId)) {
            throw new \InvalidArgumentException('non-nullable sellerOrderId cannot be null');
        }

        $this->container['sellerOrderId'] = $sellerOrderId;
        return $this;
    }

    /**
     * Gets orderType
     *
     * @return string|null
    
     */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
     * Sets orderType
     *
     * @param string|null $orderType order type of the order
     *
     * @return self
    
     */
    public function setOrderType($orderType)
    {
        if (is_null($orderType)) {
            throw new \InvalidArgumentException('non-nullable orderType cannot be null');
        }

        $this->container['orderType'] = $orderType;
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
     * @param string|null $status status of the order
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return \DateTime|null
    
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param \DateTime|null $orderDate createDate of the order
     *
     * @return self
    
     */
    public function setOrderDate($orderDate)
    {
        if (is_null($orderDate)) {
            throw new \InvalidArgumentException('non-nullable orderDate cannot be null');
        }

        $this->container['orderDate'] = $orderDate;
        return $this;
    }

    /**
     * Gets buyerInfo
     *
     * @return \Walmart\Models\MP\US\Fulfillment\BuyerInfo|null
    
     */
    public function getBuyerInfo()
    {
        return $this->container['buyerInfo'];
    }

    /**
     * Sets buyerInfo
     *
     * @param \Walmart\Models\MP\US\Fulfillment\BuyerInfo|null $buyerInfo buyerInfo
     *
     * @return self
    
     */
    public function setBuyerInfo($buyerInfo)
    {
        if (is_null($buyerInfo)) {
            throw new \InvalidArgumentException('non-nullable buyerInfo cannot be null');
        }

        $this->container['buyerInfo'] = $buyerInfo;
        return $this;
    }

    /**
     * Gets shipments
     *
     * @return \Walmart\Models\MP\US\Fulfillment\Shipment[]|null
    
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param \Walmart\Models\MP\US\Fulfillment\Shipment[]|null $shipments createDate of the order
     *
     * @return self
    
     */
    public function setShipments($shipments)
    {
        if (is_null($shipments)) {
            throw new \InvalidArgumentException('non-nullable shipments cannot be null');
        }

        $this->container['shipments'] = $shipments;
        return $this;
    }

    /**
     * Gets orderLines
     *
     * @return \Walmart\Models\MP\US\Fulfillment\CustomerOrderLinesDetails[]|null
    
     */
    public function getOrderLines()
    {
        return $this->container['orderLines'];
    }

    /**
     * Sets orderLines
     *
     * @param \Walmart\Models\MP\US\Fulfillment\CustomerOrderLinesDetails[]|null $orderLines order lines details
     *
     * @return self
    
     */
    public function setOrderLines($orderLines)
    {
        if (is_null($orderLines)) {
            throw new \InvalidArgumentException('non-nullable orderLines cannot be null');
        }

        $this->container['orderLines'] = $orderLines;
        return $this;
    }
}


