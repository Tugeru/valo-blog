@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="ASCENT" 
        role="MAP INTEL" 
        biography="An open playground for small wars of position and attrition, Ascent features two sites that can be fortified by operable blast doors." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt668f9a2e836262b9/5ee2bd0179a61e137f884a44/ascent_1.jpg" 
    />
    <x-dossier.map-intel 
        name="ASCENT" 
        status="ACTIVE DUTY" 
        description="Ascent is set in Italy and features a large, open middle area that both teams can skirmish over. Mid is a hotspot for utility usage and controlling it often determines the round outcome." 
        minimap="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt12c140409a8a7056/5ebb810e9f067d266e7f2255/Ascent_Minimap_v2.png" 
    />
@endsection
