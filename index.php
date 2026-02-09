<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
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
            background: #e9ecef;
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
                <input class="form-control" type="number" name="m1" required value="<?php echo $_POST['m1'] ?? ''; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Operasi</label>
                <select class="form-select" name="apa">
                    <option value="+" <?php echo (isset($_POST['apa']) && $_POST['apa'] == '+') ? 'selected' : ''; ?>> Tambah (+)</option>
                    <option value="-" <?php echo (isset($_POST['apa']) && $_POST['apa'] == '-') ? 'selected' : ''; ?>> Kurang (-)</option>
                    <option value="*" <?php echo (isset($_POST['apa']) && $_POST['apa'] == '*') ? 'selected' : ''; ?>> Kali (×)</option>
                    <option value="/" <?php echo (isset($_POST['apa']) && $_POST['apa'] == '/') ? 'selected' : ''; ?>> Bagi (÷)</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Angka Kedua</label>
                <input class="form-control" type="number" name="m2" required value="<?php echo $_POST['m2'] ?? ''; ?>">
            </div>

            <button class="btn btn-primary w-100 py-2" name="hasil">Hitung Sekarang</button>
        </form>

        <?php
        $adalah = "";
        if(isset($_POST['hasil'])){
            $pp = $_POST['m1'];
            $al = $_POST['apa'];
            $wp = $_POST['m2'];

            if($al == '+') { $adalah = $pp + $wp; }
            elseif($al == '-') { $adalah = $pp - $wp; }
            elseif($al == '*') { $adalah = $pp * $wp; }
            elseif($al == '/') {
                if($wp == 0) {
                    $adalah = "kocak";
                } else {
                    $adalah = $pp / $wp;
                }
            }
        }
        ?>

        <div class="hasil-box">
            <?php echo $adalah !== "" ? $adalah : "0"; ?>
        </div>
    </div>
</div>

</body>
</html>