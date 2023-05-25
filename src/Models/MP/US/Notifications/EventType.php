<?php

/**
 * EventType
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
 * Notifications Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Notifications;
use Walmart\Models\BaseModel;

/**
 * EventType Class Doc Comment
 *
 * @category Class

 * @description List of event types

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class EventType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EventType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'resourceName' => 'string',
        'eventType' => 'string',
        'eventVersion' => 'string',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'resourceName' => null,
        'eventType' => null,
        'eventVersion' => null,
        'description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'resourceName' => false,
        'eventType' => false,
        'eventVersion' => false,
        'description' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'resourceName' => 'resourceName',
        'eventType' => 'eventType',
        'eventVersion' => 'eventVersion',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'resourceName' => 'setResourceName',
        'eventType' => 'setEventType',
        'eventVersion' => 'setEventVersion',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'resourceName' => 'getResourceName',
        'eventType' => 'getEventType',
        'eventVersion' => 'getEventVersion',
        'description' => 'getDescription'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('resourceName', $data ?? [], null);
        $this->setIfExists('eventType', $data ?? [], null);
        $this->setIfExists('eventVersion', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
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
     * Gets resourceName
     *
     * @return string|null
    
     */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
     * Sets resourceName
     *
     * @param string|null $resourceName Delegated access scope that event type is mapped to.
     *
     * @return self
    
     */
    public function setResourceName($resourceName)
    {
        if (is_null($resourceName)) {
            throw new \InvalidArgumentException('non-nullable resourceName cannot be null');
        }

        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
     * Gets eventType
     *
     * @return string|null
    
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param string|null $eventType Event that you want to subscribe to.
     *
     * @return self
    
     */
    public function setEventType($eventType)
    {
        if (is_null($eventType)) {
            throw new \InvalidArgumentException('non-nullable eventType cannot be null');
        }

        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
     * Gets eventVersion
     *
     * @return string|null
    
     */
    public function getEventVersion()
    {
        return $this->container['eventVersion'];
    }

    /**
     * Sets eventVersion
     *
     * @param string|null $eventVersion Version of the specific event type
     *
     * @return self
    
     */
    public function setEventVersion($eventVersion)
    {
        if (is_null($eventVersion)) {
            throw new \InvalidArgumentException('non-nullable eventVersion cannot be null');
        }

        $this->container['eventVersion'] = $eventVersion;
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
     * @param string|null $description Description of the specific event type
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
}


