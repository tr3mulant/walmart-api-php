<?php

/**
 * GetItemReport200Response
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
 * Item report
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\DSV\US\Reports;
use Walmart\Models\BaseModel;

/**
 * GetItemReport200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetItemReport200Response extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getItemReport_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'vendorId' => 'string',
        'sku' => 'string',
        'productName' => 'string',
        'productCategory' => 'string',
        'shortDescription' => 'string',
        'longDescription' => 'string',
        'cost' => 'string',
        'price' => 'string',
        'currency' => 'string',
        'buyBoxShippingPrice' => 'string',
        'publishStatus' => 'string',
        'lifecycleStatus' => 'string',
        'availabilityStatus' => 'string',
        'shipMethods' => 'string',
        'wpid' => 'string',
        'itemId' => 'string',
        'wm' => 'string',
        'gtin' => 'string',
        'upc' => 'string',
        'primaryImageUrl' => 'string',
        'shelfName' => 'string',
        'primaryCatPath' => 'string',
        'offerStartDate' => 'string',
        'offerEndDate' => 'string',
        'itemCreationDate' => 'string',
        'lastUpdationDate' => 'string',
        'itemPageUrl' => 'string',
        'reviewCount' => 'string',
        'averageRating' => 'string',
        'productTaxCode' => 'string',
        'shippingWeight' => 'string',
        'shippingWeightUnit' => 'string',
        'statusChangeReason' => 'string',
        'availableInventoryUnits' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'vendorId' => null,
        'sku' => null,
        'productName' => null,
        'productCategory' => null,
        'shortDescription' => null,
        'longDescription' => null,
        'cost' => null,
        'price' => null,
        'currency' => null,
        'buyBoxShippingPrice' => null,
        'publishStatus' => null,
        'lifecycleStatus' => null,
        'availabilityStatus' => null,
        'shipMethods' => null,
        'wpid' => null,
        'itemId' => null,
        'wm' => null,
        'gtin' => null,
        'upc' => null,
        'primaryImageUrl' => null,
        'shelfName' => null,
        'primaryCatPath' => null,
        'offerStartDate' => null,
        'offerEndDate' => null,
        'itemCreationDate' => null,
        'lastUpdationDate' => null,
        'itemPageUrl' => null,
        'reviewCount' => null,
        'averageRating' => null,
        'productTaxCode' => null,
        'shippingWeight' => null,
        'shippingWeightUnit' => null,
        'statusChangeReason' => null,
        'availableInventoryUnits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vendorId' => false,
        'sku' => false,
        'productName' => false,
        'productCategory' => false,
        'shortDescription' => false,
        'longDescription' => false,
        'cost' => false,
        'price' => false,
        'currency' => false,
        'buyBoxShippingPrice' => false,
        'publishStatus' => false,
        'lifecycleStatus' => false,
        'availabilityStatus' => false,
        'shipMethods' => false,
        'wpid' => false,
        'itemId' => false,
        'wm' => false,
        'gtin' => false,
        'upc' => false,
        'primaryImageUrl' => false,
        'shelfName' => false,
        'primaryCatPath' => false,
        'offerStartDate' => false,
        'offerEndDate' => false,
        'itemCreationDate' => false,
        'lastUpdationDate' => false,
        'itemPageUrl' => false,
        'reviewCount' => false,
        'averageRating' => false,
        'productTaxCode' => false,
        'shippingWeight' => false,
        'shippingWeightUnit' => false,
        'statusChangeReason' => false,
        'availableInventoryUnits' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'vendorId' => 'vendorId',
        'sku' => 'sku',
        'productName' => 'productName',
        'productCategory' => 'productCategory',
        'shortDescription' => 'shortDescription',
        'longDescription' => 'longDescription',
        'cost' => 'cost',
        'price' => 'price',
        'currency' => 'currency',
        'buyBoxShippingPrice' => 'buyBoxShippingPrice',
        'publishStatus' => 'publishStatus',
        'lifecycleStatus' => 'lifecycleStatus',
        'availabilityStatus' => 'availabilityStatus',
        'shipMethods' => 'shipMethods',
        'wpid' => 'wpid',
        'itemId' => 'itemId',
        'wm' => 'wm',
        'gtin' => 'gtin',
        'upc' => 'upc',
        'primaryImageUrl' => 'primaryImageUrl',
        'shelfName' => 'shelfName',
        'primaryCatPath' => 'primaryCatPath',
        'offerStartDate' => 'offerStartDate',
        'offerEndDate' => 'offerEndDate',
        'itemCreationDate' => 'itemCreationDate',
        'lastUpdationDate' => 'lastUpdationDate',
        'itemPageUrl' => 'itemPageUrl',
        'reviewCount' => 'reviewCount',
        'averageRating' => 'averageRating',
        'productTaxCode' => 'productTaxCode',
        'shippingWeight' => 'shippingWeight',
        'shippingWeightUnit' => 'shippingWeightUnit',
        'statusChangeReason' => 'statusChangeReason',
        'availableInventoryUnits' => 'availableInventoryUnits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'vendorId' => 'setVendorId',
        'sku' => 'setSku',
        'productName' => 'setProductName',
        'productCategory' => 'setProductCategory',
        'shortDescription' => 'setShortDescription',
        'longDescription' => 'setLongDescription',
        'cost' => 'setCost',
        'price' => 'setPrice',
        'currency' => 'setCurrency',
        'buyBoxShippingPrice' => 'setBuyBoxShippingPrice',
        'publishStatus' => 'setPublishStatus',
        'lifecycleStatus' => 'setLifecycleStatus',
        'availabilityStatus' => 'setAvailabilityStatus',
        'shipMethods' => 'setShipMethods',
        'wpid' => 'setWpid',
        'itemId' => 'setItemId',
        'wm' => 'setWm',
        'gtin' => 'setGtin',
        'upc' => 'setUpc',
        'primaryImageUrl' => 'setPrimaryImageUrl',
        'shelfName' => 'setShelfName',
        'primaryCatPath' => 'setPrimaryCatPath',
        'offerStartDate' => 'setOfferStartDate',
        'offerEndDate' => 'setOfferEndDate',
        'itemCreationDate' => 'setItemCreationDate',
        'lastUpdationDate' => 'setLastUpdationDate',
        'itemPageUrl' => 'setItemPageUrl',
        'reviewCount' => 'setReviewCount',
        'averageRating' => 'setAverageRating',
        'productTaxCode' => 'setProductTaxCode',
        'shippingWeight' => 'setShippingWeight',
        'shippingWeightUnit' => 'setShippingWeightUnit',
        'statusChangeReason' => 'setStatusChangeReason',
        'availableInventoryUnits' => 'setAvailableInventoryUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'vendorId' => 'getVendorId',
        'sku' => 'getSku',
        'productName' => 'getProductName',
        'productCategory' => 'getProductCategory',
        'shortDescription' => 'getShortDescription',
        'longDescription' => 'getLongDescription',
        'cost' => 'getCost',
        'price' => 'getPrice',
        'currency' => 'getCurrency',
        'buyBoxShippingPrice' => 'getBuyBoxShippingPrice',
        'publishStatus' => 'getPublishStatus',
        'lifecycleStatus' => 'getLifecycleStatus',
        'availabilityStatus' => 'getAvailabilityStatus',
        'shipMethods' => 'getShipMethods',
        'wpid' => 'getWpid',
        'itemId' => 'getItemId',
        'wm' => 'getWm',
        'gtin' => 'getGtin',
        'upc' => 'getUpc',
        'primaryImageUrl' => 'getPrimaryImageUrl',
        'shelfName' => 'getShelfName',
        'primaryCatPath' => 'getPrimaryCatPath',
        'offerStartDate' => 'getOfferStartDate',
        'offerEndDate' => 'getOfferEndDate',
        'itemCreationDate' => 'getItemCreationDate',
        'lastUpdationDate' => 'getLastUpdationDate',
        'itemPageUrl' => 'getItemPageUrl',
        'reviewCount' => 'getReviewCount',
        'averageRating' => 'getAverageRating',
        'productTaxCode' => 'getProductTaxCode',
        'shippingWeight' => 'getShippingWeight',
        'shippingWeightUnit' => 'getShippingWeightUnit',
        'statusChangeReason' => 'getStatusChangeReason',
        'availableInventoryUnits' => 'getAvailableInventoryUnits'
    ];
    /**
     * Array of response headers returned by the API
     *
     * @var string[][]
     */
    protected array $headers = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('vendorId', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('productCategory', $data ?? [], null);
        $this->setIfExists('shortDescription', $data ?? [], null);
        $this->setIfExists('longDescription', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('buyBoxShippingPrice', $data ?? [], null);
        $this->setIfExists('publishStatus', $data ?? [], null);
        $this->setIfExists('lifecycleStatus', $data ?? [], null);
        $this->setIfExists('availabilityStatus', $data ?? [], null);
        $this->setIfExists('shipMethods', $data ?? [], null);
        $this->setIfExists('wpid', $data ?? [], null);
        $this->setIfExists('itemId', $data ?? [], null);
        $this->setIfExists('wm', $data ?? [], null);
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('upc', $data ?? [], null);
        $this->setIfExists('primaryImageUrl', $data ?? [], null);
        $this->setIfExists('shelfName', $data ?? [], null);
        $this->setIfExists('primaryCatPath', $data ?? [], null);
        $this->setIfExists('offerStartDate', $data ?? [], null);
        $this->setIfExists('offerEndDate', $data ?? [], null);
        $this->setIfExists('itemCreationDate', $data ?? [], null);
        $this->setIfExists('lastUpdationDate', $data ?? [], null);
        $this->setIfExists('itemPageUrl', $data ?? [], null);
        $this->setIfExists('reviewCount', $data ?? [], null);
        $this->setIfExists('averageRating', $data ?? [], null);
        $this->setIfExists('productTaxCode', $data ?? [], null);
        $this->setIfExists('shippingWeight', $data ?? [], null);
        $this->setIfExists('shippingWeightUnit', $data ?? [], null);
        $this->setIfExists('statusChangeReason', $data ?? [], null);
        $this->setIfExists('availableInventoryUnits', $data ?? [], null);
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
     * Gets API response headers (only relevant to response models)
     *
     * @return string[][]
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string[]] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }


    /**
     * Gets vendorId
     *
     * @return string|null
    
     */
    public function getVendorId()
    {
        return $this->container['vendorId'];
    }

    /**
     * Sets vendorId
     *
     * @param string|null $vendorId The Vendor Id on Walmart.com
     *
     * @return self
    
     */
    public function setVendorId($vendorId)
    {
        if (is_null($vendorId)) {
            throw new \InvalidArgumentException('non-nullable vendorId cannot be null');
        }

        $this->container['vendorId'] = $vendorId;
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
     * @param string|null $sku Unique identifier for the item
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
     * @param string|null $productName The name of this item
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
     * Gets productCategory
     *
     * @return string|null
    
     */
    public function getProductCategory()
    {
        return $this->container['productCategory'];
    }

    /**
     * Sets productCategory
     *
     * @param string|null $productCategory The category of this item. This may differ from what was suggested when the item was ingested.
     *
     * @return self
    
     */
    public function setProductCategory($productCategory)
    {
        if (is_null($productCategory)) {
            throw new \InvalidArgumentException('non-nullable productCategory cannot be null');
        }

        $this->container['productCategory'] = $productCategory;
        return $this;
    }

    /**
     * Gets shortDescription
     *
     * @return string|null
    
     */
    public function getShortDescription()
    {
        return $this->container['shortDescription'];
    }

    /**
     * Sets shortDescription
     *
     * @param string|null $shortDescription Short description of this item
     *
     * @return self
    
     */
    public function setShortDescription($shortDescription)
    {
        if (is_null($shortDescription)) {
            throw new \InvalidArgumentException('non-nullable shortDescription cannot be null');
        }

        $this->container['shortDescription'] = $shortDescription;
        return $this;
    }

    /**
     * Gets longDescription
     *
     * @return string|null
    
     */
    public function getLongDescription()
    {
        return $this->container['longDescription'];
    }

    /**
     * Sets longDescription
     *
     * @param string|null $longDescription Long description of this item
     *
     * @return self
    
     */
    public function setLongDescription($longDescription)
    {
        if (is_null($longDescription)) {
            throw new \InvalidArgumentException('non-nullable longDescription cannot be null');
        }

        $this->container['longDescription'] = $longDescription;
        return $this;
    }

    /**
     * Gets cost
     *
     * @return string|null
    
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param string|null $cost Cost of the item
     *
     * @return self
    
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }

        $this->container['cost'] = $cost;
        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
    
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price Current price of the item
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
     * Gets currency
     *
     * @return string|null
    
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency of the price
     *
     * @return self
    
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }

        $this->container['currency'] = $currency;
        return $this;
    }

    /**
     * Gets buyBoxShippingPrice
     *
     * @return string|null
    
     */
    public function getBuyBoxShippingPrice()
    {
        return $this->container['buyBoxShippingPrice'];
    }

    /**
     * Sets buyBoxShippingPrice
     *
     * @param string|null $buyBoxShippingPrice Buy box winner's item price
     *
     * @return self
    
     */
    public function setBuyBoxShippingPrice($buyBoxShippingPrice)
    {
        if (is_null($buyBoxShippingPrice)) {
            throw new \InvalidArgumentException('non-nullable buyBoxShippingPrice cannot be null');
        }

        $this->container['buyBoxShippingPrice'] = $buyBoxShippingPrice;
        return $this;
    }

    /**
     * Gets publishStatus
     *
     * @return string|null
    
     */
    public function getPublishStatus()
    {
        return $this->container['publishStatus'];
    }

    /**
     * Sets publishStatus
     *
     * @param string|null $publishStatus Whether the item is published on Walmart.com
     *
     * @return self
    
     */
    public function setPublishStatus($publishStatus)
    {
        if (is_null($publishStatus)) {
            throw new \InvalidArgumentException('non-nullable publishStatus cannot be null');
        }

        $this->container['publishStatus'] = $publishStatus;
        return $this;
    }

    /**
     * Gets lifecycleStatus
     *
     * @return string|null
    
     */
    public function getLifecycleStatus()
    {
        return $this->container['lifecycleStatus'];
    }

    /**
     * Sets lifecycleStatus
     *
     * @param string|null $lifecycleStatus The offer lifecycle status
     *
     * @return self
    
     */
    public function setLifecycleStatus($lifecycleStatus)
    {
        if (is_null($lifecycleStatus)) {
            throw new \InvalidArgumentException('non-nullable lifecycleStatus cannot be null');
        }

        $this->container['lifecycleStatus'] = $lifecycleStatus;
        return $this;
    }

    /**
     * Gets availabilityStatus
     *
     * @return string|null
    
     */
    public function getAvailabilityStatus()
    {
        return $this->container['availabilityStatus'];
    }

    /**
     * Sets availabilityStatus
     *
     * @param string|null $availabilityStatus The inventory availability status
     *
     * @return self
    
     */
    public function setAvailabilityStatus($availabilityStatus)
    {
        if (is_null($availabilityStatus)) {
            throw new \InvalidArgumentException('non-nullable availabilityStatus cannot be null');
        }

        $this->container['availabilityStatus'] = $availabilityStatus;
        return $this;
    }

    /**
     * Gets shipMethods
     *
     * @return string|null
    
     */
    public function getShipMethods()
    {
        return $this->container['shipMethods'];
    }

    /**
     * Sets shipMethods
     *
     * @param string|null $shipMethods Shipping methods available for each item.
     *
     * @return self
    
     */
    public function setShipMethods($shipMethods)
    {
        if (is_null($shipMethods)) {
            throw new \InvalidArgumentException('non-nullable shipMethods cannot be null');
        }

        $this->container['shipMethods'] = $shipMethods;
        return $this;
    }

    /**
     * Gets wpid
     *
     * @return string|null
    
     */
    public function getWpid()
    {
        return $this->container['wpid'];
    }

    /**
     * Sets wpid
     *
     * @param string|null $wpid The Walmart Product ID assigned by Walmart to the item when listed on Walmart.com
     *
     * @return self
    
     */
    public function setWpid($wpid)
    {
        if (is_null($wpid)) {
            throw new \InvalidArgumentException('non-nullable wpid cannot be null');
        }

        $this->container['wpid'] = $wpid;
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
     * @param string|null $itemId Unique item ID.
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
     * Gets wm
     *
     * @return string|null
    
     */
    public function getWm()
    {
        return $this->container['wm'];
    }

    /**
     * Sets wm
     *
     * @param string|null $wm Item Number.
     *
     * @return self
    
     */
    public function setWm($wm)
    {
        if (is_null($wm)) {
            throw new \InvalidArgumentException('non-nullable wm cannot be null');
        }

        $this->container['wm'] = $wm;
        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string|null
    
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin The item's Global Trade Item Number. This may differ from what was suggested when the item was ingested.
     *
     * @return self
    
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            throw new \InvalidArgumentException('non-nullable gtin cannot be null');
        }

        $this->container['gtin'] = $gtin;
        return $this;
    }

    /**
     * Gets upc
     *
     * @return string|null
    
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string|null $upc The item's Universal Product Code. This may differ from what was suggested when the item was ingested.
     *
     * @return self
    
     */
    public function setUpc($upc)
    {
        if (is_null($upc)) {
            throw new \InvalidArgumentException('non-nullable upc cannot be null');
        }

        $this->container['upc'] = $upc;
        return $this;
    }

    /**
     * Gets primaryImageUrl
     *
     * @return string|null
    
     */
    public function getPrimaryImageUrl()
    {
        return $this->container['primaryImageUrl'];
    }

    /**
     * Sets primaryImageUrl
     *
     * @param string|null $primaryImageUrl URL for primary image
     *
     * @return self
    
     */
    public function setPrimaryImageUrl($primaryImageUrl)
    {
        if (is_null($primaryImageUrl)) {
            throw new \InvalidArgumentException('non-nullable primaryImageUrl cannot be null');
        }

        $this->container['primaryImageUrl'] = $primaryImageUrl;
        return $this;
    }

    /**
     * Gets shelfName
     *
     * @return string|null
    
     */
    public function getShelfName()
    {
        return $this->container['shelfName'];
    }

    /**
     * Sets shelfName
     *
     * @param string|null $shelfName Walmart assigned item shelf name
     *
     * @return self
    
     */
    public function setShelfName($shelfName)
    {
        if (is_null($shelfName)) {
            throw new \InvalidArgumentException('non-nullable shelfName cannot be null');
        }

        $this->container['shelfName'] = $shelfName;
        return $this;
    }

    /**
     * Gets primaryCatPath
     *
     * @return string|null
    
     */
    public function getPrimaryCatPath()
    {
        return $this->container['primaryCatPath'];
    }

    /**
     * Sets primaryCatPath
     *
     * @param string|null $primaryCatPath The primary item category path on Walmart.com.
     *
     * @return self
    
     */
    public function setPrimaryCatPath($primaryCatPath)
    {
        if (is_null($primaryCatPath)) {
            throw new \InvalidArgumentException('non-nullable primaryCatPath cannot be null');
        }

        $this->container['primaryCatPath'] = $primaryCatPath;
        return $this;
    }

    /**
     * Gets offerStartDate
     *
     * @return string|null
    
     */
    public function getOfferStartDate()
    {
        return $this->container['offerStartDate'];
    }

    /**
     * Sets offerStartDate
     *
     * @param string|null $offerStartDate Date at which the item becomes visible on Walmart.com
     *
     * @return self
    
     */
    public function setOfferStartDate($offerStartDate)
    {
        if (is_null($offerStartDate)) {
            throw new \InvalidArgumentException('non-nullable offerStartDate cannot be null');
        }

        $this->container['offerStartDate'] = $offerStartDate;
        return $this;
    }

    /**
     * Gets offerEndDate
     *
     * @return string|null
    
     */
    public function getOfferEndDate()
    {
        return $this->container['offerEndDate'];
    }

    /**
     * Sets offerEndDate
     *
     * @param string|null $offerEndDate Date after which the item will not be visible on Walmart.com
     *
     * @return self
    
     */
    public function setOfferEndDate($offerEndDate)
    {
        if (is_null($offerEndDate)) {
            throw new \InvalidArgumentException('non-nullable offerEndDate cannot be null');
        }

        $this->container['offerEndDate'] = $offerEndDate;
        return $this;
    }

    /**
     * Gets itemCreationDate
     *
     * @return string|null
    
     */
    public function getItemCreationDate()
    {
        return $this->container['itemCreationDate'];
    }

    /**
     * Sets itemCreationDate
     *
     * @param string|null $itemCreationDate The system timestamp date when an item was created.
     *
     * @return self
    
     */
    public function setItemCreationDate($itemCreationDate)
    {
        if (is_null($itemCreationDate)) {
            throw new \InvalidArgumentException('non-nullable itemCreationDate cannot be null');
        }

        $this->container['itemCreationDate'] = $itemCreationDate;
        return $this;
    }

    /**
     * Gets lastUpdationDate
     *
     * @return string|null
    
     */
    public function getLastUpdationDate()
    {
        return $this->container['lastUpdationDate'];
    }

    /**
     * Sets lastUpdationDate
     *
     * @param string|null $lastUpdationDate The system timestamp date when an item was updated.
     *
     * @return self
    
     */
    public function setLastUpdationDate($lastUpdationDate)
    {
        if (is_null($lastUpdationDate)) {
            throw new \InvalidArgumentException('non-nullable lastUpdationDate cannot be null');
        }

        $this->container['lastUpdationDate'] = $lastUpdationDate;
        return $this;
    }

    /**
     * Gets itemPageUrl
     *
     * @return string|null
    
     */
    public function getItemPageUrl()
    {
        return $this->container['itemPageUrl'];
    }

    /**
     * Sets itemPageUrl
     *
     * @param string|null $itemPageUrl URL for item page on walmart.com
     *
     * @return self
    
     */
    public function setItemPageUrl($itemPageUrl)
    {
        if (is_null($itemPageUrl)) {
            throw new \InvalidArgumentException('non-nullable itemPageUrl cannot be null');
        }

        $this->container['itemPageUrl'] = $itemPageUrl;
        return $this;
    }

    /**
     * Gets reviewCount
     *
     * @return string|null
    
     */
    public function getReviewCount()
    {
        return $this->container['reviewCount'];
    }

    /**
     * Sets reviewCount
     *
     * @param string|null $reviewCount The total number of customer reviews for the item.
     *
     * @return self
    
     */
    public function setReviewCount($reviewCount)
    {
        if (is_null($reviewCount)) {
            throw new \InvalidArgumentException('non-nullable reviewCount cannot be null');
        }

        $this->container['reviewCount'] = $reviewCount;
        return $this;
    }

    /**
     * Gets averageRating
     *
     * @return string|null
    
     */
    public function getAverageRating()
    {
        return $this->container['averageRating'];
    }

    /**
     * Sets averageRating
     *
     * @param string|null $averageRating An average rating number for the item from customers.
     *
     * @return self
    
     */
    public function setAverageRating($averageRating)
    {
        if (is_null($averageRating)) {
            throw new \InvalidArgumentException('non-nullable averageRating cannot be null');
        }

        $this->container['averageRating'] = $averageRating;
        return $this;
    }

    /**
     * Gets productTaxCode
     *
     * @return string|null
    
     */
    public function getProductTaxCode()
    {
        return $this->container['productTaxCode'];
    }

    /**
     * Sets productTaxCode
     *
     * @param string|null $productTaxCode A seven-digit product tax code that identifies the amount of sales tax that should be collected for individual items.
     *
     * @return self
    
     */
    public function setProductTaxCode($productTaxCode)
    {
        if (is_null($productTaxCode)) {
            throw new \InvalidArgumentException('non-nullable productTaxCode cannot be null');
        }

        $this->container['productTaxCode'] = $productTaxCode;
        return $this;
    }

    /**
     * Gets shippingWeight
     *
     * @return string|null
    
     */
    public function getShippingWeight()
    {
        return $this->container['shippingWeight'];
    }

    /**
     * Sets shippingWeight
     *
     * @param string|null $shippingWeight The weight of the item when packaged to ship.
     *
     * @return self
    
     */
    public function setShippingWeight($shippingWeight)
    {
        if (is_null($shippingWeight)) {
            throw new \InvalidArgumentException('non-nullable shippingWeight cannot be null');
        }

        $this->container['shippingWeight'] = $shippingWeight;
        return $this;
    }

    /**
     * Gets shippingWeightUnit
     *
     * @return string|null
    
     */
    public function getShippingWeightUnit()
    {
        return $this->container['shippingWeightUnit'];
    }

    /**
     * Sets shippingWeightUnit
     *
     * @param string|null $shippingWeightUnit The unit of measurement used to describe the weight of the product when packaged to ship.
     *
     * @return self
    
     */
    public function setShippingWeightUnit($shippingWeightUnit)
    {
        if (is_null($shippingWeightUnit)) {
            throw new \InvalidArgumentException('non-nullable shippingWeightUnit cannot be null');
        }

        $this->container['shippingWeightUnit'] = $shippingWeightUnit;
        return $this;
    }

    /**
     * Gets statusChangeReason
     *
     * @return string|null
    
     */
    public function getStatusChangeReason()
    {
        return $this->container['statusChangeReason'];
    }

    /**
     * Sets statusChangeReason
     *
     * @param string|null $statusChangeReason The reason for status change
     *
     * @return self
    
     */
    public function setStatusChangeReason($statusChangeReason)
    {
        if (is_null($statusChangeReason)) {
            throw new \InvalidArgumentException('non-nullable statusChangeReason cannot be null');
        }

        $this->container['statusChangeReason'] = $statusChangeReason;
        return $this;
    }

    /**
     * Gets availableInventoryUnits
     *
     * @return string|null
    
     */
    public function getAvailableInventoryUnits()
    {
        return $this->container['availableInventoryUnits'];
    }

    /**
     * Sets availableInventoryUnits
     *
     * @param string|null $availableInventoryUnits The number of items in stock
     *
     * @return self
    
     */
    public function setAvailableInventoryUnits($availableInventoryUnits)
    {
        if (is_null($availableInventoryUnits)) {
            throw new \InvalidArgumentException('non-nullable availableInventoryUnits cannot be null');
        }

        $this->container['availableInventoryUnits'] = $availableInventoryUnits;
        return $this;
    }
}


