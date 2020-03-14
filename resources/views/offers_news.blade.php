@extends('layouts.master')

@section('title', 'Акции и новости')

@section('content')

<div class="page-wrap">
    <!-- in -->
    <section class="wr-color delivery_payment">
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-10 m-auto text__box p-4">
                    <div class="row">
                        <h1 class="text-center w-100">Акции</h1>
                    </div>
                </div>
                @foreach($offers as $offer)
                    <div class="col-md-10 m-auto text__box p-4">
                        <h3>
                            {{ $offer->title }}
                        </h3>
                        <small class="text-muted">{{ $offer->created_at->isoFormat('D MMM YYYY, dddd') }}</small>
                        <p>
                            {{ $offer->description }}
                        </p>
                    </div>
                @endforeach
                <div class="col-md-10 m-auto text__box p-4">
                    <div class="row">
                        <h1 class="text-center w-100">Новости</h1>
                    </div>
                </div>
                @foreach($news as $singleNews)
                    <div class="col-md-10 m-auto text__box p-4">
                        <h3>
                            {{ $singleNews->title }}
                        </h3>
                        <small class="text-muted">{{ $singleNews->created_at->isoFormat('D MMM YYYY, dddd') }}</small>
                        <p>
                            {{ $singleNews->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

@endsection
