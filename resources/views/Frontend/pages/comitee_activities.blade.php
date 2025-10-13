@extends('frontend.layouts.master_layout')
@section('content') 

    <!-- Page Header -->
    <section class="page-header mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold ">কমিটিসমূহের কার্যক্রম </h1>
					<div class="border-bottom border-white border-3 mx-auto" style="width: 100px; background-color:#1A9B9F;"></div>
                    <p class="mt-2 lead">বামজুকসের সকল কমিটিসমূহের কার্যক্রমগুলো</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-5">
        <!-- নোটিশ ট্যাব -->
		<div class="tab-pane fade show active" id="notice" role="tabpanel" aria-labelledby="notice-tab">
			
            <!-- Search and Filter Section -->
			<section class="py-3 bg-light rounded mb-4">
				<div class="container">
				  <div class="row g-3 align-items-center justify-content-between">
					
					<!-- Search Box -->
					<div class="col-12 col-lg-4">
					  <div class="input-group">
						<input type="text" class="form-control" placeholder="কমিটি অনুসন্ধান..." aria-label="Search">
						<button class="btn btn-primary" type="submit">
						  <i class="fas fa-search"></i>
						</button>
					  </div>
					</div>

					<!-- Filter Form -->
					<div class="col-12 col-lg-5">
					  <div class="bg-light border border-3 p-2 rounded">
						<form class="row g-2 align-items-center" action="" method="get">
						  <div class="col-6 col-md-8">
							<input class="form-control" type="date">
						  </div>
						  <div class="col-6 col-md-4">
							<button class="btn btn-outline-secondary w-100" type="submit">
							  <i class="fas fa-filter me-2"></i> ফিল্টার
							</button>
						  </div>
						</form>
					  </div>
					</div>

				  </div>
				</div>
			</section>

			<!-- Activity List -->
			<section class="py-3">
				<div class="container">

				<!-- Activity Card 1 -->
					@foreach($activities as $activitie)
						<div class="activity-card" data-category="activity" data-year="2024">
							<div class="activity-header">
								<div class="row align-items-center">
									<div class="col-md-3 col-12">
										<div class="d-flex justify-content-around activity-section">
											<div class="text-center">
												<img src="https://randomuser.me/api/portraits/men/32.jpg" 
													class="comitee-profile-img rounded-circle" alt="সভাপতি">
												<div class="profile-name">শিবা</div>	 
												<div class="profile-title">সভাপতি</div>
											</div>
											<div class="text-center">
												<img src="https://randomuser.me/api/portraits/women/44.jpg" 
													class="comitee-profile-img rounded-circle" alt="সম্পাদক">
												<div class="profile-name">শিবা</div>	 
												<div class="profile-title">সম্পাদক</div>
											</div>
										</div>
									</div>
									
									<div class="col-md-9 col-12">
										<h5 class="activity-title">২০২৪ সালের কমিটি কার্যক্রম ও পরিকল্পনা</h5>
										<div class="activity-meta">
											<span class="date-badge">
												<i class="fas fa-calendar me-1"></i>১৫ মার্চ, ২০২৪
											</span>
											<span class="date-separator">থেকে</span>
											<span class="date-badge">
												<i class="fas fa-calendar me-1"></i>১৫ ডিসেম্বর, ২০২৪
											</span>
										</div>
									</div>
								</div>
							</div>

							<div class="activity-body">
								<ul class="activity-list">
									<li class="activity-item">
										<span class="activity-name">{{ $activitie->title }}</span>
										<button class="view-btn btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal{{$activitie->id}}">
											<i class="fas fa-eye"></i>
										</button>
									</li>
								</ul>
							</div>
						</div>

						<!-- Modal -->
						<div class="modal fade" id="myModal{{$activitie->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered">
								<div class="modal-content border-0 shadow-lg rounded-4">
								
									<div class="modal-header bg-primary text-white rounded-top-4">
										<h5 class="modal-title fw-bold" id="myModalLabel">
										<i class="fas fa-info-circle me-2"></i> কার্যক্রমের বিস্তারিত তথ্য
										</h5>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body p-4">
										<h5 class="fw-semibold mb-3">{{ $activitie->title }}</h5>
										<p class="mb-3">
											{{ $activitie->description }}
										</p>

										<ul class="list-group list-group-flush mb-3">
										<li class="list-group-item"><i class="fas fa-calendar-day me-2 text-primary"></i>@bn($activitie->activities_date)</li>
										</ul>
									</div>

									<div class="modal-footer bg-light rounded-bottom-4">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
										<i class="fas fa-times me-1"></i> বন্ধ করুন
										</button>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				
				<!-- Activity Card 2 -->
					<div class="activity-card" data-category="activity" data-year="2024">
						<div class="activity-header">
							<div class="row align-items-center">
								<div class="col-md-3 col-12">
									<div class="d-flex justify-content-around activity-section">
										<div class="text-center">
											<img src="https://randomuser.me/api/portraits/men/35.jpg" 
												 class="comitee-profile-img rounded-circle" alt="সভাপতি">
											<div class="profile-name">রবি</div>	 
											<div class="profile-title">সভাপতি</div>
										</div>
										<div class="text-center">
											<img src="https://randomuser.me/api/portraits/women/45.jpg" 
												 class="comitee-profile-img rounded-circle" alt="সম্পাদক">
											<div class="profile-name">লিপি</div>	 
											<div class="profile-title">সম্পাদক</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-9 col-12">
									<h5 class="activity-title">২০২৪ সালের দ্বিতীয় কমিটি কার্যক্রম</h5>
									<div class="activity-meta">
										<span class="date-badge">
											<i class="fas fa-calendar me-1"></i>১০ জানুয়ারি, ২০২৪
										</span>
										<span class="date-separator">থেকে</span>
										<span class="date-badge">
											<i class="fas fa-calendar me-1"></i>৩০ নভেম্বর, ২০২৪
										</span>
									</div>
								</div>
							</div>
						</div>

						<div class="activity-body">
							<ul class="activity-list">
								<li class="activity-item">
									<span class="activity-name">রক্তদান কর্মসূচি</span>
									<button class="view-btn btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>

					<!-- Pagination -->
					<nav aria-label="Page navigation">
						<ul class="pagination justify-content-center custom-pagination">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">
									<i class="fas fa-arrow-left me-1"></i> পূর্ববর্তী
								</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">১</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">২</a></li>
							<li class="page-item"><a class="page-link" href="#">৩</a></li>
							<li class="page-item"><a class="page-link" href="#">৪</a></li>
							<li class="page-item"><a class="page-link" href="#">৫</a></li>
							<li class="page-item">
								<a class="page-link" href="#">
									পরবর্তী <i class="fas fa-arrow-right ms-1"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</section>
		</div>
    </div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content border-0 shadow-lg rounded-4">
		  
		  <div class="modal-header bg-primary text-white rounded-top-4">
			<h5 class="modal-title fw-bold" id="myModalLabel">
			  <i class="fas fa-info-circle me-2"></i> কার্যক্রমের বিস্তারিত তথ্য
			</h5>
			<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>

		  <div class="modal-body p-4">
			<h5 class="fw-semibold mb-3">চক্ষু শিবির</h5>
			<p class="mb-3">
			  এই কার্যক্রমের উদ্দেশ্য হলো গ্রামের মানুষদের বিনামূল্যে চোখের চিকিৎসা ও প্রয়োজনীয় ওষুধ প্রদান করা।
			  বিভিন্ন চিকিৎসক ও স্বেচ্ছাসেবক টিম এই কার্যক্রমে অংশগ্রহণ করেছেন।
			</p>

			<ul class="list-group list-group-flush mb-3">
			  <li class="list-group-item"><i class="fas fa-calendar-day me-2 text-primary"></i>তারিখ: ১৫ মার্চ ২০২৪</li>
			  <li class="list-group-item"><i class="fas fa-map-marker-alt me-2 text-danger"></i>স্থান: উপজেলা স্বাস্থ্য কমপ্লেক্স, মৌলভীবাজার</li>
			  <li class="list-group-item"><i class="fas fa-user-friends me-2 text-success"></i>অংশগ্রহণকারী সংখ্যা: ১২০+</li>
			</ul>
		  </div>

		  <div class="modal-footer bg-light rounded-bottom-4">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
			  <i class="fas fa-times me-1"></i> বন্ধ করুন
			</button>
		  </div>
		</div>
	  </div>
	</div>

@endsection