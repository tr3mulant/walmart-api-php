<?php

/**
 * GetSearchResult200ResponseItemsInnerProperties
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Items;
use Walmart\Models\BaseModel;

/**
 * GetSearchResult200ResponseItemsInnerProperties Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetSearchResult200ResponseItemsInnerProperties extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getSearchResult_200_response_items_inner_properties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'variantItemsNum' => 'string',
        'numReviews' => 'string',
        'categories' => 'string[]',
        'variants' => '\Walmart\Models\MP\US\Items\GetSearchResult200ResponseItemsInnerPropertiesVariants',
        'nextDayEligible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'variantItemsNum' => null,
        'numReviews' => null,
        'categories' => null,
        'variants' => null,
        'nextDayEligible' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'variantItemsNum' => false,
        'numReviews' => false,
        'categories' => false,
        'variants' => false,
        'nextDayEligible' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'variantItemsNum' => 'variant_items_num',
        'numReviews' => 'num_reviews',
        'categories' => 'categories',
        'variants' => 'variants',
        'nextDayEligible' => 'next_day_eligible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'variantItemsNum' => 'setVariantItemsNum',
        'numReviews' => 'setNumReviews',
        'categories' => 'setCategories',
        'variants' => 'setVariants',
        'nextDayEligible' => 'setNextDayEligible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'variantItemsNum' => 'getVariantItemsNum',
        'numReviews' => 'getNumReviews',
        'categories' => 'getCategories',
        'variants' => 'getVariants',
        'nextDayEligible' => 'getNextDayEligible'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('variantItemsNum', $data ?? [], null);
        $this->setIfExists('numReviews', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('variants', $data ?? [], null);
        $this->setIfExists('nextDayEligible', $data ?? [], null);
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
     * Gets variantItemsNum
     *
     * @return string|null
    
     */
    public function getVariantItemsNum()
    {
        return $this->container['variantItemsNum'];
    }

    /**
     * Sets variantItemsNum
     *
     * @param string|null $variantItemsNum variantItemsNum
     *
     * @return self
    
     */
    public function setVariantItemsNum($variantItemsNum)
    {
        if (is_null($variantItemsNum)) {
            throw new \InvalidArgumentException('non-nullable variantItemsNum cannot be null');
        }

        $this->container['variantItemsNum'] = $variantItemsNum;
        return $this;
    }

    /**
     * Gets numReviews
     *
     * @return string|null
    
     */
    public function getNumReviews()
    {
        return $this->container['numReviews'];
    }

    /**
     * Sets numReviews
     *
     * @param string|null $numReviews numReviews
     *
     * @return self
    
     */
    public function setNumReviews($numReviews)
    {
        if (is_null($numReviews)) {
            throw new \InvalidArgumentException('non-nullable numReviews cannot be null');
        }

        $this->container['numReviews'] = $numReviews;
        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]|null
    
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[]|null $categories categories
     *
     * @return self
    
     */
    public function setCategories($categories)
    {
        if (is_null($categories)) {
            throw new \InvalidArgumentException('non-nullable categories cannot be null');
        }

        $this->container['categories'] = $categories;
        return $this;
    }

    /**
     * Gets variants
     *
     * @return \Walmart\Models\MP\US\Items\GetSearchResult200ResponseItemsInnerPropertiesVariants|null
    
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param \Walmart\Models\MP\US\Items\GetSearchResult200ResponseItemsInnerPropertiesVariants|null $variants variants
     *
     * @return self
    
     */
    public function setVariants($variants)
    {
        if (is_null($variants)) {
            throw new \InvalidArgumentException('non-nullable variants cannot be null');
        }

        $this->container['variants'] = $variants;
        return $this;
    }

    /**
     * Gets nextDayEligible
     *
     * @return bool|null
    
     */
    public function getNextDayEligible()
    {
        return $this->container['nextDayEligible'];
    }

    /**
     * Sets nextDayEligible
     *
     * @param bool|null $nextDayEligible nextDayEligible
     *
     * @return self
    
     */
    public function setNextDayEligible($nextDayEligible)
    {
        if (is_null($nextDayEligible)) {
            throw new \InvalidArgumentException('non-nullable nextDayEligible cannot be null');
        }

        $this->container['nextDayEligible'] = $nextDayEligible;
        return $this;
    }
}


