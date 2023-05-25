<?php

/**
 * ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsPostPurchaseCancellations
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
 * Insights Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Insights;
use Walmart\Models\BaseModel;

/**
 * ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsPostPurchaseCancellations Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsPostPurchaseCancellations extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'itemsDetailsForListing_200_response_payload_inner_scoreDetails_postPurchase_cancellations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'defectedOrder' => 'int',
        'totalOrder' => 'int',
        'rate' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'defectedOrder' => 'int32',
        'totalOrder' => 'int32',
        'rate' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'defectedOrder' => false,
        'totalOrder' => false,
        'rate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'defectedOrder' => 'defectedOrder',
        'totalOrder' => 'totalOrder',
        'rate' => 'rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'defectedOrder' => 'setDefectedOrder',
        'totalOrder' => 'setTotalOrder',
        'rate' => 'setRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'defectedOrder' => 'getDefectedOrder',
        'totalOrder' => 'getTotalOrder',
        'rate' => 'getRate'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('defectedOrder', $data ?? [], null);
        $this->setIfExists('totalOrder', $data ?? [], null);
        $this->setIfExists('rate', $data ?? [], null);
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
     * Gets defectedOrder
     *
     * @return int|null
    
     */
    public function getDefectedOrder()
    {
        return $this->container['defectedOrder'];
    }

    /**
     * Sets defectedOrder
     *
     * @param int|null $defectedOrder defectedOrder
     *
     * @return self
    
     */
    public function setDefectedOrder($defectedOrder)
    {
        if (is_null($defectedOrder)) {
            throw new \InvalidArgumentException('non-nullable defectedOrder cannot be null');
        }

        $this->container['defectedOrder'] = $defectedOrder;
        return $this;
    }

    /**
     * Gets totalOrder
     *
     * @return int|null
    
     */
    public function getTotalOrder()
    {
        return $this->container['totalOrder'];
    }

    /**
     * Sets totalOrder
     *
     * @param int|null $totalOrder totalOrder
     *
     * @return self
    
     */
    public function setTotalOrder($totalOrder)
    {
        if (is_null($totalOrder)) {
            throw new \InvalidArgumentException('non-nullable totalOrder cannot be null');
        }

        $this->container['totalOrder'] = $totalOrder;
        return $this;
    }

    /**
     * Gets rate
     *
     * @return int|null
    
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param int|null $rate rate
     *
     * @return self
    
     */
    public function setRate($rate)
    {
        if (is_null($rate)) {
            throw new \InvalidArgumentException('non-nullable rate cannot be null');
        }

        $this->container['rate'] = $rate;
        return $this;
    }
}


