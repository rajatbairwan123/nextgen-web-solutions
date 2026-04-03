<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first();

        $logo = $setting->logo ?? null;

        if($request->hasFile('logo')){
            $logo = $request->file('logo')->store('settings','public');
        }

        Setting::updateOrCreate(
            ['id' => 1],
            [
                'site_name'=>$request->site_name,
                'logo'=>$logo,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'footer_text'=>$request->footer_text
            ]
        );

        return back()->with('success','Settings Updated');
    }
}