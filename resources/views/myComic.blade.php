@extends('layouts.layout')

@section('content')
<div class="comic-bluebar">
    <div class="container">
        <div>
            <img src="{{$myComic["thumb"]}}" alt="" style="transform: translateY(-230px); border: 1px solid white;">
        </div>
    </div>
</div>

<div class="container flex" style="justify-content: space-between">
    <div class="flex flex-column" style="flex-basis: 75%">
        <h1>{{$myComic["title"]}}</h1>
        <div class="flex" style="justify-content: space-between">
            <div class="flex" style="">
                <h4>U.S. Price: {{$myComic["price"]}}</h4>
            </div>
            <div class="flex">
                <h4>AVAILABLE</h4>
                <h4>Check Availability &#9660;</h4>
            </div>
        </div>
        <div>
            <p>{{$myComic["description"]}}</p>
        </div>
    </div>
    <div>
        <img src="{{asset('images/dc-logo.png')}}" alt="" style="width: 200px">
    </div>
</div>

<div style="background-color: lightgray">
    <div class="container flex">
        <div class="flex flex-column" style="flex-basis: 50%">
            <div>
                <h2>Talent</h2>
            </div>
            <div class="flex">
                <p>Art by:</p>
                <div>
                    @foreach($myComic["artists"] as $singleArtist)
                    <a href="#">{{$singleArtist}}</a>, 
                    @endforeach
                </div>
            </div>
            <div class="flex">
                <p>Written by:</p>
                <div>
                    @foreach($myComic["writers"] as $singleWriter)
                    <a href="#">{{$singleWriter}}</a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex flex-column" style="flex-basis: 50%">
            <div>
                <h2>Specs</h2>
            </div>
            <div class="flex">
                <p>Series:</p>
                <div>
                    <a href="">{{strtoupper($myComic["series"])}}</a>           
                </div>
            </div>
            <div class="flex">
                <p>U.S. Price:</p>
                <div>
                    <p>{{$myComic["price"]}}</p>
                </div>
            </div>
            <div class="flex">
                <p>On Sale Date:</p>
                <div>
                    <p>{{$myComic["sale_date"]}}</p>
                </div>
            </div>
        </div>
    </div>

</section>
<div style="background-color: #0282f9;">
<section  class="flex lower-sect container" style="justify-content: space-between">
    <div class="flex align-items-center">
        <img src="{{'images/buy-comics-digital-comics.png'}}" alt="">
        <p>DIGITAL COMICS</p>
    </div>
    <div class="flex align-items-center">
        <img src="{{'images/buy-comics-merchandise.png'}}" alt="">
        <p>DC MERCHANDISE</p>
    </div>
    <div class="flex align-items-center">
        <img src="{{'images/buy-comics-subscriptions.png'}}" alt="">
        <p>SUBSCRIPTION</p>
    </div>
    <div class="flex align-items-center">
        <img src="{{'images/buy-comics-shop-locator.png'}}" alt="">
        <p>COMIC SHOP LOCATOR</p>
    </div>
    <div class="flex align-items-center">
        <img src="{{'images/buy-dc-power-visa.svg'}}" style="width: 100px" alt="">
        <p>DC POWER VISA</p>
    </div>
</section>
</div>
@endsection