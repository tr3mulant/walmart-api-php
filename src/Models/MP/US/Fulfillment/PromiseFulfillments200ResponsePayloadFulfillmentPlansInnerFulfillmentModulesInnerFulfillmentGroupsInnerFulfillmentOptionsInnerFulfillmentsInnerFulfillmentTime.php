<?php

/**
 * PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerFulfillmentTime
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
 * PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerFulfillmentTime Class Doc Comment
 *
 * @category Class

 * @description Fulfillment time details.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerFulfillmentTime extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'promiseFulfillments_200_response_payload_fulfillmentPlans_inner_fulfillmentModules_inner_fulfillmentGroups_inner_fulfillmentOptions_inner_fulfillments_inner_fulfillmentTime';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'date' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerFulfillmentTimeDate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'date' => 'date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'date' => 'setDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'date' => 'getDate'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('date', $data ?? [], null);
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
     * Gets date
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerFulfillmentTimeDate|null
    
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerFulfillmentTimeDate|null $date date
     *
     * @return self
    
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }

        $this->container['date'] = $date;
        return $this;
    }
}


