@extends('menu')

@section('title', 'Connexion')

@section('content')

    <h1 style='margin-top: 30px; margin-bottom: 30px;'>CONNEXION</h1>

    <form method="post" action="{{ route('log.in') }}">
        @csrf

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errorMessage)
                        <li>{{ $errorMessage }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="email" class="form-label">Veuillez saisir votre email</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('no') }}" class="form-control
                @if($errors->has('email')) is-invalid @endif
                " name="email" id="email" placeholder="Email" />

                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="mdp" class="form-label">Veuillez saisir votre mot de passe</label>
            <div class="input-group has-validation">
                <input type="password" value="{{ old('mdp') }}" class="form-control
                @if($errors->has('mdp')) is-invalid @endif
                " name="mdp" id="name" placeholder="Mot de passe" />

                @if($errors->has('mdp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mdp') }}
                    </div>
                @endif
            </div>
        </div>

        <div>
            <input type="submit" class="btn btn-primary" value='Confirmer' />
            <a href="{{ route('inscription.index') }}" class="btn btn-primary">Créer un compte</a>
        </div>
    </form>

@endsection