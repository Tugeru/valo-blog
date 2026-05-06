@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="TEJO" 
        role="INITIATOR" 
        biography="A veteran intelligence consultant from Colombia, Tejo uses ballistic guidance and advanced drones to strip away enemy cover. His presence on the battlefield ensures that no threat remains hidden for long." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt102d2a933062d98c/5eb7cdc1ad8026190fca7752/V_AGENTS_512x512_Breach.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="GUIDED BOLT" description="EQUIP a ballistic crossbow. FIRE to launch a bolt that can be guided mid-air. Upon impact, it emits a sonar pulse that reveals enemies through walls." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blte9910d54021262d1/5eaf863f6d99721013444499/Breach_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="RECON DRONE" description="EQUIP a high-altitude recon drone. FIRE to deploy and take control of the drone. While in control, FIRE to mark enemies with a tracking dart." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt0119777174692754/5eaf863f73708a4058d4a98b/Breach_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="GUIDANCE SYSTEM" description="INSTANTLY activate Tejo's guidance system. For a short duration, all teammate projectiles gain a slight homing effect towards marked enemies." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6d5540306764516f/5eaf863f86d5262e3346e05b/Breach_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="BALLISTIC STRIKE" description="EQUIP a tactical map. FIRE to select a location for a devastating ballistic strike. After a short delay, the area is bombarded, dealing massive damage and concussing survivors." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc18a1a367468641a/5eaf863f93284004997f744f/Breach_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
