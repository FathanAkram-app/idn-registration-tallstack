
<div class="card text-bg-dark" style="width: 500px; padding: 18px;  ">
    <h1>Kuota</h1>
    <hr/>
    <x-customs.carousel>
        <div class="carousel-item active">
                <span>RPL kuota tersisa: {{$cabangs[$cabang_id-1]->rpl_quota}}</span>
            </div>
            <div class="carousel-item">
                <span>TKJ kuota tersisa: {{$cabangs[$cabang_id-1]->tkj_quota}}</span>
            </div>
            <div class="carousel-item">
                <span>DKV kuota tersisa: {{$cabangs[$cabang_id-1]->dkv_quota}}</span>
            </div>
            <div class="carousel-item">
                <span>SMP kuota tersisa: {{$cabangs[$cabang_id-1]->smp_quota}}</span>
            </div>
    </x-customs.carousel>
        
    <select class="form-select" aria-label="Default select example" wire:model.live="cabang_id">
        @foreach ($cabangs as $c)
            <option value="{{ $c->id }}">{{ $c->branch_name }}</option>
        @endforeach
    </select>
        
        
        
    </div>
</div>