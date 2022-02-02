

<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
		<script src="https://maxcdn.bootsrapcdn.com/bootstrap/3.3.7/js/bootsrap.min.js"></script>
		<script src="/Javascript/register.js"></script>
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
	<style>
         body{
    width: 100%;
    height:100%;
    background-size: cover;
    
}
        .error{
            color:red;
            font-style: italic;
        }
       
        .logo{
	position: fixed;
	float: left;
	margin-top: -190px;
}
        </style>

    <title>Shop Haven</title>

    
</head>

    
<body style="padding-top: 30vh;
           
           background-size: cover;
           background-position: center;
   font-family: 'Raleway', cursive;" background="/assets/Images/background.jpg">



<div class="logo">
					<img src="/assets/Images/logo.png">
				</div>

	
	<?php if (session()->get('success')):?>
	<div class="alert alert-success" role="alert">
	<?= session()->get('success')?>
	<?php endif?>

	</div>
	<div class="website">
                    <h2 id="response"></h2>
   </div>
	

	<div class="form">
		
		<img src="/assets/Images/avatar.png" class="image">
	
	<h1>Login</h1><br>


	<?php if (isset($validation)):?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors()?>
            </div>
            </div>
            <?php endif;?>



		<form class="" id="registration" method="POST" action="/">
			
          
			<label>Email Address: </label>
				<br>
				<input type="text" name="email" id="email" placeholder="Email Address" value="<?= set_value('email')?>">
				<br><br>

			<label>password: </label>
				<br>
				<input type="password" name="password" id="password"placeholder=".............................">

				<br><br>

                <input type="hidden" name="role" id="role" value="<?= set_value('role') ?>">
				

		<button type="submit" class="btn" name="login_btn">Login</button>
		<br><br>

		<a href="#">Forgot Password? Click here to reset</a><br>
		<p>
			Not yet a member? <a href="/register">Sign up</a>
		</p>
	</form>
	
		</div>
		
</body>
</html>
<script type="text/javascript">
    $(document).ready(function()){
        $('#login_btn').click(function(e){
            e.preventDefault();
            $.ajax({
               
                method:"post",
                url:"http://localhost/Users",
                data:$('#registration').serialize(),
                dataType:"text",
                success: function(response){
                    $('#response').text(response);
                    $("#response").html("<div class='alert alert-info'"+data+"/div");
    
                }
        })
        
        })
    });
</script>

