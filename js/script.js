// console.log('ok');

// ambil element yang di butuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('isicontainer');

// tombolCari.addEventListener('click', function() {
// 	alert('berhasil!!');
// });


// tambahkan event ketikan keyword di tulis
keyword.addEventListener('keyup', function(){

	// buat object ajax
	var xhr = new XMLHttpRequest();

	// cek kesiapan ajax 
	xhr.onreadystatechange = function(){
		if (xhr.readyState == 4 && xhr.status == 200) {
			// console.log(xhr.responseText); //mengambil isi data ajax/coba.txt

			isicontainer.innerHTML = xhr.responseText; //mengambil isi folder ajax/mahasiswa.php
		}
	}

	// eksekusi ajax
	xhr.open('GET', 'ajax/data.php?keyword=' + keyword.value, true); //membuat koneksi ajax
	xhr.send(); // untuk menjalankan ajax
});