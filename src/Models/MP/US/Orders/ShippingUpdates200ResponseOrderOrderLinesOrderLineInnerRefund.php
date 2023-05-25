<?php

/**
 * ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefund
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
 * ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefund Class Doc Comment
 *
 * @category Class

 * @description Details about any partial refund on the order

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefund extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shippingUpdates_200_response_order_orderLines_orderLine_inner_refund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'refundId' => 'string',
        'refundComments' => 'string',
        'refundCharges' => '\Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefundRefundCharges'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'refundId' => null,
        'refundComments' => null,
        'refundCharges' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'refundId' => false,
        'refundComments' => false,
        'refundCharges' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'refundId' => 'refundId',
        'refundComments' => 'refundComments',
        'refundCharges' => 'refundCharges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'refundId' => 'setRefundId',
        'refundComments' => 'setRefundComments',
        'refundCharges' => 'setRefundCharges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'refundId' => 'getRefundId',
        'refundComments' => 'getRefundComments',
        'refundCharges' => 'getRefundCharges'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('refundId', $data ?? [], null);
        $this->setIfExists('refundComments', $data ?? [], null);
        $this->setIfExists('refundCharges', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['refundCharges'] === null) {
            $invalidProperties[] = "'refundCharges' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets refundId
     *
     * @return string|null
    
     */
    public function getRefundId()
    {
        return $this->container['refundId'];
    }

    /**
     * Sets refundId
     *
     * @param string|null $refundId refundId
     *
     * @return self
    
     */
    public function setRefundId($refundId)
    {
        if (is_null($refundId)) {
            throw new \InvalidArgumentException('non-nullable refundId cannot be null');
        }

        $this->container['refundId'] = $refundId;
        return $this;
    }

    /**
     * Gets refundComments
     *
     * @return string|null
    
     */
    public function getRefundComments()
    {
        return $this->container['refundComments'];
    }

    /**
     * Sets refundComments
     *
     * @param string|null $refundComments refundComments
     *
     * @return self
    
     */
    public function setRefundComments($refundComments)
    {
        if (is_null($refundComments)) {
            throw new \InvalidArgumentException('non-nullable refundComments cannot be null');
        }

        $this->container['refundComments'] = $refundComments;
        return $this;
    }

    /**
     * Gets refundCharges
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefundRefundCharges
    
     */
    public function getRefundCharges()
    {
        return $this->container['refundCharges'];
    }

    /**
     * Sets refundCharges
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefundRefundCharges $refundCharges refundCharges
     *
     * @return self
    
     */
    public function setRefundCharges($refundCharges)
    {
        if (is_null($refundCharges)) {
            throw new \InvalidArgumentException('non-nullable refundCharges cannot be null');
        }

        $this->container['refundCharges'] = $refundCharges;
        return $this;
    }
}


