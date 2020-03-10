@extends('layouts.master')

@section('title', 'Обратная связь')

@section('content')

<!-- in -->
<div class="wr-color catalog">
    <div class="container">
        <form>
            <div class="form-group">
                <label for="review">Отзыв</label>
                <textarea class="form-control" id="review" rows="4" name="review"></textarea>
                <small id="reviewHelp" class="form-text text-muted">Ваш отзыв будет опубликован после модерации.</small>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</div>

@endsection
