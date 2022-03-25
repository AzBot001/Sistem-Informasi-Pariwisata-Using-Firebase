<footer class="main-footer">

  <strong>Copyright &copy; <?= date('Y') ?> </strong> - <i class="fas fa-code"></i> With <i class="fas fa-coffee"></i> & <i class="fas fa-heart"></i> By Moh Fadel Dengo
</footer>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= $base_url ?>public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= $base_url ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $base_url ?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= $base_url ?>public/assets/dist/js/demo.js"></script>
<!-- SummerNote js -->
<script src="<?= $base_url ?>public/assets/plugins/summernote/summernote.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script type="module">
  // Import the functions you need from the SDKs you need
  import {
    initializeApp
  } from "firebase/app";
  import {
    getAnalytics
  } from "firebase/analytics";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAQe87SVkT960bcU2TWeoNV8Rjivjkqhn0",
    authDomain: "test-f2700.firebaseapp.com",
    databaseURL: "https://test-f2700-default-rtdb.firebaseio.com",
    projectId: "test-f2700",
    storageBucket: "test-f2700.appspot.com",
    messagingSenderId: "812231346515",
    appId: "1:812231346515:web:f6ac4c94faf364b6d7b9a6",
    measurementId: "G-JMGKZ46D3E"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
<script>
  $(document).ready(function() {
    setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 2000);
  });



  $(document).ready(function() {
    $('#dataTable').DataTable();
  });

</script>

<?php

$ref_table = 'User';
$total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
$jumlah = $total_count;

for($i = 1; $i <= $jumlah; $i++){

  ?>

  <script>
    
  $(document).ready(function() {
    $('#edit<?= $i; ?>').hide();
  });

  $("#show<?= $i; ?>").click(function() {
    $("#edit<?= $i; ?>").show();
    $("#noedit<?= $i; ?>").hide();
  });

  $("#hide<?= $i; ?>").click(function() {
    $("#noedit<?= $i; ?>").show();
    $("#edit<?= $i; ?>").hide();
  });
  </script>
  <script>

    function passLama(){
         document.getElementById("passL").type = 'text' ;
    
    }

  </script>

  <?php

}

?>

</body>

</html>