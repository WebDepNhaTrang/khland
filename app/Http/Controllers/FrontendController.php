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
        // $news_others = Post::where(["status" => "PUBLISHED"])
        //         ->orderBy('created_at', 'desc')
        //         ->skip(4)->take(5)->get();
            
        return view('theme-default.pages.thiet-ke-noi-that')->with(['page' => $page]);
    }

    // Xử lý trang Thi công nội thất
    public function thiCongNoiThat(){
        $page = Page::where(["status" => "ACTIVE", "slug" => 'thi-cong-noi-that'])->first();
        // $news_others = Post::where(["status" => "PUBLISHED"])
        //         ->orderBy('created_at', 'desc')
        //         ->skip(4)->take(5)->get();
            
        return view('theme-default.pages.thi-cong-noi-that')->with(['page' => $page]);
    }
}
