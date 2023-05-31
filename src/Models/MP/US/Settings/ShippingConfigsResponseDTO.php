<?php

/**
 * ShippingConfigsResponseDTO
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Models\BaseModel;

/**
 * ShippingConfigsResponseDTO Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingConfigsResponseDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingConfigsResponseDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'partner' => '\Walmart\Models\MP\US\Settings\PartnerInfoDTO',
        'configurations' => '\Walmart\Models\MP\US\Settings\ShippingConfigsResponseDTOConfigurationsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'partner' => null,
        'configurations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'partner' => false,
        'configurations' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'partner' => 'partner',
        'configurations' => 'configurations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'partner' => 'setPartner',
        'configurations' => 'setConfigurations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'partner' => 'getPartner',
        'configurations' => 'getConfigurations'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('partner', $data ?? [], null);
        $this->setIfExists('configurations', $data ?? [], null);
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
     * Gets partner
     *
     * @return \Walmart\Models\MP\US\Settings\PartnerInfoDTO|null
    
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param \Walmart\Models\MP\US\Settings\PartnerInfoDTO|null $partner partner
     *
     * @return self
    
     */
    public function setPartner($partner)
    {
        if (is_null($partner)) {
            throw new \InvalidArgumentException('non-nullable partner cannot be null');
        }

        $this->container['partner'] = $partner;
        return $this;
    }

    /**
     * Gets configurations
     *
     * @return \Walmart\Models\MP\US\Settings\ShippingConfigsResponseDTOConfigurationsInner[]|null
    
     */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
     * Sets configurations
     *
     * @param \Walmart\Models\MP\US\Settings\ShippingConfigsResponseDTOConfigurationsInner[]|null $configurations List of seller configurations like Lag Time
     *
     * @return self
    
     */
    public function setConfigurations($configurations)
    {
        if (is_null($configurations)) {
            throw new \InvalidArgumentException('non-nullable configurations cannot be null');
        }

        $this->container['configurations'] = $configurations;
        return $this;
    }
}


