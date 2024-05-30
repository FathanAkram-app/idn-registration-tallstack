
<div class="card text-bg-dark" style="width: 500px; padding: 18px;  ">
    <h1>Kuota</h1>
    <hr/>
    
    <x-customs.carousel>
        @foreach($kuotas as $key=>$v)
            @if($key!=0)
                <div class="carousel-item">
                    <span>{{$v->name}} kuota tersisa: {{$v->quota}}</span>
                </div>
            @else
                <div class="carousel-item active">
                    <span>{{$v->name}} kuota tersisa: {{$v->quota}}</span>
                </div>
            @endif
        @endforeach
        
    </x-customs.carousel>
        
    <select class="form-select" aria-label="Default select example" wire:change='getKuota()' wire:model.live="cabang_id">
        @foreach ($cabang_names as $c)
            <option value="{{ $c->id }}">{{ $c->branch_name }}</option>
        @endforeach
    </select>
        
        
        
    </div>
</div>