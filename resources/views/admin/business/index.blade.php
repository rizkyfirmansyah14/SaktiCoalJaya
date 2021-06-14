@extends('layouts.admin.main')
@section('content')

<div class="row ">
    <div class="col-12 grid-margin">
        <a class="btn btn-success mb-3" href="{{ url('lingkupbisnis/create') }}">+ Add Lingkup Bisnis</a>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h4 class="card-title">List Apps </h4>
                </div>
                @if (session('status'))
                <div class="alert alert-success mt-4">
                    {{ session('status') }}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th> No</th>
                                <th> Image </th>
                                <th> Title </th>
                                <th> Description 1</th>
                                <th> Description 2</th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($business as $business)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img style="width: 100px; height: 80px" src="uploads/{{ $business->image}}"
                                        alt="image" />
                                </td>
                                <td>{{$business->title}}</td>
                                <td>
                                    @if(strlen($business->description1) > 30 )
                                    {{ substr($business->description1, 0, 30) . '...'}}
                                    @else
                                    {{$business->description1}}
                                    @endif
                                </td>
                                <td>
                                    @if(strlen($business->description2) > 30 )
                                    {{ substr($business->description2, 0, 30) . '...'}}
                                    @else
                                    {{$business->description2}}
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('lingkupbisnis.destroy',$business->id)}}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                    <a class="btn btn-success"
                                        href="{{ route('lingkupbisnis.edit',$business->id)}}">Edit</a>
                                    <button class="show2 btn btn-primary" title="{{ $business->title }}"
                                        description1="{{ $business->description1 }}"
                                        description2="{{ $business->description2 }}">Details</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Title</label>
                        <input type="text" class="form-control bg-transparent" id="title"
                            placeholder="Example input placeholder" disabled>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Description 1</label>
                        <textarea name="" id="description1" cols="30" rows="10" class="form-control bg-transparent"
                            disabled></textarea>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Description 2</label>
                        <textarea name="" id="description2" cols="30" rows="10" class="form-control bg-transparent"
                            disabled></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection