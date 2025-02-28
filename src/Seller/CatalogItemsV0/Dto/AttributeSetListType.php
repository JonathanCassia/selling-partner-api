<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use SellingPartnerApi\Dto;

final class AttributeSetListType extends Dto
{
    protected static array $attributeMap = [
        'actor' => 'Actor',
        'artist' => 'Artist',
        'aspectRatio' => 'AspectRatio',
        'audienceRating' => 'AudienceRating',
        'author' => 'Author',
        'backFinding' => 'BackFinding',
        'bandMaterialType' => 'BandMaterialType',
        'binding' => 'Binding',
        'blurayRegion' => 'BlurayRegion',
        'brand' => 'Brand',
        'ceroAgeRating' => 'CeroAgeRating',
        'chainType' => 'ChainType',
        'claspType' => 'ClaspType',
        'color' => 'Color',
        'cpuManufacturer' => 'CpuManufacturer',
        'cpuSpeed' => 'CpuSpeed',
        'cpuType' => 'CpuType',
        'creator' => 'Creator',
        'department' => 'Department',
        'director' => 'Director',
        'displaySize' => 'DisplaySize',
        'edition' => 'Edition',
        'episodeSequence' => 'EpisodeSequence',
        'esrbAgeRating' => 'EsrbAgeRating',
        'feature' => 'Feature',
        'flavor' => 'Flavor',
        'format' => 'Format',
        'gemType' => 'GemType',
        'genre' => 'Genre',
        'golfClubFlex' => 'GolfClubFlex',
        'golfClubLoft' => 'GolfClubLoft',
        'handOrientation' => 'HandOrientation',
        'hardDiskInterface' => 'HardDiskInterface',
        'hardDiskSize' => 'HardDiskSize',
        'hardwarePlatform' => 'HardwarePlatform',
        'hazardousMaterialType' => 'HazardousMaterialType',
        'itemDimensions' => 'ItemDimensions',
        'isAdultProduct' => 'IsAdultProduct',
        'isAutographed' => 'IsAutographed',
        'isEligibleForTradeIn' => 'IsEligibleForTradeIn',
        'isMemorabilia' => 'IsMemorabilia',
        'issuesPerYear' => 'IssuesPerYear',
        'itemPartNumber' => 'ItemPartNumber',
        'label' => 'Label',
        'languages' => 'Languages',
        'legalDisclaimer' => 'LegalDisclaimer',
        'listPrice' => 'ListPrice',
        'manufacturer' => 'Manufacturer',
        'manufacturerMaximumAge' => 'ManufacturerMaximumAge',
        'manufacturerMinimumAge' => 'ManufacturerMinimumAge',
        'manufacturerPartsWarrantyDescription' => 'ManufacturerPartsWarrantyDescription',
        'materialType' => 'MaterialType',
        'maximumResolution' => 'MaximumResolution',
        'mediaType' => 'MediaType',
        'metalStamp' => 'MetalStamp',
        'metalType' => 'MetalType',
        'model' => 'Model',
        'numberOfDiscs' => 'NumberOfDiscs',
        'numberOfIssues' => 'NumberOfIssues',
        'numberOfItems' => 'NumberOfItems',
        'numberOfPages' => 'NumberOfPages',
        'numberOfTracks' => 'NumberOfTracks',
        'operatingSystem' => 'OperatingSystem',
        'opticalZoom' => 'OpticalZoom',
        'packageDimensions' => 'PackageDimensions',
        'packageQuantity' => 'PackageQuantity',
        'partNumber' => 'PartNumber',
        'pegiRating' => 'PegiRating',
        'platform' => 'Platform',
        'processorCount' => 'ProcessorCount',
        'productGroup' => 'ProductGroup',
        'productTypeName' => 'ProductTypeName',
        'productTypeSubcategory' => 'ProductTypeSubcategory',
        'publicationDate' => 'PublicationDate',
        'publisher' => 'Publisher',
        'regionCode' => 'RegionCode',
        'releaseDate' => 'ReleaseDate',
        'ringSize' => 'RingSize',
        'runningTime' => 'RunningTime',
        'shaftMaterial' => 'ShaftMaterial',
        'scent' => 'Scent',
        'seasonSequence' => 'SeasonSequence',
        'seikodoProductCode' => 'SeikodoProductCode',
        'size' => 'Size',
        'sizePerPearl' => 'SizePerPearl',
        'smallImage' => 'SmallImage',
        'studio' => 'Studio',
        'subscriptionLength' => 'SubscriptionLength',
        'systemMemorySize' => 'SystemMemorySize',
        'systemMemoryType' => 'SystemMemoryType',
        'theatricalReleaseDate' => 'TheatricalReleaseDate',
        'title' => 'Title',
        'totalDiamondWeight' => 'TotalDiamondWeight',
        'totalGemWeight' => 'TotalGemWeight',
        'warranty' => 'Warranty',
        'weeeTaxValue' => 'WeeeTaxValue',
    ];

    protected static array $complexArrayTypes = ['creator' => CreatorType::class, 'languages' => LanguageType::class];

    /**
     * @param  ?string[]  $actor  The actor attributes of the item.
     * @param  ?string[]  $artist  The artist attributes of the item.
     * @param  ?string  $aspectRatio  The aspect ratio attribute of the item.
     * @param  ?string  $audienceRating  The audience rating attribute of the item.
     * @param  ?string[]  $author  The author attributes of the item.
     * @param  ?string  $backFinding  The back finding attribute of the item.
     * @param  ?string  $bandMaterialType  The band material type attribute of the item.
     * @param  ?string  $binding  The binding attribute of the item.
     * @param  ?string  $blurayRegion  The Bluray region attribute of the item.
     * @param  ?string  $brand  The brand attribute of the item.
     * @param  ?string  $ceroAgeRating  The CERO age rating attribute of the item.
     * @param  ?string  $chainType  The chain type attribute of the item.
     * @param  ?string  $claspType  The clasp type attribute of the item.
     * @param  ?string  $color  The color attribute of the item.
     * @param  ?string  $cpuManufacturer  The CPU manufacturer attribute of the item.
     * @param  ?DecimalWithUnits  $cpuSpeed  The decimal value and unit.
     * @param  ?string  $cpuType  The CPU type attribute of the item.
     * @param  CreatorType[]|null  $creator  The creator attributes of the item.
     * @param  ?string  $department  The department attribute of the item.
     * @param  ?string[]  $director  The director attributes of the item.
     * @param  ?DecimalWithUnits  $displaySize  The decimal value and unit.
     * @param  ?string  $edition  The edition attribute of the item.
     * @param  ?string  $episodeSequence  The episode sequence attribute of the item.
     * @param  ?string  $esrbAgeRating  The ESRB age rating attribute of the item.
     * @param  ?string[]  $feature  The feature attributes of the item
     * @param  ?string  $flavor  The flavor attribute of the item.
     * @param  ?string[]  $format  The format attributes of the item.
     * @param  ?string[]  $gemType  The gem type attributes of the item.
     * @param  ?string  $genre  The genre attribute of the item.
     * @param  ?string  $golfClubFlex  The golf club flex attribute of the item.
     * @param  ?DecimalWithUnits  $golfClubLoft  The decimal value and unit.
     * @param  ?string  $handOrientation  The hand orientation attribute of the item.
     * @param  ?string  $hardDiskInterface  The hard disk interface attribute of the item.
     * @param  ?DecimalWithUnits  $hardDiskSize  The decimal value and unit.
     * @param  ?string  $hardwarePlatform  The hardware platform attribute of the item.
     * @param  ?string  $hazardousMaterialType  The hazardous material type attribute of the item.
     * @param  ?DimensionType  $itemDimensions  The dimension type attribute of an item.
     * @param  ?bool  $isAdultProduct  The adult product attribute of the item.
     * @param  ?bool  $isAutographed  The autographed attribute of the item.
     * @param  ?bool  $isEligibleForTradeIn  The is eligible for trade in attribute of the item.
     * @param  ?bool  $isMemorabilia  The is memorabilia attribute of the item.
     * @param  ?string  $issuesPerYear  The issues per year attribute of the item.
     * @param  ?string  $itemPartNumber  The item part number attribute of the item.
     * @param  ?string  $label  The label attribute of the item.
     * @param  LanguageType[]|null  $languages  The languages attribute of the item.
     * @param  ?string  $legalDisclaimer  The legal disclaimer attribute of the item.
     * @param  ?Price  $listPrice  The price attribute of the item.
     * @param  ?string  $manufacturer  The manufacturer attribute of the item.
     * @param  ?DecimalWithUnits  $manufacturerMaximumAge  The decimal value and unit.
     * @param  ?DecimalWithUnits  $manufacturerMinimumAge  The decimal value and unit.
     * @param  ?string  $manufacturerPartsWarrantyDescription  The manufacturer parts warranty description attribute of the item.
     * @param  ?string[]  $materialType  The material type attributes of the item.
     * @param  ?DecimalWithUnits  $maximumResolution  The decimal value and unit.
     * @param  ?string[]  $mediaType  The media type attributes of the item.
     * @param  ?string  $metalStamp  The metal stamp attribute of the item.
     * @param  ?string  $metalType  The metal type attribute of the item.
     * @param  ?string  $model  The model attribute of the item.
     * @param  ?int  $numberOfDiscs  The number of discs attribute of the item.
     * @param  ?int  $numberOfIssues  The number of issues attribute of the item.
     * @param  ?int  $numberOfItems  The number of items attribute of the item.
     * @param  ?int  $numberOfPages  The number of pages attribute of the item.
     * @param  ?int  $numberOfTracks  The number of tracks attribute of the item.
     * @param  ?string[]  $operatingSystem  The operating system attributes of the item.
     * @param  ?DecimalWithUnits  $opticalZoom  The decimal value and unit.
     * @param  ?DimensionType  $packageDimensions  The dimension type attribute of an item.
     * @param  ?int  $packageQuantity  The package quantity attribute of the item.
     * @param  ?string  $partNumber  The part number attribute of the item.
     * @param  ?string  $pegiRating  The PEGI rating attribute of the item.
     * @param  ?string[]  $platform  The platform attributes of the item.
     * @param  ?int  $processorCount  The processor count attribute of the item.
     * @param  ?string  $productGroup  The product group attribute of the item.
     * @param  ?string  $productTypeName  The product type name attribute of the item.
     * @param  ?string  $productTypeSubcategory  The product type subcategory attribute of the item.
     * @param  ?string  $publicationDate  The publication date attribute of the item.
     * @param  ?string  $publisher  The publisher attribute of the item.
     * @param  ?string  $regionCode  The region code attribute of the item.
     * @param  ?string  $releaseDate  The release date attribute of the item.
     * @param  ?string  $ringSize  The ring size attribute of the item.
     * @param  ?DecimalWithUnits  $runningTime  The decimal value and unit.
     * @param  ?string  $shaftMaterial  The shaft material attribute of the item.
     * @param  ?string  $scent  The scent attribute of the item.
     * @param  ?string  $seasonSequence  The season sequence attribute of the item.
     * @param  ?string  $seikodoProductCode  The Seikodo product code attribute of the item.
     * @param  ?string  $size  The size attribute of the item.
     * @param  ?string  $sizePerPearl  The size per pearl attribute of the item.
     * @param  ?Image  $smallImage  The image attribute of the item.
     * @param  ?string  $studio  The studio attribute of the item.
     * @param  ?DecimalWithUnits  $subscriptionLength  The decimal value and unit.
     * @param  ?DecimalWithUnits  $systemMemorySize  The decimal value and unit.
     * @param  ?string  $systemMemoryType  The system memory type attribute of the item.
     * @param  ?string  $theatricalReleaseDate  The theatrical release date attribute of the item.
     * @param  ?string  $title  The title attribute of the item.
     * @param  ?DecimalWithUnits  $totalDiamondWeight  The decimal value and unit.
     * @param  ?DecimalWithUnits  $totalGemWeight  The decimal value and unit.
     * @param  ?string  $warranty  The warranty attribute of the item.
     * @param  ?Price  $weeeTaxValue  The price attribute of the item.
     */
    public function __construct(
        public ?array $actor = null,
        public ?array $artist = null,
        public ?string $aspectRatio = null,
        public ?string $audienceRating = null,
        public ?array $author = null,
        public ?string $backFinding = null,
        public ?string $bandMaterialType = null,
        public ?string $binding = null,
        public ?string $blurayRegion = null,
        public ?string $brand = null,
        public ?string $ceroAgeRating = null,
        public ?string $chainType = null,
        public ?string $claspType = null,
        public ?string $color = null,
        public ?string $cpuManufacturer = null,
        public ?DecimalWithUnits $cpuSpeed = null,
        public ?string $cpuType = null,
        public ?array $creator = null,
        public ?string $department = null,
        public ?array $director = null,
        public ?DecimalWithUnits $displaySize = null,
        public ?string $edition = null,
        public ?string $episodeSequence = null,
        public ?string $esrbAgeRating = null,
        public ?array $feature = null,
        public ?string $flavor = null,
        public ?array $format = null,
        public ?array $gemType = null,
        public ?string $genre = null,
        public ?string $golfClubFlex = null,
        public ?DecimalWithUnits $golfClubLoft = null,
        public ?string $handOrientation = null,
        public ?string $hardDiskInterface = null,
        public ?DecimalWithUnits $hardDiskSize = null,
        public ?string $hardwarePlatform = null,
        public ?string $hazardousMaterialType = null,
        public ?DimensionType $itemDimensions = null,
        public ?bool $isAdultProduct = null,
        public ?bool $isAutographed = null,
        public ?bool $isEligibleForTradeIn = null,
        public ?bool $isMemorabilia = null,
        public ?string $issuesPerYear = null,
        public ?string $itemPartNumber = null,
        public ?string $label = null,
        public ?array $languages = null,
        public ?string $legalDisclaimer = null,
        public ?Price $listPrice = null,
        public ?string $manufacturer = null,
        public ?DecimalWithUnits $manufacturerMaximumAge = null,
        public ?DecimalWithUnits $manufacturerMinimumAge = null,
        public ?string $manufacturerPartsWarrantyDescription = null,
        public ?array $materialType = null,
        public ?DecimalWithUnits $maximumResolution = null,
        public ?array $mediaType = null,
        public ?string $metalStamp = null,
        public ?string $metalType = null,
        public ?string $model = null,
        public ?int $numberOfDiscs = null,
        public ?int $numberOfIssues = null,
        public ?int $numberOfItems = null,
        public ?int $numberOfPages = null,
        public ?int $numberOfTracks = null,
        public ?array $operatingSystem = null,
        public ?DecimalWithUnits $opticalZoom = null,
        public ?DimensionType $packageDimensions = null,
        public ?int $packageQuantity = null,
        public ?string $partNumber = null,
        public ?string $pegiRating = null,
        public ?array $platform = null,
        public ?int $processorCount = null,
        public ?string $productGroup = null,
        public ?string $productTypeName = null,
        public ?string $productTypeSubcategory = null,
        public ?string $publicationDate = null,
        public ?string $publisher = null,
        public ?string $regionCode = null,
        public ?string $releaseDate = null,
        public ?string $ringSize = null,
        public ?DecimalWithUnits $runningTime = null,
        public ?string $shaftMaterial = null,
        public ?string $scent = null,
        public ?string $seasonSequence = null,
        public ?string $seikodoProductCode = null,
        public ?string $size = null,
        public ?string $sizePerPearl = null,
        public ?Image $smallImage = null,
        public ?string $studio = null,
        public ?DecimalWithUnits $subscriptionLength = null,
        public ?DecimalWithUnits $systemMemorySize = null,
        public ?string $systemMemoryType = null,
        public ?string $theatricalReleaseDate = null,
        public ?string $title = null,
        public ?DecimalWithUnits $totalDiamondWeight = null,
        public ?DecimalWithUnits $totalGemWeight = null,
        public ?string $warranty = null,
        public ?Price $weeeTaxValue = null,
    ) {}
}
