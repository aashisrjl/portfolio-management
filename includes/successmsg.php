<?php 
if(isset($_GET['msg'])){ ?>

<div style="color:white; padding:10px; font-weight:bold; background-color:green; text-align:center;" class="alert alert-danger">
    <?php echo $_GET['msg']; ?>
</div>

<?php } ?>