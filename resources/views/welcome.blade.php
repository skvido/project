<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
    <?php
        use KubAT\PhpSimple\HtmlDomParser;

        $dom = HtmlDomParser::file_get_html( 'http://www.e-obce.sk/zoznam_vsetkych_obci.html');
        $city_names = $dom->find('div')[8]->find('table')[8]->find('<a>');

        $dom = HtmlDomParser::file_get_html( 'http://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=500');
        $city_names = $city_names + $dom->find('div')[8]->find('table')[8]->find('<a>');

        $dom = HtmlDomParser::file_get_html( 'http://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=1000');
        $city_names = $city_names + $dom->find('div')[8]->find('table')[8]->find('<a>');

        $dom = HtmlDomParser::file_get_html( 'http://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=1500');
        $city_names = $city_names + $dom->find('div')[8]->find('table')[8]->find('<a>');

        $dom = HtmlDomParser::file_get_html( 'http://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=2000');
        $city_names = $city_names + $dom->find('div')[8]->find('table')[8]->find('<a>');

        $dom = HtmlDomParser::file_get_html( 'http://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=2500');
        $city_names = $city_names + $dom->find('div')[8]->find('table')[8]->find('<a>');

        echo count($city_names);

    ?>
    </body>
</html>
