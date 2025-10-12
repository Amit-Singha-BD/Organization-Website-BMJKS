@extends('frontend.layouts.master_layout')
@section('content')
  <!-- About Section -->
  <section class="py-5 ">
    <div class="container">
		<section class="page-header ">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h1 class="display-4 fw-bold ">{{ $committeeData->committee_name }}</h1>
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
                        @foreach($committeeMembers as $committeeMember)
                        <tr class="committee-row">
                            <td class="align-middle text-center">
                                <div class="square-photo-wrapper">
                                    <img src="{{ $committeeMember->photo ? asset($committeeMember->photo) : asset('Frontend-Assets/images/profile_img.png') }}" class="square-photo">
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="committee-info">
                                    <h6 class="fw-bold mb-1" style="color: #333333;">
                                        {{$committeeMember->name}}</h6>
                                    <small style="color: var(--secondary-green);">
                                        <i class="fas fa-map-marker-alt me-1"></i>
                                        {{$committeeMember->address }}
                                    </small>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge text-white" style="background-color: var(--primary-green);">
                                    {{ role_name($committeeMember->role) }}
                                </span>
                            </td>
                            <td class="align-middle">
                                <a href="tel:+8801712345678" class="contact-link">
                                    <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>
                                    {{$committeeMember->mobile }}
                                </a>
                            </td>
                            <td class="align-middle">
                                <a href="mailto:president@manipuri.org" class="contact-link">
                                    <i class="fas fa-envelope me-2" style="color: var(--secondary-green);"></i>
                                    {{$committeeMember->email }}
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{$committeeMember->facebook }}" 
                                    target="_blank" 
                                    class="btn btn-sm btn-outline-primary" 
                                    title="প্রোফাইল দেখুন">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach

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