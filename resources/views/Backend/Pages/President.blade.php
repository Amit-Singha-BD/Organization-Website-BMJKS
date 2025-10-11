@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class=" mt-3">
        <div class="card shadow-sm">
            <div class="card-header text-white bg-success text-center">
                <i class="fa-solid fa-palette me-2"></i>সভাপতির বার্তা
            </div>
            <div class="card-body">
                <form action="{{ route('president.update',$president->id) }}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label @error('message') text-danger @enderror">
                                @error('message')
                                    {{ $message }}
                                @else
                                    সভাপতির বার্তা
                                @enderror
                            </label>
                            <textarea type="text" name="message" class="form-control">{{$president->message}}</textarea>
                        </div>

                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" name="submit" class="btn btn-success">
                            <i class="fa-solid fa-save me-1"></i>বার্তা আপডেট
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection