@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="NEON" 
        role="DUELIST" 
        biography="Filipino Agent Neon surges forward at shocking speeds, discharging bursts of bio-electric radiance as fast as her body generates it." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt03704b2a8f88a8d1/61d4cd1028712e1286a98218/V_AGENTS_512x512_Neon.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="RELAY BOLT" description="Instantly throw an energy bolt that bounces once. Upon hitting a surface, the bolt electrifies the ground with a concussive blast." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt3f1917f168f1f7e3/61d8a6e829377a06691459a9/Neon_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="HIGH GEAR" description="Instantly channel Neon's power for increased speed. When charged, ALT FIRE to trigger an electric slide." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt49b51f0877a5da9f/61d8a6fc690d7967906d337f/Neon_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="FAST LANE" description="FIRE two energy lines forward on the ground that extend a short distance or until they hit a surface. The lines rise into walls of static electricity." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blte96924f7f2594a96/61d8a706690d7967906d3383/Neon_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="OVERDRIVE" description="Unleash Neon's full power and speed for a short duration. FIRE to channel the power into a deadly lightning beam." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt4630560a8b98b584/61d8a7102b48991295b9a89d/Neon_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
