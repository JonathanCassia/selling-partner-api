<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use SellingPartnerApi\Dto;

final class ItemVendorDetailsByMarketplace extends Dto
{
    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ?string  $brandCode  Brand code associated with an Amazon catalog item.
     * @param  ?string  $categoryCode  Product category associated with an Amazon catalog item.
     * @param  ?string  $manufacturerCode  Manufacturer code associated with an Amazon catalog item.
     * @param  ?string  $manufacturerCodeParent  Parent vendor code of the manufacturer code.
     * @param  ?string  $productGroup  Product group associated with an Amazon catalog item.
     * @param  ?string  $replenishmentCategory  Replenishment category associated with an Amazon catalog item.
     * @param  ?string  $subcategoryCode  Product subcategory associated with an Amazon catalog item.
     */
    public function __construct(
        public string $marketplaceId,
        public ?string $brandCode = null,
        public ?string $categoryCode = null,
        public ?string $manufacturerCode = null,
        public ?string $manufacturerCodeParent = null,
        public ?string $productGroup = null,
        public ?string $replenishmentCategory = null,
        public ?string $subcategoryCode = null,
    ) {}
}
