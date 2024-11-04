<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class SafetReimbursementItem extends Dto
{
    protected static array $complexArrayTypes = ['itemChargeList' => ChargeComponent::class];

    /**
     * @param  ChargeComponent[]|null  $itemChargeList  A list of charge information on the seller's account.
     * @param  ?string  $productDescription  The description of the item as shown on the product detail page on the retail website.
     * @param  ?string  $quantity  The number of units of the item being reimbursed.
     */
    public function __construct(
        public ?array $itemChargeList = null,
        public ?string $productDescription = null,
        public ?string $quantity = null,
    ) {}
}
