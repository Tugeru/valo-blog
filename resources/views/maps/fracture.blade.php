@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="FRACTURE" 
        role="MAP INTEL" 
        biography="A top-secret research facility split apart by a failed radianite experiment. With defender spawn in the middle and attacker spawns on both sides, this map redefines tactical positioning." 
        image="https://media.valorant-api.com/maps/b529448b-4d60-346e-e89e-00a4c527a405/splash.png" 
    />
    <x-dossier.map-intel 
        name="FRACTURE" 
        status="ACTIVE DUTY" 
        description="Fracture features an H-shape layout with two distinct biomes. Attackers can pinch defenders from multiple directions, requiring high awareness." 
        minimap="https://media.valorant-api.com/maps/b529448b-4d60-346e-e89e-00a4c527a405/displayicon.png" 
    />
@endsection
