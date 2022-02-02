<?= $session = session('orders');?>
<!DOCTYPE html>
<html>
<head>

	<title>Shop Haven</title>
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        .error{
            color:red;
            font-style: italic;
        }
        body{
            padding-top: 30vh;
	background-size: cover;
	background-position: center;
	font-family: 'Raleway', cursive;
        }
      
    </style>
  
		      
</head>
<body background="/assets/Images/background.jpg">
    
<div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
        <i class='bx bx-chevron-down' ></i>
		<a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
    <div class="container mt-4">
        <div class="row">
           <div class="col-md-12">
               
                   <div class="card">
                      <div class="card-header">
                          <h3>Shopping Cart
                      <a href="/products_view"class="btn btn-primary btn-sm float-end">Continue shopping</a>
                      </h3>
                       </div>
  <form method="post" action="<?=site_url('checkout')?>">
  
                       <div class="card-body">
                       <table class="table table-bordered">
                     <thead>
                          <tr>
                          
                          <th>Product ID</th>
                               <th>Product Name</th>
                              
                               <th>Product Price</th>
                               <th>Quantity <input type="submit" value="Update" class="btn btn-primary btn-sm float-end"></th>
                               <th>Sub total</th>
                               <th>Action</th>
                               
                              
            </tr>

            </thead>
            <tbody>
                <?php if($items):?>
                <?php foreach($items as $item):?>
            <tr>
               
            <td><?=$item['product_id']?></td>
                <td><?=$item['product_name']?></td>
              
              
                <td>$<?=$item['unit_price']?></td>
                <td>
                    <input type="number" min="1" value="<?= $item['quantity']?>"style="width:50px" name="quantity[]">
                </td>
                <td>$<?=$item['quantity'] * $item['unit_price']?></td>
                <td align="center">
                    <a href="<?=site_url('cart/remove/' .$item['product_id'])?>"class="btn btn-danger btn-sm"> Remove</a>
                </td>
               
               
            </tr>
            <?php endforeach;?>
            <tr>
                <td colspan="4" align="right">Total</td>
                <td>$<?= $total ?></td>
                <tr>
            <?php endif;?>

            </tbody>
            </table>
           
          
            </div>
           
            
            <button class="btn btn-primary btn-sm float-bottom">Checkout</button></br>
                </form>
                  </div>
             </div>
           
         </div>
        
    </div>
   
                </br></br>
    </body>
    </html>