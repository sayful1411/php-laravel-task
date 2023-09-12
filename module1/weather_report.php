<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
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
                <strong>Weather Report</strong>
                <form method="post">
                    <div class="form-group my-2">
                        <label for="temp" class="form-label">Select a Temperature (C°): </label><span id="temperatureValue"> 0 </span>
                        <input type="range" class="form-range" id="temp" name="temp" min="-100" max="100" step="1" value="0" required>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-dark my-2">
                            <span class="bi bi-plus-square"></span>Get Weather Report
                        </button>
                    </div>
                </form>
                <div class="mt-3">
                    <?php 
                        if($_SERVER["REQUEST_METHOD"] === "POST"){
                            $temp = $_POST["temp"];
                            
                            if($temp >= -100 && $temp <= 0){
                                $report = "It's freezing! 🥶";
                            }elseif($temp > 0 && $temp <= 15){
                                $report = "It's cool. 🤒";
                            }elseif($temp > 15 && $temp <= 30){
                                $report = "It's warm 😰";
                            }elseif($temp > 30 && $temp <= 100){
                                $report = "It's Hot 🥵";
                            }else{
                                $report = "Invalid Temperature";
                            }

                        }
                    ?>
                    <p id="grade" class="fw-bold">
                        <?php
                            if (isset($report)) {
                                echo $report;
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add JavaScript to update the temperature value in real-time
        const temperatureInput = document.getElementById("temp");
        const temperatureValue = document.getElementById("temperatureValue");
        
        temperatureInput.addEventListener("input", function() {
            temperatureValue.textContent = this.value;
        });
    </script>
</body>
</html>