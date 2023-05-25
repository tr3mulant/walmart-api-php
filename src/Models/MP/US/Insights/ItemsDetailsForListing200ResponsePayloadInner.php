<?php

/**
 * ItemsDetailsForListing200ResponsePayloadInner
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
 * ItemsDetailsForListing200ResponsePayloadInner Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemsDetailsForListing200ResponsePayloadInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'itemsDetailsForListing_200_response_payload_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'productId' => 'string',
        'scoreDetails' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetails',
        'wfsEnabled' => 'string',
        'priority' => 'string',
        'productName' => 'string',
        'itemId' => 'string',
        'sellerId' => 'string',
        'pageViews' => 'string',
        'stats' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerStats',
        'imageUrL' => 'string',
        'qualityScore' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerQualityScore',
        'offerId' => 'string',
        'sku' => 'string',
        'category' => 'string',
        'postPurchaseIssues' => 'string',
        'productType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'productId' => null,
        'scoreDetails' => null,
        'wfsEnabled' => null,
        'priority' => null,
        'productName' => null,
        'itemId' => null,
        'sellerId' => null,
        'pageViews' => null,
        'stats' => null,
        'imageUrL' => null,
        'qualityScore' => null,
        'offerId' => null,
        'sku' => null,
        'category' => null,
        'postPurchaseIssues' => null,
        'productType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'productId' => false,
        'scoreDetails' => false,
        'wfsEnabled' => false,
        'priority' => false,
        'productName' => false,
        'itemId' => false,
        'sellerId' => false,
        'pageViews' => false,
        'stats' => false,
        'imageUrL' => false,
        'qualityScore' => false,
        'offerId' => false,
        'sku' => false,
        'category' => false,
        'postPurchaseIssues' => false,
        'productType' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'productId' => 'productId',
        'scoreDetails' => 'scoreDetails',
        'wfsEnabled' => 'wfsEnabled',
        'priority' => 'priority',
        'productName' => 'productName',
        'itemId' => 'itemId',
        'sellerId' => 'sellerId',
        'pageViews' => 'pageViews',
        'stats' => 'stats',
        'imageUrL' => 'imageUrL',
        'qualityScore' => 'qualityScore',
        'offerId' => 'offerId',
        'sku' => 'sku',
        'category' => 'category',
        'postPurchaseIssues' => 'postPurchaseIssues',
        'productType' => 'productType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'productId' => 'setProductId',
        'scoreDetails' => 'setScoreDetails',
        'wfsEnabled' => 'setWfsEnabled',
        'priority' => 'setPriority',
        'productName' => 'setProductName',
        'itemId' => 'setItemId',
        'sellerId' => 'setSellerId',
        'pageViews' => 'setPageViews',
        'stats' => 'setStats',
        'imageUrL' => 'setImageUrL',
        'qualityScore' => 'setQualityScore',
        'offerId' => 'setOfferId',
        'sku' => 'setSku',
        'category' => 'setCategory',
        'postPurchaseIssues' => 'setPostPurchaseIssues',
        'productType' => 'setProductType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'productId' => 'getProductId',
        'scoreDetails' => 'getScoreDetails',
        'wfsEnabled' => 'getWfsEnabled',
        'priority' => 'getPriority',
        'productName' => 'getProductName',
        'itemId' => 'getItemId',
        'sellerId' => 'getSellerId',
        'pageViews' => 'getPageViews',
        'stats' => 'getStats',
        'imageUrL' => 'getImageUrL',
        'qualityScore' => 'getQualityScore',
        'offerId' => 'getOfferId',
        'sku' => 'getSku',
        'category' => 'getCategory',
        'postPurchaseIssues' => 'getPostPurchaseIssues',
        'productType' => 'getProductType'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('productId', $data ?? [], null);
        $this->setIfExists('scoreDetails', $data ?? [], null);
        $this->setIfExists('wfsEnabled', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('itemId', $data ?? [], null);
        $this->setIfExists('sellerId', $data ?? [], null);
        $this->setIfExists('pageViews', $data ?? [], null);
        $this->setIfExists('stats', $data ?? [], null);
        $this->setIfExists('imageUrL', $data ?? [], null);
        $this->setIfExists('qualityScore', $data ?? [], null);
        $this->setIfExists('offerId', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('postPurchaseIssues', $data ?? [], null);
        $this->setIfExists('productType', $data ?? [], null);
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
     * Gets productId
     *
     * @return string|null
    
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param string|null $productId productId
     *
     * @return self
    
     */
    public function setProductId($productId)
    {
        if (is_null($productId)) {
            throw new \InvalidArgumentException('non-nullable productId cannot be null');
        }

        $this->container['productId'] = $productId;
        return $this;
    }

    /**
     * Gets scoreDetails
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetails|null
    
     */
    public function getScoreDetails()
    {
        return $this->container['scoreDetails'];
    }

    /**
     * Sets scoreDetails
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetails|null $scoreDetails scoreDetails
     *
     * @return self
    
     */
    public function setScoreDetails($scoreDetails)
    {
        if (is_null($scoreDetails)) {
            throw new \InvalidArgumentException('non-nullable scoreDetails cannot be null');
        }

        $this->container['scoreDetails'] = $scoreDetails;
        return $this;
    }

    /**
     * Gets wfsEnabled
     *
     * @return string|null
    
     */
    public function getWfsEnabled()
    {
        return $this->container['wfsEnabled'];
    }

    /**
     * Sets wfsEnabled
     *
     * @param string|null $wfsEnabled wfsEnabled
     *
     * @return self
    
     */
    public function setWfsEnabled($wfsEnabled)
    {
        if (is_null($wfsEnabled)) {
            throw new \InvalidArgumentException('non-nullable wfsEnabled cannot be null');
        }

        $this->container['wfsEnabled'] = $wfsEnabled;
        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
    
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority priority
     *
     * @return self
    
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }

        $this->container['priority'] = $priority;
        return $this;
    }

    /**
     * Gets productName
     *
     * @return string|null
    
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName productName
     *
     * @return self
    
     */
    public function setProductName($productName)
    {
        if (is_null($productName)) {
            throw new \InvalidArgumentException('non-nullable productName cannot be null');
        }

        $this->container['productName'] = $productName;
        return $this;
    }

    /**
     * Gets itemId
     *
     * @return string|null
    
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string|null $itemId itemId
     *
     * @return self
    
     */
    public function setItemId($itemId)
    {
        if (is_null($itemId)) {
            throw new \InvalidArgumentException('non-nullable itemId cannot be null');
        }

        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
     * Gets sellerId
     *
     * @return string|null
    
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string|null $sellerId sellerId
     *
     * @return self
    
     */
    public function setSellerId($sellerId)
    {
        if (is_null($sellerId)) {
            throw new \InvalidArgumentException('non-nullable sellerId cannot be null');
        }

        $this->container['sellerId'] = $sellerId;
        return $this;
    }

    /**
     * Gets pageViews
     *
     * @return string|null
    
     */
    public function getPageViews()
    {
        return $this->container['pageViews'];
    }

    /**
     * Sets pageViews
     *
     * @param string|null $pageViews pageViews
     *
     * @return self
    
     */
    public function setPageViews($pageViews)
    {
        if (is_null($pageViews)) {
            throw new \InvalidArgumentException('non-nullable pageViews cannot be null');
        }

        $this->container['pageViews'] = $pageViews;
        return $this;
    }

    /**
     * Gets stats
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerStats|null
    
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerStats|null $stats stats
     *
     * @return self
    
     */
    public function setStats($stats)
    {
        if (is_null($stats)) {
            throw new \InvalidArgumentException('non-nullable stats cannot be null');
        }

        $this->container['stats'] = $stats;
        return $this;
    }

    /**
     * Gets imageUrL
     *
     * @return string|null
    
     */
    public function getImageUrL()
    {
        return $this->container['imageUrL'];
    }

    /**
     * Sets imageUrL
     *
     * @param string|null $imageUrL imageUrL
     *
     * @return self
    
     */
    public function setImageUrL($imageUrL)
    {
        if (is_null($imageUrL)) {
            throw new \InvalidArgumentException('non-nullable imageUrL cannot be null');
        }

        $this->container['imageUrL'] = $imageUrL;
        return $this;
    }

    /**
     * Gets qualityScore
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerQualityScore|null
    
     */
    public function getQualityScore()
    {
        return $this->container['qualityScore'];
    }

    /**
     * Sets qualityScore
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerQualityScore|null $qualityScore qualityScore
     *
     * @return self
    
     */
    public function setQualityScore($qualityScore)
    {
        if (is_null($qualityScore)) {
            throw new \InvalidArgumentException('non-nullable qualityScore cannot be null');
        }

        $this->container['qualityScore'] = $qualityScore;
        return $this;
    }

    /**
     * Gets offerId
     *
     * @return string|null
    
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param string|null $offerId offerId
     *
     * @return self
    
     */
    public function setOfferId($offerId)
    {
        if (is_null($offerId)) {
            throw new \InvalidArgumentException('non-nullable offerId cannot be null');
        }

        $this->container['offerId'] = $offerId;
        return $this;
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
     * Gets category
     *
     * @return string|null
    
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return self
    
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }

        $this->container['category'] = $category;
        return $this;
    }

    /**
     * Gets postPurchaseIssues
     *
     * @return string|null
    
     */
    public function getPostPurchaseIssues()
    {
        return $this->container['postPurchaseIssues'];
    }

    /**
     * Sets postPurchaseIssues
     *
     * @param string|null $postPurchaseIssues postPurchaseIssues
     *
     * @return self
    
     */
    public function setPostPurchaseIssues($postPurchaseIssues)
    {
        if (is_null($postPurchaseIssues)) {
            throw new \InvalidArgumentException('non-nullable postPurchaseIssues cannot be null');
        }

        $this->container['postPurchaseIssues'] = $postPurchaseIssues;
        return $this;
    }

    /**
     * Gets productType
     *
     * @return string|null
    
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param string|null $productType productType
     *
     * @return self
    
     */
    public function setProductType($productType)
    {
        if (is_null($productType)) {
            throw new \InvalidArgumentException('non-nullable productType cannot be null');
        }

        $this->container['productType'] = $productType;
        return $this;
    }
}


