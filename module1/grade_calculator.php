<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
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
                <strong>Grade Calculate</strong>
                <form method="post">
                    <div class="form-group my-2">
                        <label for="score1">Test Score 1:</label>
                        <input type="number" name="score1" class="form-control" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="score2">Test Score 2:</label>
                        <input type="number" name="score2" class="form-control" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="score3">Test Score 3:</label>
                        <input type="number" name="score3" class="form-control" required>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-dark my-2">
                            <span class="bi bi-plus-square"></span> Result
                        </button>
                    </div>
                </form>
                <div class="mt-3">
                    <?php 
                        if($_SERVER["REQUEST_METHOD"] === "POST"){
                            $score1 = $_POST["score1"];
                            $score2 = $_POST["score2"];
                            $score3 = $_POST["score3"];
                            
                            $average = ($score1 + $score2 + $score3) / 3;

                            $grade = ($average >= 90) ? ("A") : (($average >= 80) ? ("B") : (($average >= 70) ? ("C") : (($average >= 60) ? ("D") : ("F"))));

                        }
                    ?>
                    <p id="grade" class="fw-bold">
                        Result: 
                        <br>
                        <?php
                            if (isset($average) && isset($grade)) {
                                printf("Avarage Score: %.2f", $average);
                                echo "<br/>";
                                echo "Letter Grade: $grade<br>";
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>