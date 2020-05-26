<script>


    var $button;
    
      
    $(document).ready(function(){
    
        $(".destroy").click(function(e){ 
          e.preventDefault();
          var $button = $(this);
    
              $.ajax({
                type:'DELETE',
                url:$button.data("href"),
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                success:function(data){
    
                  alert( "success" );
    
                  $button.parent().parent().remove();
                    
                }
              });
    
    
        });
    });
    
    </script>