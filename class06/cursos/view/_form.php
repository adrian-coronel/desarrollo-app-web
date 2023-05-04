<div class="form-group mb-3">
  <label for="name">Nombre:</label>
  <input class="form-control" 
    type="text" name="name" 
    value="<?=  isset($nombre) ? $nombre : ''?>" 
    required
  >
</div>

<div class="form-group mb-3">
  <label for="credito">Nro de Creditos:</label>
  <input class="form-control" 
    type="number" 
    required 
    name="credito"
    value="<?= isset($creditos) ? $creditos : ''?>"
  >
</div>
