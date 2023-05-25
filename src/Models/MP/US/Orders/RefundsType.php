<?php

/**
 * RefundsType
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
 * RefundsType Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RefundsType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RefundsType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'refund' => '\Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefund[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'refund' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'refund' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'refund' => 'refund'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'refund' => 'setRefund'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'refund' => 'getRefund'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('refund', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['refund'] === null) {
            $invalidProperties[] = "'refund' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets refund
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefund[]
    
     */
    public function getRefund()
    {
        return $this->container['refund'];
    }

    /**
     * Sets refund
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefund[] $refund refund
     *
     * @return self
    
     */
    public function setRefund($refund)
    {
        if (is_null($refund)) {
            throw new \InvalidArgumentException('non-nullable refund cannot be null');
        }

        $this->container['refund'] = $refund;
        return $this;
    }
}


