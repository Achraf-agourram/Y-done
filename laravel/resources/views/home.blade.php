<x-app-layout>
    <div class="min-h-screen bg-[#fdfaf6] pb-12">
        
        <div class="relative bg-gradient-to-b from-[#ffedd5] to-[#fdfaf6] pt-16 pb-20 px-4">
            <div class="max-w-7xl mx-auto text-center">
                <h1 class="text-5xl font-black text-orange-600 tracking-tight mb-4">
                    What's cooking today? 🍲
                </h1>
                <p class="text-amber-900 text-lg font-medium mb-8 italic">
                    Discover the best local kitchens at your fingertips.
                </p>

                <div class="max-w-2xl mx-auto relative">
                    <input type="text" 
                           placeholder="Search for a dish, kitchen, or chef..." 
                           style="background-color: white !important; color: #111827 !important;"
                           class="w-full pl-12 pr-4 py-4 rounded-[2rem] border-none shadow-xl focus:ring-2 focus:ring-orange-500 text-lg shadow-orange-100" />
                    <div class="absolute left-5 top-4 text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <div class="group bg-white/90 backdrop-blur-sm rounded-[2.5rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all border border-white transform hover:-translate-y-2">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 px-3 py-1 rounded-full shadow-md text-sm font-bold text-orange-600">★ 4.9</div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-2xl font-black text-amber-950">The Rustic Pan</h3>
                            <span class="text-xs font-bold text-orange-500 bg-orange-50 px-2 py-1 rounded-md uppercase">15-25 min</span>
                        </div>
                        <p class="text-gray-500 mb-6 italic">Handmade sourdough pizzas and Italian delights.</p>
                        <div class="flex items-center justify-between pt-6 border-t border-orange-50">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-orange-200 border-2 border-white shadow-sm overflow-hidden">
                                    <img src="https://i.pravatar.cc/150?u=chef1" class="w-full h-full object-cover">
                                </div>
                                <span class="text-sm font-bold text-amber-900">Chef Marco</span>
                            </div>
                            <button class="bg-orange-600 text-white font-bold px-5 py-2 rounded-xl text-sm shadow-md hover:bg-orange-700 transition-colors">View Menu</button>
                        </div>
                    </div>
                </div>

                <div class="group bg-white/90 backdrop-blur-sm rounded-[2.5rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all border border-white transform hover:-translate-y-2">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7bb7445?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 px-3 py-1 rounded-full shadow-md text-sm font-bold text-orange-600">★ 4.7</div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-2xl font-black text-amber-950">Green Bites</h3>
                            <span class="text-xs font-bold text-orange-500 bg-orange-50 px-2 py-1 rounded-md uppercase">30-40 min</span>
                        </div>
                        <p class="text-gray-500 mb-6 italic">Organic salads and fresh smoothie bowls.</p>
                        <div class="flex items-center justify-between pt-6 border-t border-orange-50">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-orange-200 border-2 border-white shadow-sm overflow-hidden">
                                    <img src="https://i.pravatar.cc/150?u=chef2" class="w-full h-full object-cover">
                                </div>
                                <span class="text-sm font-bold text-amber-900">Chef Sarah</span>
                            </div>
                            <button class="bg-orange-600 text-white font-bold px-5 py-2 rounded-xl text-sm shadow-md hover:bg-orange-700 transition-colors">View Menu</button>
                        </div>
                    </div>
                </div>

                <div class="group bg-white/90 backdrop-blur-sm rounded-[2.5rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all border border-white transform hover:-translate-y-2">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551782450-a2132b4ba21d?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 px-3 py-1 rounded-full shadow-md text-sm font-bold text-orange-600">★ 5.0</div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-2xl font-black text-amber-950">Burger Theory</h3>
                            <span class="text-xs font-bold text-orange-500 bg-orange-50 px-2 py-1 rounded-md uppercase">10-20 min</span>
                        </div>
                        <p class="text-gray-500 mb-6 italic">Gourmet wagyu beef burgers and truffle fries.</p>
                        <div class="flex items-center justify-between pt-6 border-t border-orange-50">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-orange-200 border-2 border-white shadow-sm overflow-hidden">
                                    <img src="https://i.pravatar.cc/150?u=chef3" class="w-full h-full object-cover">
                                </div>
                                <span class="text-sm font-bold text-amber-900">Chef Dave</span>
                            </div>
                            <button class="bg-orange-600 text-white font-bold px-5 py-2 rounded-xl text-sm shadow-md hover:bg-orange-700 transition-colors">View Menu</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>