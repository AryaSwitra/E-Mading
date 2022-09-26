<?php


	$a=mysqli_connect("localhost","root","","web");

		function query($query){
		global $a;
		$result = mysqli_query($a, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data){
		global $a;

		// ambil data dalam tiap elemen di dalam form
		if (isset($data["submit"])) {

			$judul = htmlspecialchars($data["judul"]);
			$deskripsi = htmlspecialchars($data["deskripsi"]);
			$kontak = htmlspecialchars($data["kontak"]);
			$tanggal = htmlspecialchars($data["tanggal"]);
			// upload gambar
			$gambar = upload();
			if (!$gambar){
				return false;
			}

		}

		// query insert data

		$query = "INSERT INTO data VALUES ('', '$gambar', '$judul', '$deskripsi', '$kontak','$tanggal')";

		mysqli_query ($a, $query);


		return mysqli_affected_rows($a);

	}

		function upload(){

		$namaFile = $_FILES ['gambar']['name'];
		$ukuranFile = $_FILES ['gambar']['size'];
		$error = $_FILES ['gambar']['error'];
		$tempName = $_FILES ['gambar']['tmp_name'];

		// cek apakah tidak ada gambar yg di upload
		if ($error === 4) {
			echo "<script>
					alert('pilih lah gambar terlebih dahulu !');
				  </script>";
			return false;
		}
		// cek apakah yang di upload adalah "gambar" bukan sebuah script dll 
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png']; // ketentuan ektensi

		/* fungsi dari explode untuk memecah string menjadi array menggunakan delimiter jika dalam satu string
		   bertemu suatu karakter misalnya titik (.) dari gambar.jpg maka akan di pecah menjadi ['gambar' 'jpg'] 
		   gambar.jpg = ['gambar' 'jpg']*/
		$ekstensiGambar = explode('.', $namaFile);
		// fungsi end berguna untuk mengambil jenis dari ekstensi gambarnya
		// strtolower merupakan funsi untuk memaksa sebuah string menjadi huruf kecil misalnya gambar.JPG menjadi gambar.jpg
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		// mengecek ektensi gambar yang di upload sdh sesuai ketentuan ekstensi atau belum
		// fungsi in_array adalah untuk mengecek sebuah string di dalam array
		if (!in_array($ekstensiGambar, $ekstensiGambarValid) ) {
			echo "<script>
					alert('yang anda upload bukan file gambar !');
				  </script>";
			return false;
		}
		if ($ukuranFile>1000000) {
				echo "<script>
					alert('ukuran gambar teralu besar !');
				  </script>";
			return false;		
		}
		move_uploaded_file($tempName,'img/'. $namaFile);
		return $namaFile;
	

	}

		function hapus($id){
		global $a;

		mysqli_query ($a, "DELETE FROM data WHERE id = $id");


		return mysqli_affected_rows($a);
	}

		function ubah($data){
		global $a;
		// fungsi htmlspecialchars untuk menghidari user menuliskan inputan yg sensitiv(hacker)
		if (isset($data["submit"])) {
			$id = ($data["id"]);
			$judul = htmlspecialchars($data["judul"]);
			$deskripsi = htmlspecialchars($data["deskripsi"]);
			$kontak = htmlspecialchars($data["kontak"]);
			$tanggal = htmlspecialchars($data["tanggal"]);
			$gambarLama = htmlspecialchars($data["gambarLama"]);

			// cek apakah user memilih gambar baru atau tdk
			if ($_FILES['gambar']['error'] === 4) {
				$gambar = $gambarLama;
			}
			else{
				$gambar = upload();
			}
		}

		// query insert data

		$query = "UPDATE data SET judul = '$judul', deskripsi = '$deskripsi', kontak = '$kontak',gambar = '$gambar', 
		tanggal = '$tanggal'
					WHERE id = $id";

		mysqli_query ($a, $query);


		return mysqli_affected_rows($a);
	}

		function cari($keyword){

		$query = "SELECT * FROM data WHERE judul LIKE '%$keyword%' OR kontak LIKE '%$keyword%'";

		return query($query);
	}
		function cari2($keyword){

		$query = "SELECT * FROM user WHERE username LIKE '%$keyword%'";

		return query($query);
	}

		function registrasi($data){
			global $a;
			// fungsi strtolower : memaksa semua huruf menjadi kecil
			// fungsi stripslashes : membuat user tidak bisa menambahkan karakter slash
			// fungsi mysqli_real_escape_string : agar ketika menginput password karakter kutip akan terbaca
			$username = strtolower(stripslashes($data["username"]));
			$password = mysqli_real_escape_string($a, $data["password"]);
			$password2 = mysqli_real_escape_string($a, $data["password2"]);

			// cek ketersedian username sdh di gunakan atau belum
			$result = mysqli_query($a, "SELECT username FROM user WHERE username = '$username'");

			if (mysqli_fetch_assoc($result)) {
				echo "<script>
                        alert('username sudah terdaftar!');
				      </script>";
				return false;
			}

			// cek konfirmasi password
			// maksud dri !== : tidak sama dengan
			if ($password !== $password2) {
				echo "<script>
						alert('konfirmasi password tidak sesuai!');
				      </script>";
				return false;
			}
			// teknik enkripsi password
			$password = password_hash($password, PASSWORD_DEFAULT);
			// $password = md5($password);
			// var_dump($password);
			mysqli_query($a, "INSERT INTO user VALUES('','$username','$password')");

			// return mysqli_affected_rows : berfungsi untuk menghasilkan nilai 1 jika benar dan -1 jika salah
			return mysqli_affected_rows($a);
		}
?>