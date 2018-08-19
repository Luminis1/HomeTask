@extends('layouts.treat')
@section('treatList')
    <div class="listing-page">
        <h1 class="Polaris-DisplayText Polaris-DisplayText--sizeLarge">Listings</h1>

        <div class="Polaris-Card">
            <div class="listing-block">
                <div class="Polaris-Card__Header">
                    <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
                        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                            <h2 class="Polaris-Heading">Yoga and Spiritual Healing Retreat</h2>
                            <span class="Polaris-TextStyle--variationSubdued">Rome, Spain · Yoga Retreat</span>
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
            <div class="listing-block">
                <div class="Polaris-Card__Header">
                    <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
                        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                            <h2 class="Polaris-Heading treat-title">Yoga and Spiritual Healing Retreat</h2>
                            <span class="Polaris-TextStyle--variationSubdued treat-place">Rome, Spain · Yoga Retreat</span>
                        </div>
                        <div class="Polaris-Stack__Item">
                            <div class="Polaris-ButtonGroup">
                                <div class="Polaris-ButtonGroup__Item Polaris-ButtonGroup__Item--plain"><button type="button" class="Polaris-Button Polaris-Button--primary"><span class="Polaris-Button__Content"><span>Edit</span></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Polaris-Card__Section treat-date">
                    <p>14 Jul 2018 — 30 Aug 2018 (arrivals weekly)</p>
                </div>
            </div>
        </div>


        <div class="Polaris-Card">
            <div class="Polaris-Card__Header">
                <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
                    <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                        <h2 class="Polaris-Heading">Add listing</h2>
                    </div>
                </div>
            </div>
            <div class="Polaris-Card__Section">
                <button type="button" class="Polaris-Button Polaris-Button--sizeSlim"><span class="Polaris-Button__Content"><span>Add new listing</span></span></button>
            </div>
        </div>


    </div>
    <a href="/addTreat">
    <input type="button" value="addTreat">
    </a>
    @endsection