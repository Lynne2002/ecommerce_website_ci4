

<!DOCTYPE html>
<html>
<head>

	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/Registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="/Javascript/register.js"></script>
		<script src="/assets/js/jquery-3.6.0.min.js"></script>
    <style>
        .error{
            color:red;
            font-style: italic;
        }
        body{
    width: 100%;
    height:100%;
    background-size: cover;
    
}
    </style>
  
		      
</head>
<body background="/assets/Images/background.jpg">


	
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
    

		<div class="Registration">
    
			<h2>Shop Haven Registration</h2><br> 

            <form method="post" id="registration" action="/register">
			
			
            
            <label>First Name: </label>
            <br>
            <input type="text" name="first_name" id="name"placeholder="first name" value="<?= set_value('first_name')?>">
            <br><br>

            <label>Last Name: </label>
            <br>
            <input type="text" name="last_name" id="last_name"placeholder="last name" value="<?= set_value('last_name')?>">
            <br><br>

            <label>Email address: </label>
            <br>
            <input type="email" name="email" id="email"placeholder="Email address"value="<?= set_value('email') ?>">
            <br><br>

           
            
           <label>Gender:<label>
               
            <label class="radio">Male
                      <input type="radio" checked="checked" name="gender" id="gender" value="male" />
                      <span class="radiocheckmark"></span>
                    </label>
                    <label class="radio">Female
                      <input type="radio" name="gender" value="female" />
                      <span class="radiocheckmark"></span>
                    </label>
                <br><br>

          


            <label>Create password: </label>
            <br>
            <input type="password" name="password" id="password"placeholder="............................."value="">
            <br><br>
            <label>Confirm password: </label>
            <br>
            <input type="password" name="password_2" id="password_2"placeholder="............................."value="">
            
            
            <br><br>

            <?php if (isset($validation)):?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors()?>
            </div>
            </div>
            <?php endif;?>

            <button  type="submit" class="button" name="button">Submit</button>
            <br>
		Already a member? <a href="/">Sign in</a>
	<br><br><br><br>
			</form>
	
</table>
		</div>
        
        
	
</body>

    <script type="text/javascript">
    $(document).ready(function()){
        $('#button').click(function(e){
            e.preventDefault();
            $.ajax({
               
                method:"post",
                url:"http://localhost/Users",
                data:$('#registration').serialize(),
                dataType:"text",
                success: function(response){
                    $('#response').text(response);
                    $("#response").html("<div class='alert alert-info'>"+data+"</div>");
    
                }
        })
        
        })
    });
</script>
</html>
