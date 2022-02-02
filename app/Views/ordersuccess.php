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
<meta charset="UTF-8">
    <link rel= "stylesheet" href="/assets/css/logout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
    <style>
html, body {
  background-color: rgba(50, 50, 50, 0.21);
  margin:0px;
height: 100%;
align:center;
}
    
       #contBtn {
        height: 100%;
    position: relative;
    top: 1.5em;
    text-decoration: none;
    background: black;  
  
    color: #fff;
    margin: auto;
    padding: .8em 3em;
    -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
    -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
    box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
    border-radius: 25px;
    -webkit-transition: all .4s ease;
          -moz-transition: all .4s ease;
          -o-transition: all .4s ease;
          transition: all .4s ease;
  }
  #message {
    margin-top: -.5em;
    
    color: #757575;
    letter-spacing: 1px;
  }
  #upper-side {
    height: 50%;
    padding: 2em;
    background: black;  
   
    display: block;
    color: #fff;
    border-top-right-radius: 8px;
    border-top-left-radius: 8px;
  }
    </style>
    
</head>
<body>

    <div id='upper-side'>
     
       
    
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

       
        <svg version="1.1" id="checkmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
          <path d="M131.583,92.152l-0.026-0.041c-0.713-1.118-2.197-1.447-3.316-0.734l-31.782,20.257l-4.74-12.65
      c-0.483-1.29-1.882-1.958-3.124-1.493l-0.045,0.017c-1.242,0.465-1.857,1.888-1.374,3.178l5.763,15.382
      c0.131,0.351,0.334,0.65,0.579,0.898c0.028,0.029,0.06,0.052,0.089,0.08c0.08,0.073,0.159,0.147,0.246,0.209
      c0.071,0.051,0.147,0.091,0.222,0.133c0.058,0.033,0.115,0.069,0.175,0.097c0.081,0.037,0.165,0.063,0.249,0.091
      c0.065,0.022,0.128,0.047,0.195,0.063c0.079,0.019,0.159,0.026,0.239,0.037c0.074,0.01,0.147,0.024,0.221,0.027
      c0.097,0.004,0.194-0.006,0.292-0.014c0.055-0.005,0.109-0.003,0.163-0.012c0.323-0.048,0.641-0.16,0.933-0.346l34.305-21.865
      C131.967,94.755,132.296,93.271,131.583,92.152z" />
          <circle fill="none" stroke="#ffffff" stroke-width="5" stroke-miterlimit="10" cx="109.486" cy="104.353" r="32.53" />
        </svg>
        <h3 id='status'>
        Success
      </h3>
    </div>
    <div id='lower-side'>
    <form action="<?=base_url('orderdetails-store')?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" >

    
           
    
 
       
<input type="hidden" name="customer_id" value="<?= session()->get('id')?>">
<input type="hidden" name="orderdetails_total" value="<?=$s?>">
<input type="hidden" name="order_quantity" value="<?=$item['quantity']?>">
<input type="hidden" name="payment_type" value="<?= session()->get('payment_type')?>">
<input type="hidden" name="product_id" value="<?=$item['product_id']?>">
<input type="hidden" name="product_price" value="<?=$item['unit_price']?>">

      




      <p id='message'>
     Please confirm your order.
      </p>
      <h5><b>Products: </b> </br>
      </h5>
          <h5><b>Total Amount Payable: </b><?= $s;  ?>/-</h5>
          
      <?php foreach($items as $item): echo $item['quantity'];echo "&nbsp;"; echo $item['product_name'] ?></br><?php endforeach;?>
      <div class="form-group">
     
      <button style="background-color:black;" type="submit" id="send_form" class="btn btn-primary px-4 float-end">CONFIRM ORDER</button>
     
      
      
      
            </div>
         
     
     
         
             
</form>

     
    </div>
  </div>
</form>
</body>
</html>
