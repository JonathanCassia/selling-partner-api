<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class ThroughputCap extends Dto
{
    /**
     * @param  ?int  $value  An unsigned integer that can be only positive or zero.
     * @param  ?string  $timeUnit  The time unit
     */
    public function __construct(
        public ?int $value = null,
        public ?string $timeUnit = null,
    ) {}
}
