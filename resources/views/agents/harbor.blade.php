@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="HARBOR" 
        role="CONTROLLER" 
        biography="Hailing from India’s coast, Harbor storms the field wielding ancient technology with dominion over water. He unleashes frothing rapids and crushing waves to shield his allies and pummel those that oppose him." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt438992e805544772/634707297e59670678f5a6b0/V_AGENTS_512x512_Harbor.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="COVE" description="EQUIP a sphere of shielding water. FIRE to throw. ALT FIRE to underhand throw. Upon impacting the ground, spawn a water shield that blocks bullets." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6d5540306764516f/6347101859349e1075727042/Harbor_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="HIGH TIDE" description="EQUIP a wall of water. FIRE to send the water forward along the ground. HOLD FIRE to guide the water in the direction of your crosshair, passing through world geometry, spawning a wall of water along the guided path." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt7204683070445f1b/63471017e88b6406716075bc/Harbor_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="CASCADE" description="EQUIP a wave of water. FIRE to send the wave rolling forward and through walls. RE-USE to stop the wave from moving further. Players hit are slowed." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6747209930743b1c/6347101569601d4a04803923/Harbor_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="RECKONING" description="EQUIP the full power of your Artifact. FIRE to summon a geyser pool on the ground. Enemy players in the area are targeted by successive geyser strikes. Players caught within a strike are dazed." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt56a93e3612502c38/63471014e88b6406716075b8/Harbor_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
