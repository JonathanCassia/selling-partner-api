<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Weight extends Dto
{
    /**
     * @param  string  $unit  The unit of measurement.
     * @param  float  $value  The measurement value.
     */
    public function __construct(
        public string $unit,
        public float $value,
    ) {}
}
