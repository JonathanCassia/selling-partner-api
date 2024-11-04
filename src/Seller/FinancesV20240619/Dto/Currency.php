<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV20240619\Dto;

use SellingPartnerApi\Dto;

final class Currency extends Dto
{
    /**
     * @param  ?string  $currencyCode  The three-digit currency code in ISO 4217 format.
     * @param  ?float  $currencyAmount  A signed decimal number.
     */
    public function __construct(
        public ?string $currencyCode = null,
        public ?float $currencyAmount = null,
    ) {}
}
