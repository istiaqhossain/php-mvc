<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="text-white text-center">
                <h1 class="display-1"><?php echo $title; ?></h1>
                <p class="lead"><?php echo $content; ?></p>
                <p class="lead">
                    <a class="text-white" href="/login">Log in</a>
                    /
                    <a class="text-white" href="/register">Register</a>
                </p>
            </div>

            <?php if (\app\core\Application::$app->session->getFlash('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo \app\core\Application::$app->session->getFlash('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

            <form action="/subscribe" method="post">
                <p class="lead text-white text-center fw-bold">Subscribe now for updates</p>
                
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-4">
                            <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Jone Doe">
                            <label for="firstname">Firstname</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-4">
                            <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Jone Doe">
                            <label for="lastname">Lastname</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-4">
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                
                <button class="w-100 btn btn-lg btn-primary" type="submit">Subscribe</button>
            </form>
        </div>
    </div>
</div>