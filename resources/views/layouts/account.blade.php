<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ mix('/css/styles.css') }}">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__logo">
                Hills Realty
            </div>

            <div class="header__menu">
                <a href="#" class="header__menu-link header__menu-link--active">Home</a>
                <a href="/home/for-sale/la" class="header__menu-link">Listing</a>
                <a href="#" class="header__menu-link">Property</a>
                <a href="#" class="header__menu-link">Pages</a>
            </div>

            <div class="header__account">
                <a href="/account/saved" class="header__account-heart"><i class="fa-solid fa-heart"></i></a>
                <a class="header__account-link"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </header>



    <div class="account-layout">
        <div class="listings-city">
            <img
                src="{{ URL::to('/') }}/images/md-3.jpeg"
                class="listings-city__img"
            />
    
            <h1 class="listings-city__title">Saved Listings</h1>
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

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    Links
                </div>
                <div class="col-md-9">
                    <div class="content">
                        @yield('content')
                    </div>
               
                </div>
            </div>
        </div>

      
    
      
      
    </div>



  

</body>

</html>
