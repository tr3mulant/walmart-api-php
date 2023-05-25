<?php

/**
 * UpdatePromotionalPricesRequest
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
 * UpdatePromotionalPricesRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdatePromotionalPricesRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updatePromotionalPrices_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'offerId' => 'string',
        'sku' => 'string',
        'replaceAll' => 'string',
        'pricing' => '\Walmart\Models\MP\US\Promotions\UpdatePromotionalPricesRequestPricingInner[]',
        'definitions' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'offerId' => null,
        'sku' => null,
        'replaceAll' => null,
        'pricing' => null,
        'definitions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offerId' => false,
        'sku' => false,
        'replaceAll' => false,
        'pricing' => false,
        'definitions' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'offerId' => 'offerId',
        'sku' => 'sku',
        'replaceAll' => 'replaceAll',
        'pricing' => 'pricing',
        'definitions' => 'definitions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'offerId' => 'setOfferId',
        'sku' => 'setSku',
        'replaceAll' => 'setReplaceAll',
        'pricing' => 'setPricing',
        'definitions' => 'setDefinitions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'offerId' => 'getOfferId',
        'sku' => 'getSku',
        'replaceAll' => 'getReplaceAll',
        'pricing' => 'getPricing',
        'definitions' => 'getDefinitions'
    ];
    public const REPLACE_ALL_TRUE = 'true';

    public const REPLACE_ALL_FALSE = 'false';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReplaceAllAllowableValues()
    {
        return [
            self::REPLACE_ALL_TRUE,
            self::REPLACE_ALL_FALSE,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('offerId', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('replaceAll', $data ?? [], null);
        $this->setIfExists('pricing', $data ?? [], null);
        $this->setIfExists('definitions', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        $allowedValues = $this->getReplaceAllAllowableValues();
        if (!is_null($this->container['replaceAll']) && !in_array($this->container['replaceAll'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'replaceAll', must be one of '%s'",
                $this->container['replaceAll'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['pricing'] === null) {
            $invalidProperties[] = "'pricing' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets offerId
     *
     * @return string|null
    
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param string|null $offerId This is applicable only for promotions
     *
     * @return self
    
     */
    public function setOfferId($offerId)
    {
        if (is_null($offerId)) {
            throw new \InvalidArgumentException('non-nullable offerId cannot be null');
        }

        $this->container['offerId'] = $offerId;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets replaceAll
     *
     * @return string|null
    
     */
    public function getReplaceAll()
    {
        return $this->container['replaceAll'];
    }

    /**
     * Sets replaceAll
     *
     * @param string|null $replaceAll This is applicable only for promotions
     *
     * @return self
    
     */
    public function setReplaceAll($replaceAll)
    {
        if (is_null($replaceAll)) {
            throw new \InvalidArgumentException('non-nullable replaceAll cannot be null');
        }
        $allowedValues = $this->getReplaceAllAllowableValues();
        if (!in_array($replaceAll, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'replaceAll', must be one of '%s'",
                    $replaceAll,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['replaceAll'] = $replaceAll;
        return $this;
    }

    /**
     * Gets pricing
     *
     * @return \Walmart\Models\MP\US\Promotions\UpdatePromotionalPricesRequestPricingInner[]
    
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param \Walmart\Models\MP\US\Promotions\UpdatePromotionalPricesRequestPricingInner[] $pricing pricing
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

    /**
     * Gets definitions
     *
     * @return object|null
    
     */
    public function getDefinitions()
    {
        return $this->container['definitions'];
    }

    /**
     * Sets definitions
     *
     * @param object|null $definitions definitions
     *
     * @return self
    
     */
    public function setDefinitions($definitions)
    {
        if (is_null($definitions)) {
            throw new \InvalidArgumentException('non-nullable definitions cannot be null');
        }

        $this->container['definitions'] = $definitions;
        return $this;
    }
}


