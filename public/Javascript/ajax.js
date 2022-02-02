<script type="text/javascript">
    $(document).ready(function()){
        $('#button').click(function(e){
            e.preventDefault();
            $.ajax({
               
                type:"post",
                url:"register.js",
                data:$('#registration').serialize(),
                dataType:"text",
                success: function(response){
                    $('#messagedisplay').text(response)
    
                }
        })
        
        })
    });
</script>