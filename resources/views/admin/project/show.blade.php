@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <img src="{{$project->image}}" class="card-img-top" alt="{{$project->image}}">
                <div class="card-body text-center">
                  <h2>
                    {{$project->title}}
                  </h2>
                  <h6 class="card-text">
                    {{$project->slug}}
                  </h6>
                  <a href="" class="btn btn-sm btn-success">View</a>
                  <a href="" class="btn btn-sm btn-warning">Modify</a>
                  <a href="" class="btn btn-sm btn-danger">Delete</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection