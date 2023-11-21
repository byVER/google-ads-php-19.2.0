<?php

return [
    'interfaces' => [
        'google.ads.googleads.v14.services.AudienceInsightsService' => [
            'GenerateAudienceCompositionInsights' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\GenerateAudienceCompositionInsightsResponse::class,
                'headerParams' => [
                    [
                        'keyName' => 'customer_id',
                        'fieldAccessors' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
            'GenerateInsightsFinderReport' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\GenerateInsightsFinderReportResponse::class,
                'headerParams' => [
                    [
                        'keyName' => 'customer_id',
                        'fieldAccessors' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
            'ListAudienceInsightsAttributes' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\ListAudienceInsightsAttributesResponse::class,
                'headerParams' => [
                    [
                        'keyName' => 'customer_id',
                        'fieldAccessors' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
            'ListInsightsEligibleDates' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\ListInsightsEligibleDatesResponse::class,
            ],
        ],
    ],
];
