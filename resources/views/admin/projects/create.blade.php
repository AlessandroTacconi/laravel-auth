@extends('layouts.admin')

@section('content')
<h1>crea un nuovo proj</h1>

<form action="{{ route('admin.projects.store') }}" method="POST">
  @csrf
<div class="mb-3">
  <label for="title" class="form-label">Titolo</label>
  <input type="text" class="form-control" id="title" placeholder="titolo" name="title">
</div>
<div class="mb-3">
  <label for="image" class="form-label">Image</label>
  <input type="text" class="form-control" id="image" placeholder="image" name="image">
</div>
<div class="mb-3">
  <label for="year" class="form-label">year</label>
  <input type="year" class="form-control" id="year" placeholder="year" name="year">
</div>
<div class="mb-3">
  <label for="description" class="form-label">description</label>
  <textarea class="form-control" id="description" rows="3" id="description" name="description" placeholder="description"></textarea>
</div>
<button class="btn btn-success">Invia il proj</button>
</form>
@endsection