<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Land;
use TCG\Voyager\Models\Page;

class FrontendController extends Controller
{
    // Xử lý trang chi tiết bds
    public function landDetail($slug, $id){
        $land = Land::where(["slug" => $slug, "id" => $id])->first();
    
        return view('theme-default.pages.land-detail')->with(['land' => $land]);  
    }

    // Xử lý trang Thiết kế nội thất
    public function thietKeNoiThat(){
        $page = Page::where(["status" => "ACTIVE", "slug" => 'thiet-ke-noi-that'])->first();
            
        return view('theme-default.pages.thiet-ke-noi-that')->with(['page' => $page]);
    }

    // Xử lý trang Thi công nội thất
    public function thiCongNoiThat(){
        $page = Page::where(["status" => "ACTIVE", "slug" => 'thi-cong-noi-that'])->first();
            
        return view('theme-default.pages.thi-cong-noi-that')->with(['page' => $page]);
    }

    public function getSearch(Request $request){
        if($request->has('search')){
            $search_results = Land::search($request->input('search'));
            return view('theme-default.pages.search-result', ['search_results' => $search_results]);
        }
        return view('theme-default.pages.search-result');
    }
}
