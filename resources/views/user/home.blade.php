@extends('user/app')


@section('home')

	@include('user/layout/about')

    @include('user/layout/activities')

    @include('user/layout/portfolio')

    @include('user/layout/companies')

    @include('user/layout/team')
    
    @include('user/layout/contact')

@endsection