<?php 

require 'functions.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
	echo "<script> 
      alert('data berhasil dihapus');
       </script>";
       header("Location: crud_product.php");

} else {
	echo "<script> 
    alert('data gagal dihapus');
    document.location.href = crud_product.php; 
    </script>";
}

?>