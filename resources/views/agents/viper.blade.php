@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="VIPER" 
        role="CONTROLLER" 
        biography="The American chemist, Viper deploys an array of poisonous chemical devices to control the battlefield and cripple the enemy's vision." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt3294324838f972b9/5eb7cdc55185c74d61f9d506/V_AGENTS_512x512_Viper.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="POISON CLOUD" description="EQUIP a gas emitter. FIRE to throw the emitter that perpetually remains throughout the round. RE-USE the ability to create a toxic gas cloud." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6d525281488c03e9/5eaf86ce86d5262e3346e073/Viper_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="TOXIC SCREEN" description="EQUIP a gas emitter launcher. FIRE to deploy a long line of gas emitters. RE-USE the ability to create a tall wall of toxic gas." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt607d9d0e0717208d/5eaf86cd73708a4058d4a997/Viper_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="SNAKE BITE" description="EQUIP a chemical launcher. FIRE to launch a canister that shatters upon hitting the floor, creating a lingering chemical zone that damages and slows enemies." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt38321074e64f899b/5eaf86cd93284004997f7455/Viper_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="VIPER'S PIT" description="EQUIP a chemical sprayer. FIRE to spray a chemical cloud in all directions around Viper, creating a large cloud that reduces the vision range and maximum health of players inside of it." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt56708302f3a47949/5eaf86cc86d5262e3346e06f/Viper_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
