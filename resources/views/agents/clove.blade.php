@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="CLOVE" 
        role="CONTROLLER" 
        biography="Scottish troublemaker Clove makes mischief for enemies in both the heat of combat and the cold of death. The young Immortal keeps foes guessing, even from beyond the grave, their return to the living only ever a moment away." 
        image="https://media.valorant-api.com/agents/1dbf2edd-4729-0984-3115-daa5eed44993/fullportrait.png" 
        background="https://media.valorant-api.com/agents/1dbf2edd-4729-0984-3115-daa5eed44993/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="MEDDLE" description="EQUIP a fragment of immortality essence. FIRE to throw the fragment, which erupts after a short delay and briefly decays all targets caught inside." video="" icon="https://media.valorant-api.com/agents/1dbf2edd-4729-0984-3115-daa5eed44993/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="RUSE" description="EQUIP a view of the battlefield. FIRE to set the locations where Clove’s clouds will settle. ALT FIRE to confirm, launching clouds that block vision in the chosen areas. Clove can use this ability after death." video="" icon="https://media.valorant-api.com/agents/1dbf2edd-4729-0984-3115-daa5eed44993/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="PICK-ME-UP" description="INSTANTLY absorb the life force of a fallen enemy that Clove damaged or killed, gaining haste and temporary health." video="" icon="https://media.valorant-api.com/agents/1dbf2edd-4729-0984-3115-daa5eed44993/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="NOT DEAD YET" description="After dying, ACTIVATE to resurrect. Once resurrected, Clove must earn a kill or a damaging assist within a set time or they will die." video="" icon="https://media.valorant-api.com/agents/1dbf2edd-4729-0984-3115-daa5eed44993/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
