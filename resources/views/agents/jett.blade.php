@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="JETT" 
        role="DUELIST" 
        biography="Representing her home country of South Korea, Jett's agile and evasive fighting style lets her take risks no one else can." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltceaa4cfc2c9f5833/5eb7cdc1b1f2047cf5c8fcc4/V_AGENTS_512x512_Jett.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="UPDRAFT" description="Instantly propel Jett high into the air." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt7f382a4663e2645f/5eaf86296d99721013444491/Jett_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="TAILWIND" description="Instantly propel Jett in the direction she is moving." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6d56d6d849549f2c/5eaf862973708a4058d4a983/Jett_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="CLOUDBURST" description="Instantly throw a projectile that expands into a brief vision-blocking cloud on impact." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6747209930743b1c/5eaf862986d5262e3346e053/Jett_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="BLADE STORM" description="Equip a set of highly accurate throwing knives that recharge on killing an opponent." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt56e1da0256d02d0a/5eaf862a93284004997f7447/Jett_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
