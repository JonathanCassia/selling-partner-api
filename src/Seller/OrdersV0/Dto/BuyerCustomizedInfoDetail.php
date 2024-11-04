<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class BuyerCustomizedInfoDetail extends Dto
{
    protected static array $attributeMap = ['customizedUrl' => 'CustomizedURL'];

    /**
     * @param  ?string  $customizedUrl  The location of a ZIP file containing Amazon Custom data.
     */
    public function __construct(
        public ?string $customizedUrl = null,
    ) {}
}
