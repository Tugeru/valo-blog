@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="VIPER" 
        role="CONTROLLER" 
        biography="The American chemist, Viper deploys an array of poisonous chemical devices to control the battlefield and cripple the enemy's vision. If the toxins don't kill her prey, her mind games surely will." 
        image="https://media.valorant-api.com/agents/707eab51-4836-f488-046a-cda6bf494859/fullportrait.png" 
        background="https://media.valorant-api.com/agents/707eab51-4836-f488-046a-cda6bf494859/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="POISON CLOUD" description="EQUIP a gas emitter. FIRE to throw the emitter that perpetually remains throughout the round. RE-USE the ability to create a toxic gas cloud at the cost of fuel. This ability can be RE-USED more than once and can be picked up to be REDEPLOYED." video="" icon="https://media.valorant-api.com/agents/707eab51-4836-f488-046a-cda6bf494859/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="TOXIC SCREEN" description="EQUIP a gas emitter launcher. FIRE to deploy a long line of gas emitters. RE-USE the ability to create a tall wall of toxic gas at the cost of fuel. This ability can be RE-USED more than once." video="" icon="https://media.valorant-api.com/agents/707eab51-4836-f488-046a-cda6bf494859/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="SNAKE BITE" description="EQUIP a chemical launcher. FIRE to launch a canister that shatters upon hitting the floor, creating a lingering chemical zone that damages and applies Vulnerable to enemies." video="" icon="https://media.valorant-api.com/agents/707eab51-4836-f488-046a-cda6bf494859/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="VIPER’S PIT" description="EQUIP a chemical sprayer. FIRE to spray a chemical cloud in all directions around Viper, creating a large cloud that reduces the vision range and maximum health of players inside of it." video="" icon="https://media.valorant-api.com/agents/707eab51-4836-f488-046a-cda6bf494859/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
