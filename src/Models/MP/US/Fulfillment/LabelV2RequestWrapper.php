<?php

/**
 * LabelV2RequestWrapper
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
 * LabelV2RequestWrapper Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class LabelV2RequestWrapper extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LabelV2RequestWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipmentId' => 'string',
        'labelSize' => 'string',
        'labelFormat' => 'string',
        'loadTypes' => '\Walmart\Models\MP\US\Fulfillment\LoadType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipmentId' => null,
        'labelSize' => null,
        'labelFormat' => null,
        'loadTypes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipmentId' => false,
        'labelSize' => false,
        'labelFormat' => false,
        'loadTypes' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipmentId' => 'shipmentId',
        'labelSize' => 'labelSize',
        'labelFormat' => 'labelFormat',
        'loadTypes' => 'loadTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipmentId' => 'setShipmentId',
        'labelSize' => 'setLabelSize',
        'labelFormat' => 'setLabelFormat',
        'loadTypes' => 'setLoadTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipmentId' => 'getShipmentId',
        'labelSize' => 'getLabelSize',
        'labelFormat' => 'getLabelFormat',
        'loadTypes' => 'getLoadTypes'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipmentId', $data ?? [], null);
        $this->setIfExists('labelSize', $data ?? [], null);
        $this->setIfExists('labelFormat', $data ?? [], null);
        $this->setIfExists('loadTypes', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipmentId'] === null) {
            $invalidProperties[] = "'shipmentId' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets shipmentId
     *
     * @return string
    
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string $shipmentId shipmentId
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
     * Gets labelSize
     *
     * @return string|null
    
     */
    public function getLabelSize()
    {
        return $this->container['labelSize'];
    }

    /**
     * Sets labelSize
     *
     * @param string|null $labelSize labelSize
     *
     * @return self
    
     */
    public function setLabelSize($labelSize)
    {
        if (is_null($labelSize)) {
            throw new \InvalidArgumentException('non-nullable labelSize cannot be null');
        }

        $this->container['labelSize'] = $labelSize;
        return $this;
    }

    /**
     * Gets labelFormat
     *
     * @return string|null
    
     */
    public function getLabelFormat()
    {
        return $this->container['labelFormat'];
    }

    /**
     * Sets labelFormat
     *
     * @param string|null $labelFormat labelFormat
     *
     * @return self
    
     */
    public function setLabelFormat($labelFormat)
    {
        if (is_null($labelFormat)) {
            throw new \InvalidArgumentException('non-nullable labelFormat cannot be null');
        }

        $this->container['labelFormat'] = $labelFormat;
        return $this;
    }

    /**
     * Gets loadTypes
     *
     * @return \Walmart\Models\MP\US\Fulfillment\LoadType[]|null
    
     */
    public function getLoadTypes()
    {
        return $this->container['loadTypes'];
    }

    /**
     * Sets loadTypes
     *
     * @param \Walmart\Models\MP\US\Fulfillment\LoadType[]|null $loadTypes loadTypes
     *
     * @return self
    
     */
    public function setLoadTypes($loadTypes)
    {
        if (is_null($loadTypes)) {
            throw new \InvalidArgumentException('non-nullable loadTypes cannot be null');
        }

        $this->container['loadTypes'] = $loadTypes;
        return $this;
    }
}


