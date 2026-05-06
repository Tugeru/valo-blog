@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="LOTUS" 
        role="MAP INTEL" 
        biography="A mysterious structure housing an ancient conduit. This three-site map features rotating doors and destructible walls that create dynamic combat opportunities." 
        image="https://media.valorant-api.com/maps/2fe4ed3a-450a-948b-6d6b-e89a78e680a9/splash.png" 
    />
    <x-dossier.map-intel 
        name="LOTUS" 
        status="ACTIVE DUTY" 
        description="Lotus is the second map with three sites. Its unique door mechanics allow for fast rotations and unexpected flanking maneuvers." 
        minimap="https://media.valorant-api.com/maps/2fe4ed3a-450a-948b-6d6b-e89a78e680a9/displayicon.png" 
    />
@endsection
