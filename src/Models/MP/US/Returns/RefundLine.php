<?php

/**
 * RefundLine
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Returns;
use Walmart\Models\BaseModel;

/**
 * RefundLine Class Doc Comment
 *
 * @category Class

 * @description Array of refund lines.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RefundLine extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RefundLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'returnOrderLineNumber' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'returnOrderLineNumber' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'returnOrderLineNumber' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'returnOrderLineNumber' => 'returnOrderLineNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'returnOrderLineNumber' => 'setReturnOrderLineNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'returnOrderLineNumber' => 'getReturnOrderLineNumber'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('returnOrderLineNumber', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['returnOrderLineNumber'] === null) {
            $invalidProperties[] = "'returnOrderLineNumber' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets returnOrderLineNumber
     *
     * @return int
    
     */
    public function getReturnOrderLineNumber()
    {
        return $this->container['returnOrderLineNumber'];
    }

    /**
     * Sets returnOrderLineNumber
     *
     * @param int $returnOrderLineNumber A line number associated with each individual line in the return order. If return order has only one return order line and it is not provided in the request, the only available return order line is auto-selected. If return order has multiple return order lines, the required return order line must be provided in the request. If not provided in the request, it will result in data-error.
     *
     * @return self
    
     */
    public function setReturnOrderLineNumber($returnOrderLineNumber)
    {
        if (is_null($returnOrderLineNumber)) {
            throw new \InvalidArgumentException('non-nullable returnOrderLineNumber cannot be null');
        }

        $this->container['returnOrderLineNumber'] = $returnOrderLineNumber;
        return $this;
    }
}


