
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
        textarea{
width:100%;
height:250px;

        }
        
      
    </style>
  
		      
</head>
<body background="/assets/Images/background.jpg">
<div class="container">
<div class="card">
                      <div class="card-header">
                           <h5>Add Payment</h5>
                                <a href="<?= base_url('payment_types')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                              </h5>
                       </div>

                       <div class="card-body">
    
<form action="<?=base_url('payment-store')?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" >
                       <div class="form-group">
                                       <label for="usr">Payment Name:</label>
                                            <input type="text" name="payment_type" class="form-control" id="usr" value="<?=$payment['payment_type']?>">
                               </div>
                               <div class="form-group">
                                       <label for="usr">Description:</label>
                                       <br>
                                       <textarea placeholder="<?=$payment['description']?>"  name="description" ></textarea>
                                          
                               </div>
                               <div class="form-group">
                                                 <button type="submit" id="send_form" class="btn btn-primary px-4 float-end">SAVE</button>
                                        </div>
</div>
</form>
</body>
</html>