@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="MIKS" 
        role="CONTROLLER" 
        biography="Agent 30, known as Miks, manipulates the battlefield through high-frequency acoustic waves and sonic resonance. A former audio engineer, they turn sound into a weapon and a shield." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta37ca024467ec80b/6560060965e69e8432b49877/Iso_Splash_Final_Web.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SONIC PULSE" description="EQUIP a sonic emitter. FIRE to throw it. It emits a deafening pulse on impact, reducing enemy audio clarity." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltd7d5272a3928e367/5eaf868773708a4058d4a987/Omen_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="DECIBEL DROP" description="Signature Ability. Create a localized sound dampening field that silences all footsteps and gunfire within its radius." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt433107062145e12f/5eaf869686d5262e3346e05d/Omen_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="ECHO WALL" description="FIRE to launch a moving wall of sound that blocks vision and deflects incoming projectiles." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt68e7ec8a0c242c7f/5eaf869586d5262e3346e059/Omen_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="RESONANCE" description="CHANNEL a massive acoustic blast that disorients and reveals all enemies in a wide forward cone." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6361a6c0b53684a0/5eaf869573708a4058d4a98b/Omen_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
