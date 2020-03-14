@php
    $bigCities = collect(['Москва', 'Санкт-Петербург', 'Новосибирск', 'Екатеринбург' , 'Нижний Новгород', 'Казань', 'Челябинск',
                 'Омск', 'Самара', 'Ростов-на-Дону', 'Уфа', 'Красноярск', 'Воронеж', 'Пермь', 'Волгоград', 'Краснодар', 'Саратов', 'Тюмень', 'Тольятти']);
@endphp

<div class="modal fade" id="cityChoiceModal" tabindex="-1" role="dialog" aria-labelledby="cityChoiceModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cityChoiceModalLongTitle">Укажите город</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/city_choice">
                <div class="modal-body">

                    @csrf
                    <div class="form-group row">
                        @foreach($bigCities as $bigCity)
                            <div class="col-6 col-md-4">
                                <small><span class="text-muted" onclick="$('#city').val('{{ $bigCity }}')">{{ $bigCity }}</span></small>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group row">
                        <div class="col-md">
                            <input id="city" class="form-control" name="city" value="{{ old('city') }}" required autocomplete="off" autofocus>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
