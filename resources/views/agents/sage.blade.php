@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="SAGE" 
        role="SENTINEL" 
        biography="The stronghold of China, Sage creates safety for herself and her team wherever she goes. Able to revive fallen friends and stave off forceful assaults, she provides a calm center to a hellish battlefield." 
        image="https://media.valorant-api.com/agents/569fdd95-4d10-43ab-ca70-79becc718b46/fullportrait.png" 
        background="https://media.valorant-api.com/agents/569fdd95-4d10-43ab-ca70-79becc718b46/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SLOW ORB" description="EQUIP a slowing orb. FIRE to throw a slowing orb forward that detonates upon landing, creating a lingering field that slows players caught within it." video="" icon="https://media.valorant-api.com/agents/569fdd95-4d10-43ab-ca70-79becc718b46/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="HEALING ORB" description="EQUIP a healing orb. FIRE with your crosshairs over a damaged ally to activate a heal-over-time on them. ALT FIRE while Sage is damaged to activate a self heal-over-time." video="" icon="https://media.valorant-api.com/agents/569fdd95-4d10-43ab-ca70-79becc718b46/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="BARRIER ORB" description="EQUIP a barrier orb. FIRE places a solid wall. ALT FIRE rotates the targeter." video="" icon="https://media.valorant-api.com/agents/569fdd95-4d10-43ab-ca70-79becc718b46/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="RESURRECTION" description="EQUIP a resurrection ability. FIRE with your crosshairs over a dead ally to begin resurrecting them. After a brief channel, the ally will be brought back to life with full health." video="" icon="https://media.valorant-api.com/agents/569fdd95-4d10-43ab-ca70-79becc718b46/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
