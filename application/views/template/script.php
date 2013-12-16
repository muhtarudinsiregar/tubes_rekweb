  <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>asset/js/jquery-2.0.3.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/bootstrap.js"></script>
  <script>
   $(document).ready(function(){
 	// // $("#alert").hide();
 	// $("#submit").click(function(){
 	// 	$("#alert").show("slow");
 	// })

    var $input = $("#tambah").children();
    $(".tambah_data").on("click", function(){
      var $newField = $input.clone();
      // change what you need to do with the field here.
      $(this).siblings("#tambah").append($newField);
    });
$('#myTab a:first').tab('show');
// $('#myTab a:#tambah').click(function (e) {
//   e.preventDefault()
//   $('#myTab a:last').tab('show')
// })

 });


 </script>
</body>
</html>