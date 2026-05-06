@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="ISO" 
        role="DUELIST" 
        biography="Chinese fixer for hire, Iso falls into a flow state to dismantle the opposition. Reconfiguring ambient energy into bulletproof protection, he advances with focus towards his next duel to the death." 
        image="https://media.valorant-api.com/agents/0e38b510-41a8-5780-5e8f-568b2a4f2d6c/fullportrait.png" 
        background="https://media.valorant-api.com/agents/0e38b510-41a8-5780-5e8f-568b2a4f2d6c/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="UNDERCUT" description="EQUIP a molecular bolt. FIRE to throw it forward, applying a brief FRAGILE to all players it touches. The bolt can pass through solid objects, including walls." video="" icon="https://media.valorant-api.com/agents/0e38b510-41a8-5780-5e8f-568b2a4f2d6c/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="DOUBLE TAP" description="START a focusing timer. Once completed, enter a flow state during which downed enemies you kill or damage generate an energy orb. Shooting this orb grants you a shield which absorbs one instance of damage from any source." video="" icon="https://media.valorant-api.com/agents/0e38b510-41a8-5780-5e8f-568b2a4f2d6c/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="CONTINGENCY" description="EQUIP to assemble molecular energy. FIRE to push an indestructible wall of energy forward that blocks bullets." video="" icon="https://media.valorant-api.com/agents/0e38b510-41a8-5780-5e8f-568b2a4f2d6c/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="KILL CONTRACT" description="EQUIP a column of energy. FIRE to hurl the column of energy across the battlefield, pulling you and the first enemy hit into a dual arena. You and your opponent duel to the death." video="" icon="https://media.valorant-api.com/agents/0e38b510-41a8-5780-5e8f-568b2a4f2d6c/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
