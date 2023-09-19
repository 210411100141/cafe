<?php
	function registrasi(){
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$no=$_POST['no'];
		$tgl=$_POST['tgl'];
		$level=$_POST['level'];
		$jenkel=$_POST['jenkel'];
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		require("config.php");
		$save=mysqli_query($conn,"INSERT INTO user (id_user, username, password, nama, level, tanggal_lahir, alamat, jenis_kelamin, no_hp)
		VALUES('','$username','$password','$nama','$level','$tgl','$alamat','$jenkel','$no') ");
			if ($save) {
			echo "<script> alert ('Data Berhasil Disimpan');document.location='../index.php'</script>";
		}else{
			echo "<script> alert ('Data Gagal Disimpan, Coba Lagi');document.location='../index.php'</script>";
		}
	}

	function login(){
		$username=$_POST['username'];
		$encrypt_pass = md5($_POST['password']);
		require("config.php");
		$sql = mysqli_query($conn, "select * from user where username='$username' and password='$encrypt_pass'");
		$hasil=mysqli_num_rows($sql);
		if ($hasil > 0) {
			$data=mysqli_fetch_assoc($sql);
			if ($data ['level']=="admin")
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['level']=$level;
				header("location:../admin.php");
			}elseif ($data['level']=="kasir") {
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['level']=$level;
				header("location:../kasir.php");
			}
		}
		else{
			die("login gagal<a href=\"javascript:history.back()\">kembali</a>");
		}
	}

	function logout(){
		session_start();
		isset($_SESSION ['username']);
		session_destroy();
		header("location:../index.php");
	}

	function createMenu(){
		$nama=$_POST['namaMenu'];
		$harga=$_POST['hargaMenu'];
		$kategori=$_POST['kategori'];
		require("config.php");
		$save=mysqli_query($conn,"INSERT INTO menu (id_menu,nama_menu,harga,id_kategori)
		VALUES('','$nama','$harga','$kategori') ");
			if ($save) {
			echo "<script> alert ('Data Berhasil Disimpan');document.location='../menu/template_menu.php?aksi=view&id_kategori=$kategori'</script>";
		}else{
			echo "<script> alert ('Data Gagal Disimpan, Coba Lagi');document.location='../menu/template_menu.php?aksi=view&id_kategori=$kategori'</script>";
		}
	}

	function updateMenu(){
		$nama=$_POST['namaMenu'];
		$harga=$_POST['hargaMenu'];
		$id=$_POST['id_menu'];
		require("config.php");
		$update=mysqli_query($conn,"UPDATE menu SET nama_menu='$nama',harga='$harga' WHERE id_menu='$id'");
			if ($update){
			echo "<script>alert ('Data Berhasil Diupdate');document.location='../menu/template_menu.php?aksi=view'</script>";
			}else{
			echo "<script>alert ('Data Gagal Diupdate, Coba Lagi');document.location='../menu/template_menu.php?aksi=view'</script>";
			}
		}

		function deleteMenu(){
			$id=$_REQUEST['id_menu'];
			require ("config.php");
			$delete=mysqli_query($conn,"DELETE FROM menu WHERE id_menu='$id'");
			if($delete){
			echo "<script>alert ('Data Berhasil Dihapus');document.location='../menu/template_menu.php?aksi=view'</script>";
			}else{
			echo "<script>alert ('Data Gagal Dihapus');document.location='../menu/template_menu.php?aksi=view'</script>";
			}
		}