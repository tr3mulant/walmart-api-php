<?php

/**
 * GetTokenDetail200Response
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
 * Authentication & Authorization Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Authentication;
use Walmart\Model\BaseModel;

use Walmart\Traits\HasResponseHeaders;

/**
 * GetTokenDetail200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetTokenDetail200Response extends BaseModel
{
    use HasResponseHeaders;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getTokenDetail_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'expireAt' => 'string',
        'issuedAt' => 'string',
        'isValid' => 'bool',
        'isChannelMatch' => 'bool',
        'scopes' => '\Walmart\Models\MP\US\Authentication\GetTokenDetail200ResponseScopes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'expireAt' => null,
        'issuedAt' => null,
        'isValid' => null,
        'isChannelMatch' => null,
        'scopes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'expireAt' => false,
        'issuedAt' => false,
        'isValid' => false,
        'isChannelMatch' => false,
        'scopes' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'expireAt' => 'expire_at',
        'issuedAt' => 'issued_at',
        'isValid' => 'is_valid',
        'isChannelMatch' => 'is_channel_match',
        'scopes' => 'scopes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'expireAt' => 'setExpireAt',
        'issuedAt' => 'setIssuedAt',
        'isValid' => 'setIsValid',
        'isChannelMatch' => 'setIsChannelMatch',
        'scopes' => 'setScopes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'expireAt' => 'getExpireAt',
        'issuedAt' => 'getIssuedAt',
        'isValid' => 'getIsValid',
        'isChannelMatch' => 'getIsChannelMatch',
        'scopes' => 'getScopes'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('expireAt', $data ?? [], null);
        $this->setIfExists('issuedAt', $data ?? [], null);
        $this->setIfExists('isValid', $data ?? [], null);
        $this->setIfExists('isChannelMatch', $data ?? [], null);
        $this->setIfExists('scopes', $data ?? [], null);
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
     * Gets expireAt
     *
     * @return string|null
    
     */
    public function getExpireAt()
    {
        return $this->container['expireAt'];
    }

    /**
     * Sets expireAt
     *
     * @param string|null $expireAt The timestamp when the token expires
     *
     * @return self
    
     */
    public function setExpireAt($expireAt)
    {
        if (is_null($expireAt)) {
            throw new \InvalidArgumentException('non-nullable expireAt cannot be null');
        }

        $this->container['expireAt'] = $expireAt;
        return $this;
    }

    /**
     * Gets issuedAt
     *
     * @return string|null
    
     */
    public function getIssuedAt()
    {
        return $this->container['issuedAt'];
    }

    /**
     * Sets issuedAt
     *
     * @param string|null $issuedAt The timestamp when the token is issued
     *
     * @return self
    
     */
    public function setIssuedAt($issuedAt)
    {
        if (is_null($issuedAt)) {
            throw new \InvalidArgumentException('non-nullable issuedAt cannot be null');
        }

        $this->container['issuedAt'] = $issuedAt;
        return $this;
    }

    /**
     * Gets isValid
     *
     * @return bool|null
    
     */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
     * Sets isValid
     *
     * @param bool|null $isValid Whether the token is valid; boolean value of true or false
     *
     * @return self
    
     */
    public function setIsValid($isValid)
    {
        if (is_null($isValid)) {
            throw new \InvalidArgumentException('non-nullable isValid cannot be null');
        }

        $this->container['isValid'] = $isValid;
        return $this;
    }

    /**
     * Gets isChannelMatch
     *
     * @return bool|null
    
     */
    public function getIsChannelMatch()
    {
        return $this->container['isChannelMatch'];
    }

    /**
     * Sets isChannelMatch
     *
     * @param bool|null $isChannelMatch Whether the keys Seller used are correctly associated
     *
     * @return self
    
     */
    public function setIsChannelMatch($isChannelMatch)
    {
        if (is_null($isChannelMatch)) {
            throw new \InvalidArgumentException('non-nullable isChannelMatch cannot be null');
        }

        $this->container['isChannelMatch'] = $isChannelMatch;
        return $this;
    }

    /**
     * Gets scopes
     *
     * @return \Walmart\Models\MP\US\Authentication\GetTokenDetail200ResponseScopes|null
    
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param \Walmart\Models\MP\US\Authentication\GetTokenDetail200ResponseScopes|null $scopes scopes
     *
     * @return self
    
     */
    public function setScopes($scopes)
    {
        if (is_null($scopes)) {
            throw new \InvalidArgumentException('non-nullable scopes cannot be null');
        }

        $this->container['scopes'] = $scopes;
        return $this;
    }
}


