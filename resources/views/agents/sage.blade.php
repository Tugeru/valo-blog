@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="SAGE" 
        role="SENTINEL" 
        biography="The stronghold of China, Sage creates safety for herself and her team wherever she goes. Able to revive fallen friends and stave off forceful assaults." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt8a627ec10b57f4f2/5eb7cdc65185c74d61f9d50a/V_AGENTS_512x512_Sage.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SLOW ORB" description="EQUIP a slowing orb. FIRE to throw a slowing orb forward that detonates upon landing, creating a lingering field that slows players caught inside." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt46b9794e66288593/5eaf86ab73708a4058d4a98f/Sage_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="HEALING ORB" description="EQUIP a healing orb. FIRE with your crosshairs over a damaged ally to activate a heal-over-time on them." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt565697669d273f76/5eaf86ab86d5262e3346e063/Sage_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="BARRIER ORB" description="EQUIP a barrier orb. FIRE places a solid wall. ALT FIRE rotates the targeter." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt769d6288647a7b8e/5eaf86ab93284004997f744d/Sage_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="RESURRECTION" description="EQUIP a resurrection ability. FIRE with your crosshairs over a dead ally to begin resurrecting them." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt193186259c771765/5eaf86aa73708a4058d4a987/Sage_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
