@extends('layouts.main') 


@section('content')

<div class="listings-page">
    <div class="listings-city">
        <img
            src="{{ URL::to('/') }}/images/md-3.jpeg"
            class="listings-city__img"
        />

        <h1 class="listings-city__title">Beverly Hills</h1>
    </div>
    <div class="listings-filter">
        <div class="listings-filter__wrapper">

            <div class="listings-filter__option">
                Any Price <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
               All Beds <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                Hometype <i class="fa-solid fa-caret-down"></i>
             </div>
             <div class="listings-filter__option">
                More <i class="fa-solid fa-caret-down"></i>
             </div>
             <div class="listings-filter__button">
                Search <i class="fa-solid fa-caret-down"></i>
             </div>


        </div>
       
    
    </div>
</div>

@endsection
