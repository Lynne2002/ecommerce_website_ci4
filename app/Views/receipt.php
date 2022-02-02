<?=
 $s=0;
 $items=array_values(session('cart'));
foreach($items as $item){
                 $s += $item['unit_price'] * $item['quantity'];
                
        }
    
 

 ?>

<!DOCTYPE html>

<html lang="en">
    <head>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>
     
        <style>
            body{margin-top:20px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
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
.invoice-container {
    padding: 1rem;
}
.invoice-container .invoice-header .invoice-logo {
    margin: 0.8rem 0 0 0;
    display: inline-block;
    font-size: 1.6rem;
    font-weight: 700;
    color: #2e323c;
}
.invoice-container .invoice-header .invoice-logo img {
    max-width: 130px;
}
.invoice-container .invoice-header address {
    font-size: 0.8rem;
    color: #9fa8b9;
    margin: 0;
}
.invoice-container .invoice-details {
    margin: 1rem 0 0 0;
    padding: 1rem;
    line-height: 180%;
    background: #f5f6fa;
}
.invoice-container .invoice-details .invoice-num {
    text-align: right;
    font-size: 0.8rem;
}
.invoice-container .invoice-body {
    padding: 1rem 0 0 0;
}
.invoice-container .invoice-footer {
    text-align: center;
    font-size: 0.7rem;
    margin: 5px 0 0 0;
}

.invoice-status {
    text-align: center;
    padding: 1rem;
    background: #ffffff;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    margin-bottom: 1rem;
}
.invoice-status h2.status {
    margin: 0 0 0.8rem 0;
}
.invoice-status h5.status-title {
    margin: 0 0 0.8rem 0;
    color: #9fa8b9;
}
.invoice-status p.status-type {
    margin: 0.5rem 0 0 0;
    padding: 0;
    line-height: 150%;
}
.invoice-status i {
    font-size: 1.5rem;
    margin: 0 0 1rem 0;
    display: inline-block;
    padding: 1rem;
    background: #f5f6fa;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
}
.invoice-status .badge {
    text-transform: uppercase;
}

@media (max-width: 767px) {
    .invoice-container {
        padding: 1rem;
    }
}


.custom-table {
    border: 1px solid #e0e3ec;
}
.custom-table thead {
    background: #007ae1;
}
.custom-table thead th {
    border: 0;
    color: #ffffff;
}
.custom-table > tbody tr:hover {
    background: #fafafa;
}
.custom-table > tbody tr:nth-of-type(even) {
    background-color: #ffffff;
}
.custom-table > tbody td {
    border: 1px solid #e6e9f0;
}


.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

.text-success {
    color: #00bb42 !important;
}

.text-muted {
    color: #9fa8b9 !important;
}

.custom-actions-btns {
    margin: auto;
    display: flex;
    justify-content: flex-end;
}

.custom-actions-btns .btn {
    margin: .3rem 0 .3rem .3rem;
}
          
@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}
            </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Receipt</title>
    </head>
    <body>
    <div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
        <i class='bx bx-chevron-down' ></i>
		<a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
</br></br></br>
    <div class="container">
<div class="row gutters">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">
				<div class="card-body p-0">
					<div class="invoice-container">
						<div class="invoice-header">
						
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="custom-actions-btns mb-5">
										<a href="no-script.html" id="link" class="btn btn-primary">
                                        <i class="fas fa-download"></i>Download
                                        <script>
        $(document).ready(function () {
            $("#link").click(function (e) {
                e.preventDefault();
                  
                window.location.href 
                    = "File/index";
            });
        });
    </script>
                                        
										</a>
										<a href="#" id="btnPrint" class="btn btn-secondary">
                                        <i class="fas fa-print"></i> Print
										</a>
									</div>
								</div>
							</div>
							<!-- Row end -->
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<a href="index.html" class="invoice-logo">
										Shop Haven Receipt
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<address class="text-right">
										Shop Haven, 45 Jogoo Road.<br>
										Niarobi, Kenya.<br>
										20200 00000
									</address>
								</div>
							</div>
							<!-- Row end -->
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
									<div class="invoice-details">
										<address>
                                        <?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?><br>
											150-600 Nairobi, Kenya
										</address>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
									<div class="invoice-details">
										<div class="invoice-num">
											<div>Receipt - #009</div>
											<div>January 27th 2022</div>
										</div>
									</div>													
								</div>
							</div>
						
						</div>
						<div class="invoice-body">
							
							<div class="row gutters">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="table-responsive">
										<table class="table custom-table m-0">
											<thead>
												<tr>
													
													<th>Product ID</th>
                                                    <th>Items</th>
													<th>Quantity</th>
                                                    <th>Price</th>
													<th>Sub Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
                                        
                                                <td>
                                                <?php foreach($items as $item): echo $item['product_id']?><br><?php endforeach;?>

                                            </td>
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
												
												<tr>
													<td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
													<td colspan="3">
														
														<h5 class="text-success"><strong>Grand Total:</strong></h5>
													</td>			
													<td>
														
														<h5 class="text-success"><strong><?=$s?></strong></h5>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						
						</div>
						<div class="invoice-footer">
							Thank you for your Business.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
            <p class="centered">Thanks for your purchase!
                <br>We love you❤️❤️</p>
        </div>
<div>
<a href="userpurchase">Want to check your purchase history? Click here
    </a>
    </div>
       
    </body>
    <script>

const $btnPrint = document.querySelector("#btnPrint");
$btnPrint.addEventListener("click", () => {
    window.print();
});
      </script>
</html>