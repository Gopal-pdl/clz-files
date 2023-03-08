<?php
    if(isset($_POST["larg"]))
    {
      $first_number = $_POST['fnumber'];
      $second_number = $_POST['snumber'];

     if($first_number > $second_number)
     {
        $large = $first_number;

     }
     else{
        $large = $second_number;
     } 
    
    }

    ?>
<?php include('components/header.php'); ?>
<body>
<div>
<!-- A grey horizontal navbar that becomes vertical on small screens -->
<?php include('components/nav.php'); ?>
    <div class="container">
        
        <div class="row">
        <div class="col-md-6 offset-3 mt-5 border-1" >



<div class="panel panel-success">
<div class="panel-body">
<h2>Largest among any two numbers</h2>
    <form action="largest.php" class="needs-validation" novalidate method="post">
        <div class="form-group">
          <label for="fnumber">First Number:</label>
          <input type="number" class="form-control" id="fnumber" placeholder="Enter First Number" name="fnumber" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="snumber">Second Number:</label>
          <input type="number" class="form-control" id="snumber" placeholder="Enter second number" name="snumber" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>


        <?php 

        if(isset($large)){
            ?>
<div class="form-group">
          <label for="result">Largest Is:</label>
          <input type="number" class="form-control"value="<?php echo $large; ?>" disabled>
          
        </div>
<?php
        }
      ?>
        <button type="submit" class="btn btn-primary" name="larg">Check</button>
      </form>
</div>
</div>

</div>
        </div>
</div>

            
      <script>
      // Disable form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Get the forms we want to add validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
<!-- Latest compiled and minified JavaScript -->

<?php include('components/footer.php'); ?>