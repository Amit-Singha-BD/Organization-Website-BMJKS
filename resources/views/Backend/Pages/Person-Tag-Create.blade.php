@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="container my-4">
        <div class="card shadow-sm mx-auto" style="max-width: 70rem;">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">সদস্যদের ক্যাটাগরি তৈরি করুন </h5>
            </div>
            <form action="{{route('tag.create')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            @error('tag_create')
                            <label class="form-label text-danger">{{$message}}</label>
                            @else
                            <label class="form-label" >সদস্যদের নতুন ক্যাটাগরির নাম (বাংলা)</label>
                            @enderror
                            <input name="tag_create" placeholder="নতুন ক্যাটাগরির নাম লিখুন (বাংলায়)" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-success">সংরক্ষণ</button>
                </div>
            </form>
        </div>

        {{-- আগের ট্যাগগুলোর লিস্ট --}}
        <div class="card shadow-sm mx-auto mt-4" style="max-width: 70rem;">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">ইতোমধ্যে তৈরি করা ক্যাটাগরি</h5>
            </div>
            <div class="card-body">
                @if($tags->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle mb-0">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">ক্যাটাগরির নাম</th>
                                    <th scope="col">লোকজন</th>
                                    <th scope="col">একশন</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tags as $tag)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $tag->person_type_name }}</td>
                                        <td>{{ $tag->persons_count ?? 0 }}</td>
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$tag->id}}">Delete</button>
                                            
                                            <!-- Status Change Button -->
                                            <button type="button" class="btn btn-sm {{ $tag->status == 'active' ? 'btn-success' : 'btn-secondary' }}" 
                                                    data-bs-toggle="modal" data-bs-target="#statusModal{{$tag->id}}">
                                                {{ $tag->status }}
                                            </button>

                                            <!-- Status Change Modal -->
                                            <div class="modal fade" id="statusModal{{$tag->id}}" tabindex="-1" aria-labelledby="statusModalLabel{{$tag->id}}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content shadow-lg border-0">
                                                        <div class="modal-header bg-primary text-white">
                                                            <h5 class="modal-title" id="statusModalLabel{{$tag->id}}">স্ট্যাটাস পরিবর্তন</h5>
                                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <p class="fs-5">
                                                                @if($tag->status == 'active')
                                                                    <p class="fs-5 text-center">
                                                                        <i class="fa-solid fa-eye-slash text-danger"></i>  
                                                                        আপনি কি নিশ্চিত <strong>{{ $tag->person_type_name }}</strong> ক্যাটাগরিটি 
                                                                        <span class="badge bg-success">ওয়েবসাইটে দৃশ্যমান</span> অবস্থা থেকে  
                                                                        <span class="badge bg-secondary">অদৃশ্য</span> করতে চান?
                                                                    </p>
                                                                @else
                                                                    <p class="fs-5 text-center">
                                                                        <i class="fa-solid fa-eye text-success"></i>  
                                                                        আপনি কি নিশ্চিত <strong>{{ $tag->person_type_name }}</strong> ক্যাটাগরিটি  
                                                                        <span class="badge bg-secondary">অদৃশ্য</span> অবস্থা থেকে  
                                                                        <span class="badge bg-success">ওয়েবসাইটে দৃশ্যমান</span> করতে চান?
                                                                    </p>
                                                                @endif

                                                            </p>
                                                        </div>
                                                        <div class="modal-footer justify-content-center">
                                                            <form action="{{ route('tag.status', $tag->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-success">
                                                                    হ্যাঁ, পরিবর্তন করুন
                                                                </button>
                                                            </form>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </td>
                                    </tr>
                                    <!-- tag Delete Modal -->
                                    <div class="modal fade" id="deleteModal{{$tag->id}}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger text-white">
                                                    <h6 class="modal-title">ক্যাটাগরি মুছে ফেলুন</h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <p>আপনি কি নিশ্চিতভাবে এই ক্যাটাগরিটি মুছে ফেলতে চান?</p>
                                                    <p class="text-danger">এই কাজটি পূর্বাবস্থায় ফেরানো যাবে না।</p>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                                                    <!-- Delete Form -->
                                                    <form action="{{ route('tag.destroy', $tag->id) }}" method="POST">
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
                @else
                    <p class="text-muted">কোনো ট্যাগ এখনো যোগ করা হয়নি।</p>
                @endif
            </div>
        </div>

    </div>

          

@endsection