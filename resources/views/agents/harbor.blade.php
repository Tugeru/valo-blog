@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="HARBOR" 
        role="CONTROLLER" 
        biography="Hailing from India’s coast, Harbor storms the field wielding ancient technology with dominion over water. He unleashes frothing rapids and crushing waves to shield his allies and pummel those that oppose him." 
        image="https://media.valorant-api.com/agents/95b78ed7-4637-86d9-7e41-71ba8c293152/fullportrait.png" 
        background="https://media.valorant-api.com/agents/95b78ed7-4637-86d9-7e41-71ba8c293152/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="COVE" description="EQUIP a sphere of shielding water. FIRE to throw. ALT FIRE to underhand throw. Upon impacting the ground, spawn a water shield that blocks bullets." video="" icon="https://media.valorant-api.com/agents/95b78ed7-4637-86d9-7e41-71ba8c293152/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="HIGH TIDE" description="EQUIP a wall of water. FIRE to send the water forward along the ground. HOLD FIRE to guide the water in the direction of your crosshair, passing through world geometry, spawning a wall of water along the guided path." video="" icon="https://media.valorant-api.com/agents/95b78ed7-4637-86d9-7e41-71ba8c293152/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="CASCADE" description="EQUIP a wave of water. FIRE to send the wave rolling forward and through walls. RE-USE to stop the wave from moving further. Players hit are slowed." video="" icon="https://media.valorant-api.com/agents/95b78ed7-4637-86d9-7e41-71ba8c293152/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="RECKONING" description="EQUIP the full power of your Artifact. FIRE to summon a geyser pool on the ground. Enemy players in the area are targeted by successive geyser strikes. Players caught within a strike are dazed." video="" icon="https://media.valorant-api.com/agents/95b78ed7-4637-86d9-7e41-71ba8c293152/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
