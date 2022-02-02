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
       
        body{
            padding-top: 30vh;
	background-size: cover;
	background-position: center;
	font-family: 'Raleway', cursive;
        }
        form{
	width: 50% ;
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
      
    </style>
  
		      
</head>
<body background="/assets/Images/background.jpg">


    
<div class="card">
<div class="card-header">
                           <h5>Payment Data
                                <a href="<?= base_url('payment-add')?>" class="btn btn-primary btn-sm float-end">Add</a>
                              </h5>
                       </div>
                       <div class="card-body">
                       
                       <table class="table table-bordered">
                     <thead>
                          <tr>
                             
                               <th>Payment ID</th>
                               <th>Payment Name</th>
                               <th>Payment Description</th>
                               <th>Action</th>
            </tr>

            </thead>
            <tbody>
                <?php foreach($payment as $item):?>
            <tr>
                <td><?=$item['paymenttype_id']?></td>
                <td><?=$item['payment_type']?></td>
                <td><?=$item['description']?></td>
              
               
                <td>
                    <a href="<?= base_url('payment/edit/'.$item['paymenttype_id'])?>"class="btn btn-success btn-sm">Edit</a></br>
                    <a href="<?= base_url('payment/delete/'.$item['paymenttype_id'])?>"class="btn btn-danger btn-sm">Delete</a>
                    
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
            </table>
            </div>
                  </div>
             </div>
         </div>
    </div>
    </body>
    </html>