<div class="form-group">
  <div class="form-group col-md-6">
    <label for="date_time_start">Fecha y hora de inicio</label>
    <input type="date" class="form-control" name="date_time_start" id="date_time_start">
  </div>
  <div class="form-group col-md-6">
  <label for="date_time_end">Fecha y hora de terminación</label>
  <input type="date" class="form-control" name="date_time_end" id="date_time_end">
  </div>
</div>

<div class="form-group">
  <div class="form-group col-md-6">
    <label for="aditional_hour">Precio por hora adicional</label>
    <input type="number" class="form-control" name="aditional_hour" id="aditional_hour">
  </div>
  <div class="form-group col-md-6">
  <label for="aditonal_person">Precio por persona adicional</label>
  <input type="number" class="form-control" name="aditonal_person" id="aditonal_person">
  </div>
</div>

<div class="form-group">
  <div class="form-group col-md-6">
    <label for="discount">Descuento</label>
    <input type="number" class="form-control" name="discount" id="discount">
  </div>
  <div class="form-group col-md-6">
  <label for="total_cost">Precio total</label>
  <input type="number" class="form-control" name="total_cost" id="total_cost">
  </div>
</div>

<div class="form-group">
  <div class="form-group col-md-6">
    <label for="service">Selcciona los servicios</label>
    <select class="form-control" name="service_id" id="service_id">
     <option value="1">Luz y sonido</option>
     <option value="2">Brincolín</option>
     <option value="3">Comida</option>
     <option value="4">Toldos</option>
    </select>
  </div>

  <div class="form-group col-md-6">
  <label for="client_id">Selecciona el cliente</label>
  <select class="form-control" name="client_id" id="client_id">
   <option value="1">Pancho</option>
   <option value="2">Emanuel</option>
   <option value="3">José</option>
   <option value="4">Fatima</option>
  </select>
  </div>
</div>

<div class="form-group">
  <div class="form-group col-md-6">
    <label for="date">Fecha y hora de entrega de anticipo</label>
    <input type="date" class="form-control" name="date" id="date">
  </div>
  <div class="form-group col-md-6">
  <label for="amount">Cantidad a anticipar</label>
  <input type="number" class="form-control" name="amount" id="amount">
  </div>
</div>

<script>
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>
