<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class AsinMetadata extends Dto
{
    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN).
     * @param  ?string[]  $badgeSet  The set of ASIN badges.
     * @param  ?string  $parent  The Amazon Standard Identification Number (ASIN).
     * @param  ?string  $title  The title for the ASIN in the Amazon catalog.
     * @param  ?string  $imageUrl  The default image for the ASIN in the Amazon catalog.
     * @param  ?string[]  $contentReferenceKeySet  A set of content reference keys.
     */
    public function __construct(
        public string $asin,
        public ?array $badgeSet = null,
        public ?string $parent = null,
        public ?string $title = null,
        public ?string $imageUrl = null,
        public ?array $contentReferenceKeySet = null,
    ) {}
}
