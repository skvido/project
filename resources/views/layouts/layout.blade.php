<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="css/layout.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <img src="images/logo.png" alt="logo" width = "200" height="60">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">Kontakty a čísla na oddelenia</div>
                    <div class="col-md-1 col-sm-6 col-xs-12">
                        <select>
                            <option>EN</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <input type="search"/>
                        <button type="button" class="btn">Prihlásiť</button>
                    </div>
                </div>
                <div>
                    <span>O nás</span>
                    <span>Zoznam miest</span>
                    <span>Inšpekcia</span>
                    <span>Kontakt</span>
                </div>
            </div>
        </header>
        <div id="content" class="container">
            @yield('content')
        </div>

        <div class="jumbotron">
            <div class="container">
                <div class = "row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <p><b>ADRESA A KONTAKT</b></p>
                        <p>ŠÚKL</p>
                        <p>Kvetná 11</p>
                        <p>825 08 Bratislava 26</p>
                        <p>Ústredňa:</p>
                        <p>+421-2-50701 111</p>
                        <p></p>
                        <p><b>KONTAKTY</b></p>
                        <p>telefónne čísla</p>
                        <p>adresa</p>
                        <p>úradné hodiny</p>
                        <p>bankové spustenie</p>
                        <p></p>
                        <p><b>INFORMÁCIE PRE VEREJNOSŤ</b></p>
                        <p>Zoznam vyvezených liekov</p>
                        <p>MZ SR</p>
                        <p>Národný portál zdravia</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <p><b>O NÁS</b></p>
                        <p>Dotazníky</p>
                        <p>Hlavní predstavitelia</p>
                        <p>Základné dokumenty</p>
                        <p>Zmluvy za ŠÚKL</p>
                        <p>História a súčasnosť</p>
                        <p>Národná spolupráca</p>
                        <p>Medzinárodná spolupráca</p>
                        <p>Poradné orgány</p>
                        <p>Legislatíva</p>
                        <p>Priestupky a iné správne delikty</p>
                        <p>Zoznam dlžníkov</p>
                        <p>Sadzobník ŠÚKL</p>
                        <p>Verejné obstarávanie</p>
                        <p>Vzdelávacie akcie a prezentácie</p>
                        <p>Konzultácie</p>
                        <p>Volné pracovné miesta (0)</p>
                        <p>Poskytovanie informácií</p>
                        <p>Sťažnosti a petície</p>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-12">
                        <p><b>MÉDIÁ</b></p>
                        <p>Tlačové správy</p>
                        <p>Lieky v médiách</p>
                        <p>Kontakt pre médiá</p>
                        <p></p>
                        <p><b>DATABÁZY A SERVIS</b></p>
                        <p>Databáza liekov a zdravotných pomôcok</p>
                        <p>Iné zoznamy</p>
                        <p>Kontaktný formulár</p>
                        <p>Mapa stránok</p>
                        <p>A - Z index</p>
                        <p>Linky</p>
                        <p>RSS</p>
                        <p>Doplnok pre internetový prehliadač</p>
                        <p>Prehliadače formátov</p>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-12">
                        <p><b>DROGOVÉ PREKURZORY</b></p>
                        <p>Aktuality</p>
                        <p>Legislatíva</p>
                        <p>Pokyny</p>
                        <p>Kontakt</p>
                        <p></p>
                        <p><b>INÉ</b></p>
                        <p>Linky</p>
                        <p>Mapa stránok</p>
                        <p>FAQ</p>
                        <p>Podmienky používania</p>
                        <p></p>
                        <p><b>RAPID ALERT SYSTEM</b></p>
                        <p>Rychla výstraha vyplývajúca z nedostatkov v kvalite liekov</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
