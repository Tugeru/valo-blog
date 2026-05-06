@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="SOVA" 
        role="INITIATOR" 
        biography="Born from the eternal winter of Russia's tundra, Sova tracks, finds, and eliminates enemies with ruthless efficiency and precision." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltf11234f4775729b7/5eb7cdc9fae5e32ea1ad4a62/V_AGENTS_512x512_Sova.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SHOCK BOLT" description="EQUIP a bow with a shock bolt. FIRE to send the explosive bolt forward, detonating upon collision and damaging players nearby." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt69585970281b3152/5eaf86bd86d5262e3346e06b/Sova_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="RECON BOLT" description="EQUIP a bow with a recon bolt. FIRE to send the recon bolt forward, activating upon collision and revealing the location of nearby enemies." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt223405b066606093/5eaf86bc73708a4058d4a993/Sova_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="OWL DRONE" description="EQUIP an owl drone. FIRE to deploy and take control of movement of the drone." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt79973685e82110c7/5eaf86bd93284004997f7451/Sova_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="HUNTER'S FURY" description="EQUIP a bow with three long-range, wall-piercing energy blasts. FIRE to release an energy blast in a line in front of Sova." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt66858273679e001a/5eaf86bd86d5262e3346e067/Sova_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
