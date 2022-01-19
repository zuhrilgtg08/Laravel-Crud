<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('templateargon/img/QDS-Lanscap.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            {{-- <img alt="image" src="{{ asset('templateargon/img/profile/user-default.png') }}" class="rounded-circle mr-1"> --}}
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile', auth()->user()->id) }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('templateargon/argon/img/brand/blue.png') }}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                            aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fas fa-tachometer-alt text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>

                {{-- <li class="nav-item ">
                    <a class="nav-link {{ isset($sbActive) && $sbActive === 'pasien' ? 'active' : '' }}"
                        href="{{ route('list-pasien.index') }}">
                        <i class="fas fa-user text-primary"></i> {{ __('Pasien') }}
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link {{isset($sbMasterDt) && $sbMasterDt === true ? 'active': ''}}"
                        href="#navbar-karyawan" data-toggle="collapse" role="button"
                        aria-expanded="{{isset($sbMasterDt) && $sbMasterDt === true ? 'true': 'false'}}"
                        aria-controls="navbar-karyawan">
                        <i class="fa fa-database text-primary"></i>
                        <span class="nav-link-text">{{ __('Master Data') }}</span>
                    </a>

                    {{-- <div class="collapse show" id="navbar-karyawan"> --}}
                        <div class="collapse {{isset($sbMasterDt) && $sbMasterDt === true ? 'show': ''}}"
                            id="navbar-karyawan">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.dokter' ? 'active' : '' }}"
                                        href="{{ route('dokter.index') }}">
                                        {{ __('Dokter') }}
                                    </a> --}}
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.karyawan' ? 'active' : '' }}"
                                        href="{{ route('karyawan.index') }}">
                                        {{ __('Karyawan') }}
                                    </a> --}}
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.terapi' ? 'active' : '' }}"
                                        href="{{ route('terapi.index') }}">
                                        {{ __('Terapi') }}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.diagnosa' ? 'active' : '' }}"
                                        href="{{ route('diagnosa.index') }}">
                                        {{'Diagnosa'}}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.lab' ? 'active' : '' }}"
                                        href="{{ route('lab.index') }}">
                                        {{'Laboratory'}}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.perusahaan' ? 'active' : '' }}"
                                        href="{{ route('perusahaan.index') }}">
                                        {{'Perusahaan'}}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.supplier' ? 'active' : '' }}"
                                        href="{{ route('supplier.index') }}">
                                        {{ __('Supplier') }}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.jenisBarang' ? 'active' : '' }}"
                                        href="{{ route('jenis-barang.index') }}">
                                        {{ __('Jenis Barang') }}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.inventory' ? 'active' : '' }}"
                                        href="{{ route('inventory.index') }}">
                                        {{ __('Inventory') }}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.dokterKonsul' ? 'active' : '' }}"
                                        href="{{ url('dokter-konsul') }}">
                                        {{ __('Dokter Konsul') }}
                                    </a> --}}
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.rumahSakit' ? 'active' : '' }}"
                                        href="{{ url('rumah-sakit') }}">
                                        {{ __('Rumah Sakit') }}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.jenisObat' ? 'active' : '' }}"
                                        href="{{ route('jenis-obat.index') }}">
                                        {{'Jenis Obat'}}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.kandunganObat' ? 'active' : '' }}"
                                        href="{{ route('kandungan-obat.index') }}">
                                        {{'Kandungan Obat'}}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.produsenObat' ? 'active' : '' }}"
                                        href="{{ route('produsenObat.index') }}">
                                        {{ __('Produsen Obat') }}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.obat' ? 'active' : '' }}"
                                        href="{{ route('obat.index') }}">
                                        {{ __('Obat') }}
                                    </a> --}}
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.dentalLab' ? 'active' : '' }}"
                                        href="{{ route('dentalLaboratory.index') }}">
                                        {{'Dental Laboratory'}}
                                    </a> --}}
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.pekerjaan' ? 'active' : '' }}"
                                        href="{{ route('pekerjaanlab.index') }}">
                                        {{'Pekerjaan'}}
                                    </a> --}}
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'master.warnaGigi' ? 'active' : '' }}"
                                        href="{{ route('warna-gigi.index') }}">
                                        {{'Warna Gigi'}}
                                    </a> --}}
                                </li>
                            </ul>
                        </div>
                </li>


                <li class="nav-item ">
                    {{-- <a class="nav-link {{ isset($sbActive) && $sbActive === 'tindakan' ? 'active' : '' }}"
                        href="{{ url('/tindakan') }}">
                        <i class="ni ni-satisfied text-primary"></i> {{ __('Tindakan') }}
                    </a> --}}
                </li>
                <li class="nav-item {{ isset($sbActive) && $sbActive === 'roles' ? 'active' : '' }}">
                    {{-- <a class="nav-link" href="{{ route('role.index') }}">
                        <i class="fas fa-shield-alt text-primary"></i> {{ __('Role') }}
                    </a> --}}
                </li>
                <li class="nav-item d-none">
                    {{-- <a class="nav-link" href="{{ route('icons') }}">
                        <i class="ni ni-planet text-blue"></i> {{ __('Icons') }}
                    </a> --}}
                </li>
            </ul>
        </div>
    </div>
</nav>