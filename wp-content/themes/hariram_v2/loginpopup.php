    <div id="loginpopup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Login Now</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>    
                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="loginpopup-email">
                        <label class="mdl-textfield__label" for="loginpopup-email">Email <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-key"></i>
                        <input class="mdl-textfield__input" type="password" id="loginpopup-password">
                        <label class="mdl-textfield__label" for="loginpopup-password">Password <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Password!</span>
                        <div class="forgot-pass">Forgot Password?</div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon form-bot-check">
                        <i class="fa fa-question"></i>
                        <input class="mdl-textfield__input" type="number" id="loginpopup-bot">
                        <label class="mdl-textfield__label" for="loginpopup-bot">What is 7 plus 1 = <em>* </em></label>
                        <span class="mdl-textfield__error">Please Enter Correct Value!</span>
                    </div>
                    <div class="form-submit">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Login Now</button>
                    </div>
                    <div class="or-using">Or Using</div>
                    <div class="social-login">
                        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i>Facebook</a>
                        <a href="#" class="social-google"><i class="fa fa-google"></i>Google</a>
                    </div>
                    <div class="login-link">
                        <span class="paragraph-small">Don't have an account?</span>
                        <a href="#" class="">Register as New User</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Login Modal -->
    