@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="row g-3">
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">মোট নোটিশ</small>
                            <h4 class="mb-0">@bn($notice_data->total())</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-bullhorn"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">এই মাসে প্রকাশিত</small>
                            <h4 class="mb-0">@bn($monthly_notice_count)</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-calendar"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Action Buttons -->
    <div class="container mt-4">
        <div class="row g-3 align-items-center">

            <!-- Date Filter -->
            <div class="col-12 col-md-6 col-lg-6">
                <form action="{{ route('notice.index') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control" name="from_date" type="date" value="{{ request('from_date') }}" required>
                        <span class="input-group-text">থেকে</span>
                        <input class="form-control" name="to_date" type="date" value="{{ request('to_date') }}">
                        <button class="btn btn-outline-success" type="submit">বাছাই করুন</button>
                    </div>
                </form>
            </div>

            <!-- Search -->
            <div class="col-12 col-md-6 col-lg-4">
                <form action="{{ route('notice.index') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control" type="text" name="title" placeholder="নোটিশের শিরোনাম দিন" value="{{ request('title') }}" required>
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i> অনুসন্ধান
                        </button>
                    </div>
                </form>
            </div>

            <!-- New Notice -->
            <div class="col-12 col-md-6 col-lg-2">
                <a class="btn btn-success w-100" data-bs-toggle="modal" href="#modalNotice" role="button">
                    <i class="fa-solid fa-plus me-1"></i> নতুন নোটিশ
                </a>
            </div>

        </div>
    </div>

    <!-- Notices Table -->
    <div class="card table-card shadow-sm my-3">
        <div class="card-header text-white text-center">
            
            @if($search || $from || $to)
                
                <strong>সার্চ রেজাল্ট:</strong>
                @if($search) <em>{{ $search }}</em> @endif
                @if($from) | শুরু: {{ $from }} @endif
                @if($to) | শেষ: {{ $to }} @endif
                
            @else
                <i class="fa-solid fa-bullhorn"></i> নোটিশ তালিকা
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>ক্রমিক</th>
                            <th>শিরোনাম</th>
                            <th>তারিখ</th>
                            <th>অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notice_data as $notice)
                        <tr class="text-center">
                            <td data-label="ক্রমিক">@bn($loop->iteration)</td>
                            <td data-label="শিরোনাম">{{$notice->title}}</td>
                            <td data-label="তারিখ">@bn($notice->date)</td>
                            <td data-label="অ্যাকশন">
                                <div class="d-flex flex-row justify-content-center gap-2">
                                    <button type="button" class="action-btn-info" title="বিস্তারিত দেখুন"
                                        data-bs-toggle="modal" data-bs-target="#noticeViewModal{{$notice->id}}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="action-btn-success" title="সম্পাদনা করুন"
                                        data-bs-toggle="modal" data-bs-target="#editModal{{$notice->id}}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn action-btn-danger" title="Delete" data-bs-toggle="modal"
                                        data-bs-target="#deleteMemberModal{{$notice->id}}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Notice View Modal -->
                        <div class="modal fade" id="noticeViewModal{{$notice->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-info text-white">
                                        <h5 class="modal-title">নোটিশের বিস্তারিত</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>{{$notice->title}}</h5>
                                        <p class="text-muted">
                                            <span>তারিখ: {{ $notice->date }}</span>
                                        </p>
                                        <hr>
                                        <p>{{$notice->description}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Notice Edit Modal -->
                        <div class="modal fade" id="editModal{{$notice->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-success text-white">
                                        <h5 class="modal-title">নোটিশ সম্পাদনা করুন</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('notice.update',$notice->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">শিরোনাম</label>
                                                <input type="text" name="title" class="form-control" value="{{ old('title', $notice->title ?? '') }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">তারিখ</label>
                                                <input type="date" name="date" class="form-control" value="{{ old('date', $notice->date ?? '') }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">বিবরণ</label>
                                                <textarea class="form-control" name="description" rows="5" required>{{ old('description', $notice->description ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                                            <button type="submit" class="btn btn-success">আপডেট করুন</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                            <!-- Notice Delete Modal -->
                        <div class="modal fade" id="deleteMemberModal{{$notice->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h6 class="modal-title">নোটিশটি মুছে ফেলুন</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <p>আপনি কি নিশ্চিতভাবে এই নোটিশটি মুছে ফেলতে চান?</p>
                                        <p class="text-danger">এই কাজটি পূর্বাবস্থায় ফেরানো যাবে না।</p>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                                        <!-- Delete Form -->
                                        <form action="{{ route('notice.destroy', $notice->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">মুছে ফেলুন</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ $notice_data->links() }}


    <!-- Notice Create Modal -->
    <div class="modal fade" id="modalNotice" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h6 class="modal-title">নতুন নোটিশ যোগ করুন</h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <form action="{{ route('notice.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">

                            {{-- শিরোনাম --}}
                            <div class="col-12">
                                <label class="form-label">শিরোনাম</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') }}" placeholder="নোটিশের শিরোনাম লিখুন" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- তারিখ --}}
                            <div class="col-md-12">
                                <label class="form-label">তারিখ</label>
                                <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
                                    value="{{ old('date') }}" required>
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- বিবরণ --}}
                            <div class="col-12">
                                <label class="form-label">বিবরণ</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    name="description" rows="4" placeholder="নোটিশের বিস্তারিত লিখুন">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">বাতিল</button>
                        <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection