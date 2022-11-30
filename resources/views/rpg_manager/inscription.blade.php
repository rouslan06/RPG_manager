@extends('menu')

@section('title', 'Connexion')

@section('content')

    <h1 style='margin-top: 30px; margin-bottom: 30px;'>CREATION DE COMPTE</h1>

    <form method="post" action="{{ route('rpg.store3') }}">
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
            <label for="pseudo" class="form-label">Veuillez choisir un pseudo</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control
                @if($errors->has('pseudo')) is-invalid @endif
                " name="pseudo" id="pseudo" placeholder="Pseudo" value="red boule" />

                @if($errors->has('pseudo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pseudo') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="nom" class="form-label">Veuillez saisir votre nom</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('nom') }}" class="form-control
                @if($errors->has('nom')) is-invalid @endif
                " name="nom" id="nom" placeholder="Nom" />

                @if($errors->has('nom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Veuillez saisir votre prénom</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('prenom') }}" class="form-control
                @if($errors->has('prenom')) is-invalid @endif
                " name="prenom" id="prenom" placeholder="Prénom" />

                @if($errors->has('prenom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('prenom') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Veuillez saisir votre email</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('email') }}" class="form-control
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
                " name="mdp" id="mdp" placeholder="password" />

                @if($errors->has('mdp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mdp') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Veuillez choisir une photo de profile ( OPTIONNEL ) - BETA -</label>
            <div class="input-group has-validation">
                <input type="file" value="{{ old('name') }}" class="form-control
                @if($errors->has('name')) is-invalid @endif
                " name="photo" id="mdp" placeholder="photo" />

                @if($errors->has('photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo') }}
                    </div>
                @endif
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Confirmer</button>
        <a href="{{ route('connecte.index') }}" class="btn btn-primary">J'ai déjà un compte</a>
    </form>

@endsection