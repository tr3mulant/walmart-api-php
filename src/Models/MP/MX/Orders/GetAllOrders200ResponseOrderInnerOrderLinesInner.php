<?php

/**
 * GetAllOrders200ResponseOrderInnerOrderLinesInner
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
 * GetAllOrders200ResponseOrderInnerOrderLinesInner Class Doc Comment
 *
 * @category Class

 * @description A list of order lines in the order

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAllOrders200ResponseOrderInnerOrderLinesInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAllOrders_200_response_order_inner_orderLines_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'primeLineNumber' => 'string',
        'coLineNumber' => 'string',
        'item' => '\Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItem',
        'charges' => '\Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerChargesInner[]',
        'orderLineQuantity' => '\Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerOrderLineQuantity',
        'orderLineStatus' => '\Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerOrderLineStatusInner[]',
        'intentToCancel' => 'string',
        'shippingMethod' => 'string',
        'soPrimeLineSubLineNo' => 'string',
        'promiseDeliveryDate' => 'string',
        'isMSIEnabled' => 'string',
        'seller' => '\Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerSeller'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'primeLineNumber' => null,
        'coLineNumber' => null,
        'item' => null,
        'charges' => null,
        'orderLineQuantity' => null,
        'orderLineStatus' => null,
        'intentToCancel' => null,
        'shippingMethod' => null,
        'soPrimeLineSubLineNo' => null,
        'promiseDeliveryDate' => null,
        'isMSIEnabled' => null,
        'seller' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'primeLineNumber' => false,
        'coLineNumber' => false,
        'item' => false,
        'charges' => false,
        'orderLineQuantity' => false,
        'orderLineStatus' => false,
        'intentToCancel' => false,
        'shippingMethod' => false,
        'soPrimeLineSubLineNo' => false,
        'promiseDeliveryDate' => false,
        'isMSIEnabled' => false,
        'seller' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'primeLineNumber' => 'primeLineNumber',
        'coLineNumber' => 'coLineNumber',
        'item' => 'item',
        'charges' => 'charges',
        'orderLineQuantity' => 'orderLineQuantity',
        'orderLineStatus' => 'orderLineStatus',
        'intentToCancel' => 'intentToCancel',
        'shippingMethod' => 'shippingMethod',
        'soPrimeLineSubLineNo' => 'soPrimeLineSubLineNo',
        'promiseDeliveryDate' => 'promiseDeliveryDate',
        'isMSIEnabled' => 'isMSIEnabled',
        'seller' => 'seller'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'primeLineNumber' => 'setPrimeLineNumber',
        'coLineNumber' => 'setCoLineNumber',
        'item' => 'setItem',
        'charges' => 'setCharges',
        'orderLineQuantity' => 'setOrderLineQuantity',
        'orderLineStatus' => 'setOrderLineStatus',
        'intentToCancel' => 'setIntentToCancel',
        'shippingMethod' => 'setShippingMethod',
        'soPrimeLineSubLineNo' => 'setSoPrimeLineSubLineNo',
        'promiseDeliveryDate' => 'setPromiseDeliveryDate',
        'isMSIEnabled' => 'setIsMSIEnabled',
        'seller' => 'setSeller'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'primeLineNumber' => 'getPrimeLineNumber',
        'coLineNumber' => 'getCoLineNumber',
        'item' => 'getItem',
        'charges' => 'getCharges',
        'orderLineQuantity' => 'getOrderLineQuantity',
        'orderLineStatus' => 'getOrderLineStatus',
        'intentToCancel' => 'getIntentToCancel',
        'shippingMethod' => 'getShippingMethod',
        'soPrimeLineSubLineNo' => 'getSoPrimeLineSubLineNo',
        'promiseDeliveryDate' => 'getPromiseDeliveryDate',
        'isMSIEnabled' => 'getIsMSIEnabled',
        'seller' => 'getSeller'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('primeLineNumber', $data ?? [], null);
        $this->setIfExists('coLineNumber', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
        $this->setIfExists('charges', $data ?? [], null);
        $this->setIfExists('orderLineQuantity', $data ?? [], null);
        $this->setIfExists('orderLineStatus', $data ?? [], null);
        $this->setIfExists('intentToCancel', $data ?? [], null);
        $this->setIfExists('shippingMethod', $data ?? [], null);
        $this->setIfExists('soPrimeLineSubLineNo', $data ?? [], null);
        $this->setIfExists('promiseDeliveryDate', $data ?? [], null);
        $this->setIfExists('isMSIEnabled', $data ?? [], null);
        $this->setIfExists('seller', $data ?? [], null);
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
     * Gets primeLineNumber
     *
     * @return string|null
    
     */
    public function getPrimeLineNumber()
    {
        return $this->container['primeLineNumber'];
    }

    /**
     * Sets primeLineNumber
     *
     * @param string|null $primeLineNumber primeLineNumber
     *
     * @return self
    
     */
    public function setPrimeLineNumber($primeLineNumber)
    {
        if (is_null($primeLineNumber)) {
            throw new \InvalidArgumentException('non-nullable primeLineNumber cannot be null');
        }

        $this->container['primeLineNumber'] = $primeLineNumber;
        return $this;
    }

    /**
     * Gets coLineNumber
     *
     * @return string|null
    
     */
    public function getCoLineNumber()
    {
        return $this->container['coLineNumber'];
    }

    /**
     * Sets coLineNumber
     *
     * @param string|null $coLineNumber coLineNumber
     *
     * @return self
    
     */
    public function setCoLineNumber($coLineNumber)
    {
        if (is_null($coLineNumber)) {
            throw new \InvalidArgumentException('non-nullable coLineNumber cannot be null');
        }

        $this->container['coLineNumber'] = $coLineNumber;
        return $this;
    }

    /**
     * Gets item
     *
     * @return \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItem|null
    
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerItem|null $item item
     *
     * @return self
    
     */
    public function setItem($item)
    {
        if (is_null($item)) {
            throw new \InvalidArgumentException('non-nullable item cannot be null');
        }

        $this->container['item'] = $item;
        return $this;
    }

    /**
     * Gets charges
     *
     * @return \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerChargesInner[]|null
    
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerChargesInner[]|null $charges charges
     *
     * @return self
    
     */
    public function setCharges($charges)
    {
        if (is_null($charges)) {
            throw new \InvalidArgumentException('non-nullable charges cannot be null');
        }

        $this->container['charges'] = $charges;
        return $this;
    }

    /**
     * Gets orderLineQuantity
     *
     * @return \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerOrderLineQuantity|null
    
     */
    public function getOrderLineQuantity()
    {
        return $this->container['orderLineQuantity'];
    }

    /**
     * Sets orderLineQuantity
     *
     * @param \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerOrderLineQuantity|null $orderLineQuantity orderLineQuantity
     *
     * @return self
    
     */
    public function setOrderLineQuantity($orderLineQuantity)
    {
        if (is_null($orderLineQuantity)) {
            throw new \InvalidArgumentException('non-nullable orderLineQuantity cannot be null');
        }

        $this->container['orderLineQuantity'] = $orderLineQuantity;
        return $this;
    }

    /**
     * Gets orderLineStatus
     *
     * @return \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerOrderLineStatusInner[]|null
    
     */
    public function getOrderLineStatus()
    {
        return $this->container['orderLineStatus'];
    }

    /**
     * Sets orderLineStatus
     *
     * @param \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerOrderLineStatusInner[]|null $orderLineStatus orderLineStatus
     *
     * @return self
    
     */
    public function setOrderLineStatus($orderLineStatus)
    {
        if (is_null($orderLineStatus)) {
            throw new \InvalidArgumentException('non-nullable orderLineStatus cannot be null');
        }

        $this->container['orderLineStatus'] = $orderLineStatus;
        return $this;
    }

    /**
     * Gets intentToCancel
     *
     * @return string|null
    
     */
    public function getIntentToCancel()
    {
        return $this->container['intentToCancel'];
    }

    /**
     * Sets intentToCancel
     *
     * @param string|null $intentToCancel intentToCancel
     *
     * @return self
    
     */
    public function setIntentToCancel($intentToCancel)
    {
        if (is_null($intentToCancel)) {
            throw new \InvalidArgumentException('non-nullable intentToCancel cannot be null');
        }

        $this->container['intentToCancel'] = $intentToCancel;
        return $this;
    }

    /**
     * Gets shippingMethod
     *
     * @return string|null
    
     */
    public function getShippingMethod()
    {
        return $this->container['shippingMethod'];
    }

    /**
     * Sets shippingMethod
     *
     * @param string|null $shippingMethod shippingMethod
     *
     * @return self
    
     */
    public function setShippingMethod($shippingMethod)
    {
        if (is_null($shippingMethod)) {
            throw new \InvalidArgumentException('non-nullable shippingMethod cannot be null');
        }

        $this->container['shippingMethod'] = $shippingMethod;
        return $this;
    }

    /**
     * Gets soPrimeLineSubLineNo
     *
     * @return string|null
    
     */
    public function getSoPrimeLineSubLineNo()
    {
        return $this->container['soPrimeLineSubLineNo'];
    }

    /**
     * Sets soPrimeLineSubLineNo
     *
     * @param string|null $soPrimeLineSubLineNo soPrimeLineSubLineNo
     *
     * @return self
    
     */
    public function setSoPrimeLineSubLineNo($soPrimeLineSubLineNo)
    {
        if (is_null($soPrimeLineSubLineNo)) {
            throw new \InvalidArgumentException('non-nullable soPrimeLineSubLineNo cannot be null');
        }

        $this->container['soPrimeLineSubLineNo'] = $soPrimeLineSubLineNo;
        return $this;
    }

    /**
     * Gets promiseDeliveryDate
     *
     * @return string|null
    
     */
    public function getPromiseDeliveryDate()
    {
        return $this->container['promiseDeliveryDate'];
    }

    /**
     * Sets promiseDeliveryDate
     *
     * @param string|null $promiseDeliveryDate promiseDeliveryDate
     *
     * @return self
    
     */
    public function setPromiseDeliveryDate($promiseDeliveryDate)
    {
        if (is_null($promiseDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable promiseDeliveryDate cannot be null');
        }

        $this->container['promiseDeliveryDate'] = $promiseDeliveryDate;
        return $this;
    }

    /**
     * Gets isMSIEnabled
     *
     * @return string|null
    
     */
    public function getIsMSIEnabled()
    {
        return $this->container['isMSIEnabled'];
    }

    /**
     * Sets isMSIEnabled
     *
     * @param string|null $isMSIEnabled isMSIEnabled
     *
     * @return self
    
     */
    public function setIsMSIEnabled($isMSIEnabled)
    {
        if (is_null($isMSIEnabled)) {
            throw new \InvalidArgumentException('non-nullable isMSIEnabled cannot be null');
        }

        $this->container['isMSIEnabled'] = $isMSIEnabled;
        return $this;
    }

    /**
     * Gets seller
     *
     * @return \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerSeller|null
    
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \Walmart\Models\MP\MX\Orders\GetAllOrders200ResponseOrderInnerOrderLinesInnerSeller|null $seller seller
     *
     * @return self
    
     */
    public function setSeller($seller)
    {
        if (is_null($seller)) {
            throw new \InvalidArgumentException('non-nullable seller cannot be null');
        }

        $this->container['seller'] = $seller;
        return $this;
    }
}


