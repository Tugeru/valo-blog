@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="DEADLOCK" 
        role="SENTINEL" 
        biography="Norwegian operative Deadlock deploys an array of cutting-edge nanowire to secure the battlefield from even the most lethal assault. No one escapes her vigilant watch, nor survives her unyielding ferocity." 
        image="https://media.valorant-api.com/agents/cc8b64c8-4b25-4ff9-6e7f-37b4da43d235/fullportrait.png" 
        background="https://media.valorant-api.com/agents/cc8b64c8-4b25-4ff9-6e7f-37b4da43d235/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SONIC SENSOR" description="EQUIP a Sonic Sensor. FIRE to deploy. The sensor monitors an area for enemies making sound. It concusses that area if footsteps, weapons fire, or significant noise are detected." video="" icon="https://media.valorant-api.com/agents/cc8b64c8-4b25-4ff9-6e7f-37b4da43d235/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="BARRIER MESH" description="EQUIP a Barrier Mesh disk. FIRE to throw forward. Upon landing, the disk generates barriers from the origin point that block character movement." video="" icon="https://media.valorant-api.com/agents/cc8b64c8-4b25-4ff9-6e7f-37b4da43d235/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="GRAVNET" description="EQUIP a GravNet grenade. FIRE to throw. ALT FIRE to underhand throw. The GravNet detonates upon landing, forcing any enemies caught within to crouch and move slowly." video="" icon="https://media.valorant-api.com/agents/cc8b64c8-4b25-4ff9-6e7f-37b4da43d235/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="ANNIHILATION" description="EQUIP a Nanowire Accelerator. FIRE to unleash a pulse of nanowires that captures the first enemy contacted. The captured enemy is pulled along a nanowire path and will die if they reach the end, unless they are freed." video="" icon="https://media.valorant-api.com/agents/cc8b64c8-4b25-4ff9-6e7f-37b4da43d235/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
