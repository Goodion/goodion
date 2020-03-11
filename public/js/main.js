//
$(document).ready(function(){
    $(".menu-btn-top").on('click',function(){
        $(this).toggleClass("is-active");
        $(".munu-underTop ul").toggleClass("menu-op");
    });
});

// Dadata city autocompleter
var token = "23c25eff9726254458ac713e8a6d9fab4ab1c4b9";
var $city = $("#city");

// удаляет районы города и всё с 65 уровня
function removeNonCity(suggestions) {
    return suggestions.filter(function(suggestion) {
        return suggestion.data.fias_level !== "5" && suggestion.data.fias_level !== "65";
    });
}

function join(arr /*, separator */) {
    var separator = arguments.length > 1 ? arguments[1] : ", ";
    return arr.filter(function(n){return n}).join(separator);
}

function cityToString(address) {
    return join([
        join([address.city_type, address.city], " "),
        join([address.settlement_type, address.settlement], " ")
    ]);
}

// Ограничиваем область поиска от города до населенного пункта
$city.suggestions({
    token: token,
    type: "ADDRESS",
    hint: false,
    bounds: "city-settlement",
    onSuggestionsFetch: removeNonCity
});

// Определяем город по IP-адресу
$city.suggestions().getGeoLocation()
    .done(function(locationData) {
        var sgt = {
            value: null,
            date: locationData
        };
        console.log(locationData);
        $city.suggestions().setSuggestion(sgt);
        $city.val(cityToString(locationData));
    });
