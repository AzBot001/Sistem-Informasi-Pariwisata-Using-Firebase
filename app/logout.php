<?php
session_start();
$_SESSION = [];
session_destroy();
session_unset();
// Redirect to the login page:
?>
<script>
    document.location.href = '../';
</script>
<?php
?>