<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use SellingPartnerApi\Dto;

final class Categories extends Dto
{
    protected static array $attributeMap = [
        'productCategoryId' => 'ProductCategoryId',
        'productCategoryName' => 'ProductCategoryName',
    ];

    /**
     * @param  ?string  $productCategoryId  The identifier for the product category (or browse node).
     * @param  ?string  $productCategoryName  The name of the product category (or browse node).
     * @param  ?mixed[]  $parent  The parent product category.
     */
    public function __construct(
        public ?string $productCategoryId = null,
        public ?string $productCategoryName = null,
        public ?array $parent = null,
    ) {}
}
