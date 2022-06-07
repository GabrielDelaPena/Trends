<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/register.css') }}">
    <link rel="icon" href="/project tfestival/assets/photos/Logo.png" type="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Lobster&family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Lobster&family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b01b22b23.js" crossorigin="anonymous"></script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>

<body>
    <!-- Header : Een Button "Terug" linksboven-->
    <header>
        <div class="back"><a href="{{ route('ticket') }}">TERUG</a></div>
    </header>

    <main>
        <!-- Sectie 1 : een Form voor Aankoop Tickets-->
        <section>
            <hr>
            <div class="centercontainer">
                <div class="container">
                    <a href="home.html"><img src="{{ asset('photos/Logo.png') }}" alt="Logo Tfestival"></a>
                    <h1>Aankoop van tickets</h1>
                    <p>* De tickets worden niet verkocht aan de minder 18 jaar.</p>
                    <p>* Producten te bestellen ter plaatse.</p>
                    <form class="registration-form" method="POST" action="{{ route('register.store') }}">
                        @csrf
                        <input type="hidden" name="register_id" value="{{ rand(10,1000) }}">
                        <label class="col-one-half">
                            <span class="label-text">Familienaam</span>
                            <input class="solid" type="text" name="firstName" id="firstName">
                        </label>
                        <label class="col-one-half">
                            <span class="label-text">Voornaam</span>
                            <input class="solid" type="text" name="lastName" id="lastName">
                        </label>
                        <label>
                            <span class="label-text">Geboortedatum</span>
                            <input class="solid" type="date" name="geboortedatum" id="geboortedatum">
                        </label>
                        <label>
                            <span class="label-text">Email</span>
                            <input class="solid" type="text" name="email" id="email">
                        </label>
                        <label>
                            <span class="label-text">Adres</span>
                            <input class="solid" type="text" name="adres" id="adres">
                        </label>
                        <label>
                            <span class="label-text">Huisnummer</span>
                            <input class="solid" type="number" name="huisnummer" id="huisnummer">
                        </label>
                        <label>
                            <span class="label-text">App nr (Optioneel)</span>
                            <input class="solid" type="number" name="appnummer" id="appnummer">
                        </label>
                        <label>
                            <span class="label-text">Postcode</span>
                            <input class="solid" type="number" name="postcode" id="postcode">
                            <div class="radio_btns">
                                <label>
                                    <span class="text">Kies uw ticket</span><br>
                                    <img class="gif" src="{{ asset('photos/koopticket.gif') }}" width="200">
                                    <input type="radio" id="pukkelpop" name="ticket" value="1">
                                    <label for="pukkelpop">pukkelpop</label><br>
                                    <input type="radio" id="tomorrowland" name="ticket" value="3">
                                    <label for="tomorrowland">tomorrowland</label><br>
                                    <input type="radio" id="laundry_day" name="ticket" value="2">
                                    <label for="laundry_day">laundry_day</label>
                                </label>
                                <div class="voucher">
                                    <label>Voucher</label>
                                    <label for="voucher">Ja</label>
                                    <input type="radio" value="ja" name="voucher">
                                    <label for="voucher">Neen</label>
                                    <input type="radio" value="neen" name="voucher">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="submit" name="radio" type="submit">Naar Betaling</button>
                            </div>

                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer : 2 Flex's onder mekaar namelijk Social Media & FAQ -->
    <footer>
        <div class="flex">
            <hr>
            <div class="flex1">
                <a href="www.facebook.com/tfestival" class="fa fa-facebook"></a>
                <a href="www.twitter.com/oranjefestival" class="fa fa-twitter"></a>
                <a href="www.youtube.com/channel/UCoxcrlsEtLdf3VWBVrJZPSA" class="fa fa-youtube"></a>
                <a href="www.snapchat.com/" class="fa fa-snapchat"></a>
            </div>
            <hr>
            <div class="flex2">
                <p>&copy;2022 't Festival </p>
                <p>FAQ & Contact </p>
                <p>Privacy </p>
                <p>Ipsum</p>
            </div>
        </div>
    </footer>
    </div>

    <!-- <script type="module" src="/assets/js/register.js"></script> -->
</body>

</html>