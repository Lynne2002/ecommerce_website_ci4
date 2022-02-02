<!DOCTYPE html>
<?php
$session = session('user');
 $s=0;
 $items=array_values(session('cart'));
foreach($items as $item){
                 $s += $item['unit_price'] * $item['quantity'];
                
        }
    
 

 ?>
<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Comic+Neue&family=Playfair+Display:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

body{
  background-image: linear-gradient(to right, #eac1ff, #dfc9ff, #d7d0ff, #d1d6ff, #cedbff);
}
.wrapper{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin-left: auto;
  margin-right: auto;
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
.content h1{
  font-family: 'Playfair Display', serif;
}
.main{
  background-color: white;
  border: 2px solid #6200EA;
 
  width: 450px;
  height: 350px;
  box-shadow: 0px 8px 60px -10px white;
  border-radius: 10px;
  padding:70px;
  padding-top:10px;
}
.content{
  padding-top:10px;
  padding-left:140px;
  font-family: 'Montserrat Medium';
}
/*inpuuuut*/
input[type=name] {
  background-color: white;
  background-image: url('https://image.flaticon.com/icons/svg/2089/2089773.svg');
  background-position:5px 5px;
  background-size:9%;
  background-repeat: no-repeat;
  padding-left: 40px;
}
input[type=text] {

  background-color: white;
  background-image: url('https://image.flaticon.com/icons/svg/633/633611.svg');
  background-position:5px 5px;
  background-size:9%;
  background-repeat: no-repeat;
  padding-left: 40px;
}
input[type=month] {
  width :66%;
  background-color: white;
  background-image: url('https://image.flaticon.com/icons/svg/2693/2693507.svg');
  background-position:6px 5px;
  background-size:14%;
  background-repeat: no-repeat;
  padding-left: 40px;
  padding-bottom:13px;
  font-family: 'Montserrat Medium';
}
input[type=user] {
  width :32.5%;
  background-color: white;
  background-image: url('https://cdn1.iconfinder.com/data/icons/glyph-card-payment/32/credit_card_CVV_CVC_code_number-512.png');
  background-position:5px 5px;
  background-size:31%;
  background-repeat: no-repeat;
  padding-left: 42px;
}

input{
  width:100%;
  padding: 15px 10px;
  margin: 3px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #96a4e7;
}
.amount{
  float:right;
  right:0;
}
button{
  width:100%;
  padding: 10px 20px;
  margin: 3px 0;
  background-color: #96a4e7; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor:pointer;
}
/*credit card*/
.card{
  background-image: linear-gradient(to bottom, #96a4e7, #a7a6ee, #baa7f3, #cda8f7, #e1a9f9);
  position:fixed;
  right:70%;
  top:25%;
  float:left;
  
  width:300px;
  height:200px;
  box-shadow: 8px 10px 0px 1px #cedbff ;
  border-radius: 10px;
  font-family: 'Montserrat Thin';
  border: 2px solid #6200EA;
}

.visa{
  padding-left:220px;
  font-style: italic;
  text-shadow: #eac1ff 3px 0 1px;
  color:white;
  /*visa font*/
  font-family: "Myriad Pro", Myriad, "Liberation Sans", "Nimbus Sans L", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.num{
  color:white;
  text-align:center;
  padding-top:20px;
  line-height:0;
}
.card h4{
  color:white;
  float:left;
  width:33%;
  text-align:center;
}
   
    </style>
  
	<meta charset="UTF-8">
	<title>Payment</title>

		   
			 
<body>
<div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
        <i class='bx bx-chevron-down' ></i>
		<a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
<div class="wrapper">
  <div class="card">  
    <h2 class="visa">VISA</h2>
    <h3 class="num">n° 4539  7111  0342  0778</h3>

      <h4>name</br>Foulen</h4>
      <h4>EXP</br>10/21</h4>
      <h4>CVC</br>014</h4>

  </div>
  <div class="main">
    <div class="content">
      <h1>Payment Details</h1>
      <form method="post" action="payments-store">
        
     <!--   <label>Name</label>-->
        <input id="name" type="name" name="name" placeholder="Please enter your name">
        
       <!-- <label>Card Number</label>-->
        <input type="text" name="card_number" placeholder="Please enter the card number">
        
      <!--  <label>Expiration Date</label>-->
        <input type="month" name="date" value="Expiration Date">
        <input type="user" name="CVC_no" placeholder="CVC">
        
     
      
      <div class="payment">
        <h4>Payment Amount :  $<?= $s;  ?><div class ="amount" ></div></h4> 
       
        <button type="submit">Pay</button>
        </form>
        </div>
    </div>
  </div>
</div>
</body>