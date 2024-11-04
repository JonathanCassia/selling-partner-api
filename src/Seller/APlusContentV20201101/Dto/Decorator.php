<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class Decorator extends Dto
{
    /**
     * @param  ?string  $type  The type of rich text decorator.
     * @param  ?int  $offset  The starting character of this decorator within the content string. Use zero for the first character.
     * @param  ?int  $length  The number of content characters to alter with this decorator. Decorators such as line breaks can have zero length and fit between characters.
     * @param  ?int  $depth  The relative intensity or variation of this decorator. Decorators such as bullet-points, for example, can have multiple indentation depths.
     */
    public function __construct(
        public ?string $type = null,
        public ?int $offset = null,
        public ?int $length = null,
        public ?int $depth = null,
    ) {}
}
