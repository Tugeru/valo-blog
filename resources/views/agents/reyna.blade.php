@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="REYNA" 
        role="DUELIST" 
        biography="Forged in the heart of Mexico, Reyna dominates single combat, popping off with every kill she scores. Her capability is only limited by her raw skill, making her highly dependent on performance." 
        image="https://media.valorant-api.com/agents/a3bfb853-43b2-7238-a4f1-ad90e9e46bcc/fullportrait.png" 
        background="https://media.valorant-api.com/agents/a3bfb853-43b2-7238-a4f1-ad90e9e46bcc/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="DEVOUR" description="Enemies killed by Reyna leave behind Soul Orbs that last 3 seconds. INSTANTLY consume a nearby soul orb, rapidly healing for a short duration. Health gained through this skill exceeding 100 will decay over time." video="" icon="https://media.valorant-api.com/agents/a3bfb853-43b2-7238-a4f1-ad90e9e46bcc/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="DISMISS" description="INSTANTLY consume a nearby soul orb, becoming intangible for a short duration. If EMPRESS is active, also become invisible." video="" icon="https://media.valorant-api.com/agents/a3bfb853-43b2-7238-a4f1-ad90e9e46bcc/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="LEER" description="EQUIP an ethereal destructible eye. ACTIVATE to cast the eye a short distance forward. The eye will Nearsight all enemies who look at it." video="" icon="https://media.valorant-api.com/agents/a3bfb853-43b2-7238-a4f1-ad90e9e46bcc/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="EMPRESS" description="INSTANTLY enter a frenzy, increasing firing, equip and reload speed dramatically. Scoring a kill renews the duration." video="" icon="https://media.valorant-api.com/agents/a3bfb853-43b2-7238-a4f1-ad90e9e46bcc/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
