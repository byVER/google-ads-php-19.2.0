<?php

return [
    'interfaces' => [
        'google.ads.googleads.v14.services.CustomerService' => [
            'CreateCustomerClient' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\CreateCustomerClientResponse::class,
                'headerParams' => [
                    [
                        'keyName' => 'customer_id',
                        'fieldAccessors' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
            'ListAccessibleCustomers' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\ListAccessibleCustomersResponse::class,
            ],
            'MutateCustomer' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => \Google\Ads\GoogleAds\V14\Services\MutateCustomerResponse::class,
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
                'conversionAction' => 'customers/{customer_id}/conversionActions/{conversion_action_id}',
                'customer' => 'customers/{customer_id}',
            ],
        ],
    ],
];
