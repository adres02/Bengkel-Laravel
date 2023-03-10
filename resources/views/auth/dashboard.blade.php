@extends('layout.script')

@section('judul')
<div class="col-sm-6">
    <h4 class="page-title">Dashboard</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-right">
        <div id="clock"></div>
    </ol>
</div>
<script type="text/javascript">
    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
        document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
</script>
@endSection

@section('isi')
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button> <i class="mdi mdi-account-multiple-outline"></i>
     @if (session()->get('level') == 1)
        <strong>Selamat datang!</strong> Anda login sebagai Admin.
     @else
        <strong>Selamat datang!</strong> Anda login sebagai kasir.
     @endif
   
</div>
<div class="row">
    @if (session()->get('level') == 1)
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-account-star-outline bg-primary  text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Staf</h5>
                </div>
                <h3 class="mt-4">{{ $staf }}</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-truck bg-success  text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Supplier</h5>
                </div>
                <h3 class="mt-4">{{ $supplier }}</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-account-multiple bg-warning  text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Pelanggan</h5>
                </div>
                <h3 class="mt-4">{{ $pelanggan }}</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="fa fa-clipboard-list bg-secondary  text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Sparepart</h5>
                </div>
                <h3 class="mt-4">{{ $sparepart }}</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="fa fa-shopping-cart bg-info  text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Purchase</h5>
                </div>
                <h3 class="mt-4">{{ $purchase }}</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="fa fa-shopping-cart bg-danger  text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Sale</h5>
                </div>
                <h3 class="mt-4">{{ $sale }}</h3>
            </div>
        </div>
    </div>
    @endif
</div>
@endSection