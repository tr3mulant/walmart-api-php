<?php

/**
 * DeleteExceptionsRequestRules
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
 * DeleteExceptionsRequestRules Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class DeleteExceptionsRequestRules extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'deleteExceptions_request_rules';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'skus' => '\Walmart\Models\MP\US\Rules\DeleteExceptionsRequestRulesSkusInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'skus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'skus' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'skus' => 'skus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'skus' => 'setSkus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'skus' => 'getSkus'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('skus', $data ?? [], null);
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
     * Gets skus
     *
     * @return \Walmart\Models\MP\US\Rules\DeleteExceptionsRequestRulesSkusInner[]|null
    
     */
    public function getSkus()
    {
        return $this->container['skus'];
    }

    /**
     * Sets skus
     *
     * @param \Walmart\Models\MP\US\Rules\DeleteExceptionsRequestRulesSkusInner[]|null $skus skus
     *
     * @return self
    
     */
    public function setSkus($skus)
    {
        if (is_null($skus)) {
            throw new \InvalidArgumentException('non-nullable skus cannot be null');
        }

        $this->container['skus'] = $skus;
        return $this;
    }
}


