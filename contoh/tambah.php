<?php
include 'koneksi.php';
require_once('../src/autoload.php');

use Faker\Factory;

$faker = Factory::create('id_ID');
for ($i = 1; $i <= 100; $i++) {
	// $nama = $faker->name;
	// $alamat = $faker->address;
	// $umur = $faker->numberBetween(25, 40);
	// mysqli_query($koneksi, "INSERT INTO pegawai (pegawai_id,pegawai_nama,pegawai_umur,pegawai_alamat) VALUES(NULL,'$nama','$umur','$alamat')");
	// $firstname = $faker->firstName();
	// $lastname = $faker->lastName();
	// $tanggal = $faker->date($format = 'Y-m-d', $max = '-15 years');
	// $negara = $faker->country();
	// $idHotel = $faker->numberBetween(1, 5);
	// $rating = $faker->numberBetween(1, 5);
	// $komentar = $faker->randomElement($array = array('Very Good', 'Not Recommended', 'not bad', 'good', 'love this hotel', 'good service', 'mantap abis', 'arigatou', 'so badd', 'ok', null));
	// mysqli_query($koneksi, "INSERT INTO partisipan (`id-partisipan`,`nama-depan`,`nama-belakang`,`tanggal-lahir`,`kewarganegaraan`,`id-hotel`,`rating-hotel`, `komentar-hotel`) VALUES(NULL,'$firstname','$lastname','$tanggal','$negara', '$idHotel','$rating', '$komentar')");

	// $idA = $faker->numberBetween(1, 10000);
	// $idO = $faker->numberBetween(1, 5);
	// mysqli_query($koneksi, "INSERT INTO atlet (`id-atlet`,`id-olahraga`) VALUES('$idA', '$idO')");

	$idA = $faker->text($maxNbChars = 10);
	$idO = $faker->numberBetween(2, 5);
	mysqli_query($koneksi, "INSERT INTO tim (`id-tim`, `nama-tim`,`jumlah-anggota-tim`) VALUES(NULL, '$idA', '$idO')");

	// $hotel = $faker->text($maxNbChars = 10);
	// $alamat = $faker->address;
	// $kapasitas = $faker->numberBetween(100, 500);
	// mysqli_query($koneksi, "INSERT INTO hotel (`id-hotel`,`nama-hotel`,`alamat`, `kapasitas-hotel`) VALUES(NULL,'$hotel', '$alamat', '$kapasitas')");

	// $tanggal = $faker->date($format = 'Y-m-d', $max = 'now');
	// $kapasi = $faker->numberBetween(1, 5);
	// mysqli_query($koneksi, "INSERT INTO pertandingan (`id-pertandingan`,`tanggal`,`id-stadion`) VALUES(NULL, '$tanggal', '$kapasi')");
}
header("location:index.php");
