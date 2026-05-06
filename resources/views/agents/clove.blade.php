@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="CLOVE" 
        role="CONTROLLER" 
        biography="Scottish troublemaker Clove makes mischief for enemies in both the heat of combat and the cold of death. The young Immortal keeps foes guessing, even from beyond the grave, their return to the living only ever a moment away." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt2210875e5264b38d/65f49d2643729e71c696e1a0/Agent_Clove_Key_Art_512x512.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="MEDDLE" description="EQUIP a fragment of immortality essence. FIRE to throw the fragment, which erupts after a short delay and briefly decays all targets caught inside." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc62eb78d93f773df/65f49d2b2782e44304803738/Clove_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="RUSE" description="EQUIP a view of the battlefield. FIRE to set the locations where Clove’s clouds will settle. ALT FIRE to confirm, launching clouds that block vision in the chosen areas. Clove can use this ability after death." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc8d9e262c0792019/65f49d2e4a1d044238e8200a/Clove_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="PICK-ME-UP" description="INSTANTLY absorb the life force of a fallen enemy that Clove damaged or killed, gaining haste and temporary health." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc6149a4073d8a571/65f49d32d00f910606b297ab/Clove_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="NOT DEAD YET" description="After dying, ACTIVATE to resurrect. Once resurrected, Clove must earn a kill or a damaging assist within a set time or they will die." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt56a93e3612502c38/65f49d35f9850d426372d8e4/Clove_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
