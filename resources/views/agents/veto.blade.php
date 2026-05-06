@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="VETO" 
        role="SENTINEL" 
        biography="A disruptive enforcer from Senegal, Veto uses anti-utility technology and DNA mutation to dismantle enemy strategies. By shutting down the very tools his opponents rely on, he forces them into a fight they aren't prepared for." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt1adb870b37966952/5eb7cdc1bc563f7db495c0dc/V_AGENTS_512x512_KillJoy.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="UTILITY LOCK" description="EQUIP a specialized jammer. FIRE to deploy a device that creates a field. Any enemy utility (drones, traps, smokes) that enters the field is instantly deactivated." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt7209355440751998/5eaf867d6d99721013444493/Killjoy_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="DNA MUTATION" description="INSTANTLY release a cloud of mutated spores around Veto. Enemies in the cloud have their controls inverted and their vision disoriented for a short duration." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt4952086e00174092/5eaf867d73708a4058d4a985/Killjoy_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="ANTI-TECH TRAP" description="EQUIP a hidden mine. FIRE to place the mine on a surface. When an enemy triggers the mine, it explodes and silences their abilities for a long duration." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta389d38c62c3e34b/5eaf867c86d5262e3346e055/Killjoy_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="NEURAL SHUTDOWN" description="EQUIP a neural emitter. FIRE to deploy a massive pulse that traverses the entire map. All enemies currently using an ultimate ability or active utility have those abilities instantly terminated and are stunned." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt223405b066606093/5eaf867d93284004997f7449/Killjoy_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
