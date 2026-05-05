@extends('layouts.guest')

@section('content')
<div class="relative">
    <!-- Hero Section -->
    <div class="relative h-[70vh] w-full overflow-hidden">
        <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt7209355440751998/5f047a06ad25381f15749758/Jett_Legendary_v1.jpg" 
             alt="Jett" 
             class="w-full h-full object-cover object-top opacity-60">
        <div class="absolute inset-0 bg-gradient-to-t from-val-navy via-val-navy/40 to-transparent"></div>
        
        <div class="absolute bottom-20 left-0 w-full">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex items-center space-x-4 text-val-red mb-4 font-bebas tracking-widest">
                    <span class="bg-val-red text-white px-3 py-1 text-sm">AGENT 10</span>
                    <span class="text-xl">// DUELIST</span>
                </div>
                <h1 class="text-9xl text-white font-bebas tracking-tighter">{{ $agent }}</h1>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-20">
            <!-- Abilities -->
            <div class="lg:col-span-2">
                <h2 class="text-5xl mb-12 flex items-center">
                    <span class="text-val-red mr-4">//</span> SPECIAL ABILITIES
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-ability-card 
                        key="Q" 
                        name="UPDRAFT" 
                        description="INSTANTLY propel Jett high into the air." />
                    
                    <x-ability-card 
                        key="E" 
                        name="TAILWIND" 
                        description="INSTANTLY propel Jett in the direction she is moving. If Jett is standing still, she propels forward." />
                    
                    <x-ability-card 
                        key="C" 
                        name="CLOUDBURST" 
                        description="INSTANTLY throw a projectile that expands into a brief vision-blocking cloud on impact with a surface. HOLD the ability key to curve the cloud in the direction of your crosshair." />
                    
                    <x-ability-card 
                        key="X" 
                        name="BLADE STORM" 
                        description="EQUIP a set of highly accurate throwing knives that recharge on killing an opponent. FIRE to throw a single knife at your target. ALTERNATE FIRE to throw all remaining knives at your target." />
                </div>
            </div>

            <!-- Tactical Summary -->
            <div>
                <h2 class="text-5xl mb-12 flex items-center">
                    <span class="text-val-red mr-4">//</span> SUMMARY
                </h2>
                <div class="bg-val-slate p-8 border-t-4 border-val-red">
                    <h3 class="text-2xl mb-4 text-val-red">TACTICAL SUMMARY</h3>
                    <div class="tactical-content text-val-grey text-sm">
                        <p>Representing her home country of South Korea, Jett's agile and evasive fighting style lets her take risks no one else can. She runs circles around every skirmish, cutting enemies before they even know what hit them.</p>
                        <p>Jett is the ultimate playmaker, excelling at creating space and taking aggressive engagements. Her mobility allows her to reposition quickly, making her extremely difficult to pin down.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
