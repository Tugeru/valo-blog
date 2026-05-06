@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="ASTRA" 
        role="CONTROLLER" 
        biography="Ghanaian Agent Astra harnesses the energies of the cosmos to reshape battlefields to her whim. With full control of her astral form and a talent for deep strategic foresight, she’s always eons ahead of her enemy’s next move." 
        image="https://media.valorant-api.com/agents/41fb69c1-4189-7b37-f117-bcaf1e96f1bf/fullportrait.png" 
        background="https://media.valorant-api.com/agents/41fb69c1-4189-7b37-f117-bcaf1e96f1bf/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="NOVA PULSE" description="Place Stars in Astral Form (X). ACTIVATE a Star to detonate a Nova Pulse. The Nova Pulse charges briefly then strikes, concussing all players in its area." video="" icon="https://media.valorant-api.com/agents/41fb69c1-4189-7b37-f117-bcaf1e96f1bf/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="NEBULA" description="Place Stars in Astral Form (X). ACTIVATE a Star to transform it into a Nebula (smoke)." video="" icon="https://media.valorant-api.com/agents/41fb69c1-4189-7b37-f117-bcaf1e96f1bf/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="GRAVITY WELL" description="Place Stars in Astral Form (X). ACTIVATE a Star to create a Gravity Well. Players in the area are pulled toward the center before it explodes, making all players still trapped inside fragile." video="" icon="https://media.valorant-api.com/agents/41fb69c1-4189-7b37-f117-bcaf1e96f1bf/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="COSMIC DIVIDE" description="ACTIVATE to enter Astral Form where you can place Stars. Stars can be later activated to be transformed into a Nova Pulse, Nebula, or Gravity Well. When Cosmic Divide is charged, use secondary fire in Astral Form to begin aiming it, then primary fire to select two locations. An infinite Cosmic Divide connects the two points you select. Cosmic Divide blocks bullets and heavily dampens audio." video="" icon="https://media.valorant-api.com/agents/41fb69c1-4189-7b37-f117-bcaf1e96f1bf/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
