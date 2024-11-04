<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SellersV1\Dto;

use SellingPartnerApi\Dto;

final class Address extends Dto
{
    /**
     * @param  string  $addressLine1  Street address information.
     * @param  string  $countryCode  The country code in two-character ISO 3166-1 alpha-2 format.
     * @param  ?string  $addressLine2  Additional street address information.
     * @param  ?string  $stateOrProvinceCode  The state or province code.
     * @param  ?string  $city  The city.
     * @param  ?string  $postalCode  The postal code.
     */
    public function __construct(
        public string $addressLine1,
        public string $countryCode,
        public ?string $addressLine2 = null,
        public ?string $stateOrProvinceCode = null,
        public ?string $city = null,
        public ?string $postalCode = null,
    ) {}
}
