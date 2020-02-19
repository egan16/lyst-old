{{-- navbar --}}
@extends('layouts.app')
{{-- content --}}
@section('content')
<div class="">
    Welcome
</div>

<div>
    <a href="{{ route('about') }}" class="hover:text-safetyorange">About Us</a>

</div>

@endsection
