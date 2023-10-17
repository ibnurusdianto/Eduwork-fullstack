<!DOCTYPE html>
<html>
<head>
    <title>Cek Tahun Kabisat</title>
</head>
<body>
<h1>Cek Tahun Kabisat</h1>
<!--disini menggunakan method post,
sedangkan untuk action kosongkan karena saya ingin satu file-->
<form action="" method="post">
    Masukkan tahun: <input type="text" name="tahun">
    <input type="submit" value="Cek"> <br>
    <?php
    /**
     * pengecekan menggunakan teknik isset lalu $_$POST (apa yang kita input tahun)
     */
    if(isset($_POST['tahun'])){
        $tahun = $_POST['tahun'];

        /**
         * dibagian ini validasi sebuah numeric, jadi jika yang kita inputkan tahun nya
         * bukan berupa numeric maka akan ditolak.
         */
        if (!is_numeric($tahun)) {
            echo "Masukan bukan angka.";
            /**
             * jika bukan numeric maka akan berhenti atau ditolak
             */
            exit(); // break;
        }

        /**
         * rumus untuk tahun kabisat
         * Jika tahun % 4 = 0 (berarti dia adalah tahun kabisat)
         * DAN tahun % 100 != 0  (bukan tahun kabisat) atau terkecuali tahun % 400 = 0 maka dia adalah tahun kabisat
         */
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
            echo "$tahun adalah tahun kabisat.";
        } else {
            echo "$tahun bukan tahun kabisat.";
        }
    }
    else{
        echo "Tahun belum dimasukkan.";
    }
    ?>
</form>
</body>
</html>
