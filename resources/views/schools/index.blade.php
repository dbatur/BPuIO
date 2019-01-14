
@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/schools/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($schools as $school)
    <tr>
      <td><?= $school->id ?></td>
      
      <td><?= $school->name ?></td>
      <td><?= $school->city->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection

