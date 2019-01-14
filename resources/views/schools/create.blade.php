@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/schools"> 
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="school name">
</div>
<div class="form-group">
    <select class="form-control" name="city_id">
        @foreach($cities as $city)
        <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection

