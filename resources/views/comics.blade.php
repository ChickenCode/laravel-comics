@extends('layouts.layout')

@section('content')
<section class="black-ground" style="padding-bottom: 15px;">
    <div class="container ">
        <h3>CURRENT SERIES</h3>
        
            <div class="flex wrap">
            @foreach($comicsList as $singleComic)
            <div class="flex flex-column card">
            <img src="{{$singleComic["thumb"]}}" alt="">
            <p>{{strtoupper($singleComic["series"])}}</p>
            </div>
            @endforeach
            </div>
            <div style="text-align: center">
                <p class="load">LOAD MORE</p>
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