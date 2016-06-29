<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULog - Green Yellow</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet"/>
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet"/>
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet"/>

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
              <h3 class="login">Bem vindo!</h3>
              <h3 class="login">Registre-se abaixo ou faça <a href="index.php">Login </a>agora!</h3>
                </div>
            <div class="col-md-4 col-md-offset-4">                
    				<div class="panel panel-default"> 
                    <div class="panel-body">
                        <form method="post" action="cadastroinsert.php">
              							<fieldset id="fie">

                              <div class="form-group">
                                  <input type="text" required="required" class="form-control" name="prinome" pattern="[A-z\s]+$" placeholder="Primeiro Nome" id="prinome"/>
                              </div>
                               <div class="form-group">
                                  <input type="text" required="required" class="form-control" name="ultnome" pattern="[A-z\s]+$" placeholder="Sobrenome" id="ultnome"/>
                              </div>
                              <div class="form-group">
                                  <input type="email" required="required" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" id="email"/>
                              </div>
                              <div class="form-group">
                                  <input type="email" required="required" class="form-control" name="confirmaemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Confirmar Email" id="confirmaemail"/>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Senha" name="senha" id="senha" type="password"/>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Confirme a Senha" name="confirmasenha" id="confirmasenha" type="password"/>
                              </div>
                              <input class="btn btn-lg btn-success btn-block" name="submit" type="submit" value="Registrar"/>
                            </fieldset>
                        </form>
                        
                    </div>
              
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
</body>
<footer class="footer">Powered by <a href="http://www.groupe-casino.fr/en/activities/latin-america-2">GreenYellow - BR</a><div class="footer signature">Developed by Vinicius Negrão</div></footer>
</html>
