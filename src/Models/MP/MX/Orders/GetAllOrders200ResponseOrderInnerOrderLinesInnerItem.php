<?php

/**
 * GetAllOrders200ResponseOrderInnerOrderLinesInnerItem
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\Orders;
use Walmart\Models\BaseModel;

/**
 * GetAllOrders200ResponseOrderInnerOrderLinesInnerItem Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAllOrders200ResponseOrderInnerOrderLinesInnerItem extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAllOrders_200_response_order_inner_orderLines_inner_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'upc' => 'string',
        'productName' => 'string',
        'sku' => 'string',
        'condition' => 'string',
        'imageUrl' => 'string',
        'unitPrice' => '\Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItemUnitPrice',
        'commission' => '\Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItemCommission',
        'unitPriceWithoutTax' => '\Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItemUnitPriceWithoutTax'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'upc' => null,
        'productName' => null,
        'sku' => null,
        'condition' => null,
        'imageUrl' => null,
        'unitPrice' => null,
        'commission' => null,
        'unitPriceWithoutTax' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'upc' => false,
        'productName' => false,
        'sku' => false,
        'condition' => false,
        'imageUrl' => false,
        'unitPrice' => false,
        'commission' => false,
        'unitPriceWithoutTax' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'upc' => 'upc',
        'productName' => 'productName',
        'sku' => 'sku',
        'condition' => 'condition',
        'imageUrl' => 'imageUrl',
        'unitPrice' => 'unitPrice',
        'commission' => 'commission',
        'unitPriceWithoutTax' => 'unitPriceWithoutTax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'upc' => 'setUpc',
        'productName' => 'setProductName',
        'sku' => 'setSku',
        'condition' => 'setCondition',
        'imageUrl' => 'setImageUrl',
        'unitPrice' => 'setUnitPrice',
        'commission' => 'setCommission',
        'unitPriceWithoutTax' => 'setUnitPriceWithoutTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'upc' => 'getUpc',
        'productName' => 'getProductName',
        'sku' => 'getSku',
        'condition' => 'getCondition',
        'imageUrl' => 'getImageUrl',
        'unitPrice' => 'getUnitPrice',
        'commission' => 'getCommission',
        'unitPriceWithoutTax' => 'getUnitPriceWithoutTax'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('upc', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('imageUrl', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('commission', $data ?? [], null);
        $this->setIfExists('unitPriceWithoutTax', $data ?? [], null);
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
     * @param string|null $upc Unique product code of the product associated with the line item
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
     * @param string|null $productName The name of the product associated with the line item
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
     * @param string|null $sku The sku id the seller maintains at their end
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
     * Gets condition
     *
     * @return string|null
    
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition condition
     *
     * @return self
    
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }

        $this->container['condition'] = $condition;
        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string|null
    
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string|null $imageUrl imageUrl
     *
     * @return self
    
     */
    public function setImageUrl($imageUrl)
    {
        if (is_null($imageUrl)) {
            throw new \InvalidArgumentException('non-nullable imageUrl cannot be null');
        }

        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItemUnitPrice|null
    
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItemUnitPrice|null $unitPrice unitPrice
     *
     * @return self
    
     */
    public function setUnitPrice($unitPrice)
    {
        if (is_null($unitPrice)) {
            throw new \InvalidArgumentException('non-nullable unitPrice cannot be null');
        }

        $this->container['unitPrice'] = $unitPrice;
        return $this;
    }

    /**
     * Gets commission
     *
     * @return \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItemCommission|null
    
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItemCommission|null $commission commission
     *
     * @return self
    
     */
    public function setCommission($commission)
    {
        if (is_null($commission)) {
            throw new \InvalidArgumentException('non-nullable commission cannot be null');
        }

        $this->container['commission'] = $commission;
        return $this;
    }

    /**
     * Gets unitPriceWithoutTax
     *
     * @return \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItemUnitPriceWithoutTax|null
    
     */
    public function getUnitPriceWithoutTax()
    {
        return $this->container['unitPriceWithoutTax'];
    }

    /**
     * Sets unitPriceWithoutTax
     *
     * @param \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItemUnitPriceWithoutTax|null $unitPriceWithoutTax unitPriceWithoutTax
     *
     * @return self
    
     */
    public function setUnitPriceWithoutTax($unitPriceWithoutTax)
    {
        if (is_null($unitPriceWithoutTax)) {
            throw new \InvalidArgumentException('non-nullable unitPriceWithoutTax cannot be null');
        }

        $this->container['unitPriceWithoutTax'] = $unitPriceWithoutTax;
        return $this;
    }
}


