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
                <p class="lead text-white text-center fw-bold">Register</p>

                <div class="row">
                    <div class="col">
                        <!-- <div class="form-floating mb-4">
                            <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Jone Doe">
                            <label for="firstname">Firstname</label>
                        </div> -->
                        <?php echo $form->field($model, 'firstname'); ?>
                    </div>
                    <div class="col">
                        <!-- <div class="form-floating mb-4">
                            <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Jone Doe">
                            <label for="lastname">Lastname</label>
                        </div> -->
                        <?php echo $form->field($model, 'lastname'); ?>
                    </div>
                </div>

                <!-- <div class="form-floating mb-4">
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div> -->
                <?php echo $form->field($model, 'email'); ?>

                <!-- <div class="form-floating mb-4">
                    <input name="password" type="password" class="form-control" id="password" placeholder="******">
                    <label for="password">Password</label>
                </div> -->
                <?php echo $form->field($model, 'password')->passwordField(); ?>
                
                <!-- <div class="form-floating mb-4">
                    <input name="confirmPassword" type="password" class="form-control" id="confirmPassword" placeholder="******">
                    <label for="confirmPassword">Password Confirm</label>
                </div> -->
                <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>
                            
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <?php \istiaqhossain\phpmvc\form\Form::end();?>
            <div class="text-white text-center mt-4">
                <p class="lead">
                    Already have an account? <a class="text-white" href="/login">Log in</a>
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