@extends('layouts.treat')
@section('treatList')
    <div class="listing-page">
        <h1 class="Polaris-DisplayText Polaris-DisplayText--sizeLarge">Listings</h1>
@foreach($obj as $k => $v)
        <div class="Polaris-Card">
            <div class="listing-block">
                <div class="Polaris-Card__Header">
                    <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
                        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                            <h2 class="Polaris-Heading">{{$v->Unique_Listing_Title}}</h2>
                            <span class="Polaris-TextStyle--variationSubdued">{{$v->Country_of_destination}}, {{$v->Language_of_teaching}} · {{$v->Type_of_retreat}}</span>
                        </div>
                        <div class="Polaris-Stack__Item">
                            <div class="Polaris-ButtonGroup">
                                <div class="Polaris-ButtonGroup__Item Polaris-ButtonGroup__Item--plain"><button type="button" class="Polaris-Button Polaris-Button--primary"><span class="Polaris-Button__Content"><span>Edit</span></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-Card__Section">
                    <p>14 Jul 2018 — 30 Aug 2018 (arrivals weekly)</p>
                </div>
            </div>
        </div>

@endforeach
        <div class="Polaris-Card">
            <div class="Polaris-Card__Header">
                <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
                    <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                        <h2 class="Polaris-Heading">Add listing</h2>
                    </div>
                </div>
            </div>
            <div class="Polaris-Card__Section">
                <a href="/addTreat">
                <button type="button" class="Polaris-Button Polaris-Button--sizeSlim">
                    <span class="Polaris-Button__Content">
                        <span>Add new listing</span>
                    </span>
                </button>
                </a>
            </div>
        </div>
    </div>
    @endsection