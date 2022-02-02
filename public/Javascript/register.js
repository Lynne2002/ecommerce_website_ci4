$(function(){
   var $registerForm= $("#registration");
   $.validator.addMethod("noSpace", function(value, element){
       return value==''||value.trim().length!=0
   }, "Spaces are not allowed");
   if($registerForm.length){
       $registerForm.validate({
           rules:{
               first_name:{
                   required:true,
                   noSpace:true
               },
               last_name:{
                required:true
               },
               email:{
                required:true,
                email:true
                },
               gender:{
                 required:true
                },
            password:{
                required:true
            },
            password_2:{
                required:true,
                equalTo:'#password'

            }
           },
           messages:{
               first_name:{
                   required:'Field is required!'
               },
               last_name:{
                required:'Field is required!'
            },
            email:{
                required:'Field is required!',
                email:'Please enter a valid email'
            },
           
            password:{
                required:'Field is required!'
            },
           password_2:{
                required:'Field is required!',
                equalTo:'Passwords do not match!'
            }

           }
       })
   }
})