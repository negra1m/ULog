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
              <h3 class="login">Bem vindo ao ULog!</h3>
              <h3 class="login">Não possui conta?<a href="cadastro.php"> Inscreva-se já!</a></h3>
                </div>
            <div class="col-md-4 col-md-offset-4">                
    				<div class="panel panel-default"> 
                    <div class="panel-body">
                        <form method="post" action="ope.php" id="formlogin" name="formlogin">
							<fieldset id="fie">
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="E-mail" name="login" id="login" type="text" autofocus/>
	                                </div>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="Password" name="senha" id="senha" type="password"/>
	                                </div>
	                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Entrar"/>
                                  
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
<footer class="footer">Powered by <a target="_blank" href="http://www.groupe-casino.fr/en/activities/latin-america-2">GreenYellow - BR</a><div class="footer signature">Developed by Vinicius Negrão</div></footer>
</html>
