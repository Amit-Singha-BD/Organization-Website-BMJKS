@extends('frontend.layouts.master_layout')
@section('content')
	<!-- Page Header -->
	<section class="page-header mt-5">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="display-4 fw-bold text-dark">আমাদের সেবাসমূহ </h1>
					<div class="border-bottom border-white border-3 mx-auto" style="width: 100px; background-color:#1A9B9F;"></div>
					<p class="mt-2 lead text-dark">সেবামূলক কার্যক্রম এবং গুরুত্বপূর্ণ তথ্য</p>
				</div>
			</div>
		</div>
	</section>

		<!-- হেল্প কার্ড গ্রিড -->
		<div class="container py-4">
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ">

				<!-- 1 হেল্প কার্ড -->
				 @foreach($services as $service)
				<div class="col">
					<div class="card help-card h-100 shadow-sm border-0">
						<div class="card-header bg-secondary-help text-white text-center py-4">
							<div class="help-icon mx-auto mb-3">
								<i class="{{$service->icon}}"></i>
							</div>
							<h4 class=" fw-bold mb-0">{{ $service->title}}</h4>
						</div>
						<div class="card-body d-flex flex-column">
							<p class="card-text text-dark flex-grow-1">
								{{ $service->description}}
							</p>



							<button class="btn btn-secondary-help w-100 mt-auto rounded-pill fw-semibold" data-bs-toggle="modal" data-bs-target="#servieModal{{ $service->id}}">
								<i class="fas fa-info-circle me-2"></i>বিস্তারিত জানুন
							</button>
						</div>
					</div>
				</div>

				<!-- Bootstrap Modal -->
				<div class="modal fade" id="servieModal{{ $service->id}}" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">

					<div class="modal-header">
						<h5 class="modal-title">{{ $service->title}}</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>

					<div class="modal-body">
						<!-- 👉 এখানে আপনার সেকশন কপি করবেন -->
						<section id="mySection">
							<p>
							{{ $service->description}}
							</p>
						</section>
					</div>

					</div>
				</div>
				</div>
				@endforeach

			</div>
		</div>



@endsection

 