<?php

/**
 * Offer
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
 * Insights Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Insights;
use Walmart\Models\BaseModel;

/**
 * Offer Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Offer extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Offer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'issueCount' => 'int',
        'price' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPrice',
        'shippingSpeed' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferShippingSpeed',
        'publishAndTransactable' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPublishAndTransactable'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'issueCount' => 'int32',
        'price' => null,
        'shippingSpeed' => null,
        'publishAndTransactable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'issueCount' => false,
        'price' => false,
        'shippingSpeed' => false,
        'publishAndTransactable' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'issueCount' => 'issueCount',
        'price' => 'price',
        'shippingSpeed' => 'shippingSpeed',
        'publishAndTransactable' => 'publishAndTransactable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'issueCount' => 'setIssueCount',
        'price' => 'setPrice',
        'shippingSpeed' => 'setShippingSpeed',
        'publishAndTransactable' => 'setPublishAndTransactable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'issueCount' => 'getIssueCount',
        'price' => 'getPrice',
        'shippingSpeed' => 'getShippingSpeed',
        'publishAndTransactable' => 'getPublishAndTransactable'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('issueCount', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('shippingSpeed', $data ?? [], null);
        $this->setIfExists('publishAndTransactable', $data ?? [], null);
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
     * Gets issueCount
     *
     * @return int|null
    
     */
    public function getIssueCount()
    {
        return $this->container['issueCount'];
    }

    /**
     * Sets issueCount
     *
     * @param int|null $issueCount issueCount
     *
     * @return self
    
     */
    public function setIssueCount($issueCount)
    {
        if (is_null($issueCount)) {
            throw new \InvalidArgumentException('non-nullable issueCount cannot be null');
        }

        $this->container['issueCount'] = $issueCount;
        return $this;
    }

    /**
     * Gets price
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPrice|null
    
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPrice|null $price price
     *
     * @return self
    
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;
        return $this;
    }

    /**
     * Gets shippingSpeed
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferShippingSpeed|null
    
     */
    public function getShippingSpeed()
    {
        return $this->container['shippingSpeed'];
    }

    /**
     * Sets shippingSpeed
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferShippingSpeed|null $shippingSpeed shippingSpeed
     *
     * @return self
    
     */
    public function setShippingSpeed($shippingSpeed)
    {
        if (is_null($shippingSpeed)) {
            throw new \InvalidArgumentException('non-nullable shippingSpeed cannot be null');
        }

        $this->container['shippingSpeed'] = $shippingSpeed;
        return $this;
    }

    /**
     * Gets publishAndTransactable
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPublishAndTransactable|null
    
     */
    public function getPublishAndTransactable()
    {
        return $this->container['publishAndTransactable'];
    }

    /**
     * Sets publishAndTransactable
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPublishAndTransactable|null $publishAndTransactable publishAndTransactable
     *
     * @return self
    
     */
    public function setPublishAndTransactable($publishAndTransactable)
    {
        if (is_null($publishAndTransactable)) {
            throw new \InvalidArgumentException('non-nullable publishAndTransactable cannot be null');
        }

        $this->container['publishAndTransactable'] = $publishAndTransactable;
        return $this;
    }
}


