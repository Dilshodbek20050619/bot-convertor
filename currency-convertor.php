<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valyuta ayirboshlash & Ob-havo malumotlari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .currency-card {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .currency-section {
            padding: 60px 0;
        }

        .info-section {
            padding: 60px 0;
            text-align: center;
        }

        .btn-primary-custom {
            background-color: #d32f2f;
            border: none;
        }
    </style>
</head>

<body>
    <div class="currency-section text-center pt-5 bg-primary-subtle">
        <h1>Currency Converter</h1>
        <p>Need to make an international business payment? Take a look at our live foreign exchange rates.</p>
        <div class="currency-card">
            <h3>Make fast and affordable international business payments</h3>
            <p>Send secure international business payments in XX currencies, all at competitive rates with no hidden
                fees.</p>
            <form>
                <div class="row g-3 align-items-center">
                    <div class="col-md-5">
                        <label for="amount" class="form-label visually-hidden">Amount</label>
                        <input type="number" id="amount" class="form-control" placeholder="Amount" value="10000" name="prise">
                    </div>
                    <div class="col-md-3 text-center">

                        <select class="form-select" name="form">
                            <?php

                            global $currencies;
                            foreach ($currencies as $key => $currency) {

                                echo '<option value="' . $key . '">' . $key . '</option>';
                            }
                            ?>
                            <option value="UZS">UZS</option>
                        </select>
                    </div>
                    <div class="col-md-1 text-center">
                        <span>⇆</span>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="forn">
                            <?php

                            global $currencies;
                            foreach ($currencies as $keys => $currency) {

                                echo '<option value="' . $keys . '">' . $keys . '</option>';
                            }
                            ?>
                            <option value="UZS">UZS</option>
                        </select>
                    </div>
                </div>
                <p class="rate-info mt-2">
                    <?php
                    if (isset($_POST['prise']) && isset($_POST['form']) && isset($_POST['forn'])) {
                        $pris = $_GET['prise'];
                        $input1 = $_GET['form'];
                        $input2 = $_GET['forn'];
                    } else {
                        echo  "Iltimos valyutalarni tanlang!";
                    }


                    if ($input1 == 'UZS' or $input2 == 'UZS') {

                        if ($input1 == 'UZS') {
                            echo $pris . ' ' . $input1 . ' = ' . $pris / $currencies[$input2] . $input2 . '<br>';;
                        } else {

                            echo $pris . ' ' . $input1 . ' = ' . $pris * $currencies[$input1] . $input2 . '<br>';;
                        }
                    } else {
                        echo 'Hech bulmasa bittasi UZS bulishi kerak';
                    }
                    ?>
                    <i class="bi bi-info-circle"></i>
                </p>
                <button type="submit" class="btn btn-primary btn-primary-custom mt-3">Convert</button>
            </form>
        </div>
    </div>
    <div class="info-section bg-light">
        <h4 class="fw-bold">Let’s save you some time</h4>
        <p class="text-muted">If you’ve got a target exchange rate in mind but haven’t got time to keep tabs on market
            movement, then a firm order could be perfect for you. When your chosen rate is reached, we’ll act immediately,
            leaving you free to concentrate on your business.</p>
        <a href="src/Weather" class="btn btn-outline-danger">Ob havo ma'lumotlari</a>
    </div>
</body>

</html>