<?php
$session = session('category');
?>
<!DOCTYPE html>
<html>
<head>

	<title>Sub Categories</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/Registration.css">
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
       
    </style>
  
		      
</head>
<body background="/assets/Images/background.jpg" >
<div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
       
        <a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
<?php

?>
    <div class="container mt-4">
        <div class="row justify-content-center">
        
           <div class="col-md-7">
                   <div class="card">
                      <div class="card-header">
                           <h5>Add Sub-categories</h5>
                                <a href="<?= base_url('categories')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                              </h5>
                       </div>
                       <div class="card-body">
                       <form action="<?=base_url('subcategory-store')?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" >
                      
                               
                               <div class="form-group">
                               <input type="hidden" name="category" class="form-control" id="usr" value="<?=$category['category_id']?>">
                                       <label for="usr">Sub-Category Name:</label>
                                            <input type="text" name="subcategory_name" class="form-control" id="usr">
                               </div>
                              

                                         <div class="form-group">
                                                 <button type="submit" id="send_form" class="btn btn-primary px-4 float-end">SAVE</button>
                                        </div>
                                        
    </form>
    

    </div>
                  </div>
             </div>
        
    </div>
    </div>
    </body>
    </html>