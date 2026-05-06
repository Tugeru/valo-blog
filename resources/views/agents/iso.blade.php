@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="ISO" 
        role="DUELIST" 
        biography="Chinese fixer for hire, Iso falls into a flow state to dismantle the opposition. Reconfiguring ambient energy into bulletproof protection, he advances with focus towards his next duel to the death." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt0223700b08006842/6533036a187d7b925b440854/Agent_Iso_Key_Art_512x512.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="UNDERCUT" description="EQUIP a molecular bolt. FIRE to throw it forward, applying a brief FRAGILE to all players it touches. The bolt can pass through solid objects, including walls." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc62eb78d93f773df/6533037235b2e9e6ec13a0c6/Iso_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="DOUBLE TAP" description="START a focusing timer. Once completed, enter a flow state during which downed enemies you kill or damage generate an energy orb. Shooting this orb grants you a shield which absorbs one instance of damage from any source." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc8d9e262c0792019/65330377045f44810a955743/Iso_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="CONTINGENCY" description="EQUIP to assemble molecular energy. FIRE to push an indestructible wall of energy forward that blocks bullets." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc6149a4073d8a571/6533037d045f44810a955747/Iso_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="KILL CONTRACT" description="EQUIP a column of energy. FIRE to hurl the column of energy across the battlefield, pulling you and the first enemy hit into a dual arena. You and your opponent duel to the death." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt56a93e3612502c38/6533038169601d4a0480393d/Iso_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
