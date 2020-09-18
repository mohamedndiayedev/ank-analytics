<script src="assets/js/sweetalert.min.js"></script>
<script src="assets/js/libs.min.js"></script>

<!-- Custom Particle Theme JavaScript -->
<script src="assets/js/particle-theme1.min.js"></script>
<script src="assets/js/skilltech-style-switcher.min.js"></script>
<script src="assets/js/sweetalert.min.js"></script>

<?php

if (isset($_SESSION['status']) && ($_SESSION['status']) !='') 
{
?>
  <script>
swal({
      title: "<?php echo $_SESSION['status']; ?>",
      text: "ANK ANALYTICS THANKS YOU FOR YOUR MESSAGE!",
      icon: "success",
      button: "Continue!",
    });
 </script>
<?php
  unset($_SESSION['status']);
 }

?>