<?php
include 'Registration.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $registration = new Registration(
            $_POST['name'],
            $_POST['phone'],
            $_POST['animal'],
            $_POST['mosque'],
            $_POST['address']
        );

        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Pendaftaran Berhasil</title>
            <link rel='stylesheet' href='style2.css'>
        </head>
        <body>
            <header>
                <h1>Pendaftaran Berhasil</h1>
            </header>
            <div class='container'>
                <h2>Terima Kasih, " . $registration->getName() . "!</h2>
                <p>Anda telah berhasil mendaftar qurban 1445 Hijriah.Semoga Berkah dan Bermanfaat.Aminnn...</p>
                " . $registration->displayDetails() . "
            </div>
            <footer>
                <p>&copy; 2024 Pendaftaran Qurban</p>
            </footer>
        </body>
        </html>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Eror, Silahkan Ulang Kembali.";
}
?>
