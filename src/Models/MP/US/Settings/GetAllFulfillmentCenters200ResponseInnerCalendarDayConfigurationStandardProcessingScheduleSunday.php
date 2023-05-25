<?php

/**
 * GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationStandardProcessingScheduleSunday
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
 * GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationStandardProcessingScheduleSunday Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationStandardProcessingScheduleSunday extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAllFulfillmentCenters_200_response_inner_calendarDayConfiguration_standardProcessingSchedule_sunday';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'isWorkingDay' => 'bool',
        'cutOffTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'isWorkingDay' => null,
        'cutOffTime' => 'HH:mm'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'isWorkingDay' => false,
        'cutOffTime' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'isWorkingDay' => 'isWorkingDay',
        'cutOffTime' => 'cutOffTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'isWorkingDay' => 'setIsWorkingDay',
        'cutOffTime' => 'setCutOffTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'isWorkingDay' => 'getIsWorkingDay',
        'cutOffTime' => 'getCutOffTime'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('isWorkingDay', $data ?? [], null);
        $this->setIfExists('cutOffTime', $data ?? [], null);
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
     * Gets isWorkingDay
     *
     * @return bool|null
    
     */
    public function getIsWorkingDay()
    {
        return $this->container['isWorkingDay'];
    }

    /**
     * Sets isWorkingDay
     *
     * @param bool|null $isWorkingDay Flag to specify if shipNode is operational on the specified day of each week. Allowed values are true or false.
     *
     * @return self
    
     */
    public function setIsWorkingDay($isWorkingDay)
    {
        if (is_null($isWorkingDay)) {
            throw new \InvalidArgumentException('non-nullable isWorkingDay cannot be null');
        }

        $this->container['isWorkingDay'] = $isWorkingDay;
        return $this;
    }

    /**
     * Gets cutOffTime
     *
     * @return string|null
    
     */
    public function getCutOffTime()
    {
        return $this->container['cutOffTime'];
    }

    /**
     * Sets cutOffTime
     *
     * @param string|null $cutOffTime Order processing cutoff time. Please note that cutoff time is respective of the seller’s time zone. Example: '09:30'(HH:mm)
     *
     * @return self
    
     */
    public function setCutOffTime($cutOffTime)
    {
        if (is_null($cutOffTime)) {
            throw new \InvalidArgumentException('non-nullable cutOffTime cannot be null');
        }

        $this->container['cutOffTime'] = $cutOffTime;
        return $this;
    }
}


