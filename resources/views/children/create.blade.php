@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/children"> 
@csrf

<div class="form-group">
    <input class="form-control" name="first_name" type="text" placeholder="child name">
</div>
<div class="form-group">
    <input class="form-control" name="last_name" type="text" placeholder="child last name">
</div>
<div class="form-group">    
    <select class="form-control" name="school_id">
        @foreach($schools as $school)
        <option value="{{ $school->id }}">{{ $school->name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection

