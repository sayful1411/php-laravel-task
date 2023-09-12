<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body{
            display: flex;
			flex-direction: column;
			justify-content: center;
            align-items: center;
			margin-top: 10%;
        }
        .card{
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            padding: 20px;
            border-radius: 5px;
            border: 0;
        }
    </style>
</head>
<body>
    <div class="wrapper w-50">
        <div class="row">
            <div class="card col-md-6 mx-auto">
                <strong>Celcius to Farenheit</strong>
                <form method="post">
                    <div class="input-group my-2">
                        <input type="number" name="celcius" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-sm btn-primary my-2">
                            <span class="bi bi-plus-square"></span> Convert
                        </button>
                    </div>
                </form>
                <div id="farenheitResult" class="mt-3">
                    <?php 
                        if($_SERVER["REQUEST_METHOD"] === "POST"){
                            if(isset($_POST['celcius'])){
                                $c = (int) $_POST['celcius'];
                                $f = (float)(($c * 9 / 5) + 32);

                                echo "{$c} Celcius = {$f} Farenheit";
                            }
                        }
                    ?>
                </div>
            
                <strong>Farenheit to Celcius</strong>
                <form method="post">
                    <div class="input-group my-2">
                        <input type="float" name="farenheit" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-sm btn-warning my-2">
                            <span class="bi bi-plus-square"></span> Convert
                        </button>
                    </div>
                </form>
                <div id="celciusResult" class="mt-3">
                <?php 
                        if($_SERVER["REQUEST_METHOD"] === "POST"){
                            if(isset($_POST['farenheit'])){
                                $f = (float) $_POST['farenheit'];  
                                $c = (($f-32)*5)/9 ; 
                                $formattedResult = number_format($c, 2);
                                echo "{$f} Farenheit = {$formattedResult} Celcius";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>