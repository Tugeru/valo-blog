@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="CHAMBER" 
        role="SENTINEL" 
        biography="Well dressed and well armed, French weapons designer Chamber expels aggressors with deadly precision. He leverages his custom arsenal to hold the line and pick off enemies from afar, with a contingency built for every plan." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt82f808796196236b/6182f05167f1396f901174b5/V_AGENTS_512x512_Chamber.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="HEADHUNTER" description="ACTIVATE to equip a heavy pistol. ALT FIRE with the pistol equipped to aim down sights." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt223405b066606093/6182f3c39658f86915152869/VAL_Chamber_Q_Video_v1.mp4" />
        <x-dossier.ability-card key="E" name="RENDEZVOUS" description="PLACE a teleport anchor. While on the ground and in range of the anchor, REACTIVATE to quickly teleport to the anchor. The anchor can be picked up to be REDEPLOYED." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt4952086e00174092/6182f3c7e88b6406716075c0/VAL_Chamber_E_Video_v1.mp4" />
        <x-dossier.ability-card key="C" name="TRADEMARK" description="PLACE a trap that scans for enemies. When a visible enemy comes within range, the trap counts down and then destabilizes the terrain around them, creating a lingering field that slows players caught inside of it." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta389d38c62c3e34b/6182f3c09658f86915152861/VAL_Chamber_C_Video_v1.mp4" />
        <x-dossier.ability-card key="X" name="TOUR DE FORCE" description="ACTIVATE to summon a powerful, custom sniper rifle that will kill an enemy with any direct hit. Killing an enemy creates a lingering field that slows players caught inside of it." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt7209355440751998/6182f3c6490f230238e8ec4b/VAL_Chamber_X_Video_v1.mp4" />
    </x-dossier.ability-grid>
@endsection
