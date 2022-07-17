<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

      <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>

      <!-- This element is to trick the browser into centering the modal contents. -->
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <form wire:submit.prevent="store">
        @csrf
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">name:</label>
                    <input type="text" wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nombre de la Actividad">
                    @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">description:</label>
                    <input type="text" wire:model="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Descripcion Breve">
                    @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Fecha:</label>
                    <input type="date" wire:model="datatime" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
                    @error('datatime') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">penalty:</label>
                    <input type="text" wire:model="penalty" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Cantidad de la Multa">
                    @error('penalty') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">association_id:</label>
                    <select wire:model="association_id" class="form-select shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" aria-label="Default select example">
                        <option selected >slecione una opcion</option>
                        @foreach ($associations as $association)
                          <option value="{{$association->id}}">{{$association->name}}</option>
                        @endforeach

                    </select>


                    @error('association_id') <span class="text-red-500">{{ $message }}</span>@enderror
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
