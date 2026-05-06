@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="PHOENIX" 
        role="DUELIST" 
        biography="Hailing from the U.K., Phoenix's star power shines through in his fighting style, igniting the battlefield with flash and flare." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt0ffa39d8d3d93478/5eb7cdc160702a4329522516/V_AGENTS_512x512_Phoenix.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="CURVEBALL" description="EQUIP a flare orb that takes a curving path and detonates shortly after throwing, blinding any player who sees it." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt69585970281b3152/5eaf86bd86d5262e3346e06b/Phoenix_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="HOT HANDS" description="EQUIP a fireball. FIRE to throw a fireball that explodes after a set amount of time or upon hitting the ground, creating a lingering fire zone that damages enemies and heals Phoenix." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt223405b066606093/5eaf86bc73708a4058d4a993/Phoenix_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="BLAZE" description="EQUIP a flame wall. FIRE to create a line of flame that moves forward, creating a wall of fire that blocks vision and damages players passing through it." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt79973685e82110c7/5eaf86bd93284004997f7451/Phoenix_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="RUN IT BACK" description="INSTANTLY place a marker at Phoenix's location. While this ability is active, dying or allowing the timer to expire will end this ability and recall Phoenix to this location with full health." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt66858273679e001a/5eaf86bd86d5262e3346e067/Phoenix_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
