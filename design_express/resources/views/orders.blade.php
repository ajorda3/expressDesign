
    <h2>Projects</h2>
 
    ID: {{ $id }}


    @if ( !$orders->count() )
        You have no orders
    @else
        <ul>
            @foreach( $orders as $order )
                <li>{{ $order->price }}</li>
            @endforeach
        </ul>
    @endif

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  @foreach( $orders as $order )
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="{{ $order->id }}">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{ $order->title }}
        </a>
      </h4>
    </div>
    
    <div id="{{ $order->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       {{ $order->mainText }}
       </div>
    </div>
  </div>
  @endforeach
</div>
