<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class DropOffLocation extends Dto
{
    /**
     * @param  string  $type  Specifies the preferred location to leave the package at the destination address.
     * @param  ?string[]  $attributes  Additional information about the drop-off location that can vary depending on the type of drop-off location specified in the `type` field.
     *                                 If the `type` is set to `FALLBACK_NEIGHBOR_DELIVERY`, the `attributes` object should include the exact keys `neighborName` and `houseNumber` to provide the name and house number of the designated neighbor.
     */
    public function __construct(
        public string $type,
        public ?array $attributes = null,
    ) {}
}
