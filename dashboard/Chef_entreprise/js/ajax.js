$(document).ready(function(){
    $('.taken').click(function(e) {
      e.preventDefault();
   
      var $form = $(this).closest(".form-submit");
      var id = $form.find(".id").val();
      var assure = $form.find(".assure").val();
      var reject = $form.find(".reject").val();
      var taken = $form.find(".taken").val();

      
  
      $.ajax({
        url: "../code.php",
        method: "post",
        data: {id:id, assure:assure, taken:taken, reject:reject},
        success:function(response){
          $('#message').html(response);
        }
      });
    });
});