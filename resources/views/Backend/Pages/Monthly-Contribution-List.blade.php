@extends('Backend.Layout.MasterLayout')

@section('Content')

	<div class="card table-card shadow-sm my-3">
		<div class="card-header text-white text-center bg-success">
			<i class="fa-solid fa-hand-holding-dollar"></i> মাসিক চাঁদা তালিকা
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table align-middle">
					<thead>
						<tr class="text-center">
							<th>ক্রমিক</th>
							<th>মাসের নাম</th>
							<th>পরিশোধের অবস্থা</th>
							<th>প্রদানের তারিখ</th>
							<th>অ্যাকশন</th>
						</tr>
					</thead>
					<tbody>
						<tr class="text-center">
							<td data-label="ক্রমিক">১</td>
							<td data-label="মাসের নাম">নভেম্বর</td>
							<td data-label="পরিশোধের অবস্থা">পরিশোধ হয়নি</td>
							<td data-label="প্রদানের তারিখ">২০২৫-১১-১১</td>
							<td data-label="অ্যাকশন">
								<div class="d-flex justify-content-center align-items-center gap-2">
									<!-- অবস্থা -->
									<span class="badge bg-secondary">অনুরোধ করা হয়নি</span>
									<span class="badge bg-warning text-dark">অপেক্ষমাণ</span>
									<span class="badge bg-success">অনুমোদিত</span>
									<span class="badge bg-danger">বাতিল</span>

									<!-- অ্যাকশন বাটনসমূহ -->
									<div class="d-flex justify-content-center gap-2">
										<button class="btn action-btn-info" title="বিস্তারিত দেখুন" data-bs-toggle="modal" data-bs-target="#viewFinanceModal">
											<i class="fa-solid fa-eye"></i>
										</button>
										<button class="btn action-btn-success" title="অনুমোদন করুন" data-bs-toggle="modal" data-bs-target="#approveModal">
											<i class="fa-solid fa-check"></i>
										</button>
										<button class="btn action-btn-danger" title="বাতিল করুন" data-bs-toggle="modal" data-bs-target="#rejectModal">
											<i class="fa-solid fa-xmark"></i>
										</button>
										<button class="btn action-btn-warning" title="অনুরোধ পাঠান" data-bs-toggle="modal" data-bs-target="#requestModal">
											<i class="fa-solid fa-paper-plane"></i>
										</button>
									</div>
								</div>

							</td>
						</tr>

						<tr class="text-center">
							<td data-label="ক্রমিক">২</td>
							<td data-label="মাসের নাম">অক্টোবর</td>
							<td data-label="পরিশোধের অবস্থা">পরিশোধ হয়েছে</td>
							<td data-label="প্রদানের তারিখ">২০২৫-১০-১৫</td>
							<td data-label="অ্যাকশন">
								<div class="d-flex justify-content-center gap-2">
									<button class="btn action-btn-info" title="বিস্তারিত দেখুন" data-bs-toggle="modal" data-bs-target="#viewFinanceModal">
										<i class="fa-solid fa-eye"></i>
									</button>
									<button class="btn action-btn-success" title="অনুমোদন করুন" data-bs-toggle="modal" data-bs-target="#approveModal">
										<i class="fa-solid fa-check"></i>
									</button>
									<button class="btn action-btn-danger" title="বাতিল করুন" data-bs-toggle="modal" data-bs-target="#rejectModal">
										<i class="fa-solid fa-xmark"></i>
									</button>
									<button class="btn action-btn-warning" title="অনুরোধ পাঠান" data-bs-toggle="modal" data-bs-target="#requestModal">
										<i class="fa-solid fa-paper-plane"></i>
									</button>
								</div>
							</td>
						</tr>

						<tr class="text-center">
							<td data-label="ক্রমিক">৩</td>
							<td data-label="মাসের নাম">সেপ্টেম্বর</td>
							<td data-label="পরিশোধের অবস্থা">অপেক্ষমাণ</td>
							<td data-label="প্রদানের তারিখ">২০২৫-০৯-২০</td>
							<td data-label="অ্যাকশন">
								<div class="d-flex justify-content-center gap-2">
									<button class="btn action-btn-info" title="বিস্তারিত দেখুন" data-bs-toggle="modal" data-bs-target="#viewFinanceModal">
										<i class="fa-solid fa-eye"></i>
									</button>
									<button class="btn action-btn-success" title="অনুমোদন করুন" data-bs-toggle="modal" data-bs-target="#approveModal">
										<i class="fa-solid fa-check"></i>
									</button>
									<button class="btn action-btn-danger" title="বাতিল করুন" data-bs-toggle="modal" data-bs-target="#rejectModal">
										<i class="fa-solid fa-xmark"></i>
									</button>
									<button class="btn action-btn-warning" title="অনুরোধ পাঠান" data-bs-toggle="modal" data-bs-target="#requestModal">
										<i class="fa-solid fa-paper-plane"></i>
									</button>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- View Modal -->
	<div class="modal fade" id="viewFinanceModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-primary text-white">
					<h6 class="modal-title">চাঁদার বিবরণ</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<p><strong>মাসের নাম:</strong> নভেম্বর</p>
					<p><strong>পরিশোধের পরিমাণ:</strong> ৳ ৫০০</p>
					<p><strong>প্রদানের তারিখ:</strong> ২০২৫-১১-১১</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Approve Modal -->
	<div class="modal fade" id="approveModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-success text-white">
					<h6 class="modal-title">চাঁদা অনুমোদন</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body text-center">
					<p>আপনি কি নিশ্চিত এই চাঁদাটি অনুমোদন করতে চান?</p>
				</div>
				<div class="modal-footer justify-content-center">
					<button class="btn btn-secondary" data-bs-dismiss="modal">না</button>
					<button class="btn btn-success">হ্যাঁ, অনুমোদন করুন</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Reject Modal -->
	<div class="modal fade" id="rejectModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-danger text-white">
					<h6 class="modal-title">চাঁদা বাতিল</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body text-center">
					<p>আপনি কি নিশ্চিত এই চাঁদাটি বাতিল করতে চান?</p>
				</div>
				<div class="modal-footer justify-content-center">
					<button class="btn btn-secondary" data-bs-dismiss="modal">না</button>
					<button class="btn btn-danger">হ্যাঁ, বাতিল করুন</button>
				</div>
			</div>
		</div>
	</div>

    <!-- Request Modal -->
    <div class="modal fade" id="requestModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h6 class="modal-title">চাঁদার অনুরোধ</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <p>আপনি কি নিশ্চিত যে এই চাঁদা দেওয়ার পর অনুরোধটি পাঠাতে চাচ্ছেন?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                    <button class="btn btn-warning text-dark">অনুরোধ করুন</button>
                </div>
            </div>
        </div>
    </div>

@endsection