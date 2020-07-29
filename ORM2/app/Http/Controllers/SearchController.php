<?php

namespace App\Http\Controllers;

use app\Models\Users;
use Illuminate\Http\Request;
use App\User;

class Search extends Controller
{
	public function getSearch(Request $request){
        if($request["user_id"] != "" && $request["phone"] != "" && $request["role_name"] != ""){
            $Users=Roles::where('id',$request["id"])
                    ->where('name','like','%'.$request["name"].'%')
            return view('result', compact('Users'));
        }
        else{
                $Users = Roles::all();
                return view('result', compact('Users'));
            }
        }
        
        
    	return view('result', compact('Users'));
    }
    
}
