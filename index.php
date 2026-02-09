<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-primary justify-content-center align-items-center vh-100 d-flex flex-column">


    <div class="card shadow-lg p-3 mb-5 bg-body rounded w-25 text-center mb-4" style="width: 22rem;">
        <div class="card-body bg-">
            <h3 class="card-title mb-4">Calculator</h3>
            <form action="" method="post">
                <div class="mb-3">
                    <input type="number" name="num1" class="form-control" placeholder="Angka pertama" required>
                </div>

                <div class="mb-3">
                    <select name="operation" class="form-select" required>
                        <option value="+">+</option>
                        <option value="-">−</option>
                        <option value="*">×</option>
                        <option value="/">÷</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="number" name="num2" class="form-control" placeholder="Angka kedua" required>
                </div>

                <button type="submit" name="hasil" class="btn btn-success w-100">
                    Hitung
                </button>
            </form>

            <div class="mt-4 p-3 border rounded bg-light text-start" style="min-height: 60px;">
                <?php
                if (isset($_POST['hasil'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operation = $_POST['operation'];

                    if ($operation == "+") {
                        $result = $num1 + $num2;
                        echo "Hasil: <strong>$result</strong>";
                    } elseif ($operation == "-") {
                        $result = $num1 - $num2;
                        echo "Hasil: <strong>$result</strong>";
                    } elseif ($operation == "*") {
                        $result = $num1 * $num2;
                        echo "Hasil: <strong>$result</strong>";
                    } elseif ($operation == "/") {
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Hasil: <strong>$result</strong>";
                        } else {
                            echo "<span class='text-danger'>Error: Tidak bisa dibagi nol</span>";
                        }
                    }
                } else {
                    echo "<span class='text-muted'>Hasil akan muncul di sini</span>";
                }
                ?>
            </div>
        </div>
    </div>


</body>

</html>