<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class FailedAdhocDisbursementEvent extends Dto
{
    protected static array $attributeMap = [
        'fundsTransfersType' => 'FundsTransfersType',
        'transferId' => 'TransferId',
        'disbursementId' => 'DisbursementId',
        'paymentDisbursementType' => 'PaymentDisbursementType',
        'status' => 'Status',
        'transferAmount' => 'TransferAmount',
        'postedDate' => 'PostedDate',
    ];

    /**
     * @param  ?string  $fundsTransfersType  The type of fund transfer. For example, `Refund`.
     * @param  ?string  $transferId  The transfer identifier.
     * @param  ?string  $disbursementId  The disbursement identifier.
     * @param  ?string  $paymentDisbursementType  The type of payment for disbursement. For example, `CREDIT_CARD`.
     * @param  ?string  $status  The status of the failed `AdhocDisbursement`. For example, `HARD_DECLINED`.
     * @param  ?Currency  $transferAmount  A currency type and amount.
     * @param  ?\DateTimeInterface  $postedDate  A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     */
    public function __construct(
        public ?string $fundsTransfersType = null,
        public ?string $transferId = null,
        public ?string $disbursementId = null,
        public ?string $paymentDisbursementType = null,
        public ?string $status = null,
        public ?Currency $transferAmount = null,
        public ?\DateTimeInterface $postedDate = null,
    ) {}
}
