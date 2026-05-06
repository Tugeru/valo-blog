@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="BREEZE" 
        role="MAP INTEL" 
        biography="Take in the sights of historic ruins or seaside caves on this tropical paradise. But bring some cover, because you’ll need it for the wide-open spaces and long-range engagements." 
        image="https://media.valorant-api.com/maps/2fb9a4fd-47b8-4e7d-a969-74b4046ebd53/splash.png" 
    />
    <x-dossier.map-intel 
        name="BREEZE" 
        status="ACTIVE DUTY" 
        description="Breeze is a large map with long sightlines, favoring marksman rifles and sniper play. Controlling the central courtyard is a major strategic goal." 
        minimap="https://media.valorant-api.com/maps/2fb9a4fd-47b8-4e7d-a969-74b4046ebd53/displayicon.png" 
    />
@endsection
