@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="JETT" 
        role="DUELIST" 
        biography="Representing her home country of South Korea, Jett's agile and evasive fighting style lets her take risks no one else can." 
        image="https://media.valorant-api.com/agents/add6443a-41bd-e414-f6ad-e58d267f4e95/fullportrait.png" 
        background="https://media.valorant-api.com/agents/add6443a-41bd-e414-f6ad-e58d267f4e95/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="UPDRAFT" description="Instantly propel Jett high into the air." video="" icon="https://media.valorant-api.com/agents/add6443a-41bd-e414-f6ad-e58d267f4e95/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="TAILWIND" description="Instantly propel Jett in the direction she is moving." video="" icon="https://media.valorant-api.com/agents/add6443a-41bd-e414-f6ad-e58d267f4e95/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="CLOUDBURST" description="Instantly throw a projectile that expands into a brief vision-blocking cloud on impact." video="" icon="https://media.valorant-api.com/agents/add6443a-41bd-e414-f6ad-e58d267f4e95/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="BLADE STORM" description="Equip a set of highly accurate throwing knives that recharge on killing an opponent." video="" icon="https://media.valorant-api.com/agents/add6443a-41bd-e414-f6ad-e58d267f4e95/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
