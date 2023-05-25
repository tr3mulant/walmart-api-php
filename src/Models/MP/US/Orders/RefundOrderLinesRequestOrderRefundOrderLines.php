<?php

/**
 * RefundOrderLinesRequestOrderRefundOrderLines
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
 * RefundOrderLinesRequestOrderRefundOrderLines Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RefundOrderLinesRequestOrderRefundOrderLines extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'refundOrderLines_request_orderRefund_orderLines';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'orderLine' => '\Walmart\Models\MP\US\Orders\RefundOrderLinesRequestOrderRefundOrderLinesOrderLineInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'orderLine' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orderLine' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'orderLine' => 'orderLine'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'orderLine' => 'setOrderLine'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'orderLine' => 'getOrderLine'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('orderLine', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderLine'] === null) {
            $invalidProperties[] = "'orderLine' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets orderLine
     *
     * @return \Walmart\Models\MP\US\Orders\RefundOrderLinesRequestOrderRefundOrderLinesOrderLineInner[]
    
     */
    public function getOrderLine()
    {
        return $this->container['orderLine'];
    }

    /**
     * Sets orderLine
     *
     * @param \Walmart\Models\MP\US\Orders\RefundOrderLinesRequestOrderRefundOrderLinesOrderLineInner[] $orderLine orderLine
     *
     * @return self
    
     */
    public function setOrderLine($orderLine)
    {
        if (is_null($orderLine)) {
            throw new \InvalidArgumentException('non-nullable orderLine cannot be null');
        }

        $this->container['orderLine'] = $orderLine;
        return $this;
    }
}


