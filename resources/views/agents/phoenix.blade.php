@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="PHOENIX" 
        role="DUELIST" 
        biography="Hailing from the U.K., Phoenix's star power shines through in his fighting style, igniting the battlefield with flash and flare. Whether he's got backup or not, he'll rush into a fight on his own terms." 
        image="https://media.valorant-api.com/agents/eb93336a-449b-9c1b-0a54-a891f7921d69/fullportrait.png" 
        background="https://media.valorant-api.com/agents/eb93336a-449b-9c1b-0a54-a891f7921d69/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="CURVEBALL" description="EQUIP a flare orb that takes a curving path and detonates shortly after throwing. FIRE to curve the flare orb to the left, detonating and blinding any player who sees the orb. ALT FIRE to curve the flare orb to the right." video="" icon="https://media.valorant-api.com/agents/eb93336a-449b-9c1b-0a54-a891f7921d69/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="HOT HANDS" description="EQUIP a fireball. FIRE to throw a fireball that explodes after a set amount of time or upon hitting the ground, creating a lingering fire zone that damages enemies and heals Phoenix." video="" icon="https://media.valorant-api.com/agents/eb93336a-449b-9c1b-0a54-a891f7921d69/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="BLAZE" description="EQUIP a flame wall. FIRE to create a line of flame that moves forward, creating a wall of fire that blocks vision and damages players passing through it. HOLD FIRE to bend the wall in the direction of your crosshair." video="" icon="https://media.valorant-api.com/agents/eb93336a-449b-9c1b-0a54-a891f7921d69/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="RUN IT BACK" description="INSTANTLY place a marker at Phoenix’s location. While this ability is active, dying or allowing the timer to expire will end this ability and recall Phoenix to this location with full health." video="" icon="https://media.valorant-api.com/agents/eb93336a-449b-9c1b-0a54-a891f7921d69/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
