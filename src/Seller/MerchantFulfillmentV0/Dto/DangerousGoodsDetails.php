<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class DangerousGoodsDetails extends Dto
{
    protected static array $attributeMap = [
        'unitedNationsRegulatoryId' => 'UnitedNationsRegulatoryId',
        'transportationRegulatoryClass' => 'TransportationRegulatoryClass',
        'packingGroup' => 'PackingGroup',
        'packingInstruction' => 'PackingInstruction',
    ];

    /**
     * @param  ?string  $unitedNationsRegulatoryId  The specific UNID of the item being shipped.
     * @param  ?string  $transportationRegulatoryClass  The specific regulatory class  of the item being shipped.
     * @param  ?string  $packingGroup  The specific packaging group of the item being shipped.
     * @param  ?string  $packingInstruction  The specific packing instruction of the item being shipped.
     */
    public function __construct(
        public ?string $unitedNationsRegulatoryId = null,
        public ?string $transportationRegulatoryClass = null,
        public ?string $packingGroup = null,
        public ?string $packingInstruction = null,
    ) {}
}
