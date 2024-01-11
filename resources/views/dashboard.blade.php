<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            მთავარი გვერდის გასახსნელად დააჭირე ღილაკს
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-center ">
        <div>
            <a href='/home'>
                <button  type="button" style="background-color: rgb(42, 157, 202); padding: 20px;">მთავრ გვერძე გადასვლა</button>
            </a>
        </div>
    </div>
    
</x-app-layout>
