<?php

namespace App\Http\Controllers\Api\Dev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * @group Dev Only
 * 
 * <aside class="badge badge-darkred">Dev Apis for Development Process only.<br><hr>
 * Must not included in any part of the system.<br><hr>
 * The purpouse to use as utilties<br>to aid developers without depending on backend developer.</aside>
 * 
 * @subgroup Static Mobile Or Email binders for testing OTP
 * @subgroupDescription Allow you to bind any real or fake email or mobile to recieve static OTP code 1234
 */
class DevController extends Controller
{
    /**
     * static mobile number OTP.
     * 
     * an API which Offers a mean to allocate static OTP to a mobile number
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * 
     * @bodyParam mobile string required mobile number to recieve static otp.Example: 0564777888
     */
    public function staticMobileOTP(Request $request)
    {
        $listOfStaticNumbers = json_decode(Storage::disk('local')->get('fixed_otp_numbers.json'),true);
        array_push($listOfStaticNumbers,$request->mobile);
        Storage::disk('local')->put('fixed_otp_numbers.json',json_encode($listOfStaticNumbers));
        return apiSuccess(
            array()
            ,[],[],__('Successfull Operation'));
    }

    /**
     * static email address OTP.
     * 
     * an API which Offers a mean to allocate static OTP to an email address
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * 
     * @bodyParam email string required email address to recieve static otp.Example: fahmi@moltaqa.net
     */
    public function staticEmailOTP(Request $request)
    {
        $listOfStaticEmails = json_decode(Storage::disk('local')->get('fixed_otp_emails.json'),true);
        array_push($listOfStaticEmails,$request->email);
        Storage::disk('local')->put('fixed_otp_emails.json',json_encode($listOfStaticEmails));
        return apiSuccess(
            array()
            ,[],[],__('Successfull Operation'));
    }
}
