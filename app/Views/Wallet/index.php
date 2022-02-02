<?php
$session = session('user');
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Wallet System</title>
		<link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" href="/css/all.min.css">
			  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              
			
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>

            body{
    width: 100%;
    height:100%;
    background-size: cover;
    
}
.btn:hover {
    transform: scale(1.04, 1);
    background-color: darkblue;
    text-decoration: none;
}          

 p {
  display: inline-block;
  padding:20px;
}
.profile-details{
		float:right;
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
.profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
.profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
.profile-details i{
  font-size: 25px;
  color: #333;
}


.box{
    color:white;
    display: inline-block;
    position:fixed; 
    left:20%;
    align:center;
    background-color:black;
}
.vl {
  border-left: 1px solid white;
  height: 170px;
  position: absolute;
  margin-left: -3px;
  top: 0;
}
hr{
    width:10px;
}
table{
    background-color:white;
}
            </style>
		   
              <link rel="stylesheet" href="/css/all.min.css">
			  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
			  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body background="/assets/Images/background.jpg">
  
<h1 style="
text-align:center;
color:white;
"
>My Wallet</h1>
<div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
        <i class='bx bx-chevron-down' ></i>
		<a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
      <br><br><br>
<form method="post" action="<?=base_url('wallet-store')?>" name="ajax_form" id="ajax_form">
<div style="
float:right;

" class="icon">
<i class="fa fa-university" aria-hidden="true"></i>
</div>
<div class="box">
    <br>

   <b> <p>WALLET BALANCE:</b>

</br>
    $0.00
    </p>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <p class="vl"></p>  &nbsp;
 
<p>

    <input type="hidden" name="customer_id" value="<?=session()->get('id')?>">
<input style=" 
                                            width: 250px;
                                            text-align: center;
                                            height: 20px;
                                            outline: none;
                                            color: white;
                                            font-size: 20px;
                                            background: transparent;
                                            border: none;
                                            margin-bottom: 40px;
                                            border-bottom: 1px solid #fff;
                                            
                                            " type="text" class="form-control" id="usr" type="text" name="amount_available" id="add_balance" placeholder="Add balance" value="">
</p>
                                       
<p>    
                                            
         <button style="
          font-size: 16px;
    letter-spacing: 2px;
    font-weight: 400 !important;
    background-color: white;
    color: black;
    padding: 23px 50px;
    margin: auto;
    text-align: center;
    display: inline-block !important;
    text-decoration: none;
    border: 0px;
    width: max-content;
    cursor: pointer;
    transition: all 0.3s 0s ease-in-out;
         " type="submit" class="btn" name="">ADD MONEY TO WALLET</button>
         </p>


</div>
</form>




</body>
