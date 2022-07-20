<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ mix('/css/styles.css') }}">
</head>

<body>

    @include('components/header')

    <div class="account-layout">
        <div class="listings-city">
            <img
                src="{{ URL::to('/') }}/images/md-3.jpeg"
                class="listings-city__img"
            />
    
            <h1 class="listings-city__title">@yield('title')</h1>
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
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="account__menu">
                            <h2>Menu</h2>
                            <a href="/account/saved">Saved Listings</a>
                            <a href="/account/show-status">Listing Request Status</a>
                        </div>
                      

                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>    
        </div>
       

      
    
      
      
    </div>



  

</body>

</html>
