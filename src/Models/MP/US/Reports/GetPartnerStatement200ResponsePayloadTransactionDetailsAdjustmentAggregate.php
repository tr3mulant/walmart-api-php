<?php

/**
 * GetPartnerStatement200ResponsePayloadTransactionDetailsAdjustmentAggregate
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
 * Pregenerated Reports retiring on June 30, 2022 :
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Reports;
use Walmart\Models\BaseModel;

/**
 * GetPartnerStatement200ResponsePayloadTransactionDetailsAdjustmentAggregate Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetPartnerStatement200ResponsePayloadTransactionDetailsAdjustmentAggregate extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getPartnerStatement_200_response_payload_transactionDetails_adjustmentAggregate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'netPayable' => 'float',
        'disputeSettlement' => 'float',
        'returnShipServCharge' => 'float',
        'returnHandlingServCharge' => 'float',
        'fwdShippingServiceFee' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'netPayable' => null,
        'disputeSettlement' => null,
        'returnShipServCharge' => null,
        'returnHandlingServCharge' => null,
        'fwdShippingServiceFee' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'netPayable' => false,
        'disputeSettlement' => false,
        'returnShipServCharge' => false,
        'returnHandlingServCharge' => false,
        'fwdShippingServiceFee' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'netPayable' => 'netPayable',
        'disputeSettlement' => 'disputeSettlement',
        'returnShipServCharge' => 'returnShipServCharge',
        'returnHandlingServCharge' => 'returnHandlingServCharge',
        'fwdShippingServiceFee' => 'fwdShippingServiceFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'netPayable' => 'setNetPayable',
        'disputeSettlement' => 'setDisputeSettlement',
        'returnShipServCharge' => 'setReturnShipServCharge',
        'returnHandlingServCharge' => 'setReturnHandlingServCharge',
        'fwdShippingServiceFee' => 'setFwdShippingServiceFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'netPayable' => 'getNetPayable',
        'disputeSettlement' => 'getDisputeSettlement',
        'returnShipServCharge' => 'getReturnShipServCharge',
        'returnHandlingServCharge' => 'getReturnHandlingServCharge',
        'fwdShippingServiceFee' => 'getFwdShippingServiceFee'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('netPayable', $data ?? [], null);
        $this->setIfExists('disputeSettlement', $data ?? [], null);
        $this->setIfExists('returnShipServCharge', $data ?? [], null);
        $this->setIfExists('returnHandlingServCharge', $data ?? [], null);
        $this->setIfExists('fwdShippingServiceFee', $data ?? [], null);
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
     * Gets netPayable
     *
     * @return float|null
    
     */
    public function getNetPayable()
    {
        return $this->container['netPayable'];
    }

    /**
     * Sets netPayable
     *
     * @param float|null $netPayable netPayable
     *
     * @return self
    
     */
    public function setNetPayable($netPayable)
    {
        if (is_null($netPayable)) {
            throw new \InvalidArgumentException('non-nullable netPayable cannot be null');
        }

        $this->container['netPayable'] = $netPayable;
        return $this;
    }

    /**
     * Gets disputeSettlement
     *
     * @return float|null
    
     */
    public function getDisputeSettlement()
    {
        return $this->container['disputeSettlement'];
    }

    /**
     * Sets disputeSettlement
     *
     * @param float|null $disputeSettlement disputeSettlement
     *
     * @return self
    
     */
    public function setDisputeSettlement($disputeSettlement)
    {
        if (is_null($disputeSettlement)) {
            throw new \InvalidArgumentException('non-nullable disputeSettlement cannot be null');
        }

        $this->container['disputeSettlement'] = $disputeSettlement;
        return $this;
    }

    /**
     * Gets returnShipServCharge
     *
     * @return float|null
    
     */
    public function getReturnShipServCharge()
    {
        return $this->container['returnShipServCharge'];
    }

    /**
     * Sets returnShipServCharge
     *
     * @param float|null $returnShipServCharge returnShipServCharge
     *
     * @return self
    
     */
    public function setReturnShipServCharge($returnShipServCharge)
    {
        if (is_null($returnShipServCharge)) {
            throw new \InvalidArgumentException('non-nullable returnShipServCharge cannot be null');
        }

        $this->container['returnShipServCharge'] = $returnShipServCharge;
        return $this;
    }

    /**
     * Gets returnHandlingServCharge
     *
     * @return float|null
    
     */
    public function getReturnHandlingServCharge()
    {
        return $this->container['returnHandlingServCharge'];
    }

    /**
     * Sets returnHandlingServCharge
     *
     * @param float|null $returnHandlingServCharge returnHandlingServCharge
     *
     * @return self
    
     */
    public function setReturnHandlingServCharge($returnHandlingServCharge)
    {
        if (is_null($returnHandlingServCharge)) {
            throw new \InvalidArgumentException('non-nullable returnHandlingServCharge cannot be null');
        }

        $this->container['returnHandlingServCharge'] = $returnHandlingServCharge;
        return $this;
    }

    /**
     * Gets fwdShippingServiceFee
     *
     * @return float|null
    
     */
    public function getFwdShippingServiceFee()
    {
        return $this->container['fwdShippingServiceFee'];
    }

    /**
     * Sets fwdShippingServiceFee
     *
     * @param float|null $fwdShippingServiceFee fwdShippingServiceFee
     *
     * @return self
    
     */
    public function setFwdShippingServiceFee($fwdShippingServiceFee)
    {
        if (is_null($fwdShippingServiceFee)) {
            throw new \InvalidArgumentException('non-nullable fwdShippingServiceFee cannot be null');
        }

        $this->container['fwdShippingServiceFee'] = $fwdShippingServiceFee;
        return $this;
    }
}


