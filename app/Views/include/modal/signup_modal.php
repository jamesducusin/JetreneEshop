<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <?php $register = session()->getFlashdata('registermodal');
                    if (!isset($register)) : ?>
                        <script>
                            window.addEventListener('load', function() {
                                document.getElementById("signin").click();
                            })
                        </script>
                         <li class="nav-item"><a class="nav-link active" id="signin" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
                        <li class="nav-item"><a class="nav-link" id="signup" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
                    <?php else :; ?>
                        <script>
                            window.addEventListener('load', function() {
                                document.getElementById("signup").click();
                            })
                        </script>
                        <li class="nav-item"><a class="nav-link active" id="signin" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
                        <li class="nav-item"><a class="nav-link" id="signup" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
                    <?php endif; ?>
                </ul>

                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body tab-content py-4">
                <?php if(isset($validation) && !isset($register) || !empty(session()->getFlashdata('validation'))) : ?>
                    <form action="authLogin" method="post" class="was-validated tab-pane fade show active" autocomplete="off" id="signin-tab">
                <?php else : ?>
                    <form action="authLogin" method="post" class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
                <?php endif; ?>
                    <div class="form-group">
                        <label>Email address</label>
                        <input class="form-control" type="email" placeholder="jamesducusin@example.com" name="email" required>
                        <div class="invalid-feedback d-block"><?= isset($validation) && !isset($register) ? display_error($validation, 'email') : '' ?></div>
                    </div>
                    <div class="form-group">
                        <label for="si-password">Password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" id="si-password" name="password" required>
                            <label class="password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                        <div class="invalid-feedback d-block"><?= isset($validation) && !isset($register)? display_error($validation, 'password') : '' ?></div>
                        <div class="invalid-feedback d-block"><?= !empty(session()->getFlashdata('validation'))  && !isset($register) ? session()->getFlashdata('validation') : '' ?></div>
                    </div>
                    <div class="form-group d-flex flex-wrap justify-content-between">
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" type="checkbox" id="si-remember">
                            <label class="custom-control-label" for="si-remember">Remember me</label>
                        </div><a class="font-size-sm" href="#">Forgot password?</a>
                    </div>
                    <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
                </form>
                <?php if(isset($validation) && isset($register)) : ?>
                    <form action="validateReg" method="post" class="was-validated tab-pane fade" autocomplete="off" id="signup-tab">
                <?php else : ?>
                    <form action="validateReg" method="post" class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                <?php endif; ?>
                    <div class="form-group">
                        <label for="su-email">Email address</label>
                        <input class="form-control" type="email" id="su-email" placeholder="jamesducusin@example.com" name="email" required>
                        <div class="invalid-feedback d-block"><?= isset($validation) && isset($register) ? display_error($validation, 'email') : '' ?></div>
                    </div>
                    <div class="form-group">
                        <label for="su-password">Password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" id="su-password" name="password" required>
                            <label class="password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                         <div class="invalid-feedback d-block"><?= isset($validation) && isset($register)? display_error($validation, 'password') : '' ?></div>
                    </div>
                    <div class="form-group">
                        <label for="su-password-confirm">Confirm password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" id="su-password-confirm" name="pass_confirm" required>
                            <label class="password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                         <div class="invalid-feedback d-block"><?= isset($validation) && isset($register)? display_error($validation, 'pass_confirm') : '' ?></div>
                    </div>
                    <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</div>