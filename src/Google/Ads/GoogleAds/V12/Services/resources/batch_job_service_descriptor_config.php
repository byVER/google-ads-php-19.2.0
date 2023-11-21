<?php

return [
    'interfaces' => [
        'google.ads.googleads.v12.services.BatchJobService' => [
            'RunBatchJob' => [
                'longRunning' => [
                    'operationReturnType' => '\\' . \Google\Protobuf\GPBEmpty::class,
                    'metadataReturnType' => '\\' . \Google\Ads\GoogleAds\V12\Resources\BatchJob\BatchJobMetadata::class,
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'ListBatchJobResults' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getResults',
                ],
            ],
        ],
    ],
];
