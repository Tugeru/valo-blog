@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="YORU" 
        role="DUELIST" 
        biography="Japanese native Yoru rips holes straight through reality to infiltrate enemy lines unseen. Using deception and aggression in equal measure, he get the drop on targets before they know where to look." 
        image="https://media.valorant-api.com/agents/7f94d92c-4234-0a36-9646-3a87eb8b5c89/fullportrait.png" 
        background="https://media.valorant-api.com/agents/7f94d92c-4234-0a36-9646-3a87eb8b5c89/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="BLINDSIDE" description="EQUIP to rip an unstable dimensional fragment from reality. FIRE to throw the fragment, activating a flash that detonates after colliding with a hard surface in world." video="" icon="https://media.valorant-api.com/agents/7f94d92c-4234-0a36-9646-3a87eb8b5c89/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="GATECRASH" description="EQUIP to harness a rift tether. FIRE to send the tether out forward. ALT FIRE to place a stationary tether. ACTIVATE to teleport to the tether's location." video="" icon="https://media.valorant-api.com/agents/7f94d92c-4234-0a36-9646-3a87eb8b5c89/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="FAKEOUT" description="EQUIP an echo that transforms into a mirror image of Yoru when activated. FIRE to instantly activate the mirror image and send it forward." video="" icon="https://media.valorant-api.com/agents/7f94d92c-4234-0a36-9646-3a87eb8b5c89/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="DIMENSIONAL DRIFT" description="EQUIP a mask that can see between dimensions. FIRE to drift into Yoru's dimension, unable to be affected or seen by enemies from the outside." video="" icon="https://media.valorant-api.com/agents/7f94d92c-4234-0a36-9646-3a87eb8b5c89/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
