<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="text-white text-center">
                <h1 class="display-1"><?php echo $title; ?></h1>
                <p class="lead"><?php echo $content; ?></p>
            </div>
            <?php 
            $form = \istiaqhossain\phpmvc\form\Form::begin('', 'post');
            ?>
                <p class="lead text-white text-center fw-bold">Log in</p>
                
                <div class="row">
                    <div class="col">
                        <?php echo $form->field($model, 'email'); ?>
                    </div>
                    <div class="col">
                        <?php echo $form->field($model, 'password')->passwordField(); ?>
                    </div>
                </div>
                
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            <?php \istiaqhossain\phpmvc\form\Form::end();?>
            <div class="text-white text-center mt-4">
                <p class="lead">
                    Not register yet? <a class="text-white" href="/register">Create an Account</a>
                </p>
            </div>
            <div class="text-white text-center mt-4">
                <p class="lead">
                    <a class="text-white" href="/">Back to Home</a>
                </p>
            </div>
        </div>
    </div>
</div>