<?php
if (isset($_POST['prime'])){
$number = $_POST['num'];
if ($number <= 0){
    $prime = "zero";
}
else {
    $prime = "PRIME";
for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
        $prime = "NOT PRIME";
    }
}
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
            <div class="col-md-6 offset-3 mt-5 border-1">



                <div class="panel panel-success">
                    <div class="panel-body">
                        <h2>To Find Prime Number</h2>
                        <form action="prime.php" class="needs-validation" novalidate method="post">
                            <div class="form-group">
                                <label for="num">Enter Number:</label>
                                <input type="number" class="form-control" id="num" placeholder="Number TO Find Prime or Not." name="num" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <?php
                            if (isset($prime)) {
                            ?>
                                <div class="form-group">
                                    <label for="result">Result:</label>
                                    <input type="text" id="result" class="form-control" value="<?php echo $prime; ?>" disabled>

                                </div>
                            <?php
                            }
                            ?>
                            <button type="submit" class="btn btn-primary" name="prime">Check Prime or Not</button>
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