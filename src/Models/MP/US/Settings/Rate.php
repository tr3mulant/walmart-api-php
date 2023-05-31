<?php

/**
 * Rate
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Models\BaseModel;

/**
 * Rate Class Doc Comment
 *
 * @category Class

 * @description API call Rate

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Rate extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Rate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'count' => 'int',
        'replenishTimeWindow' => '\Walmart\Models\MP\US\Settings\FileSize'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'count' => 'int64',
        'replenishTimeWindow' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'count' => false,
        'replenishTimeWindow' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'count' => 'count',
        'replenishTimeWindow' => 'replenishTimeWindow'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'count' => 'setCount',
        'replenishTimeWindow' => 'setReplenishTimeWindow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'count' => 'getCount',
        'replenishTimeWindow' => 'getReplenishTimeWindow'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('replenishTimeWindow', $data ?? [], null);
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
     * Gets count
     *
     * @return int|null
    
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count Number of API calls that can be made in every replenish time window
     *
     * @return self
    
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }

        $this->container['count'] = $count;
        return $this;
    }

    /**
     * Gets replenishTimeWindow
     *
     * @return \Walmart\Models\MP\US\Settings\FileSize|null
    
     */
    public function getReplenishTimeWindow()
    {
        return $this->container['replenishTimeWindow'];
    }

    /**
     * Sets replenishTimeWindow
     *
     * @param \Walmart\Models\MP\US\Settings\FileSize|null $replenishTimeWindow replenishTimeWindow
     *
     * @return self
    
     */
    public function setReplenishTimeWindow($replenishTimeWindow)
    {
        if (is_null($replenishTimeWindow)) {
            throw new \InvalidArgumentException('non-nullable replenishTimeWindow cannot be null');
        }

        $this->container['replenishTimeWindow'] = $replenishTimeWindow;
        return $this;
    }
}


