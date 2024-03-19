@extends('layouts.app')
@section('title', 'Properties')
@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
                    <h3>Properties</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="section properties">
        <div class="container">

            <ul class="properties-filter">
                <li>
                    <a class="is_active" href="{{ route('properties.index', ['type' => 'all']) }}">Show All</a>
                </li>
                <li>
                    <a href="{{ route('properties.index', ['type' => 'apartment']) }}">Apartment</a>
                </li>
                <li>
                    <a href="{{ route('properties.index', ['type' => 'villa']) }}">Villa House</a>
                </li>
                <li>
                    <a href="{{ route('properties.index', ['type' => 'penthouse']) }}">Penthouse</a>
                </li>
            </ul> --}}
            @include('layouts.properties');


@endsection

</body>

</html>
