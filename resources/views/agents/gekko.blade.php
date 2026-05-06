@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="GEKKO" 
        role="INITIATOR" 
        biography="Gekko the Angeleno leads a tight-knit crew of calamitous creatures. His buddies bound forward, scattering enemies out of the way, with Gekko chasing them down to regroup and go again." 
        image="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/fullportrait.png" 
        background="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="WINGMAN" description="EQUIP Wingman. FIRE to send Wingman forward looking for enemies. Wingman fires a concussive blast at the first enemy he sees. ALT FIRE when targeting a Spike site or planted Spike to have Wingman plant or defuse the Spike." video="" icon="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="DIZZY" description="EQUIP Dizzy. FIRE to send Dizzy soaring forward through the air. Dizzy charges up and then fires plasma blasts at enemies in her line of sight. Enemies hit by her plasma are blinded." video="" icon="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="MOSH PIT" description="EQUIP Mosh. FIRE to throw Mosh like a grenade. ALT FIRE to throw underhand. Upon landing Mosh duplicates across a large area then after a short delay explodes." video="" icon="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="THRASH" description="EQUIP Thrash. FIRE to link with Thrash’s mind and steer her through enemy territory. ACTIVATE to lunge forward and explode, detaining any enemies in a small radius." video="" icon="https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
