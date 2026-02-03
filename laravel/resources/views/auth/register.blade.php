<x-guest-layout>
    {{-- 'light' class added to force light-mode colors inside this container --}}
    <div class="light min-h-screen flex flex-col items-center justify-center py-12 px-4 bg-[#fdfaf6]">
        
        <div class="mb-6 text-center pt-10">
            <h2 class="text-4xl font-extrabold text-orange-600 tracking-tight">Y-done Kitchen 🍳</h2>
            <p class="text-amber-800 mt-2 font-medium">Join our community of food lovers!</p>
        </div>

        <div class="w-full sm:max-w-md bg-white border-t-8 border-orange-500 shadow-2xl rounded-3xl p-8">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <x-input-label for="fname" :value="__('First Name')" class="text-amber-900 font-bold" />
                    {{-- Added bg-white and text-gray-900 to prevent 'black box' issue --}}
                    <x-text-input id="fname" 
                        style="background-color: white !important; color: #111827 !important;"
                        class="block mt-1 w-full border-orange-100 focus:border-orange-500 focus:ring-orange-500 rounded-xl" 
                        type="text" 
                        name="fname" 
                        :value="old('fname')" 
                        required autofocus placeholder="e.g. Gordon" />
                    <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="sname" :value="__('Family Name')" class="text-amber-900 font-bold" />
                    <x-text-input id="sname" class="block mt-1 w-full border-orange-100 focus:border-orange-500 focus:ring-orange-500 rounded-xl bg-white text-gray-900 shadow-sm" 
                                  type="text" name="sname" :value="old('sname')" required placeholder="e.g. Ramsay" />
                    <x-input-error :messages="$errors->get('sname')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-amber-900 font-bold" />
                    <x-text-input id="email" class="block mt-1 w-full border-orange-100 focus:border-orange-500 focus:ring-orange-500 rounded-xl bg-white text-gray-900 shadow-sm" 
                                  type="email" name="email" :value="old('email')" required placeholder="chef@restaurant.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-4 p-4 bg-orange-50 rounded-2xl border-2 border-dashed border-orange-200">
                    <x-input-label for="photo" :value="__('Chef Profile Picture')" class="text-orange-800 font-bold mb-2" />
                    <input type="file" name="photo" id="photo" 
                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-600 file:text-white hover:file:bg-orange-700 cursor-pointer" />
                    <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-amber-900 font-bold" />
                    <x-text-input id="password" class="block mt-1 w-full border-orange-100 focus:border-orange-500 focus:ring-orange-500 rounded-xl bg-white text-gray-900 shadow-sm" 
                                  type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mb-6">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-amber-900 font-bold" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full border-orange-100 focus:border-orange-500 focus:ring-orange-500 rounded-xl bg-white text-gray-900 shadow-sm" 
                                  type="password" name="password_confirmation" required />
                </div>

                <div class="flex flex-col items-center space-y-4 mt-6">
                    {{-- Added !bg-orange-600 to override default primary button colors --}}
                    <x-primary-button class="w-full justify-center !bg-orange-600 hover:!bg-orange-700 active:!bg-orange-800 py-3 rounded-xl text-lg shadow-lg shadow-orange-200 transition-all transform hover:scale-[1.01]">
                        {{ __('Get Cooking!') }}
                    </x-primary-button>

                    <a class="underline text-sm text-amber-900 hover:text-orange-600 transition-colors" href="{{ route('login') }}">
                        {{ __('Already a member? Sign in') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>