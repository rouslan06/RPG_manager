@extends('menu')

@section('title', 'Connexion')

@section('content')

    <h1 style='margin-top: 30px; margin-bottom: 30px;'>CREEZ VOTRE GROUPE</h1>

    <form method="post" action="{{ route('rpg.store2') }}">
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
            <label for="nom" class="form-label">Veuillez saisir le nom du groupe</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('nom') }}" class="form-control
                @if($errors->has('no')) is-invalid @endif
                " name="nom" id="nom" placeholder="Nom du groupe" />

                @if($errors->has('nom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Veuillez saisir une description</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('description') }}" class="form-control
                @if($errors->has('no')) is-invalid @endif
                " name="description" id="description" placeholder="Description du groupe" />

                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="places" class="form-label">Veuillez choisir le nombre de places dans le groupe</label>
            <div class="input-group has-validation">
                
                <input type="number" value="{{ old('place') }}" min ="1" max="5" class="form-control
                @if($errors->has('no')) is-invalid @endif
                " name="places" id="places" placeholder="Nombre de places" />

                @if($errors->has('mdp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('place') }}
                    </div>
                @endif
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Confirmer</button>
            <a href="{{ route('groupe.liste') }}" class="btn btn-primary">Affichez les groupes</a>
        </div>
    </form>

@endsection