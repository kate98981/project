<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>test</title>
    <!-- Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <script type="text/javascript"
            src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.6.4'></script>
</head>
<body>
<div class="wrapper">
    <header>
        <a href="/" class="a111">
            <div class="container-fluid head">
                <div class="row">
                    <div class="col">
                        <img src="logo.jpg">
                        <b>WORLD
                            BANK<br> Publications</b>
                    </div>
        </a>

        <div class="col" style="text-align: right; color: #A7604C">
            8-800-100-5005<br>+7 (3452) 522-000
        </div>
</div>
</div>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 el"><a href="#" class="a1"> Кредитные карты</a></div>
        <div class="col-md-2 el"><a href="#" class="a1"> Вклады</a></div>
        <div class="col-md-2 el"><a href="#" class="a1"> Дебетовая карта</a></div>
        <div class="col-md-2 el"><a href="#" class="a1"> Страхование</a></div>
        <div class="col-md-2 el"><a href="#" class="a1"> Друзья</a></div>
        <div class="col-md-2 el"><a href="#" class="a1"> Интернет-банк</a></div>
    </div>

    </header>
    <p class="p1">
    <ul class="breadcrumbs">
        <li><a href="/" class="p11 a11">Главная</a></li>
        <li><a href="/vklad" class="p11 a11">Вклады</a></li>
        <li><a href="/vklad/calc" class="p11">Калькулятор</a></li>
    </ul>
    </p>
    <div class="container content">
        <div class="calc">
            <table>
                <form method="post" id="form">
                    <tr>
                        <td colspan="2" style="text-align: center"><h1>Калькулятор</h1></td>
                    </tr>
                    <tr>
                        <td id="td1"> Дата оформления вклада</td>
                        <td><input type="text" id="datepicker" name="date1" class="w"></td>
                    </tr>
                    <tr>
                        <td id="td1"> Сумма вклада</td>
                        <td><input type="text" name="sum" id="sum1" readonly class="w"></td>
                        <td >
                            <div id="polzunok"></div>
                        </td>
                    </tr>
                    <tr>
                        <td id="td1"> Срок вклада</td>
                        <td><select name="srok" class="w">
                                <option value="1">1 год</option>
                                <option value="2">2 года</option>
                                <option value="3">3 года</option>
                                <option value="4">4 года</option>
                                <option value="5">5 лет</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td id="td1">Пополнение вклада</td>
                        <td colspan="2"><input type="radio" name="rad" value="0" checked> Нет <input type="radio"
                                                                                                     name="rad"
                                                                                                     value="1"> Да
                        </td>
                    </tr>
                    <tr>
                        <td id="td1"> Сумма пополнения вклада</td>
                        <td><input type="text" name="popol" id="popol1" readonly class="w"></td>
                        <td>
                            <div id="polzunok1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Рассчитать" class="but"> <span
                                    style="color: #334015" id="res"><b>Результат:</b></span></td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
    <footer class="footer container-fluid">
        <div class="row">
            <div class="col-md-auto text-white f"></div>
            <div class="col-md-auto text-white f"><a href="#" class="a1 a11"> Кредитные карты</div>
            </a>
            <div class="col-md-auto text-white f"><a href="#" class="a1 a11">Вклады</div>
            </a>
            <div class="col-md-auto text-white f"><a href="#" class="a1 a11"> Дебетовая карта</div>
            </a>
            <div class="col-md-auto text-white f"><a href="#" class="a1 a11">Страхование</div>
            </a>
            <div class="col-md-auto text-white f"><a href="#" class="a1 a11"> Друзья</div>
            </a>
            <div class="col-md-2 text-white f"><a href="#" class="a1 a11"> Интернет-банк</div>
            </a>
        </div>
    </footer>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<!-- Datepicker -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript" src="scripts/js.js"></script>
<script type="text/javascript" src="scripts/js1.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });

    $("#polzunok").slider({
        animate: "slow",
        range: "min",
        value: 10000,
        min: 1000,
        max: 3000000,
        slide: function (event, ui) {
            $("#sum1").val(ui.value);
        }
    });
    $("#sum1").val($("#polzunok").slider("value"));

    $("#polzunok1").slider({
        animate: "slow",
        range: "min",
        value: 10000,
        min: 1000,
        max: 3000000,
        slide: function (event, ui) {
            $("#popol1").val(ui.value);
        }
    });
    $("#popol1").val($("#polzunok1").slider("value"));
</script>
<script>

    $("#form").on("submit", function () {

        $.ajax({
            url: '/calc.php',
            method: 'post',
            dataType: 'html',
            data: $(this).serialize(),
            success: function (data) {
                alert(data);
            }
        });
    });
</script>
</body>
</html>
