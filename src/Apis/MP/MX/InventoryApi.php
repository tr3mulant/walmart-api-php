<?php

/**
 * InventoryApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 */

/**
 * Inventory Management
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

/**
 * InventoryApi Class Doc Comment
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class InventoryApi extends BaseApi
{
    /**
     * @var string[] $contentTypes
     */
    public const contentTypes = [
        'getInventory' => 'application/json',
        'updateBulkInventory' => 'multipart/form-data',
        'updateInventoryForAnItem' => 'application/json',
    ];

    /**
     * Operation getInventory
     *
     * Get Inventory
     *
     * @param  string $sku A seller-provided Product ID (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\MX\Inventory\Inventory
     */
    public function getInventory(
        string $sku
    ): \Walmart\Models\MP\MX\Inventory\Inventory {
        return $this->getInventoryWithHttpInfo($sku);
    }

    /**
     * Operation getInventoryWithHttpInfo
     *
     * Get Inventory
     *
     * @param  string $sku A seller-provided Product ID (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\MX\Inventory\Inventory
     */
    protected function getInventoryWithHttpInfo(
        string $sku,
    ): \Walmart\Models\MP\MX\Inventory\Inventory {
        $request = $this->getInventoryRequest($sku);
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
                    if ('\Walmart\Models\MP\MX\Inventory\Inventory' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        $contentType = $response->getHeader('Content-Type')[0] ?? '';
                        if ('\Walmart\Models\MP\MX\Inventory\Inventory' !== 'string') {
                            if ($contentType === 'application/xml') {
                                $content = $this->jsonEncodeXML($content);
                            }
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\MP\MX\Inventory\Inventory', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\MP\MX\Inventory\Inventory';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                $contentType = $response->getHeader('Content-Type')[0] ?? '';
                if ($returnType !== 'string') {
                    if ($contentType === 'application/xml') {
                        $content = $this->jsonEncodeXML($content);
                    }
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\MP\MX\Inventory\Inventory',
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
     * Operation getInventoryAsync
     *
     * Get Inventory
     *
     * @param  string $sku A seller-provided Product ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryAsync(
        string $sku
    ): PromiseInterface {
        return $this->getInventoryAsyncWithHttpInfo($sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInventoryAsyncWithHttpInfo
     *
     * Get Inventory
     *
     * @param  string $sku A seller-provided Product ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function getInventoryAsyncWithHttpInfo(
        string $sku,
    ): PromiseInterface {
        $returnType = '\Walmart\Models\MP\MX\Inventory\Inventory';
        $request = $this->getInventoryRequest($sku);
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
     * Create request for operation 'getInventory'
     *
     * @param  string $sku A seller-provided Product ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getInventoryRequest(
        string $sku,
    ): Request {
        $contentType = self::contentTypes['getInventory'];

        // verify the required parameter 'sku' is set
        if ($sku === null || (is_array($sku) && count($sku) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling getInventory'
            );
        }
        $resourcePath = '/v3/inventory';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'GET';

        // query params
        $queryParams = array_merge(
            ObjectSerializer::toQueryValue(
                $sku,
                'sku', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
        );

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getClientId()) || !(empty($this->config->getClientSecret()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getClientId() . ":" . $this->config->getClientSecret());
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

    /**
     * Operation updateBulkInventory
     *
     * Update bulk inventory
     *
     * @param  string $feedType Includes details of each entity in the feed. Do not set this parameter to true. (required)
     * @param  \SplFileObject $file Feed file to upload (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\MX\Inventory\FeedId
     */
    public function updateBulkInventory(
        string $feedType,
        \SplFileObject $file
    ): \Walmart\Models\MP\MX\Inventory\FeedId {
        return $this->updateBulkInventoryWithHttpInfo($feedType, $file);
    }

    /**
     * Operation updateBulkInventoryWithHttpInfo
     *
     * Update bulk inventory
     *
     * @param  string $feedType Includes details of each entity in the feed. Do not set this parameter to true. (required)
     * @param  \SplFileObject $file Feed file to upload (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\MX\Inventory\FeedId
     */
    protected function updateBulkInventoryWithHttpInfo(
        string $feedType,
        \SplFileObject $file,
    ): \Walmart\Models\MP\MX\Inventory\FeedId {
        $request = $this->updateBulkInventoryRequest($feedType, $file);
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
                    if ('\Walmart\Models\MP\MX\Inventory\FeedId' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        $contentType = $response->getHeader('Content-Type')[0] ?? '';
                        if ('\Walmart\Models\MP\MX\Inventory\FeedId' !== 'string') {
                            if ($contentType === 'application/xml') {
                                $content = $this->jsonEncodeXML($content);
                            }
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\MP\MX\Inventory\FeedId', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\MP\MX\Inventory\FeedId';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                $contentType = $response->getHeader('Content-Type')[0] ?? '';
                if ($returnType !== 'string') {
                    if ($contentType === 'application/xml') {
                        $content = $this->jsonEncodeXML($content);
                    }
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\MP\MX\Inventory\FeedId',
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
     * Operation updateBulkInventoryAsync
     *
     * Update bulk inventory
     *
     * @param  string $feedType Includes details of each entity in the feed. Do not set this parameter to true. (required)
     * @param  \SplFileObject $file Feed file to upload (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBulkInventoryAsync(
        string $feedType,
        \SplFileObject $file
    ): PromiseInterface {
        return $this->updateBulkInventoryAsyncWithHttpInfo($feedType, $file)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateBulkInventoryAsyncWithHttpInfo
     *
     * Update bulk inventory
     *
     * @param  string $feedType Includes details of each entity in the feed. Do not set this parameter to true. (required)
     * @param  \SplFileObject $file Feed file to upload (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function updateBulkInventoryAsyncWithHttpInfo(
        string $feedType,
        \SplFileObject $file,
    ): PromiseInterface {
        $returnType = '\Walmart\Models\MP\MX\Inventory\FeedId';
        $request = $this->updateBulkInventoryRequest($feedType, $file);
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
     * Create request for operation 'updateBulkInventory'
     *
     * @param  string $feedType Includes details of each entity in the feed. Do not set this parameter to true. (required)
     * @param  \SplFileObject $file Feed file to upload (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateBulkInventoryRequest(
        string $feedType,
        \SplFileObject $file,
    ): Request {
        $contentType = self::contentTypes['updateBulkInventory'];

        // verify the required parameter 'feedType' is set
        if ($feedType === null || (is_array($feedType) && count($feedType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $feedType when calling updateBulkInventory'
            );
        }
        // verify the required parameter 'file' is set
        if ($file === null || (is_array($file) && count($file) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling updateBulkInventory'
            );
        }
        $resourcePath = '/v3/feeds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'POST';

        // query params
        $queryParams = array_merge(
            ObjectSerializer::toQueryValue(
                $feedType,
                'feedType', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
        );

        // form params
        if ($file !== null) {
            $multipart = true;
            $formParams['file'] = [];
            $paramFiles = is_array($file) ? $file : [$file];
            foreach ($paramFiles as $paramFile) {
                $formParams['file'][] = \GuzzleHttp\Psr7\Utils::tryFopen(
                    ObjectSerializer::toFormValue($paramFile),
                    'rb'
                );
            }
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getClientId()) || !(empty($this->config->getClientSecret()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getClientId() . ":" . $this->config->getClientSecret());
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

    /**
     * Operation updateInventoryForAnItem
     *
     * Update inventory
     *
     * @param  string $sku An arbitrary alphanumeric unique ID, specified by the seller, identifying each item. (required)
     * @param  \Walmart\Models\MP\MX\Inventory\Inventory $inventory File fields (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\MX\Inventory\Inventory
     */
    public function updateInventoryForAnItem(
        string $sku,
        \Walmart\Models\MP\MX\Inventory\Inventory $inventory
    ): \Walmart\Models\MP\MX\Inventory\Inventory {
        return $this->updateInventoryForAnItemWithHttpInfo($sku, $inventory);
    }

    /**
     * Operation updateInventoryForAnItemWithHttpInfo
     *
     * Update inventory
     *
     * @param  string $sku An arbitrary alphanumeric unique ID, specified by the seller, identifying each item. (required)
     * @param  \Walmart\Models\MP\MX\Inventory\Inventory $inventory File fields (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\MX\Inventory\Inventory
     */
    protected function updateInventoryForAnItemWithHttpInfo(
        string $sku,
        \Walmart\Models\MP\MX\Inventory\Inventory $inventory,
    ): \Walmart\Models\MP\MX\Inventory\Inventory {
        $request = $this->updateInventoryForAnItemRequest($sku, $inventory);
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
                    if ('\Walmart\Models\MP\MX\Inventory\Inventory' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        $contentType = $response->getHeader('Content-Type')[0] ?? '';
                        if ('\Walmart\Models\MP\MX\Inventory\Inventory' !== 'string') {
                            if ($contentType === 'application/xml') {
                                $content = $this->jsonEncodeXML($content);
                            }
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\MP\MX\Inventory\Inventory', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\MP\MX\Inventory\Inventory';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                $contentType = $response->getHeader('Content-Type')[0] ?? '';
                if ($returnType !== 'string') {
                    if ($contentType === 'application/xml') {
                        $content = $this->jsonEncodeXML($content);
                    }
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\MP\MX\Inventory\Inventory',
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
     * Operation updateInventoryForAnItemAsync
     *
     * Update inventory
     *
     * @param  string $sku An arbitrary alphanumeric unique ID, specified by the seller, identifying each item. (required)
     * @param  \Walmart\Models\MP\MX\Inventory\Inventory $inventory File fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInventoryForAnItemAsync(
        string $sku,
        \Walmart\Models\MP\MX\Inventory\Inventory $inventory
    ): PromiseInterface {
        return $this->updateInventoryForAnItemAsyncWithHttpInfo($sku, $inventory)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateInventoryForAnItemAsyncWithHttpInfo
     *
     * Update inventory
     *
     * @param  string $sku An arbitrary alphanumeric unique ID, specified by the seller, identifying each item. (required)
     * @param  \Walmart\Models\MP\MX\Inventory\Inventory $inventory File fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function updateInventoryForAnItemAsyncWithHttpInfo(
        string $sku,
        \Walmart\Models\MP\MX\Inventory\Inventory $inventory,
    ): PromiseInterface {
        $returnType = '\Walmart\Models\MP\MX\Inventory\Inventory';
        $request = $this->updateInventoryForAnItemRequest($sku, $inventory);
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
     * Create request for operation 'updateInventoryForAnItem'
     *
     * @param  string $sku An arbitrary alphanumeric unique ID, specified by the seller, identifying each item. (required)
     * @param  \Walmart\Models\MP\MX\Inventory\Inventory $inventory File fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateInventoryForAnItemRequest(
        string $sku,
        \Walmart\Models\MP\MX\Inventory\Inventory $inventory,
    ): Request {
        $contentType = self::contentTypes['updateInventoryForAnItem'];

        // verify the required parameter 'sku' is set
        if ($sku === null || (is_array($sku) && count($sku) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling updateInventoryForAnItem'
            );
        }
        // verify the required parameter 'inventory' is set
        if ($inventory === null || (is_array($inventory) && count($inventory) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inventory when calling updateInventoryForAnItem'
            );
        }
        $resourcePath = '/v3/inventory';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'PUT';

        // query params
        $queryParams = array_merge(
            ObjectSerializer::toQueryValue(
                $sku,
                'sku', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
        );

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
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
        if (isset($inventory)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($inventory));
            } else {
                $httpBody = $inventory;
            }
        } else if (count($formParams) > 0) {
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getClientId()) || !(empty($this->config->getClientSecret()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getClientId() . ":" . $this->config->getClientSecret());
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

