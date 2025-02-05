<?php
  $session = session();
  $alert = $session->get('alert');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | LP Tech</title>
  <!--IMPORTS-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/fontawesome-free/css/all.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('AdminLTE/dist/css/adminlte.min.css') ?>">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <p class="h1">
        LP Tech
</p>
    </div>
    <div class="card-body">
      <?php if (isset($alert)): ?>
        <?php if ($alert == "error_login"): ?>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <i class="fas fa-exclamation-circle"></i> Usuário ou senha incorretos!
          </div>
        <?php endif; ?>
      <?php endif; ?>

      <p class="login-box-msg">Entre com seu usuário e senha</p>
          <!--FORMULARIO-->
        <form action="<?= base_url('login/autenticar') ?>" method="post" autocomplete="off">
        <div class="input-group mb-3">
          <input type="text" class="form-control" 
                 name="usuario" 
                 placeholder="Usuário" 
                 required 
                 autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" 
                 name="senha" 
                 placeholder="Senha" 
                 required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">
              <i class="fas fa-sign-in-alt mr-2"></i> Entrar
            </button>
          </div>
        </div>
      </form>

      <p class="mt-3 mb-1 text-center">
        <a href="#">Esqueci minha senha</a>
      </p>
    </div>
  </div>
</div>

<!-- JQUERY E BOOTSTRAT -->
<script src="<?= base_url('AdminLTE/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?= base_url('AdminLTE/dist/js/adminlte.min.js') ?>"></script>

</body>
</html>