<nav class = "navbar navbar-default">
    <div class = "container-fluid">
        <!--A marca e a alternância são agrupadas para uma melhor exibição no celular -->
        <div class = "navbar-header">
        <button type = "button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="# bs-example-navbar-collapse-1" aria-extended="false">
            <span class = "sr-only"> Alternar navegação </span>
            <span class = "icon-bar"> </span>
            <span class = "icon-bar"> </span>
            <span class = "icon-bar"> </span>
        </button>
        <a class="navbar-brand" href="#">Marca</a>
        </div>
        <!--Colete os links de navegação, formulários e outros conteúdos para alternar-->
        <div class ="collapse navbar-collapse" id ="bs-example-navbar-collapse-1">
        <ul class ="nav navbar-nav">
            <li><a href="#">Home<span class ="sr-only">(atual)</span></a></li>
            <li><a href="#">Lançamentos</a></li>
            <li class ="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class = "caret"> </span> </a>
            <ul class="dropdown-menu">
                <li><a href="#">Decoração</a></li>
                <li><a href="#">Construção</a></li>
                <li><a href="#">Pintura</a></li>
                <li><a href="#">Vidraçaria</a></li>
                <li><a href="#">Marmoraria</a></li>
            </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Pesquisar">
            </div>
            <button type="submit" class="btn btn-default">Pesquisar</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Contato</a></li>

            <?php if(empty($_SESSION['ID'])) {?>
            <li><a href="logon.php"><span class="glyphicon glyphicon-log-in"> Logon</a></li>
            <?php }else{
            if($_SESSION['Status']==0){
                $consulta_usuario = $cn->query("select nm_usuario from db_usuario where cd_usuario= '$_SESSION[ID]'");
                $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
                ?>
                 <li><a href="#"><span class="glyphicon glyphicon-user"> <?php echo $exibe_usuario['nm_usuario'];?></a></li>
                 <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
                <?php } else{ ?>
                    <li><a href="adm.php"><button class="btn btn-sm btn-danger">Administrador</button></a></li>
                 <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
            <?php } }?>
        </ul>
        </div> <!--/.navbar-collapse-->
    </div> <!--/.container-fluid-->
    </nav>