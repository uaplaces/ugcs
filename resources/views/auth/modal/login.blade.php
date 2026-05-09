<div class="modal modal-sheet position-static p-4 py-md-5" data-bs-backdrop="false" tabindex="-1" role="dialog" id="authModalLogin">
    <div class="modal-dialog">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">@lang('front.auth.modal.login.h1')</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 pt-0">

                <div class="text-danger mb-3 d-none" id="authModalLoginError" data-error="@lang('front.auth.modal.login.unknown_error')"></div>

                <form method="POST"  action="{{ route('api.auth.login') }}" id="authModalLoginForm">

                    @csrf

                    <div class="text-danger mb-3 d-none" id="authModalLoginEmailError"></div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="authModalLoginEmail" name="email"
                               placeholder="@lang('front.auth.modal.login.inputs.email.placeholder')" required>
                        <label for="authModalLoginEmail">@lang('front.auth.modal.login.inputs.email.label')</label>
                    </div>

                    <div class="text-danger mb-3 d-none" id="authModalLoginPasswordError"></div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="authModalLoginPassword" name="password"
                               placeholder="@lang('front.auth.modal.login.inputs.password.placeholder')" required>
                        <label for="authModalLoginPassword">@lang('front.auth.modal.login.inputs.password.label')</label>
                    </div>

                    <div class="form-check  mb-3">
                        <input type="hidden" value="1" name="remember">
                        <input class="form-check-input" type="checkbox" value="1" id="authModalLoginRemember" name="remember" checked>
                        <label class="form-check-label" for="authModalLoginRemember">
                            @lang('front.auth.modal.login.inputs.remember.label')
                        </label>
                    </div>

                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">@lang('front.auth.modal.login.submit')</button>

                </form>

            </div>
        </div>
    </div>
</div>
