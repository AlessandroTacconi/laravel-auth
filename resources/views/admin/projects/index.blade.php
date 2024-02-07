@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between container">
  <div>
    <h1 class="proj">My projects</h1>
  </div>
  <div class="scorrevole">
  <ul class="d-flex flex-column gap-3 mt-5">
    @foreach ($projects as $project)
      <li class="me-5">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="{{ $project->image }}">
          <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text">{{ $project->year }}</p>
            {{-- <p class="card-text">{{ $project->slug }}</p> --}}
            <div>
              <a href="#" class="btn btn-primary btn-sm" role="button">Edit</a>
              <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-secondary btn-sm" role="button">Show</a>
              <a href="#" class="btn btn-danger btn-sm" role="button">Delete</a>
            </div>
          </div>
        </div>
      </li>
      
    @endforeach
  </ul>
  </div>
</div>

@endsection
