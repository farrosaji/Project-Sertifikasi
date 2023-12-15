@extends('layouts.mainlayout')
 
@section('title', 'Equipment Rent')
 
@section('content')

{{-- jQuery --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div>
    <h2>Rent Form</h2>
</div>

<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">

    @if(session('message'))
        <div class="my-5 alert {{ session('alert-class') }}">
            {{ session('message') }}
        </div>  
    @endif

    <form action="equip-rent" method="post">
        @csrf
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select name="user_id" id="user" class="form-control inputbox">
                <option value="">Select user</option>
                @foreach ($users as $item)
                    <option value="{{ $item->id }}">{{ $item->username }}</option>
                @endforeach
            </select>

        </div>

        <div class="mb-3">
            <label for="sportsequip" class="form-label">Equip</label>
            <select name="equip_id" id="equip" class="form-control inputbox">
                <option value="">Select equipment</option>
                @foreach ($sportsequip as $item)
                    <option value="{{ $item->id }}">{{ $item->equip_code }} {{ $item->title }}</option>
                @endforeach
            </select>

        </div>

        <div class="my-3 edit-category-btn d-flex justify-content-center align-items-center">
            <button class="btn btn-success col-8" type="submit">Submit</button>
        </div>
    </form>
</div>


{{-- Javascript --}}
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.inputbox').select2();
    });
</script>

@endsection