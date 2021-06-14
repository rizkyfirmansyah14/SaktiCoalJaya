@extends('layouts.admin.main')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <dic class="col-9">
                    <h4 class="card-title">Form Edit Apps Unit</h4>
                </dic>
                <div class="col-3">
                    <a class="nav-link btn btn-info create-new-button" href="{{ url('/lingkupbisnis') }}">Back</a>
                </div>
            </div>
            <p class="card-description"> edit apps unit below </p>
            <form method="post" action="{{ route('lingkupbisnis.update', $bisnis[0]->id) }}"
                enctype="multipart/form-data" class="forms-sample">
                {{ csrf_field() }}
                @method('PATCH')
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control text-white @error('title') is-invalid @enderror" id="title"
                        name="title" placeholder="Name" value="{{ $bisnis[0]-> title }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Description</label>
                    <textarea class="form-control" name="description1" id="" cols="30"
                        rows="10">{{$bisnis[0]->description1}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Description</label>
                    <textarea class="form-control" name="description2" id="" cols="30"
                        rows="10">{{$bisnis[0]->description2}}</textarea>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="input-group col-xs-12">
                        <div class="row">
                            <div class="col-12">
                                <img style="width: 30%" src="{{ asset('uploads/' . $bisnis[0]->image) }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <input type="file" name="image" class="form-control file-upload-info pb-5"
                                    placeholder="Upload Image">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{url('/lingkupbisnis')}}" class="btn btn-dark">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection