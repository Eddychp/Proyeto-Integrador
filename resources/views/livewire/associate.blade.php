<div class="row sales layout-top-spacing">
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">


                <div class="flex items-center p-2 rounded-md flex-1">
                    <label class=" w-full relative text-gray-400 focus-within:text-gray-600 block">
                        <svg class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3" viewBox="0 0 25 25"  fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <x-jet-input type="text" wire:model="search" class="w-full block pl-14" placeholder="Buscar Name "/>
                    </label>
                </div>
                <div class="flex items-center p-2 rounded-md flex-1">
                    <label class=" w-full relative text-gray-400 focus-within:text-gray-600 block">
                        <svg class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3" viewBox="0 0 25 25"  fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <x-jet-input type="text" wire:model="search_type" class="w-full block pl-14" placeholder="Buscar Name "/>
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
                    @include('livewire.associate_create')
                @endif
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="w-full divide-y divide-gray-200 table-auto">
                        <thead class="bg-indigo-500 text-white">
                            <tr class="text-left text-xs font-bold  uppercase">
                                <th class="px-4 py-2 w-20">ID</th>
                                <th class="px-4 py-2">name</th>

                                <th class="px-4 py-2">type</th>
                                <th class="px-4 py-2">status</th>
                                <th class="px-4 py-2">row</th>
                                <th class="px-4 py-2">period_id</th>

                                <td wire:click="order('number')" scope="col" class="px-6 py-3">Opciones</td>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($associates as $associate)
                            <tr>

                                <td class="px-6 py-4">
                                    <span class=" px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                        {{ $associate->id }}</span>
                                </td>
                                <td class="border px-4 py-2">{{ $associate->name }}  {{ $associate->fatherlastname }}</td>

                                <td class="border px-4 py-2">{{ $associate->type }}</td>
                                <td class="border px-4 py-2">{{ $associate->status }}</td>

                                <td class="border px-4 py-2">{{ $associate->Stand->row }}</td>

                                <td class="border px-4 py-2">{{ $associate->Period->description }}</td>
                                <td class="border px-4 py-2">
                                <button wire:click="edit({{ $associate }})" ><svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg></button>
                                <button wire:click="delete({{ $associate }})" ><svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg></button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
