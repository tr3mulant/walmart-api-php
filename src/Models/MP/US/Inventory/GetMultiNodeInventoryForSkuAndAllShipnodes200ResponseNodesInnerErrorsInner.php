<?php

/**
 * GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerErrorsInner
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
 * Inventory Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Inventory;
use Walmart\Models\BaseModel;

/**
 * GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerErrorsInner Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerErrorsInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getMultiNodeInventoryForSkuAndAllShipnodes_200_response_nodes_inner_errors_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'code' => 'string',
        'field' => 'string',
        'description' => 'string',
        'info' => 'string',
        'severity' => 'string',
        'category' => 'string',
        'causes' => '\Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerErrorsInnerCausesInner[]',
        'errorIdentifiers' => 'array<string,object>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'code' => null,
        'field' => null,
        'description' => null,
        'info' => null,
        'severity' => null,
        'category' => null,
        'causes' => null,
        'errorIdentifiers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
        'field' => false,
        'description' => false,
        'info' => false,
        'severity' => false,
        'category' => false,
        'causes' => false,
        'errorIdentifiers' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'code' => 'code',
        'field' => 'field',
        'description' => 'description',
        'info' => 'info',
        'severity' => 'severity',
        'category' => 'category',
        'causes' => 'causes',
        'errorIdentifiers' => 'errorIdentifiers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'code' => 'setCode',
        'field' => 'setField',
        'description' => 'setDescription',
        'info' => 'setInfo',
        'severity' => 'setSeverity',
        'category' => 'setCategory',
        'causes' => 'setCauses',
        'errorIdentifiers' => 'setErrorIdentifiers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'code' => 'getCode',
        'field' => 'getField',
        'description' => 'getDescription',
        'info' => 'getInfo',
        'severity' => 'getSeverity',
        'category' => 'getCategory',
        'causes' => 'getCauses',
        'errorIdentifiers' => 'getErrorIdentifiers'
    ];
    public const SEVERITY_INFO = 'INFO';

    public const SEVERITY_WARN = 'WARN';

    public const SEVERITY_ERROR = 'ERROR';

    public const CATEGORY_APPLICATION = 'APPLICATION';

    public const CATEGORY_SYSTEM = 'SYSTEM';

    public const CATEGORY_REQUEST = 'REQUEST';

    public const CATEGORY_DATA = 'DATA';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_INFO,
            self::SEVERITY_WARN,
            self::SEVERITY_ERROR,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_APPLICATION,
            self::CATEGORY_SYSTEM,
            self::CATEGORY_REQUEST,
            self::CATEGORY_DATA,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('field', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('info', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('causes', $data ?? [], null);
        $this->setIfExists('errorIdentifiers', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        $allowedValues = $this->getSeverityAllowableValues();
        if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'severity', must be one of '%s'",
                $this->container['severity'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'category', must be one of '%s'",
                $this->container['category'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }
    /**
     * Gets code
     *
     * @return string
    
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return self
    
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }

        $this->container['code'] = $code;
        return $this;
    }

    /**
     * Gets field
     *
     * @return string|null
    
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string|null $field field
     *
     * @return self
    
     */
    public function setField($field)
    {
        if (is_null($field)) {
            throw new \InvalidArgumentException('non-nullable field cannot be null');
        }

        $this->container['field'] = $field;
        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
    
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
    
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;
        return $this;
    }

    /**
     * Gets info
     *
     * @return string|null
    
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param string|null $info info
     *
     * @return self
    
     */
    public function setInfo($info)
    {
        if (is_null($info)) {
            throw new \InvalidArgumentException('non-nullable info cannot be null');
        }

        $this->container['info'] = $info;
        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
    
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
     *
     * @return self
    
     */
    public function setSeverity($severity)
    {
        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }
        $allowedValues = $this->getSeverityAllowableValues();
        if (!in_array($severity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'severity', must be one of '%s'",
                    $severity,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['severity'] = $severity;
        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
    
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return self
    
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'category', must be one of '%s'",
                    $category,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['category'] = $category;
        return $this;
    }

    /**
     * Gets causes
     *
     * @return \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerErrorsInnerCausesInner[]|null
    
     */
    public function getCauses()
    {
        return $this->container['causes'];
    }

    /**
     * Sets causes
     *
     * @param \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerErrorsInnerCausesInner[]|null $causes causes
     *
     * @return self
    
     */
    public function setCauses($causes)
    {
        if (is_null($causes)) {
            throw new \InvalidArgumentException('non-nullable causes cannot be null');
        }

        $this->container['causes'] = $causes;
        return $this;
    }

    /**
     * Gets errorIdentifiers
     *
     * @return array<string,object>|null
    
     */
    public function getErrorIdentifiers()
    {
        return $this->container['errorIdentifiers'];
    }

    /**
     * Sets errorIdentifiers
     *
     * @param array<string,object>|null $errorIdentifiers errorIdentifiers
     *
     * @return self
    
     */
    public function setErrorIdentifiers($errorIdentifiers)
    {
        if (is_null($errorIdentifiers)) {
            throw new \InvalidArgumentException('non-nullable errorIdentifiers cannot be null');
        }

        $this->container['errorIdentifiers'] = $errorIdentifiers;
        return $this;
    }
}


