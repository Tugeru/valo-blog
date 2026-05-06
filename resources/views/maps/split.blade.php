@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="SPLIT" 
        role="MAP INTEL" 
        biography="If you want to go far, you’ll have to go up. A pair of sites split by an elevated center allows for rapid movement using two rope ascenders." 
        image="https://media.valorant-api.com/maps/d960549e-485c-e861-8d71-aa9d1aed12a2/splash.png" 
    />
    <x-dossier.map-intel 
        name="SPLIT" 
        status="ACTIVE DUTY" 
        description="Split is characterized by its verticality and narrow chokepoints. Controlling the mid high-ground is essential for both attackers and defenders." 
        minimap="https://media.valorant-api.com/maps/d960549e-485c-e861-8d71-aa9d1aed12a2/displayicon.png" 
    />
@endsection
