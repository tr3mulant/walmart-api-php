<?php

/**
 * FeedsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 */

/**
 * Feed Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Apis\MP\MX;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Walmart\Apis\BaseApi;
use Walmart\ApiException;
use Walmart\ObjectSerializer;

require_once __DIR__ . '/../../../../vendor/autoload.php';

/**
 * FeedsApi Class Doc Comment
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FeedsApi extends BaseApi
{
    /**
     * @var string[] $contentTypes
     */
    public const contentTypes = [
        'getAllFeedStatuses' => 'application/json',
        'getFeedItemStatus' => 'application/json',
    ];

    /**
     * Operation getAllFeedStatuses
     *
     * All feed statuses
     *
     * @param  string $feedId A unique ID returned from the Bulk Upload API, used for tracking the Feed File. Special characters must be escaped. (e.g., feedId: '...3456@789...' must be entered in the URL as '...3456%40789). (optional)
     * @param  string $offset The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. (optional, default to '0')
     * @param  string $limit The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. (optional, default to '50')
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200Response
     */
    public function getAllFeedStatuses(
        ?string $feedId = null,
        ?string $offset = '0',
        ?string $limit = '50'
    ): \Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200Response {
        return $this->getAllFeedStatusesWithHttpInfo($feedId, $offset, $limit);
    }

    /**
     * Operation getAllFeedStatusesWithHttpInfo
     *
     * All feed statuses
     *
     * @param  string $feedId A unique ID returned from the Bulk Upload API, used for tracking the Feed File. Special characters must be escaped. (e.g., feedId: '...3456@789...' must be entered in the URL as '...3456%40789). (optional)
     * @param  string $offset The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. (optional, default to '0')
     * @param  string $limit The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. (optional, default to '50')
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200Response
     */
    protected function getAllFeedStatusesWithHttpInfo(
        ?string $feedId = null,
        ?string $offset = '0',
        ?string $limit = '50',
    ): \Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200Response {
        $request = $this->getAllFeedStatusesRequest($feedId, $offset, $limit, );
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
                    if ('\Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200Response', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200Response',
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
     * Operation getAllFeedStatusesAsync
     *
     * All feed statuses
     *
     * @param  string $feedId A unique ID returned from the Bulk Upload API, used for tracking the Feed File. Special characters must be escaped. (e.g., feedId: '...3456@789...' must be entered in the URL as '...3456%40789). (optional)
     * @param  string $offset The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. (optional, default to '0')
     * @param  string $limit The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. (optional, default to '50')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllFeedStatusesAsync(
        ?string $feedId = null,
        ?string $offset = '0',
        ?string $limit = '50'
    ): PromiseInterface {
        return $this->getAllFeedStatusesAsyncWithHttpInfo($feedId, $offset, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllFeedStatusesAsyncWithHttpInfo
     *
     *
     * All feed statuses
     *
     * @param  string $feedId A unique ID returned from the Bulk Upload API, used for tracking the Feed File. Special characters must be escaped. (e.g., feedId: '...3456@789...' must be entered in the URL as '...3456%40789). (optional)
     * @param  string $offset The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. (optional, default to '0')
     * @param  string $limit The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. (optional, default to '50')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function getAllFeedStatusesAsyncWithHttpInfo(
        ?string $feedId = null,
        ?string $offset = '0',
        ?string $limit = '50',
    ): PromiseInterface {
        $returnType = '\Walmart\Models\MP\MX\Feeds\GetAllFeedStatuses200Response';
        $request = $this->getAllFeedStatusesRequest($feedId, $offset, $limit, );
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
     * Create request for operation 'getAllFeedStatuses'
     *
     * @param  string $feedId A unique ID returned from the Bulk Upload API, used for tracking the Feed File. Special characters must be escaped. (e.g., feedId: '...3456@789...' must be entered in the URL as '...3456%40789). (optional)
     * @param  string $offset The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. (optional, default to '0')
     * @param  string $limit The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. (optional, default to '50')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAllFeedStatusesRequest(
        ?string $feedId = null,
        ?string $offset = '0',
        ?string $limit = '50',
    ): Request {
        $contentType = self::contentTypes['getAllFeedStatuses'];

        $resourcePath = '/v3/feeds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = [
            ObjectSerializer::toQueryValue(
                $feedId,
                'feedId', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? [],
            ObjectSerializer::toQueryValue(
                $offset,
                'offset', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? [],
            ObjectSerializer::toQueryValue(
                $limit,
                'limit', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? [],
        ];

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            $contentType,
            $multipart
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getClientId()) || !(empty($this->config->getClientSecret()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getClientId() . ":" . $this->config->getClientSecret());
        }

        // this endpoint requires Bearer authentication (access token)
        $token = $this->config->getAccessToken();
        if ($token) {
            $headers['WM_SEC.ACCESS_TOKEN'] = $token->accessToken;
        }

        $defaultHeaders = parent::getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFeedItemStatus
     *
     * Feed item status
     *
     * @param  string $feedId The feed ID. (required)
     * @param  string $includeDetails Includes details of each entity in the feed. Do not set this parameter to true. (optional, default to 'false')
     * @param  string $offset The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. (optional, default to '0')
     * @param  string $limit The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. (optional, default to '50')
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\MX\Feeds\GetFeedItemStatus200Response
     */
    public function getFeedItemStatus(
        string $feedId,
        ?string $includeDetails = 'false',
        ?string $offset = '0',
        ?string $limit = '50'
    ): \Walmart\Models\MP\MX\Feeds\GetFeedItemStatus200Response {
        return $this->getFeedItemStatusWithHttpInfo($feedId, $includeDetails, $offset, $limit);
    }

    /**
     * Operation getFeedItemStatusWithHttpInfo
     *
     * Feed item status
     *
     * @param  string $feedId The feed ID. (required)
     * @param  string $includeDetails Includes details of each entity in the feed. Do not set this parameter to true. (optional, default to 'false')
     * @param  string $offset The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. (optional, default to '0')
     * @param  string $limit The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. (optional, default to '50')
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\MX\Feeds\GetFeedItemStatus200Response
     */
    protected function getFeedItemStatusWithHttpInfo(
        string $feedId,
        ?string $includeDetails = 'false',
        ?string $offset = '0',
        ?string $limit = '50',
    ): \Walmart\Models\MP\MX\Feeds\GetFeedItemStatus200Response {
        $request = $this->getFeedItemStatusRequest($feedId, $includeDetails, $offset, $limit, );
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
                    if ('\Walmart\Models\MP\MX\Feeds\GetFeedItemStatus200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Walmart\Models\MP\MX\Feeds\GetFeedItemStatus200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\MP\MX\Feeds\GetFeedItemStatus200Response', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\MP\MX\Feeds\GetFeedItemStatus200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\MP\MX\Feeds\GetFeedItemStatus200Response',
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
     * Operation getFeedItemStatusAsync
     *
     * Feed item status
     *
     * @param  string $feedId The feed ID. (required)
     * @param  string $includeDetails Includes details of each entity in the feed. Do not set this parameter to true. (optional, default to 'false')
     * @param  string $offset The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. (optional, default to '0')
     * @param  string $limit The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. (optional, default to '50')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeedItemStatusAsync(
        string $feedId,
        ?string $includeDetails = 'false',
        ?string $offset = '0',
        ?string $limit = '50'
    ): PromiseInterface {
        return $this->getFeedItemStatusAsyncWithHttpInfo($feedId, $includeDetails, $offset, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeedItemStatusAsyncWithHttpInfo
     *
     *
     * Feed item status
     *
     * @param  string $feedId The feed ID. (required)
     * @param  string $includeDetails Includes details of each entity in the feed. Do not set this parameter to true. (optional, default to 'false')
     * @param  string $offset The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. (optional, default to '0')
     * @param  string $limit The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. (optional, default to '50')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function getFeedItemStatusAsyncWithHttpInfo(
        string $feedId,
        ?string $includeDetails = 'false',
        ?string $offset = '0',
        ?string $limit = '50',
    ): PromiseInterface {
        $returnType = '\Walmart\Models\MP\MX\Feeds\GetFeedItemStatus200Response';
        $request = $this->getFeedItemStatusRequest($feedId, $includeDetails, $offset, $limit, );
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
     * Create request for operation 'getFeedItemStatus'
     *
     * @param  string $feedId The feed ID. (required)
     * @param  string $includeDetails Includes details of each entity in the feed. Do not set this parameter to true. (optional, default to 'false')
     * @param  string $offset The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. (optional, default to '0')
     * @param  string $limit The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. (optional, default to '50')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFeedItemStatusRequest(
        string $feedId,
        ?string $includeDetails = 'false',
        ?string $offset = '0',
        ?string $limit = '50',
    ): Request {
        $contentType = self::contentTypes['getFeedItemStatus'];

        // verify the required parameter 'feedId' is set
        if ($feedId === null || (is_array($feedId) && count($feedId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $feedId when calling getFeedItemStatus'
            );
        }
        $resourcePath = '/v3/feeds/{feedId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = [
            ObjectSerializer::toQueryValue(
                $includeDetails,
                'includeDetails', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? [],
            ObjectSerializer::toQueryValue(
                $offset,
                'offset', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? [],
            ObjectSerializer::toQueryValue(
                $limit,
                'limit', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? [],
        ];

        // path params
        if ($feedId !== null) {
            $resourcePath = str_replace(
                '{' . 'feedId' . '}',
                ObjectSerializer::toPathValue($feedId),
                $resourcePath
            );
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            $contentType,
            $multipart
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getClientId()) || !(empty($this->config->getClientSecret()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getClientId() . ":" . $this->config->getClientSecret());
        }

        // this endpoint requires Bearer authentication (access token)
        $token = $this->config->getAccessToken();
        if ($token) {
            $headers['WM_SEC.ACCESS_TOKEN'] = $token->accessToken;
        }

        $defaultHeaders = parent::getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
}

