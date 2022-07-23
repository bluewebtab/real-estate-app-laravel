@extends('layouts.account')


@section('page-title', 'User Saved Listings - Hills Realty')

@section('content')

<div class="listings-properties">
  
        <div class="row">
            <div class="col-sm-12 col-lg-4 col-xl-4 listings-properties__box">
                <div class="listings-properties__item">
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
                    
                    
                </div>
            </div>
            
        </div>
    
</div>

@endsection
