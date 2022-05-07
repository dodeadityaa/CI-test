<?php
$dataa = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();
?>
<!-- Navbar -->
<nav class="navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                </li>
            </ul>

            <div class="nav navbar-nav navbar-right" id="idkanan">
                <ul>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre><?= $dataa['name']; ?><span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <a class="nav-link" href="<?= base_url('dashboard') ?>"> Dashboard</a>
                            <a class="dropdown-item" href="<?= base_url('login/logout') ?>">
                                Logout
                            </a>

                            <form id="logout-form" action="" method="POST" style="display: none;">
                            </form>
                    </li>
                </ul>
                </li>
    </ul>
    </div>

    </div>

    </ul>
</nav>
<!-- /.navbar -->