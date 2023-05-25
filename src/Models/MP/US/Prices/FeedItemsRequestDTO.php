<?php

/**
 * FeedItemsRequestDTO
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
 * Price Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Prices;
use Walmart\Models\BaseModel;

/**
 * FeedItemsRequestDTO Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FeedItemsRequestDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FeedItemsRequestDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sku' => 'string',
        'repricerStrategy' => 'string',
        'minimumSellerAllowedPrice' => 'float',
        'maximumSellerAllowedPrice' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sku' => null,
        'repricerStrategy' => null,
        'minimumSellerAllowedPrice' => 'double',
        'maximumSellerAllowedPrice' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku' => false,
        'repricerStrategy' => false,
        'minimumSellerAllowedPrice' => false,
        'maximumSellerAllowedPrice' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sku' => 'sku',
        'repricerStrategy' => 'repricerStrategy',
        'minimumSellerAllowedPrice' => 'minimumSellerAllowedPrice',
        'maximumSellerAllowedPrice' => 'maximumSellerAllowedPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku' => 'setSku',
        'repricerStrategy' => 'setRepricerStrategy',
        'minimumSellerAllowedPrice' => 'setMinimumSellerAllowedPrice',
        'maximumSellerAllowedPrice' => 'setMaximumSellerAllowedPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku' => 'getSku',
        'repricerStrategy' => 'getRepricerStrategy',
        'minimumSellerAllowedPrice' => 'getMinimumSellerAllowedPrice',
        'maximumSellerAllowedPrice' => 'getMaximumSellerAllowedPrice'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('repricerStrategy', $data ?? [], null);
        $this->setIfExists('minimumSellerAllowedPrice', $data ?? [], null);
        $this->setIfExists('maximumSellerAllowedPrice', $data ?? [], null);
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
     * Gets sku
     *
     * @return string|null
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku sku
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets repricerStrategy
     *
     * @return string|null
    
     */
    public function getRepricerStrategy()
    {
        return $this->container['repricerStrategy'];
    }

    /**
     * Sets repricerStrategy
     *
     * @param string|null $repricerStrategy repricerStrategy
     *
     * @return self
    
     */
    public function setRepricerStrategy($repricerStrategy)
    {
        if (is_null($repricerStrategy)) {
            throw new \InvalidArgumentException('non-nullable repricerStrategy cannot be null');
        }

        $this->container['repricerStrategy'] = $repricerStrategy;
        return $this;
    }

    /**
     * Gets minimumSellerAllowedPrice
     *
     * @return float|null
    
     */
    public function getMinimumSellerAllowedPrice()
    {
        return $this->container['minimumSellerAllowedPrice'];
    }

    /**
     * Sets minimumSellerAllowedPrice
     *
     * @param float|null $minimumSellerAllowedPrice minimumSellerAllowedPrice
     *
     * @return self
    
     */
    public function setMinimumSellerAllowedPrice($minimumSellerAllowedPrice)
    {
        if (is_null($minimumSellerAllowedPrice)) {
            throw new \InvalidArgumentException('non-nullable minimumSellerAllowedPrice cannot be null');
        }

        $this->container['minimumSellerAllowedPrice'] = $minimumSellerAllowedPrice;
        return $this;
    }

    /**
     * Gets maximumSellerAllowedPrice
     *
     * @return float|null
    
     */
    public function getMaximumSellerAllowedPrice()
    {
        return $this->container['maximumSellerAllowedPrice'];
    }

    /**
     * Sets maximumSellerAllowedPrice
     *
     * @param float|null $maximumSellerAllowedPrice maximumSellerAllowedPrice
     *
     * @return self
    
     */
    public function setMaximumSellerAllowedPrice($maximumSellerAllowedPrice)
    {
        if (is_null($maximumSellerAllowedPrice)) {
            throw new \InvalidArgumentException('non-nullable maximumSellerAllowedPrice cannot be null');
        }

        $this->container['maximumSellerAllowedPrice'] = $maximumSellerAllowedPrice;
        return $this;
    }
}


