@extends('menu')

@section('title', 'Connexion')

@section('content')

    <h1 style='margin-top: 30px; margin-bottom: 30px;'>CREEZ VOTRE PERSONNAGE</h1>

    <form method="post" action="{{ route('rpg.store') }}">
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
            <label for="nom" class="form-label">Veuillez saisir le nom votre personnage</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('nom') }}" class="form-control
                @if($errors->has('no')) is-invalid @endif
                " name="nom" id="no" placeholder="Nom" />

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
                " name="description" id="no" placeholder="Description" />

                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="specialite" class="form-label">Veuillez choisir la spécialité de votre personnage</label>
            <div class="input-group has-validation">
                
                <select name="specialite" id="specialite_select" class="form-control @if($errors->has('mdp')) is-invalid @endif" >
                    <option value="">--Faitres votre choix--</option>
                    <option value="GUERRIER">Guerrier</option>
                    <option value="MAGE">Mage</option>
                    <option value="DRUIDE">Druide</option>
                    <option value="ASSASSIN">Assassin</option>
                    <option value="BERSERKER">Berserker</option>
                    <option value="ARCHER">Archer</option>
                </select>

                @if($errors->has('mdp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mdp') }}
                    </div>
                @endif
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Confirmer</button>
            <a href="{{ route('personnage.liste') }}" class="btn btn-primary">Afficher les personnages</a>
        </div>
    </form>

@endsection