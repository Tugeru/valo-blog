@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="DEADLOCK" 
        role="SENTINEL" 
        biography="Norwegian operative Deadlock deploys an array of cutting-edge nanowire to secure the battlefield from even the most lethal assault. No one escapes her vigilant watch, nor survives her unyielding ferocity." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt369a4746f3320d75/6491763787eb33383e659227/V_AGENTS_512x512_Deadlock.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SONIC SENSOR" description="EQUIP a Sonic Sensor. FIRE to deploy. The sensor monitors an area for enemies making sound. It concusses that area if footsteps, weapons fire, or significant noise are detected." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc6149a4073d8a571/6491761669601d4a0480392f/Deadlock_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="BARRIER MESH" description="EQUIP a Barrier Mesh disk. FIRE to throw forward. Upon landing, the disk generates barriers from the origin point that block character movement." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc8d9e262c0792019/6491761543729e71c696e1a4/Deadlock_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="GRAVNET" description="EQUIP a GravNet grenade. FIRE to throw. ALT FIRE to underhand throw. The GravNet detonates upon landing, forcing any enemies caught within to crouch and move slowly." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc62eb78d93f773df/6491761635b2e9e6ec13a0ca/Deadlock_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="ANNIHILATION" description="EQUIP a Nanowire Accelerator. FIRE to unleash a pulse of nanowires that captures the first enemy contacted. The captured enemy is pulled along a nanowire path and will die if they reach the end, unless they are freed." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt56a93e3612502c38/649176182782e4430480373c/Deadlock_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
