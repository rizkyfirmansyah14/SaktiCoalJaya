@extends('layouts.admin.main')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <dic class="col-9">
                    <h4 class="card-title">Form Create Business Scope</h4>
                </dic>
                <div class="col-3">
                    <a class="nav-link btn btn-info create-new-button" href="{{ url('/lingkupbisnis') }}">Back</a>
                </div>
            </div>
            <p class="card-description"> add bussines scope unit below </p>
            <form method="post" action="{{ route('lingkupbisnis.store')}}" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control text-white @error('title') is-invalid @enderror" id="title"
                        name="title" placeholder="input title" value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Description1</label>
                    <textarea name="description1"
                        class="form-control text-light @error('description1') is-invalid @enderror" id="" cols="30"
                        rows="10" placeholder="input description1">{{ old('description1') }}</textarea>
                    @error('description1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Description2</label>
                    <textarea name="description2"
                        class="form-control text-light @error('description2') is-invalid @enderror" id="" cols="30"
                        rows="10" placeholder="input description2">{{ old('description2') }}</textarea>
                    @error('description2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="input-group col-xs-12">
                        <input type="file" name="image"
                            class="form-control file-upload-info @error('image') is-invalid @enderror pb-5"
                            placeholder="Upload Image" value="{{ old('image') }}">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{url('/lingkupbisnis')}}" class="btn btn-dark">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection