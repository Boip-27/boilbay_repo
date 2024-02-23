@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.register_message'))

@section('auth_body')
    <form action="{{ $register_url }}" method="post">
        @csrf

        {{-- Name field --}}
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        {{-- Identify field --}}
        <div class="input-group mb-3">
            <input type="number" name="identify" class="form-control @error('identify') is-invalid @enderror"
                   value="{{ old('identify') }}" placeholder="{{ __('Cédula') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa fa-id-card {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('identify')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- birth field --}}
        <div class="input-group mb-3">
            <input type="date" name="birth" class="form-control @error('birth') is-invalid @enderror"
                   value="{{ old('birth') }}" placeholder="{{ __('Fecha de nacimiento') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa fa-calendar {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('birth')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- blood field --}}
        <div class="input-group mb-3">
            <input type="text" name="blood" class="form-control @error('blood') is-invalid @enderror"
                   value="{{ old('blood') }}" placeholder="{{ __('Tipo de sangre') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa fa-tint {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('blood')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- city field --}}
        <div class="input-group mb-3">
            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"
                   value="{{ old('city') }}" placeholder="{{ __('Ciudad de nacimiento') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa fa-globe {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- phone field --}}
        <div class="input-group mb-3">
            <input type="numb" name="phone" class="form-control @error('phone') is-invalid @enderror"
                   value="{{ old('phone') }}" placeholder="{{ __('Celular') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa fa-phone {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        {{-- grade field --}}
        <div class="input-group mb-3">
            <input type="text" name="grade" class="form-control @error('grade') is-invalid @enderror"
                   value="{{ old('grade') }}" placeholder="{{ __('Grado') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa fa-angle-double-up {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('grade')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                   placeholder="{{ __('adminlte::adminlte.password') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Confirm password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation"
                   class="form-control @error('password_confirmation') is-invalid @enderror"
                   placeholder="{{ __('adminlte::adminlte.retype_password') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Register button --}}
        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-user-plus"></span>
            {{ __('adminlte::adminlte.register') }}
        </button>

    </form>
@stop

@section('auth_footer')
    <p class="my-0">
        <a class="text-light" href="{{ $login_url }}">
            {{ __('adminlte::adminlte.i_already_have_a_membership') }}
        </a>
    </p>
@stop
