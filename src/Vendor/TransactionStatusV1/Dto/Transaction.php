<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\TransactionStatusV1\Dto;

use SellingPartnerApi\Dto;

final class Transaction extends Dto
{
    /**
     * @param  string  $transactionId  The unique identifier returned in the 'transactionId' field in response to the post request of a specific transaction.
     * @param  string  $status  Current processing status of the transaction.
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public string $transactionId,
        public string $status,
        public ?ErrorList $errors = null,
    ) {}
}
