@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu contraseña') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un link de verificación a tu correo electrónico.') }}
                        </div>
                    @endif

                    {{ __('Por favor revisa tu email para el link de verificación.') }}
                    {{ __('Si no has recibido el email') }}, <a href="{{ route('verification.resend') }}">{{ __('haz clic aquí para pedir otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
