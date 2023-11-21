<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/ads/googleads/v14/services/conversion_goal_campaign_config_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Ads\GoogleAds\V14\Services\Gapic;

use Google\Ads\GoogleAds\V14\Services\ConversionGoalCampaignConfigOperation;
use Google\Ads\GoogleAds\V14\Services\MutateConversionGoalCampaignConfigsRequest;
use Google\Ads\GoogleAds\V14\Services\MutateConversionGoalCampaignConfigsResponse;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;

/**
 * Service Description: Service to manage conversion goal campaign config.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $conversionGoalCampaignConfigServiceClient = new ConversionGoalCampaignConfigServiceClient();
 * try {
 *     $customerId = 'customer_id';
 *     $operations = [];
 *     $response = $conversionGoalCampaignConfigServiceClient->mutateConversionGoalCampaignConfigs($customerId, $operations);
 * } finally {
 *     $conversionGoalCampaignConfigServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class ConversionGoalCampaignConfigServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.ads.googleads.v14.services.ConversionGoalCampaignConfigService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'googleads.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/adwords',
    ];

    private static $campaignNameTemplate;

    private static $conversionGoalCampaignConfigNameTemplate;

    private static $customConversionGoalNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/conversion_goal_campaign_config_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/conversion_goal_campaign_config_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/conversion_goal_campaign_config_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/conversion_goal_campaign_config_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getCampaignNameTemplate()
    {
        if (self::$campaignNameTemplate == null) {
            self::$campaignNameTemplate = new PathTemplate('customers/{customer_id}/campaigns/{campaign_id}');
        }

        return self::$campaignNameTemplate;
    }

    private static function getConversionGoalCampaignConfigNameTemplate()
    {
        if (self::$conversionGoalCampaignConfigNameTemplate == null) {
            self::$conversionGoalCampaignConfigNameTemplate = new PathTemplate('customers/{customer_id}/conversionGoalCampaignConfigs/{campaign_id}');
        }

        return self::$conversionGoalCampaignConfigNameTemplate;
    }

    private static function getCustomConversionGoalNameTemplate()
    {
        if (self::$customConversionGoalNameTemplate == null) {
            self::$customConversionGoalNameTemplate = new PathTemplate('customers/{customer_id}/customConversionGoals/{goal_id}');
        }

        return self::$customConversionGoalNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'campaign' => self::getCampaignNameTemplate(),
                'conversionGoalCampaignConfig' => self::getConversionGoalCampaignConfigNameTemplate(),
                'customConversionGoal' => self::getCustomConversionGoalNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a campaign
     * resource.
     *
     * @param string $customerId
     * @param string $campaignId
     *
     * @return string The formatted campaign resource.
     */
    public static function campaignName($customerId, $campaignId)
    {
        return self::getCampaignNameTemplate()->render([
            'customer_id' => $customerId,
            'campaign_id' => $campaignId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conversion_goal_campaign_config resource.
     *
     * @param string $customerId
     * @param string $campaignId
     *
     * @return string The formatted conversion_goal_campaign_config resource.
     */
    public static function conversionGoalCampaignConfigName($customerId, $campaignId)
    {
        return self::getConversionGoalCampaignConfigNameTemplate()->render([
            'customer_id' => $customerId,
            'campaign_id' => $campaignId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * custom_conversion_goal resource.
     *
     * @param string $customerId
     * @param string $goalId
     *
     * @return string The formatted custom_conversion_goal resource.
     */
    public static function customConversionGoalName($customerId, $goalId)
    {
        return self::getCustomConversionGoalNameTemplate()->render([
            'customer_id' => $customerId,
            'goal_id' => $goalId,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - campaign: customers/{customer_id}/campaigns/{campaign_id}
     * - conversionGoalCampaignConfig: customers/{customer_id}/conversionGoalCampaignConfigs/{campaign_id}
     * - customConversionGoal: customers/{customer_id}/customConversionGoals/{goal_id}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'googleads.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates, updates or removes conversion goal campaign config. Operation
     * statuses are returned.
     *
     * Sample code:
     * ```
     * $conversionGoalCampaignConfigServiceClient = new ConversionGoalCampaignConfigServiceClient();
     * try {
     *     $customerId = 'customer_id';
     *     $operations = [];
     *     $response = $conversionGoalCampaignConfigServiceClient->mutateConversionGoalCampaignConfigs($customerId, $operations);
     * } finally {
     *     $conversionGoalCampaignConfigServiceClient->close();
     * }
     * ```
     *
     * @param string                                  $customerId   Required. The ID of the customer whose custom conversion goals are being
     *                                                              modified.
     * @param ConversionGoalCampaignConfigOperation[] $operations   Required. The list of operations to perform on individual conversion goal
     *                                                              campaign config.
     * @param array                                   $optionalArgs {
     *     Optional.
     *
     *     @type bool $validateOnly
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     *     @type int $responseContentType
     *           The response content type setting. Determines whether the mutable resource
     *           or just the resource name should be returned post mutation.
     *           For allowed values, use constants defined on {@see \Google\Ads\GoogleAds\V14\Enums\ResponseContentTypeEnum\ResponseContentType}
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Ads\GoogleAds\V14\Services\MutateConversionGoalCampaignConfigsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function mutateConversionGoalCampaignConfigs($customerId, $operations, array $optionalArgs = [])
    {
        $request = new MutateConversionGoalCampaignConfigsRequest();
        $requestParamHeaders = [];
        $request->setCustomerId($customerId);
        $request->setOperations($operations);
        $requestParamHeaders['customer_id'] = $customerId;
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        if (isset($optionalArgs['responseContentType'])) {
            $request->setResponseContentType($optionalArgs['responseContentType']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('MutateConversionGoalCampaignConfigs', MutateConversionGoalCampaignConfigsResponse::class, $optionalArgs, $request)->wait();
    }
}
