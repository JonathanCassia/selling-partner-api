<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class AddressInput extends Dto
{
    /**
     * @param  string  $addressLine1  Street address information.
     * @param  string  $city  The city.
     * @param  string  $countryCode  The country code in two-character ISO 3166-1 alpha-2 format.
     * @param  string  $name  The name of the individual who is the primary contact.
     * @param  string  $phoneNumber  The phone number.
     * @param  string  $postalCode  The postal code.
     * @param  ?string  $addressLine2  Additional street address information.
     * @param  ?string  $companyName  The name of the business.
     * @param  ?string  $email  The email address.
     * @param  ?string  $stateOrProvinceCode  The state or province code.
     */
    public function __construct(
        public string $addressLine1,
        public string $city,
        public string $countryCode,
        public string $name,
        public string $phoneNumber,
        public string $postalCode,
        public ?string $addressLine2 = null,
        public ?string $companyName = null,
        public ?string $email = null,
        public ?string $stateOrProvinceCode = null,
    ) {}
}
