@extends('frontend.layouts.master_layout')
@section('content') 
<!-- lifetime member Section -->
<div class="member_form">

	<div class="application-container">
		<div class="application-header">
			<h2><i class="fas fa-users me-2"></i>সাধারণ সদস্য আবেদন ফর্ম</h2>
			<p class="mb-0">সংগঠনের সাধারণ সদস্য হওয়ার জন্য নিচের ফর্মটি পূরণ করুন</p>
		</div>
		
		<div class="application-body">
			<form id="membershipForm">
				<!-- ব্যক্তিগত তথ্য -->
				<div class="form-section">
					<h4 class="section-title">ব্যক্তিগত তথ্য</h4>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="fullName" class="form-label required-field">পূর্ণ নাম</label>
							<input type="text" class="form-control" id="fullName" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="fatherName" class="form-label required-field">পিতার নাম / স্বামীর নাম</label>
							<input type="text" class="form-control" id="fatherName" required>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="motherName" class="form-label required-field">মাতার নাম</label>
							<input type="text" class="form-control" id="motherName" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="dateOfBirth" class="form-label required-field">জন্ম তারিখ</label>
							<input type="date" class="form-control" id="dateOfBirth" required>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="gender" class="form-label required-field">লিঙ্গ</label>
							<select class="form-select" id="gender" required>
								<option value="" selected disabled>লিঙ্গ নির্বাচন করুন</option>
								<option value="male">পুরুষ</option>
								<option value="female">মহিলা</option>
								<option value="other">অন্যান্য</option>
							</select>
						</div>
						<div class="col-md-6 mb-3">
							<label for="caste" class="form-label required-field">গোত্র</label>
							<select class="form-select" id="caste" required>
								<option value="" selected disabled>গোত্র নির্বাচন করুন</option>
								<option value="">মধুকল্য</option>
								<option value="">কাশ্যব</option>
								<option value="">আংগ্রিশ্য</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="gender" class="form-label required-field">বৈবাহিক অবস্থা</label>
							<select class="form-select" id="gender" required>
								<option value="" selected disabled>বৈবাহিক অবস্থা নির্বাচন করুন</option>
								<option value="married">বিবাহিত</option>
								<option value="single">অবিবাহিত</option>
								<option value="divorced">তালাকপ্রাপ্ত</option>
								<option value="widowed">বিধবা</option>
							</select>
						</div>
						<div class="col-md-6 mb-3">
							<label for="blood_group" class="form-label required-field">রক্তের গ্রুপ</label>
								<select name="blood_group" id="blood_group" class="form-select">
                                <option value="">নির্বাচন করুন</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
						</div>
					</div>
				</div>
				
				<!-- যোগাযোগের তথ্য -->
				<div class="form-section">
					<h4 class="section-title">যোগাযোগের তথ্য</h4>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="village" class="form-label required-field">গ্রাম</label>
							<input type="text" name="village" class="form-control" id="village" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="post_office" class="form-label required-field">পোষ্ট অফিশ</label>
							<input type="text" name="post_office" class="form-control" id="post_office" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="thana" class="form-label required-field">থানা</label>
							<input type="text" name="thana" class="form-control" id="thana" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="district" class="form-label required-field">জেলা</label>
							<input type="text" name="district" class="form-control" id="district" required>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="phone" class="form-label required-field">মোবাইল নম্বর</label>
							<input type="tel" class="form-control" id="phone" required>
						</div>
					</div>
				</div>
				
				<!-- পেশাগত তথ্য -->
				<div class="form-section">
					<h4 class="section-title">পেশাগত তথ্য</h4>
					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="profession" class="form-label required-field">পেশা</label>
							<input type="text" name="profession" class="form-control" id="profession" required>
						</div>

					</div>
				</div>
				
				<!-- প্রয়োজনীয় নথি -->
				<div class="form-section">
					<h4 class="section-title">প্রয়োজনীয় নথি</h4>
					<div class="row">
						<!-- <div class="col-md-6 mb-3">
							<label class="form-label required-field">জাতীয় পরিচয়পত্রের কপি</label>
							<div class="upload-area">
								<div class="upload-icon">
									<i class="fas fa-cloud-upload-alt"></i>
								</div>
								<p>এখানে ক্লিক করে ফাইল আপলোড করুন</p>
								<input type="file" class="d-none" id="nidFile" required>
								<small class="text-muted">সর্বোচ্চ সাইজ: 2MB</small>
							</div>
						</div> -->
						<div class="col-md-6 mb-3">
							<label class="form-label required-field">পাসপোর্ট সাইজের ছবি</label>
							<div class="upload-area">
								<div class="upload-icon">
									<i class="fas fa-camera"></i>
								</div>
								<p>এখানে ক্লিক করে ফাইল আপলোড করুন</p>
								<input type="file" class="d-none" id="photoFile" accept="image/*" required>
								<small class="text-muted">সর্বোচ্চ সাইজ: 1MB</small>
							</div>
						</div>
					</div>
				</div>
				
				<!-- শপথ -->
				<div class="form-section">
					<div class="form-check mb-4">
						<input class="form-check-input" type="checkbox" id="agreeTerms" required>
						<label class="form-check-label text-dark" for="agreeTerms">
							আমি ঘোষণা করছি যে উপরে প্রদত্ত সকল তথ্য সঠিক এবং সম্পূর্ণ। আমি সংগঠনের নিয়মাবলী মেনে চলতে বাধ্য থাকব।
						</label>
					</div>
				</div>
				
				<!-- জমা দিন বাটন -->
				<div class="text-center">
					<button type="submit" class="btn btn-primary btn-lg">
						<i class="fas fa-paper-plane me-2"></i>আবেদন জমা দিন
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection