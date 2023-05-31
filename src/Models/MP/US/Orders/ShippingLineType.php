<?php

/**
 * ShippingLineType
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Orders;

use Walmart\Models\BaseModel;

/**
 * ShippingLineType Class Doc Comment
 *
 * @category Class

 * @description Information about one order line shipment

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingLineType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingLineType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'lineNumber' => 'string',
        'intentToCancelOverride' => 'bool',
        'sellerOrderId' => 'string',
        'orderLineStatuses' => '\Walmart\Models\MP\US\Orders\OrderLineStatusesType',
        'sellerOrderNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'lineNumber' => null,
        'intentToCancelOverride' => null,
        'sellerOrderId' => null,
        'orderLineStatuses' => null,
        'sellerOrderNo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lineNumber' => false,
        'intentToCancelOverride' => false,
        'sellerOrderId' => false,
        'orderLineStatuses' => false,
        'sellerOrderNo' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'lineNumber' => 'lineNumber',
        'intentToCancelOverride' => 'intentToCancelOverride',
        'sellerOrderId' => 'sellerOrderId',
        'orderLineStatuses' => 'orderLineStatuses',
        'sellerOrderNo' => 'sellerOrderNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'lineNumber' => 'setLineNumber',
        'intentToCancelOverride' => 'setIntentToCancelOverride',
        'sellerOrderId' => 'setSellerOrderId',
        'orderLineStatuses' => 'setOrderLineStatuses',
        'sellerOrderNo' => 'setSellerOrderNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'lineNumber' => 'getLineNumber',
        'intentToCancelOverride' => 'getIntentToCancelOverride',
        'sellerOrderId' => 'getSellerOrderId',
        'orderLineStatuses' => 'getOrderLineStatuses',
        'sellerOrderNo' => 'getSellerOrderNo'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('lineNumber', $data ?? [], null);
        $this->setIfExists('intentToCancelOverride', $data ?? [], false);
        $this->setIfExists('sellerOrderId', $data ?? [], null);
        $this->setIfExists('orderLineStatuses', $data ?? [], null);
        $this->setIfExists('sellerOrderNo', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lineNumber'] === null) {
            $invalidProperties[] = "'lineNumber' can't be null";
        }
        if ($this->container['sellerOrderId'] === null) {
            $invalidProperties[] = "'sellerOrderId' can't be null";
        }
        if ($this->container['orderLineStatuses'] === null) {
            $invalidProperties[] = "'orderLineStatuses' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets lineNumber
     *
     * @return string
    
     */
    public function getLineNumber()
    {
        return $this->container['lineNumber'];
    }

    /**
     * Sets lineNumber
     *
     * @param string $lineNumber The line number associated with the details for each individual item in the purchase order
     *
     * @return self
    
     */
    public function setLineNumber($lineNumber)
    {
        if (is_null($lineNumber)) {
            throw new \InvalidArgumentException('non-nullable lineNumber cannot be null');
        }

        $this->container['lineNumber'] = $lineNumber;
        return $this;
    }

    /**
     * Gets intentToCancelOverride
     *
     * @return bool|null
    
     */
    public function getIntentToCancelOverride()
    {
        return $this->container['intentToCancelOverride'];
    }

    /**
     * Sets intentToCancelOverride
     *
     * @param bool|null $intentToCancelOverride Needs to be passed as true during shipping as an acknowledgment for orders which are intent to cancel by the customer
     *
     * @return self
    
     */
    public function setIntentToCancelOverride($intentToCancelOverride)
    {
        if (is_null($intentToCancelOverride)) {
            throw new \InvalidArgumentException('non-nullable intentToCancelOverride cannot be null');
        }

        $this->container['intentToCancelOverride'] = $intentToCancelOverride;
        return $this;
    }

    /**
     * Gets sellerOrderId
     *
     * @return string
    
     */
    public function getSellerOrderId()
    {
        return $this->container['sellerOrderId'];
    }

    /**
     * Sets sellerOrderId
     *
     * @param string $sellerOrderId A unique ID associated with the sales order for specified Seller; gives Sellers the ability to print their own custom order ID on the return label; limit of 30 characters
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
     * Gets orderLineStatuses
     *
     * @return \Walmart\Models\MP\US\Orders\OrderLineStatusesType
    
     */
    public function getOrderLineStatuses()
    {
        return $this->container['orderLineStatuses'];
    }

    /**
     * Sets orderLineStatuses
     *
     * @param \Walmart\Models\MP\US\Orders\OrderLineStatusesType $orderLineStatuses orderLineStatuses
     *
     * @return self
    
     */
    public function setOrderLineStatuses($orderLineStatuses)
    {
        if (is_null($orderLineStatuses)) {
            throw new \InvalidArgumentException('non-nullable orderLineStatuses cannot be null');
        }

        $this->container['orderLineStatuses'] = $orderLineStatuses;
        return $this;
    }

    /**
     * Gets sellerOrderNo
     *
     * @return string|null
    
     */
    public function getSellerOrderNo()
    {
        return $this->container['sellerOrderNo'];
    }

    /**
     * Sets sellerOrderNo
     *
     * @param string|null $sellerOrderNo sellerOrderNo
     *
     * @return self
    
     */
    public function setSellerOrderNo($sellerOrderNo)
    {
        if (is_null($sellerOrderNo)) {
            throw new \InvalidArgumentException('non-nullable sellerOrderNo cannot be null');
        }

        $this->container['sellerOrderNo'] = $sellerOrderNo;
        return $this;
    }
}


