<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Hewan Qurban</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pendaftaran Qurban Masjid Area Semarang</h1>
    </header>
    <div class="container">
        <form action="submit.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Nomor HP:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="address">Alamat Rumah:</label>
            <input type="text" id="address" name="address" required>

            <label for="animal">Pilih Hewan Qurban:</label>
            <select id="animal" name="animal" required>
                <option value="Sapi">Sapi</option>
                <option value="Kambing">Kambing</option>
                <option value="Domba">Domba</option>
            </select>

            <label for="mosque">Pilih Tempat Qurban:</label>
            <select id="mosque" name="mosque" required>
                <option value="Masjid Muhajirin">Masjid Muhajirin,Kec.Banyumanik</option>
                <option value="Masjid Baiturrahman">Masjid Baiturrahman,Kec.Semarang Tengah</option>
                <option value="Masjid Al-Ijtihhad">Masjid Al-Ijtihad,Kec.Candisari</option>
                <option value="Masjid Agung Jawa Tengah">Masjid Agung Jawa Tengah,Kec.Gayamsari</option>
                <option value="Masjid Al-Huda">Masjid Al-Huda,Kec.Gajahmungkur</option>
                <option value="Masjid Al-Falah">Masjid Al-Falah,Kec.Genuk</option>
                <option value="Masjid Baitul Muttaqin">Masjid Baitul Muttaqin,Kec.Gunungpati</option>
                <option value="Masjid Ulil Albab">Masjid Ulil Albab,Kec.Mijen</option>
                <option value="Masjid Al-Iman">Masjid Al-Iman,Kec.Ngaliyan</option>
                <option value="Masjid Al-Amien">Masjid Al-Amien,Kec.Pedurungan</option>
                <option value="Masjid Muawanah">Masjid Muawanah,Kec.Semarang Selatan</option>
                <option value="Masjid Baitul Atiq">Masjid Baitul Atiq,Kec.Semarang Barat</option>
                <option value="Masjid Al-Jannah">Masjid Al-Jannah,Kec.Semarang Timur</option>
                <option value="Masjid Az-Zahra">Masjid Az-Zahra,Kec.Semarang Utara</option>
                <option value="Masjid Kampus Undip">Masjid Kampus Undip,Kec.Tembalang</option>
                <option value="Masjid Baitussalam">Masjid Baitussalam,Kec.Tugu</option>
            </select>

            <button type="submit">Daftar</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Pendaftaran Hewan Qurban</p>
    </footer>
</body>
</html>
