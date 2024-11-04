<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class DocumentDownload extends Dto
{
    /**
     * @param  string  $downloadType  The type of download. Can be `URL`.
     * @param  string  $uri  Uniform resource identifier to identify where the document is located.
     * @param  ?\DateTimeInterface  $expiration  The timestamp of expiration of the URI. This is in ISO 8601 datetime format with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     */
    public function __construct(
        public string $downloadType,
        public string $uri,
        public ?\DateTimeInterface $expiration = null,
    ) {}
}
