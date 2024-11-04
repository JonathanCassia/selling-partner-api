<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundEligibilityV1\Dto;

use SellingPartnerApi\Dto;

final class Error extends Dto
{
    /**
     * @param  string  $code  An error code that identifies the type of error that occurred.
     * @param  ?string  $message  A message that describes the error condition in a human-readable form.
     * @param  ?string  $details  Additional information that can help the caller understand or fix the issue.
     */
    public function __construct(
        public string $code,
        public ?string $message = null,
        public ?string $details = null,
    ) {}
}
