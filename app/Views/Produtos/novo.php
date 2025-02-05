<!-- NOVO -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Novo Produto</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="/produtos" class="btn btn-success" style="margin-right: 15px"><i class="fas fa-arrow-left"></i> Voltar</a>
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
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
              <h3 class="card-title">Dados do Produto</h3>
            </div>
        <!--FORMULARIO DE CADASTRO-->
            <form action="/produtos/store" method="post">
              <div class="card-body">
                <div class="row">
           
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" class="form-control" name="nome">
                    </div>
                  </div>
              
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Descrição</label>
                      <input type="text" class="form-control" name="descricao">
                    </div>
                  </div>
                </div>

                <div class="row">
          
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Quantidade</label>
                      <input type="number" class="form-control" name="quantidade">
                    </div>
                  </div>
                  
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Quantidade Mínima</label>
                      <input type="number" class="form-control" name="quantidade_minima">
                    </div>
                  </div>
               
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Valor de Compra</label>
                      <input type="text" class="form-control" name="valor_de_compra">
                    </div>
                  </div>
               
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Valor de Venda</label>
                      <input type="text" class="form-control" name="valor_de_venda">
                    </div>
                  </div>
                </div>

                <div class="row">
            
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Margem de Lucro (%)</label>
                      <input type="text" class="form-control" name="margem_de_lucro">
                    </div>
                  </div>
               
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Validade</label>
                      <input type="date" class="form-control" name="validade">
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
