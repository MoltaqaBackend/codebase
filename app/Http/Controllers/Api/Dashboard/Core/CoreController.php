<?php

namespace App\Http\Controllers\Api\Dashboard\Core;

use App\Exceptions\Api\Auth\AuthException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Dashboard Admin
 * Manage Dashboard Apis
 * 
 * @subgroup Core
 * @subgroupDescription Manage Admins Abilities and other tasks
 */
class CoreController extends Controller
{
    /**
     * check if admin has has one or more Dashboard abilities.
     * 
     * an API which Offers a mean to list abilities with filtering
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function checkAbilities(Request $request)
    {
        $user = $request->user();
        if(is_null($user))
            throw AuthException::userNotFound(['unauthorized' => [__('Unauthorized')]],401);
        $abilities = $user->listCurrentTokenAbilities();
        $dashboardAdminAbilities = generateDashboardAdminAbilities();
        $frontAbilities["abilities"] = checkDashboardAdminAbilities($abilities,$dashboardAdminAbilities);
        return apiSuccess($frontAbilities,[],[],__('Data Found'));
    }

    /**
     * checks if admin has a spesefic ability.
     * 
     * an API which Offers a mean to list abilities with filtering
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function checkAbility(Request $request,$module,$ability)
    {
        $user = $request->user();
        if(is_null($user))
            throw AuthException::userNotFound(['unauthorized' => [__('Unauthorized')]],401);
        $abilities = $user->listCurrentTokenAbilities();
        $frontAbilities['permission'][] = [
            "key" => $ability,
            "has_permission" => in_array($module.' '.$ability,$abilities),
        ];
        return apiSuccess($frontAbilities,[],[],__('Data Found'));
    }
}
