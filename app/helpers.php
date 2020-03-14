<?php

if (!function_exists('CityDetermineByIp')) {
    function cityDetermineByIp()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json", "Authorization: Token " . config('dadata.token')]);
        curl_setopt($ch, CURLOPT_URL, "https://suggestions.dadata.ru/suggestions/api/4_1/rs/iplocate/address?ip=" . $ip);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        if(curl_exec($ch) === false) {
            $message = 'Ошибка curl: ' . curl_error($ch);
        } else {
            $collection = json_decode(curl_exec($ch));
            if (isset($collection->location->data->city))
            {
                return $collection->location->data->city;
            }
        }

        curl_close($ch);

        return null;
    }
}
