<?php

/**
 * ReportsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 */

/**
 * Item report
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Apis\Supplier\US;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Walmart\Apis\BaseApi;
use Walmart\ApiException;
use Walmart\ObjectSerializer;

/**
 * ReportsApi Class Doc Comment
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ReportsApi extends BaseApi
{
    /**
     * @var string[] $contentTypes
     */
    public const contentTypes = [
        'getItemReport' => 'application/json',
    ];

    /**
     * Operation getItemReport
     *
     * Item Report
     *
     * @param  string $type Use this to mention the type of report. Use type=vendor_item for fetching Item Report for DSVs (required)
     * @param  string $version Use this parameter(version = 2) to access the latest version of the DSV report. (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\Supplier\US\Reports\ReportDTO
     */
    public function getItemReport(
        string $type,
        string $version
    ): \Walmart\Models\Supplier\US\Reports\ReportDTO {
        return $this->getItemReportWithHttpInfo($type, $version);
    }

    /**
     * Operation getItemReportWithHttpInfo
     *
     * Item Report
     *
     * @param  string $type Use this to mention the type of report. Use type=vendor_item for fetching Item Report for DSVs (required)
     * @param  string $version Use this parameter(version = 2) to access the latest version of the DSV report. (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\Supplier\US\Reports\ReportDTO
     */
    protected function getItemReportWithHttpInfo(
        string $type,
        string $version,
    ): \Walmart\Models\Supplier\US\Reports\ReportDTO {
        $request = $this->getItemReportRequest($type, $version);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);

                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    (int) $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : null,
                    $body
                );
            } catch (ConnectException $e) {
                $this->writeDebug($e->getMessage());

                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            switch ($statusCode) {
                case 200:
                    if ('\Walmart\Models\Supplier\US\Reports\ReportDTO' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        $contentType = $response->getHeader('Content-Type')[0] ?? '';
                        if ('\Walmart\Models\Supplier\US\Reports\ReportDTO' !== 'string') {
                            $content = $contentType === 'application/xml' ? simplexml_load_string($content) : json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\Supplier\US\Reports\ReportDTO', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\Supplier\US\Reports\ReportDTO';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                $contentType = $response->getHeader('Content-Type')[0] ?? '';
                if ($returnType !== 'string') {
                    $content = $contentType === 'application/xml' ? simplexml_load_string($content) : json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\Supplier\US\Reports\ReportDTO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation getItemReportAsync
     *
     * Item Report
     *
     * @param  string $type Use this to mention the type of report. Use type=vendor_item for fetching Item Report for DSVs (required)
     * @param  string $version Use this parameter(version = 2) to access the latest version of the DSV report. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemReportAsync(
        string $type,
        string $version
    ): PromiseInterface {
        return $this->getItemReportAsyncWithHttpInfo($type, $version)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemReportAsyncWithHttpInfo
     *
     * Item Report
     *
     * @param  string $type Use this to mention the type of report. Use type=vendor_item for fetching Item Report for DSVs (required)
     * @param  string $version Use this parameter(version = 2) to access the latest version of the DSV report. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function getItemReportAsyncWithHttpInfo(
        string $type,
        string $version,
    ): PromiseInterface {
        $returnType = '\Walmart\Models\Supplier\US\Reports\ReportDTO';
        $request = $this->getItemReportRequest($type, $version);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $this->writeDebug((string) $response->getBody());
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $body,
                    );
                }
            );
    }

    /**
     * Create request for operation 'getItemReport'
     *
     * @param  string $type Use this to mention the type of report. Use type=vendor_item for fetching Item Report for DSVs (required)
     * @param  string $version Use this parameter(version = 2) to access the latest version of the DSV report. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getItemReportRequest(
        string $type,
        string $version,
    ): Request {
        $contentType = self::contentTypes['getItemReport'];

        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling getItemReport'
            );
        }
        // verify the required parameter 'version' is set
        if ($version === null || (is_array($version) && count($version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version when calling getItemReport'
            );
        }
        $resourcePath = '/v3/getReport';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'GET';

        // query params
        $queryParams = array_merge(
            ObjectSerializer::toQueryValue(
                $type,
                'type', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
            ObjectSerializer::toQueryValue(
                $version,
                'version', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
        );

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml'],
            $contentType,
            $multipart
        );

        $defaultHeaders = parent::getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $requestInfo = [
            'path' => $resourcePath,
            'method' => $method,
            'timestamp' => $defaultHeaders['WM_SEC.TIMESTAMP'],
            'query' => $query,
        ];

        $partnerApiKey = $this->config->getApiKey('partner', $requestInfo);
        if ($partnerApiKey !== null) {
            $headers['WM_PARTNER.ID'] = $partnerApiKey;
        }

        $signatureApiKey = $this->config->getApiKey('signature', $requestInfo);
        if ($signatureApiKey !== null) {
            $headers['WM_SEC.AUTH_SIGNATURE'] = $signatureApiKey;
        }

        $consumerIdApiKey = $this->config->getApiKey('consumerId', $requestInfo);
        if ($consumerIdApiKey !== null) {
            $headers['WM_CONSUMER.ID'] = $consumerIdApiKey;
        }

        // this endpoint requires Bearer authentication (access token)
        $token = $this->config->getAccessToken();
        if ($token) {
            $headers['WM_SEC.ACCESS_TOKEN'] = $token->accessToken;
        }

        $operationHost = $this->config->getHost();
        return new Request(
            $method,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
}

