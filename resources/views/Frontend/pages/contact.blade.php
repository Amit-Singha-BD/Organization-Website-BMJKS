@extends('frontend.layouts.master_layout')
@section('content') 
<!-- Contact Section -->
	  
		<div class="container py-5">

			<section class="page-header mb-4">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h1 class="display-4 fw-bold ">যোগাযোগ করুন</h1>
							<div class="border-bottom border-white border-3 mx-auto" style="width: 100px; background-color:#1A9B9F;"></div>
							<p class="mt-2 lead">আপনার মতামত ও পরামর্শ আমাদের কাছে গুরুত্বপূর্ণ</p>
						</div>
					</div>
				</div>
			</section>

			<div class="container ">
			  <div class="row g-4">
				<!-- Contact Info -->
				<div class="col-12 col-md-6 col-lg-5">
				  <div class="card shadow-sm border-0 custom-card">
					<div class="card-body p-4">
					  <h5 class="fw-bold mb-4">ঠিকানা ও যোগাযোগ</h5>
					  <p><i class="fas fa-map-marker-alt text-secondary me-2"></i> সিলেট, বাংলাদেশ</p>
					  <p><i class="fas fa-phone text-secondary me-2"></i> +880-1711-000000</p>
					  <p><i class="fas fa-envelope text-secondary me-2"></i> info@myks.org</p>

					  <h6 class="fw-bold mt-4 mb-3">সামাজিক মাধ্যম</h6>
						
						  <div class="d-flex flex-nowrap overflow-auto justify-content-center justify-content-lg-start gap-2 p-2 ">
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
				<div class=" col-lg-1">
				</div>
				<!-- Contact Form -->
				<div class="col-12 col-md-6 col-lg-6">
				  <div class="card shadow-sm border-0 custom-card">
					<div class="p-5">
					  <h5 class="fw-bold mb-4">বার্তা পাঠান</h5>
					  <form>
						<!-- নাম -->
						<div class="mb-4">
						  <label class="form-label fw-semibold">আপনার নাম</label>
						  <input type="text" class="form-control form-control-lg" placeholder="পুরো নাম লিখুন">
						</div>

						<!-- মোবাইল -->
						<div class="mb-4">
						  <label class="form-label fw-semibold">মোবাইল</label>
						  <input type="text" class="form-control form-control-lg" placeholder="মোবাইল">
						</div>

						<!-- ইমেইল -->
						<div class="mb-4">
						  <label class="form-label fw-semibold">ইমেইল</label>
						  <input type="email" class="form-control form-control-lg" placeholder="ইমেইল">
						</div>

						<!-- বিষয় -->
						<div class="mb-4">
						  <label class="form-label fw-semibold">বিষয়</label>
						  <input type="text" class="form-control form-control-lg" placeholder="বার্তার বিষয় লিখুন">
						</div>

						<!-- বার্তা -->
						<div class="mb-4">
						  <label class="form-label fw-semibold">বার্তা</label>
						  <textarea class="form-control form-control-lg" rows="6" placeholder="আপনার বার্তা লিখুন"></textarea>
						</div>
						
						<!-- CAPTCHA block -->
						<div class="mb-3">
						  <label class="form-label d-block">CAPTCHA যাচাইকরণ</label>

						  <div class="input-group">
							<span class="input-group-text bg-white" id="captchaText" style="min-width:120px; font-weight:600;"></span>
							<input type="number" class="form-control" id="captchaInput" placeholder="উত্তর লিখুন" required>
							<button class="btn btn-outline-secondary" type="button" id="refreshBtn" title="নতুন ক্যাপচা">
							  <i class="bi bi-arrow-clockwise"></i> রিফ্রেশ
							</button>
						  </div>

						</div>

						<!-- বাটন -->
						<div>
						  <button type="submit" class="btn btn-primary px-5 py-2">পাঠান</button>
						</div>
					  </form>
					</div>
				  </div>
				</div>

			  </div>
			</div>

		</div>

@endsection