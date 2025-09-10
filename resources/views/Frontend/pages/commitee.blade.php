@extends('frontend.layouts.master_layout')
@section('content')
  <!-- About Section -->
  <section class="py-5 ">
    <div class="container">
		<section class="page-header ">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h1 class="display-4 fw-bold ">কমিটি সদস্যবৃন্দ</h1>
						<div class="border-bottom border-white border-3 mx-auto" style="width: 100px; background-color:#1A9B9F;"></div>
						<p class="mt-2 lead">মণিপুরী যুব কল্যাণ সমিতির সকল সদস্যের তালিকা</p>
					</div>
				</div>
			</div>
		</section>

        <!-- Table View for Desktop -->
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover committee-table">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 120px;">
                                <i class="fas fa-user-circle me-2"></i>ছবি
                            </th>
                            <th>
                                <i class="fas fa-user me-2"></i>নাম
                            </th>
                            <th class="text-center">
                                <i class="fas fa-medal me-2"></i>পদ
                            </th>
                            <th>
                                <i class="fas fa-phone me-2"></i>ফোন
                            </th>
                            <th>
                                <i class="fas fa-envelope me-2"></i>ইমেইল
                            </th>
                            <th class="text-center" style="width: 120px;">
                                <i class="fas fa-user me-2"></i> প্রোফাইল
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- President -->
                        <tr class="committee-row">
                            <td class="align-middle text-center">
                                <div class="square-photo-wrapper">
                                    <img src="{{ asset('assets/images/shivananda.jpeg') }}" 
                                         alt="সভাপতি" class="square-photo">
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="committee-info">
                                    <h6 class="fw-bold mb-1" style="color: #333333;">শিবানন্দ সিংহ</h6>
                                    <small style="color: var(--secondary-green);">
                                        <i class="fas fa-map-marker-alt me-1"></i>উত্তর বলিগাঁও, কমলগঞ্জ, মৌলভীবাজার
                                    </small>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge text-white" style="background-color: var(--primary-green);">
                                    <i class="fas fa-crown me-1"></i>সভাপতি
                                </span>
                            </td>
                            <td class="align-middle">
                                <a href="tel:+8801712345678" class="contact-link">
                                    <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>+৮৮০১৬৭৩৩২৮৫৩১
                                </a>
                            </td>
                            <td class="align-middle">
                                <a href="mailto:president@manipuri.org" class="contact-link">
                                    <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>president@manipuri.org
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" title="প্রোফাইল দেখুন">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

						<!-- Vice President -->
                        <tr class="committee-row">
                            <td class="align-middle text-center">
                                <div class="square-photo-wrapper">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" 
                                         alt="সহ-সভাপতি" class="square-photo">
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="committee-info">
                                    <h6 class="fw-bold mb-1" style="color: #333333;">মিলন কুমার সিংহ</h6>
                                    <small style="color: var(--secondary-green);">
                                        <i class="fas fa-map-marker-alt me-1"></i>ধনীটিলা, ছনবাড়ী বাজার, ছাতক, সুনামগঞ্জ
                                    </small>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge text-white" style="background-color: var(--primary-green);">
                                    <i class="fas fa-star me-1"></i>সহ-সভাপতি
                                </span>
                            </td>
                            <td class="align-middle">
                                <a href="tel:+8801612345678" class="contact-link">
                                    <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>+৮৮০-১৬১২-৩৪৫৬৭৮
                                </a>
                            </td>
                            <td class="align-middle">
                                <a href="mailto:vicepresident@manipuri.org" class="contact-link">
                                    <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>vicepresident@manipuri.org
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" title="প্রোফাইল দেখুন">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

						<!-- Vice President -->
                        <tr class="committee-row">
                            <td class="align-middle text-center">
                                <div class="square-photo-wrapper">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" 
                                         alt="সহ-সভাপতি" class="square-photo">
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="committee-info">
                                    <h6 class="fw-bold mb-1" style="color: #333333;">বানী বালা সিংহ</h6>
                                    <small style="color: var(--secondary-green);">
                                        <i class="fas fa-map-marker-alt me-1"></i>মাধবপুর, কমলগঞ্জ, মৌলভীবাজার
                                    </small>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge text-white" style="background-color: var(--primary-green);">
                                    <i class="fas fa-star me-1"></i>সহ-সভাপতি মহিলা
                                </span>
                            </td>
                            <td class="align-middle">
                                <a href="tel:+8801612345678" class="contact-link">
                                    <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>+৮৮০-১৬১২-৩৪৫৬৭৮
                                </a>
                            </td>
                            <td class="align-middle">
                                <a href="mailto:vicepresident@manipuri.org" class="contact-link">
                                    <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>vicepresident@manipuri.org
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" title="প্রোফাইল দেখুন">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- General Secretary -->
                        <tr class="committee-row">
                            <td class="align-middle text-center">
                                <div class="square-photo-wrapper">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80"
                                         alt="সাধারণ সম্পাদক" class="square-photo">
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="committee-info">
                                    <h6 class="fw-bold mb-1" style="color: #333333;">মানস কান্তি সিংহ</h6>
                                    <small style="color: var(--secondary-green);">
                                        <i class="fas fa-map-marker-alt me-1"></i>মাধবপুর, কমলগঞ্জ, মৌলভীবাজার
                                    </small>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge text-white" style="background-color: var(--secondary-green);">
                                    <i class="fas fa-file-alt me-1"></i>সাধারণ সম্পাদক
                                </span>
                            </td>
                            <td class="align-middle">
                                <a href="tel:+8801812345678" class="contact-link">
                                    <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>+৮৮০-১৮১২-৩৪৫৬৭৮
                                </a>
                            </td>
                            <td class="align-middle">
                                <a href="mailto:secretary@manipuri.org" class="contact-link">
                                    <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>secretary@manipuri.org
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" title="প্রোফাইল দেখুন">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

						<!-- General Secretary -->
                        <tr class="committee-row">
                            <td class="align-middle text-center">
                                <div class="square-photo-wrapper">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80"
                                         alt="সাধারণ সম্পাদক" class="square-photo">
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="committee-info">
                                    <h6 class="fw-bold mb-1" style="color: #333333;">সুকান্ত সিংহ</h6>
                                    <small style="color: var(--secondary-green);">
                                        <i class="fas fa-map-marker-alt me-1"></i>কালারায়বিল, আদমপুর, কমলগঞ্জ, মৌলভীবাজার
                                    </small>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge text-white" style="background-color: var(--secondary-green);">
                                    <i class="fas fa-file-alt me-1"></i>সহ-সাধারণ সম্পাদক
                                </span>
                            </td>
                            <td class="align-middle">
                                <a href="tel:+8801812345678" class="contact-link">
                                    <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>+৮৮০-১৮১২-৩৪৫৬৭৮
                                </a>
                            </td>
                            <td class="align-middle">
                                <a href="mailto:secretary@manipuri.org" class="contact-link">
                                    <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>secretary@manipuri.org
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" title="প্রোফাইল দেখুন">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- Treasurer -->
                        <tr class="committee-row">
                            <td class="align-middle text-center">
                                <div class="square-photo-wrapper">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" 
                                         alt="কোষাধ্যক্ষ" class="square-photo">
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="committee-info">
                                    <h6 class="fw-bold mb-1" style="color: #333333;">সুমন সিংহ</h6>
                                    <small style="color: var(--secondary-green);">
                                        <i class="fas fa-map-marker-alt me-1"></i>ভানুবিল, আদমপুর, কমলগঞ্জ, মৌলভীবাজার
                                    </small>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge text-dark" style="background-color: var(--accent-orange);">
                                    <i class="fas fa-coins me-1"></i>কোষাধ্যক্ষ
                                </span>
                            </td>
                            <td class="align-middle">
                                <a href="tel:+8801912345678" class="contact-link">
                                    <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>+৮৮০-১৯১২-৩৪৫৬৭৮
                                </a>
                            </td>
                            <td class="align-middle">
                                <a href="mailto:treasurer@manipuri.org" class="contact-link">
                                    <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>treasurer@manipuri.org
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" title="প্রোফাইল দেখুন">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

						<tr class="committee-row">
							<td class="align-middle text-center">
								<div class="square-photo-wrapper">
									<img src="https://via.placeholder.com/100" alt="প্রচার ও প্রকাশনী সম্পাদক" class="square-photo">
								</div>
							</td>
							<td class="align-middle">
								<div class="committee-info">
									<h6 class="fw-bold mb-1" style="color: #333333;">প্রনব কুমার সিংহ</h6>
									<small style="color: var(--secondary-green);">
										<i class="fas fa-map-marker-alt me-1"></i>তেতইগাও, আদমপুর, কমলগঞ্জ, মৌলভীবাজার
									</small>
								</div>
							</td>
							<td class="align-middle text-center">
								<span class="badge text-dark" style="background-color: var(--accent-orange);">
									<i class="fas fa-bullhorn"></i>প্রচার ও প্রকাশনী সম্পাদক
								</span>
							</td>
							<td class="align-middle">
								<a href="tel:+8801XXXXXXXXX" class="contact-link">
									<i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>ফোন নম্বর
								</a>
							</td>
							<td class="align-middle">
								<a href="mailto:email@example.com" class="contact-link">
									<i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>ইমেল
								</a>
							</td>
							<td class="align-middle text-center">
								<div class="btn-group" role="group">
									<button class="btn btn-sm btn-outline-primary" title="প্রোফাইল দেখুন">
										<i class="fab fa-facebook-f"></i>
									</button>
								</div>
							</td>
						</tr>

						<tr class="committee-row">
							<td class="align-middle text-center">
								<div class="square-photo-wrapper">
									<img src="https://via.placeholder.com/100" alt="সাহিত্য ও সাংস্কৃতিক সম্পাদক" class="square-photo">
								</div>
							</td>
							<td class="align-middle">
								<div class="committee-info">
									<h6 class="fw-bold mb-1" style="color: #333333;">সুমন শর্মা</h6>
									<small style="color: var(--secondary-green);">
										<i class="fas fa-map-marker-alt me-1"></i>উত্তর তিলকপুর, কমলগঞ্জ, মৌলভীবাজার
									</small>
								</div>
							</td>
							<td class="align-middle text-center">
								<span class="badge text-dark" style="background-color: var(--accent-orange);">
									<i class="fas fa-book"></i> সাহিত্য ও সাংস্কৃতিক সম্পাদক
								</span>
							</td>
							<td class="align-middle">
								<a href="tel:+8801XXXXXXXXX" class="contact-link">
									<i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>ফোন নম্বর
								</a>
							</td>
							<td class="align-middle">
								<a href="mailto:email@example.com" class="contact-link">
									<i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>ইমেল
								</a>
							</td>
							<td class="align-middle text-center">
								<div class="btn-group" role="group">
									<button class="btn btn-sm btn-outline-primary" title="প্রোফাইল দেখুন">
										<i class="fab fa-facebook-f"></i>
									</button>
								</div>
							</td>
						</tr>

						<!-- একইভাবে বাকি পদবিগুলোও তৈরি করতে পারেন -->
						<tr class="committee-row">
							<td class="align-middle text-center">
								<div class="square-photo-wrapper">
									<img src="https://via.placeholder.com/100" alt="দপ্তর সম্পাদক" class="square-photo">
								</div>
							</td>
							<td class="align-middle">
								<div class="committee-info">
									<h6 class="fw-bold mb-1" style="color: #333333;">সুব্রত সিংহ</h6>
									<small style="color: var(--secondary-green);">
										<i class="fas fa-map-marker-alt me-1"></i>তেতইগাওঁ, আদমপুর বাজার, কমলগঞ্জ, মৌলভীবাজার
									</small>
								</div>
							</td>
							<td class="align-middle text-center">
								<span class="badge text-dark" style="background-color: var(--accent-orange);">
									<i class="fas fa-coins me-1"></i>দপ্তর সম্পাদক
								</span>
							</td>
							<td class="align-middle">
								<a href="tel:+8801XXXXXXXXX" class="contact-link">
									<i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>ফোন নম্বর
								</a>
							</td>
							<td class="align-middle">
								<a href="mailto:email@example.com" class="contact-link">
									<i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>ইমেল
								</a>
							</td>
							<td class="align-middle text-center">
								<div class="btn-group" role="group">
									<button class="btn btn-sm btn-outline-primary" title="প্রোফাইল দেখুন">
										<i class="fab fa-facebook-f"></i>
									</button>
								</div>
							</td>
						</tr>

                        
                        
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Card View for Mobile -->
        <div class="cards-container">
            <!-- President Card -->
            <div class="committee-card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-crown me-1"></i>সভাপতি</h5>
                </div>
                <div class="card-body text-center">
                    <div class="card-square-photo">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" 
                             alt="সভাপতি" class="square-photo">
                    </div>
                    <h5 class="fw-bold" style="color: #333333;">জনাব আহমেদ হোসেন</h5>
                    <p class="mb-2">
                        <i class="fas fa-map-marker-alt me-1" style="color: var(--secondary-green);"></i>
                        ঢাকা, বাংলাদেশ
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>
                        <a href="tel:+8801712345678" class="contact-link">+৮৮০-১৭১২-৩৪৫৬৭৮</a>
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>
                        <a href="mailto:president@manipuri.org" class="contact-link">president@manipuri.org</a>
                    </p>
                    <div class="action-buttons">
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="fab fa-facebook-f me-1"></i> প্রোফাইল
                        </button>
                    </div>
                </div>
            </div>
            
                   <!-- President Card -->
            <div class="committee-card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-crown me-1"></i>সম্পাদক</h5>
                </div>
                <div class="card-body text-center">
                    <div class="card-square-photo">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" 
                             alt="সভাপতি" class="square-photo">
                    </div>
                    <h5 class="fw-bold" style="color: #333333;">জনাব তিলুয়া</h5>
                    <p class="mb-2">
                        <i class="fas fa-map-marker-alt me-1" style="color: var(--secondary-green);"></i>
                        ঢাকা, বাংলাদেশ
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>
                        <a href="tel:+8801712345678" class="contact-link">+৮৮০-১৭১২-৩৪৫৬৭৮</a>
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>
                        <a href="mailto:president@manipuri.org" class="contact-link">president@manipuri.org</a>
                    </p>
                    <div class="action-buttons">
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="fab fa-facebook-f me-1"></i> প্রোফাইল
                        </button>
                    </div>
                </div>
            </div>
			
			          <!-- President Card -->
            <div class="committee-card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-crown me-1"></i>কোষাধ্যক্ষ</h5>
                </div>
                <div class="card-body text-center">
                    <div class="card-square-photo">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" 
                             alt="সভাপতি" class="square-photo">
                    </div>
                    <h5 class="fw-bold" style="color: #333333;">জনাব ফলার</h5>
                    <p class="mb-2">
                        <i class="fas fa-map-marker-alt me-1" style="color: var(--secondary-green);"></i>
                        ঢাকা, বাংলাদেশ
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>
                        <a href="tel:+8801712345678" class="contact-link">+৮৮০-১৭১২-৩৪৫৬৭৮</a>
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>
                        <a href="mailto:president@manipuri.org" class="contact-link">president@manipuri.org</a>
                    </p>
                    <div class="action-buttons">
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="fab fa-facebook-f me-1"></i> প্রোফাইল
                        </button>
                    </div>
                </div>
            </div>
			
			          <!-- President Card -->
            <div class="committee-card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-crown me-1"></i>সহ সভাপতি</h5>
                </div>
                <div class="card-body text-center">
                    <div class="card-square-photo">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" 
                             alt="সভাপতি" class="square-photo">
                    </div>
                    <h5 class="fw-bold" style="color: #333333;">জনাব বান্দারা</h5>
                    <p class="mb-2">
                        <i class="fas fa-map-marker-alt me-1" style="color: var(--secondary-green);"></i>
                        ঢাকা, বাংলাদেশ
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>
                        <a href="tel:+8801712345678" class="contact-link">+৮৮০-১৭১২-৩৪৫৬৭৮</a>
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>
                        <a href="mailto:president@manipuri.org" class="contact-link">president@manipuri.org</a>
                    </p>
                    <div class="action-buttons">
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="fab fa-facebook-f me-1"></i> প্রোফাইল
                        </button>
                    </div>
                </div>
            </div>
                
            
        </div>
		
    </div>
  </section>

@endsection