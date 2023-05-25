<?php

/**
 * SubCategory
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
 * SubCategory Class Doc Comment
 *
 * @category Class

 * @description Specific kind of category

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class SubCategory extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SubCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'subCategoryName' => 'string',
        'subCategoryId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'subCategoryName' => null,
        'subCategoryId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'subCategoryName' => false,
        'subCategoryId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'subCategoryName' => 'subCategoryName',
        'subCategoryId' => 'subCategoryId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'subCategoryName' => 'setSubCategoryName',
        'subCategoryId' => 'setSubCategoryId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'subCategoryName' => 'getSubCategoryName',
        'subCategoryId' => 'getSubCategoryId'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('subCategoryName', $data ?? [], null);
        $this->setIfExists('subCategoryId', $data ?? [], null);
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
     * Gets subCategoryName
     *
     * @return string|null
    
     */
    public function getSubCategoryName()
    {
        return $this->container['subCategoryName'];
    }

    /**
     * Sets subCategoryName
     *
     * @param string|null $subCategoryName Name of specific kind of category
     *
     * @return self
    
     */
    public function setSubCategoryName($subCategoryName)
    {
        if (is_null($subCategoryName)) {
            throw new \InvalidArgumentException('non-nullable subCategoryName cannot be null');
        }

        $this->container['subCategoryName'] = $subCategoryName;
        return $this;
    }

    /**
     * Gets subCategoryId
     *
     * @return string|null
    
     */
    public function getSubCategoryId()
    {
        return $this->container['subCategoryId'];
    }

    /**
     * Sets subCategoryId
     *
     * @param string|null $subCategoryId ID of specific kind of category
     *
     * @return self
    
     */
    public function setSubCategoryId($subCategoryId)
    {
        if (is_null($subCategoryId)) {
            throw new \InvalidArgumentException('non-nullable subCategoryId cannot be null');
        }

        $this->container['subCategoryId'] = $subCategoryId;
        return $this;
    }
}


