<?php

namespace App\Http\Controllers\Membership;

use App\Http\Controllers\Controller;
use App\Models\MemberShip_level;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $levels = MemberShip_level::get();
        return response()->json(['levels'=>$levels]);
    }


    public function purchase(Request $request , $id)
    {
        $membershiplevel = MemberShip_level::find($id) ;

        if (!$membershiplevel) {
            return response()->json(['error' => 'Membership level not found'], 404);
        }

        $user = $request->user();
        $user->membershipLevel()->associate($membershiplevel);
        $user->save();

        return response()->json(['message' => 'Membership level purchased successfully'  , 'membership_level'=>$user->membership_level_id], 200);


    }
}
