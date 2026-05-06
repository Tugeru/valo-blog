@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="NEON" 
        role="DUELIST" 
        biography="Filipino Agent Neon surges forward at shocking speeds, discharging bursts of bio-electric radiance as fast as her body generates it. She races ahead to catch enemies off guard, then strikes them down quicker than a flash of lightning." 
        image="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/fullportrait.png" 
        background="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="RELAY BOLT" description="INSTANTLY throw an energy bolt that bounces once. Upon hitting a surface, the bolt electrifies the ground with a concussive blast." video="" icon="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="HIGH GEAR" description="INSTANTLY channel Neon’s power for increased speed. When charged, ALT FIRE to trigger an electric slide. Slide charge resets every two kills." video="" icon="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="FAST LANE" description="FIRE two energy lines forward on the ground that extend a short distance or until they hit a surface. The lines rise into walls of static electricity that block vision and damage enemies passing through them." video="" icon="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="OVERDRIVE" description="Unleash Neon’s full power and speed for a short duration. FIRE to channel the power into a deadly lightning beam with high movement accuracy." video="" icon="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
