<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="log.css">
	<title></title>

</head>
<body> 
   <div class="container">
    <form action="val.php" method="post">
    <marquee> <h1 class="text-center">LOGIN</h1></marquee>
           
  
         <div class="input-group">
         
          <div class="col-sm-5 >
            <label for="Email">Email:-</label>
            <input type="email"name="email" class="form-control" placeholder="Email" required>
         </div>
     
        <div class="input-group">
          <div class="col-sm-5">
            <label for="Password">Password:-</label>
            <input type="password" name="password"class="form-control" placeholder="Password" required>
        </div>
     </div>
    <div class="col-sm-5"><br>
      <a href=""> <input type="submit"class="btn btn-primary" name="submit" value="login"/></a>
       </div>
</form>

        
</div>
        

      <script type="text/javascript">
        function validation(){
          var email = lo.email.value;
          var password = lo.password.value;
          if ( email=="",password==""){
            alert("both field should not be blank")
          }
        }


      </script>
      <div ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="ss.php"><input type="reset" class="btn btn-danger" name="reset" value="signin" /></a>
</div>
       
   </div>

   	
</body>

</html>
	
<style>




		
</style>