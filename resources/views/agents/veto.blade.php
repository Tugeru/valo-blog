@extends('layouts.guest')
@section('content')
    <x-dossier.hero 
        name="VETO" 
        role="SENTINEL" 
        biography="A disruptive enforcer from Senegal, Veto uses anti-utility technology and DNA mutation to dismantle enemy strategies. By shutting down the very tools his opponents rely on, he forces them into a fight they aren't prepared for." 
        image="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/fullportrait.png" 
        background="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/background.png"
    />
    <x-dossier.ability-grid>
        <x-dossier.ability-card key="Q" name="UTILITY LOCK" description="EQUIP a specialized jammer. FIRE to deploy a device that creates a field. Any enemy utility (drones, traps, smokes) that enters the field is instantly deactivated." video="" icon="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/abilities/ability1/displayicon.png" />
        <x-dossier.ability-card key="E" name="DNA MUTATION" description="INSTANTLY release a cloud of mutated spores around Veto. Enemies in the cloud have their controls inverted and their vision disoriented for a short duration." video="" icon="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/abilities/ability2/displayicon.png" />
        <x-dossier.ability-card key="C" name="ANTI-TECH TRAP" description="EQUIP a hidden mine. FIRE to place the mine on a surface. When an enemy triggers the mine, it explodes and silences their abilities for a long duration." video="" icon="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/abilities/grenade/displayicon.png" />
        <x-dossier.ability-card key="X" name="NEURAL SHUTDOWN" description="EQUIP a neural emitter. FIRE to deploy a massive pulse that traverses the entire map. All enemies currently using an ultimate ability or active utility have those abilities instantly terminated and are stunned." video="" icon="https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/abilities/ultimate/displayicon.png" />
    </x-dossier.ability-grid>
@endsection
