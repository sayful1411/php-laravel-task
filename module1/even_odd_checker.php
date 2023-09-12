<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
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
                <strong>Even or Odd Checker</strong>
                <form method="post">
                    <div class="form-group my-2">
                        <label for="">Number</label>
                        <input type="number" name="evenOrOdd" class="form-control" required>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-danger my-2">
                            <span class="bi bi-plus-square"></span> Check
                        </button>
                    </div>
                </form>
                <div class="mt-3">
                    <?php 
                        if($_SERVER["REQUEST_METHOD"] === "POST"){
                            $number = $_POST["evenOrOdd"];
                            
                            switch (true) {
                                case ($number < 0 && $number % 2 == 0):
                                    $result = "$number is an even number.";
                                    break;
                                case ($number < 0 && $number % 2 != 0):
                                    $result = "$number is an odd number.";
                                    break;
                                case ($number >= 0 && $number % 2 == 0):
                                    $result = "$number is an even number.";
                                    break;
                                case ($number >= 0 && $number % 2 != 0):
                                    $result = "$number is an odd number.";
                                    break;
                                default:
                                    $result = "Invalid input.";
                            }

                        }
                    ?>
                    <p id="grade" class="fw-bold">
                        <?php
                            if (isset($result)) {
                                echo $result;
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