@extends('layouts.main')
@section('content')
<section class="content">
    <div id='wrap'>
    
        <div id='external-events'>
          <h4>Draggable Room</h4>
    
          <div id='external-events-list'>
            <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
              <div class='fc-event-main'>Room 1</div>
            </div>
            <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
              <div class='fc-event-main'>Room 2</div>
            </div>
            <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
              <div class='fc-event-main'>Room 3</div>
            </div>
            <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
              <div class='fc-event-main'>Room 4</div>
            </div>
            <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
              <div class='fc-event-main'>Room 5</div>
            </div>
          </div>
    
          <p>
            <input type='checkbox' id='drop-remove' />
            <label for='drop-remove'>remove after drop</label>
          </p>
        </div>
    
        <div id='calendar-wrap'>
            <div class="card">
                <div class="card-body">
                    <div id='calendar' style="background-color: #2075634f"></div>

                </div>

            </div>
        </div>
    
    </div>

</section>
@endsection