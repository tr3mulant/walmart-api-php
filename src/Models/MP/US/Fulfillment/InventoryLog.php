<?php

/**
 * InventoryLog
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
 * InventoryLog Class Doc Comment
 *
 * @category Class

 * @description Inventory Log records

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class InventoryLog extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InventoryLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'fcName' => 'string',
        'changedUnits' => 'int',
        'transactionTime' => '\DateTime',
        'transactionLocation' => 'string',
        'transactionReasonCode' => 'string',
        'transactionReasonDesc' => 'string',
        'transactionType' => 'string',
        'shipmentId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'fcName' => null,
        'changedUnits' => 'int32',
        'transactionTime' => 'date-time',
        'transactionLocation' => null,
        'transactionReasonCode' => null,
        'transactionReasonDesc' => null,
        'transactionType' => null,
        'shipmentId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'fcName' => false,
        'changedUnits' => false,
        'transactionTime' => false,
        'transactionLocation' => false,
        'transactionReasonCode' => false,
        'transactionReasonDesc' => false,
        'transactionType' => false,
        'shipmentId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'id' => 'id',
        'fcName' => 'fcName',
        'changedUnits' => 'changedUnits',
        'transactionTime' => 'transactionTime',
        'transactionLocation' => 'transactionLocation',
        'transactionReasonCode' => 'transactionReasonCode',
        'transactionReasonDesc' => 'transactionReasonDesc',
        'transactionType' => 'transactionType',
        'shipmentId' => 'shipmentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'fcName' => 'setFcName',
        'changedUnits' => 'setChangedUnits',
        'transactionTime' => 'setTransactionTime',
        'transactionLocation' => 'setTransactionLocation',
        'transactionReasonCode' => 'setTransactionReasonCode',
        'transactionReasonDesc' => 'setTransactionReasonDesc',
        'transactionType' => 'setTransactionType',
        'shipmentId' => 'setShipmentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'fcName' => 'getFcName',
        'changedUnits' => 'getChangedUnits',
        'transactionTime' => 'getTransactionTime',
        'transactionLocation' => 'getTransactionLocation',
        'transactionReasonCode' => 'getTransactionReasonCode',
        'transactionReasonDesc' => 'getTransactionReasonDesc',
        'transactionType' => 'getTransactionType',
        'shipmentId' => 'getShipmentId'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('fcName', $data ?? [], null);
        $this->setIfExists('changedUnits', $data ?? [], null);
        $this->setIfExists('transactionTime', $data ?? [], null);
        $this->setIfExists('transactionLocation', $data ?? [], null);
        $this->setIfExists('transactionReasonCode', $data ?? [], null);
        $this->setIfExists('transactionReasonDesc', $data ?? [], null);
        $this->setIfExists('transactionType', $data ?? [], null);
        $this->setIfExists('shipmentId', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
    
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique Event Id
     *
     * @return self
    
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;
        return $this;
    }

    /**
     * Gets fcName
     *
     * @return string|null
    
     */
    public function getFcName()
    {
        return $this->container['fcName'];
    }

    /**
     * Sets fcName
     *
     * @param string|null $fcName Fulfillment Center Short Name
     *
     * @return self
    
     */
    public function setFcName($fcName)
    {
        if (is_null($fcName)) {
            throw new \InvalidArgumentException('non-nullable fcName cannot be null');
        }

        $this->container['fcName'] = $fcName;
        return $this;
    }

    /**
     * Gets changedUnits
     *
     * @return int|null
    
     */
    public function getChangedUnits()
    {
        return $this->container['changedUnits'];
    }

    /**
     * Sets changedUnits
     *
     * @param int|null $changedUnits Number of inventory units changed +/- in FC as a result of this transaction
     *
     * @return self
    
     */
    public function setChangedUnits($changedUnits)
    {
        if (is_null($changedUnits)) {
            throw new \InvalidArgumentException('non-nullable changedUnits cannot be null');
        }

        $this->container['changedUnits'] = $changedUnits;
        return $this;
    }

    /**
     * Gets transactionTime
     *
     * @return \DateTime|null
    
     */
    public function getTransactionTime()
    {
        return $this->container['transactionTime'];
    }

    /**
     * Sets transactionTime
     *
     * @param \DateTime|null $transactionTime Timestamp of transaction
     *
     * @return self
    
     */
    public function setTransactionTime($transactionTime)
    {
        if (is_null($transactionTime)) {
            throw new \InvalidArgumentException('non-nullable transactionTime cannot be null');
        }

        $this->container['transactionTime'] = $transactionTime;
        return $this;
    }

    /**
     * Gets transactionLocation
     *
     * @return string|null
    
     */
    public function getTransactionLocation()
    {
        return $this->container['transactionLocation'];
    }

    /**
     * Sets transactionLocation
     *
     * @param string|null $transactionLocation Transaction Location
     *
     * @return self
    
     */
    public function setTransactionLocation($transactionLocation)
    {
        if (is_null($transactionLocation)) {
            throw new \InvalidArgumentException('non-nullable transactionLocation cannot be null');
        }

        $this->container['transactionLocation'] = $transactionLocation;
        return $this;
    }

    /**
     * Gets transactionReasonCode
     *
     * @return string|null
    
     */
    public function getTransactionReasonCode()
    {
        return $this->container['transactionReasonCode'];
    }

    /**
     * Sets transactionReasonCode
     *
     * @param string|null $transactionReasonCode Transaction Reason Code
     *
     * @return self
    
     */
    public function setTransactionReasonCode($transactionReasonCode)
    {
        if (is_null($transactionReasonCode)) {
            throw new \InvalidArgumentException('non-nullable transactionReasonCode cannot be null');
        }

        $this->container['transactionReasonCode'] = $transactionReasonCode;
        return $this;
    }

    /**
     * Gets transactionReasonDesc
     *
     * @return string|null
    
     */
    public function getTransactionReasonDesc()
    {
        return $this->container['transactionReasonDesc'];
    }

    /**
     * Sets transactionReasonDesc
     *
     * @param string|null $transactionReasonDesc Transaction Reason Description
     *
     * @return self
    
     */
    public function setTransactionReasonDesc($transactionReasonDesc)
    {
        if (is_null($transactionReasonDesc)) {
            throw new \InvalidArgumentException('non-nullable transactionReasonDesc cannot be null');
        }

        $this->container['transactionReasonDesc'] = $transactionReasonDesc;
        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return string|null
    
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string|null $transactionType Transaction Type
     *
     * @return self
    
     */
    public function setTransactionType($transactionType)
    {
        if (is_null($transactionType)) {
            throw new \InvalidArgumentException('non-nullable transactionType cannot be null');
        }

        $this->container['transactionType'] = $transactionType;
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
     * @param string|null $shipmentId Shipment Id
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
}


