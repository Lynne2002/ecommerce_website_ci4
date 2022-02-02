
<?=
 $s=0;
 $items=array_values(session('cart'));
foreach($items as $item){
                 $s += $item['unit_price'] * $item['quantity'];
                
        }
    
 

 ?>
 <!DOCTYPE html>
<html>
<head>

	<title>Shop Haven</title>
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/assets/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
    <style>
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
option{
  width:100%;
}
       
        body{
            padding-top: 30vh;
	background-size: cover;
	background-position: center;
	font-family: 'Raleway', cursive;
        }
        form{
	width: 70% ;
	height: 1200px;
	padding: 70px 30px;
	background-color: rgba(0, 0, 0, 0.8);
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	margin-top: 400px;
}
.select{
  width:100%;
}
      
      
    </style>
  
		      
</head>
<body background="/assets/Images/background.jpg">
<div class="container">
<div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
        <i class='bx bx-chevron-down' ></i>
		<a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
    
<form method="post" action="<?=base_url('checkout-store')?>">
   
<div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h1 class="text-center text-info p-2">Complete your order!</h1>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b></h6>
          <h6 class="lead"><b>Delivery Charge: </b>Free</h6>
          <h5><b>Products: </b>  <?php foreach($items as $item): echo $item['product_name']?>,&nbsp;<?php endforeach;?>
          
          </h5>
          <h5><b>Total Amount Payable: </b><?= $s;  ?>/-</h5>
        </div>
<div class="form-group">
  
                               <label for="payment"><b>Choose a payment method:</b></label>&nbsp;&nbsp;&nbsp;


<select  name="payment_type"id="payment">
                               <?php foreach($payment as $item):?>
            
                                
  <option id="payment"  style="width:100%;" value="<?=$item['paymenttype_id']?>"><?=$item['payment_type']?></option>

            <?php endforeach;?>
            </select>
                               </div>
                               </br></br>
                               <input type="hidden" name="customer_id" value="<?=session()->get('id')?>">
                               <input type="hidden" name="total" value="<?= $s;  ?>">
                             
                              
          <div class="form-group">
                                                 
          
                               </form>
           <button  type="submit" style="height:50px; width:200px; display:inline;" id="send_form" class="btn btn-primary px-4 float-end">PLACE ORDER</button>
                                        </div>
                                     
</br></br></br></br></br></br>
          <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/digitalassets/c/website/marketing/na/us/logo-center/9_bdg_secured_by_pp_2line.png" border="0" alt="Secured by PayPal"></a></td></tr></table><!-- PayPal Logo -->
 <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark"></a></td></tr></table><!-- PayPal Logo -->
  
  