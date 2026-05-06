@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="REYNA" 
        role="DUELIST" 
        biography="Forged in the heart of Mexico, Reyna dominates single combat, popping off with every kill she scores." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6577b1f58530e6b9/5eb7cdc121a5027db4b3521b/V_AGENTS_512x512_Reyna.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="DEVOUR" description="Enemies killed by Reyna leave behind Soul Orbs that last 3 seconds. INSTANTLY consume a nearby soul orb, rapidly healing for a short duration." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt9023447990141fa6/5eaf86c993284004997f7455/Reyna_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="DISMISS" description="INSTANTLY consume a nearby soul orb, becoming intangible for a short duration. If EMPRESS is active, also become invisible." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt3da3ec7139199d75/5eaf86c96d9972101344449d/Reyna_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="LEER" description="EQUIP an ethereal destructible eye. ACTIVATE to cast the eye a short distance forward. The eye will Nearsight all enemies who look at it." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt0505d97f22754664/5eaf86c986d5262e3346e06f/Reyna_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="EMPRESS" description="INSTANTLY enter a frenzy, increasing firing, equip and reload speed dramatically. Scoring a kill renews the duration." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt80479f64a107409f/5eaf86c973708a4058d4a997/Reyna_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
