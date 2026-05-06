@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="PEARL" 
        role="MAP INTEL" 
        biography="An underwater city on the brink of collapse. Pearl features two sites and a complex mid section that rewards careful positioning and utility usage." 
        image="https://media.valorant-api.com/maps/fd267378-4d1d-484f-ff52-77821ed10dc2/splash.png" 
    />
    <x-dossier.map-intel 
        name="PEARL" 
        status="ACTIVE DUTY" 
        description="Pearl is a traditional two-site map without teleporters or ropes. It focuses on pure tactical gunplay and site execution." 
        minimap="https://media.valorant-api.com/maps/fd267378-4d1d-484f-ff52-77821ed10dc2/displayicon.png" 
    />
@endsection
