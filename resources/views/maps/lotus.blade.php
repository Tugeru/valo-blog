@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="LOTUS" 
        role="MAP INTEL" 
        biography="A mysterious structure housing an astral conduit has been discovered in India's Western Ghats." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt90e171b30689b788/63b8acb1248067110196726b/Lotus_Splash_1.jpg" 
    />
    <x-dossier.map-intel 
        name="LOTUS" 
        status="ACTIVE DUTY" 
        description="Lotus is the second three-site map in Valorant. It features rotating doors, a destructible wall, and a silent drop, adding layers of tactical complexity." 
        minimap="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt8351586711696016/63b8acc6248067110196726f/Lotus_Minimap.png" 
    />
@endsection
