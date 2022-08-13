<div class="form-group">
    <label>Sucursal</label>
    <input type="text" class="form-control" wire:model='sucursal'>
    @error('sucursal') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Ciudad</label>
    <textarea class="form-control" wire:model='ciudad'></textarea>
    @error('ciudad') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Teléfono</label>
    <input type="number" class="form-control" wire:model='telefono'>
    @error('telefono') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Dirección</label>
    <input type="number" class="form-control" wire:model='direccion' step=".01">
    @error('direccion') <span>{{ $message }}</span> @enderror
</div>