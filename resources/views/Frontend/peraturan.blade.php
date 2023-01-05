@extends('css.globalExtension')
@extends('css.peraturanImg')
@extends('Frontend.footer')

<div class="gambarPeraturan">
    <p>Peraturan Yang Ada Di Ultimasea</p>
</div>

<div class="d-flex flex-wrap justify-content-center mt-4 gap-5">
    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/"><i class="fa-solid fa-house"></i></a>
        <p class="text-center">Home</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/home/makanan"><i class="fa-solid fa-utensils"></i></a>
        <p class="text-center">Makanan</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/home/minuman"><i class="fa-solid fa-mug-hot"></i></a>
        <p class="text-center">Minuman</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/home/pembelian"><i
                class="fa-solid fa-credit-card"></i></a>
        <p class="text-center">Pembelian</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/home/fasilitas"><i class="fa-solid fa-book"></i></a>
        <p class="text-center">Fasilitas</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/home/peraturan"><i class="fa-solid fa-ban"></i></a>
        <p class="text-center">Peraturan</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="login"><i class="fa-solid fa-right-to-bracket"></i></a>
        <p class="text-center">Login</p>
    </div>
</div>

<div class="judul mx-auto w-50 rounded-5 mt-5 mb-5 ">
    <p class="text-center text-white">Halaman Peraturan</p>
</div>

<div class="my_card ms-4 me-4 mb-3 p-4">
    <p> Ada juga larangan yang harus di taati oleh para pengunjung ultimasea, larangan larangan ini di buat untuk
        melindunggi keamanan dan kenyamanan para pengunjung lainnya, aturan ini wajib di taati oleh para pengunjung,
        jika tidak maka pengunjung yang melakukan kesalahan tersebut akan di berikan saksi berat sesuai dengan peraturan
        yang telah mereka langgar, danjuga kami akan langsung bertindak pada saat itu juga berikut adalah peraturan yang
        harus di taati oleh para penggunjung ultimasea :</p>
    <div class="d-flex flex-sm-row flex-column flex-wrap justify-content-center gap-2">
        @foreach ($peraturan as $item)
            <p class="col-4 w-100">- {{ $item->nama_peraturan }}.</p>
        @endforeach
    </div>
    <p class="fw-bold fs-5 text-center">Ingatlah sesalu untuk menaati peraturan di mana pun dan kapanpun kamu berada
        demi kebaikan orang lain</p>
</div>
