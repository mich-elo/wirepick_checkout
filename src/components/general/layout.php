<?php 
    /**
     * Are the main component wrapper and provides footer in the layout 
     *
     * @return void
     */ 
?>

<?php function LayoutContainerOpen() { ?>
    <div class="w-full h-full min-h-[calc(100vh-128px)] mb-10 ">

<?php } ?>

      
<?php function LayoutContainerClose() { ?>
    </div>
    
    <?php require_once "footer.php" ?>

<?php } ?>



