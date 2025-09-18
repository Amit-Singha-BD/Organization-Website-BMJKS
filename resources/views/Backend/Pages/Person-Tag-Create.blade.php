@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="container my-4">
        <div class="card shadow-sm mx-auto" style="max-width: 70rem;">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">সদস্যদের ক্যাটাগরি তৈরি করুন</h5>
            </div>
            <form action="{{route('tag.create')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">সদস্যদের নতুন ক্যাটাগরি তৈরি করুন</label>
                            <input name="tag_create" class="form-control" required>
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
                                        <th scope="row">{{ $tag->id }}</th>
                                        <td>{{ $tag->person_type_name }}</td>
                                        <td>{{ $tag->persons_count ?? 0 }}</td>
                                        <td>
                                            <form action="{{ route('tag.destroy', $tag->id) }}" method="POST" onsubmit="return confirm('আপনি কি সত্যিই এই ট্যাগটি মুছতে চান?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
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