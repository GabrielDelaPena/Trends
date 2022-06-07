<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tickets</title>

    <link href="{{ public_path('css/invoice.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="pdf-file">
    <div class="wrapper">
        <div class="header" style="background-color: #f4f4f4; height:120px;">
            <div class="cont2">
                <img src="{{ $logo }}" alt="logo van t'Festival (grijs en groen)" width="120px" />
            </div>
            <div class="cont1" style="margin-left: 150px;">
                <h1 class="title" style="margin-bottom: -20px;">E-TICKET t'FESTIVAL</h1>
                <p class="subtitle"><b>Don't forget to bring this with you</b></p>
            </div>
        </div>
    </div>
    <div class="wrapper2" style="margin-top: 50px;">
        <div class="main_01">
            <div class="part1">
                <p class="info">
                    Beste festivalganger,
                    <br />
                    <br />
                    Dit is jouw festivalticket voor 't Festival 2022. Vergeet niet het
                    ticket te bewaren en deze bij ingang aan de stewards te tonen.
                    <br />
                    Zonder vertoon van ticket kan u niet binnen! Per persoon kan slechts
                    één ticket worden gescand, alle begeleiders dienen een eigen ticket
                    te hebben. We wensen je alvast veel plezier!
                    <br />
                    <br />
                    E-mail: kevin.tfestival@gmail.be - Website: www.tfestival.be
                </p>
            </div>
            <div class="img_con" style="margin-top: 50px;">
                <img src="{{ $image }}" alt="logo van t'Festival (grijs en groen)" style="height: 150px; width: 700px" />
            </div>
        </div>
    </div>
    <div class="wrappermain" style="margin-top: 20px;">
        <div class="main_02">
            <div class="part2">
                <div class="cont1">
                    <h2 class="ticket" id="type"><span id="type">{{ $festival }}</span></h2>
                </div>
                <div class="flex">
                    <div class="cont2" style="margin-left:10px;">
                        <p class="gen_info">Naam: <span id="name">{{ session('registration.firstName') }} {{ session('registration.lastName') }}</span></p>
                        <p class="gen_info">Type: <span id="type">{{ $festival }}</span></p>
                        <p class="gen_info">ID: <span id="ticketId">{{ session('registration.register_id') }}</span></p>
                        <p class="gen_info">Datum: <span id="date">{{ $date }}</span></p>
                    </div>
                    <div class="cont3" style="margin-right: 10px; margin-top: 15px;">
                        <img src="data:image/png;base64, {{ base64_encode(QrCode::size(150)->generate( $customer[0]->id )) }} ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapperfooter" style="margin-top: 50px;">
        <div class="footer">
            <div class="sponsors">
                <div class="sp3">
                    <img src="{{ $sponsors }}" alt="" width="100%" style="margin-top: 100px" />
                </div>
            </div>
        </div>
    </div>

    @if (session('registration.voucher') == 'ja')
    <div class="cont1">
        <h2 class="ticket" id="type"><span id="type">Voucher voor t'festival: {{ $festival }}</span></h2>
    </div>
    <div style="margin-top: -50px; margin-left: 100px;">
        <img src="{{ $voucher }}" alt="">
    </div>
    @endif

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script type="module" src="{{ url('js/qrcode.js') }}"></script>
</body>

</html>