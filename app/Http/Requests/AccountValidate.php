<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountValidate extends FormRequest {

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array {
        return [
            "name"         => "required|string|min:4|max:50|unique:users,name",
            "username"     => "required|string|min:10|max:50|unique:users,username",
            "phone_no"     => "required|digits:11|unique:users,phone_no",
            "account_type" => "required|string|min:5|max:50",
            "password"     => "required|min:8|max:20|confirmed",
        ];
    }

    public function messages(): array {
        return [
            "name.required" => "নামের ফিল্ডটি অবশ্যই পূরণ করতে হবে।",
            "name.string"   => "নাম অবশ্যই স্ট্রিং আকারে হতে হবে।",
            "name.min"      => "নামটি অন্তত ৪ অক্ষরের হতে হবে।",
            "name.max"      => "নাম সর্বাধিক ৫০ অক্ষরের হতে পারবে।",
            "name.unique"   => "এই নামটি ইতিমধ্যে ব্যবহৃত হয়েছে।",

            "username.required" => "ইউজারনেম ফিল্ডটি অবশ্যই পূরণ করতে হবে।",
            "username.string"   => "ইউজারনেম অবশ্যই স্ট্রিং আকারে হতে হবে।",
            "username.min"      => "ইউজারনেম অন্তত ১০ অক্ষরের হতে হবে।",
            "username.max"      => "ইউজারনেম সর্বাধিক ৫০ অক্ষরের হতে পারবে।",
            "username.unique"   => "এই ইউজারনেম ইতিমধ্যে ব্যবহৃত হয়েছে।",

            "phone_no.required" => "মোবাইল নম্বর অবশ্যই দিতে হবে।",
            "phone_no.digits"   => "মোবাইল নম্বর অবশ্যই ১১ সংখ্যার হতে হবে।",
            "phone_no.unique"   => "এই মোবাইল নম্বর ইতিমধ্যে ব্যবহৃত হয়েছে।",

            "account_type.required" => "ব্রাঞ্চের নাম অবশ্যই দিতে হবে।",
            "account_type.string"   => "ব্রাঞ্চের নাম অবশ্যই স্ট্রিং আকারে হতে হবে।",
            "account_type.min"      => "ব্রাঞ্চের নাম অন্তত ৫ অক্ষরের হতে হবে।",
            "account_type.max"      => "ব্রাঞ্চের নাম সর্বাধিক ৫০ অক্ষরের হতে পারবে।",

            "password.required"  => "পাসওয়ার্ড অবশ্যই দিতে হবে।",
            "password.min"       => "পাসওয়ার্ড অন্তত ৮ অক্ষরের হতে হবে।",
            "password.max"       => "পাসওয়ার্ড সর্বাধিক ২০ অক্ষরের হতে পারবে।",
            "password.confirmed" => "পাসওয়ার্ড এবং নিশ্চিত পাসওয়ার্ড মিলছে না।",
        ];
    }
}
