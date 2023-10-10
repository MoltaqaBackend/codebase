<?php

namespace App\Classes;

use App\Models\CarCategory;
use App\Models\CarType;
use App\Models\Nationality;
use App\Models\Setting;
use App\Models\ShipmentSubType;
use App\Models\ShipmentType;
use App\Models\Slide;

class CacheConstant
{
    // Keys
    public const NATIONALITIES = "nationalities";
    public const SETTING = "setting";
    public const SLIDE = "slide";
    public const CAR_TYPE = "cartypes";
    public const CAR_CATEGORY = "carcategories";
    public const SHIPMENT_TYPE = "shipmenttypes";
    public const SHIPMENT_SUB_TYPE = "shipmentsubtypes";
    // Models
    public const NATIONALITIES_MODEL = Nationality::class;
    public const SETTING_MODEL = Setting::class;
    public const SLIDE_MODEL = Slide::class;
    public const CAR_TYPE_MODEL = CarType::class;
    public const CAR_CATEGORY_MODEL = CarCategory::class;
    public const SHIPMENT_TYPE_MODEL = ShipmentType::class;
    public const SHIPMENT_SUB_TYPE_MODEL = ShipmentSubType::class;
}
