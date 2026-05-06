@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="HAVEN" 
        role="MAP INTEL" 
        biography="Beneath a forgotten monastery, a clamor of agents can be heard fighting for control of three sites. There’s more territory to control, but the extra defenders can also be used to push for aggressive retakes." 
        image="https://media.valorant-api.com/maps/2bee0dc9-4ffe-519b-1cbd-7fbe763a6047/splash.png" 
    />
    <x-dossier.map-intel 
        name="HAVEN" 
        status="ACTIVE DUTY" 
        description="Haven is the only map with three spike sites, making it a unique challenge for defenders to cover all entry points. Rotations are key on this map." 
        minimap="https://media.valorant-api.com/maps/2bee0dc9-4ffe-519b-1cbd-7fbe763a6047/displayicon.png" 
    />
@endsection
