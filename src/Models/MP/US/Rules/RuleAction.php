<?php

/**
 * RuleAction
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
 * RuleAction Class Doc Comment
 *
 * @category Class

 * @description Defines the two day state coverage areas.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RuleAction extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RuleAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'twoDayShippingRegions' => '\Walmart\Models\MP\US\Rules\SubRegions[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'twoDayShippingRegions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'twoDayShippingRegions' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'twoDayShippingRegions' => 'twoDayShippingRegions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'twoDayShippingRegions' => 'setTwoDayShippingRegions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'twoDayShippingRegions' => 'getTwoDayShippingRegions'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('twoDayShippingRegions', $data ?? [], null);
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
     * Gets twoDayShippingRegions
     *
     * @return \Walmart\Models\MP\US\Rules\SubRegions[]|null
    
     */
    public function getTwoDayShippingRegions()
    {
        return $this->container['twoDayShippingRegions'];
    }

    /**
     * Sets twoDayShippingRegions
     *
     * @param \Walmart\Models\MP\US\Rules\SubRegions[]|null $twoDayShippingRegions List of two-day regions.
     *
     * @return self
    
     */
    public function setTwoDayShippingRegions($twoDayShippingRegions)
    {
        if (is_null($twoDayShippingRegions)) {
            throw new \InvalidArgumentException('non-nullable twoDayShippingRegions cannot be null');
        }

        $this->container['twoDayShippingRegions'] = $twoDayShippingRegions;
        return $this;
    }
}


