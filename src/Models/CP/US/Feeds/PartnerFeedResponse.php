<?php

/**
 * PartnerFeedResponse
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
 * Content Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\CP\US\Feeds;

use Walmart\Models\BaseModel;

/**
 * PartnerFeedResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PartnerFeedResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PartnerFeedResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'errors' => '\Walmart\Models\CP\US\Feeds\GatewayError[]',
        'feedId' => 'string',
        'feedStatus' => 'string',
        'ingestionErrors' => '\Walmart\Models\CP\US\Feeds\PartnerFeedResponseIngestionErrors',
        'itemsReceived' => 'int',
        'itemsSucceeded' => 'int',
        'itemsFailed' => 'int',
        'itemsProcessing' => 'int',
        'offset' => 'int',
        'limit' => 'int',
        'itemDetails' => '\Walmart\Models\CP\US\Feeds\PartnerFeedResponseItemDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'errors' => null,
        'feedId' => null,
        'feedStatus' => null,
        'ingestionErrors' => null,
        'itemsReceived' => 'int32',
        'itemsSucceeded' => 'int32',
        'itemsFailed' => 'int32',
        'itemsProcessing' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32',
        'itemDetails' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'errors' => false,
        'feedId' => false,
        'feedStatus' => false,
        'ingestionErrors' => false,
        'itemsReceived' => false,
        'itemsSucceeded' => false,
        'itemsFailed' => false,
        'itemsProcessing' => false,
        'offset' => false,
        'limit' => false,
        'itemDetails' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'errors' => 'errors',
        'feedId' => 'feedId',
        'feedStatus' => 'feedStatus',
        'ingestionErrors' => 'ingestionErrors',
        'itemsReceived' => 'itemsReceived',
        'itemsSucceeded' => 'itemsSucceeded',
        'itemsFailed' => 'itemsFailed',
        'itemsProcessing' => 'itemsProcessing',
        'offset' => 'offset',
        'limit' => 'limit',
        'itemDetails' => 'itemDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'errors' => 'setErrors',
        'feedId' => 'setFeedId',
        'feedStatus' => 'setFeedStatus',
        'ingestionErrors' => 'setIngestionErrors',
        'itemsReceived' => 'setItemsReceived',
        'itemsSucceeded' => 'setItemsSucceeded',
        'itemsFailed' => 'setItemsFailed',
        'itemsProcessing' => 'setItemsProcessing',
        'offset' => 'setOffset',
        'limit' => 'setLimit',
        'itemDetails' => 'setItemDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'errors' => 'getErrors',
        'feedId' => 'getFeedId',
        'feedStatus' => 'getFeedStatus',
        'ingestionErrors' => 'getIngestionErrors',
        'itemsReceived' => 'getItemsReceived',
        'itemsSucceeded' => 'getItemsSucceeded',
        'itemsFailed' => 'getItemsFailed',
        'itemsProcessing' => 'getItemsProcessing',
        'offset' => 'getOffset',
        'limit' => 'getLimit',
        'itemDetails' => 'getItemDetails'
    ];


    public const FEED_STATUS_RECEIVED = 'RECEIVED';

    public const FEED_STATUS_INPROGRESS = 'INPROGRESS';

    public const FEED_STATUS_PROCESSED = 'PROCESSED';

    public const FEED_STATUS_ERROR = 'ERROR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeedStatusAllowableValues()
    {
        return [
            self::FEED_STATUS_RECEIVED,
            self::FEED_STATUS_INPROGRESS,
            self::FEED_STATUS_PROCESSED,
            self::FEED_STATUS_ERROR,
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
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('feedId', $data ?? [], null);
        $this->setIfExists('feedStatus', $data ?? [], null);
        $this->setIfExists('ingestionErrors', $data ?? [], null);
        $this->setIfExists('itemsReceived', $data ?? [], null);
        $this->setIfExists('itemsSucceeded', $data ?? [], null);
        $this->setIfExists('itemsFailed', $data ?? [], null);
        $this->setIfExists('itemsProcessing', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('itemDetails', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFeedStatusAllowableValues();
        if (!is_null($this->container['feedStatus']) && !in_array($this->container['feedStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'feedStatus', must be one of '%s'",
                $this->container['feedStatus'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets errors
     *
     * @return \Walmart\Models\CP\US\Feeds\GatewayError[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Models\CP\US\Feeds\GatewayError[]|null $errors errors
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;
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
     * @param string|null $feedId A unique ID used for tracking the Feed File
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

    /**
     * Gets feedStatus
     *
     * @return string|null
    
     */
    public function getFeedStatus()
    {
        return $this->container['feedStatus'];
    }

    /**
     * Sets feedStatus
     *
     * @param string|null $feedStatus Can be one of the following: RECEIVED, INPROGRESS, PROCESSED, or ERROR
     *
     * @return self
    
     */
    public function setFeedStatus($feedStatus)
    {
        if (is_null($feedStatus)) {
            throw new \InvalidArgumentException('non-nullable feedStatus cannot be null');
        }
        $allowedValues = $this->getFeedStatusAllowableValues();
        if (!in_array($feedStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'feedStatus', must be one of '%s'",
                    $feedStatus,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['feedStatus'] = $feedStatus;
        return $this;
    }

    /**
     * Gets ingestionErrors
     *
     * @return \Walmart\Models\CP\US\Feeds\PartnerFeedResponseIngestionErrors|null
    
     */
    public function getIngestionErrors()
    {
        return $this->container['ingestionErrors'];
    }

    /**
     * Sets ingestionErrors
     *
     * @param \Walmart\Models\CP\US\Feeds\PartnerFeedResponseIngestionErrors|null $ingestionErrors ingestionErrors
     *
     * @return self
    
     */
    public function setIngestionErrors($ingestionErrors)
    {
        if (is_null($ingestionErrors)) {
            throw new \InvalidArgumentException('non-nullable ingestionErrors cannot be null');
        }

        $this->container['ingestionErrors'] = $ingestionErrors;
        return $this;
    }

    /**
     * Gets itemsReceived
     *
     * @return int|null
    
     */
    public function getItemsReceived()
    {
        return $this->container['itemsReceived'];
    }

    /**
     * Sets itemsReceived
     *
     * @param int|null $itemsReceived The number of items received in the feed
     *
     * @return self
    
     */
    public function setItemsReceived($itemsReceived)
    {
        if (is_null($itemsReceived)) {
            throw new \InvalidArgumentException('non-nullable itemsReceived cannot be null');
        }

        $this->container['itemsReceived'] = $itemsReceived;
        return $this;
    }

    /**
     * Gets itemsSucceeded
     *
     * @return int|null
    
     */
    public function getItemsSucceeded()
    {
        return $this->container['itemsSucceeded'];
    }

    /**
     * Sets itemsSucceeded
     *
     * @param int|null $itemsSucceeded The number of items in the feed that processed successfully
     *
     * @return self
    
     */
    public function setItemsSucceeded($itemsSucceeded)
    {
        if (is_null($itemsSucceeded)) {
            throw new \InvalidArgumentException('non-nullable itemsSucceeded cannot be null');
        }

        $this->container['itemsSucceeded'] = $itemsSucceeded;
        return $this;
    }

    /**
     * Gets itemsFailed
     *
     * @return int|null
    
     */
    public function getItemsFailed()
    {
        return $this->container['itemsFailed'];
    }

    /**
     * Sets itemsFailed
     *
     * @param int|null $itemsFailed The number of items in the feed that failed due to a data or system error
     *
     * @return self
    
     */
    public function setItemsFailed($itemsFailed)
    {
        if (is_null($itemsFailed)) {
            throw new \InvalidArgumentException('non-nullable itemsFailed cannot be null');
        }

        $this->container['itemsFailed'] = $itemsFailed;
        return $this;
    }

    /**
     * Gets itemsProcessing
     *
     * @return int|null
    
     */
    public function getItemsProcessing()
    {
        return $this->container['itemsProcessing'];
    }

    /**
     * Sets itemsProcessing
     *
     * @param int|null $itemsProcessing The number of items in the feed that are still processing
     *
     * @return self
    
     */
    public function setItemsProcessing($itemsProcessing)
    {
        if (is_null($itemsProcessing)) {
            throw new \InvalidArgumentException('non-nullable itemsProcessing cannot be null');
        }

        $this->container['itemsProcessing'] = $itemsProcessing;
        return $this;
    }

    /**
     * Gets offset
     *
     * @return int|null
    
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset The object response to the starting number, where 0 is the first entity available for request
     *
     * @return self
    
     */
    public function setOffset($offset)
    {
        if (is_null($offset)) {
            throw new \InvalidArgumentException('non-nullable offset cannot be null');
        }

        $this->container['offset'] = $offset;
        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
    
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit The number of items returned. Cannot be greater than 1000.
     *
     * @return self
    
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }

        $this->container['limit'] = $limit;
        return $this;
    }

    /**
     * Gets itemDetails
     *
     * @return \Walmart\Models\CP\US\Feeds\PartnerFeedResponseItemDetails|null
    
     */
    public function getItemDetails()
    {
        return $this->container['itemDetails'];
    }

    /**
     * Sets itemDetails
     *
     * @param \Walmart\Models\CP\US\Feeds\PartnerFeedResponseItemDetails|null $itemDetails itemDetails
     *
     * @return self
    
     */
    public function setItemDetails($itemDetails)
    {
        if (is_null($itemDetails)) {
            throw new \InvalidArgumentException('non-nullable itemDetails cannot be null');
        }

        $this->container['itemDetails'] = $itemDetails;
        return $this;
    }
}


