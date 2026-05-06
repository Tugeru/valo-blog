@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="KAY/O" 
        role="INITIATOR" 
        biography="KAY/O is a machine of war built for a single purpose: neutralizing radiants. His power to suppress enemy abilities dismantles the opposition’s capacity to fight back, securing him and his allies the ultimate edge." 
        image="https://media.valorant-api.com/agents/601dbbe7-43ce-be57-2a40-4abd24953621/fullportrait.png" 
        background="https://media.valorant-api.com/agents/601dbbe7-43ce-be57-2a40-4abd24953621/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="FLASH/DRIVE" description="EQUIP a flash grenade. FIRE to throw. The flash grenade explodes after a short fuse, blinding anyone in line of sight." video="" icon="https://media.valorant-api.com/agents/601dbbe7-43ce-be57-2a40-4abd24953621/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="ZERO/POINT" description="EQUIP a suppression blade. FIRE to throw. The blade sticks to the first surface it hits, winds up, and suppresses anyone caught in the radius of the explosion." video="" icon="https://media.valorant-api.com/agents/601dbbe7-43ce-be57-2a40-4abd24953621/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="FRAG/MENT" description="EQUIP an explosive fragment. FIRE to throw. The fragment sticks to the floor and explodes multiple times, dealing near lethal damage at the center with each explosion." video="" icon="https://media.valorant-api.com/agents/601dbbe7-43ce-be57-2a40-4abd24953621/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="NULL/CMD" description="INSTANTLY overload with polarized radianite energy that pulses from KAY/O in a massive radius. Enemies hit with pulses are suppressed for a short duration." video="" icon="https://media.valorant-api.com/agents/601dbbe7-43ce-be57-2a40-4abd24953621/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
