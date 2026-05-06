@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="MIKS" 
        role="CONTROLLER" 
        biography="Miks, the newest addition to the VALORANT protocol, has taken the controller role by storm. Hailing from Croatia, Miks is designed around 'amplifying' situations with sound-based utility." 
        image="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/fullportrait.png" 
        background="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SONIC BOOM" description="EQUIP a sonic emitter. FIRE to release a wave of sound that concusses enemies caught in its path." video="" icon="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="DECIBEL DROP" description="Creates a zone where enemy footsteps are amplified while teammate sounds are muffled, allowing for silent executes." video="" icon="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="RESONANCE" description="Release a pulse that heals teammates in range based on the sound intensity of recent combat." video="" icon="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="AMPLIFICATION" description="Massively amplify all friendly utility effects in a large area for a short duration." video="" icon="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
