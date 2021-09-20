<div class="h-100vh bg-dark d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-white text-center">
                    <h1 class="display-1"><?php echo $title; ?></h1>
                    <p class="lead"><?php echo $content; ?></p>
                </div>
                <form action="/subscribe" method="post">
                    <p class="lead text-white text-center fw-bold">Subscribe now for updates</p>
                    
                    <div class="form-floating mb-4">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Jone Doe">
                        <label for="name">Name</label>
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
</div>