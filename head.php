<?php
session_start();

require_once('koneksi.php');

// Periksa apakah variabel sesi SESS_MEMBER_ID ada atau tidak
if (!isset($_SESSION['id_admin']) || (trim($_SESSION['id_admin']) == '')) { ?>
  <script>
    window.location = "index.html";
  </script>
<?php
}

$session_id = $_SESSION['id_admin'];

if ($_SESSION['level'] == 'pegawai') {
  $user_query = mysqli_query(
    $koneksi,
    "SELECT * FROM t_admin 
    INNER JOIN t_pegawai ON t_admin.id_pg=t_pegawai.id_pg 
    WHERE id_admin = '$session_id'"
  )
    or die(mysqli_error($koneksi));

  $user_row = mysqli_fetch_array($user_query);
} else {
  $user_query = mysqli_query(
    $koneksi,
    "SELECT * FROM t_admin 
    WHERE id_admin = '$session_id'"
  )
    or die(mysqli_error($koneksi));

  $user_row = mysqli_fetch_array($user_query);
}

$_SESSION['message'] = "Hallo";
$_SESSION['msg_type'] = "berhasil";
?>

<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

========================================================= -->

<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>BKAD KAB.TAPIN</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/img/logo/tapin.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../assets/vendor/simple-datatables/style.css">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/fontawesome-free/css/all.min.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/loader.css" />

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

<body>

  <!-- Preloader Area Start -->
  <div id="preloader">
    <div class="loader"></div>
  </div>
  <!-- Preloader Area End -->

  <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Funsplash.com%2Fs%2Fphotos%2Fimage&psig=AOvVaw1o3NdgStzUxGw8uH1G-vsw&ust=1691331965915000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIC8rtjcxYADFQAAAAAdAAAAABAE" alt="">