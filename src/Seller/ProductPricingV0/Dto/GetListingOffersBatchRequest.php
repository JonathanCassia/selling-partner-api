<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class GetListingOffersBatchRequest extends Dto
{
    protected static array $complexArrayTypes = ['requests' => ListingOffersRequest::class];

    /**
     * @param  ListingOffersRequest[]|null  $requests  A list of `getListingOffers` batched requests to run.
     */
    public function __construct(
        public ?array $requests = null,
    ) {}
}
