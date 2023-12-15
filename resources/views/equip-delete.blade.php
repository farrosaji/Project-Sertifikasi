@extends('layouts.mainlayout')
 
@section('title', 'Delete Equipment')
 
@section('content')

<div>
    <h2>Delete Equipment</h2>
</div>

<div class="my-3 delete-btn">
    <strong class="d-flex justify-content-center align-items-center">
        Are you sure want to delete {{ $sportsequip->title }} ?
    </strong>

    <div class="d-flex justify-content-center align-items-center">
        <a href="/equip-destroy/{{ $sportsequip->slug }}" class="btn btn-danger col-3">Delete</a>
        <a href="/sportsequip" class="btn btn-primary col-3">Cancel</a>
    </div>
</div>

@endsection