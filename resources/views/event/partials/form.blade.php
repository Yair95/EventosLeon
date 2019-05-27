<div class="form-group">
    <div class="form-group col-md-6">
        <label for="date_time_start">Fecha y hora de inicio</label>
        <input type="date" class="form-control" name="date_time_start" id="date_time_start" required>
    </div>
    <div class="form-group col-md-6">
        <label for="date_time_end">Fecha y hora de terminación</label>
        <input type="date" class="form-control" name="date_time_end" id="date_time_end" required>
        </div>
</div>

<div class="form-group">
    <div class="form-group col-md-6">
        <label for="aditional_hour">Precio por hora adicional</label>
        <input type="number" class="form-control" name="aditional_hour" id="aditional_hour">
    </div>
        <div class="form-group col-md-6">
        <label for="aditonal_person">Precio por persona adicional</label>
    <input type="number" class="form-control" name="aditonal_person" id="aditonal_person" required>
    </div>
</div>

<div class="form-group">
    <div class="form-group col-md-6">
        <label for="discount">Descuento</label>
        <input type="number" class="form-control" name="discount" id="discount">
    </div>
    <div class="form-group col-md-6">
        <label for="subtotal">Sub total</label>
        <input type="number" class="form-control" name="subtotal" id="subtotal" required>
    </div>
</div>

<div class="form-group">
    <div class="form-group col-md-6">
        <label for="date">Fecha y hora de entrega de anticipo</label>
        <input type="date" class="form-control" name="date" id="date" required>
    </div>
    <div class="form-group col-md-6">
        <label for="amount">Cantidad a anticipar</label>
        <input type="number" class="form-control" name="amount" id="amount" required>
    </div>
</div>

<div class="form-group">
    <div class="form-group col-md-6">
        <label for="client_id">Selecciona el cliente</label>
        <select class="form-control" name="client_id" id="client_id" required>
            @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->data_contact->name}}</option>
            @endforeach
        </select>
    </div>

</div>

<div class="form-group">
    <div class="form-group col-md-6">
        <label for="total">Total</label>
        <input type="number" class="form-control" readonly name="total" id="total" required>
    </div>
</div>
