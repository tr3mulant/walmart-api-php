<?php

/**
 * ResultRecord
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
 * Feed Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\Feeds;
use Walmart\Models\BaseModel;

/**
 * ResultRecord Class Doc Comment
 *
 * @category Class

 * @description The feed status results

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ResultRecord extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ResultRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'feed' => '\Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200ResponseResultsFeedInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'feed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feed' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'feed' => 'feed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'feed' => 'setFeed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'feed' => 'getFeed'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('feed', $data ?? [], null);
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
     * Gets feed
     *
     * @return \Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200ResponseResultsFeedInner[]|null
    
     */
    public function getFeed()
    {
        return $this->container['feed'];
    }

    /**
     * Sets feed
     *
     * @param \Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200ResponseResultsFeedInner[]|null $feed The feed status results
     *
     * @return self
    
     */
    public function setFeed($feed)
    {
        if (is_null($feed)) {
            throw new \InvalidArgumentException('non-nullable feed cannot be null');
        }

        $this->container['feed'] = $feed;
        return $this;
    }
}


