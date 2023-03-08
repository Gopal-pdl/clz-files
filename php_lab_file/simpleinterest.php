<?php
    if(isset($_POST["calculate"]))
    {
      $first_number = $_POST['principle'];
      $second_number = $_POST['rate'];
      $third_number = $_POST['time'];
     if($first_number != null && $second_number != null && $third_number != null)
     {
       $si = ($first_number * $second_number * $third_number)/100;
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
<h2>Simple Interest Calculator</h2>
    <form action="simpleinterest.php" class="needs-validation" novalidate method="post">
        <div class="form-group">
          <label for="principle">Enter Principle:</label>
          <input type="number" class="form-control" id="principle" placeholder="Principle" name="principle" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="rate">Enter Rate:</label>
          <input type="number" class="form-control" id="rate" placeholder="Rate" name="rate" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="time">Enter Time:</label>
          <input type="number" class="form-control" id="time" placeholder="Time" name="time" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>


        <?php 

        if(isset($si)){
            ?>
<div class="form-group">
          <label for="result">Simple Interest:</label>
          <input type="number" id="result" class="form-control"value="<?php echo $si; ?>" disabled>
          
        </div>
<?php
        }
      ?>
        <button type="submit" class="btn btn-primary" name="calculate">Calculate</button>
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