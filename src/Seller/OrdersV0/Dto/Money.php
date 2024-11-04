<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class Money extends Dto
{
    protected static array $attributeMap = ['currencyCode' => 'CurrencyCode', 'amount' => 'Amount'];

    /**
     * @param  ?string  $currencyCode  The three-digit currency code. In ISO 4217 format.
     * @param  ?string  $amount  The currency amount.
     */
    public function __construct(
        public ?string $currencyCode = null,
        public ?string $amount = null,
    ) {}
}
