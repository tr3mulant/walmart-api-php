<?php

/**
 * PricingListType
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
 * Promotion Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Promotions;
use Walmart\Models\BaseModel;

/**
 * PricingListType Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PricingListType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PricingListType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'replaceAll' => 'bool',
        'pricing' => '\Walmart\Models\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'replaceAll' => null,
        'pricing' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'replaceAll' => false,
        'pricing' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'replaceAll' => 'replaceAll',
        'pricing' => 'pricing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'replaceAll' => 'setReplaceAll',
        'pricing' => 'setPricing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'replaceAll' => 'getReplaceAll',
        'pricing' => 'getPricing'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('replaceAll', $data ?? [], null);
        $this->setIfExists('pricing', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pricing'] === null) {
            $invalidProperties[] = "'pricing' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets replaceAll
     *
     * @return bool|null
    
     */
    public function getReplaceAll()
    {
        return $this->container['replaceAll'];
    }

    /**
     * Sets replaceAll
     *
     * @param bool|null $replaceAll replaceAll
     *
     * @return self
    
     */
    public function setReplaceAll($replaceAll)
    {
        if (is_null($replaceAll)) {
            throw new \InvalidArgumentException('non-nullable replaceAll cannot be null');
        }

        $this->container['replaceAll'] = $replaceAll;
        return $this;
    }

    /**
     * Gets pricing
     *
     * @return \Walmart\Models\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInner[]
    
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param \Walmart\Models\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInner[] $pricing pricing
     *
     * @return self
    
     */
    public function setPricing($pricing)
    {
        if (is_null($pricing)) {
            throw new \InvalidArgumentException('non-nullable pricing cannot be null');
        }

        $this->container['pricing'] = $pricing;
        return $this;
    }
}


