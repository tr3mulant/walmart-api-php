<?php

/**
 * GetAllAreas200ResponsePayloadEntitiesInnerStatesInnerStateSubregionsInner
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
 * Rules Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Rules;
use Walmart\Models\BaseModel;

/**
 * GetAllAreas200ResponsePayloadEntitiesInnerStatesInnerStateSubregionsInner Class Doc Comment
 *
 * @category Class

 * @description statesubregions

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAllAreas200ResponsePayloadEntitiesInnerStatesInnerStateSubregionsInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAllAreas_200_response_payload_entities_inner_states_inner_stateSubregions_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'stateSubregionCode' => 'string',
        'stateSubregionName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'stateSubregionCode' => null,
        'stateSubregionName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'stateSubregionCode' => false,
        'stateSubregionName' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'stateSubregionCode' => 'stateSubregionCode',
        'stateSubregionName' => 'stateSubregionName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'stateSubregionCode' => 'setStateSubregionCode',
        'stateSubregionName' => 'setStateSubregionName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'stateSubregionCode' => 'getStateSubregionCode',
        'stateSubregionName' => 'getStateSubregionName'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('stateSubregionCode', $data ?? [], null);
        $this->setIfExists('stateSubregionName', $data ?? [], null);
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
     * Gets stateSubregionCode
     *
     * @return string|null
    
     */
    public function getStateSubregionCode()
    {
        return $this->container['stateSubregionCode'];
    }

    /**
     * Sets stateSubregionCode
     *
     * @param string|null $stateSubregionCode stateSubregionCode
     *
     * @return self
    
     */
    public function setStateSubregionCode($stateSubregionCode)
    {
        if (is_null($stateSubregionCode)) {
            throw new \InvalidArgumentException('non-nullable stateSubregionCode cannot be null');
        }

        $this->container['stateSubregionCode'] = $stateSubregionCode;
        return $this;
    }

    /**
     * Gets stateSubregionName
     *
     * @return string|null
    
     */
    public function getStateSubregionName()
    {
        return $this->container['stateSubregionName'];
    }

    /**
     * Sets stateSubregionName
     *
     * @param string|null $stateSubregionName stateSubregionName
     *
     * @return self
    
     */
    public function setStateSubregionName($stateSubregionName)
    {
        if (is_null($stateSubregionName)) {
            throw new \InvalidArgumentException('non-nullable stateSubregionName cannot be null');
        }

        $this->container['stateSubregionName'] = $stateSubregionName;
        return $this;
    }
}


