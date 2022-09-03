</body>
</html>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--Datatables -->

<script>
  $(document).ready(function() {
$('#example').dataTable({
 
    "lengthChange": false,
    "ordering": false
});
});
    </script>
<!--end of Datatables -->

<!--Alert-->
<?php if(isset($_GET['msg'])){
    ?>
<script>
   Swal.fire({
  title: "<?php echo $_GET['msg']; ?>",

  icon: 'error',

}); 
</script>


<?php

} ?>


<?php if(isset($_GET['msg1'])){
    ?>
<script>
   Swal.fire({
  title: "<?php echo $_GET['msg1']; ?>",

  icon: 'success',

}); 
</script>


<?php
  
} ?>


<?php if(isset($_GET['msg2'])){
    ?>
<script>
   Swal.fire({
  title: "<?php echo $_GET['msg2']; ?>",

  icon: 'success',

}); 
</script>


<?php
  
} ?>

<?php if(isset($_GET['msg3'])){
    ?>
<script>
   Swal.fire({
  title: "<?php echo $_GET['msg3']; ?>",

  icon: 'success',

}); 
</script>


<?php
  
} ?>

