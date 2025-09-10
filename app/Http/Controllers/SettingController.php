<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandingValidate;
use App\Http\Requests\FooterLinkValidate;
use App\Http\Requests\SEOValidate;
use App\Http\Requests\SlideDataValidate;
use App\Http\Requests\SocialMediaValidate;
use App\Http\Requests\AddressValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Setting;

class SettingController extends Controller
{
    public function siteSettings(){
        $settings = Setting::first();
        return view('Backend.Pages.site-Settings', compact('settings'));
    }

    public function brandingUpdate(BrandingValidate $request){
        $validateData = $request->validated();

        $settings = Setting::first();

        if (!$settings) {
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        if ($request->hasFile('logo')) {
            if ($settings->logo_path && Storage::disk('public')->exists($settings->logo_path)) {
                Storage::disk('public')->delete($settings->logo_path);
            }

            $logo = $request->file('logo');
            $logoName = time() . '_' . uniqid() . '.' . $logo->getClientOriginalExtension();
            $logoPath = $logo->storeAs('branding', $logoName, 'public');
        } else {
            $logoPath = $settings->logo_path;
        }

        if ($request->hasFile('favicon')) {
            if ($settings->favicon_path && Storage::disk('public')->exists($settings->favicon_path)) {
                Storage::disk('public')->delete($settings->favicon_path);
            }

            $favicon = $request->file('favicon');
            $faviconName = time() . '_' . uniqid() . '.' . $favicon->getClientOriginalExtension();
            $faviconPath = $favicon->storeAs('branding', $faviconName, 'public');
        } else {
            $faviconPath = $settings->favicon_path;
        }

        $settings->update([
            "site_title"   => $validateData['site_title'],
            "tagline"      => $validateData['tagline'],
            "logo_path"    => $logoPath,
            "favicon_path" => $faviconPath,
        ]);

        return redirect()->back()->with("success", "সাইটের ব্র্যান্ডিং সফলভাবে আপডেট হয়েছে।");
    }


    public function seoUpdate(SEOValidate $request){
        $validateData = $request->validated();

        $settings = Setting::first();
        if(!$settings){
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        $settings->update([
            "meta_title"            => $validateData['meta_title'],
            "meta_description"      => $validateData['meta_description'],
            "meta_keywords"         => $validateData['meta_keywords'],
            "google_search_console" => $validateData['google_search_console'],
            "google_analytics"      => $validateData['google_analytics'],
        ]);

        return redirect()->back()->with("success", "সাইটের SEO সফলভাবে আপডেট হয়েছে।");
    }

    public function slideOneUpdate(SlideDataValidate $request){

        $validateData = $request->validated();

        $settings = Setting::first();
        if(!$settings){
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        if ($request->hasFile('slide_image')) {
            if ($settings->slide_image_1_path && Storage::disk('public')->exists($settings->slide_image_1_path)) {
                Storage::disk('public')->delete($settings->slide_image_1_path);
            }

            $image = $request->file('slide_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('slide', $imageName, 'public');
        } else {
            $imagePath = $settings->slide_image_1_path;
        }

        $settings->update([
            "slide_title_1"       => $validateData['slide_title'],
            "slide_description_1" => $validateData['slide_description'],
            "slide_image_1_path"  => $imagePath,
        ]);

        return redirect()->back()->with("success", "স্লাইড তথ্য সফলভাবে আপডেট হয়েছে।");
    }

    public function slideTwoUpdate(SlideDataValidate $request){

        $validateData = $request->validated();

        $settings = Setting::first();
        if(!$settings){
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        if ($request->hasFile('slide_image')) {
            if ($settings->slide_image_2_path && Storage::disk('public')->exists($settings->slide_image_2_path)) {
                Storage::disk('public')->delete($settings->slide_image_2_path);
            }

            $image = $request->file('slide_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('slide', $imageName, 'public');
        } else {
            $imagePath = $settings->slide_image_2_path;
        }

        $settings->update([
            "slide_title_2"       => $validateData['slide_title'],
            "slide_description_2" => $validateData['slide_description'],
            "slide_image_2_path"  => $imagePath,
        ]);

        return redirect()->back()->with("success", "স্লাইড তথ্য সফলভাবে আপডেট হয়েছে।");
    }

    public function slideThreeUpdate(SlideDataValidate $request){

        $validateData = $request->validated();

        $settings = Setting::first();
        if(!$settings){
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        if ($request->hasFile('slide_image')) {
            if ($settings->slide_image_3_path && Storage::disk('public')->exists($settings->slide_image_3_path)) {
                Storage::disk('public')->delete($settings->slide_image_3_path);
            }

            $image = $request->file('slide_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('slide', $imageName, 'public');
        } else {
            $imagePath = $settings->slide_image_3_path;
        }

        $settings->update([
            "slide_title_3"       => $validateData['slide_title'],
            "slide_description_3" => $validateData['slide_description'],
            "slide_image_3_path"  => $imagePath,
        ]);

        return redirect()->back()->with("success", "স্লাইড তথ্য সফলভাবে আপডেট হয়েছে।");
    }

    public function slideFourUpdate(SlideDataValidate $request){

        $validateData = $request->validated();

        $settings = Setting::first();
        if(!$settings){
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        if ($request->hasFile('slide_image')) {
            if ($settings->slide_image_4_path && Storage::disk('public')->exists($settings->slide_image_4_path)) {
                Storage::disk('public')->delete($settings->slide_image_4_path);
            }

            $image = $request->file('slide_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('slide', $imageName, 'public');
        } else {
            $imagePath = $settings->slide_image_4_path;
        }

        $settings->update([
            "slide_title_4"       => $validateData['slide_title'],
            "slide_description_4" => $validateData['slide_description'],
            "slide_image_4_path"  => $imagePath,
        ]);

        return redirect()->back()->with("success", "স্লাইড তথ্য সফলভাবে আপডেট হয়েছে।");
    }

    public function slideFiveUpdate(SlideDataValidate $request){

        $validateData = $request->validated();

        $settings = Setting::first();
        if(!$settings){
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        if ($request->hasFile('slide_image')) {
            if ($settings->slide_image_5_path && Storage::disk('public')->exists($settings->slide_image_5_path)) {
                Storage::disk('public')->delete($settings->slide_image_5_path);
            }

            $image = $request->file('slide_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('slide', $imageName, 'public');
        } else {
            $imagePath = $settings->slide_image_5_path;
        }

        $settings->update([
            "slide_title_5"       => $validateData['slide_title'],
            "slide_description_5" => $validateData['slide_description'],
            "slide_image_5_path"  => $imagePath,
        ]);

        return redirect()->back()->with("success", "স্লাইড তথ্য সফলভাবে আপডেট হয়েছে।");
    }

    public function slideSixUpdate(SlideDataValidate $request){

        $validateData = $request->validated();

        $settings = Setting::first();
        if(!$settings){
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        if ($request->hasFile('slide_image')) {
            if ($settings->slide_image_6_path && Storage::disk('public')->exists($settings->slide_image_6_path)) {
                Storage::disk('public')->delete($settings->slide_image_6_path);
            }

            $image = $request->file('slide_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('slide', $imageName, 'public');
        } else {
            $imagePath = $settings->slide_image_6_path;
        }

        $settings->update([
            "slide_title_6"       => $validateData['slide_title'],
            "slide_description_6" => $validateData['slide_description'],
            "slide_image_6_path"  => $imagePath,
        ]);

        return redirect()->back()->with("success", "স্লাইড তথ্য সফলভাবে আপডেট হয়েছে।");
    }

    public function footerLinkUpdate(FooterLinkValidate $request){

        $validateData = $request->validated();

        $settings = Setting::first();
        if(!$settings){
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        $settings->update([
            "link_name_1" => $validateData['link_name_1'],
            "link_1" => $validateData['link_1'],

            "link_name_2" => $validateData['link_name_2'],
            "link_2" => $validateData['link_2'],

            "link_name_3" => $validateData['link_name_3'],
            "link_3" => $validateData['link_3'],
        ]);

        return redirect()->back()->with("success", "ফুটার লিংক সফলভাবে আপডেট হয়েছে।");
    }

    public function socialUpdate(SocialMediaValidate $request){
        $validateData = $request->validated();

        $settings = Setting::first();
        if(!$settings){
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        $settings->update([
            "facebook_url" => $validateData['facebook_url'],
            "youtube_url" => $validateData['youtube_url'],
            "twitter_url" => $validateData['twitter_url'],
            "instagram_url" => $validateData['instagram_url'],
        ]);

        return redirect()->back()->with("success", "সোশ্যাল মিডিয়া লিংক সফলভাবে আপডেট হয়েছে।");
    }

    public function contactInfoUpdate(AddressValidate $request){
        $validateData = $request->Validated();

        $settings = Setting::first();
        if(!$settings){
            return redirect()->back()->with("error", "সাইট সেটিংস পাওয়া যায়নি।");
        }

        $settings->update([
            "email"    => $validateData['email'],
            "phone_no" => $validateData['phone_no'],
            "address"  => $validateData['address'],
        ]);

        return redirect()->back()->with("success", "যোগাযোগের তথ্য সফলভাবে আপডেট হয়েছে।");
    }
}