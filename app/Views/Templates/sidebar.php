<aside class="main-sidebar sidebar-light-success elevation-4">
    <a class="brand-link text-center">
        <span class="brand-text font-weight-bold text-success">LP TECH</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!--INCIO -->
                <li class="nav-item">
                    <a href="<?= base_url('/') ?>" class="nav-link <?= (current_url() == base_url('/')) ? 'active' : '' ?>">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Início</p>
                    </a>
                </li>
                <!-- CLIENTES -->
                <li class="nav-item">
                    <a href="<?= base_url('clientes') ?>" class="nav-link <?= (strpos(current_url(), 'clientes') !== false) ? 'active' : '' ?>">
                        <i class="fas fa-user nav-icon"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <!-- FUNCIONARIOS -->
                <li class="nav-item">
                    <a href="<?= base_url('funcionarios') ?>" class="nav-link <?= (strpos(current_url(), 'funcionarios') !== false) ? 'active' : '' ?>">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Funcionários</p>
                    </a>
                </li>
                <!-- PRODUTOS -->
                <li class="nav-item">
                    <a href="<?= base_url('produtos') ?>" class="nav-link <?= (strpos(current_url(), 'produtos') !== false) ? 'active' : '' ?>">
                        <i class="fas fa-box nav-icon"></i>
                        <p>Produtos</p>
                    </a>
                </li>
                <!-- TROCAR SENHA -->
                <li class="nav-item">
                    <a href="<?= base_url('login/trocar_senha') ?>" class="nav-link <?= (strpos(current_url(), 'trocar_senha') !== false) ? 'active' : '' ?>">
                        <i class="fas fa-lock nav-icon"></i>
                        <p>Trocar Senha</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>