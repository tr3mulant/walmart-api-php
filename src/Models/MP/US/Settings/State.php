<?php

/**
 * State
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
 * State Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class State extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'State';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'stateCode' => 'string',
        'stateName' => 'string',
        'stateSubregions' => '\Walmart\Models\MP\US\Settings\StateSubregion[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'stateCode' => null,
        'stateName' => null,
        'stateSubregions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'stateCode' => false,
        'stateName' => false,
        'stateSubregions' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'stateCode' => 'stateCode',
        'stateName' => 'stateName',
        'stateSubregions' => 'stateSubregions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'stateCode' => 'setStateCode',
        'stateName' => 'setStateName',
        'stateSubregions' => 'setStateSubregions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'stateCode' => 'getStateCode',
        'stateName' => 'getStateName',
        'stateSubregions' => 'getStateSubregions'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('stateCode', $data ?? [], null);
        $this->setIfExists('stateName', $data ?? [], null);
        $this->setIfExists('stateSubregions', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['stateCode'] === null) {
            $invalidProperties[] = "'stateCode' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets stateCode
     *
     * @return string
    
     */
    public function getStateCode()
    {
        return $this->container['stateCode'];
    }

    /**
     * Sets stateCode
     *
     * @param string $stateCode stateCode
     *
     * @return self
    
     */
    public function setStateCode($stateCode)
    {
        if (is_null($stateCode)) {
            throw new \InvalidArgumentException('non-nullable stateCode cannot be null');
        }

        $this->container['stateCode'] = $stateCode;
        return $this;
    }

    /**
     * Gets stateName
     *
     * @return string|null
    
     */
    public function getStateName()
    {
        return $this->container['stateName'];
    }

    /**
     * Sets stateName
     *
     * @param string|null $stateName stateName
     *
     * @return self
    
     */
    public function setStateName($stateName)
    {
        if (is_null($stateName)) {
            throw new \InvalidArgumentException('non-nullable stateName cannot be null');
        }

        $this->container['stateName'] = $stateName;
        return $this;
    }

    /**
     * Gets stateSubregions
     *
     * @return \Walmart\Models\MP\US\Settings\StateSubregion[]|null
    
     */
    public function getStateSubregions()
    {
        return $this->container['stateSubregions'];
    }

    /**
     * Sets stateSubregions
     *
     * @param \Walmart\Models\MP\US\Settings\StateSubregion[]|null $stateSubregions stateSubregions
     *
     * @return self
    
     */
    public function setStateSubregions($stateSubregions)
    {
        if (is_null($stateSubregions)) {
            throw new \InvalidArgumentException('non-nullable stateSubregions cannot be null');
        }

        $this->container['stateSubregions'] = $stateSubregions;
        return $this;
    }
}


