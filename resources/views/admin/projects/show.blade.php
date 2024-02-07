@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between container proj">
  <div>
    <h1>My projects</h1>
  </div>
  <div>
    <h5>{{ $project->title }}</h5>
    <h5>{{ $project->year }}</h5>
  </div>
</div>
@endsection
