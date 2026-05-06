@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="BREACH" 
        role="INITIATOR" 
        biography="The bionic Swede Breach fires powerful, targeted kinetic blasts to aggressively clear a path through enemy ground. The damage and disruption he inflicts ensures no fight is ever fair." 
        image="https://media.valorant-api.com/agents/5f8d3a7f-467b-97f3-062c-13acf203c006/fullportrait.png" 
        background="https://media.valorant-api.com/agents/5f8d3a7f-467b-97f3-062c-13acf203c006/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="FLASHPOINT" description="EQUIP a blinding charge. FIRE the charge to set a fast-acting burst through the wall. The charge detonates to blind all players looking at it." video="" icon="https://media.valorant-api.com/agents/5f8d3a7f-467b-97f3-062c-13acf203c006/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="FAULT LINE" description="EQUIP a seismic blast. HOLD FIRE to increase the distance. RELEASE to set off the quake, dazing all players in its zone and in a line up to the zone." video="" icon="https://media.valorant-api.com/agents/5f8d3a7f-467b-97f3-062c-13acf203c006/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="AFTERSHOCK" description="EQUIP a fusion charge. FIRE the charge to set a slow-acting burst through the wall. The burst does heavy damage to anyone caught in its area." video="" icon="https://media.valorant-api.com/agents/5f8d3a7f-467b-97f3-062c-13acf203c006/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="ROLLING THUNDER" description="EQUIP a seismic charge. FIRE to send a cascading quake through all terrain in a large cone. The quake dazes and knocks up anyone caught in it." video="" icon="https://media.valorant-api.com/agents/5f8d3a7f-467b-97f3-062c-13acf203c006/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
