<?php
//LOGIN
// $session = session();
// $primeiro_nome = $session->get('primeiro_nome');

// if ($primeiro_nome == null && current_url() != base_url('login')) {
//     echo "<script>
//         window.location.href = '/login';
//     </script>";
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LP TECH | Sistema</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- FONT AWESOME VIA CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="<?= base_url('AdminLTE/dist/css/adminlte.min.css') ?>">
    
    <!--DATABLES-->
    <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
  <script src =<?= base_url('Chart/Chart.js') ?>></script>
</head>
   
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<!--IMPORTAÇÃO-->
<?= $this->include('Templates/navbar') ?>
<?= $this->include('Templates/sidebar') ?>
