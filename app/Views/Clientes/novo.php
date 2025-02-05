<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Clientes</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="/clientes" class="btn btn-success" style="margin-right: 15px"><i class="fas fa-arrow-left"></i> Voltar</a>
            <li class="breadcrumb-item"><a href="/inicio">Início</a></li>
            <li class="breadcrumb-item"><a href="/clientes">Clientes</a></li>
            <li class="breadcrumb-item active">Novo</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Dados do Cliente</h3>
            </div>
            <!--FORMULARIO DOS CLIENTES-->
            <form action="/clientes/store" method="post">
              <div class="card-body">
                <div class="row">
       
                
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" class="form-control" name="nome" required>
                    </div>
                  </div>
                  
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Data de Nascimento</label>
                      <input type="date" class="form-control" name="data_de_nascimento" required>
                    </div>
                  </div>
      
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Telefone</label>
                      <input type="text" class="form-control" name="telefone" required>
                    </div>
                  </div>
                </div>

                <div class="row">
             
                  <div class="col-lg-8">
                    <div class="form-group">
                      <label>Endereço</label>
                      <input type="text" class="form-control" name="endereco" required>
                    </div>
                  </div>
                
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Limite de Crédito</label>
                      <input type="number" step="0.01" class="form-control" name="limite_de_credito" required>
                    </div>
                  </div>
                </div>
              </div>
          

              <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>