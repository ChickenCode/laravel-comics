@extends('layouts.layout')

@section('content')
    <section>
        <h3>CURRENT SERIES</h3>
        <div>
            @foreach($comicsList as $singleComic)
                <img src="{{$singleComic["thumb"]}}" alt="">
                <p>{{strtoupper($singleComic["series"])}}</p>
            @endforeach

            <div>
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
    
    <section style="background-color: #0282f9;">
    <div>
        <img src="{{'images/buy-comics-digital-comics.png'}}" alt="">
        <p>DIGITAL COMICS</p>
    </div>
    <div>
        <img src="{{'images/buy-comics-merchandise.png'}}" alt="">
        <p>DC MERCHANDISE</p>
    </div>
    <div>
        <img src="{{'images/buy-comics-subscriptions.png'}}" alt="">
        <p>SUBSCRIPTION</p>
    </div>
    <div>
        <img src="{{'images/buy-comics-shop-locator.png'}}" alt="">
        <p>COMIC SHOP LOCATOR</p>
    </div>
    <div>
        <img src="{{'images/buy-dc-power-visa.svg'}}" style="width: 100px" alt="">
        <p>DC POWER VISA</p>
    </div>
    </section>
@endsection