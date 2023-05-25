<?php

/**
 * GetRepricerFeed200Response
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
 * Price Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Prices;
use Walmart\Models\BaseModel;

/**
 * GetRepricerFeed200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetRepricerFeed200Response extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getRepricerFeed_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'feedId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'feedId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feedId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'feedId' => 'feedId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'feedId' => 'setFeedId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'feedId' => 'getFeedId'
    ];
    /**
     * Array of response headers returned by the API
     *
     * @var string[][]
     */
    protected array $headers = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('feedId', $data ?? [], null);
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
     * Gets API response headers (only relevant to response models)
     *
     * @return string[][]
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string[]] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }


    /**
     * Gets feedId
     *
     * @return string|null
    
     */
    public function getFeedId()
    {
        return $this->container['feedId'];
    }

    /**
     * Sets feedId
     *
     * @param string|null $feedId feedId
     *
     * @return self
    
     */
    public function setFeedId($feedId)
    {
        if (is_null($feedId)) {
            throw new \InvalidArgumentException('non-nullable feedId cannot be null');
        }

        $this->container['feedId'] = $feedId;
        return $this;
    }
}


