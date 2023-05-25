<?php

/**
 * GetProSellerBadgeInfo200Response
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
 * GetProSellerBadgeInfo200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetProSellerBadgeInfo200Response extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getProSellerBadgeInfo_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'hasBadge' => 'bool',
        'isEligible' => 'bool',
        'badgedSince' => '\DateTime',
        'isProhibited' => 'bool',
        'badgeStatus' => 'string',
        'meetsCriteria' => '\Walmart\Models\MP\US\Insights\GetProSellerBadgeInfo200ResponseMeetsCriteria',
        'criteriaData' => '\Walmart\Models\MP\US\Insights\GetProSellerBadgeInfo200ResponseCriteriaData',
        'recommendations' => '\Walmart\Models\MP\US\Insights\GetProSellerBadgeInfo200ResponseRecommendations'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'hasBadge' => null,
        'isEligible' => null,
        'badgedSince' => 'date-time',
        'isProhibited' => null,
        'badgeStatus' => null,
        'meetsCriteria' => null,
        'criteriaData' => null,
        'recommendations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'hasBadge' => false,
        'isEligible' => false,
        'badgedSince' => false,
        'isProhibited' => false,
        'badgeStatus' => false,
        'meetsCriteria' => false,
        'criteriaData' => false,
        'recommendations' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'hasBadge' => 'hasBadge',
        'isEligible' => 'isEligible',
        'badgedSince' => 'badgedSince',
        'isProhibited' => 'isProhibited',
        'badgeStatus' => 'badgeStatus',
        'meetsCriteria' => 'meetsCriteria',
        'criteriaData' => 'criteriaData',
        'recommendations' => 'recommendations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'hasBadge' => 'setHasBadge',
        'isEligible' => 'setIsEligible',
        'badgedSince' => 'setBadgedSince',
        'isProhibited' => 'setIsProhibited',
        'badgeStatus' => 'setBadgeStatus',
        'meetsCriteria' => 'setMeetsCriteria',
        'criteriaData' => 'setCriteriaData',
        'recommendations' => 'setRecommendations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'hasBadge' => 'getHasBadge',
        'isEligible' => 'getIsEligible',
        'badgedSince' => 'getBadgedSince',
        'isProhibited' => 'getIsProhibited',
        'badgeStatus' => 'getBadgeStatus',
        'meetsCriteria' => 'getMeetsCriteria',
        'criteriaData' => 'getCriteriaData',
        'recommendations' => 'getRecommendations'
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
        $this->setIfExists('hasBadge', $data ?? [], null);
        $this->setIfExists('isEligible', $data ?? [], null);
        $this->setIfExists('badgedSince', $data ?? [], null);
        $this->setIfExists('isProhibited', $data ?? [], null);
        $this->setIfExists('badgeStatus', $data ?? [], null);
        $this->setIfExists('meetsCriteria', $data ?? [], null);
        $this->setIfExists('criteriaData', $data ?? [], null);
        $this->setIfExists('recommendations', $data ?? [], null);
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
     * Gets hasBadge
     *
     * @return bool|null
    
     */
    public function getHasBadge()
    {
        return $this->container['hasBadge'];
    }

    /**
     * Sets hasBadge
     *
     * @param bool|null $hasBadge Specifies if the seller has the badge
     *
     * @return self
    
     */
    public function setHasBadge($hasBadge)
    {
        if (is_null($hasBadge)) {
            throw new \InvalidArgumentException('non-nullable hasBadge cannot be null');
        }

        $this->container['hasBadge'] = $hasBadge;
        return $this;
    }

    /**
     * Gets isEligible
     *
     * @return bool|null
    
     */
    public function getIsEligible()
    {
        return $this->container['isEligible'];
    }

    /**
     * Sets isEligible
     *
     * @param bool|null $isEligible Specifies if the seller is eligible for the badge in the next refresh
     *
     * @return self
    
     */
    public function setIsEligible($isEligible)
    {
        if (is_null($isEligible)) {
            throw new \InvalidArgumentException('non-nullable isEligible cannot be null');
        }

        $this->container['isEligible'] = $isEligible;
        return $this;
    }

    /**
     * Gets badgedSince
     *
     * @return \DateTime|null
    
     */
    public function getBadgedSince()
    {
        return $this->container['badgedSince'];
    }

    /**
     * Sets badgedSince
     *
     * @param \DateTime|null $badgedSince Specifies when the seller received their badge
     *
     * @return self
    
     */
    public function setBadgedSince($badgedSince)
    {
        if (is_null($badgedSince)) {
            throw new \InvalidArgumentException('non-nullable badgedSince cannot be null');
        }

        $this->container['badgedSince'] = $badgedSince;
        return $this;
    }

    /**
     * Gets isProhibited
     *
     * @return bool|null
    
     */
    public function getIsProhibited()
    {
        return $this->container['isProhibited'];
    }

    /**
     * Sets isProhibited
     *
     * @param bool|null $isProhibited Specifies whether the seller is prohibited from participating in the Pro Seller badge program.
     *
     * @return self
    
     */
    public function setIsProhibited($isProhibited)
    {
        if (is_null($isProhibited)) {
            throw new \InvalidArgumentException('non-nullable isProhibited cannot be null');
        }

        $this->container['isProhibited'] = $isProhibited;
        return $this;
    }

    /**
     * Gets badgeStatus
     *
     * @return string|null
    
     */
    public function getBadgeStatus()
    {
        return $this->container['badgeStatus'];
    }

    /**
     * Sets badgeStatus
     *
     * @param string|null $badgeStatus Specifies the seller's badge status in detail. The possible values are \"Become a Pro Seller\", \"You are a Pro Seller\", \"Pro Seller Badge at risk\", \"Eligible starting from YYYY-MM-DD\", and \"Not eligible for the Pro Seller Badge\"
     *
     * @return self
    
     */
    public function setBadgeStatus($badgeStatus)
    {
        if (is_null($badgeStatus)) {
            throw new \InvalidArgumentException('non-nullable badgeStatus cannot be null');
        }

        $this->container['badgeStatus'] = $badgeStatus;
        return $this;
    }

    /**
     * Gets meetsCriteria
     *
     * @return \Walmart\Models\MP\US\Insights\GetProSellerBadgeInfo200ResponseMeetsCriteria|null
    
     */
    public function getMeetsCriteria()
    {
        return $this->container['meetsCriteria'];
    }

    /**
     * Sets meetsCriteria
     *
     * @param \Walmart\Models\MP\US\Insights\GetProSellerBadgeInfo200ResponseMeetsCriteria|null $meetsCriteria meetsCriteria
     *
     * @return self
    
     */
    public function setMeetsCriteria($meetsCriteria)
    {
        if (is_null($meetsCriteria)) {
            throw new \InvalidArgumentException('non-nullable meetsCriteria cannot be null');
        }

        $this->container['meetsCriteria'] = $meetsCriteria;
        return $this;
    }

    /**
     * Gets criteriaData
     *
     * @return \Walmart\Models\MP\US\Insights\GetProSellerBadgeInfo200ResponseCriteriaData|null
    
     */
    public function getCriteriaData()
    {
        return $this->container['criteriaData'];
    }

    /**
     * Sets criteriaData
     *
     * @param \Walmart\Models\MP\US\Insights\GetProSellerBadgeInfo200ResponseCriteriaData|null $criteriaData criteriaData
     *
     * @return self
    
     */
    public function setCriteriaData($criteriaData)
    {
        if (is_null($criteriaData)) {
            throw new \InvalidArgumentException('non-nullable criteriaData cannot be null');
        }

        $this->container['criteriaData'] = $criteriaData;
        return $this;
    }

    /**
     * Gets recommendations
     *
     * @return \Walmart\Models\MP\US\Insights\GetProSellerBadgeInfo200ResponseRecommendations|null
    
     */
    public function getRecommendations()
    {
        return $this->container['recommendations'];
    }

    /**
     * Sets recommendations
     *
     * @param \Walmart\Models\MP\US\Insights\GetProSellerBadgeInfo200ResponseRecommendations|null $recommendations recommendations
     *
     * @return self
    
     */
    public function setRecommendations($recommendations)
    {
        if (is_null($recommendations)) {
            throw new \InvalidArgumentException('non-nullable recommendations cannot be null');
        }

        $this->container['recommendations'] = $recommendations;
        return $this;
    }
}


