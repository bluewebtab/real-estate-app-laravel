@extends('layouts.main') @section('content')

<div class="listings-page">
    <div class="listings-city">
        <img
            src="{{ URL::to('/') }}/images/md-3.jpeg"
            class="listings-city__img"
        />

        <h1 class="listings-city__title">Beverly Hills</h1>
    </div>
</div>

@endsection
