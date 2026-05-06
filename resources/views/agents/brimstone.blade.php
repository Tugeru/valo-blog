@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="BRIMSTONE" 
        role="CONTROLLER" 
        biography="Joining from the USA, Brimstone's orbital arsenal ensures his team always has the advantage. His ability to deliver utility precisely and safely make him the unmatched boots-on-the-ground commander." 
        image="https://media.valorant-api.com/agents/9f0d8ba9-4140-b941-57d3-a7ad57c6b417/fullportrait.png" 
        background="https://media.valorant-api.com/agents/9f0d8ba9-4140-b941-57d3-a7ad57c6b417/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="INCENDIARY" description="EQUIP an incendiary grenade launcher. FIRE to launch a grenade that detonates as it comes to a rest on the floor, creating a lingering fire zone that damages players." video="" icon="https://media.valorant-api.com/agents/9f0d8ba9-4140-b941-57d3-a7ad57c6b417/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="SKY SMOKE" description="EQUIP a tactical map. FIRE to set locations where Brimstone’s smoke clouds will land. ALT FIRE to confirm, launching long-lasting smoke clouds that block vision in the selected area." video="" icon="https://media.valorant-api.com/agents/9f0d8ba9-4140-b941-57d3-a7ad57c6b417/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="STIM BEACON" description="EQUIP a stim beacon. FIRE to toss the stim beacon in front of Brimstone. Upon landing, the stim beacon will create a field that grants players Combat Stim and Speed Boost." video="" icon="https://media.valorant-api.com/agents/9f0d8ba9-4140-b941-57d3-a7ad57c6b417/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="ORBITAL STRIKE" description="EQUIP a tactical map. FIRE to launch a lingering orbital strike laser at the selected location, dealing high damage-over-time to players caught in the area." video="" icon="https://media.valorant-api.com/agents/9f0d8ba9-4140-b941-57d3-a7ad57c6b417/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
