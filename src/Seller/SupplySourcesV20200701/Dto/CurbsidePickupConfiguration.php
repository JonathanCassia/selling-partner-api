<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class CurbsidePickupConfiguration extends Dto
{
    /**
     * @param  ?bool  $isSupported  When true, curbside pickup is supported by the supply source.
     * @param  ?OperationalConfiguration  $operationalConfiguration  The operational configuration of `supplySources`.
     * @param  ?ParkingWithAddressConfiguration  $parkingWithAddressConfiguration  The parking configuration with the address.
     */
    public function __construct(
        public ?bool $isSupported = null,
        public ?OperationalConfiguration $operationalConfiguration = null,
        public ?ParkingWithAddressConfiguration $parkingWithAddressConfiguration = null,
    ) {}
}
