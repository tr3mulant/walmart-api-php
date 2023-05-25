<?php

/**
 * GetReturns200ResponseReturnOrdersInner
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\Returns;
use Walmart\Models\BaseModel;

/**
 * GetReturns200ResponseReturnOrdersInner Class Doc Comment
 *
 * @category Class

 * @description List of returns for the seller.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetReturns200ResponseReturnOrdersInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getReturns_200_response_returnOrders_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'returnOrderId' => 'string',
        'customerEmail' => 'string',
        'customerName' => '\Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerCustomerName',
        'customerOrderId' => 'string',
        'returnOrderDate' => 'string',
        'returnOrderLines' => '\Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInner[]',
        'returnOrderShipments' => '\Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'returnOrderId' => null,
        'customerEmail' => null,
        'customerName' => null,
        'customerOrderId' => null,
        'returnOrderDate' => null,
        'returnOrderLines' => null,
        'returnOrderShipments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'returnOrderId' => false,
        'customerEmail' => false,
        'customerName' => false,
        'customerOrderId' => false,
        'returnOrderDate' => false,
        'returnOrderLines' => false,
        'returnOrderShipments' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'returnOrderId' => 'returnOrderId',
        'customerEmail' => 'customerEmail',
        'customerName' => 'customerName',
        'customerOrderId' => 'customerOrderId',
        'returnOrderDate' => 'returnOrderDate',
        'returnOrderLines' => 'returnOrderLines',
        'returnOrderShipments' => 'returnOrderShipments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'returnOrderId' => 'setReturnOrderId',
        'customerEmail' => 'setCustomerEmail',
        'customerName' => 'setCustomerName',
        'customerOrderId' => 'setCustomerOrderId',
        'returnOrderDate' => 'setReturnOrderDate',
        'returnOrderLines' => 'setReturnOrderLines',
        'returnOrderShipments' => 'setReturnOrderShipments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'returnOrderId' => 'getReturnOrderId',
        'customerEmail' => 'getCustomerEmail',
        'customerName' => 'getCustomerName',
        'customerOrderId' => 'getCustomerOrderId',
        'returnOrderDate' => 'getReturnOrderDate',
        'returnOrderLines' => 'getReturnOrderLines',
        'returnOrderShipments' => 'getReturnOrderShipments'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('returnOrderId', $data ?? [], null);
        $this->setIfExists('customerEmail', $data ?? [], null);
        $this->setIfExists('customerName', $data ?? [], null);
        $this->setIfExists('customerOrderId', $data ?? [], null);
        $this->setIfExists('returnOrderDate', $data ?? [], null);
        $this->setIfExists('returnOrderLines', $data ?? [], null);
        $this->setIfExists('returnOrderShipments', $data ?? [], null);
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
     * Gets returnOrderId
     *
     * @return string|null
    
     */
    public function getReturnOrderId()
    {
        return $this->container['returnOrderId'];
    }

    /**
     * Sets returnOrderId
     *
     * @param string|null $returnOrderId Return order identifier of the return order. This is the same as RMA number.
     *
     * @return self
    
     */
    public function setReturnOrderId($returnOrderId)
    {
        if (is_null($returnOrderId)) {
            throw new \InvalidArgumentException('non-nullable returnOrderId cannot be null');
        }

        $this->container['returnOrderId'] = $returnOrderId;
        return $this;
    }

    /**
     * Gets customerEmail
     *
     * @return string|null
    
     */
    public function getCustomerEmail()
    {
        return $this->container['customerEmail'];
    }

    /**
     * Sets customerEmail
     *
     * @param string|null $customerEmail Customer email address
     *
     * @return self
    
     */
    public function setCustomerEmail($customerEmail)
    {
        if (is_null($customerEmail)) {
            throw new \InvalidArgumentException('non-nullable customerEmail cannot be null');
        }

        $this->container['customerEmail'] = $customerEmail;
        return $this;
    }

    /**
     * Gets customerName
     *
     * @return \Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerCustomerName|null
    
     */
    public function getCustomerName()
    {
        return $this->container['customerName'];
    }

    /**
     * Sets customerName
     *
     * @param \Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerCustomerName|null $customerName customerName
     *
     * @return self
    
     */
    public function setCustomerName($customerName)
    {
        if (is_null($customerName)) {
            throw new \InvalidArgumentException('non-nullable customerName cannot be null');
        }

        $this->container['customerName'] = $customerName;
        return $this;
    }

    /**
     * Gets customerOrderId
     *
     * @return string|null
    
     */
    public function getCustomerOrderId()
    {
        return $this->container['customerOrderId'];
    }

    /**
     * Sets customerOrderId
     *
     * @param string|null $customerOrderId A unique ID associated with the sales order for specified customer
     *
     * @return self
    
     */
    public function setCustomerOrderId($customerOrderId)
    {
        if (is_null($customerOrderId)) {
            throw new \InvalidArgumentException('non-nullable customerOrderId cannot be null');
        }

        $this->container['customerOrderId'] = $customerOrderId;
        return $this;
    }

    /**
     * Gets returnOrderDate
     *
     * @return string|null
    
     */
    public function getReturnOrderDate()
    {
        return $this->container['returnOrderDate'];
    }

    /**
     * Sets returnOrderDate
     *
     * @param string|null $returnOrderDate Date for return order date
     *
     * @return self
    
     */
    public function setReturnOrderDate($returnOrderDate)
    {
        if (is_null($returnOrderDate)) {
            throw new \InvalidArgumentException('non-nullable returnOrderDate cannot be null');
        }

        $this->container['returnOrderDate'] = $returnOrderDate;
        return $this;
    }

    /**
     * Gets returnOrderLines
     *
     * @return \Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInner[]|null
    
     */
    public function getReturnOrderLines()
    {
        return $this->container['returnOrderLines'];
    }

    /**
     * Sets returnOrderLines
     *
     * @param \Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInner[]|null $returnOrderLines A list of order lines in the return order
     *
     * @return self
    
     */
    public function setReturnOrderLines($returnOrderLines)
    {
        if (is_null($returnOrderLines)) {
            throw new \InvalidArgumentException('non-nullable returnOrderLines cannot be null');
        }

        $this->container['returnOrderLines'] = $returnOrderLines;
        return $this;
    }

    /**
     * Gets returnOrderShipments
     *
     * @return \Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInner[]|null
    
     */
    public function getReturnOrderShipments()
    {
        return $this->container['returnOrderShipments'];
    }

    /**
     * Sets returnOrderShipments
     *
     * @param \Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInner[]|null $returnOrderShipments The shipments for return orders
     *
     * @return self
    
     */
    public function setReturnOrderShipments($returnOrderShipments)
    {
        if (is_null($returnOrderShipments)) {
            throw new \InvalidArgumentException('non-nullable returnOrderShipments cannot be null');
        }

        $this->container['returnOrderShipments'] = $returnOrderShipments;
        return $this;
    }
}


