@extends('layouts.master')

@section('title', 'Подтверждение E-Mail')

@section('content')
<!-- the main content -->
<div class="page-wrap">
    <!-- in -->
    <div class="wr-color registration_authorisation_form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Подтвердите адрес электронной почты') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Новая ссылка для подтверждения E-Mail отправлена.') }}
                                </div>
                            @endif

                            {{ __('Перед продолжением проверьте Вашу почту. Ссылка для активации была отправлена.') }}
                            {{ __('Если Вы не получили письмо') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите сюда, чтобы мы отправили ещё одно.') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
