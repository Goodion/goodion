@extends('layouts.master')

@section('title', 'Обратная связь')

@section('content')

<!-- in -->
<div class="wr-color catalog">
    <div class="container">
        <form>
            <div class="form-group">
                @guest
                    <div class="form-group">
                        <label for="email">Введите E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">или номер телефона</label>
                        <input type="phone" class="form-control" id="phone" name="phone">
                    </div>
                @endguest
                <label for="feedback">Вопрос</label>
                <textarea class="form-control" id="feedback" rows="4" name="feedback"></textarea>
                <small id="feedbackHelp" class="form-text text-muted">Придумать текст сюда.</small>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</div>

@endsection
