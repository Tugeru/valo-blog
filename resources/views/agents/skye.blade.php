@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="SKYE" 
        role="INITIATOR" 
        biography="Hailing from Australia, Skye and her band of beasts trail-blaze the way through hostile territory. With her creations hampering the enemy, and her power to heal others, the team is strongest and safest by Skye’s side." 
        image="https://media.valorant-api.com/agents/6f2a04ca-43e0-be17-7f36-b3908627744d/fullportrait.png" 
        background="https://media.valorant-api.com/agents/6f2a04ca-43e0-be17-7f36-b3908627744d/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="TRAILBLAZER" description="EQUIP a Tasmanian tiger trinket. FIRE to send out and take control of the predator. While in control, FIRE to leap forward, exploding in a concussive blast and damaging directly hit enemies." video="" icon="https://media.valorant-api.com/agents/6f2a04ca-43e0-be17-7f36-b3908627744d/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="GUIDING LIGHT" description="EQUIP a hawk trinket. FIRE to send it forward. HOLD FIRE to guide the hawk in the direction of your crosshair. RE-USE while the hawk is in flight to transform it into a flash." video="" icon="https://media.valorant-api.com/agents/6f2a04ca-43e0-be17-7f36-b3908627744d/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="REGROWTH" description="EQUIP a healing trinket. HOLD FIRE to channel, healing allies in range and line of sight. Can be reused until the healing pool is depleted. Skye cannot heal herself." video="" icon="https://media.valorant-api.com/agents/6f2a04ca-43e0-be17-7f36-b3908627744d/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="SEEKERS" description="EQUIP a Seeker trinket. FIRE to send out three Seekers to track down the three closest enemies. If a Seeker reaches its target, it nearsights them." video="" icon="https://media.valorant-api.com/agents/6f2a04ca-43e0-be17-7f36-b3908627744d/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
