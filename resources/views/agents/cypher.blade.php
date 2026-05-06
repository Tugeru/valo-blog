@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="CYPHER" 
        role="SENTINEL" 
        biography="The Moroccan information broker, Cypher is a one-man surveillance network who keeps tabs on the enemy's every move. No secret is safe." 
        image="https://media.valorant-api.com/agents/117ed9e3-49f3-6512-3ccf-0cada7e3823b/fullportrait.png" 
        background="https://media.valorant-api.com/agents/117ed9e3-49f3-6512-3ccf-0cada7e3823b/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="CYBER CAGE" description="INSTANTLY toss the cyber cage in front of Cypher. ACTIVATE to create a zone that blocks vision and slows enemies who pass through it." video="" icon="https://media.valorant-api.com/agents/117ed9e3-49f3-6512-3ccf-0cada7e3823b/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="SPYCAM" description="EQUIP a spycam. FIRE to place the spycam at the targeted location. RE-USE this ability to take control of the camera's view." video="" icon="https://media.valorant-api.com/agents/117ed9e3-49f3-6512-3ccf-0cada7e3823b/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="TRAPWIRE" description="EQUIP a trapwire. FIRE to place a destructible and invisible tripwire at the targeted location creating a line that spans between the placed location and the wall opposite." video="" icon="https://media.valorant-api.com/agents/117ed9e3-49f3-6512-3ccf-0cada7e3823b/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="NEURAL THEFT" description="INSTANTLY use on a dead enemy player in your crosshairs to reveal the location of all living enemy players." video="" icon="https://media.valorant-api.com/agents/117ed9e3-49f3-6512-3ccf-0cada7e3823b/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
