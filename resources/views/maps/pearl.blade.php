@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="PEARL" 
        role="MAP INTEL" 
        biography="Attackers push down into the Defenders on this two-site map set in a vibrant, underwater city." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc80153839211d217/62a2653249051d4eb3f86e39/Pearl_Splash_v1.jpg" 
    />
    <x-dossier.map-intel 
        name="PEARL" 
        status="RESERVE" 
        description="Pearl is a straightforward two-site map without any major gimmicks like teleporters or doors. It relies on traditional lane control and mid-priority." 
        minimap="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltf54a50090333d456/62a264e130a08e4f620f5313/Pearl_Minimap.png" 
    />
@endsection
