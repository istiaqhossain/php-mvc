<?php 
/**
 * @var $this \istiaqhossain\phpmvc\View
 */
$this->title = 'Home - PHP MVC'; 
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="text-white text-center">
                <h1 class="display-1"><?php echo $title; ?></h1>
                <p class="lead"><?php echo $content; ?></p>
                <?php if (\istiaqhossain\phpmvc\Application::isGuest()): ?>
                <p class="lead">
                    <a class="text-white" href="/login">Log in</a>
                    /
                    <a class="text-white" href="/register">Register</a>
                </p>
                <?php else: ?>
                <p class="lead">
                    <a class="text-white" href="/profile">Profile</a>
                    /
                    <a class="text-white" href="/logout">Welcome <?php echo \istiaqhossain\phpmvc\Application::$app->user->getDisplayName(); ?> (Logout)</a>
                </p>
                <?php endif; ?>
            </div>

            <?php if (\istiaqhossain\phpmvc\Application::$app->session->getFlash('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo \istiaqhossain\phpmvc\Application::$app->session->getFlash('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

            <?php 
            $form = \istiaqhossain\phpmvc\form\Form::begin('', 'post');
            ?>
                <p class="lead text-white text-center fw-bold">Subscribe now for updates</p>
                
                <div class="row">
                    <div class="col">
                        <?php echo $form->field($model, 'firstname'); ?>
                    </div>
                    <div class="col">
                        <?php echo $form->field($model, 'lastname'); ?>
                    </div>
                </div>

                <?php echo $form->field($model, 'email'); ?>
                
                <?php echo $form->textareaField($model, 'message'); ?>
                
                <button class="w-100 btn btn-lg btn-primary" type="submit">Subscribe</button>
            <?php \istiaqhossain\phpmvc\form\Form::end();?>
        </div>
    </div>
</div>