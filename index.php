<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign in | Hotel Reservation System</title>
    <?php 
    require_once "template/header.php";
    require_once "support/config.php";

	if(isset($_SESSION[WEB])){
		switch($_SESSION[WEB]['role_type']){
			case "ADMIN":
			redirect('admin/index.php');
			break;
			case "MEMBER":
			redirect("client");
			break;
			default:
			unset($_SESSION[WEB]);
			break;
		}
    }
    RunAlert();
    ?>
    
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="index.php"><b>Hotel Reservation System</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="validate/user_validate.php" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="pass" placeholder="Password" required>
                        </div>
                    </div>
                    
                            <button class="btn btn-block bg-cyan waves-effect" type="submit">SIGN IN</button>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-12 align-center">
                            <a href="signup.php">Register Now!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <script src="plugins/node-waves/waves.js"></script>
    <script src="plugins/jquery-validation/jquery.validate.js"></script>
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>
</body>

</html>