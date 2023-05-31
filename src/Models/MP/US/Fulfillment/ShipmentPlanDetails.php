<?php

/**
 * ShipmentPlanDetails
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Models\BaseModel;

/**
 * ShipmentPlanDetails Class Doc Comment
 *
 * @category Class

 * @description response payload

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShipmentPlanDetails extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentPlanDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'inboundOrderId' => 'string',
        'shipmentId' => 'string',
        'shipToAddress' => '\Walmart\Models\MP\US\Fulfillment\ShipToAddress',
        'returnAddress' => '\Walmart\Models\MP\US\Fulfillment\ReturnAddress',
        'status' => 'string',
        'createdDate' => '\DateTime',
        'shipmentUnits' => 'int',
        'receivedUnits' => 'int',
        'expectedDeliveryDate' => '\DateTime',
        'updatedExpectedDeliveryDate' => '\DateTime',
        'actualDeliveryDate' => '\DateTime',
        'trackingNo' => 'string[]',
        'carrierName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'inboundOrderId' => null,
        'shipmentId' => null,
        'shipToAddress' => null,
        'returnAddress' => null,
        'status' => null,
        'createdDate' => 'date-time',
        'shipmentUnits' => 'int32',
        'receivedUnits' => 'int32',
        'expectedDeliveryDate' => 'date-time',
        'updatedExpectedDeliveryDate' => 'date-time',
        'actualDeliveryDate' => 'date-time',
        'trackingNo' => null,
        'carrierName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inboundOrderId' => false,
        'shipmentId' => false,
        'shipToAddress' => false,
        'returnAddress' => false,
        'status' => false,
        'createdDate' => false,
        'shipmentUnits' => false,
        'receivedUnits' => false,
        'expectedDeliveryDate' => false,
        'updatedExpectedDeliveryDate' => false,
        'actualDeliveryDate' => false,
        'trackingNo' => false,
        'carrierName' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'inboundOrderId' => 'inboundOrderId',
        'shipmentId' => 'shipmentId',
        'shipToAddress' => 'shipToAddress',
        'returnAddress' => 'returnAddress',
        'status' => 'status',
        'createdDate' => 'createdDate',
        'shipmentUnits' => 'shipmentUnits',
        'receivedUnits' => 'receivedUnits',
        'expectedDeliveryDate' => 'expectedDeliveryDate',
        'updatedExpectedDeliveryDate' => 'updatedExpectedDeliveryDate',
        'actualDeliveryDate' => 'actualDeliveryDate',
        'trackingNo' => 'trackingNo',
        'carrierName' => 'carrierName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'inboundOrderId' => 'setInboundOrderId',
        'shipmentId' => 'setShipmentId',
        'shipToAddress' => 'setShipToAddress',
        'returnAddress' => 'setReturnAddress',
        'status' => 'setStatus',
        'createdDate' => 'setCreatedDate',
        'shipmentUnits' => 'setShipmentUnits',
        'receivedUnits' => 'setReceivedUnits',
        'expectedDeliveryDate' => 'setExpectedDeliveryDate',
        'updatedExpectedDeliveryDate' => 'setUpdatedExpectedDeliveryDate',
        'actualDeliveryDate' => 'setActualDeliveryDate',
        'trackingNo' => 'setTrackingNo',
        'carrierName' => 'setCarrierName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'inboundOrderId' => 'getInboundOrderId',
        'shipmentId' => 'getShipmentId',
        'shipToAddress' => 'getShipToAddress',
        'returnAddress' => 'getReturnAddress',
        'status' => 'getStatus',
        'createdDate' => 'getCreatedDate',
        'shipmentUnits' => 'getShipmentUnits',
        'receivedUnits' => 'getReceivedUnits',
        'expectedDeliveryDate' => 'getExpectedDeliveryDate',
        'updatedExpectedDeliveryDate' => 'getUpdatedExpectedDeliveryDate',
        'actualDeliveryDate' => 'getActualDeliveryDate',
        'trackingNo' => 'getTrackingNo',
        'carrierName' => 'getCarrierName'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('inboundOrderId', $data ?? [], null);
        $this->setIfExists('shipmentId', $data ?? [], null);
        $this->setIfExists('shipToAddress', $data ?? [], null);
        $this->setIfExists('returnAddress', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('createdDate', $data ?? [], null);
        $this->setIfExists('shipmentUnits', $data ?? [], null);
        $this->setIfExists('receivedUnits', $data ?? [], null);
        $this->setIfExists('expectedDeliveryDate', $data ?? [], null);
        $this->setIfExists('updatedExpectedDeliveryDate', $data ?? [], null);
        $this->setIfExists('actualDeliveryDate', $data ?? [], null);
        $this->setIfExists('trackingNo', $data ?? [], null);
        $this->setIfExists('carrierName', $data ?? [], null);
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
     * Gets inboundOrderId
     *
     * @return string|null
    
     */
    public function getInboundOrderId()
    {
        return $this->container['inboundOrderId'];
    }

    /**
     * Sets inboundOrderId
     *
     * @param string|null $inboundOrderId Unique ID identifying inbound shipment request
     *
     * @return self
    
     */
    public function setInboundOrderId($inboundOrderId)
    {
        if (is_null($inboundOrderId)) {
            throw new \InvalidArgumentException('non-nullable inboundOrderId cannot be null');
        }

        $this->container['inboundOrderId'] = $inboundOrderId;
        return $this;
    }

    /**
     * Gets shipmentId
     *
     * @return string|null
    
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string|null $shipmentId Unique ID identifying inbound shipment
     *
     * @return self
    
     */
    public function setShipmentId($shipmentId)
    {
        if (is_null($shipmentId)) {
            throw new \InvalidArgumentException('non-nullable shipmentId cannot be null');
        }

        $this->container['shipmentId'] = $shipmentId;
        return $this;
    }

    /**
     * Gets shipToAddress
     *
     * @return \Walmart\Models\MP\US\Fulfillment\ShipToAddress|null
    
     */
    public function getShipToAddress()
    {
        return $this->container['shipToAddress'];
    }

    /**
     * Sets shipToAddress
     *
     * @param \Walmart\Models\MP\US\Fulfillment\ShipToAddress|null $shipToAddress shipToAddress
     *
     * @return self
    
     */
    public function setShipToAddress($shipToAddress)
    {
        if (is_null($shipToAddress)) {
            throw new \InvalidArgumentException('non-nullable shipToAddress cannot be null');
        }

        $this->container['shipToAddress'] = $shipToAddress;
        return $this;
    }

    /**
     * Gets returnAddress
     *
     * @return \Walmart\Models\MP\US\Fulfillment\ReturnAddress|null
    
     */
    public function getReturnAddress()
    {
        return $this->container['returnAddress'];
    }

    /**
     * Sets returnAddress
     *
     * @param \Walmart\Models\MP\US\Fulfillment\ReturnAddress|null $returnAddress returnAddress
     *
     * @return self
    
     */
    public function setReturnAddress($returnAddress)
    {
        if (is_null($returnAddress)) {
            throw new \InvalidArgumentException('non-nullable returnAddress cannot be null');
        }

        $this->container['returnAddress'] = $returnAddress;
        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Current status of the shipment
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return \DateTime|null
    
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime|null $createdDate creation date for shipment
     *
     * @return self
    
     */
    public function setCreatedDate($createdDate)
    {
        if (is_null($createdDate)) {
            throw new \InvalidArgumentException('non-nullable createdDate cannot be null');
        }

        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
     * Gets shipmentUnits
     *
     * @return int|null
    
     */
    public function getShipmentUnits()
    {
        return $this->container['shipmentUnits'];
    }

    /**
     * Sets shipmentUnits
     *
     * @param int|null $shipmentUnits Total number of units in the shipment
     *
     * @return self
    
     */
    public function setShipmentUnits($shipmentUnits)
    {
        if (is_null($shipmentUnits)) {
            throw new \InvalidArgumentException('non-nullable shipmentUnits cannot be null');
        }

        $this->container['shipmentUnits'] = $shipmentUnits;
        return $this;
    }

    /**
     * Gets receivedUnits
     *
     * @return int|null
    
     */
    public function getReceivedUnits()
    {
        return $this->container['receivedUnits'];
    }

    /**
     * Sets receivedUnits
     *
     * @param int|null $receivedUnits Total number of units recived in FC for the shipment
     *
     * @return self
    
     */
    public function setReceivedUnits($receivedUnits)
    {
        if (is_null($receivedUnits)) {
            throw new \InvalidArgumentException('non-nullable receivedUnits cannot be null');
        }

        $this->container['receivedUnits'] = $receivedUnits;
        return $this;
    }

    /**
     * Gets expectedDeliveryDate
     *
     * @return \DateTime|null
    
     */
    public function getExpectedDeliveryDate()
    {
        return $this->container['expectedDeliveryDate'];
    }

    /**
     * Sets expectedDeliveryDate
     *
     * @param \DateTime|null $expectedDeliveryDate expected delivery date provided by seller
     *
     * @return self
    
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate)
    {
        if (is_null($expectedDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable expectedDeliveryDate cannot be null');
        }

        $this->container['expectedDeliveryDate'] = $expectedDeliveryDate;
        return $this;
    }

    /**
     * Gets updatedExpectedDeliveryDate
     *
     * @return \DateTime|null
    
     */
    public function getUpdatedExpectedDeliveryDate()
    {
        return $this->container['updatedExpectedDeliveryDate'];
    }

    /**
     * Sets updatedExpectedDeliveryDate
     *
     * @param \DateTime|null $updatedExpectedDeliveryDate update expected delivery date based on network capacity
     *
     * @return self
    
     */
    public function setUpdatedExpectedDeliveryDate($updatedExpectedDeliveryDate)
    {
        if (is_null($updatedExpectedDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable updatedExpectedDeliveryDate cannot be null');
        }

        $this->container['updatedExpectedDeliveryDate'] = $updatedExpectedDeliveryDate;
        return $this;
    }

    /**
     * Gets actualDeliveryDate
     *
     * @return \DateTime|null
    
     */
    public function getActualDeliveryDate()
    {
        return $this->container['actualDeliveryDate'];
    }

    /**
     * Sets actualDeliveryDate
     *
     * @param \DateTime|null $actualDeliveryDate Actual delivery date of the shipment at FC
     *
     * @return self
    
     */
    public function setActualDeliveryDate($actualDeliveryDate)
    {
        if (is_null($actualDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable actualDeliveryDate cannot be null');
        }

        $this->container['actualDeliveryDate'] = $actualDeliveryDate;
        return $this;
    }

    /**
     * Gets trackingNo
     *
     * @return string[]|null
    
     */
    public function getTrackingNo()
    {
        return $this->container['trackingNo'];
    }

    /**
     * Sets trackingNo
     *
     * @param string[]|null $trackingNo Tracking info for the shipment
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
     * Gets carrierName
     *
     * @return string|null
    
     */
    public function getCarrierName()
    {
        return $this->container['carrierName'];
    }

    /**
     * Sets carrierName
     *
     * @param string|null $carrierName Carrier of the shipment
     *
     * @return self
    
     */
    public function setCarrierName($carrierName)
    {
        if (is_null($carrierName)) {
            throw new \InvalidArgumentException('non-nullable carrierName cannot be null');
        }

        $this->container['carrierName'] = $carrierName;
        return $this;
    }
}


