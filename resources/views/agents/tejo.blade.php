@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="TEJO" 
        role="INITIATOR" 
        biography="A veteran intelligence consultant from Colombia, Tejo uses ballistic guidance and advanced drones to strip away enemy cover. His presence on the battlefield ensures that no threat remains hidden for long." 
        image="https://media.valorant-api.com/agents/320b2a48-4d9b-a075-30f1-1f93a9b638fa/fullportrait.png" 
        background="https://media.valorant-api.com/agents/320b2a48-4d9b-a075-30f1-1f93a9b638fa/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="GUIDED BOLT" description="EQUIP a ballistic crossbow. FIRE to launch a bolt that can be guided mid-air. Upon impact, it emits a sonar pulse that reveals enemies through walls." video="" icon="https://media.valorant-api.com/agents/320b2a48-4d9b-a075-30f1-1f93a9b638fa/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="RECON DRONE" description="EQUIP a high-altitude recon drone. FIRE to deploy and take control of the drone. While in control, FIRE to mark enemies with a tracking dart." video="" icon="https://media.valorant-api.com/agents/320b2a48-4d9b-a075-30f1-1f93a9b638fa/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="GUIDANCE SYSTEM" description="INSTANTLY activate Tejo's guidance system. For a short duration, all teammate projectiles gain a slight homing effect towards marked enemies." video="" icon="https://media.valorant-api.com/agents/320b2a48-4d9b-a075-30f1-1f93a9b638fa/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="BALLISTIC STRIKE" description="EQUIP a tactical map. FIRE to select a location for a devastating ballistic strike. After a short delay, the area is bombarded, dealing massive damage and concussing survivors." video="" icon="https://media.valorant-api.com/agents/320b2a48-4d9b-a075-30f1-1f93a9b638fa/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
