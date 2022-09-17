@extends('layouts.main')


@section('page-title', 'All Properties - Hills Realty')

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

    <div class="listings-properties">
        <div class="container">
            <div class="row">
                @for($i = 1; $i <= 12; $i++)
                    <div class="col-sm-6 col-lg-4 col-xl-3 listings-properties__box">
                        <a href="/listing/2123-grand-ave-miami-fl-33456/1" class="listings-properties__item">
                            <img src="{{ URL::to('/') }}/images/md-3.jpeg" />

                            <div class="listings-properties__saved">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <span class="listings-properties__item-price"
                                >$250,000</span>
                            <span class="listings-properties__item-details">
                                <i class="fa-solid fa-bed"></i> 4
                                <i class="fa-solid fa-bath"></i> 3
                                <i class="fa-solid fa-ruler-combined"></i> 2440 SQFT</span>
                            <span class="listings-properties__item-address">1414 Main Ave <br/> Beverly Hills, CA 23466</span>
                        
                            
                        </a>
                    </div>

                @endfor
                
            </div>
        </div>
    </div>
</div>

@endsection
