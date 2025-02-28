<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class Address extends Dto
{
    /**
     * @param  string  $addressLine1  First line of the address text.
     * @param  string  $countryCode  Two-digit, ISO 3166-1 alpha-2 formatted country code where this address is located.
     * @param  string  $name  Name of the person, business, or institution at this address.
     * @param  string  $stateOrRegion  State or region where this address is located. Note that this is contextual to the specified country code.
     * @param  ?string  $addressLine2  Optional second line of the address text.
     * @param  ?string  $addressLine3  Optional third line of the address text.
     * @param  ?string  $city  Optional city where this address is located.
     * @param  ?string  $county  Optional county where this address is located.
     * @param  ?string  $district  Optional district where this address is located.
     * @param  ?string  $phoneNumber  Optional E.164-formatted phone number for an available contact at this address.
     * @param  ?string  $postalCode  Optional postal code where this address is located.
     */
    public function __construct(
        public string $addressLine1,
        public string $countryCode,
        public string $name,
        public string $stateOrRegion,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $city = null,
        public ?string $county = null,
        public ?string $district = null,
        public ?string $phoneNumber = null,
        public ?string $postalCode = null,
    ) {}
}
