<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class PartyIdentification extends Dto
{
    /**
     * @param  string  $partyId  Assigned identification for the party. For example, warehouse code or vendor code. Please refer to specific party for more details.
     * @param  ?Address  $address  Address of the party.
     * @param  ?TaxRegistrationDetails  $taxInfo  Tax registration details of the entity.
     */
    public function __construct(
        public string $partyId,
        public ?Address $address = null,
        public ?TaxRegistrationDetails $taxInfo = null,
    ) {}
}
