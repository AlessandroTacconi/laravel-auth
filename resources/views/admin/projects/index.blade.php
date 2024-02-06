@extends('layouts.admin')

@section('content')

  <h1 class="proj">My projects</h1>
  <ul>
    @foreach ($projects as $project)
      <li >
        <a href="#">{{ $project->title }}</a><span> - {{ $project->year }}</span>
      </li>
      
    @endforeach
  </ul>

@endsection