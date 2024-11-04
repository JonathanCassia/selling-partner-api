<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class OutboundCapability extends Dto
{
    /**
     * @param  ?OperationalConfiguration  $operationalConfiguration  The operational configuration of `supplySources`.
     * @param  ?ReturnLocation  $returnLocation  The address or reference to another `supplySourceId` to act as a return location.
     * @param  ?DeliveryChannel  $deliveryChannel  The delivery channel of a supply source.
     * @param  ?PickupChannel  $pickupChannel  The pick up channel of a supply source.
     */
    public function __construct(
        public ?bool $isSupported = null,
        public ?OperationalConfiguration $operationalConfiguration = null,
        public ?ReturnLocation $returnLocation = null,
        public ?DeliveryChannel $deliveryChannel = null,
        public ?PickupChannel $pickupChannel = null,
    ) {}
}
