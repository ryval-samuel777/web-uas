<?php 

$conn = mysqli_connect("localhost", "root", "", "my_anime");

function tambah($data){

	global $conn;



    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $toko = htmlspecialchars($data['toko']);


    if ($nama == '' && $harga == '' && $gambar == '' && $deskripsi == '' &&  $toko == '') {
    	return 0;
    }

    $query = "INSERT INTO product VALUES(0, '$nama', '$harga', '$gambar', '$deskripsi', '$toko')";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);


 
}


function query($query){

	global $conn;
	$result = mysqli_query($conn, $query);
	$rows=[];

	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;

	}

	return $rows;
}


function tambah2($data){

	global $conn;



    $nama = htmlspecialchars($data["nama"]);
    

    if ($nama == '' ) {
    	return 0;
    }

    $query = "INSERT INTO listAnime VALUES(0, '$nama')";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);


 
}

function queryListAnime($query){

	global $conn;
	$result = mysqli_query($conn, $query);
	$rows=[];

	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;

	}

	return $rows;
}




function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES( 0, '$username', '$password')");

	return mysqli_affected_rows($conn);

}

?>