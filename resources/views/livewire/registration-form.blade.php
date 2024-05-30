
<div  class="card text-bg-primary" style="width: 500px; padding: 18px;  ">
    
    <h1>Pendaftaran</h1>
    <hr/>
    <form wire:submit="save" class="row g-3 " >
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="name@example.com" wire:model.live='emailInput'>
            <div class="text-red-400">@error('emailInput') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="type your secrets.." wire:model.live='pwInput'>
            <div class="text-red-400">@error('pwInput') {{ $message }} @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Santri</label>
            <input type="text" class="form-control" placeholder="nama santri" wire:model.live='namaInput'>
            <div class="text-red-400">@error('namaInput') {{ $message }} @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Gender</label>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="flexRadioDefault" wire:model.live='genderInput' value="1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="flexRadioDefault" wire:model.live='genderInput' value="0">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
                
            </div>
            <div class="text-red-400">@error('genderInput') {{ $message }} @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Cabang</label>
            <select class="form-select" aria-label="Default select example" wire:change='resetSelection()' wire:model.live='cabangInput'>
                @foreach ($cabangs as $c)
                    <option value="{{ $c->id }}">{{ $c->branch_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Program</label>
            <select class="form-select" aria-label="Default select example" wire:model.live='programInput'>
                <option value="" >Pilih..</option>
                @foreach($kuotas as $v)
                    @if($v->quota > 0)
                        <option value="{{$v->id}}">{{$v->name}}, sisa kuota: {{$v->quota}}</option>
                    @endif
                @endforeach

            </select>
            @error('programInput') <span class="text-red-400">{{ $message }}</span> @enderror
            
        </div>
        
        <div class="mb-3">
            <label for="formFile" class="form-label">Bukti Transfer</label>
            <input class="form-control" type="file" wire:model.live='buktiTransfer'>
            @error('buktiTransfer') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>
        

        <button class="btn btn-success" type="submit" >Submit</button>
    </form> 
    {{$btt}} 
</div>
