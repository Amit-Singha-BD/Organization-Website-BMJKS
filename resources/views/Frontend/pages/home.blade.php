@extends('frontend.layouts.master_layout')
@section('content') 
	<!-- Hero Section -->
		<div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="0" class="active"></button>
				<button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="1"></button>
				<button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="2"></button>
			</div>
			<div class="carousel-inner">
				<!-- ক্যারousel আইটেম 1 -->
				<div class="carousel-item ">
					<div class="position-relative d-inline-block w-100">
					  <!-- ছবি -->
					  <img src="assets/images/slide1.jpg" class="d-block w-100 img-fluid" alt="প্রযুক্তি ব্লগ">

					  <!-- গ্রেডিং overlay -->
					  <div class="position-absolute top-0 start-0 end-0 bottom-0"
						   style="background: linear-gradient(45deg, rgba(26,155,159,0.1), rgba(242,193,78,0.1));">
					  </div>
					</div>


					<div class="carousel-caption">
						<h2>আমার মানুর কুমেই</h2>
						<p>আমার মানুর কুমেইর মাঝে হাবিত্ত জিংপা হান দূর্গা পূজা</p>
					</div>
				</div>

				<!-- ক্যারousel আইটেম 2 -->
				<div class="carousel-item">
					<div class="position-relative d-inline-block w-100">
					  <!-- ছবি -->
					  <img src="assets/images/slide3.jpg" class="d-block w-100 img-fluid" alt="প্রযুক্তি ব্লগ">

					  <!-- গ্রেডিং overlay -->
					  <div class="position-absolute top-0 start-0 end-0 bottom-0"
						   style="background: linear-gradient(45deg, rgba(26,155,159,0.1), rgba(242,193,78,0.1));">
					  </div>
					</div>
					<div class="carousel-caption">
						<h2>আমার মানুর এলা</h2>
						<p>নুংশি নুংশি এলার মাঝে আমার এলা জবরদস্ত</p>
					</div>
				</div>

				<!-- ক্যারousel আইটেম 3 -->
				<div class="carousel-item active">
					<div class="position-relative d-inline-block w-100">
					  <!-- ছবি -->
					  <img src="assets/images/slide2.jpg" class="d-block w-100 img-fluid" alt="প্রযুক্তি ব্লগ">

					  <!-- গ্রেডিং overlay -->
					  <div class="position-absolute top-0 start-0 end-0 bottom-0"
						   style="background: linear-gradient(45deg, rgba(26,155,159,0.1), rgba(242,193,78,0.1));">
					  </div>
					</div>
					<div class="carousel-caption">
						<h2>বামজুকসর ইয়ারি</h2>
						<p>মনিপুরি যুবকল্যান সমিতি 40 বছর আগে ফংইসিলা</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon"></span>
				<span class="visually-hidden">পূর্ববর্তী</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon"></span>
				<span class="visually-hidden">পরবর্তী</span>
			</button>
		</div>

		<!-- নোটিশ ও সভাপতি -->
		<section class="py-5 " >
		  <div class="container" >
			<!-- শিরোনাম -->
			<div class="text-center mb-4">
			  <h3 class="display-5 fw-bold mb-3 text-dark" >তথ্য হালনাগাদ</h3>
			  <div class="border-bottom border-3 mx-auto" style="width: 80px; background-color:#1A9B9F;"></div>
			</div>

			<div class="row g-4" >
			  <!-- বামে: নোটিশ -->
			  <div class="col-12 col-lg-8" >
				<div class="card shadow-sm border-0 h-100" >
				  <div class="card-header bg-white d-flex align-items-center justify-content-between">
					<h5 class="mb-0">
					  <i class="fas fa-bullhorn me-1"></i> নোটিশ
					</h5>

				  </div>

				  <!-- নোটিশ লিস্ট  -->
				  <div class="container" >
					  <div class=" list-group list-group-flush">
						<!-- নোটিশ আইটেম -->
						<a href="#" class="list-group-item list-group-item-action d-flex gap-3 align-items-start custom-color" style="background-color:#f8f9fa;" >
						  <div class="text-center">
							<div class="badge bg-primary rounded-1 px-2 py-1">২৯ অগ</div>
							<small class="text-muted d-block">২০২৫</small>
						  </div>
						  <div class="flex-grow-1">
							<div class="fw-semibold">প্রশাসনিক আদেশ: অফিস সময়সূচি পরিবর্তন</div>
							<small class="text-muted">সোম–বৃহঃ ৯:০০–৫:০০, শুক্রঃ ৯:০০–১:৩০ প্রযোজ্য।</small>
						  </div>
						  <i class="fas fa-chevron-right ms-auto pe-2 pt-3"></i>
						</a>

						<a href="#" class="list-group-item list-group-item-action d-flex gap-3 align-items-start">
						  <div class="text-center">
							<div class="badge bg-primary rounded-1 px-2 py-1">২৪ অগ</div>
							<small class="text-muted d-block">২০২৫</small>
						  </div>
						  <div class="flex-grow-1">
							<div class="fw-semibold">ভর্তি বিজ্ঞপ্তি – প্রশিক্ষণ কর্মশালা</div>
							<small class="text-muted">রেজিস্ট্রেশন শেষ তারিখ: ১০ সেপ্টেম্বর ২০২৫</small>
						  </div>
						  <i class="fas fa-chevron-right ms-auto pe-2 pt-3"></i>
						</a>

						<a href="#" class="list-group-item list-group-item-action d-flex gap-3 align-items-start" style="background-color:#f8f9fa;">
						  <div class="text-center">
							<div class="badge bg-primary rounded-1 px-2 py-1">১৮ অগ</div>
							<small class="text-muted d-block">২০২৫</small>
						  </div>
						  <div class="flex-grow-1">
							<div class="fw-semibold">ই-সেবা প্ল্যাটফর্ম রক্ষণাবেক্ষণ নোটিশ</div>
							<small class="text-muted">শনিবার ১২:০০–৩:০০ সময় সেবা সাময়িকভাবে বন্ধ থাকবে।</small>
						  </div>
						  <i class="fas fa-chevron-right ms-auto pe-2 pt-3"></i>
						</a>
						<!-- আরও আইটেম যোগ করুন… -->
					  </div>
				  </div>

				  <div class="card-footer bg-white text-center">
					<a href="{{ route('frontend.notice') }}" class="btn btn-primary btn-sm px-4">
					  সব নোটিশ
					</a>
				  </div>
				</div>
			  </div>

			  <!-- ডানে: সভাপতির বার্তা/কার্ড -->
			  <div class="col-12 col-lg-4">
				<div class="card shadow-sm border-0 h-100" style="background-color:#f8f9fa;">
				  <div class="card-body">
					<div class="d-flex align-items-center gap-3 mb-3">
					  <img src="{{ asset('assets/images/shivananda.jpeg') }}"
						   alt="সভাপতি"
						   class="profile-img img-fluid"
						   style="width:110px; height:110px; object-fit:cover;">
					  <div>
						<h6 class="mb-0 fw-bold">শিবানন্দ সিংহ</h6>
						<small class="text-muted">সভাপতি</small>
					  </div>
					</div>

					<p class="mb-2 text-muted">
					  জনসেবার মানোন্নয়নে আমাদের ডিজিটাল প্ল্যাটফর্মে নিয়মিত সেবা প্রদান করা হচ্ছে।
					  আপনার মূল্যবান মতামত ও সহযোগিতা কামনা করছি।
					</p>

					<div class="d-grid gap-2">
						<button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal" title="view">
							<i class="fas fa-journal-whills me-1"></i> সভাপতির বার্তা
						</button>
					</div>
				  </div>

				</div>
			  </div>
			  <!-- ডান কলাম শেষ -->
			</div>
		  </div>
		</section>



	  <!-- সেবা বিভাগ (স্লাইডার) -->
		<section class="service-section ">
			<div class="container ">
				<div class="text-center ">
					<h3 class="display-5 fw-bold text-dark" >সেবা সমূহ</h3>
					<div class="border-bottom border-3 mx-auto" style="width: 80px; background-color:#1A9B9F;"></div>
				</div>

				<div class="services-container">
					<button class="nav-btn prev">
						<i class="fas fa-chevron-left"></i>
					</button>

					<div class="services-track">
						<!-- সার্ভিস কার্ডগুলি -->
						<div class="service-item" >
							<div class="card service-card" >
								<div class="card-body" >
									<div class="service-icon">
										<i class="fas fa-id-card fa-2x text-white"></i>
									</div>
									<h5 class="card-title fw-bold">বামজুকস সদস্য</h5>
									<p class="card-text text-muted">নতুন সদস্য আবেদন ও নবায়ন</p>
									<button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal" title="view">
										বিস্তারিত
									</button>
								</div>
							</div>
						</div>

						<div class="service-item">
							<div class="card service-card">
								<div class="card-body">
									<div class="service-icon">
										<i class="fas fa-passport fa-2x text-white"></i>
									</div>
									<h5 class="card-title fw-bold">উপজাতি সনদ</h5>
									<p class="card-text text-muted">নতুন উপজাতি সনদ আবেদন</p>
									<button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal" title="view">
										বিস্তারিত
									</button>
								</div>
							</div>
						</div>

						<div class="service-item">
							<div class="card service-card">
								<div class="card-body">
									<div class="service-icon">
										<i class="fas fa-car fa-2x text-white"></i>
									</div>
									<h5 class="card-title fw-bold">আর্থিক প্রনোদনা</h5>
									<p class="card-text text-muted">টাংগা লাগলে মাতেই</p>
									<button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal" title="view">
										বিস্তারিত
									</button>
								</div>
							</div>
						</div>

						<div class="service-item">
							<div class="card service-card">
								<div class="card-body">
									<div class="service-icon">
										<i class="fas fa-graduation-cap fa-2x text-white"></i>
									</div>
									<h5 class="card-title fw-bold">অভিযোগ</h5>
									<p class="card-text text-muted">তিক সওয়িলে মাতেই</p>
									<button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal" title="view">
										বিস্তারিত
									</button>
								</div>
							</div>
						</div>

						<div class="service-item">
							<div class="card service-card">
								<div class="card-body">
									<div class="service-icon">
										<i class="fas fa-book fa-2x text-white"></i>
									</div>
									<h5 class="card-title fw-bold">শিক্ষা বৃত্তি</h5>
									<p class="card-text text-muted">শিক্ষা বৃত্তির জন্য আবেদন</p>
									<button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal" title="view">
										বিস্তারিত
									</button>
								</div>
							</div>
						</div>

						<div class="service-item">
							<div class="card service-card">
								<div class="card-body">
									<div class="service-icon">
										<i class="fas fa-home fa-2x text-white"></i>
									</div>
									<h5 class="card-title fw-bold">বাসস্থান সহায়তা</h5>
									<p class="card-text text-muted">বাসস্থান সংক্রান্ত সহায়তা</p>
									<button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal" title="view">
										বিস্তারিত
									</button>
								</div>
							</div>
						</div>
					</div>

					<button class="nav-btn next">
						<i class="fas fa-chevron-right"></i>
					</button>
				</div>
			</div>
		</section>

		<!-- News & Updates -->
		<section class="mb-5">
			<div class="container">
				<div class="row g-5">
					<div class="col-lg-12">
						<div class="text-center mb-4">
						  <h3 class="display-5 fw-bold mb-3 text-dark">সাম্প্রতিক কার্যক্রম সমূহ</h3>
						  <div class="border-bottom border-3 mx-auto" style="width: 80px; background-color:#1A9B9F;"></div>
						</div>


						<div class="row g-4">
							<div class="col-md-6">
								<div class="card border-0 shadow-sm h-100 news-card" >
									<div class="card-body p-4">
										<div class="d-flex align-items-start">
											<div class="news-date me-3 text-center">
												<div class="bg-primary text-white rounded-top p-2">
													<div class="fw-bold">১৫</div>
													<small>ডিসে</small>
												</div>
											</div>
											<div>
												<h6 class="fw-bold mb-2">২০২৪ সালের বাজেট ঘোষণা</h6>
												<p class="text-muted small mb-0">আগামী অর্থবছরের বাজেট ঘোষণা করা হয়েছে</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card border-0 shadow-sm h-100 news-card">
									<div class="card-body p-4">
										<div class="d-flex align-items-start">
											<div class="news-date me-3 text-center">
												<div class="bg-primary text-white rounded-top p-2">
													<div class="fw-bold">১২</div>
													<small>ডিসে</small>
												</div>
											</div>
											<div>
												<h6 class="fw-bold mb-2">নতুন করোনা নিয়মাবলী</h6>
												<p class="text-muted small mb-0">করোনা মহামারি নিয়ন্ত্রণে নতুন নির্দেশনা</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card border-0 shadow-sm h-100 news-card">
									<div class="card-body p-4">
										<div class="d-flex align-items-start">
											<div class="news-date me-3 text-center">
												<div class="bg-primary text-white rounded-top p-2">
													<div class="fw-bold">১০</div>
													<small>ডিসে</small>
												</div>
											</div>
											<div>
												<h6 class="fw-bold mb-2">শিক্ষা প্রতিষ্ঠান খোলার নির্দেশ</h6>
												<p class="text-muted small mb-0">সকল শিক্ষা প্রতিষ্ঠান খোলার নির্দেশনা জারি</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card border-0 shadow-sm h-100 news-card">
									<div class="card-body p-4">
										<div class="d-flex align-items-start">
											<div class="news-date me-3 text-center">
												<div class="bg-primary text-white rounded-top p-2">
													<div class="fw-bold">০৮</div>
													<small>ডিসে</small>
												</div>
											</div>
											<div>
												<h6 class="fw-bold mb-2">ডিজিটাল সেবা সম্প্রসারণ</h6>
												<p class="text-muted small mb-0">নতুন ডিজিটাল সেবা চালু করা হয়েছে</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		{{-- bootstrap 5 services modal --}}
		<div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">

					<!-- Modal Header with Close Button -->
					<div class="modal-header">
						<h5 class="modal-title text-secondary">What is Lorem Ipsum</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body">
						<section id="mySection">
							<p>
								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea nulla, blanditiis necessitatibus odio amet
								magni minima quo sunt, quibusdam fuga tempora rerum. Itaque maxime porro dolore natus minima tempore,
								corporis accusamus quidem hic quam dolorum quas quis non labore ea veniam repudiandae soluta magnam 
								aliquid neque sequi ducimus! Aperiam, aspernatur impedit quae iure accusantium incidunt adipisci
								nam numquam quasi pariatur, accusamus, aliquid suscipit ex quas voluptates soluta dolorum facilis 
								deleniti sit quos. Soluta quis id accusamus eos repudiandae fuga ipsa ducimus nesciunt tempore eum 
								beatae tenetur, sed quibusdam reprehenderit provident deserunt est, in molestiae cupiditate officiis!
								Recusandae facere veritatis minus!
							</p>
						</section>
					</div>

				</div>
			</div>
		</div>

@endsection