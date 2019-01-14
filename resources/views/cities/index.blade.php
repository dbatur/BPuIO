@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/cities/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cities as $city)
    <tr>
      <td><?= $city->id ?></td>
      
      <td><?= $city->name ?></td>
      <td><?= $city->country->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
