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
        <label for="date">Fecha y hora de entrega de anticipo</label>
        <input type="date" class="form-control" name="date" id="date">
    </div>
    <div class="form-group col-md-6">
        <label for="amount">Cantidad a anticipar</label>
        <input type="number" class="form-control" name="amount" id="amount">
    </div>
</div>

<div class="form-group">
    <div class="form-group col-md-6">
        <label for="client_id">Selecciona el cliente</label>
        <select class="form-control" name="client_id" id="client_id">
            @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->data_contact->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-12">
    </div>
</div>

<div class="form-group">
    <div class="form-group col-md-6">
        <label for="service">Servicios adicionales:</label>
        <select class="form-control" name="service_id" id="service_id">
            @foreach($services as $service)
                <option value="{{$service->id}}">{{$service->name}} - {{$service->cost}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <br>
        <button id="serv" name="serv"  class="btn btn-info">Agregar servicio</button>
    </div>
</div>

<div class="form-group col-md-12">
    <table id="event_services_create_table" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Costo</th>
            <th>Proveedor</th>
            <th width="120px">Acciones</th>
        </tr>
        </thead>
    </table>
</div>
