<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stocks Squared</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            a {
                color: #FEB91C;
                padding: 0 25px;
                font-size: 1.0rem;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }
            /* Custom styles */
            .stock-slider {
                background-color: #2D2D2D;
                display: flex;
                flex-direction: row;
            }
            .market-indices {
                display: flex;
                flex-direction: row;
                align-items: center;
                font-weight: 600;
                font-size: 1.1rem;
                width: 85%;
            }
            .positive {
                color: #00BC40;
            }
            .negative {
                color: #F60000;
            }
            #sp500-price, #dow30-price, #nasdaq-price, #russell2000-price, #sp500-pc, #dow30-pc, #nasdaq-pc, #russell2000-pc {
                font-weight: 400;
                font-size: 0.9rem;
            } 
            .sp500, .dow30, .nasdaq, .russell2000 {
                margin-left: 9%;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 5%;
                top: 18px;
                background-color: #721BFF;
                padding: 10px;
                border-radius: 5px;
            }
            .logo {
                margin: 1% 0 0 5%;
            }
            #searchbar {
                position: absolute;
                right: 10px;
                border-radius: 5px;
                margin-bottom: 35px;
            }
        </style>
    </head>
    <body>
        <div class="stock-slider">
            <img src="/storage/nasa.png"/>
            <!-- Stocks can have a class added called positive or negative that changes the color of the text -->
            <div class="market-indices">
                <span class="sp500 positive">S&amp;P 500 <span id="sp500-price">3,149.15</span> <span id="sp500-pc">+0.23%</span></span>
                <span class="dow30 negative">DOW 30 <span id="dow30-price">28,419.15</span> <span id="dow30-pc">-1.23%</span></span>
                <span class="nasdaq positive">NASDAQ <span id="nasdaq-price">11,419.15</span> <span id="nasdaq-pc">+0.53%</span></span>
                <span class="russell2000 positive">RUSSELL 2000 <span id="russell2000-price">8,419.15</span> <span id="russell2000-pc">-0.23%</span></span>
            </div> 
        </div>

        <nav class="position-ref">
            <img src="/storage/stocks-squared.png" class="logo" alt="Stocks Squared"/>

            @if (Route::has('login'))
                <div class="top-right links">
                    <input type="text" id="searchbar" placeholder="Search our site..."/><br><br>
                    @auth
                        <a href="{{ url('/home') }}">User Profile</a>
                        <a href="{{ url('/admin-profile') }}">Admin Profile</a>
                        <a href="{{ url('/moderator') }}">Moderator Profile</a>
                    @else
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/strat-submission') }}">Submit Strategy</a>
                    <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>

        </body>
</html>
