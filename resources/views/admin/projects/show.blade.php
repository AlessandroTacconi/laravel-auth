@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between container proj left gap-5">
  <div>
    <h1>My projects</h1>
  </div>
  <div>
    <h5>{{ $project->title }}</h5>
    <p>{{ $project->year }}</p>
    <p>{{ $project->description }}</p>
  </div>
</div>
@endsection
