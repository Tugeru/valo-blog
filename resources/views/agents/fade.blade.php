@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="FADE" 
        role="INITIATOR" 
        biography="Turkish bounty hunter Fade unleashes the power of raw nightmare to seize enemy secrets. Attuned with terror itself, she hunts targets and reveals their deepest fears - before crushing them in the dark." 
        image="https://media.valorant-api.com/agents/dade69b4-4f5a-8528-247b-219e5a1facd6/fullportrait.png" 
        background="https://media.valorant-api.com/agents/dade69b4-4f5a-8528-247b-219e5a1facd6/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SEIZE" description="EQUIP an orb of nightmare ink. FIRE to throw the orb which will plummet to the ground after a set amount of time. Upon hitting the ground, the ink will explode and create a zone in which enemies who are caught in it cannot escape the zone by normal means." video="" icon="https://media.valorant-api.com/agents/dade69b4-4f5a-8528-247b-219e5a1facd6/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="HAUNT" description="EQUIP a haunting entity. FIRE to throw the entity which will plummet to the ground after a set amount of time. Upon hitting the ground, the entity will reveal the location of enemies caught in its line of sight." video="" icon="https://media.valorant-api.com/agents/dade69b4-4f5a-8528-247b-219e5a1facd6/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="PROWLER" description="EQUIP a Prowler. FIRE will send the Prowler out, causing it to travel in a straight line. The Prowler will lock onto any enemies or trails in their frontal vision cone and chase them, nearsighting them if it reaches them." video="" icon="https://media.valorant-api.com/agents/dade69b4-4f5a-8528-247b-219e5a1facd6/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="NIGHTFALL" description="EQUIP the power of Nightmare. FIRE to send out a wave of nightmare energy that can traverse through walls. The energy reveals enemies as well as deafens and decays them." video="" icon="https://media.valorant-api.com/agents/dade69b4-4f5a-8528-247b-219e5a1facd6/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
