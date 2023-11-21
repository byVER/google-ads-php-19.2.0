<?php

return [
    'interfaces' => [
        'google.ads.googleads.v13.services.OfflineUserDataJobService' => [
            'RunOfflineUserDataJob' => [
                'longRunning' => [
                    'operationReturnType' => '\\' . \Google\Protobuf\GPBEmpty::class,
                    'metadataReturnType' => '\\' . \Google\Ads\GoogleAds\V13\Resources\OfflineUserDataJobMetadata::class,
                    'initialPollDelayMillis' => '300000',
                    'pollDelayMultiplier' => '1.25',
                    'maxPollDelayMillis' => '3600000',
                    'totalPollTimeoutMillis' => '43200000',
                ],
            ],
        ],
    ],
];
