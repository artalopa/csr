<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-folder-multiple-image"></i>
                        <span class="hide-menu">Profil </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('profile-jepara.index') }}" class="sidebar-link">
                                <i class="mdi mdi-sale"></i>
                                <span class="hide-menu"> Kapupaten Jepara </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('profile-komite.index') }}" class="sidebar-link">
                                <i class="mdi mdi-percent"></i>
                                <span class="hide-menu"> Komite TSP </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('profile-regulasi.index') }}" class="sidebar-link">
                                <i class="mdi mdi-percent"></i>
                                <span class="hide-menu"> Regulasi </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-folder-multiple-image"></i>
                        <span class="hide-menu">Komite TSP </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('komite-tsp.index') }}" class="sidebar-link">
                                <i class="mdi mdi-sale"></i>
                                <span class="hide-menu"> Daftar Anggota </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('komite-tsp.create') }}" class="sidebar-link">
                                <i class="mdi mdi-percent"></i>
                                <span class="hide-menu"> Tambah Anggota </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-shopping"></i>
                        <span class="hide-menu">Berita </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('news.index') }}" class="sidebar-link">
                                <i class="mdi mdi-view-list"></i>
                                <span class="hide-menu"> Daftar Berita </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('news.create') }}" class="sidebar-link">
                                <i class="mdi mdi-database-plus"></i>
                                <span class="hide-menu"> Tambah Berita </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('news-category.index') }}" class="sidebar-link">
                                <i class="mdi mdi-playlist-plus"></i>
                                <span class="hide-menu"> Kategori Berita </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-folder-multiple-image"></i>
                        <span class="hide-menu">Kegiatan CSR </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('gallery-csr.index') }}" class="sidebar-link">
                                <i class="mdi mdi-view-list"></i>
                                <span class="hide-menu"> Daftar Kegiatan CSR </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('gallery-csr.create') }}" class="sidebar-link">
                                <i class="mdi mdi-database-plus"></i>
                                <span class="hide-menu"> Tambah Kegiatan CSR </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('gallery-csr-category.index') }}" class="sidebar-link">
                                <i class="mdi mdi-playlist-plus"></i>
                                <span class="hide-menu"> Kategori Kegiatan CSR </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-folder-multiple-image"></i>
                        <span class="hide-menu">Kegiatan Komite </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('gallery-committee.index') }}" class="sidebar-link">
                                <i class="mdi mdi-view-list"></i>
                                <span class="hide-menu"> Daftar Kegiatan Komite </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('gallery-committee.create') }}" class="sidebar-link">
                                <i class="mdi mdi-database-plus"></i>
                                <span class="hide-menu"> Tambah Kegiatan Komite </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('gallery-committee-category.index') }}" class="sidebar-link">
                                <i class="mdi mdi-playlist-plus"></i>
                                <span class="hide-menu"> Kategori Kegiatan Komite </span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-folder-multiple-image"></i>
                        <span class="hide-menu">Banner </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('banner-home.index') }}" class="sidebar-link">
                                <i class="mdi mdi-sale"></i>
                                <span class="hide-menu"> Banner Home </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-basic.html" class="sidebar-link">
                                <i class="mdi mdi-percent"></i>
                                <span class="hide-menu"> Banner Iklan </span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-folder-multiple-image"></i>
                        <span class="hide-menu">Laporan </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('report-years.index') }}" class="sidebar-link">
                                <i class="mdi mdi-sale"></i>
                                <span class="hide-menu"> Laporan Tahunan </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="mdi mdi-percent"></i>
                                <span class="hide-menu"> Program </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="mdi mdi-percent"></i>
                                <span class="hide-menu"> Sektor/Bidang </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="mdi mdi-percent"></i>
                                <span class="hide-menu"> Perusahaan </span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('about.index') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-information"></i>
                        <span class="hide-menu">Tentang Kami</span>
                    </a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('information.index') }}" aria-expanded="false">
                        <i class="mdi mdi-contacts"></i>
                        <span class="hide-menu">Informasi Kontak</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html"
                        aria-expanded="false">
                        <i class="mdi mdi-share"></i>
                        <span class="hide-menu">Media Sosial</span>
                    </a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                        aria-expanded="false">
                        <i class="mdi mdi-settings"></i>
                        <span class="hide-menu">Setting</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
