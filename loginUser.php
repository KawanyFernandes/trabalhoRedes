<html>
    <head>
        <title>Fechadura</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <i class="far fa-hand-rock"></i>
                    <a class="navbar-brand" href="#">Fechadura</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container" style="margin-top: 100px">

            <h2>Login</h2>
            <form action="login.php" method="post">
                <table class="table">
                    <tr>
                        <td>Usuário:</td>
                        <td><input class="form-control" name="usuario"></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input class="form-control" type="password" name="senha"></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-primary">Login</button></td>
                    </tr>
                    <tr>
                        <td class="text-danger">
                            <?php if(isset($_GET['login'])&& $_GET['login'] == 0)
                                echo 'Usuario ou senha incorretos';
                            else {

                            }
                        ?></td>
                    </tr>
                </table>
            </form>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>