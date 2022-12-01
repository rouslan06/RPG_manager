<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonnageRequest;
use App\Http\Requests\GroupeRequest;
use App\Http\Requests\CompteRequest;
use App\Http\Requests\LoginRequest;

use App\Models\Personnage;
use App\Models\Groupe;
use App\Models\Compte;
use Illuminate\Support\Facades\Auth;

use Validator;

use Illuminate\Http\Request;

class RpgController extends Controller
{
    public function index()
    {
        return view('rpg_manager.accueil');
    }

    public function connexion()
    {
        return view('rpg_manager.connecte');
    }

    public function profile()
    {
        return view('rpg_manager.profile')
            ->with([
                'comptes' => Compte::all()
            ]);
    }

    /******************************************/

    public function login(LoginRequest $request)
    {
        $user_data = array(
            'email'  => $request->get('email'),
            'mdp' => $request->get('mdp')
        );
      
        Auth::attempt($user_data);

        return redirect()->route('profile.index');
    }

    /******************************************/

    public function logout()
    {
        auth()->logout();
        
        return redirect()->route('connecte.index');
    }

    /******************************************/

    public function inscription()
    {
        return view('rpg_manager.inscription');
    }

    /******************************************/

    public function personnage()
    {
        return view('rpg_manager.personnage');
    }

    public function personnageListe()
    {
        return view('rpg_manager.personnageListe')
            ->with([
                'personnages' => Personnage::all()
            ]);
    }

    /******************************************/

    public function pModification()
    {
        return view('rpg_manager.pModification')
            ->with([
                'pModification' => Personnage::all()
            ]);
    }

    /******************************************/

    public function gModification()
    {
        return view('rpg_manager.pModification')
            ->with([
                'gModification' => Groupe::all()
            ]);
    }

    /******************************************/

    public function groupe()
    {
        return view('rpg_manager.groupes');
    }

    public function groupesListe()
    {
        return view('rpg_manager.groupesListe')
            ->with([
                'groupes' => Groupe::all()
            ]);
    }

    /******************************************/

    public function store(PersonnageRequest $request)
    {
        $data = $request->toArray();
        $data['magie'] = random_int(10, 99);
        $data['force'] = random_int(10, 99);
        $data['agilite'] = random_int(10, 99);
        $data['intelligence'] = random_int(10, 99);
        $data['PV'] = random_int(20, 50);

        Personnage::create($data);

        return redirect()->route('personnage.liste')->with('success', 'Commentaire ajouté');
    }

    public function store2(GroupeRequest $request)
    {
        $data2 = $request->toArray();

        Groupe::create($data2);

        return redirect()->route('groupe.liste')->with('success', 'Groupe ajouté');
    }

    /******************************************/

    public function store3(CompteRequest $request)
    {
        $data3 = $request->toArray();

        $user = Compte::create($data3);

        Auth::login($user);

        return redirect()->route('profile.index')->with('success', 'Compte ajouté');
    }

    /******************************************/

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Personnage $personnage)
    {
        $personnage->delete();

        return redirect()->route('personnage.liste')->with('success', 'Le personnage à été supprimé avec succé');
    }

    public function destroy2(Groupe $groupe)
    {
        $groupe->delete();

        return redirect()->route('groupe.liste')->with('success', 'Le groupe à été supprimé avec succé');
    }

    public function destroy3(Compte $compte)
    {
        $compte->delete();

        return redirect()->route('inscription.index')->with('success', 'Le compte à été supprimé avec succé');
    }
}
