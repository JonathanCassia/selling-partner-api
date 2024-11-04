<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class JobListing extends Dto
{
    protected static array $complexArrayTypes = ['jobs' => ServiceJob::class];

    /**
     * @param  ?int  $totalResultSize  Total result size of the query result.
     * @param  ?string  $nextPageToken  A generated string used to pass information to your next request. If `nextPageToken` is returned, pass the value of `nextPageToken` to the `pageToken` to get next results.
     * @param  ?string  $previousPageToken  A generated string used to pass information to your next request. If `previousPageToken` is returned, pass the value of `previousPageToken` to the `pageToken` to get previous page results.
     * @param  ServiceJob[]|null  $jobs  List of job details for the given input.
     */
    public function __construct(
        public ?int $totalResultSize = null,
        public ?string $nextPageToken = null,
        public ?string $previousPageToken = null,
        public ?array $jobs = null,
    ) {}
}
