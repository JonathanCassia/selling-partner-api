<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\InvoicesV20240619\Dto;

use SellingPartnerApi\Dto;

final class Export extends Dto
{
    /**
     * @param  ?string  $errorMessage  When the export generation fails, this attribute contains a description of the error.
     * @param  ?string  $exportId  The export identifier.
     * @param  ?\DateTimeInterface  $generateExportFinishedAt  The date and time when the export generation finished. Vales are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?\DateTimeInterface  $generateExportStartedAt  The date and time when the export generation started. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?string[]  $invoicesDocumentIds  The identifier for the export documents. To get the information required to retrieve the export document's contents, pass each ID in the `getInvoicesDocument` operation.
     *
     * This list is empty until the status is `DONE`.
     * @param  ?string  $status  The current status of the request.
     */
    public function __construct(
        public ?string $errorMessage = null,
        public ?string $exportId = null,
        public ?\DateTimeInterface $generateExportFinishedAt = null,
        public ?\DateTimeInterface $generateExportStartedAt = null,
        public ?array $invoicesDocumentIds = null,
        public ?string $status = null,
    ) {}
}
