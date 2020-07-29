<?php

namespace App\Http\Controllers;

use app\Models\Users;
use Illuminate\Http\Request;
use App\User;

class Search extends Controller
{
	public function getSearch(Request $request){
        if($request["user_id"] != "" && $request["phone"] != "" && $request["role_name"] != ""){
            $Users=us::where('user_id',$request["id"])
                    ->where('role_name','like','%'.$request["name"].'%')
            return view('result', compact('Users'));
        }
        else{
                $Users = us::all();
                return view('result', compact('Users'));
            }
        }
        
        
    	return view('result', compact('Users'));
    }
    
}
