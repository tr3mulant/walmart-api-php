<?php

/**
 * LabelGenerationResponseMx
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
 * International Shipping
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\InternationalShipping;

use Walmart\Models\BaseModel;

/**
 * LabelGenerationResponseMx Class Doc Comment
 *
 * @category Class

 * @description data

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class LabelGenerationResponseMx extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LabelGenerationResponseMx';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'purchaseOrderId' => 'string',
        'trackingNo' => 'string',
        'boxItems' => '\Walmart\Models\MP\MX\InternationalShipping\MXBoxItemResponse[]',
        'carrierName' => 'string',
        'carrierFullName' => 'string',
        'carrierServiceType' => 'string',
        'trackingUrl' => 'string',
        'shippingDocuments' => '\Walmart\Models\MP\MX\InternationalShipping\ShippingDocument'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'purchaseOrderId' => null,
        'trackingNo' => null,
        'boxItems' => null,
        'carrierName' => null,
        'carrierFullName' => null,
        'carrierServiceType' => null,
        'trackingUrl' => null,
        'shippingDocuments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'purchaseOrderId' => false,
        'trackingNo' => false,
        'boxItems' => false,
        'carrierName' => false,
        'carrierFullName' => false,
        'carrierServiceType' => false,
        'trackingUrl' => false,
        'shippingDocuments' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'purchaseOrderId' => 'purchaseOrderId',
        'trackingNo' => 'trackingNo',
        'boxItems' => 'boxItems',
        'carrierName' => 'carrierName',
        'carrierFullName' => 'carrierFullName',
        'carrierServiceType' => 'carrierServiceType',
        'trackingUrl' => 'trackingUrl',
        'shippingDocuments' => 'shippingDocuments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'purchaseOrderId' => 'setPurchaseOrderId',
        'trackingNo' => 'setTrackingNo',
        'boxItems' => 'setBoxItems',
        'carrierName' => 'setCarrierName',
        'carrierFullName' => 'setCarrierFullName',
        'carrierServiceType' => 'setCarrierServiceType',
        'trackingUrl' => 'setTrackingUrl',
        'shippingDocuments' => 'setShippingDocuments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'purchaseOrderId' => 'getPurchaseOrderId',
        'trackingNo' => 'getTrackingNo',
        'boxItems' => 'getBoxItems',
        'carrierName' => 'getCarrierName',
        'carrierFullName' => 'getCarrierFullName',
        'carrierServiceType' => 'getCarrierServiceType',
        'trackingUrl' => 'getTrackingUrl',
        'shippingDocuments' => 'getShippingDocuments'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('purchaseOrderId', $data ?? [], null);
        $this->setIfExists('trackingNo', $data ?? [], null);
        $this->setIfExists('boxItems', $data ?? [], null);
        $this->setIfExists('carrierName', $data ?? [], null);
        $this->setIfExists('carrierFullName', $data ?? [], null);
        $this->setIfExists('carrierServiceType', $data ?? [], null);
        $this->setIfExists('trackingUrl', $data ?? [], null);
        $this->setIfExists('shippingDocuments', $data ?? [], null);
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
     * Gets purchaseOrderId
     *
     * @return string|null
    
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchaseOrderId'];
    }

    /**
     * Sets purchaseOrderId
     *
     * @param string|null $purchaseOrderId Purchase Order Id
     *
     * @return self
    
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        if (is_null($purchaseOrderId)) {
            throw new \InvalidArgumentException('non-nullable purchaseOrderId cannot be null');
        }

        $this->container['purchaseOrderId'] = $purchaseOrderId;
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
     * @param string|null $trackingNo Tracking Number
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
     * Gets boxItems
     *
     * @return \Walmart\Models\MP\MX\InternationalShipping\MXBoxItemResponse[]|null
    
     */
    public function getBoxItems()
    {
        return $this->container['boxItems'];
    }

    /**
     * Sets boxItems
     *
     * @param \Walmart\Models\MP\MX\InternationalShipping\MXBoxItemResponse[]|null $boxItems Box Items
     *
     * @return self
    
     */
    public function setBoxItems($boxItems)
    {
        if (is_null($boxItems)) {
            throw new \InvalidArgumentException('non-nullable boxItems cannot be null');
        }

        $this->container['boxItems'] = $boxItems;
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
     * @param string|null $carrierName Carrier Short Name
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

    /**
     * Gets carrierFullName
     *
     * @return string|null
    
     */
    public function getCarrierFullName()
    {
        return $this->container['carrierFullName'];
    }

    /**
     * Sets carrierFullName
     *
     * @param string|null $carrierFullName Carrier Full Name
     *
     * @return self
    
     */
    public function setCarrierFullName($carrierFullName)
    {
        if (is_null($carrierFullName)) {
            throw new \InvalidArgumentException('non-nullable carrierFullName cannot be null');
        }

        $this->container['carrierFullName'] = $carrierFullName;
        return $this;
    }

    /**
     * Gets carrierServiceType
     *
     * @return string|null
    
     */
    public function getCarrierServiceType()
    {
        return $this->container['carrierServiceType'];
    }

    /**
     * Sets carrierServiceType
     *
     * @param string|null $carrierServiceType Carrier Service Type
     *
     * @return self
    
     */
    public function setCarrierServiceType($carrierServiceType)
    {
        if (is_null($carrierServiceType)) {
            throw new \InvalidArgumentException('non-nullable carrierServiceType cannot be null');
        }

        $this->container['carrierServiceType'] = $carrierServiceType;
        return $this;
    }

    /**
     * Gets trackingUrl
     *
     * @return string|null
    
     */
    public function getTrackingUrl()
    {
        return $this->container['trackingUrl'];
    }

    /**
     * Sets trackingUrl
     *
     * @param string|null $trackingUrl Tracking URL
     *
     * @return self
    
     */
    public function setTrackingUrl($trackingUrl)
    {
        if (is_null($trackingUrl)) {
            throw new \InvalidArgumentException('non-nullable trackingUrl cannot be null');
        }

        $this->container['trackingUrl'] = $trackingUrl;
        return $this;
    }

    /**
     * Gets shippingDocuments
     *
     * @return \Walmart\Models\MP\MX\InternationalShipping\ShippingDocument|null
    
     */
    public function getShippingDocuments()
    {
        return $this->container['shippingDocuments'];
    }

    /**
     * Sets shippingDocuments
     *
     * @param \Walmart\Models\MP\MX\InternationalShipping\ShippingDocument|null $shippingDocuments shippingDocuments
     *
     * @return self
    
     */
    public function setShippingDocuments($shippingDocuments)
    {
        if (is_null($shippingDocuments)) {
            throw new \InvalidArgumentException('non-nullable shippingDocuments cannot be null');
        }

        $this->container['shippingDocuments'] = $shippingDocuments;
        return $this;
    }
}


