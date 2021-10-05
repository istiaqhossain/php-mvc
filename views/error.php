<?php 
/**
 * @var $exception \Exception
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="text-white text-center">
                <h1 class="display-3 mb-5"><?php echo $exception->getCode();?> - <?php echo $exception->getMessage();?></h1>
                <a href="/" class="btn btn-lg border-white bg-white">Back to Home</a>
            </div>
        </div>
    </div>
</div>