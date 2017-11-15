    <div class="sidebar" data-color="azure" data-image="{{ URL::asset('ad/img/sidebar-4.jpg') }}">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('')}}" class="simple-text">
                    Form Pelayanan
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{url('/admin')}}">
                        <i class="pe-7s-keypad"></i>
                        <p>Overview</p>
                    </a>
                </li>
                <li>
					<a data-toggle="collapse" href="#krs" class="collapsed" aria-expanded="false">
						<i class="pe-7s-news-paper"></i>
                        <p>KRS
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="krs" aria-expanded="false" style="height: 0px;">
						<ul class="nav">
							<li>
								<a href="#">
									<span class="sidebar-normal">KRS Sementara</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="sidebar-normal">Perbaikan Nilai</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
                <li>
					<a data-toggle="collapse" href="#pkl" class="collapsed" aria-expanded="false">
						<i class="pe-7s-id"></i>
                        <p>PKL/KP
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="pkl" aria-expanded="false" style="height: 0px;">
						<ul class="nav">
							<li>
								<a href="{{route('admin_pendaftaran_pkl')}}">
									<span class="sidebar-normal">Pendaftaran PKL</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="sidebar-normal">Seminar PKL</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
                <li>
					<a data-toggle="collapse" href="#skripsi" class="collapsed" aria-expanded="false">
						<i class="pe-7s-notebook"></i>
                        <p>Skripsi
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="skripsi" aria-expanded="false" style="height: 0px;">
						<ul class="nav">
							<li>
								<a href="#">
									<span class="sidebar-normal">Pengajuan Tema</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="sidebar-normal">Pengambilan Data</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="sidebar-normal">Ujian Skripsi</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
                <li>
					<a data-toggle="collapse" href="#Seminar" class="collapsed" aria-expanded="false">
						<i class="pe-7s-display1"></i>
                        <p>Seminar
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="Seminar" aria-expanded="false" style="height: 0px;">
						<ul class="nav">
							<li>
								<a href="#">
									<span class="sidebar-normal">Seminar Usul</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="sidebar-normal">Seminar Hasil</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="sidebar-normal">Daftar Hadir</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
                <li>
					<a data-toggle="collapse" href="#Ceklis" class="collapsed" aria-expanded="false">
						<i class="pe-7s-note2"></i>
                        <p>Ceklis
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="Ceklis" aria-expanded="false" style="height: 0px;">
						<ul class="nav">
							<li>
								<a href="#">
									<span class="sidebar-normal">Alih Program (Luar)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="sidebar-normal">Alih Program (dalam)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="sidebar-normal">Data Lulusan</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
                <li>
					<a data-toggle="collapse" href="#Setting" class="collapsed" aria-expanded="false">
						<i class="pe-7s-config"></i>
                        <p>Setting
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="Setting" aria-expanded="false" style="height: 0px;">
						<ul class="nav">
							<li>
								<a href="{{route('form_template')}}">
									<span class="sidebar-normal">Form Templates</span>
								</a>
							</li>
							<li>
								<a href="{{route('admin_dosen')}}">
									<span class="sidebar-normal">Data Dosen</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="sidebar-normal">Data Lulusan</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
                <li class="">
                    <a href="#">
                        <i class="pe-7s-help1"></i>
                        <p>Bantuan</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>