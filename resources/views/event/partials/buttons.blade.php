<a href="{{ route('event.show', $event_id) }}" class="btn btn-info btn-sm">
  <i class="fa fa-eye"></i></a>

  <!--<a href="{//{ route('event.edit', $event_id) }}" class="btn btn-primary btn-sm">
    <i class="fa fa-edit"></i></a>

  <button class="btn btn-primary btn-sm"
    data-id="{//{$event_id}}"
    data-client_id="{//{$client_id}}"
    data-total="{//{$total}}"
    data-additional_hour="{//{$additional_hour}}"
    data-additional_people="{//{$additional_people}}"
    data-date_start="{//{$date_start}}"
    data-date_end="{//{$date_end}}"
    data-discount="{//{$discount}}"
    data-status="{//{$status}}"
    data-people="{//{$people}}"
    data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>-->

  <a event_id="{{ $event_id }}" class="btn btn-danger btn-sm status-event">
      <span class="fa fa-trash"></span>
  </a>
