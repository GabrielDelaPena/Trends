<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'t Festival</title>
    <link rel="stylesheet" a href="{{ url('css/ticket.css') }}">
    <link rel="icon" href="/project tfestival/assets/photos/Logo.png" type="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Lobster&family=Saira+Stencil+One&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Lobster&family=Saira+Stencil+One&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7b01b22b23.js" crossorigin="anonymous"></script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>

<body>
    <!-- Header : Container met Navigatie Logo(navLogo) - Navigatie Menu (navMenu) - Navigatie Social Media (navSM) -->
    <!-- de indicator zijn de drie puntjes bij mouseover op navMenu-->
    <header>
        <nav>
            <div class="logo"><img src="{{ asset('photos/Logo.png') }}" alt=""></div>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">
                <li class="highlight"><a href="{{ route('home') }}">Homepage</a></li>
                <li><a href="{{ route('evenement') }}">Evenement</a></li>
                <li><a href="{{ route('ticket') }}">Ticket</a></li>
                <li><a href="{{ route('overons') }}">FAQ</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <div class="closeMenu"><i class="fa fa-times"></i></div>
                <span class="icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-snapchat"></i>
                    <i><a href="{{ route('login.index') }}" class="fas fa-users"></a></i>
                </span>
            </ul>
        </nav>
    </header>
    <main>
        <div id="sectie1">
            <div class="ticketbackground">
                <h2>Ticket</h2>
            </div>
            <div class="backgroundticket">
                <div class="containerknop">
                    <li><span>&#10003;</span> Bestel je tickets voor 't Festival</li>
                    <li><span>&#10003;</span> Tickets verkrijgbaar via email.</li>
                    <li><span>&#10003;</span> Extra beveiligd.</li>
                    <li><span>&#10003;</span> Bancontact, Debit kaart, Kredietkaart.</li>
                    <li><span>&#10003;</span> Verboden voor de -18 jaar.</li>
                </div>
                <div class="containerflex">
                    <div class="containerflex1">
                        <p>Dag - 1 | 9:00 - 3:00</p>
                        <h3>Event 1  <hr> €15,50</h3>
                        <p><b>- Podium</b></p>
                        <p>Hallo, Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                            Perferendis, illum voluptate eligendi placeat aliquam laborum
                            ab.
                            Odit quas cupiditate voluptatum facere impedit ad.
                            Tenetur ea illum doloremque non delectus sit?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="containerflex2">
                        <p>Dag - 2 | 12:00 - 17:00</p>
                        <h3>Event 2  <hr> €12,50</h3>
                        <p><b>- Podium</b></p>
                        <p>Hallo, Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                            Perferendis, illum voluptate eligendi placeat aliquam laborum
                            ab.
                            Odit quas cupiditate voluptatum facere impedit ad.
                            Tenetur ea illum doloremque non delectus sit?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="containerflex3">
                        <p>Dag - 3 | 12:00 - 17:00</p>
                        <h3>Event 3  <hr> €18,50</h3>
                        <p><b>- Podium</b></p>
                        <p>Hallo, Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                            Perferendis, illum voluptate eligendi placeat aliquam laborum
                            ab.
                            Odit quas cupiditate voluptatum facere impedit ad.
                            Tenetur ea illum doloremque non delectus sit?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="button">
                <a href="{{ route('register.index') }}"><button >ORDER TICKET &#8594</button></a>
            </div>
    </main>



    <!--Footer : Flex de Logo boven tekst van sponsor / Drie logo's van sponsors / flex1&2 voor Social Media & FAQ -->
    <footer>
        <div class="flex">
            <img src="{{ asset('photos/Logo.png') }}" alt="">
            <hr>
            <div class="tekstsponsor">
                <h2>Onze sponsors</h2>
                <p>Wij zijn onze sponsors en partners zeer dankbaar voor hun vertrouwen in 't Festival. Hun
                    steun en samenwerking wordt door al onze medewerkers enorm
                    gewaardeerd. Hieronder vind je een overzicht van onze actuele sponsors:</p>
            </div>
            <div class="sponsors">
                <div class="sponsor1"><img src="{{ asset('photos/output-onlinepngtools.png') }}" alt="">
                </div>
                <div class="sponsor2"><img src="{{ asset('photos/proximus2.png')}}" alt="" width="150px">
                </div>
                <div class="sponsor3"><img src="{{ asset('photos/reebok.png') }}" alt="" width="250px"></div>
            </div>
            <div class="flex1">
                <hr>
                <a href="www.facebook.com/tfestival" class="fa fa-facebook"></a>
                <a href="www.twitter.com/oranjefestival" class="fa fa-twitter"></a>
                <a href="www.youtube.com/channel/UCoxcrlsEtLdf3VWBVrJZPSA" class="fa fa-youtube"></a>
                <a href="www.snapchat.com/" class="fa fa-snapchat"></a>
                <hr>
            </div>
            <div class="flex2">
                <p>&copy;2022 't Festival </p>
                <p>FAQ & Contact </p>
                <p>Privacy </p>
                <p>Ipsum</p>
            </div>
        </div>
    </footer>

    <script src="{{ url('js/ticket.js') }}"></script>
</body>

</html>