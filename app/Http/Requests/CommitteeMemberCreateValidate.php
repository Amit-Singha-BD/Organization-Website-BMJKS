<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommitteeMemberCreateValidate extends FormRequest {

    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'CommitteeYear_id' => 'required|integer',
            'name'             => 'required|string|max:255',
            'photo'            => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'role'             => 'required|integer|in:1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16',
            'address'          => 'required|string|max:500',
            'mobile'           => 'required|regex:/^01[0-9]{9}$/',
            'email'            => 'required|email|max:255',
            'facebook'         => 'required|url|max:255',
        ];
    }

    public function messages(): array {
        return [
            'CommitteeYear_id.required' => 'কমিটি আইডি অবশ্যই দিতে হবে।',
            'CommitteeYear_id.integer'  => 'কমিটি আইডি অবশ্যই একটি সংখ্যা হতে হবে।',

            'name.required' => 'সদস্যের নাম অবশ্যই দিতে হবে।',
            'name.string'   => 'নামের ফরম্যাট সঠিক নয়।',
            'name.max'      => 'নামের দৈর্ঘ্য সর্বোচ্চ ২৫৫ অক্ষর হতে পারবে।',

            'photo.image'   => 'ছবিটি অবশ্যই একটি ইমেজ হতে হবে।',
            'photo.mimes'   => 'ছবিটি শুধুমাত্র jpg, jpeg বা png ফরম্যাটে হতে পারবে।',
            'photo.max'     => 'ছবির সাইজ সর্বোচ্চ ২ মেগাবাইট হতে পারবে।',

            'role.required' => 'পদবী অবশ্যই নির্বাচন করতে হবে।',
            'role.integer'   => 'পদবী সঠিক ফরম্যাটে দিতে হবে।',

            'address.required' => 'ঠিকানা অবশ্যই দিতে হবে।',
            'address.string'   => 'ঠিকানার ফরম্যাট সঠিক নয়।',
            'address.max'      => 'ঠিকানার দৈর্ঘ্য সর্বোচ্চ ৫০০ অক্ষর হতে পারবে।',

            'mobile.required' => 'মোবাইল নম্বর অবশ্যই দিতে হবে।',
            'mobile.regex'    => 'সঠিক ফরম্যাটে মোবাইল নম্বর দিন (যেমন: 01XXXXXXXXX)।',

            'email.required' => 'ইমেইল অবশ্যই দিতে হবে।',
            'email.email'    => 'সঠিক ইমেইল ঠিকানা দিন।',
            'email.max'      => 'ইমেইলের দৈর্ঘ্য সর্বোচ্চ ২৫৫ অক্ষর হতে পারবে।',

            'facebook.required' => 'ফেসবুক লিঙ্ক অবশ্যই দিতে হবে।',
            'facebook.url'      => 'সঠিক ফেসবুক লিঙ্ক দিন।',
            'facebook.max'      => 'ফেসবুক লিঙ্ক সর্বোচ্চ ২৫৫ অক্ষর হতে পারবে।',
        ];
    }
}
