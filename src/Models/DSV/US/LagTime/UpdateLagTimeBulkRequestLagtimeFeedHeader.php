<?php

/**
 * UpdateLagTimeBulkRequestLagtimeFeedHeader
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
 * UpdateLagTimeBulkRequestLagtimeFeedHeader Class Doc Comment
 *
 * @category Class

 * @description Specifies an object for the lag time feed header.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateLagTimeBulkRequestLagtimeFeedHeader extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updateLagTimeBulk_request_lagtimeFeedHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'version' => 'string',
        'feedType' => 'string',
        'feedDate' => 'string',
        'locale' => 'string',
        'businessUnit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'version' => null,
        'feedType' => null,
        'feedDate' => null,
        'locale' => null,
        'businessUnit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'version' => false,
        'feedType' => false,
        'feedDate' => false,
        'locale' => false,
        'businessUnit' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'version' => 'version',
        'feedType' => 'feedType',
        'feedDate' => 'feedDate',
        'locale' => 'locale',
        'businessUnit' => 'businessUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'version' => 'setVersion',
        'feedType' => 'setFeedType',
        'feedDate' => 'setFeedDate',
        'locale' => 'setLocale',
        'businessUnit' => 'setBusinessUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'version' => 'getVersion',
        'feedType' => 'getFeedType',
        'feedDate' => 'getFeedDate',
        'locale' => 'getLocale',
        'businessUnit' => 'getBusinessUnit'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('feedType', $data ?? [], null);
        $this->setIfExists('feedDate', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('businessUnit', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['feedType'] === null) {
            $invalidProperties[] = "'feedType' can't be null";
        }
        if ($this->container['feedDate'] === null) {
            $invalidProperties[] = "'feedDate' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['businessUnit'] === null) {
            $invalidProperties[] = "'businessUnit' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets version
     *
     * @return string
    
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version Specifies the version of the lag time feed header.  Example(s):  1.0   2.0.20221010-13_56_27-api
     *
     * @return self
    
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }

        $this->container['version'] = $version;
        return $this;
    }

    /**
     * Gets feedType
     *
     * @return string
    
     */
    public function getFeedType()
    {
        return $this->container['feedType'];
    }

    /**
     * Sets feedType
     *
     * @param string $feedType Specifies the type of the feed content.   Use 'lagtime' for this API.
     *
     * @return self
    
     */
    public function setFeedType($feedType)
    {
        if (is_null($feedType)) {
            throw new \InvalidArgumentException('non-nullable feedType cannot be null');
        }

        $this->container['feedType'] = $feedType;
        return $this;
    }

    /**
     * Gets feedDate
     *
     * @return string
    
     */
    public function getFeedDate()
    {
        return $this->container['feedDate'];
    }

    /**
     * Sets feedDate
     *
     * @param string $feedDate Specifies the feed date of the lag time feed header, in ISO 8601 format.   Example(s):  2023-03-13T13:03:33.000Z
     *
     * @return self
    
     */
    public function setFeedDate($feedDate)
    {
        if (is_null($feedDate)) {
            throw new \InvalidArgumentException('non-nullable feedDate cannot be null');
        }

        $this->container['feedDate'] = $feedDate;
        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
    
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Specifies the locale of the lag time feed header.   Valid value is:   en
     *
     * @return self
    
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }

        $this->container['locale'] = $locale;
        return $this;
    }

    /**
     * Gets businessUnit
     *
     * @return string
    
     */
    public function getBusinessUnit()
    {
        return $this->container['businessUnit'];
    }

    /**
     * Sets businessUnit
     *
     * @param string $businessUnit Specifies the business unit of the lag time feed header.  Valid value is:  WALMART_US
     *
     * @return self
    
     */
    public function setBusinessUnit($businessUnit)
    {
        if (is_null($businessUnit)) {
            throw new \InvalidArgumentException('non-nullable businessUnit cannot be null');
        }

        $this->container['businessUnit'] = $businessUnit;
        return $this;
    }
}


