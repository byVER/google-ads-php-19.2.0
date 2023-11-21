<?php

return [
    'interfaces' => [
        'google.ads.googleads.v14.services.AdService' => [
            'GetAd' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Resources\Ad::class,
                'headerParams' => [
                    [
                        'keyName' => 'resource_name',
                        'fieldAccessors' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateAds' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\MutateAdsResponse::class,
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
                'ad' => 'customers/{customer_id}/ads/{ad_id}',
            ],
        ],
    ],
];
