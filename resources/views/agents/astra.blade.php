@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="ASTRA" 
        role="CONTROLLER" 
        biography="Ghanaian Agent Astra harnesses the energies of the cosmos to reshape battlefields to her whim. With full control of her astral form and a talent for deep strategic foresight, she’s always eons ahead of her enemy’s next move." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt559a2f4ca9cd136a/603c0762cf45391060938f38/V_AGENTS_512x512_Astra.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="NOVA PULSE" description="Place Stars in Astral Form (X). ACTIVATE a Star to detonate a Nova Pulse. The Nova Pulse charges briefly then strikes, concussing all players in its area." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt7209355440751998/603c10b7f69da41059f7d825/Astra_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="NEBULA" description="Place Stars in Astral Form (X). ACTIVATE a Star to transform it into a Nebula (smoke)." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt4952086e00174092/603c10b42782e4430480371a/Astra_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="GRAVITY WELL" description="Place Stars in Astral Form (X). ACTIVATE a Star to create a Gravity Well. Players in the area are pulled toward the center before it explodes, making all players still trapped inside fragile." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta389d38c62c3e34b/603c10b27401c1060980b135/Astra_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="COSMIC DIVIDE" description="ACTIVATE to enter Astral Form where you can place Stars. Stars can be later activated to be transformed into a Nova Pulse, Nebula, or Gravity Well. When Cosmic Divide is charged, use secondary fire in Astral Form to begin aiming it, then primary fire to select two locations. An infinite Cosmic Divide connects the two points you select. Cosmic Divide blocks bullets and heavily dampens audio." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt223405b066606093/603c10ba9658f8691515284f/Astra_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
