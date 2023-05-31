<?php

/**
 * PreviewResponseDTO
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Models\BaseModel;

/**
 * PreviewResponseDTO Class Doc Comment
 *
 * @category Class

 * @description Preview

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PreviewResponseDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PreviewResponseDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipNode' => 'string',
        'isSortable' => 'bool',
        'isNonSortable' => 'bool',
        'nodeType' => 'string',
        'shipToAddress' => '\Walmart\Models\MP\US\Fulfillment\ShipToAddress',
        'totalNetTransferCharge' => 'float',
        'currencyUnit' => 'string',
        'shipmentItems' => '\Walmart\Models\MP\US\Fulfillment\PreviewShipmentItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipNode' => null,
        'isSortable' => null,
        'isNonSortable' => null,
        'nodeType' => null,
        'shipToAddress' => null,
        'totalNetTransferCharge' => null,
        'currencyUnit' => null,
        'shipmentItems' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipNode' => false,
        'isSortable' => false,
        'isNonSortable' => false,
        'nodeType' => false,
        'shipToAddress' => false,
        'totalNetTransferCharge' => false,
        'currencyUnit' => false,
        'shipmentItems' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipNode' => 'shipNode',
        'isSortable' => 'isSortable',
        'isNonSortable' => 'isNonSortable',
        'nodeType' => 'nodeType',
        'shipToAddress' => 'shipToAddress',
        'totalNetTransferCharge' => 'totalNetTransferCharge',
        'currencyUnit' => 'currencyUnit',
        'shipmentItems' => 'shipmentItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipNode' => 'setShipNode',
        'isSortable' => 'setIsSortable',
        'isNonSortable' => 'setIsNonSortable',
        'nodeType' => 'setNodeType',
        'shipToAddress' => 'setShipToAddress',
        'totalNetTransferCharge' => 'setTotalNetTransferCharge',
        'currencyUnit' => 'setCurrencyUnit',
        'shipmentItems' => 'setShipmentItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipNode' => 'getShipNode',
        'isSortable' => 'getIsSortable',
        'isNonSortable' => 'getIsNonSortable',
        'nodeType' => 'getNodeType',
        'shipToAddress' => 'getShipToAddress',
        'totalNetTransferCharge' => 'getTotalNetTransferCharge',
        'currencyUnit' => 'getCurrencyUnit',
        'shipmentItems' => 'getShipmentItems'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipNode', $data ?? [], null);
        $this->setIfExists('isSortable', $data ?? [], null);
        $this->setIfExists('isNonSortable', $data ?? [], null);
        $this->setIfExists('nodeType', $data ?? [], null);
        $this->setIfExists('shipToAddress', $data ?? [], null);
        $this->setIfExists('totalNetTransferCharge', $data ?? [], null);
        $this->setIfExists('currencyUnit', $data ?? [], null);
        $this->setIfExists('shipmentItems', $data ?? [], null);
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
     * Gets shipNode
     *
     * @return string|null
    
     */
    public function getShipNode()
    {
        return $this->container['shipNode'];
    }

    /**
     * Sets shipNode
     *
     * @param string|null $shipNode Ship Node
     *
     * @return self
    
     */
    public function setShipNode($shipNode)
    {
        if (is_null($shipNode)) {
            throw new \InvalidArgumentException('non-nullable shipNode cannot be null');
        }

        $this->container['shipNode'] = $shipNode;
        return $this;
    }

    /**
     * Gets isSortable
     *
     * @return bool|null
    
     */
    public function getIsSortable()
    {
        return $this->container['isSortable'];
    }

    /**
     * Sets isSortable
     *
     * @param bool|null $isSortable Flag indicating if the dimensions of the item make it sortable
     *
     * @return self
    
     */
    public function setIsSortable($isSortable)
    {
        if (is_null($isSortable)) {
            throw new \InvalidArgumentException('non-nullable isSortable cannot be null');
        }

        $this->container['isSortable'] = $isSortable;
        return $this;
    }

    /**
     * Gets isNonSortable
     *
     * @return bool|null
    
     */
    public function getIsNonSortable()
    {
        return $this->container['isNonSortable'];
    }

    /**
     * Sets isNonSortable
     *
     * @param bool|null $isNonSortable Flag indicating if the dimensions of the item make it non-sortable
     *
     * @return self
    
     */
    public function setIsNonSortable($isNonSortable)
    {
        if (is_null($isNonSortable)) {
            throw new \InvalidArgumentException('non-nullable isNonSortable cannot be null');
        }

        $this->container['isNonSortable'] = $isNonSortable;
        return $this;
    }

    /**
     * Gets nodeType
     *
     * @return string|null
    
     */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
     * Sets nodeType
     *
     * @param string|null $nodeType Node Type: FC/ICC
     *
     * @return self
    
     */
    public function setNodeType($nodeType)
    {
        if (is_null($nodeType)) {
            throw new \InvalidArgumentException('non-nullable nodeType cannot be null');
        }

        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
     * Gets shipToAddress
     *
     * @return \Walmart\Models\MP\US\Fulfillment\ShipToAddress|null
    
     */
    public function getShipToAddress()
    {
        return $this->container['shipToAddress'];
    }

    /**
     * Sets shipToAddress
     *
     * @param \Walmart\Models\MP\US\Fulfillment\ShipToAddress|null $shipToAddress shipToAddress
     *
     * @return self
    
     */
    public function setShipToAddress($shipToAddress)
    {
        if (is_null($shipToAddress)) {
            throw new \InvalidArgumentException('non-nullable shipToAddress cannot be null');
        }

        $this->container['shipToAddress'] = $shipToAddress;
        return $this;
    }

    /**
     * Gets totalNetTransferCharge
     *
     * @return float|null
    
     */
    public function getTotalNetTransferCharge()
    {
        return $this->container['totalNetTransferCharge'];
    }

    /**
     * Sets totalNetTransferCharge
     *
     * @param float|null $totalNetTransferCharge Total charge if you are using ITS.
     *
     * @return self
    
     */
    public function setTotalNetTransferCharge($totalNetTransferCharge)
    {
        if (is_null($totalNetTransferCharge)) {
            throw new \InvalidArgumentException('non-nullable totalNetTransferCharge cannot be null');
        }

        $this->container['totalNetTransferCharge'] = $totalNetTransferCharge;
        return $this;
    }

    /**
     * Gets currencyUnit
     *
     * @return string|null
    
     */
    public function getCurrencyUnit()
    {
        return $this->container['currencyUnit'];
    }

    /**
     * Sets currencyUnit
     *
     * @param string|null $currencyUnit Currency in which transfer charge is estimated
     *
     * @return self
    
     */
    public function setCurrencyUnit($currencyUnit)
    {
        if (is_null($currencyUnit)) {
            throw new \InvalidArgumentException('non-nullable currencyUnit cannot be null');
        }

        $this->container['currencyUnit'] = $currencyUnit;
        return $this;
    }

    /**
     * Gets shipmentItems
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PreviewShipmentItem[]|null
    
     */
    public function getShipmentItems()
    {
        return $this->container['shipmentItems'];
    }

    /**
     * Sets shipmentItems
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PreviewShipmentItem[]|null $shipmentItems Shipment items
     *
     * @return self
    
     */
    public function setShipmentItems($shipmentItems)
    {
        if (is_null($shipmentItems)) {
            throw new \InvalidArgumentException('non-nullable shipmentItems cannot be null');
        }

        $this->container['shipmentItems'] = $shipmentItems;
        return $this;
    }
}


