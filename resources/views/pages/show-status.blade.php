@extends('layouts.account')


@section('page-title', 'Listing Request Status - Hills Realty')

@section('content')

    <div class="request-list">
        <h2>All Requests</h2>

        @for($i = 0; $i < 10; $i++)
            <div class="request-list__wrapper">
                <div> 
                    <h3>412 Brooke Ave 
                    </h3>
                    <span class="request-list__details">
                            <i class="fa-solid fa-bed"></i> 4
                            <i class="fa-solid fa-bath"></i> 3
                            <i class="fa-solid fa-ruler-combined"></i> 2440 SQFT
                    </span>
                </div>
                <div class="request-list__info">
                    <span class="request-list__info-title">
                        Status
                    </span>
                    <div class="request-list__info-status request-list__info-status--success request-list__info-status--cancelled request-list__info-status--sold">
                        Success
                    </div>
                </div>
            </div>
        @endfor
       
        
    </div>

@endsection
