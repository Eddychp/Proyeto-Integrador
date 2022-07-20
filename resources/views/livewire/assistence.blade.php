<div class="row sales layout-top-spacing">
   <div class="p-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

                <div class="flex items-center p-2 rounded-md flex-1">
                    <label class=" w-full relative text-gray-400 focus-within:text-gray-600 block">
                        <svg class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3" viewBox="0 0 25 25"  fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <x-jet-input type="text" wire:model="search" class="w-full block pl-14" placeholder="Buscar id associate"/>
                    </label>
                </div>




                @if (session()->has('message'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                        <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                    </div>
                @endif
                <button wire:click="create()"
                class="bg-purple-600 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded my-3">
                Crear</button>
                @if($isOpen)
                    @include('livewire.assistence_create')
                @endif
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table  class="w-full divide-y divide-gray-200 table-auto">
                        <thead class="bg-indigo-500 text-white">
                            <tr class="text-left text-xs font-bold  uppercase">
                                <th class="px-4 py-2 w-20">ID</th>
                                <th class="px-4 py-2">status</th>
                                <th class="px-4 py-2">activity_id</th>
                                <th class="px-4 py-2">associate_id</th>

                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assistences as $assistence)
                            <tr>
                                <td class="px-6 py-4">
                                    <span class=" px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                        {{ $assistence->id }}</span>
                                </td>
                                <td class="border px-4 py-2">{{ $assistence->status }}</td>
                                <td class="border px-4 py-2">{{ $assistence->Activity->name}}</td>
                                <td class="border px-4 py-2">{{ $assistence->Associate->name }}</td>
                                <td class="border px-4 py-2">
                                <button wire:click="edit({{ $assistence }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button wire:click="delete({{ $assistence }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
