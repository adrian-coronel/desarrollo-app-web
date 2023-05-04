<div class="form-group">
  <label for="names">Nombre:</label>
  <input class="form-control" 
    type="text" name="names" 
    value="<?=  isset($nombres) ? $nombres : ''?>" 
    required
  >
</div>

<div class="form-group">
  <label for="apellidoPaterno">Apellido Paterno:</label>
  <input class="form-control" 
    type="text" 
    required 
    name="apellidoPaterno"
    value="<?= isset($apellidoPaterno) ? $apellidoPaterno : ''?>"
  >
</div>

<div class="form-group">
  <label for="apellidoMaterno">Apellido Materno:</label>
  <input class="form-control" 
    type="text" 
    name="apellidoMaterno"
    value="<?= isset($apellidoMaterno) ? $apellidoMaterno : ''?>"  
  >
</div>