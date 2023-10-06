@extends('frontend.master')

@section('main')

<main>

    @include('frontend\components\hero')
    @include('frontend\components\tour')
    @include('frontend\components\about')
    @include('frontend\components\moreService')
    @include('frontend\components\contact')

</main>

@endsection
