<main class="main-content position-relative">
    <div class="container-fluid">
        <main class="main-content  mt-0">
            <div class="page-header align-items-start min-vh-100">
                <div class="container my-auto">
                    <div class="row">
                        <div class="col-lg-4 col-md-8 col-12 mx-auto">
                            <div class="card z-index-0 fadeIn3 fadeInBottom">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-primary shadow-primary border-radius-lg py-3 pe-1 px-3">
                                        <img src="<?= base_url() . '/assets/images/system/gsc-main-logo.png' ?>" alt="" srcset="" width="350">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3>Login</h3>
                                    <form role="form" class="text-start" action="login/loginUser">
                                        <div class="input-group input-group-outline my-3">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-check form-switch d-flex align-items-center mb-3">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label mb-0 ms-3" for="rememberMe">Show Password</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-100 my-4 mb-2">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</main>