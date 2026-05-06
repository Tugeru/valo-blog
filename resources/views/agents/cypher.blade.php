@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="CYPHER" 
        role="SENTINEL" 
        biography="The Moroccan information broker, Cypher is a one-man surveillance network who keeps tabs on the enemy's every move. No secret is safe." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt158572da37534167/5eb7cdc2ec67f4223203923a/V_AGENTS_512x512_Cypher.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="CYBER CAGE" description="INSTANTLY toss the cyber cage in front of Cypher. ACTIVATE to create a zone that blocks vision and slows enemies who pass through it." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt9f9a27c9f370e060/5eaf8657d7f3fb40590a930a/Cypher_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="SPYCAM" description="EQUIP a spycam. FIRE to place the spycam at the targeted location. RE-USE this ability to take control of the camera's view." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt72750e24ec173660/5eaf865786d5262e3346e057/Cypher_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="TRAPWIRE" description="EQUIP a trapwire. FIRE to place a destructible and invisible tripwire at the targeted location creating a line that spans between the placed location and the wall opposite." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt219278297495b45f/5eaf865773708a4058d4a987/Cypher_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="NEURAL THEFT" description="INSTANTLY use on a dead enemy player in your crosshairs to reveal the location of all living enemy players." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt011681a942d45763/5eaf8657d7f3fb40590a930e/Cypher_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
