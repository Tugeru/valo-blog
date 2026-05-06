@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="BREEZE" 
        role="MAP INTEL" 
        biography="Take in the sights of historic ruins or seaside caves on this tropical paradise. But you'd better bring some cover." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt9978a8769357d605/607f2323c6f0da11500d00f7/Breeze_Splash.jpg" 
    />
    <x-dossier.map-intel 
        name="BREEZE" 
        status="RESERVE" 
        description="Breeze is a large, open map with long sightlines, making it a favorite for snipers. It features a one-way trapdoor and large bomb sites." 
        minimap="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt8561d36746881c15/608064a39f600f103567822d/Breeze_Minimap.png" 
    />
@endsection
