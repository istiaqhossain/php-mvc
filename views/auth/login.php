<div class="h-100vh bg-dark d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-white text-center">
                    <h1 class="display-1"><?php echo $title; ?></h1>
                    <p class="lead"><?php echo $content; ?></p>
                </div>
                <form action="/login" method="post">
                    <p class="lead text-white text-center fw-bold">Log in</p>
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-4">
                                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-4">
                                <input name="password" type="password" class="form-control" id="password" placeholder="******">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </div>
                    

                    
                    
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                </form>
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
</div>