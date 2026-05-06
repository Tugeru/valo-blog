@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="BRIMSTONE" 
        role="CONTROLLER" 
        biography="Joining from the USA, Brimstone's orbital arsenal ensures his team always has the advantage. His ability to deliver utility precisely and safely make him the unmatched boots-on-the-ground commander." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt26f12f1163f9713c/5eb7cdc15dbca3354560d6a0/V_AGENTS_512x512_Brimstone.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="INCENDIARY" description="EQUIP an incendiary grenade launcher. FIRE to launch a grenade that detonates as it comes to a rest on the floor, creating a lingering fire zone that damages players." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt2210875e5264b38d/5eaf86551b33361021469e77/Brimstone_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="SKY SMOKE" description="EQUIP a tactical map. FIRE to set locations where Brimstone’s smoke clouds will land. ALT FIRE to confirm, launching long-lasting smoke clouds that block vision in the selected area." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt937a0a030732810a/5eaf86546d9972101344449b/Brimstone_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="STIM BEACON" description="EQUIP a stim beacon. FIRE to toss the stim beacon in front of Brimstone. Upon landing, the stim beacon will create a field that grants players Combat Stim and Speed Boost." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt79973685e82110c7/5eaf865486d5262e3346e05f/Brimstone_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="ORBITAL STRIKE" description="EQUIP a tactical map. FIRE to launch a lingering orbital strike laser at the selected location, dealing high damage-over-time to players caught in the area." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt223405b066606093/5eaf865593284004997f744d/Brimstone_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
