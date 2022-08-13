<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom  rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
                <form>
                    <div class="backedit px-4 pb-4 sm:p-6 sm:pb-4" style="border-width: 2px; border-color:rgb(253, 253, 253)">
                        <p class="p-3 text-white font-bold text-center" style="font-size:25px"><i class="fa-solid fa-file-pen" style="font-size:30px; padding-right:15px"></i>Editar proveedor</p>
                        <div class="mb-4">
                            <label for="nbprov" class="block text-white text-sm font-bold mb-2">Nombre del proveedor:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nbprov" wire:model="nbprov">
                            @error('nbprov') <span class="text-warning error">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="telfprov" class="block text-white text-sm font-bold mb-2">Número de contacto (7 dígitos):</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telfprov" wire:model="telfprov">
                            @error('telfprov') <span class="text-warning error">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="dirprov" class="block text-white text-sm font-bold mb-2">Dirección:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dirprov" wire:model="dirprov">
                            @error('dirprov') <span class="text-warning error">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="rucprov" class="block text-white text-sm font-bold mb-2">RUC (13 dígitos):</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="rucprov" wire:model="rucprov">
                            @error('rucprov') <span class="text-warning error">{{ $message }}</span>@enderror
                        </div>

                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-4">
                                <span class="flex  rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                    <button wire:click.prevent="guardar_edicionprov('{{$tokenok}}')" type="button" class="btnguardargg bg-purple-600  inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5"> <i class="fa-solid fa-floppy-disk" style="font-size:15px;padding-right:15px"></i>Guardar</button>
                                </span>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-4">
                                <span class="flex rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                    <button wire:click="cerrarModal5()" type="button" class="btncancel inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium shadow-sm focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"><i class="fa-solid fa-circle-xmark" style="font-size:15px;padding-right:15px; color:red"></i>Cancelar</button>
                                </span>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </form>    
            </div>


    </div>
</div>