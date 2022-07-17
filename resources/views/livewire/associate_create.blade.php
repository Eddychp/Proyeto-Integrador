<div class="fixed z-599 inset-0 overflow-y-auto ease-out duration-400">

    <div class="flex xl items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

      <div class="fixed inset-0 transition-opacity">

        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>

      <!-- This element is to trick the browser into centering the modal contents. -->
      <span class=" hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

      <div class=" w-full max-w-lg inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

        <form wire:submit.prevent="store" class="w-full max-w-lg">
        @csrf

        <div class="bg-white px-4 pt-5 pb-4 lg:p-6 sm:pb-4">
          <div class="">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">name:</label>
                    <input type="text" wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"placeholder="Nombre">
                    @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">fatherlastname:</label>
                    <input type="text" wire:model="fatherlastname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"placeholder="Apellido Paterno">
                    @error('fatherlastname') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">fatherlastname:</label>
                    <input type="text" wire:model="fatherlastname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Apellido Materno">
                    @error('fatherlastname') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">dni:</label>
                    <input type="text" wire:model="dni" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"placeholder="DNI">
                    @error('dni') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>


                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">birtdate:</label>
                    <input type="date" wire:model="birtdate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
                    @error('birtdate') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">maricalstaus:</label>
                    <select wire:model="maricalstaus" class="form-select shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" aria-label="Default select example">
                        <option selected >slecione una opcion</option>
                        <option selected >Casado</option>
                        <option selected >soltero</option>
                        <option selected >Viudo</option>
                        <option selected >Divorsiado</option>

                    </select>
                    @error('maricalstaus') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">sexo:</label>
                    <select wire:model="sexo" class="form-select shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" aria-label="Default select example">
                        <option selected >slecione una opcion</option>
                        <option selected >Masculino</option>
                        <option selected >Femenino</option>

                    </select>

                    @error('sexo') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">phone:</label>
                    <input type="text" wire:model="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Numero de telefono">
                    @error('phone') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">email:</label>
                    <input type="text" wire:model="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Correo Electronico">
                    @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">address:</label>
                    <input type="text" wire:model="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Direccion">
                    @error('address') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">code:</label>
                    <input type="text" wire:model="code" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('code') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">type:</label>
                    <select wire:model="type" class="form-select shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" aria-label="Default select example">
                        <option selected >slecione una opcion</option>
                        <option selected >empadronado</option>
                        <option selected >sin emparonar</option>

                    </select>
                    @error('type') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">status:</label>
                    <select wire:model="status" class="form-select shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" aria-label="Default select example">
                        <option selected >slecione una opcion</option>
                        <option selected >socio</option>
                        <option selected >presidente</option>
                        <option selected >secretario</option>
                        <option selected >tesorera</option>
                        <option selected >vocal</option>
                    </select>
                    @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">row:</label>
                    <select wire:model="stand_id" class="form-select shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" aria-label="Default select example">
                        <option selected >slecione una opcion</option>
                        @foreach ($stands as $stand)
                          <option value="{{$stand->id}}">{{$stand->row}}</option>
                        @endforeach

                    </select>
                    @error('stand_id') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">period_id:</label>
                    <select wire:model="period_id" class="form-select shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" aria-label="Default select example">
                        <option selected >slecione una opcion</option>
                        @foreach ($periods as $period)
                          <option value="{{$period->id}}">{{$period->description}}</option>
                        @endforeach

                    </select>
                    @error('period_id') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
          </div>
        </div>

        <div class="bg-gray-50 px-4 py-3 sm:px-6">
          <x-jet-secondary-button wire:click="closeModal()">Cancelar</x-jet-secondary-button>
          <x-jet-danger-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="save,imgen" class="disabled:opacity-25">Guardar</x-jet-danger-button>
        </div>
        </form>
      </div>
    </div>
  </div>
