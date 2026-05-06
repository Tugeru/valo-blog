@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="HAVEN" 
        role="MAP INTEL" 
        biography="Beneath a forgotten monastery, a clamor emerges from rival Agents clashing to control three sites." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta45f65bc722f462a/5e9261a85942e059f1f0a28f/haven-bg.jpg" 
    />
    <x-dossier.map-intel 
        name="HAVEN" 
        status="ACTIVE DUTY" 
        description="Haven is unique in Valorant as it features three bomb sites (A, B, and C) instead of the traditional two. This forces the defending team to spread their resources thinner." 
        minimap="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta24151a66a7b749d/5ebb8062034078696803767c/Haven_Minimap_v2.png" 
    />
@endsection
