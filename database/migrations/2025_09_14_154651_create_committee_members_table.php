<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->id();
            $table->integer('CommitteeYear_id'); //ফরেইন কী
            $table->string('name'); // নাম
            $table->string('photo')->nullable(); // ছবি (optional)
            $table->integer('role')->unique(); // পদবী
            $table->text('address')->nullable(); // ঠিকানা
            $table->string('mobile'); // মোবাইল নম্বর
            $table->string('email')->nullable(); // ইমেইল
            $table->string('facebook')->nullable(); // ফেসবুক লিঙ্ক
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committee_members');
    }
};
