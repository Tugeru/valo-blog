@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="VYSE" 
        role="SENTINEL" 
        biography="The metallic mastermind Vyse isolates and terminates with cold efficiency. Deploying liquid metal traps and blinding barriers, she ensures that once an enemy enters her domain, they never leave." 
        image="https://media.valorant-api.com/agents/efba5359-4016-a1e5-7626-b1ae76895940/fullportrait.png" 
        background="https://media.valorant-api.com/agents/efba5359-4016-a1e5-7626-b1ae76895940/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SHEAR" description="EQUIP a filament of liquid metal. FIRE to place a hidden wall trap. When an enemy crosses, an indestructible wall rises from the ground behind them, isolating them for a short duration." video="" icon="https://media.valorant-api.com/agents/efba5359-4016-a1e5-7626-b1ae76895940/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="ARC ROSE" description="EQUIP an Arc Rose. Target a surface and FIRE to place a hidden Arc Rose, or ALT FIRE to place it through the surface. RE-USE to blind all players looking at it." video="" icon="https://media.valorant-api.com/agents/efba5359-4016-a1e5-7626-b1ae76895940/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="RAZORVINE" description="EQUIP a nest of liquid metal. FIRE to throw. Upon landing, the nest becomes invisible. ACTIVATE to sprawl a large nest of razor-sharp vines that slow and damage all players who move through them." video="" icon="https://media.valorant-api.com/agents/efba5359-4016-a1e5-7626-b1ae76895940/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="STEEL GARDEN" description="EQUIP a bramble of liquid metal. FIRE to send the metal sprawling from Vyse in a large radius. After a short delay, it jams the primary weapons of all enemies caught in the area." video="" icon="https://media.valorant-api.com/agents/efba5359-4016-a1e5-7626-b1ae76895940/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
