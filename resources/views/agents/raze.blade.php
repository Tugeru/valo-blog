@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="RAZE" 
        role="DUELIST" 
        biography="Hailing from Brazil, Raze explodes onto the battlefield with big guns and heavy ordnance." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6f139038ec6a170a/5eb7cdc158bca21d2220977a/V_AGENTS_512x512_Raze.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="BLAST PACK" description="INSTANTLY throw a Blast Pack that will stick to surfaces. RE-USE the ability after deployment to detonate, damaging and moving anything hit." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt69260107a091495c/5eaf869286d5262e3346e057/Raze_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="PAINT SHELLS" description="EQUIP a cluster grenade. FIRE to throw the grenade, which does damage and creates sub-munitions, each doing damage to anyone in their range." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt369a4746f3320d75/5eaf869273708a4058d4a987/Raze_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="BOOM BOT" description="EQUIP a Boom Bot. FIRE will deploy the bot, causing it to travel in a straight line on the ground, bouncing off walls. The Boom Bot will lock on to any enemies in its frontal cone and chase them, exploding for heavy damage if it reaches them." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt18a80be3e70f6e10/5eaf86916d99721013444495/Raze_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="SHOWSTOPPER" description="EQUIP a rocket launcher. FIRE shoots a rocket that does massive area damage on contact with anything." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt499893d56a31952a/5eaf869293284004997f744b/Raze_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
