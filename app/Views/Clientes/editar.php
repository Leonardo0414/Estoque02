<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <?php
      $session = session();
      $alert = $session->get('alert');
      ?>

      <?php if (isset($alert)): ?>
        <?php if ($alert == 'success_update'): ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Cliente atualizado com sucesso!
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endif; ?>

      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Atualizar Cliente</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="/clientes" class="btn btn-success" style="margin-right: 15px">
              <i class="fas fa-arrow-left"></i> Voltar
            </a>
            <li class="breadcrumb-item"><a href="/inicio">Início</a></li>
            <li class="breadcrumb-item"><a href="/clientes">Clientes</a></li>
            <li class="breadcrumb-item active">Atualizar</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Dados do Cliente</h3>
            </div>
            <!--FORM-->
            <form action="/clientes/store" method="post">
              <div class="card-body">
                <div class="row">
               
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" class="form-control" name="nome" value="<?= $cliente['nome'] ?>" required>
                    </div>
                  </div>
                
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Data de Nascimento</label>
                      <input type="date" class="form-control" name="data_de_nascimento" value="<?= $cliente['data_de_nascimento'] ?>" required>
                    </div>
                  </div>
                  
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Telefone</label>
                      <input type="text" class="form-control" name="telefone" value="<?= $cliente['telefone'] ?>" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                
                  <div class="col-lg-8">
                    <div class="form-group">
                      <label>Endereço</label>
                      <input type="text" class="form-control" name="endereco" value="<?= $cliente['endereco'] ?>" required>
                    </div>
                  </div>
    
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Limite de Crédito</label>
                      <input type="number" step="0.01" class="form-control" name="limite_de_credito" value="<?= $cliente['limite_de_credito'] ?>" required>
                    </div>
                  </div>
                </div>

            <!--CAMPO OCULTO-->
                <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente'] ?>">
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-save"></i> Atualizar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>