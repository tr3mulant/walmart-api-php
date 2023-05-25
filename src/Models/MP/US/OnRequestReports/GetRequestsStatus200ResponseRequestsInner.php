<?php

/**
 * GetRequestsStatus200ResponseRequestsInner
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
 * On-request Report Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\OnRequestReports;
use Walmart\Models\BaseModel;

/**
 * GetRequestsStatus200ResponseRequestsInner Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetRequestsStatus200ResponseRequestsInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getRequestsStatus_200_response_requests_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'requestId' => 'string',
        'requestStatus' => 'string',
        'requestSubmissionDate' => 'string',
        'reportType' => 'string',
        'reportVersion' => 'string',
        'payload' => '\Walmart\Models\MP\US\OnRequestReports\GetRequestsStatus200ResponseRequestsInnerPayload',
        'reportGenerationDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'requestId' => 'uuid',
        'requestStatus' => null,
        'requestSubmissionDate' => null,
        'reportType' => null,
        'reportVersion' => null,
        'payload' => null,
        'reportGenerationDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'requestId' => false,
        'requestStatus' => false,
        'requestSubmissionDate' => false,
        'reportType' => false,
        'reportVersion' => false,
        'payload' => false,
        'reportGenerationDate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'requestId' => 'requestId',
        'requestStatus' => 'requestStatus',
        'requestSubmissionDate' => 'requestSubmissionDate',
        'reportType' => 'reportType',
        'reportVersion' => 'reportVersion',
        'payload' => 'payload',
        'reportGenerationDate' => 'reportGenerationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'requestId' => 'setRequestId',
        'requestStatus' => 'setRequestStatus',
        'requestSubmissionDate' => 'setRequestSubmissionDate',
        'reportType' => 'setReportType',
        'reportVersion' => 'setReportVersion',
        'payload' => 'setPayload',
        'reportGenerationDate' => 'setReportGenerationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'requestId' => 'getRequestId',
        'requestStatus' => 'getRequestStatus',
        'requestSubmissionDate' => 'getRequestSubmissionDate',
        'reportType' => 'getReportType',
        'reportVersion' => 'getReportVersion',
        'payload' => 'getPayload',
        'reportGenerationDate' => 'getReportGenerationDate'
    ];
    public const REQUEST_STATUS_RECEIVED = 'RECEIVED';

    public const REQUEST_STATUS_INPROGRESS = 'INPROGRESS';

    public const REQUEST_STATUS_READY = 'READY';

    public const REQUEST_STATUS_ERROR = 'ERROR';

    public const REPORT_TYPE_ITEM = 'ITEM';

    public const REPORT_TYPE_INVENTORY = 'INVENTORY';

    public const REPORT_TYPE_CANCELLATION = 'CANCELLATION';

    public const REPORT_TYPE_DELIVERY_DEFECT = 'DELIVERY_DEFECT';

    public const REPORT_TYPE_ITEM_PERFORMANCE = 'ITEM_PERFORMANCE';

    public const REPORT_TYPE_PROMO = 'PROMO';

    public const REPORT_TYPE_RETURN_OVERRIDES = 'RETURN_OVERRIDES';

    public const REPORT_TYPE_CPA = 'CPA';

    public const REPORT_TYPE_SHIPPING_CONFIGURATION = 'SHIPPING_CONFIGURATION';

    public const REPORT_TYPE_SHIPPING_PROGRAM = 'SHIPPING_PROGRAM';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestStatusAllowableValues()
    {
        return [
            self::REQUEST_STATUS_RECEIVED,
            self::REQUEST_STATUS_INPROGRESS,
            self::REQUEST_STATUS_READY,
            self::REQUEST_STATUS_ERROR,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReportTypeAllowableValues()
    {
        return [
            self::REPORT_TYPE_ITEM,
            self::REPORT_TYPE_INVENTORY,
            self::REPORT_TYPE_CANCELLATION,
            self::REPORT_TYPE_DELIVERY_DEFECT,
            self::REPORT_TYPE_ITEM_PERFORMANCE,
            self::REPORT_TYPE_PROMO,
            self::REPORT_TYPE_RETURN_OVERRIDES,
            self::REPORT_TYPE_CPA,
            self::REPORT_TYPE_SHIPPING_CONFIGURATION,
            self::REPORT_TYPE_SHIPPING_PROGRAM,
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
        $this->setIfExists('requestId', $data ?? [], null);
        $this->setIfExists('requestStatus', $data ?? [], null);
        $this->setIfExists('requestSubmissionDate', $data ?? [], null);
        $this->setIfExists('reportType', $data ?? [], null);
        $this->setIfExists('reportVersion', $data ?? [], null);
        $this->setIfExists('payload', $data ?? [], null);
        $this->setIfExists('reportGenerationDate', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRequestStatusAllowableValues();
        if (!is_null($this->container['requestStatus']) && !in_array($this->container['requestStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requestStatus', must be one of '%s'",
                $this->container['requestStatus'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReportTypeAllowableValues();
        if (!is_null($this->container['reportType']) && !in_array($this->container['reportType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reportType', must be one of '%s'",
                $this->container['reportType'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }
    /**
     * Gets requestId
     *
     * @return string|null
    
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param string|null $requestId Automated ID generated by system that uniquely identifies the report request.
     *
     * @return self
    
     */
    public function setRequestId($requestId)
    {
        if (is_null($requestId)) {
            throw new \InvalidArgumentException('non-nullable requestId cannot be null');
        }

        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
     * Gets requestStatus
     *
     * @return string|null
    
     */
    public function getRequestStatus()
    {
        return $this->container['requestStatus'];
    }

    /**
     * Sets requestStatus
     *
     * @param string|null $requestStatus Status of report request. Possible values are RECEIVED, INPROGRESS, READY, ERROR.
     *
     * @return self
    
     */
    public function setRequestStatus($requestStatus)
    {
        if (is_null($requestStatus)) {
            throw new \InvalidArgumentException('non-nullable requestStatus cannot be null');
        }
        $allowedValues = $this->getRequestStatusAllowableValues();
        if (!in_array($requestStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'requestStatus', must be one of '%s'",
                    $requestStatus,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['requestStatus'] = $requestStatus;
        return $this;
    }

    /**
     * Gets requestSubmissionDate
     *
     * @return string|null
    
     */
    public function getRequestSubmissionDate()
    {
        return $this->container['requestSubmissionDate'];
    }

    /**
     * Sets requestSubmissionDate
     *
     * @param string|null $requestSubmissionDate Date and time on which the report request is submitted.
     *
     * @return self
    
     */
    public function setRequestSubmissionDate($requestSubmissionDate)
    {
        if (is_null($requestSubmissionDate)) {
            throw new \InvalidArgumentException('non-nullable requestSubmissionDate cannot be null');
        }

        $this->container['requestSubmissionDate'] = $requestSubmissionDate;
        return $this;
    }

    /**
     * Gets reportType
     *
     * @return string|null
    
     */
    public function getReportType()
    {
        return $this->container['reportType'];
    }

    /**
     * Sets reportType
     *
     * @param string|null $reportType Type of report for which the request is created. Example, ITEM for Item Report.
     *
     * @return self
    
     */
    public function setReportType($reportType)
    {
        if (is_null($reportType)) {
            throw new \InvalidArgumentException('non-nullable reportType cannot be null');
        }
        $allowedValues = $this->getReportTypeAllowableValues();
        if (!in_array($reportType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reportType', must be one of '%s'",
                    $reportType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['reportType'] = $reportType;
        return $this;
    }

    /**
     * Gets reportVersion
     *
     * @return string|null
    
     */
    public function getReportVersion()
    {
        return $this->container['reportVersion'];
    }

    /**
     * Sets reportVersion
     *
     * @param string|null $reportVersion Version of report for which the request is created. Example, v1.
     *
     * @return self
    
     */
    public function setReportVersion($reportVersion)
    {
        if (is_null($reportVersion)) {
            throw new \InvalidArgumentException('non-nullable reportVersion cannot be null');
        }

        $this->container['reportVersion'] = $reportVersion;
        return $this;
    }

    /**
     * Gets payload
     *
     * @return \Walmart\Models\MP\US\OnRequestReports\GetRequestsStatus200ResponseRequestsInnerPayload|null
    
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \Walmart\Models\MP\US\OnRequestReports\GetRequestsStatus200ResponseRequestsInnerPayload|null $payload payload
     *
     * @return self
    
     */
    public function setPayload($payload)
    {
        if (is_null($payload)) {
            throw new \InvalidArgumentException('non-nullable payload cannot be null');
        }

        $this->container['payload'] = $payload;
        return $this;
    }

    /**
     * Gets reportGenerationDate
     *
     * @return string|null
    
     */
    public function getReportGenerationDate()
    {
        return $this->container['reportGenerationDate'];
    }

    /**
     * Sets reportGenerationDate
     *
     * @param string|null $reportGenerationDate Date and time on which the report is generated. Attribute is available only if report is generated.
     *
     * @return self
    
     */
    public function setReportGenerationDate($reportGenerationDate)
    {
        if (is_null($reportGenerationDate)) {
            throw new \InvalidArgumentException('non-nullable reportGenerationDate cannot be null');
        }

        $this->container['reportGenerationDate'] = $reportGenerationDate;
        return $this;
    }
}


