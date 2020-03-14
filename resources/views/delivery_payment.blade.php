@extends('layouts.master')

@section('title', 'Доставка и оплата')

@section('content')

<div class="page-wrap">
    <!-- in -->
    <section class="wr-color delivery_payment">
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-10 m-auto text__box p-4">
                    <div class="row">
                        <h1 class="text-center w-100">Доставка и оплата</h1>
                    </div>
                </div>
                <div class="col-md-10 m-auto text__box p-4">
                    <h3>Мы доставляем…</h3>
                    <h4>Вам домой или на работу – курьером</h4>
                    <p>
                        Для Москвы и Московской области доступна быстрая курьерская доставка в следующие временные интервалы:<br />
                        10:00 – 18:00, 14:00 – 21:00 или 18:00 – 22:00 – для Москвы<br />
                        10:00 – 22:00 – для Московской области
                    </p>
                    <p>
                        А при оформлении и подтверждении заказа до 20:00 курьер привезёт его вам уже на следующий день!
                    </p>
                    <p>
                        В регионах доставка силами курьерских компаний возможна по согласованию.
                    </p>

                    <h4>До пункта самовывоза – транспортной компанией</h4>
                    <p>
                        Мы работаем со всеми основными курьерскими компаниями – СДЭК, IML, Boxberry и другими. Практически
                        в любом городе России доступно большое количество точек самовывоза – выберите самую удобную!
                    </p>
                </div>
                <div class="col-md-10 m-auto text__box p-4 text-center">
                    <div class="row justify-content-md-center justify-content-lg-start">
                        <div class="col-lg-4 col-6 pb-4">
                            <img src="/img/delivery_companies_logos/iml.png" alt="iml">
                        </div>
                        <div class="col-lg-4 col-6">
                            <img src="/img/delivery_companies_logos/cdek.png" alt="iml">
                        </div>
                        <div class="col-lg-4 col-6">
                            <img src="/img/delivery_companies_logos/boxberry.png" alt="iml">
                        </div>
                        <div class="col-lg-4 col-6 pb-4">
                            <img src="/img/delivery_companies_logos/dellin.png" alt="iml">
                        </div>
                        <div class="col-lg-4 col-6">
                            <img src="/img/delivery_companies_logos/pek.png" alt="iml">
                        </div>
                        <div class="col-lg-4 col-6">
                            <img src="/img/delivery_companies_logos/geldor.png" alt="iml">
                        </div>
                    </div>
                </div>
                <div class="col-md-10 m-auto text__box p-4 right text-right">
                    <h3>…Вы оплачиваете</h3>
                    <h4>Наличными или картой – при получении заказа</h4>
                    <p>
                        Оплата наличными доступна для всех способов доставки – вы можете оплатить заказ при получении у
                        курьера или в пункте самовывоза.
                    </p>

                    <h4>Банковским переводом – при оформлении заказа</h4>
                    <p>
                        После подтверждения заказа менеджер выставляет вам счёт и резервирует товар на 3 дня – в течение
                        этого времени необходимо оплатить заказ и сообщить менеджеру.
                    </p>

                    <h4>! Обращаем внимание:</h4>
                    <p>
                        - в настоящий момент окончательная стоимость доставки рассчитывается менеджером при оформлении заказа
                    </p>
                    <p>
                        - доставка некоторыми транспортными компаниями возможна только со 100% предоплатой заказа
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
