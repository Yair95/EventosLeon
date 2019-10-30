<div class="form-group">
    <div class="form-group col-md-6">
        <label for="date_start">Fecha y hora de inicio</label>
        <input type="text" class="form-control" name="date_start" id="date_start" readonly value="{{ $event->date_start }}">
    </div>
    <div class="form-group col-md-6">
        <label for="date_end">Fecha y hora de terminación</label>
        <input type="text" class="form-control" name="date_end" id="date_end" readonly value="{{ $event->date_end }}">
        </div>
</div>

<div class="form-group">
    <div class="form-group col-md-4">
        <label for="aditional_hour">Precio por hora adicional</label>
        <input type="text" class="form-control" name="aditional_hour" id="aditional_hour" readonly value="{{ $event->additional_hour }}">
    </div>
    <div class="form-group col-md-4">
        <label for="people">Cantidad de personas</label>
        <input type="text" class="form-control" name="people" id="people" readonly value="{{ $event->people }}">
    </div>
    <div class="form-group col-md-4">
        <label for="additional_people">Precio por persona adicional</label>
        <input type="text" class="form-control" name="additional_people" id="additional_people" readonly value="{{ $event->additional_people }}">
    </div>
</div>

<div class="form-group">
    <div class="form-group col-md-6">
        <label for="discount">Descuento</label>
        <input type="text" class="form-control" name="discount" id="discount" readonly value="{{ $event->discount }}">
    </div>
</div>

<div class="form-group">
    <div class="form-group col-md-4">
        <label for="prepaid_date">Fecha y hora de entrega de anticipo</label>
        <input type="text" class="form-control" name="prepaid_date" id="prepaid_date" readonly value="{{ $prepaid->date }}">
    </div>
    <div class="form-group col-md-4">
        <label for="prepaid_total">Cantidad a anticipar</label>
        <input type="text" class="form-control" name="prepaid_total" id="prepaid_total" readonly value="{{ $prepaid->total }}">
    </div>
    <div class="form-group col-md-4">
        <label for="prepaid_status">Estatus del anticipar</label>
        <input type="text" class="form-control" name="prepaid_status" id="prepaid_status" readonly value="{{ $prepaid->status }}">
    </div>
</div>

<div class="form-group">
    <div class="form-group col-md-6">
        <label for="client_id">Cliente</label>
        <input type="text" class="form-control" name="client_id" id="client_id" readonly value="{{ $client->data_contact->name }}">
    </div>
</div>

<div class="form-group">
    <div class="form-group col-md-6">
        <label for="total">Total</label>
        <input type="text" class="form-control" readonly name="total" id="total" readonly value="{{ $event->total }}">
    </div>
</div>
