<?php

/**
 * ItemCatalogResponse
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Items;
use Walmart\Models\BaseModel;

/**
 * ItemCatalogResponse Class Doc Comment
 *
 * @category Class

 * @description Items included in the response list

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemCatalogResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemCatalogResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'mart' => 'string',
        'sku' => 'string',
        'wpid' => 'string',
        'upc' => 'string',
        'isbn' => 'string',
        'ean' => 'string',
        'gtin' => 'string',
        'itemId' => 'string',
        'productName' => 'string',
        'shelf' => 'string',
        'productType' => 'string',
        'price' => '\Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInnerPrice',
        'brand' => 'string',
        'numReviews' => 'string',
        'customerRating' => 'string',
        'manufacturer' => 'string',
        'fulfillmentType' => 'string',
        'publishedStatus' => '\Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInnerPublishedStatus',
        'inventoryStatus' => 'string',
        'lifecycleStatus' => 'string',
        'shopRef' => 'string',
        'shopProductId' => 'string',
        'shopVariantId' => 'string',
        'variantGroupId' => 'string',
        'variantGroupInfo' => '\Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInnerVariantGroupInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'mart' => null,
        'sku' => null,
        'wpid' => null,
        'upc' => null,
        'isbn' => null,
        'ean' => null,
        'gtin' => null,
        'itemId' => null,
        'productName' => null,
        'shelf' => null,
        'productType' => null,
        'price' => null,
        'brand' => null,
        'numReviews' => null,
        'customerRating' => null,
        'manufacturer' => null,
        'fulfillmentType' => null,
        'publishedStatus' => null,
        'inventoryStatus' => null,
        'lifecycleStatus' => null,
        'shopRef' => null,
        'shopProductId' => null,
        'shopVariantId' => null,
        'variantGroupId' => null,
        'variantGroupInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mart' => false,
        'sku' => false,
        'wpid' => false,
        'upc' => false,
        'isbn' => false,
        'ean' => false,
        'gtin' => false,
        'itemId' => false,
        'productName' => false,
        'shelf' => false,
        'productType' => false,
        'price' => false,
        'brand' => false,
        'numReviews' => false,
        'customerRating' => false,
        'manufacturer' => false,
        'fulfillmentType' => false,
        'publishedStatus' => false,
        'inventoryStatus' => false,
        'lifecycleStatus' => false,
        'shopRef' => false,
        'shopProductId' => false,
        'shopVariantId' => false,
        'variantGroupId' => false,
        'variantGroupInfo' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'mart' => 'mart',
        'sku' => 'sku',
        'wpid' => 'wpid',
        'upc' => 'upc',
        'isbn' => 'isbn',
        'ean' => 'ean',
        'gtin' => 'gtin',
        'itemId' => 'itemId',
        'productName' => 'productName',
        'shelf' => 'shelf',
        'productType' => 'productType',
        'price' => 'price',
        'brand' => 'brand',
        'numReviews' => 'num_reviews',
        'customerRating' => 'customerRating',
        'manufacturer' => 'manufacturer',
        'fulfillmentType' => 'fulfillmentType',
        'publishedStatus' => 'publishedStatus',
        'inventoryStatus' => 'inventoryStatus',
        'lifecycleStatus' => 'lifecycleStatus',
        'shopRef' => 'shop_ref',
        'shopProductId' => 'shop_product_id',
        'shopVariantId' => 'shop_variant_id',
        'variantGroupId' => 'variantGroupId',
        'variantGroupInfo' => 'variantGroupInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'mart' => 'setMart',
        'sku' => 'setSku',
        'wpid' => 'setWpid',
        'upc' => 'setUpc',
        'isbn' => 'setIsbn',
        'ean' => 'setEan',
        'gtin' => 'setGtin',
        'itemId' => 'setItemId',
        'productName' => 'setProductName',
        'shelf' => 'setShelf',
        'productType' => 'setProductType',
        'price' => 'setPrice',
        'brand' => 'setBrand',
        'numReviews' => 'setNumReviews',
        'customerRating' => 'setCustomerRating',
        'manufacturer' => 'setManufacturer',
        'fulfillmentType' => 'setFulfillmentType',
        'publishedStatus' => 'setPublishedStatus',
        'inventoryStatus' => 'setInventoryStatus',
        'lifecycleStatus' => 'setLifecycleStatus',
        'shopRef' => 'setShopRef',
        'shopProductId' => 'setShopProductId',
        'shopVariantId' => 'setShopVariantId',
        'variantGroupId' => 'setVariantGroupId',
        'variantGroupInfo' => 'setVariantGroupInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'mart' => 'getMart',
        'sku' => 'getSku',
        'wpid' => 'getWpid',
        'upc' => 'getUpc',
        'isbn' => 'getIsbn',
        'ean' => 'getEan',
        'gtin' => 'getGtin',
        'itemId' => 'getItemId',
        'productName' => 'getProductName',
        'shelf' => 'getShelf',
        'productType' => 'getProductType',
        'price' => 'getPrice',
        'brand' => 'getBrand',
        'numReviews' => 'getNumReviews',
        'customerRating' => 'getCustomerRating',
        'manufacturer' => 'getManufacturer',
        'fulfillmentType' => 'getFulfillmentType',
        'publishedStatus' => 'getPublishedStatus',
        'inventoryStatus' => 'getInventoryStatus',
        'lifecycleStatus' => 'getLifecycleStatus',
        'shopRef' => 'getShopRef',
        'shopProductId' => 'getShopProductId',
        'shopVariantId' => 'getShopVariantId',
        'variantGroupId' => 'getVariantGroupId',
        'variantGroupInfo' => 'getVariantGroupInfo'
    ];
    public const MART_WALMART_US = 'WALMART_US';

    public const MART_WALMART_CA = 'WALMART_CA';

    public const MART_ASDA_GM = 'ASDA_GM';

    public const MART_WALMART_MEXICO = 'WALMART_MEXICO';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMartAllowableValues()
    {
        return [
            self::MART_WALMART_US,
            self::MART_WALMART_CA,
            self::MART_ASDA_GM,
            self::MART_WALMART_MEXICO,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('mart', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('wpid', $data ?? [], null);
        $this->setIfExists('upc', $data ?? [], null);
        $this->setIfExists('isbn', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('itemId', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('shelf', $data ?? [], null);
        $this->setIfExists('productType', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('numReviews', $data ?? [], null);
        $this->setIfExists('customerRating', $data ?? [], null);
        $this->setIfExists('manufacturer', $data ?? [], null);
        $this->setIfExists('fulfillmentType', $data ?? [], null);
        $this->setIfExists('publishedStatus', $data ?? [], null);
        $this->setIfExists('inventoryStatus', $data ?? [], null);
        $this->setIfExists('lifecycleStatus', $data ?? [], null);
        $this->setIfExists('shopRef', $data ?? [], null);
        $this->setIfExists('shopProductId', $data ?? [], null);
        $this->setIfExists('shopVariantId', $data ?? [], null);
        $this->setIfExists('variantGroupId', $data ?? [], null);
        $this->setIfExists('variantGroupInfo', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMartAllowableValues();
        if (!is_null($this->container['mart']) && !in_array($this->container['mart'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mart', must be one of '%s'",
                $this->container['mart'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }
    /**
     * Gets mart
     *
     * @return string|null
    
     */
    public function getMart()
    {
        return $this->container['mart'];
    }

    /**
     * Sets mart
     *
     * @param string|null $mart The marketplace name. Example: Walmart_US
     *
     * @return self
    
     */
    public function setMart($mart)
    {
        if (is_null($mart)) {
            throw new \InvalidArgumentException('non-nullable mart cannot be null');
        }
        $allowedValues = $this->getMartAllowableValues();
        if (!in_array($mart, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mart', must be one of '%s'",
                    $mart,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['mart'] = $mart;
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
     * @param string|null $sku An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item.
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
     * @param string|null $upc The 12-digit bar code used extensively for retail packaging in the United States
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
     * Gets isbn
     *
     * @return string|null
    
     */
    public function getIsbn()
    {
        return $this->container['isbn'];
    }

    /**
     * Sets isbn
     *
     * @param string|null $isbn International Standard Book Number
     *
     * @return self
    
     */
    public function setIsbn($isbn)
    {
        if (is_null($isbn)) {
            throw new \InvalidArgumentException('non-nullable isbn cannot be null');
        }

        $this->container['isbn'] = $isbn;
        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
    
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean Product ID, EANs must be 13 digits in length.
     *
     * @return self
    
     */
    public function setEan($ean)
    {
        if (is_null($ean)) {
            throw new \InvalidArgumentException('non-nullable ean cannot be null');
        }

        $this->container['ean'] = $ean;
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
     * @param string|null $gtin The GTIN-compatible Product ID (i.e. UPC or EAN). UPCs must be 12 or 14 digitis in length. EANs must be 13 digits in length.
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
     * @param string|null $itemId A unique Id which identifies the item.
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
     * @param string|null $productName A seller-specified, alphanumeric string uniquely identifying the product name. Example: 'Sterling Silver Blue Diamond Heart Pendant with 18in Chain'
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
     * Gets shelf
     *
     * @return string|null
    
     */
    public function getShelf()
    {
        return $this->container['shelf'];
    }

    /**
     * Sets shelf
     *
     * @param string|null $shelf Walmart assigned an item shelf name
     *
     * @return self
    
     */
    public function setShelf($shelf)
    {
        if (is_null($shelf)) {
            throw new \InvalidArgumentException('non-nullable shelf cannot be null');
        }

        $this->container['shelf'] = $shelf;
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
     * @param string|null $productType A seller-specified, alphanumeric string uniquely identifying the Product Type. Example: 'Diamond'
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

    /**
     * Gets price
     *
     * @return \Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInnerPrice|null
    
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInnerPrice|null $price price
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
     * Gets brand
     *
     * @return string|null
    
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Brand of Item.
     *
     * @return self
    
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }

        $this->container['brand'] = $brand;
        return $this;
    }

    /**
     * Gets numReviews
     *
     * @return string|null
    
     */
    public function getNumReviews()
    {
        return $this->container['numReviews'];
    }

    /**
     * Sets numReviews
     *
     * @param string|null $numReviews The reviewed times for Items.
     *
     * @return self
    
     */
    public function setNumReviews($numReviews)
    {
        if (is_null($numReviews)) {
            throw new \InvalidArgumentException('non-nullable numReviews cannot be null');
        }

        $this->container['numReviews'] = $numReviews;
        return $this;
    }

    /**
     * Gets customerRating
     *
     * @return string|null
    
     */
    public function getCustomerRating()
    {
        return $this->container['customerRating'];
    }

    /**
     * Sets customerRating
     *
     * @param string|null $customerRating Customer rating.
     *
     * @return self
    
     */
    public function setCustomerRating($customerRating)
    {
        if (is_null($customerRating)) {
            throw new \InvalidArgumentException('non-nullable customerRating cannot be null');
        }

        $this->container['customerRating'] = $customerRating;
        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
    
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer manufacturer of Item.
     *
     * @return self
    
     */
    public function setManufacturer($manufacturer)
    {
        if (is_null($manufacturer)) {
            throw new \InvalidArgumentException('non-nullable manufacturer cannot be null');
        }

        $this->container['manufacturer'] = $manufacturer;
        return $this;
    }

    /**
     * Gets fulfillmentType
     *
     * @return string|null
    
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    /**
     * Sets fulfillmentType
     *
     * @param string|null $fulfillmentType Fulfillment information.
     *
     * @return self
    
     */
    public function setFulfillmentType($fulfillmentType)
    {
        if (is_null($fulfillmentType)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentType cannot be null');
        }

        $this->container['fulfillmentType'] = $fulfillmentType;
        return $this;
    }

    /**
     * Gets publishedStatus
     *
     * @return \Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInnerPublishedStatus|null
    
     */
    public function getPublishedStatus()
    {
        return $this->container['publishedStatus'];
    }

    /**
     * Sets publishedStatus
     *
     * @param \Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInnerPublishedStatus|null $publishedStatus publishedStatus
     *
     * @return self
    
     */
    public function setPublishedStatus($publishedStatus)
    {
        if (is_null($publishedStatus)) {
            throw new \InvalidArgumentException('non-nullable publishedStatus cannot be null');
        }

        $this->container['publishedStatus'] = $publishedStatus;
        return $this;
    }

    /**
     * Gets inventoryStatus
     *
     * @return string|null
    
     */
    public function getInventoryStatus()
    {
        return $this->container['inventoryStatus'];
    }

    /**
     * Sets inventoryStatus
     *
     * @param string|null $inventoryStatus It indicates whether the product is in stock or not.
     *
     * @return self
    
     */
    public function setInventoryStatus($inventoryStatus)
    {
        if (is_null($inventoryStatus)) {
            throw new \InvalidArgumentException('non-nullable inventoryStatus cannot be null');
        }

        $this->container['inventoryStatus'] = $inventoryStatus;
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
     * @param string|null $lifecycleStatus The lifecycle status of an item describes where the item listing is in the overall lifecycle. Examples of allowed values are ACTIVE , ARCHIVED, RETIRED.
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
     * Gets shopRef
     *
     * @return string|null
    
     */
    public function getShopRef()
    {
        return $this->container['shopRef'];
    }

    /**
     * Sets shopRef
     *
     * @param string|null $shopRef shopRef
     *
     * @return self
    
     */
    public function setShopRef($shopRef)
    {
        if (is_null($shopRef)) {
            throw new \InvalidArgumentException('non-nullable shopRef cannot be null');
        }

        $this->container['shopRef'] = $shopRef;
        return $this;
    }

    /**
     * Gets shopProductId
     *
     * @return string|null
    
     */
    public function getShopProductId()
    {
        return $this->container['shopProductId'];
    }

    /**
     * Sets shopProductId
     *
     * @param string|null $shopProductId shopProductId
     *
     * @return self
    
     */
    public function setShopProductId($shopProductId)
    {
        if (is_null($shopProductId)) {
            throw new \InvalidArgumentException('non-nullable shopProductId cannot be null');
        }

        $this->container['shopProductId'] = $shopProductId;
        return $this;
    }

    /**
     * Gets shopVariantId
     *
     * @return string|null
    
     */
    public function getShopVariantId()
    {
        return $this->container['shopVariantId'];
    }

    /**
     * Sets shopVariantId
     *
     * @param string|null $shopVariantId shopVariantId
     *
     * @return self
    
     */
    public function setShopVariantId($shopVariantId)
    {
        if (is_null($shopVariantId)) {
            throw new \InvalidArgumentException('non-nullable shopVariantId cannot be null');
        }

        $this->container['shopVariantId'] = $shopVariantId;
        return $this;
    }

    /**
     * Gets variantGroupId
     *
     * @return string|null
    
     */
    public function getVariantGroupId()
    {
        return $this->container['variantGroupId'];
    }

    /**
     * Sets variantGroupId
     *
     * @param string|null $variantGroupId Variant Id if the item is of type Variant
     *
     * @return self
    
     */
    public function setVariantGroupId($variantGroupId)
    {
        if (is_null($variantGroupId)) {
            throw new \InvalidArgumentException('non-nullable variantGroupId cannot be null');
        }

        $this->container['variantGroupId'] = $variantGroupId;
        return $this;
    }

    /**
     * Gets variantGroupInfo
     *
     * @return \Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInnerVariantGroupInfo|null
    
     */
    public function getVariantGroupInfo()
    {
        return $this->container['variantGroupInfo'];
    }

    /**
     * Sets variantGroupInfo
     *
     * @param \Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInnerVariantGroupInfo|null $variantGroupInfo variantGroupInfo
     *
     * @return self
    
     */
    public function setVariantGroupInfo($variantGroupInfo)
    {
        if (is_null($variantGroupInfo)) {
            throw new \InvalidArgumentException('non-nullable variantGroupInfo cannot be null');
        }

        $this->container['variantGroupInfo'] = $variantGroupInfo;
        return $this;
    }
}


