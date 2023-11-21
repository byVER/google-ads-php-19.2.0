<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2023 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Ads\GoogleAds\V13\Services;

/**
 * Service to manage bidding seasonality adjustments.
 */
class BiddingSeasonalityAdjustmentServiceGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates, updates, or removes seasonality adjustments.
     * Operation statuses are returned.
     * @param \Google\Ads\GoogleAds\V13\Services\MutateBiddingSeasonalityAdjustmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MutateBiddingSeasonalityAdjustments(\Google\Ads\GoogleAds\V13\Services\MutateBiddingSeasonalityAdjustmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v13.services.BiddingSeasonalityAdjustmentService/MutateBiddingSeasonalityAdjustments',
        $argument,
        ['\\' . \Google\Ads\GoogleAds\V13\Services\MutateBiddingSeasonalityAdjustmentsResponse::class, 'decode'],
        $metadata, $options);
    }

}
