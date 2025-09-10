@extends('frontend.layouts.master_layout')
@section('content') 
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
				<!-- Activity Card -->
					<div class="activity-card" data-category="activity" data-year="2024">
						<div class="activity-header">
							<div class="row align-items-center">
								<!-- সভাপতি ও সম্পাদক ফটো -->
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
								
								<!-- টাইটেল ও তারিখ -->
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

						<!-- মূল বডি -->
						<div class="activity-body">
							<ul class="activity-list">
								<li class="activity-item" data-bs-toggle="modal" data-bs-target="#myModal">
									<span class="activity-name">চক্ষু শিবির</span>
									<button class="view-btn" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
								<li class="activity-item" data-bs-toggle="modal" data-bs-target="#myModal">
									<span class="activity-name">আন্তক্রিয়া</span>
									<button class="view-btn" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
								<li class="activity-item" data-bs-toggle="modal" data-bs-target="#myModal">
									<span class="activity-name">সেবা</span>
									<button class="view-btn" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
								<li class="activity-item" data-bs-toggle="modal" data-bs-target="#myModal">
									<span class="activity-name">স্বাস্থ্য</span>
									<button class="view-btn" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
								<li class="activity-item" data-bs-toggle="modal" data-bs-target="#myModal">
									<span class="activity-name">শিক্ষা</span>
									<button class="view-btn" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>
				
				<!-- Activity Card -->
					<div class="activity-card" data-category="activity" data-year="2024">
						<div class="activity-header">
							<div class="row align-items-center">
								<!-- সভাপতি ও সম্পাদক ফটো -->
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
								
								<!-- টাইটেল ও তারিখ -->
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

						<!-- মূল বডি -->
						<div class="activity-body">
							<ul class="activity-list">
								<li class="activity-item" data-bs-toggle="modal" data-bs-target="#myModal">
									<span class="activity-name">চক্ষু শিবির</span>
									<button class="view-btn" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
								<li class="activity-item" data-bs-toggle="modal" data-bs-target="#myModal">
									<span class="activity-name">আন্তক্রিয়া</span>
									<button class="view-btn" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
								<li class="activity-item" data-bs-toggle="modal" data-bs-target="#myModal">
									<span class="activity-name">সেবা</span>
									<button class="view-btn" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
								<li class="activity-item" data-bs-toggle="modal" data-bs-target="#myModal">
									<span class="activity-name">স্বাস্থ্য</span>
									<button class="view-btn" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
								<li class="activity-item" data-bs-toggle="modal" data-bs-target="#myModal">
									<span class="activity-name">শিক্ষা</span>
									<button class="view-btn" data-bs-toggle="modal" data-bs-target="#myModal">
										<i class="fas fa-eye"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>
				
						<!-- পেজিনেশন -->
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
							<li class="page-item">
								<a class="page-link" href="#">২</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">৩</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">৪</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">৫</a>
							</li>
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
@endsection