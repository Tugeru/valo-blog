@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="ASCENT" 
        role="MAP INTEL" 
        biography="An open playground for small wars of position and attrition, Ascent features two sites that can be fortified by operable blast doors." 
        image="https://media.valorant-api.com/maps/7eaecc1b-4337-bbf6-6ab9-04b8f06b3319/splash.png" 
    />
    <x-dossier.map-intel 
        name="ASCENT" 
        status="ACTIVE DUTY" 
        description="Ascent is set in Italy and features a large, open middle area that both teams can skirmish over. Mid is a hotspot for utility usage and controlling it often determines the round outcome." 
        minimap="https://media.valorant-api.com/maps/7eaecc1b-4337-bbf6-6ab9-04b8f06b3319/displayicon.png" 
    />
@endsection
