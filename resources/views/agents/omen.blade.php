@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="OMEN" 
        role="CONTROLLER" 
        biography="A phantom of a memory, Omen hunts in the shadows. He renders enemies blind, teleports across the field, then lets paranoia take hold." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt4e579982774007b1/5eb7cdc671cd3d490c677e42/V_AGENTS_512x512_Omen.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="PARANOIA" description="Instantly fire a shadow projectile forward, briefly reducing the vision range of all players it touches." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt2264993f3503b221/5eaf8695d7f3fb40590a9316/Omen_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="DARK COVER" description="Equip a shadow orb and see its distance indicator. FIRE to throw the shadow orb to the marked location." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt433107062145e12f/5eaf869686d5262e3346e05d/Omen_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="SHROUDED STEP" description="Equip a shadow walk ability and see its distance indicator. FIRE to begin a brief channel, then teleport to the marked location." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt68e7ec8a0c242c7f/5eaf869586d5262e3346e059/Omen_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="FROM THE SHADOWS" description="Equip a tactical map. FIRE to begin teleporting to the selected location." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6361a6c0b53684a0/5eaf869573708a4058d4a98b/Omen_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
