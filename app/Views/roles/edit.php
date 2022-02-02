<!DOCTYPE html>
<html>
<head>

	<title>Shop Haven</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/Registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
    <style>
        .error{
            color:red;
            font-style: italic;
        }
       
    </style>
  
		      
</head>
<body background="/assets/Images/background.jpg" >
    <div class="container mt-4">
        <div class="row justify-content-center">
        
           <div class="col-md-7">
                   <div class="card">
                      <div class="card-header">
                           <h5>Edit and Update Roles</h5>
                                <a href="<?= base_url('roles')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                              </h5>
                       </div>
                       <div class="card-body">
                       <form action="<?=base_url('role/update/'.$role['role_id'])?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                 <div class="form-group">
                                       <label for="usr">Role Name:</label>
                                            <input type="text" value="<?=$role['role_name']?>" name="role_name" class="form-control" id="usr">
                               </div>
                                

                                         <div class="form-group">
                                                 <button type="submit" id="send_form" class="btn btn-primary px-4 float-end">UPDATE</button>
                                        </div>


    </div>
                  </div>
                 
        
    </div>
    </div>
    </body>
    </html>