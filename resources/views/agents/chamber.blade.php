@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="CHAMBER" 
        role="SENTINEL" 
        biography="Well dressed and well armed, French weapons designer Chamber expels aggressors with deadly precision. He leverages his custom arsenal to hold the line and pick off enemies from afar, with a contingency built for every plan." 
        image="https://media.valorant-api.com/agents/22697a3d-45bf-8dd7-4fec-84a9e28c69d7/fullportrait.png" 
        background="https://media.valorant-api.com/agents/22697a3d-45bf-8dd7-4fec-84a9e28c69d7/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="HEADHUNTER" description="ACTIVATE to equip a heavy pistol. ALT FIRE with the pistol equipped to aim down sights." video="" icon="https://media.valorant-api.com/agents/22697a3d-45bf-8dd7-4fec-84a9e28c69d7/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="RENDEZVOUS" description="PLACE a teleport anchor. While on the ground and in range of the anchor, REACTIVATE to quickly teleport to the anchor. The anchor can be picked up to be REDEPLOYED." video="" icon="https://media.valorant-api.com/agents/22697a3d-45bf-8dd7-4fec-84a9e28c69d7/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="TRADEMARK" description="PLACE a trap that scans for enemies. When a visible enemy comes within range, the trap counts down and then destabilizes the terrain around them, creating a lingering field that slows players caught inside of it." video="" icon="https://media.valorant-api.com/agents/22697a3d-45bf-8dd7-4fec-84a9e28c69d7/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="TOUR DE FORCE" description="ACTIVATE to summon a powerful, custom sniper rifle that will kill an enemy with any direct hit. Killing an enemy creates a lingering field that slows players caught inside of it." video="" icon="https://media.valorant-api.com/agents/22697a3d-45bf-8dd7-4fec-84a9e28c69d7/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
