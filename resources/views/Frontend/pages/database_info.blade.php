@extends('frontend.layouts.master_layout')
@section('content')
<div class="container py-4">

    <div class="card shadow-sm mx-auto mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 mx-auto">
                <i class="fas fa-database"></i>
                বাসযুক ডেটাবেজ বিন্যাস
            </h5>
            <span class="badge bg-light text-dark">মোট:@bn($tags->count())</span>
        </div>

        <div class="card-body">
            @if($tags->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle mb-0">
                        <thead class="table-success text-center">
                            <tr>
                                <th scope="col-2">ক্রমিক</th>
                                <th scope="col-4">ক্যাটাগরির নাম</th>
                                <th scope="col-6">লোকজন</th>
                                <th scope="col-1">দেখুন</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($tags->isEmpty())
                                <tr>
                                    <td colspan="5">
                                        <div class="align-items-center py-2 text-center">
                                            <strong>এই বাসযুক ডেটাবেজ বিন্যাস টেবিলে কোনো তথ্য নেই।</strong>
                                        </div>
                                    </td>
                                </tr>
                            @endif

                            @foreach($tags as $tag)
                                <tr>
                                    <td class="text-center fw-bold" data-label="ক্রমিক নং">@bn($loop->iteration)</td>
                                    <td data-label="ক্যাটাগরি নাম" class="text-center">{{ $tag->person_type_name }}</td>
                                    <td class="text-center" data-label="লোকজন">
                                        <span class="badge bg-success" >@bn($tag->persons_count ?? 0)</span>
                                    </td>
                                    <td class="text-center" data-label="দেখুন">
                                        <div class="d-flex flex-row justify-content-center gap-2">
                                            <a href="{{route('specific.category.person', $tag->id)}}" 
                                            class="btn btn-sm action-btn-info" 
                                            title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info mb-0 text-center">
                    <i class="fas fa-info-circle"></i> কোনো ট্যাগ এখনো যোগ করা হয়নি।
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
