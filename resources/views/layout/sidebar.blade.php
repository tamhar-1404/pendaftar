<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="master" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-chat">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-check-double"></i>
                        <span key="t-dashboards">Approval</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('registration.index') }}" key="t-tui-calendar">Pendaftaran</a></li>
                        <li><a href="{{ route('permission.index') }}" key="t-full-calendar">Izin & Sakit</a></li>
                        <li><a href="{{ route('TopUp.index') }}" key="t-full-calendar">TopUp</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bar-chart-alt-2"></i>
                        <span key="t-dashboards">Pendataan Admin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/data-jurnal" key="t-tui-calendar">Jurnal</a></li>
                        <li><a href="/data-absensi" key="t-full-calendar">Absensi Hari ini</a></li>
                        <li><a href="/cek-absensi" key="t-full-calendar">Absensi</a></li>
                        <li><a href="#" key="t-full-calendar">Report</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-dashboards">User</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('siswa_admin.index') }}" key="t-tui-calendar">Siswa</a></li>
                        <li><a href="{{ route('alumni_admin.index') }}" key="t-full-calendar">Alumni</a></li>
                        <li><a href="{{ route('guru_admin.index') }}" key="t-full-calendar">Penanggung Jawab</a></li>
                        <li><a href="{{ route('rfid') }}" key="t-full-calendar">RFID</a></li>
                        <li><a href="{{ route('list-rejected') }}" key="t-full-calendar">Siswa Ditolak</a></li>
                        <li><a href="{{ route('list-banned') }}" key="t-full-calendar">Banned Siswa</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-money"></i>
                        <span key="t-dashboards">Transaksi</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('barang.index') }}" key="t-tui-calendar">Pendataan barang</a></li>
                        <li><a href="{{ route('opname.index') }}" key="t-full-calendar">Opname</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-history"></i>
                        <span key="t-dashboards">History</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="history-topup" key="t-tui-calendar">TopUp</a></li>
                        <li><a href="history-transaksi" key="t-full-calendar">Transaksi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-shield-quarter"></i>
                        <span key="t-dashboards">Peraturan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="data-tertib" key="t-tui-calendar">Tata Tertib</a></li>
                        <li><a href="laporan-siswa" key="t-full-calendar">Laporan Siswa</a></li>
                        <li><a href="laporan-sp" key="t-full-calendar">Laporan Sp</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-customize"></i>
                        <span key="t-dashboards">Lainnya</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="news" key="t-tui-calendar">Berita</a></li>
                        <li><a href="piket-siswa" key="t-full-calendar">Jadwal Piket</a></li>
                        <li><a href="data-mou" key="t-full-calendar">MOU</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
