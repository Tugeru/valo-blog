@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="KILLJOY" 
        role="SENTINEL" 
        biography="The genius of Germany. Killjoy secures the battlefield with ease using her arsenal of inventions. If the damage from her gear doesn't stop her enemies, her robots' debuff will help make short work of them." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt1adb870b37966952/5eb7cdc1bc563f7db495c0dc/V_AGENTS_512x512_KillJoy.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="ALARMBOT" description="EQUIP a covert Alarmbot. FIRE to deploy a bot that hunts down enemies that get in range. After reaching its target, the bot explodes, applying Vulnerable." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt7209355440751998/5eaf867d6d99721013444493/Killjoy_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="TURRET" description="EQUIP a Turret. FIRE to deploy a turret that fires at enemies in a 180 degree cone." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt4952086e00174092/5eaf867d73708a4058d4a985/Killjoy_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="NANOSWARM" description="EQUIP a Nanoswarm grenade. FIRE to throw the grenade. Upon landing, the Nanoswarm goes covert. ACTIVATE the Nanoswarm to deploy a damaging swarm of nanobots." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta389d38c62c3e34b/5eaf867c86d5262e3346e055/Killjoy_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="LOCKDOWN" description="EQUIP the Lockdown device. FIRE to deploy the device. After a long windup, the device Detains all enemies caught in the radius." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt223405b066606093/5eaf867d93284004997f7449/Killjoy_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
