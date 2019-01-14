@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/children/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">School</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($children as $child)
    <tr>
      <td><?= $child->id ?></td>      
      <td><?= $child->first_name ?></td> 
      <td><?= $child->last_name ?></td> 
      <td><?= $child->school->name ?></td> 
    </tr>
  @endforeach
  </tbody>
</table>

@endsection

