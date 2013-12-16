
<!-- start of container -->
<div class="container">
  <div class="row jumbotron" id="jumbotron">
    <div class="col-md-7">
      <h1>Sistem Informasi Pergudangan</h1>
      <h2>Toko Roti Makmur Jaya Sentosa</h2>
    </div>
    <div class="col-md-4 col-md-offset-1">
      <div class=" well well-lg">
      <?php echo form_open('login', 'class="form-horizontal"','role="form"','id="myForm"');; ?>
        <legend>Halaman Login</legend>
        <div class="form-group">
          <div class="col-md-12">
           <input name="username" type="text" class="form-control" id="inputUsername" placeholder="Username">
             <?php echo form_error('username'); ?>
          </div>
       </div>
       <div class="form-group">
         <div class="col-md-12">
           <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
           <?php echo form_error('password','<div class="alert alert-danger">','</div>'); ?>
         </div>
       </div>
       <div class="form-group">
         <div class="col-md-1">
           <input type="submit" class="btn btn-default" value="Masuk" id="submit">
         </div>
       </div>
       <?php echo form_close(); ?>
       <!-- </form> -->
     </div> 
     <!-- end of well -->
   </div> 

   <!-- end of col-md-4 -->
 </div> 
 <!-- end of row  -->
 <!-- </div> <!-- end of container  -->
