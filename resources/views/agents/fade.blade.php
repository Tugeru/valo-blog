@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="FADE" 
        role="INITIATOR" 
        biography="Turkish bounty hunter Fade unleashes the power of raw nightmare to seize enemy secrets. Attuned with terror itself, she hunts targets and reveals their deepest fears - before crushing them in the dark." 
        image="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt9780003054592233/6260e1d0344d3269894344c2/V_AGENTS_512x512_Fade.png" 
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="SEIZE" description="EQUIP an orb of nightmare ink. FIRE to throw the orb which will plummet to the ground after a set amount of time. Upon hitting the ground, the ink will explode and create a zone in which enemies who are caught in it cannot escape the zone by normal means." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt99645217985474b3/6260e1f74a1d044238e82006/FADE_Q_v001_web.mp4" />
        <x-dossier.ability-card key="E" name="HAUNT" description="EQUIP a haunting entity. FIRE to throw the entity which will plummet to the ground after a set amount of time. Upon hitting the ground, the entity will reveal the location of enemies caught in its line of sight." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt9023447990141fa6/6260e1f7f9850d426372d8e0/FADE_E_v001_web.mp4" />
        <x-dossier.ability-card key="C" name="PROWLER" description="EQUIP a Prowler. FIRE will send the Prowler out, causing it to travel in a straight line. The Prowler will lock onto any enemies or trails in their frontal vision cone and chase them, nearsighting them if it reaches them." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blte9910d54021262d1/6260e1f72782e44304803734/FADE_C_v001_web.mp4" />
        <x-dossier.ability-card key="X" name="NIGHTFALL" description="EQUIP the power of Nightmare. FIRE to send out a wave of nightmare energy that can traverse through walls. The energy reveals enemies as well as deafens and decays them." video="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt369a4746f3320d75/6260e1f73b64c643033f6771/FADE_X_v001_web.mp4" />
    </x-dossier.ability-grid>
@endsection
