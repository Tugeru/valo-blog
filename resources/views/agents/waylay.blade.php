@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="WAYLAY" 
        role="DUELIST" 
        biography="Hailing from Thailand, Waylay is a light-based radiant who manipulates illumination to disorient her foes. Her high-speed mobility and blinding utility make her an unmatched entry fragger in the 2026 meta." 
        image="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/fullportrait.png" 
        background="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="PHOTON FLASH" description="EQUIP a prism of light. FIRE to throw the prism. It detonates upon hitting a surface, emitting a blinding flash of radiant light in a large radius." video="" icon="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="LIGHT SPEED" description="INSTANTLY channel Waylay's power for increased speed. While channeled, FIRE to dash in your movement direction. Waylay can fire her weapon accurately during the dash." video="" icon="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="HINDER" description="EQUIP a radiant burst. FIRE to throw the burst, which expands into a field of intense light on impact. Enemies inside the field are slowed and nearsighted." video="" icon="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="RADIANT ILLUMINATION" description="OVERLOAD Waylay with light. While active, she gains a powerful laser beam primary fire and infinite dashes. Kills refresh the duration." video="" icon="https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
