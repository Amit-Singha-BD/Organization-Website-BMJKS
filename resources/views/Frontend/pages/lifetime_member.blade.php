@extends('frontend.layouts.master_layout')
@section('content') 
<!-- lifetime member Section -->
<div class="member_form">

	<div class="application-container">
		<div class="application-header">
			<h2><i class="fas fa-users me-2"></i>আজীবন সদস্য আবেদন ফর্ম</h2>
			<p class="mb-0">সংগঠনের আজীবন সদস্য হওয়ার জন্য নিচের ফর্মটি পূরণ করুন</p>
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
							<label for="fatherName" class="form-label required-field">পিতার নাম</label>
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
							<label for="nid" class="form-label required-field">জাতীয় পরিচয়পত্র নম্বর</label>
							<input type="text" class="form-control" id="nid" required>
						</div>
					</div>
				</div>
				
				<!-- যোগাযোগের তথ্য -->
				<div class="form-section">
					<h4 class="section-title">যোগাযোগের তথ্য</h4>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="presentAddress" class="form-label required-field">বর্তমান ঠিকানা</label>
							<textarea class="form-control" id="presentAddress" rows="3" required></textarea>
						</div>
						<div class="col-md-6 mb-3">
							<label for="permanentAddress" class="form-label required-field">স্থায়ী ঠিকানা</label>
							<textarea class="form-control" id="permanentAddress" rows="3" required></textarea>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="phone" class="form-label required-field">মোবাইল নম্বর</label>
							<input type="tel" class="form-control" id="phone" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="email" class="form-label">ইমেইল ঠিকানা</label>
							<input type="email" class="form-control" id="email">
						</div>
					</div>
				</div>
				
				<!-- পেশাগত তথ্য -->
				<div class="form-section">
					<h4 class="section-title">পেশাগত তথ্য</h4>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="occupation" class="form-label required-field">পেশা</label>
							<select class="form-select" id="occupation" required>
								<option value="" selected disabled>পেশা নির্বাচন করুন</option>
								<option value="government">সরকারি চাকরি</option>
								<option value="private">প্রাইভেট চাকরি</option>
								<option value="business">ব্যবসা</option>
								<option value="student">শিক্ষার্থী</option>
								<option value="housewife">গৃহিণী</option>
								<option value="other">অন্যান্য</option>
							</select>
						</div>
						<div class="col-md-6 mb-3">
							<label for="organization" class="form-label">সংস্থার নাম</label>
							<input type="text" class="form-control" id="organization">
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="designation" class="form-label">পদবী</label>
							<input type="text" class="form-control" id="designation">
						</div>
						<div class="col-md-6 mb-3">
							<label for="education" class="form-label">শিক্ষাগত যোগ্যতা</label>
							<select class="form-select" id="education">
								<option value="" selected disabled>শিক্ষাগত যোগ্যতা নির্বাচন করুন</option>
								<option value="ssc">এসএসসি</option>
								<option value="hsc">এইচএসসি</option>
								<option value="honors">স্নাতক</option>
								<option value="masters">স্নাতকোত্তর</option>
								<option value="phd">পিএইচডি</option>
							</select>
						</div>
					</div>
				</div>
				
				<!-- প্রয়োজনীয় নথি -->
				<div class="form-section">
					<h4 class="section-title">প্রয়োজনীয় নথি</h4>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label class="form-label required-field">জাতীয় পরিচয়পত্রের কপি</label>
							<div class="upload-area">
								<div class="upload-icon">
									<i class="fas fa-cloud-upload-alt"></i>
								</div>
								<p>এখানে ক্লিক করে ফাইল আপলোড করুন</p>
								<input type="file" class="d-none" id="nidFile" required>
								<small class="text-muted">সর্বোচ্চ সাইজ: 2MB</small>
							</div>
						</div>
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