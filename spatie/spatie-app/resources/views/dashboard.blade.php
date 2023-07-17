<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a href="{{ route('roles.index') }}"> <button style="border:2px solid;">Roles & Permissions</button> </a>

</x-app-layout>
