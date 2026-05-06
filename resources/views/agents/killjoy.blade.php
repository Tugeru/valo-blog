@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="KILLJOY" 
        role="SENTINEL" 
        biography="The genius of Germany. Killjoy secures the battlefield with ease using her arsenal of inventions. If the damage from her gear doesn't stop her enemies, her robots' debuff will help make short work of them." 
        image="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/fullportrait.png" 
        background="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="ALARMBOT" description="EQUIP a covert Alarmbot. FIRE to deploy a bot that hunts down enemies that get in range. After reaching its target, the bot explodes, applying Vulnerable." video="" icon="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="TURRET" description="EQUIP a Turret. FIRE to deploy a turret that fires at enemies in a 180 degree cone." video="" icon="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="NANOSWARM" description="EQUIP a Nanoswarm grenade. FIRE to throw the grenade. Upon landing, the Nanoswarm goes covert. ACTIVATE the Nanoswarm to deploy a damaging swarm of nanobots." video="" icon="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="LOCKDOWN" description="EQUIP the Lockdown device. FIRE to deploy the device. After a long windup, the device Detains all enemies caught in the radius." video="" icon="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
