<?php

return [
    'interfaces' => [
        'google.ads.googleads.v14.services.ProductLinkService' => [
            'CreateProductLink' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\CreateProductLinkResponse::class,
                'headerParams' => [
                    [
                        'keyName' => 'customer_id',
                        'fieldAccessors' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
            'RemoveProductLink' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\RemoveProductLinkResponse::class,
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
                'customer' => 'customers/{customer_id}',
                'productLink' => 'customers/{customer_id}/productLinks/{product_link_id}',
            ],
        ],
    ],
];
