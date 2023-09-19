<?php
  if(isset($_POST['register'])){
  	require("eksekusi.php");
  	registrasi();
  }else if (isset($_POST['login'])){
  	require("eksekusi.php");
  	login();
  }else if (isset($_POST['create_menu'])){
      require("eksekusi.php");
      createMenu();
    }else if (isset($_POST['update_menu'])){
      require("eksekusi.php");
      updateMenu();
  }else if (isset($_GET['aksi'])){
    if ($_GET['aksi']=="logout"){
    require("eksekusi.php");
    logout();
  }else if ($_GET['aksi']=="delete_menu"){
    require("eksekusi.php");
    deleteMenu();
  }
}else{
  	echo "Data Tidak Ada";
  }
?>