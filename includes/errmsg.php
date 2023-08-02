<?php 
if(isset($_GET['errmsg'])){ ?>

<div style="color:red; padding:10px; font-weight:bold; text-align:center;" class="alert alert-danger">
    <?php echo $_GET['errmsg']; ?>
</div>

<?php } ?>