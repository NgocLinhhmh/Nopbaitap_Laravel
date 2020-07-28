<?php

namespace App\Http\Controllers;

use app\Models\Users;
use Illuminate\Http\Request;
use App\us;

class Search extends Controller
{
	public function getSearch(Request $request){
        if($request["id"] != "" && $request["name"] != "" && $request["class"] != ""){
            $Userss=us::where('id',$request["id"])
                    ->where('name','like','%'.$request["name"].'%')
                    ->where('class','like','%'.$request["class"].'%')
                    ->orderByDesc('id')
                    ->get();
            return view('searchres', compact('Userss'));
        }
        else{
            if($request["name"] != "" && $request["class"] != ""){
                $Userss=us::where('name','like','%'.$request["name"].'%')
                        ->where('class','like','%'.$request["class"].'%')
                        ->orderByDesc('id')
                        ->get();
                return view('searchres', compact('Userss'));
            }
            elseif($request["id"] != "" && $request["class"] != ""){
                $Userss=us::where('id', 'like', $request["id"])
                        ->where('class','like','%'.$request["class"].'%')
                        ->orderByDesc('id')
                        ->get();
                return view('searchres', compact('Userss'));
            }
            elseif($request["id"] != "" && $request["name"] != ""){
                $Userss=us::where('id', 'like', $request["id"])
                        ->where('name','like','%'.$request["name"].'%')
                        ->orderByDesc('id')
                        ->get();
                return view('searchres', compact('Userss'));
            }

            elseif($request["id"] != ""){
                $Userss=us::where('id', 'like', $request["id"])
                        ->orderByDesc('id')
                        ->get();
                return view('searchres', compact('Userss'));
            }
            elseif($request["name"] != ""){
                $Userss=us::where('name','like','%'.$request["name"].'%')
                        ->orderByDesc('id')
                        ->get();
                return view('searchres', compact('Userss'));
            }
            elseif($request["class"] != ""){
                $Userss=us::where('class','like','%'.$request["class"].'%')
                        ->orderByDesc('id')
                        ->get();
                return view('searchres', compact('Userss'));
            }
            else{
                $Userss = us::all();
                return view('searchres', compact('Userss'));
            }
        }
        
        
    	return view('searchres', compact('Userss'));
    }
    
}
