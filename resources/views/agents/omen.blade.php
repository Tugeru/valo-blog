@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="OMEN" 
        role="CONTROLLER" 
        biography="A phantom of a memory, Omen hunts in the shadows. He renders enemies blind, teleports across the field, then lets paranoia take hold as his foe scrambles to learn where he might strike next." 
        image="https://media.valorant-api.com/agents/8e253930-4c05-31dd-1b6c-968525494517/fullportrait.png" 
        background="https://media.valorant-api.com/agents/8e253930-4c05-31dd-1b6c-968525494517/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="PARANOIA" description="INSTANTLY fire a shadow projectile forward, briefly reducing the vision range of all players it touches. This projectile can pass straight through walls." video="" icon="https://media.valorant-api.com/agents/8e253930-4c05-31dd-1b6c-968525494517/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="DARK COVER" description="EQUIP a shadow orb and see its range indicator. FIRE to throw the shadow orb to the marked location, creating a long-lasting shadow sphere that blocks vision. Walls don't block the orb." video="" icon="https://media.valorant-api.com/agents/8e253930-4c05-31dd-1b6c-968525494517/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="SHROUDED STEP" description="EQUIP a shadow walk ability and see its range indicator. FIRE to begin a brief channel, then teleport to the marked location." video="" icon="https://media.valorant-api.com/agents/8e253930-4c05-31dd-1b6c-968525494517/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="FROM THE SHADOWS" description="EQUIP a tactical map. FIRE to begin teleporting to any location on the map. While teleporting, Omen will appear as a Shade that can be destroyed by an enemy to cancel his teleport." video="" icon="https://media.valorant-api.com/agents/8e253930-4c05-31dd-1b6c-968525494517/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
