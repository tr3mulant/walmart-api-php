<?php

/**
 * CostApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 */

/**
 * Cost Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Apis\DSV\US;

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
 * CostApi Class Doc Comment
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CostApi extends BaseApi
{
    /**
     * @var string[] $contentTypes
     */
    public const contentTypes = [
        'updateBulkCost' => 'application/json',
    ];

    /**
     * Operation updateBulkCost
     *
     * This API allows DSV to update cost for items in bulk.
     *
     * @param  string $feedType Includes details of each entity in the feed. Do not set this parameter to true. (required)
     * @param  \Walmart\Models\DSV\US\Cost\DsvCostUpdateRequest $dsvCostUpdateRequest File fields (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\DSV\US\Cost\DsvCostUpdateResponse
     */
    public function updateBulkCost(
        string $feedType,
        \Walmart\Models\DSV\US\Cost\DsvCostUpdateRequest $dsvCostUpdateRequest
    ): \Walmart\Models\DSV\US\Cost\DsvCostUpdateResponse {
        return $this->updateBulkCostWithHttpInfo($feedType, $dsvCostUpdateRequest);
    }

    /**
     * Operation updateBulkCostWithHttpInfo
     *
     * This API allows DSV to update cost for items in bulk.
     *
     * @param  string $feedType Includes details of each entity in the feed. Do not set this parameter to true. (required)
     * @param  \Walmart\Models\DSV\US\Cost\DsvCostUpdateRequest $dsvCostUpdateRequest File fields (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\DSV\US\Cost\DsvCostUpdateResponse
     */
    protected function updateBulkCostWithHttpInfo(
        string $feedType,
        \Walmart\Models\DSV\US\Cost\DsvCostUpdateRequest $dsvCostUpdateRequest,
    ): \Walmart\Models\DSV\US\Cost\DsvCostUpdateResponse {
        $request = $this->updateBulkCostRequest($feedType, $dsvCostUpdateRequest, );
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
                    if ('\Walmart\Models\DSV\US\Cost\DsvCostUpdateResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Walmart\Models\DSV\US\Cost\DsvCostUpdateResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\DSV\US\Cost\DsvCostUpdateResponse', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\DSV\US\Cost\DsvCostUpdateResponse';
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
                        '\Walmart\Models\DSV\US\Cost\DsvCostUpdateResponse',
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
     * Operation updateBulkCostAsync
     *
     * This API allows DSV to update cost for items in bulk.
     *
     * @param  string $feedType Includes details of each entity in the feed. Do not set this parameter to true. (required)
     * @param  \Walmart\Models\DSV\US\Cost\DsvCostUpdateRequest $dsvCostUpdateRequest File fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBulkCostAsync(
        string $feedType,
        \Walmart\Models\DSV\US\Cost\DsvCostUpdateRequest $dsvCostUpdateRequest
    ): PromiseInterface {
        return $this->updateBulkCostAsyncWithHttpInfo($feedType, $dsvCostUpdateRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateBulkCostAsyncWithHttpInfo
     *
     *
     * This API allows DSV to update cost for items in bulk.
     *
     * @param  string $feedType Includes details of each entity in the feed. Do not set this parameter to true. (required)
     * @param  \Walmart\Models\DSV\US\Cost\DsvCostUpdateRequest $dsvCostUpdateRequest File fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function updateBulkCostAsyncWithHttpInfo(
        string $feedType,
        \Walmart\Models\DSV\US\Cost\DsvCostUpdateRequest $dsvCostUpdateRequest,
    ): PromiseInterface {
        $returnType = '\Walmart\Models\DSV\US\Cost\DsvCostUpdateResponse';
        $request = $this->updateBulkCostRequest($feedType, $dsvCostUpdateRequest, );
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
     * Create request for operation 'updateBulkCost'
     *
     * @param  string $feedType Includes details of each entity in the feed. Do not set this parameter to true. (required)
     * @param  \Walmart\Models\DSV\US\Cost\DsvCostUpdateRequest $dsvCostUpdateRequest File fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateBulkCostRequest(
        string $feedType,
        \Walmart\Models\DSV\US\Cost\DsvCostUpdateRequest $dsvCostUpdateRequest,
    ): Request {
        $contentType = self::contentTypes['updateBulkCost'];

        // verify the required parameter 'feedType' is set
        if ($feedType === null || (is_array($feedType) && count($feedType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $feedType when calling updateBulkCost'
            );
        }
        // verify the required parameter 'dsvCostUpdateRequest' is set
        if ($dsvCostUpdateRequest === null || (is_array($dsvCostUpdateRequest) && count($dsvCostUpdateRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dsvCostUpdateRequest when calling updateBulkCost'
            );
        }
        $resourcePath = '/v3/feeds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = [
            ObjectSerializer::toQueryValue(
                $feedType,
                'feedType', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
        ];

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
        if (isset($dsvCostUpdateRequest)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($dsvCostUpdateRequest));
            } else {
                $httpBody = $dsvCostUpdateRequest;
            }
        } elseif (count($formParams) > 0) {
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

        $signatureSchemeApiKey = $this->config->getApiKey('signatureScheme', [
            'path' => $resourcePath,
            'method' => $method,
            'timestamp' => $defaultHeaders['WM_TIMESTAMP'],
        ]);
        if ($signatureSchemeApiKey !== null) {
            $headers['WM_SEC.AUTH_SIGNATURE'] = $signatureSchemeApiKey;
        }

        $consumerIdSchemeApiKey = $this->config->getApiKey('consumerIdScheme', [
            'path' => $resourcePath,
            'method' => $method,
            'timestamp' => $defaultHeaders['WM_TIMESTAMP'],
        ]);
        if ($consumerIdSchemeApiKey !== null) {
            $headers['WM_CONSUMER.ID'] = $consumerIdSchemeApiKey;
        }

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
}

