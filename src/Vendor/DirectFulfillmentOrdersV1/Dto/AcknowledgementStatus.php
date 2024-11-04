<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class AcknowledgementStatus extends Dto
{
    /**
     * @param  ?string  $code  Acknowledgement code is a unique two digit value which indicates the status of the acknowledgement. For a list of acknowledgement codes that Amazon supports, see the Vendor Direct Fulfillment APIs Use Case Guide.
     * @param  ?string  $description  Reason for the acknowledgement code.
     */
    public function __construct(
        public ?string $code = null,
        public ?string $description = null,
    ) {}
}
