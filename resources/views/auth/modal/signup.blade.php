<div class="modal modal-sheet position-static p-4 py-md-5" data-bs-backdrop="false" tabindex="-1" role="dialog" id="authModalSignup">
    <div class="modal-dialog">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">@lang('front.auth.modal.signup.h1')</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 pt-0">

                <div class="text-danger mb-3 d-none" id="authModalSignupError" data-error="@lang('front.auth.modal.signup.unknown_error')"></div>

                <form method="POST"  action="{{ route('api.auth.signup') }}" id="authModalSignupForm">

                    @csrf

                    <div class="text-danger mb-3 d-none" id="authModalSignupNameError"></div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" id="authModalSignupName" name="name"
                               placeholder="@lang('front.auth.modal.signup.inputs.name.placeholder')" required>
                        <label for="authModalSignupName">@lang('front.auth.modal.signup.inputs.name.label')</label>
                    </div>

                    <div class="text-danger mb-3 d-none" id="authModalSignupEmailError"></div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="authModalSignupEmail" name="email"
                               placeholder="@lang('front.auth.modal.signup.inputs.email.placeholder')" required>
                        <label for="authModalSignupEmail">@lang('front.auth.modal.signup.inputs.email.label')</label>
                    </div>

                    <div class="text-danger mb-3 d-none" id="authModalSignupPasswordError"></div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="authModalSignupPassword" name="password"
                               placeholder="@lang('front.auth.modal.signup.inputs.password.placeholder')" required>
                        <label for="authModalSignupPassword">@lang('front.auth.modal.signup.inputs.password.label')</label>
                    </div>

                    <div class="text-danger mb-3 d-none" id="authModalSignupPasswordConfirmationError"></div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="authModalSignupPasswordConfirmation" name="password_confirmation"
                               placeholder="@lang('front.auth.modal.signup.inputs.password_confirmation.placeholder')" required>
                        <label for="authModalSignupPasswordConfirmation">@lang('front.auth.modal.signup.inputs.password_confirmation.label')</label>
                    </div>

                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">@lang('front.auth.modal.signup.submit')</button>

                    <!--

                    <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>

                    <hr class="my-4">

                    <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>

                    <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                        <svg class="bi me-1" width="16" height="16" aria-hidden="true"><use xlink:href="#google"></use></svg>
                        Sign up with Google
                    </button>


                    <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                        <svg class="bi me-1" width="16" height="16" aria-hidden="true"><use xlink:href="#facebook"></use></svg>
                        Sign up with Facebook
                    </button>

                    <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                        <svg class="bi me-1" width="16" height="16" aria-hidden="true"><use xlink:href="#github"></use></svg>
                        Sign up with GitHub
                    </button>
                    -->

                </form>

            </div>
        </div>
    </div>
</div>
