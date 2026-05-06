@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="BREACH" 
        role="INITIATOR" 
        biography="The bionic Swede Breach fires powerful, targeted kinetic blasts to aggressively clear a path through enemy ground. The damage and disruption he inflicts ensures no fight is ever fair." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt102d2a933062d98c/5eb7cdc1ad8026190fca7752/V_AGENTS_512x512_Breach.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="FLASHPOINT" description="EQUIP a blinding charge. FIRE the charge to set a fast-acting burst through the wall. The charge detonates to blind all players looking at it." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blte9910d54021262d1/5eaf863f6d99721013444499/Breach_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="FAULT LINE" description="EQUIP a seismic blast. HOLD FIRE to increase the distance. RELEASE to set off the quake, dazing all players in its zone and in a line up to the zone." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt0119777174692754/5eaf863f73708a4058d4a98b/Breach_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="AFTERSHOCK" description="EQUIP a fusion charge. FIRE the charge to set a slow-acting burst through the wall. The burst does heavy damage to anyone caught in its area." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6d5540306764516f/5eaf863f86d5262e3346e05b/Breach_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="ROLLING THUNDER" description="EQUIP a seismic charge. FIRE to send a cascading quake through all terrain in a large cone. The quake dazes and knocks up anyone caught in it." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc18a1a367468641a/5eaf863f93284004997f744f/Breach_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
