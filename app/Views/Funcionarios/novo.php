
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Funcionários</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="/funcionarios" class="btn btn-success" style="margin-right: 15px"><i class="fas fa-arrow-left"></i> Voltar</a>
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/funcionarios">Funcionários</a></li>
            <li class="breadcrumb-item active">Novo</li>
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
              <h3 class="card-title">Dados do Funcionário</h3>
            </div>
     
       <!--FOMULARIO-->
            <form action="/funcionarios/store" method="post">
              <div class="card-body">
                <div class="row">
      
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" class="form-control" name="nome">
                    </div>
                  </div>
                
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Data de Nascimento</label>
                      <input type="date" class="form-control" name="data_de_nascimento">
                    </div>
                  </div>
           
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>RG</label>
                      <input type="text" class="form-control" name="rg">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>CPF</label>
                      <input type="text" class="form-control" name="cpf">
                    </div>
                  </div>
     
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Endereço</label>
                      <input type="text" class="form-control" name="endereco">
                    </div>
                  </div>
              
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Data de Contratação</label>
                      <input type="date" class="form-control" name="data_de_contratacao">
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