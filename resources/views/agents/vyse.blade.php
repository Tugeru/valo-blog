@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="VYSE" 
        role="SENTINEL" 
        biography="The metallic mastermind Vyse isolates and terminates with cold efficiency. Deploying liquid metal traps and blinding barriers, she ensures that once an enemy enters her domain, they never leave." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6d5540306764516f/66ce36e643729e71c696e1a8/Agent_Vyse_Key_Art_512x512.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SHEAR" description="EQUIP a filament of liquid metal. FIRE to place a hidden wall trap. When an enemy crosses, an indestructible wall rises from the ground behind them, isolating them for a short duration." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc62eb78d93f773df/66ce36eb2782e4430480373c/Vyse_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="ARC ROSE" description="EQUIP an Arc Rose. Target a surface and FIRE to place a hidden Arc Rose, or ALT FIRE to place it through the surface. RE-USE to blind all players looking at it." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc8d9e262c0792019/66ce36ee4a1d044238e8200e/Vyse_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="RAZORVINE" description="EQUIP a nest of liquid metal. FIRE to throw. Upon landing, the nest becomes invisible. ACTIVATE to sprawl a large nest of razor-sharp vines that slow and damage all players who move through them." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc6149a4073d8a571/66ce36f1d00f910606b297af/Vyse_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="STEEL GARDEN" description="EQUIP a bramble of liquid metal. FIRE to send the metal sprawling from Vyse in a large radius. After a short delay, it jams the primary weapons of all enemies caught in the area." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt56a93e3612502c38/66ce36f4f9850d426372d8e8/Vyse_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
