<?php 
    $user = "Administrador";
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Olá, <?php echo $user ?> </a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="lib/logout.php?logout=true"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.php"><i class="fa fa-home fa-fw"></i> Inicio</a>
                </li>
				<li>
                    <a href="#"><i class="fa fa-file"></i> Cotratos <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
							<a href="contrato.php"><i class="fa fa-plus fa-fw"></i>Gerar Contrato</a>
						</li>
						
                    </ul>
                </li>
			
            </ul>
        </div>
    </div>
</nav>
