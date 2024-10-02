<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
            break;
        default:
            $result = "Invalid operation";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .calculator {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        .display {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            text-align: right;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        button {
            width: 100%;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="calculator">
            <h2 class="text-center mb-4">Professional Calculator</h2>
            <div class="display">
                <span><?php echo $result; ?></span>
            </div>

            <form method="POST" action="">
                <div class="mb-3">
                    <label for="num1" class="form-label">Number 1:</label>
                    <input type="number" name="num1" id="num1" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="num2" class="form-label">Number 2:</label>
                    <input type="number" name="num2" id="num2" class="form-control" required>
                </div>

                <div class="row">
                    <div class="col-6">
                        <button type="submit" name="operation" value="add" class="btn btn-primary">+</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" name="operation" value="subtract" class="btn btn-secondary">−</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" name="operation" value="multiply" class="btn btn-success">×</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" name="operation" value="divide" class="btn btn-danger">÷</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
