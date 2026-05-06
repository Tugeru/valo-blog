@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="WAYLAY" 
        role="DUELIST" 
        biography="Hailing from Thailand, Waylay is a light-based radiant who manipulates illumination to disorient her foes. Her high-speed mobility and blinding utility make her an unmatched entry fragger in the 2026 meta." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt5939575e9f80164c/61f9da20119934279b90875e/VAL_Neon_KeyArt_v1.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="PHOTON FLASH" description="EQUIP a prism of light. FIRE to throw the prism. It detonates upon hitting a surface, emitting a blinding flash of radiant light in a large radius." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt7204683070445f1b/61f9da2881335b1d52033c4f/VAL_Neon_FastLane_Video_v1.mp4" />
        <x-dossier.ability-card key="E" name="LIGHT SPEED" description="INSTANTLY channel Waylay's power for increased speed. While channeled, FIRE to dash in your movement direction. Waylay can fire her weapon accurately during the dash." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt022137996386b0f1/61f9da2977f6b215886d34b3/VAL_Neon_HighGear_Video_v1.mp4" />
        <x-dossier.ability-card key="C" name="HINDER" description="EQUIP a radiant burst. FIRE to throw the burst, which expands into a field of intense light on impact. Enemies inside the field are slowed and nearsighted." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta63138b8159b35b2/61f9da2a03d09a15998f48df/VAL_Neon_RelayBolt_Video_v1.mp4" />
        <x-dossier.ability-card key="X" name="RADIANT ILLUMINATION" description="OVERLOAD Waylay with light. While active, she gains a powerful laser beam primary fire and infinite dashes. Kills refresh the duration." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt46a6f691a5627255/61f9da2b81335b1d52033c53/VAL_Neon_Overdrive_Video_v1.mp4" />
    </x-dossier.ability-grid>
@endsection
