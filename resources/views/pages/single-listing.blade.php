@extends('layouts.main')


@section('page-title', '23 Grand Ave - Hills Realty')

@section('content')
<div class="single-listing-page">
    <div class="listing-top">
        <img class="listing-top__img" src="{{ URL::to('/') }}/images/md-3.jpeg">
        <div class="listing-top__form-wrapper">
            <div class="container">
                <form class="listing-top__form">
                    <span class="listing-top__form-title">Schedule A Tour</span>
                    <div class="listing-top__form-group listing-top__form-group--hor">
                        <div class="listing-top__form-option">In-Person</div>
                        <div class="listing-top__form-option">Video</div>
                    </div>
                   
                </form>
            </div>
          
        </div>
    </div>
</div>

@endsection
