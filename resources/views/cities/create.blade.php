@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/cities">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="city name">
</div>
<div class="form-group">
    <select class="form-control" name="country_id">
        @foreach($countries as $country)
        <option value="{{ $country->id }}">{{ $country->name }}</option>
        @endforeach
    </select>
</div>



<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection