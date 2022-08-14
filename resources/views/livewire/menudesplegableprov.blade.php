<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400 " style="border-radius:15px;">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <form style="margin-left:300px;margin-right:300px;">
            <div class="px-4 pb-4 sm:p-6 sm:pb-4 columna2" style="border-radius:25px">
                <p style="font-size: 22px; color:aliceblue">
                    <i class="fa-solid fa-triangle-exclamation" style="font-size: 30px"></i> ¿Está seguro que desea eliminar este proveedor?
                </p>
                <div class="columna2 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse justify-content-center">
                    <span class="flex rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click="borrarprov('{{$tokenok}}')" type="button" class="btnaceptarh inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Aceptar</button>
                    </span>

                    <span class="flex rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click="cerrarModal6()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                    </span>
                </div>
            </div>
    </form>

        

    </div>
</div>