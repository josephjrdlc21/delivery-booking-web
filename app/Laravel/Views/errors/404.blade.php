@extends('errors._layouts.main')

@section('content')
<div class="d-flex flex-column align-items-center">
    <img src="{{asset('assets/portal/img/undraw/undraw_not_found_60pq.svg')}}" width="250" alt="Page Not Found">
    <h2 class="h1 mt-4 mb-4 fw-bold">404 Sorry! page not found.</h2>
    <p class="text-center op-7 mb-5 h5">Website is Under Construction. Check back later!<br></p>
    <div>
        <a href="{{route('portal.index')}}" class="btn btn-border btn-primary me-3">GO BACK</a>
        <a href="{{route('portal.index')}}" class="btn btn-primary">GO TO HOME PAGE</a>
    </div>
</div>
@stop