@extends('layouts.login')

@section('content')
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/19-dark.png)">
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<form method="POST" class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('login') }}">
                            @csrf
							<div class="text-center mb-10">
								<h1 class="text-dark mb-3">PnC-Evaluation System</h1>
							</div>
                            <div class="fv-row mb-10">
								<label for="username" class="form-label fs-6 fw-bolder text-dark">{{ __('Username') }}</label>
								<input id="username" class="form-control form-control-lg form-control-solid @error('username') is-invalid @enderror" type="text" name="username" autocomplete="off"  value="{{ old('username') }}"  required/>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
							</div>
                            <div class="fv-row mb-10">
								<div class="d-flex flex-stack mb-2">
									<label class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Password') }}</label>
								</div>
								<input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" name="password" autocomplete="off" required />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
							</div>
                            <div class="text-center">
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">{{ __('Login') }}</span>
								</button>
							</div>
						</form>
					</div>
				</div>

		</div>

        @error('error')
        <script>

            Swal.fire({
                    text: "Wrong Credentials!",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Continue",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });

        </script>
        @enderror
@endsection
