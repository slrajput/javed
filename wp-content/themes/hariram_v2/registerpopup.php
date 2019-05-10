    <div id="registerpopup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Register as New User</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-user-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="registerpopup-name">
                        <label class="mdl-textfield__label" for="registerpopup-name">Name <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="registerpopup-email">
                        <label class="mdl-textfield__label" for="registerpopup-email">Email <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-key"></i>
                        <input class="mdl-textfield__input" type="password" id="registerpopup-password">
                        <label class="mdl-textfield__label" for="registerpopup-password">Password <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                    </div>
                    <div class="login-condition">By clicking Creat Account you agree to our <a href="#">terms &#38; condition</a></div>
                    <div class="form-submit">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Create Account</button>
                    </div>
                    <div class="or-using">Or Using</div>
                    <div class="social-login">
                        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i>Facebook</a>
                        <a href="#" class="social-google"><i class="fa fa-google"></i>Google</a>
                    </div>
                    <div class="login-link">
                        <span class="paragraph-small">Already have an account?</span>
                        <a href="#" class="">Login Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Register Modal -->
    