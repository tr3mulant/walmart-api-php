<?php

/**
 * Package
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
 * Package Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Package extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'purchaseOrderNo' => 'string',
        'trackingNo' => 'string',
        'eventTime' => 'string',
        'eventName' => 'string',
        'packageNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'purchaseOrderNo' => null,
        'trackingNo' => null,
        'eventTime' => null,
        'eventName' => null,
        'packageNo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'purchaseOrderNo' => false,
        'trackingNo' => false,
        'eventTime' => false,
        'eventName' => false,
        'packageNo' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'purchaseOrderNo' => 'purchaseOrderNo',
        'trackingNo' => 'trackingNo',
        'eventTime' => 'eventTime',
        'eventName' => 'eventName',
        'packageNo' => 'packageNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'purchaseOrderNo' => 'setPurchaseOrderNo',
        'trackingNo' => 'setTrackingNo',
        'eventTime' => 'setEventTime',
        'eventName' => 'setEventName',
        'packageNo' => 'setPackageNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'purchaseOrderNo' => 'getPurchaseOrderNo',
        'trackingNo' => 'getTrackingNo',
        'eventTime' => 'getEventTime',
        'eventName' => 'getEventName',
        'packageNo' => 'getPackageNo'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('purchaseOrderNo', $data ?? [], null);
        $this->setIfExists('trackingNo', $data ?? [], null);
        $this->setIfExists('eventTime', $data ?? [], null);
        $this->setIfExists('eventName', $data ?? [], null);
        $this->setIfExists('packageNo', $data ?? [], null);
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
     * Gets purchaseOrderNo
     *
     * @return string|null
    
     */
    public function getPurchaseOrderNo()
    {
        return $this->container['purchaseOrderNo'];
    }

    /**
     * Sets purchaseOrderNo
     *
     * @param string|null $purchaseOrderNo A unique ID associated with the seller's purchase order
     *
     * @return self
    
     */
    public function setPurchaseOrderNo($purchaseOrderNo)
    {
        if (is_null($purchaseOrderNo)) {
            throw new \InvalidArgumentException('non-nullable purchaseOrderNo cannot be null');
        }

        $this->container['purchaseOrderNo'] = $purchaseOrderNo;
        return $this;
    }

    /**
     * Gets trackingNo
     *
     * @return string|null
    
     */
    public function getTrackingNo()
    {
        return $this->container['trackingNo'];
    }

    /**
     * Sets trackingNo
     *
     * @param string|null $trackingNo Tracking number of the order
     *
     * @return self
    
     */
    public function setTrackingNo($trackingNo)
    {
        if (is_null($trackingNo)) {
            throw new \InvalidArgumentException('non-nullable trackingNo cannot be null');
        }

        $this->container['trackingNo'] = $trackingNo;
        return $this;
    }

    /**
     * Gets eventTime
     *
     * @return string|null
    
     */
    public function getEventTime()
    {
        return $this->container['eventTime'];
    }

    /**
     * Sets eventTime
     *
     * @param string|null $eventTime Time at which the order was delivered
     *
     * @return self
    
     */
    public function setEventTime($eventTime)
    {
        if (is_null($eventTime)) {
            throw new \InvalidArgumentException('non-nullable eventTime cannot be null');
        }

        $this->container['eventTime'] = $eventTime;
        return $this;
    }

    /**
     * Gets eventName
     *
     * @return string|null
    
     */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
     * Sets eventName
     *
     * @param string|null $eventName Type of Order Event. Valid entry is DELIVERY_UPDATE
     *
     * @return self
    
     */
    public function setEventName($eventName)
    {
        if (is_null($eventName)) {
            throw new \InvalidArgumentException('non-nullable eventName cannot be null');
        }

        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
     * Gets packageNo
     *
     * @return string|null
    
     */
    public function getPackageNo()
    {
        return $this->container['packageNo'];
    }

    /**
     * Sets packageNo
     *
     * @param string|null $packageNo Package number associated with the orderline
     *
     * @return self
    
     */
    public function setPackageNo($packageNo)
    {
        if (is_null($packageNo)) {
            throw new \InvalidArgumentException('non-nullable packageNo cannot be null');
        }

        $this->container['packageNo'] = $packageNo;
        return $this;
    }
}


