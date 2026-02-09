<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #acc047;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculator-card {
            width: 350px;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.1);
            border-radius: 15px;
            border: none;
        }
        .hasil-box {
            background: #14a72f;
            padding: 15px;
            border-radius: 8px;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
            color: #0d6efd;
            min-height: 60px;
        }
    </style>
</head>
<body>

<div class="card calculator-card">
    <div class="card-body p-4">
        <h4 class="text-center mb-4">Kalkulator PHP</h4>
        
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Angka Pertama</label>
                <input class="form-control" type="number" name="a1" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Operasi</label>
                <select class="form-select" name="op">
                    <option value="+"> Tambah (+)</option>
                    <option value="-"> Kurang (-)</option>
                    <option value="*"> Kali (×)</option>
                    <option value="/"> Bagi (÷)</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Angka Kedua</label>
                <input class="form-control" type="number" name="a2" required>
            </div>

            <button class="btn btn-primary w-100 py-2" name="hasil">Hitung Sekarang</button>
        </form>

        <?php
        $hsl = "";
        if(isset($_POST['hasil'])){
            $a1 = $_POST['a1'];
            $op = $_POST['op'];
            $a2 = $_POST['a2'];

            if($op == '+') { $hsl = $a1 + $a2; }
            elseif($op == '-') { $hsl = $a1 - $a2; }
            elseif($op == '*') { $hsl = $a1 * $a2; }
            elseif($op == '/') {
                if($a2 == 0) {
                    $hsl = "tidak bisa dibagi 0";
                } else {
                    $hsl = $a1 / $a2;
                }
            }
        }
        ?>

        <div class="hasil-box">
            <?php echo $hsl !== "" ? $hsl : "0"; ?>
        </div>
    </div>
</div>

</body>

</html>
