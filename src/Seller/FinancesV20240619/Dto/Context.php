<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV20240619\Dto;

use SellingPartnerApi\Dto;

final class Context extends Dto
{
    /**
     * @param  ?string  $storeName  The name of the store that is related to the transaction.
     * @param  ?string  $orderType  The transaction's order type.
     * @param  ?string  $channel  Channel details of related transaction.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $sku  The Stock Keeping Unit (SKU) of the item.
     * @param  ?int  $quantityShipped  The quantity of the item shipped.
     * @param  ?string  $fulfillmentNetwork  The fulfillment network of the item.
     * @param  ?string  $paymentType  The type of payment.
     * @param  ?string  $paymentMethod  The method of payment.
     * @param  ?string  $paymentReference  The reference number of the payment.
     * @param  ?\DateTimeInterface  $paymentDate  A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?string  $deferralReason  Deferral policy applied on the transaction.
     *
     * **Examples:** `B2B`,`DD7`
     * @param  ?\DateTimeInterface  $maturityDate  A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?string  $deferralStatus  The status of the transaction. For example, `HOLD`,`RELEASE`.
     * @param  ?\DateTimeInterface  $startTime  A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?\DateTimeInterface  $endTime  A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     */
    public function __construct(
        public string $contextType,
        public ?string $storeName = null,
        public ?string $orderType = null,
        public ?string $channel = null,
        public ?string $asin = null,
        public ?string $sku = null,
        public ?int $quantityShipped = null,
        public ?string $fulfillmentNetwork = null,
        public ?string $paymentType = null,
        public ?string $paymentMethod = null,
        public ?string $paymentReference = null,
        public ?\DateTimeInterface $paymentDate = null,
        public ?string $deferralReason = null,
        public ?\DateTimeInterface $maturityDate = null,
        public ?string $deferralStatus = null,
        public ?\DateTimeInterface $startTime = null,
        public ?\DateTimeInterface $endTime = null,
    ) {}
}
