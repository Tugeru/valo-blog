@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="FRACTURE" 
        role="MAP INTEL" 
        biography="A top-secret research facility split apart by a failed radianite experiment." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltdb255a80521e16f3/612984920239ca092a061803/Fracture_Splash_1.jpg" 
    />
    <x-dossier.map-intel 
        name="FRACTURE" 
        status="RESERVE" 
        description="Fracture features an H-shape layout with the defending team spawning in the middle. Attackers can approach from both sides of the map using long ziplines." 
        minimap="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt90772097330776b9/61329c3664d47d4e414c2748/Fracture_Minimap.png" 
    />
@endsection
