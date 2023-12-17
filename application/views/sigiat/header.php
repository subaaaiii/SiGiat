<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/custom.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
</head>
<style>
  .navbar {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background-color: #fff; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    height: 80px; 
  }


  body {
    padding-top: 80px; 
  }

  @media (max-width: 768px) {
    .navbar {
      position: sticky;
      position: -webkit-sticky;
      top: 0;
      background-color: #fff; /* Atur warna latar belakang navbar sesuai keinginan */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: Tambahkan shadow jika diinginkan */
    }

    body {
      padding-top: 56px; /* Sesuaikan dengan tinggi navbar Anda di tampilan ponsel */
    }
  }
</style>
<body id="page-top">
