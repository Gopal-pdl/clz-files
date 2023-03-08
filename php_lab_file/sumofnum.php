<?php
    if(isset($_POST["add"]))
    {
      $first_number = $_POST['fnumber'];
      $second_number = $_POST['snumber'];

     if($first_number != null && $second_number != null)
     {
        $sum = $first_number + $second_number;

     } 
    
    }

    ?>

<?php include('components/header.php'); ?>
<body>
<div>
<?php include('components/nav.php'); ?>
<!-- A grey horizontal navbar that becomes vertical on small screens -->

</div>
  <!-- this body part -->
  <div class="container">
        
        <div class="row">
        <div class="col-md-6 offset-3 mt-5 border-1" >



<div class="panel panel-success">
<div class="panel-body">
<h2>SUM of two numbers</h2>
    <form action="sumofnum.php" class="needs-validation" novalidate method="post">
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

        if(isset($sum)){
            ?>
<div class="form-group">
          <label for="result">Result:</label>
          <input type="number" class="form-control"value="<?php echo $sum; ?>" disabled>
          
        </div>
<?php
        }
      ?>
        <button type="submit" class="btn btn-primary" name="add">Add</button>
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

<?php include('components/footer.php'); ?>