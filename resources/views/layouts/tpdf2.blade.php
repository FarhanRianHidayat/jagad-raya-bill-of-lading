<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jagad Raya Logistik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('assets/css/pdf.css') !!}">
</head>

<body>
    <div class="row">
        <div class="col-6">
            <div class="dalam-1">
                <hr>
                <p>Shipper</p>
            </div>
            <div class="dalam-1">
                <hr>
                <p>Consignee</p>
            </div>
            <div class="dalam-1">
                <hr>
                <p>Notify Party</p>
            </div>
            <div class="dalam-2">
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p>Pre-carriage by</p>
                    </div>
                    <div class="col-6">
                        <p>Place Of Receipt</p>
                    </div>
                </div>
            </div>
            <div class="dalam-2">
                <hr>
                <div class="row">
                    <div class="col-3">
                        <p>Pre-carriage by</p>
                    </div>
                    <div class="col-3">
                        <p>Voy No.</p>
                    </div>
                    <div class="col-4">
                        <p>Place Of Receipt</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="dalaman">
                <center>
                    <p class="tulis">B/L No.</p>
                    {{-- <img src="2.png" alt="" srcset=""> --}}
                    <h6>PT. JAGAD RAYA LOGISTIK</h6>
                    <h5>OCEAN BILL OF LADING</h5>
                </center>
                <P>RECEIVED by the Carrier the Goods as specified above in apparent good order and condition unless
                    otherwise
                    stated, to be transported to such place as agreed, authorised or permitted herein and subject to all
                    the term
                    and conditions appearing on the front and reverse of this Bill of Lading to which the Merchant
                    agrees by
                    accepting this Bill of Lading, any local privileges and customs notwithstanding.</P>
                <P>The particulars given below as stated by the shipper and the weight, measure, quantity, condition,
                    contens
                    and value of the Goods are unknown to the Carrier.</P>
                <P>In WITNESS whereof one (1) original Bill of Lading has been signed if not other- wise stated below,
                    the same
                    being accomplished the other (s), if any, to be void. If required by the Carrier one (1) original
                    Bill of
                    Lading must be surrendered duly endorsed in exchange for the Goods or delivery order.</P>
            </div>
        </div>
    </div>
    <div class="isi-1">
        <hr>
        <div class="isi-2">
            <div class="row">
                <div class="col-4">
                    <p>Port Of Discharge</p>
                </div>
                <div class="col-4">
                    <p>Place Of delivery</p>
                </div>
                <div class="col-4">
                    <p>Final Destination</p>
                </div>
            </div>
        </div>
    </div>
    <div class="kotak">
        <div class="row">
            <div class="col-4">
                <p>owners's mark/Container No. <br> Mark and nos</p>
            </div>
            <div class="col-4">
                <p>Description of goods</p>
            </div>
            <div class="col-2">
                <p>Gross weight <br> kgs</p>
            </div>
            <div class="col-2">
                <p>Measurement <br> m<span>3</span></p>
            </div>
        </div>
    </div>
    <div class="kotak-2">
        <div class="line">
            <hr>
            <p>Type of Service</p>
        </div>
        <div class="line">
            <hr>
            <p>Number of Original B/L'S</p>
            @foreach ($shipment as $row)
                {{ $row->consignee->bolnumber }}
            @endforeach
        </div>
        <div class="line">
            <hr>
            <p>Place and date of issue</p>
        </div>
    </div>
    <div class="kotak-3">
        <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4">
                <center>
                    <p>As Agents</p>
                </center>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
