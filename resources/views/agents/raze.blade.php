@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="RAZE" 
        role="DUELIST" 
        biography="Hailing from Brazil, Raze explodes onto the battlefield with big guns and heavy ordnance. With her blunt-force-trauma playstyle, she excels at flushing entrenched enemies and clearing tight spaces with a generous dose of 'boom'." 
        image="https://media.valorant-api.com/agents/f94c3b30-42be-e959-889c-5aa313dba261/fullportrait.png" 
        background="https://media.valorant-api.com/agents/f94c3b30-42be-e959-889c-5aa313dba261/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="BLAST PACK" description="INSTANTLY throw a Blast Pack that will stick to surfaces. RE-USE the ability after deployment to detonate, damaging and moving anything hit. Raze isn't damaged by this ability, but will take fall damage if launched high enough." video="" icon="https://media.valorant-api.com/agents/f94c3b30-42be-e959-889c-5aa313dba261/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="PAINT SHELLS" description="EQUIP a cluster grenade. FIRE to throw the grenade, which does damage and creates sub-munitions, each doing damage to anyone in their range." video="" icon="https://media.valorant-api.com/agents/f94c3b30-42be-e959-889c-5aa313dba261/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="BOOM BOT" description="EQUIP a Boom Bot. FIRE will deploy the bot, causing it to travel in a straight line on the ground, bouncing off walls. The Boom Bot will lock on to any enemies in its frontal cone and chase them, exploding for heavy damage if it reaches them." video="" icon="https://media.valorant-api.com/agents/f94c3b30-42be-e959-889c-5aa313dba261/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="SHOWSTOPPER" description="EQUIP a rocket launcher. FIRE shoots a rocket that does massive area damage on contact with anything." video="" icon="https://media.valorant-api.com/agents/f94c3b30-42be-e959-889c-5aa313dba261/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
