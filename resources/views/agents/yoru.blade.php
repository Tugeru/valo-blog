@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="YORU" 
        role="DUELIST" 
        biography="Japanese native Yoru rips holes straight through reality to infiltrate enemy lines unseen." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt559a2f4ca9cd136a/601c402e971485603714b629/V_AGENTS_512x512_Yoru.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="BLINDSIDE" description="EQUIP to rip an unstable dimensional fragment from reality. FIRE to throw the fragment, activating a flash that detonates after colliding with a hard surface in world." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta389d38c62c3e34b/601c42289658f86915152865/Yoru_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="GATECRASH" description="EQUIP to harness a rift tether. FIRE to send the tether out forward. ALT FIRE to place a stationary tether. ACTIVATE to teleport to the tether's location." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt4952086e00174092/601c422c608d08591f3d97f2/Yoru_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="FAKEOUT" description="EQUIP an echo that transforms into a mirror image of Yoru when activated. FIRE to instantly activate the mirror image and send it forward." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt4c92b95b8d277f74/61f9da2b490f230238e8ec43/VAL_Yoru_Fakeout_Video_v1.mp4" />
        <x-dossier.ability-card key="X" name="DIMENSIONAL DRIFT" description="EQUIP a mask that can see between dimensions. FIRE to drift into Yoru's dimension, unable to be affected or seen by enemies from the outside." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt36647466ca99a38f/601c4226d96700591df57187/Yoru_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
