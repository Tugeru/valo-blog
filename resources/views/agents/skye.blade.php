@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="SKYE" 
        role="INITIATOR" 
        biography="Hailing from Australia, Skye and her band of beasts trail-blaze the way through hostile territory. With her creations hampering the enemy, and her power to heal others, the team is strongest and safest by Skye’s side." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt302fcb2b4cfb3905/5f973347f754710f76906262/V_AGENTS_512x512_Skye.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="TRAILBLAZER" description="EQUIP a Tasmanian tiger trinket. FIRE to send out and take control of the predator. While in control, FIRE to leap forward, exploding in a concussive blast and damaging directly hit enemies." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt56e1858a74136476/5f9737083070414902096417/Skye_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="GUIDING LIGHT" description="EQUIP a hawk trinket. FIRE to send it forward. HOLD FIRE to guide the hawk in the direction of your crosshair. RE-USE while the hawk is in flight to transform it into a flash." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltb21b8f04177d853e/5f9737082390820f4c9c4146/Skye_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="REGROWTH" description="EQUIP a healing trinket. HOLD FIRE to channel, healing allies in range and line of sight. Can be reused until the healing pool is depleted. Skye cannot heal herself." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt5768565a0e052063/5f973708f36214101e400037/Skye_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="SEEKERS" description="EQUIP a Seeker trinket. FIRE to send out three Seekers to track down the three closest enemies. If a Seeker reaches its target, it nearsights them." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt90772719119f864e/5f973708770b770e9a40552b/Skye_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
