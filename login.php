<?php
session_start();
if(isset($_SESSION['gagal'])){
	if($_SESSION['gagal']>=3){
		echo '<h1>ANDA SEDANG DIBLOKIR</h1>';
		exit();
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
            <style>
                #grad {
                        background: linear-gradient(to right, black , brown);
                      }
</style>
		<meta charset="UTF-8">
		<title>LOGIN ADMINISTRATOR</title>
                <img src="Assets/IMAGES/Filosofi Kopi Jogja (2).jpg" alt="" width="850" height="570">
		<link rel="stylesheet" href="Assets/CSS/bootstrap.css">
		<link rel="stylesheet" href="Assets/CSS/floating-labels.css">
                <script>
                    window.setTimeout(function(){
                       $(".alert").fadeTo(500,0) .slideUp(500,function (){
                            $(this).remove();
                        });
                    },3000);
                    function showModalku(){
                        $(document).ready(function(){
                            $('#Modalku').modal('show')
                      });
                        });
                    }
                </script>
	</head>
        <body style="background-color:black">
		<form class="form-signin" action="masuk.php">
			<div class="text-center mb-">
                            <img width="300" src="Assets/IMAGES/login.png">
                            
                           
                            
                            <h2><b>LOGIN USER</b></h2>
			</div>
                    <?php
                            session_start();
                            if(isset($_SESSION['gagal'])){
                            if($_SESSION['gagal']>=3){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" >
                                Anda Gagal Login Ke-'.$_SESSION["Gagal"].'..
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                             </button>
                        </div>';
                            }
                            }
                            ?>
                    
                        </button>
                    </div>
			<div class="form-label-group">
				<input name="inEmail" class="form-control" type="email" id="inEmail"
					   placeholder="Email Address" autofocus="yes" autocomplete="no"
					   required="yes">
					   <label for="inEmail">Email Address</label>
			</div>
			
			<div class="form-label-group">
				<input name="inPass" onkeyup="Hello()" class="form-control" type="password"
					   id="inPass" placeholder="Passoword" required="yes">
				<label for="inPass">Password</label>
			</div>
                    
                        </div>
                        <div class="col-75">
                            <select id="country" name="country">
                                <option value="australia">Indonesia</option>
                                <option value="canada">Inggris</option>
                                <option value="usa">Jepang</option>
                            </select>
			
			<div class="checkbox mb-3">
				<input type="checkbox"> Remember Me ?
			</div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block" onclick="clicked();"> Sign in</button>
                                        
		</form>
            <script type="text/javascript" src="Assets/JS/login.js"></script>
	</body>
</html>

