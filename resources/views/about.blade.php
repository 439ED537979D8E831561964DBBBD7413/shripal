@extends('user.layout.app')

@section('content')
<div class="banner row no-margin" style="background-image: url('{{ asset('asset/img/banner-bg.jpg') }}');">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="col-md-8">
            <h2 class="banner-head"><span class="strong">Work that puts you first</span><br>Drive when you want, make what you need</h2>
        </div>
        <div class="col-md-4">
            <div class="banner-form">
                <div class="row no-margin fields">
                    <div class="left">
                    	<img src="{{asset('asset/img/ride-form-icon.png')}}">
                    </div>
                    <div class="right">
                        <a href="{{url('provider/register')}}">
                            <h3>Sign up to drive</h3>
                            <h5>SIGN UP <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>

                <div class="row no-margin fields">
                    <div class="left">
                    	<img src="{{asset('asset/img/ride-form-icon.png')}}">
                    </div>
                    <div class="right">
                        <a href="{{url('provider/login')}}">
                            <h3>Sign in to drive</h3>
                            <h5>SIGN IN <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>

                <p class="note-or">Or <a href="{{ url('login') }}">sign in</a> with your rider account.</p>
            </div>
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        
        <div class="col-md-4 content-block small">
            <h2>Set your own schedule</h2>
            <div class="title-divider"></div>
            <p>You can drive with {{ Setting::get('site_title', 'Tranxit') }} anytime, day or night, 365 days a year. When you drive is always up to you, so it never interferes with the important things in your life.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Make more at every turn</h2>
            <div class="title-divider"></div>
            <p>Trip fares start with a base amount, then increase with time and distance. And when demand is higher than normal, drivers make more.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Let the app lead the way</h2>
            <div class="title-divider"></div>
            <p>Just tap and go. You’ll get turn-by-turn directions, tools to help you make more, and 24/7 support—all available right there in the app.</p>
        </div>

    </div>
</div>

<div class="row gray-section no-margin full-section">
    <div class="container">                
        <div class="col-md-6 content-block">
            <h3>About the app</h3>
            <h2>Designed just for drivers</h2>
            <div class="title-divider"></div>
            <p>GO GREEN Cabs app offers the easiest & fastest way to book a ride.
GO GREEN cabs app offers the easiest & fastest way to book a ride. GO GREEN is the most popular cab booking service in India.

Where will go to in your next GG cab ride? Download the app, complete the fast signup process & book your first ride. Have a friend’s referral code? Sign up with that code to get your first trip free!

Some of the popular travel options available on the GG CAB app are:

• Auto: Fastest way to book autos without the hassle of waiting & haggling for price
• Share: Book up to 2 seats to share AC cars with others travelling on the same route. Save up to 50% on regular cab fares
• Share Express: Save time & money by travelling in shared cabs on fixed routes
• Micro: Book the cheapest AC taxi in town starting at just Rs. 5/km
• Mini: Travel in comfy AC hatchbacks at pocket-friendly fares
• Prime Sedan: Top sedans with free Wi-Fi & top-rated drivers
• Prime Play: High-rated Prime Sedans with free in-cab entertainment. Enjoy movies, music, live video streaming & more on the go
• Prime SUV: Spacious SUVs with more seats, free Wi-Fi & top rated drivers
• LUX: Travel in top-of-the-line luxury cars at unbeatable fares
• Outstation: Ride out of town at affordable one-way & round trip fares with free in-cab entertainment. Enjoy songs, movies, live video streaming & more.
• Rentals: The affordable car rental service for all your city tours. Choose from flexible hourly packages to rent cabs driven by our top-rated partners

All our vehicles come equipped with onboard GPS for route navigation. See all your available ride options in the app.

Book a taxi in just a few taps. Here’s how it works:

• Set your pickup location (E.g. Home, Office, Airport, Railway station, current location, etc.)
• See all available cabs/taxis near your location being displayed on the map
• Choose from multiple payment options including cash, GG CAB Money, UPI, credit card, etc.
• Pick the type of vehicle you want & tap ‘RIDE NOW’
• Get instant confirmation with trip details
• Track your cab in real time

Invoices will be mailed to you immediately after you’ve completed your journey.

More benefits of using GG CAB:

• Multiple ways to pay: Pay for your trips in cash or via multiple cashless options like GG CAB money, UPI, debit card, credit cards, Jio money etc
• Save more with Cab, Auto & Share Pass: Enjoy more savings in your daily commute with Cab Pass, Auto Pass & Share Pass
• GGCAB Select: Become an GGCAB Select member to avail exclusive benefits like Prime Sedans at Mini fares & more
• Know fares & ride features: Check fares & various features of a ride category before booking
• GGCAB Play: Enjoy free in-cab entertainment in Prime Play, Prime SUV, Lux, Outstation and other select rides. Play songs, Videos, movies, TV shows and more on the go!
• Schedule a ride: Choose ‘RIDE LATER’ to book a cab/taxi in advance from anywhere
• Travel with safety: Share your travel plan with family & friends so they can track your vehicle & know you are safe

You can also tag work or business related trips as Corporate rides. You’ll get invoices for these rides at your official email address. Companies can use GGCAB Corporate to easily track & sponsor rides for employees.

Got questions? Visit ggcab support website (https://HELP. GGCAB. In/support /home) for more information or write to us at support@ggcab. In.

Stay up to date on all our exciting offers and latest happenings by connecting with us online.
support@ggcab.in
Toll free - 18002708300</p>
            <a class="content-more-btn" href="#">SEE HOW IT WORKS <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="col-md-6 full-img text-center" style="background-image: url({{ asset('asset/img/driver-car.jpg') }});"> 
            <!-- <img src="img/anywhere.png"> -->
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        
        <div class="col-md-4 content-block small">
            <h2>Rewards</h2>
            <div class="title-divider"></div>
            <p>You’re in the driver’s seat. So reward yourself with discounts on fuel, vehicle maintenance, cell phone bills, and more. Reduce your daily expenses and take home extra cash.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Requirements</h2>
            <div class="title-divider"></div>
            <p>Know you’re ready to hit the road. Whether you’re driving your own car or a commercially-licensed vehicle, you must meet the minimum requirements and complete a safety screening online.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Safety</h2>
            <div class="title-divider"></div>
            <p>When you drive with {{ Setting::get('site_title', 'Tranxit') }}, you get 24/7 driver support and insurance coverage. And all riders are verified with their personal information and phone number, so you’ll know who you’re picking up and so will we.</p>
        </div>

    </div>
</div>
            
<div class="row find-city no-margin">
    <div class="container">
        <h2>Start making money</h2>
        <p>Ready to make money? The first step is to sign up online.</p>

        <button type="submit" class="full-primary-btn drive-btn">START DRIVE NOW</button>
    </div>
</div>

<div class="footer-city row no-margin" style="background-image: url({{ asset('asset/img/footer-city.png') }});"></div>
@endsection