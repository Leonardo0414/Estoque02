<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Visualizar Funcionário</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="/funcionarios" class="btn btn-success" style="margin-right: 15px"><i class="fas fa-arrow-left"></i> Voltar</a>
            <li class="breadcrumb-item"><a href="/inicio">Início</a></li>
            <li class="breadcrumb-item"><a href="/funcionarios">Funcionários</a></li>
            <li class="breadcrumb-item active">Visualizar</li>
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
              <h3 class="card-title">Dados Pessoais</h3>
            </div>
<!--FOMULARIO DESABILITADO-->
            <form>
              <div class="card-body">
                <div class="row">
    
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" class="form-control" value="<?= $funcionario['nome'] ?>" readonly>
                    </div>
                  </div>
             
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Data de Nascimento</label>
                      <input type="date" class="form-control" value="<?= $funcionario['data_de_nascimento'] ?>" disabled>
                    </div>
                  </div>
          
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Telefone</label>
                      <input type="text" class="form-control" value="<?= $funcionario['telefone'] ?>" disabled>
                    </div>
                  </div>
                </div>

                <div class="row">
  
                  <div class="col-lg-8">
                    <div class="form-group">
                      <label>Endereço</label>
                      <input type="text" class="form-control" value="<?= $funcionario['endereco'] ?>" disabled>
                    </div>
                  </div>
   
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Data de Contratação</label>
                      <input type="text" class="form-control" value="<?= $funcionario['data_de_contratacao'] ?>" disabled>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
