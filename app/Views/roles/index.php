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
    <div class="container mt-4">
        <div class="row">
           <div class="col-md-12">
               <?php
               if(session()->getFlashdata('status')){
                   echo "<h5>".session()->getFlashdata('status')."</h5>";
               }
               ?>
                   <div class="card">
                      <div class="card-header">
                           <h5>Role Data
                                <a href="<?= base_url('role-add')?>" class="btn btn-primary btn-sm float-end">Add</a>
                              </h5>
                       </div>
                       <div class="card-body">
                       <table class="table table-bordered">
                     <thead>
                          <tr>
                               <th>ID</th>
                               <th>Role Name</th>
                               <th>Action</th>
                              
            </tr>

            </thead>
            <tbody>
                <?php foreach($roles as $item):?>
            <tr>
                <td><?=$item['role_id']?></td>
                <td><?=$item['role_name']?></td>
               
                <td>
                    <a href="<?= base_url('role/edit/'.$item['role_id'])?>"class="btn btn-success btn-sm">Edit</a></br>
                    <a href="<?= base_url('role/delete/'.$item['role_id'])?>"class="btn btn-danger btn-sm">Delete</a>
                    
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