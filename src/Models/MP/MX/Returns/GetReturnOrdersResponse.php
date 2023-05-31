<?php

/**
 * GetReturnOrdersResponse
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

namespace Walmart\Models\MP\MX\Returns;

use Walmart\Models\BaseModel;

/**
 * GetReturnOrdersResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetReturnOrdersResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetReturnOrdersResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'meta' => '\Walmart\Models\MP\MX\Returns\MetaWithoutCursor',
        'returnOrders' => '\Walmart\Models\MP\MX\Returns\ReturnOrder[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'meta' => null,
        'returnOrders' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meta' => false,
        'returnOrders' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'meta' => 'meta',
        'returnOrders' => 'returnOrders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'meta' => 'setMeta',
        'returnOrders' => 'setReturnOrders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'meta' => 'getMeta',
        'returnOrders' => 'getReturnOrders'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('returnOrders', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['meta'] === null) {
            $invalidProperties[] = "'meta' can't be null";
        }
        if ($this->container['returnOrders'] === null) {
            $invalidProperties[] = "'returnOrders' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets meta
     *
     * @return \Walmart\Models\MP\MX\Returns\MetaWithoutCursor
    
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \Walmart\Models\MP\MX\Returns\MetaWithoutCursor $meta meta
     *
     * @return self
    
     */
    public function setMeta($meta)
    {
        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }

        $this->container['meta'] = $meta;
        return $this;
    }

    /**
     * Gets returnOrders
     *
     * @return \Walmart\Models\MP\MX\Returns\ReturnOrder[]
    
     */
    public function getReturnOrders()
    {
        return $this->container['returnOrders'];
    }

    /**
     * Sets returnOrders
     *
     * @param \Walmart\Models\MP\MX\Returns\ReturnOrder[] $returnOrders List of returns for the seller.
     *
     * @return self
    
     */
    public function setReturnOrders($returnOrders)
    {
        if (is_null($returnOrders)) {
            throw new \InvalidArgumentException('non-nullable returnOrders cannot be null');
        }

        $this->container['returnOrders'] = $returnOrders;
        return $this;
    }
}


