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

	<title>Purchase History</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/productsdisplay.css">
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
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
body{
            padding-top: 30vh;
	background-size: cover;
	background-position: center;
	font-family: 'Raleway', cursive;
        }
        .search-box{
  position: relative;
  height: 50px;
  max-width: 550px;
  width: 100%;
  margin: 0 20px;
}
.search-box input{
  height: 100%;
  width: 100%;
  outline: none;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  font-size: 18px;
  padding: 0 15px;
}
.search-box .bx-search{
  position: absolute;
  height: 40px;
  width: 40px;
  background: #2697FF;
  right: 5px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 4px;
  line-height: 40px;
  text-align: center;
  color: #fff;
  font-size: 22px;
  transition: all 0.4 ease;
}
        </style>
        <body  background="/assets/Images/background.jpg">
        <div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
		<a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
    </div>
    

    <div class="container mt-4">
        <div class="row">

      
           <div class="col-md-12">
               
           <div class="search-box">
        <input onkeyup="myFunction()"  id ="myInput"type="text" placeholder="Search product">
        <i class='bx bx-search' ></i>
      </div>

  <br> <br>
    <div class="card">
    <div class="card-header">
                           <h5>Purchase History
                              </h5>
                       </div>
                      
    <div class="card-body">
    <table id="myTable" class="table table-bordered">
  <thead>
       <tr>
      
  
  <th>Product name</th> 
  <th>Order quantity</th>
<th>Product price</th>
<th>Total</th>
    
    

</tr>

</thead>
<tbody>
  <tr>
  <tbody>
												<tr>
                                        
                                            
                                            <td>
                                                <?php foreach($items as $item): echo $item['product_name']?><br><?php endforeach;?>
                                                </td>
                                            <td>
                                                <?php foreach($items as $item): echo $item['quantity']?><br><?php endforeach;?>

                                            </td>
                                            <td>
                                                <?php foreach($items as $item): echo $item['unit_price']?><br><?php endforeach;?>

                                            </td>
                                            <td>
                                                <?php foreach($items as $item):  echo $item['quantity']*  $item['unit_price']?><br><?php endforeach;?>

                                            </td>
												
</tr>


  

    
    
    
  

   
  
    

 
</tbody>
</table>
</br>

 
  


              
    </body>
    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
 
    </html>

      
</body>
</html>
