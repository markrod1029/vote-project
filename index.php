<?php
    session_start();
    if(isset($_SESSION['admin'])){
        header('location: admin/home.php');
    }

    if(isset($_SESSION['voter'])){
        header('location: home.php');
    }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page" style="background-color: #E1F5FE; display: flex; justify-content: center; align-items: center; height: 100vh;"> 
<div class="login-box" style="background-color: #FFF; color: #333; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 360px;">
    <div class="login-logo" style="margin-bottom: 20px;">
        <b style="color: #333; font-size: 24px;">Online Voting System</b>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg" style="color: #666; font-size: 16px; margin-bottom: 20px;">Sign in to start your voting session</p>

        <form action="login.php" method="POST">
            <div class="form-group has-feedback" style="margin-bottom: 20px;">
                <input type="text" class="form-control" name="voter" placeholder="Voter's ID" required style="padding: 10px; border-radius: 4px; border: 1px solid #CCC; width: 100%;">
                <span class="glyphicon glyphicon-user form-control-feedback" style="color: #AAA;"></span>
            </div>
            <div class="form-group has-feedback" style="margin-bottom: 20px;">
                <input type="password" class="form-control" name="password" placeholder="Password" required style="padding: 10px; border-radius: 4px; border: 1px solid #CCC; width: 100%;">
                <span class="glyphicon glyphicon-lock form-control-feedback" style="color: #AAA;"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #4682B4; color: #FFF; padding: 10px; border: none; border-radius: 4px; font-size: 16px;" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
                </div>
            </div>
        </form>
    </div>
    <?php
        if(isset($_SESSION['error'])){
            echo "
                <div class='callout callout-danger text-center mt20' style='color: #C00; margin-top: 20px;'>
                    <p>".$_SESSION['error']."</p> 
                </div>
            ";
            unset($_SESSION['error']);
        }
    ?>
</div>

<?php include 'includes/scripts.php' ?>
</body>
</html>
