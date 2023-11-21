<?php

return [
    'interfaces' => [
        'google.ads.googleads.v14.services.OfflineUserDataJobService' => [
            'RunOfflineUserDataJob' => [
                'longRunning' => [
                    'operationReturnType' => '\\' . \Google\Protobuf\GPBEmpty::class,
                    'metadataReturnType' => '\\' . \Google\Ads\GoogleAds\V14\Resources\OfflineUserDataJobMetadata::class,
                    'initialPollDelayMillis' => '300000',
                    'pollDelayMultiplier' => '1.25',
                    'maxPollDelayMillis' => '3600000',
                    'totalPollTimeoutMillis' => '43200000',
                ],
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'resource_name',
                        'fieldAccessors' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'AddOfflineUserDataJobOperations' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\AddOfflineUserDataJobOperationsResponse::class,
                'headerParams' => [
                    [
                        'keyName' => 'resource_name',
                        'fieldAccessors' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'CreateOfflineUserDataJob' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\CreateOfflineUserDataJobResponse::class,
                'headerParams' => [
                    [
                        'keyName' => 'customer_id',
                        'fieldAccessors' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
            'templateMap' => [
                'offlineUserDataJob' => 'customers/{customer_id}/offlineUserDataJobs/{offline_user_data_update_id}',
            ],
        ],
    ],
];
