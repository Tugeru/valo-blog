@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="KAY/O" 
        role="INITIATOR" 
        biography="KAY/O is a machine of war built for a single purpose: neutralizing radiants. His power to suppress enemy abilities dismantles the opposition’s capacity to fight back, securing him and his allies the ultimate edge." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6747209930743b1c/60c9183492589006095568f5/V_AGENTS_512x512_Kayo.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="FLASH/DRIVE" description="EQUIP a flash grenade. FIRE to throw. The flash grenade explodes after a short fuse, blinding anyone in line of sight." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blte437299a4c0709f1/60c9201e7401c1060980b151/KAYO_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="ZERO/POINT" description="EQUIP a suppression blade. FIRE to throw. The blade sticks to the first surface it hits, winds up, and suppresses anyone caught in the radius of the explosion." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt4952086e00174092/60c9201f80879e6006e8b4e7/KAYO_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="FRAG/MENT" description="EQUIP an explosive fragment. FIRE to throw. The fragment sticks to the floor and explodes multiple times, dealing near lethal damage at the center with each explosion." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt022137996386b0f1/60c9201ed00f910606b297a7/KAYO_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="NULL/CMD" description="INSTANTLY overload with polarized radianite energy that pulses from KAY/O in a massive radius. Enemies hit with pulses are suppressed for a short duration." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt223405b066606093/60c920207401c1060980b155/KAYO_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
