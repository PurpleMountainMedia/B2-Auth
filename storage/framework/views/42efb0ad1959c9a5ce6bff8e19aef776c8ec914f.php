<script>
  window.b2FormData = {
    old: <?php echo json_encode(session()->getOldInput(), 15, 512) ?>,
    errors: <?php echo json_encode($errors->messages(), 15, 512) ?>,
    csrfToken: "<?php echo e(csrf_token()); ?>"
  }
</script>
