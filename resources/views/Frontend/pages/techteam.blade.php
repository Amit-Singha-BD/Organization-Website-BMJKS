@extends('frontend.layouts.master_layout')
@section('content') 
	<!-- Tech Team Section -->

		<section class="page-header mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h1 class="display-4 fw-bold text-dark">আমাদের টেক টিমের সদস্যরা</h1>
						<div class="border-bottom border-white border-3 mx-auto" style="width: 100px; background-color:#1A9B9F;"></div>
						<p class="mt-2 lead text-dark">ওয়েবসাইট ও প্রযুক্তি উন্নয়নে অবদান রাখা সদস্যবৃন্দ</p>
					</div>
				</div>
			</div>
		</section>

		<div class="py-4">
			<!-- Member 2 -->
			<div class="row justify-content-center p-2">
				<div class="col-12 col-lg-10">
					<div class="card shadow-lg overflow-hidden" style="border-radius: 15px; border: none; height: 20rem;">
						<div class="row g-0 h-100">
							<!-- প্রোফাইল সেকশন -->
							<div class="col-md-3 profile-section  position-relative z-1">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" 
										 alt="Laravel Expert in Bangladesh - Roni Singha" class="profile-img  mb-3">
									<h4 class="fw-bold mb-1">রনি সিংহ</h4>
									<p class="mb-1">ওয়েব ডেভেলপার</p>


								</div>
							</div>

							<!-- উক্তি সেকশন -->
							<div class="col-md-9 quote-section p-4">
								<div class="d-flex flex-column h-100">
									<p class="quote-text flex-grow-1">
										ওয়েবসাইটের ফ্রন্টএন্ড ও ব্যাকএন্ড—উভয় ক্ষেত্রেই গুরুত্বপূর্ণ অবদান রেখেছেন রনি সিংহ।
										Laravel ফ্রেমওয়ার্ক ব্যবহার করে শক্তিশালী ব্যাকএন্ড তৈরি করেছেন এবং Bootstrap ব্যবহার করে
										রেসপন্সিভ ও ব্যবহারকারী-বান্ধব UI ডিজাইন করেছেন। এছাড়া ডাটাবেজ ম্যানেজমেন্ট এবং সাইটের নিরাপত্তা নিশ্চিত করতেও
										সক্রিয়ভাবে কাজ করেছেন।
									</p>
									<hr>
									<div class="d-flex flex-nowrap overflow-auto justify-content-center justify-content-lg-end gap-2 p-2 ">
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0 ">
										  <i class="fab fa-facebook-f"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
										  <i class="fab fa-twitter"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
										  <i class="fab fa-youtube"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
										  <i class="fab fa-instagram"></i>
										</a>
									 </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Member 3 -->
			<div class="row justify-content-center p-2">
				<div class="col-12 col-lg-10">
					<div class="card shadow-lg overflow-hidden" style="border-radius: 15px; border: none; height: 20rem;">
						<div class="row g-0 h-100">
							<!-- প্রোফাইল সেকশন -->
							<div class="col-md-3 profile-section  position-relative z-1">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<img src="{{ asset('assets/images/amitsingha.png') }}" 
										 alt="Laravel Expert in Bangladesh - Amit Singha" class="profile-img  mb-3">
									<h4 class="fw-bold mb-1">অমিত সিংহ</h4>
									<p class="mb-1">ওয়েব ডেভেলপার</p>


								</div>
							</div>

							<!-- উক্তি সেকশন -->
							<div class="col-md-9 quote-section p-4">
								<div class="d-flex flex-column h-100">
									<p class="quote-text flex-grow-1">
										অমিত সিংহ ওয়েবসাইটের ফ্রন্টএন্ড ও ব্যাকএন্ড উভয় দিকেই অবদান রেখেছেন। Laravel ব্যবহার করে সার্ভার-সাইড লজিক ডেভেলপ করেছেন
										এবং
										Bootstrap ব্যবহার করে আধুনিক ও রেসপন্সিভ UI তৈরি করেছেন। সার্ভার কনফিগারেশন এবং পারফরম্যান্স অপ্টিমাইজেশনে গুরুত্বপূর্ণ
										অবদান রেখেছেন।
									</p>
									<hr>
									<div class="d-flex flex-nowrap overflow-auto justify-content-center justify-content-lg-end gap-2 p-2 ">
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0 ">
										  <i class="fab fa-facebook-f"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
										  <i class="fab fa-twitter"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
										  <i class="fab fa-youtube"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
										  <i class="fab fa-instagram"></i>
										</a>
									 </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center p-2">
				<div class="col-12 col-lg-10">
					<div class="card shadow-lg overflow-hidden" style="border-radius: 15px; border: none; height: 20rem;">
						<div class="row g-0 h-100">
							<!-- প্রোফাইল সেকশন -->
							<div class="col-md-3 profile-section  position-relative z-1">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<img src="{{ asset('assets/images/shyamol.png') }}"
										alt="Law School BD MCQ Bank BD এর প্রতিষ্ঠাতা ও পরিচালক" class="profile-img  mb-3">
									<h4 class="fw-bold mb-1">শ্যামল সিংহ</h4>
									<p class="mb-1">প্রজেক্ট ম্যানেজার</p>
								</div>
							</div>

							<!-- উক্তি সেকশন -->
							<div class="col-md-9 quote-section p-4">
								<div class="d-flex flex-column h-100">
									<p class="quote-text flex-grow-1">
										ওয়েবসাইট ডেভেলপমেন্টের পুরো কার্যক্রমের পরিকল্পনা, সমন্বয় এবং মান নিয়ন্ত্রণ করেছেন শ্যামল সিংহ।
										তাঁর নেতৃত্বে টেক টিম নির্ধারিত সময়ের মধ্যে কার্যক্রম বর্তমানে চলমান রয়েছে।
									</p>
									<hr>
									<div
										class="d-flex flex-nowrap overflow-auto justify-content-center justify-content-lg-end gap-2 p-2 ">
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0 ">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
											<i class="fab fa-youtube"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Member 4 -->
			<div class="row justify-content-center p-2">
				<div class="col-12 col-lg-10">
					<div class="card shadow-lg overflow-hidden" style="border-radius: 15px; border: none; height: 20rem;">
						<div class="row g-0 h-100">
							<!-- প্রোফাইল সেকশন -->
							<div class="col-md-3 profile-section  position-relative z-1">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<img src="{{ asset('assets/images/shivananda.jpeg') }}" 
										 alt="মনিপুরী যুব কল্যাণ সমিতির সভাপতি" class="profile-img  mb-3">
									<h4 class="fw-bold mb-1">শিবানন্দ সিংহ</h4>
									<p class="mb-1">উদ্যোক্তা</p>


								</div>
							</div>

							<!-- উক্তি সেকশন -->
							<div class="col-md-9 quote-section p-4">
								<div class="d-flex flex-column h-100">
									<p class="quote-text flex-grow-1">
										মনিপুরি যুব কল্যাণ সমিতির সভাপতি শিবানন্দ সিংহ এই ওয়েবসাইট তৈরির উদ্যোগ গ্রহণ করেছেন।
										সমাজ ও তরুণ প্রজন্মকে প্রযুক্তির সাথে যুক্ত করা এবং সমিতির কার্যক্রমকে ডিজিটালাইজ করার উদ্দেশ্যেই এই প্রকল্প শুরু হয়েছে।
										সমিতিকে প্রযুক্তির মাধ্যমে আরও এগিয়ে নেওয়ার লক্ষ্যে তিনি ভানুবিল ফ্রিল্যান্সিং ট্রেনিং সেন্টারের সহায়তা গ্রহণ করেছেন।
										ভানুবিল ফ্রিল্যান্সিং ট্রেনিং সেন্টারের টেকনিক্যাল দক্ষতা ও সহযোগীতার মাধ্যমে ওয়েবসাইট এবং প্রয়োজনীয় CMS নির্মাণ কাজ
										বর্তমানে চলমান রয়েছে।
										আমরা বিশ্বাস করি—প্রযুক্তি সমাজ উন্নয়নের শক্তিশালী হাতিয়ার, এবং এই ওয়েবসাইট তারই একটি বাস্তব উদাহরণ।
									</p>
									<hr>
									<div class="d-flex flex-nowrap overflow-auto justify-content-center justify-content-lg-end gap-2 p-2 ">
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0 ">
										  <i class="fab fa-facebook-f"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
										  <i class="fab fa-twitter"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
										  <i class="fab fa-youtube"></i>
										</a>
										<a href="#" class="btn btn-outline-secondary rounded-circle flex-shrink-0">
										  <i class="fab fa-instagram"></i>
										</a>
									 </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
@endsection