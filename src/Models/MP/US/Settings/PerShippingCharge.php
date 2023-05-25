<?php

/**
 * PerShippingCharge
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;
use Walmart\Models\BaseModel;

/**
 * PerShippingCharge Class Doc Comment
 *
 * @category Class

 * @description Charge per shipping

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PerShippingCharge extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PerShippingCharge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'unitOfMeasure' => 'string',
        'shippingAndHandling' => '\Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerPerShippingChargeShippingAndHandling',
        'chargePerWeight' => '\Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerPerShippingChargeChargePerWeight',
        'chargePerItem' => '\Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerPerShippingChargeChargePerItem'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'unitOfMeasure' => null,
        'shippingAndHandling' => null,
        'chargePerWeight' => null,
        'chargePerItem' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'unitOfMeasure' => false,
        'shippingAndHandling' => false,
        'chargePerWeight' => false,
        'chargePerItem' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'unitOfMeasure' => 'unitOfMeasure',
        'shippingAndHandling' => 'shippingAndHandling',
        'chargePerWeight' => 'chargePerWeight',
        'chargePerItem' => 'chargePerItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'unitOfMeasure' => 'setUnitOfMeasure',
        'shippingAndHandling' => 'setShippingAndHandling',
        'chargePerWeight' => 'setChargePerWeight',
        'chargePerItem' => 'setChargePerItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'unitOfMeasure' => 'getUnitOfMeasure',
        'shippingAndHandling' => 'getShippingAndHandling',
        'chargePerWeight' => 'getChargePerWeight',
        'chargePerItem' => 'getChargePerItem'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('unitOfMeasure', $data ?? [], null);
        $this->setIfExists('shippingAndHandling', $data ?? [], null);
        $this->setIfExists('chargePerWeight', $data ?? [], null);
        $this->setIfExists('chargePerItem', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['unitOfMeasure'] === null) {
            $invalidProperties[] = "'unitOfMeasure' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets unitOfMeasure
     *
     * @return string
    
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unitOfMeasure'];
    }

    /**
     * Sets unitOfMeasure
     *
     * @param string $unitOfMeasure Unit of Measure eg. LB
     *
     * @return self
    
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        if (is_null($unitOfMeasure)) {
            throw new \InvalidArgumentException('non-nullable unitOfMeasure cannot be null');
        }

        $this->container['unitOfMeasure'] = $unitOfMeasure;
        return $this;
    }

    /**
     * Gets shippingAndHandling
     *
     * @return \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerPerShippingChargeShippingAndHandling|null
    
     */
    public function getShippingAndHandling()
    {
        return $this->container['shippingAndHandling'];
    }

    /**
     * Sets shippingAndHandling
     *
     * @param \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerPerShippingChargeShippingAndHandling|null $shippingAndHandling shippingAndHandling
     *
     * @return self
    
     */
    public function setShippingAndHandling($shippingAndHandling)
    {
        if (is_null($shippingAndHandling)) {
            throw new \InvalidArgumentException('non-nullable shippingAndHandling cannot be null');
        }

        $this->container['shippingAndHandling'] = $shippingAndHandling;
        return $this;
    }

    /**
     * Gets chargePerWeight
     *
     * @return \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerPerShippingChargeChargePerWeight|null
    
     */
    public function getChargePerWeight()
    {
        return $this->container['chargePerWeight'];
    }

    /**
     * Sets chargePerWeight
     *
     * @param \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerPerShippingChargeChargePerWeight|null $chargePerWeight chargePerWeight
     *
     * @return self
    
     */
    public function setChargePerWeight($chargePerWeight)
    {
        if (is_null($chargePerWeight)) {
            throw new \InvalidArgumentException('non-nullable chargePerWeight cannot be null');
        }

        $this->container['chargePerWeight'] = $chargePerWeight;
        return $this;
    }

    /**
     * Gets chargePerItem
     *
     * @return \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerPerShippingChargeChargePerItem|null
    
     */
    public function getChargePerItem()
    {
        return $this->container['chargePerItem'];
    }

    /**
     * Sets chargePerItem
     *
     * @param \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerPerShippingChargeChargePerItem|null $chargePerItem chargePerItem
     *
     * @return self
    
     */
    public function setChargePerItem($chargePerItem)
    {
        if (is_null($chargePerItem)) {
            throw new \InvalidArgumentException('non-nullable chargePerItem cannot be null');
        }

        $this->container['chargePerItem'] = $chargePerItem;
        return $this;
    }
}


