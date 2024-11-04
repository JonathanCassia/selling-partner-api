<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use SellingPartnerApi\Dto;

final class Address extends Dto
{
    protected static array $attributeMap = [
        'name' => 'Name',
        'addressLine1' => 'AddressLine1',
        'addressLine2' => 'AddressLine2',
        'addressLine3' => 'AddressLine3',
        'city' => 'City',
        'county' => 'County',
        'district' => 'District',
        'stateOrRegion' => 'StateOrRegion',
        'postalCode' => 'PostalCode',
        'countryCode' => 'CountryCode',
        'phone' => 'Phone',
        'addressType' => 'AddressType',
    ];

    /**
     * @param  ?string  $name  The name.
     * @param  ?string  $addressLine1  The street address.
     * @param  ?string  $addressLine2  Additional street address information, if required.
     * @param  ?string  $addressLine3  Additional street address information, if required.
     * @param  ?string  $city  The city.
     * @param  ?string  $county  The county.
     * @param  ?string  $district  The district.
     * @param  ?string  $stateOrRegion  The state or region.
     * @param  ?string  $postalCode  The postal code.
     * @param  ?string  $countryCode  The country code.
     * @param  ?string  $phone  The phone number.
     * @param  ?string  $addressType  The shipping address type.
     */
    public function __construct(
        public ?string $name = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $city = null,
        public ?string $county = null,
        public ?string $district = null,
        public ?string $stateOrRegion = null,
        public ?string $postalCode = null,
        public ?string $countryCode = null,
        public ?string $phone = null,
        public ?string $addressType = null,
    ) {}
}
