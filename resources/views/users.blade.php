@foreach ($services as $service)
    <h3>{{$service->service}}</h3>
    <h4>{{$service->name}}</h4>
    <h4>{{$service->category}}</h4>
@endforeach
