<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use App\Models\Banner;

class HomePageSettingsController extends Controller
{
    use UploadTrait;

    public function __construct() {
        $this->middleware('admin');
    }


    public function createBanner() {
        $banner = Banner::where('page_type', 'homepage')->first();
        return view('admin.settings.homepage.banner.create', compact('banner'));

    }

    public function storeBanner(Request $request) {
       
       $banner = Banner::firstOrNew(['page_type' => 'homepage']);

       $banner->title = $request->input('title');
       $banner->subtitle = $request->input('subtitle');

        if ($request->has('image') && $request->hasFile('image')) {

            $image = $request->file('image');

            $name = Str::slug($request->input('title')).'_'.time();

            $folder = '/uploads/banner/';

            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            
            $this->uploadOne($image, $folder, 'public', $name);

            $banner->image = $filePath;

        } 

        $banner->save();

        return redirect('admin/banner/create')->with('success', 'Banner Updated SuccessFully');
    }

}
