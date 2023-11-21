<?php

return [
    'interfaces' => [
        'google.ads.googleads.v12.services.CampaignDraftService' => [
            'PromoteCampaignDraft' => [
                'longRunning' => [
                    'operationReturnType' => '\\' . \Google\Protobuf\GPBEmpty::class,
                    'metadataReturnType' => '\\' . \Google\Protobuf\GPBEmpty::class,
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'ListCampaignDraftAsyncErrors' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getErrors',
                ],
            ],
        ],
    ],
];
