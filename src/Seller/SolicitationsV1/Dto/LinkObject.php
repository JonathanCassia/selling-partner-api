<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use SellingPartnerApi\Dto;

final class LinkObject extends Dto
{
    /**
     * @param  string  $href  A URI for this object.
     * @param  ?string  $name  An identifier for this object.
     */
    public function __construct(
        public string $href,
        public ?string $name = null,
    ) {}
}
