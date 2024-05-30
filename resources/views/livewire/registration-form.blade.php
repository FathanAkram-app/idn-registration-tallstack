
<div class="card text-bg-primary" style="width: 500px; padding: 18px;  ">
    <h1>Pendaftaran</h1>
    <hr/>
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="type your secrets..">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Santri</label>
        <input type="password" class="form-control" placeholder="nama santri">
    </div>
    <div class="mb-3">
        <div class="form-check ">
            <input class="form-check-input" type="radio" name="flexRadioDefault" >
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <div class="form-check ">
            <input class="form-check-input" type="radio" name="flexRadioDefault"  checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Female
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Cabang</label>
        <select class="form-select" aria-label="Default select example" >
            @foreach ($cabangs as $c)
                <option value="{{ $c->id }}">{{ $c->branch_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Program</label>
        <select class="form-select" aria-label="Default select example" >
            <option value="1">RPL</option>
            <option value="2">TKJ</option>
            <option value="3">DKV</option>
            <option value="4">SMP</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Bukti Transfer</label>
        <input class="form-control" type="file" id="formFile">
    </div>

    <button class="btn btn-success" type="submit">Submit</button>
        
        
</div>
