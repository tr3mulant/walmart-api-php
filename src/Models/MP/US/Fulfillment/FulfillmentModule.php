<?php

/**
 * FulfillmentModule
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
 * FulfillmentModule Class Doc Comment
 *
 * @category Class

 * @description Fulfillment module details.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FulfillmentModule extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FulfillmentModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'fulfillmentGroups' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'fulfillmentGroups' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'fulfillmentGroups' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'fulfillmentGroups' => 'fulfillmentGroups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'fulfillmentGroups' => 'setFulfillmentGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'fulfillmentGroups' => 'getFulfillmentGroups'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('fulfillmentGroups', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
    
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Fulfillment module name. For example : 'UNSCHEDULED_DELIVERY and ERROR'
     *
     * @return self
    
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets fulfillmentGroups
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInner[]|null
    
     */
    public function getFulfillmentGroups()
    {
        return $this->container['fulfillmentGroups'];
    }

    /**
     * Sets fulfillmentGroups
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInner[]|null $fulfillmentGroups Fulfillment Group details.
     *
     * @return self
    
     */
    public function setFulfillmentGroups($fulfillmentGroups)
    {
        if (is_null($fulfillmentGroups)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentGroups cannot be null');
        }

        $this->container['fulfillmentGroups'] = $fulfillmentGroups;
        return $this;
    }
}


