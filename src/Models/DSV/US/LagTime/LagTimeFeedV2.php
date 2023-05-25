<?php

/**
 * LagTimeFeedV2
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
 * Lag Time
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\DSV\US\LagTime;
use Walmart\Models\BaseModel;

/**
 * LagTimeFeedV2 Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class LagTimeFeedV2 extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LagTimeFeedV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'lagtimeFeedHeader' => '\Walmart\Models\DSV\US\LagTime\UpdateLagTimeBulkRequestLagtimeFeedHeader',
        'lagTime' => '\Walmart\Models\DSV\US\LagTime\UpdateLagTimeBulkRequestLagTimeInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'lagtimeFeedHeader' => null,
        'lagTime' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lagtimeFeedHeader' => false,
        'lagTime' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'lagtimeFeedHeader' => 'lagtimeFeedHeader',
        'lagTime' => 'lagTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'lagtimeFeedHeader' => 'setLagtimeFeedHeader',
        'lagTime' => 'setLagTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'lagtimeFeedHeader' => 'getLagtimeFeedHeader',
        'lagTime' => 'getLagTime'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('lagtimeFeedHeader', $data ?? [], null);
        $this->setIfExists('lagTime', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lagtimeFeedHeader'] === null) {
            $invalidProperties[] = "'lagtimeFeedHeader' can't be null";
        }
        if ($this->container['lagTime'] === null) {
            $invalidProperties[] = "'lagTime' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets lagtimeFeedHeader
     *
     * @return \Walmart\Models\DSV\US\LagTime\UpdateLagTimeBulkRequestLagtimeFeedHeader
    
     */
    public function getLagtimeFeedHeader()
    {
        return $this->container['lagtimeFeedHeader'];
    }

    /**
     * Sets lagtimeFeedHeader
     *
     * @param \Walmart\Models\DSV\US\LagTime\UpdateLagTimeBulkRequestLagtimeFeedHeader $lagtimeFeedHeader lagtimeFeedHeader
     *
     * @return self
    
     */
    public function setLagtimeFeedHeader($lagtimeFeedHeader)
    {
        if (is_null($lagtimeFeedHeader)) {
            throw new \InvalidArgumentException('non-nullable lagtimeFeedHeader cannot be null');
        }

        $this->container['lagtimeFeedHeader'] = $lagtimeFeedHeader;
        return $this;
    }

    /**
     * Gets lagTime
     *
     * @return \Walmart\Models\DSV\US\LagTime\UpdateLagTimeBulkRequestLagTimeInner[]
    
     */
    public function getLagTime()
    {
        return $this->container['lagTime'];
    }

    /**
     * Sets lagTime
     *
     * @param \Walmart\Models\DSV\US\LagTime\UpdateLagTimeBulkRequestLagTimeInner[] $lagTime Specifies an array of objects for lag time.
     *
     * @return self
    
     */
    public function setLagTime($lagTime)
    {
        if (is_null($lagTime)) {
            throw new \InvalidArgumentException('non-nullable lagTime cannot be null');
        }

        $this->container['lagTime'] = $lagTime;
        return $this;
    }
}


