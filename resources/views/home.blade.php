@extends('app')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<center><img src="tumbas.png" style="width:1150px;"></center>
<div> <br />
    <center>
        <p><a style="font-family: bebas; margin-top:25px; font-size:20px" class="btn btn-warning btn-lg" href="/product" role="button">Start Shopping &raquo;<img src="{{ asset('/basket.svg') }}" style="width:50px; margin-left:8px;"></a></p>
    </center>
</div>

<div class="row " style="margin-top: 90px">
    <div class="col-md-4" align="center">

        <h1 class="font-effect-shadow-multiple" style="font-family: bebas neue; letter-spacing:2px;">AMAN<img src="{{ asset('/lock.svg') }}" style="width:26px; margin-left:6px;"></h1>
        <p style="font-family: bebas; font-size:16px;">Jual Beli Barang secara AMAN hanya ada di TUMBAS.id</p>
    </div>
    <div class="col-md-4" align="center">
        <h1 class="font-effect-shadow-multiple" style="font-family: bebas neue; letter-spacing:2px;">TERPERCAYA <img src="{{ asset('/medal.svg') }}" style="width:28px; margin-left:1px;"></h1>
        <p style="font-family: bebas; font-size:16px;">Temukan Berbagai Macam pelapak Terpercaya Hanya di TUMBAS.id</p>
    </div>
    <div class="col-md-4" align="center">
        <h1 class="font-effect-shadow-multiple" style="font-family: bebas neue; letter-spacing:2px;">BERKUALITAS <img src="{{ asset('/five.svg') }}" style="width:40px; margin-left:2px; margin-top:-7px;"></h1>
        <p style="font-family: bebas; font-size:16px;">Temukan Barang Baru dan Bekas Berkualitas hanya di TUMBAS.id</p>
        <div style="margin-top:100px;">
        </div>
    </div>
</div>
@stop
