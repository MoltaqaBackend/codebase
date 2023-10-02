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
    const NATIONALITIES = "nationalities";
    const SETTING = "setting";
    const SLIDE = "slide";
    const CAR_TYPE = "cartypes";
    const CAR_CATEGORY = "carcategories";
    const SHIPMENT_TYPE = "shipmenttypes";
    const SHIPMENT_SUB_TYPE = "shipmentsubtypes";
    // Models
    const NATIONALITIES_MODEL = Nationality::class;
    const SETTING_MODEL = Setting::class;
    const SLIDE_MODEL = Slide::class;
    const CAR_TYPE_MODEL= CarType::class;
    const CAR_CATEGORY_MODEL= CarCategory::class;
    const SHIPMENT_TYPE_MODEL= ShipmentType::class;
    const SHIPMENT_SUB_TYPE_MODEL= ShipmentSubType::class;
}
