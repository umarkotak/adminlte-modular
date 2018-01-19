<?php if (isset($_SESSION['errors'])): ?>

<div class="alert alert-danger alert-dismissible" style="margin-bottom: -5px;">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <p><b>Errors : </b><?php echo $_SESSION['errors']; ?></p>
</div>
<?php unset($_SESSION['errors']); ?>

<?php elseif (isset($_SESSION['notice'])): ?>

<div class="alert alert-success alert-dismissible" style="margin-bottom: -5px;">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <p><b>Notice : </b><?php echo $_SESSION['notice']; ?></p>
</div>
<?php unset($_SESSION['notice']); ?>

<?php endif ?>