<form action="{{ url('pendaftaran-pkl') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center ">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group form-group-no-border">
                    <label class="control-label col-sm-10 offset-sm-1" for="nama">Nama:</label>
                    <div class="col-sm-10 offset-sm-1">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div><br>
                <div class="form-group form-group-no-border">
                    <label class="control-label col-sm-10 offset-sm-1" for="npm">NPM:</label>
                    <div class="col-sm-10 offset-sm-1">
                        <input type="text" class="form-control" name="npm">    
                    </div>
                </div><br>
                <div class="form-group form-group-no-border">
                    <label  class="control-label col-sm-10 offset-sm-1" for="program_studi">Program Studi:</label>
                    <div class="col-sm-10 offset-sm-1">
                        <div class="radio">
                            <input type="radio" name="program_studi" id="radio1" value="S1 Ilmu Komputer">
                            <label for="radio1">
                                S1 Ilmu Komputer
                            </label>    
                        </div>
                        <div class="radio">
                            <input type="radio" name="program_studi" id="radio2" value="D3 Manajemen Informatika" checked="">
                            <label for="radio2">
                                D3 Manajemen Informatika
                            </label>
                        </div>
                    </div>
                </div><br>
                <div class="form-group form-group-no-border">
                    <label  class="control-label col-sm-10 offset-sm-1" for="semester">Semester:</label>
                    <div class="col-sm-10 offset-sm-1">
                        <div class="radio">
                            <input type="radio" name="semester" id="radio3" value="GANJIL">
                            <label for="radio1">
                                Ganjil
                            </label>    
                        </div>
                        <div class="radio">
                            <input type="radio" name="semester" id="radio4" value="GENAP" checked="">
                            <label for="radio2">
                                Genap
                            </label>
                        </div>
                    </div>
                </div><br>
                <div class="form-group form-group-no-border">
                    <label  class="control-label col-sm-10 offset-sm-1" for="tahun_ajar">Tahun Ajar:</label>
                    <div class="col-sm-10 offset-sm-1">
                        <input type="text" class="form-control" name="tahun_ajar" placeholder="2000/2001">
                    </div>
                </div><br>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-group-no-border">
                    <label  class="control-label col-sm-10 offset-sm-1" for="dosen_pa">Dosen PA:</label>
                    <div class="col-sm-10 offset-sm-1">
                        <input type="text" class="form-control" name="dosen_pa">
                    </div>
                </div><br>
                <div class="form-group form-group-no-border">
                    <label  class="control-label col-sm-10 offset-sm-1" for="nip_pa">NIP:</label>
                    <div class="col-sm-10 offset-sm-1">
                        <input type="text" class="form-control" name="nip_pa">
                    </div>
                </div><br>
                <div class="form-group form-group-no-border">
                    <label  class="control-label col-sm-10 offset-sm-1" for="tempat_pkl">Tempat PKL:</label>
                    <div class="col-sm-10 offset-sm-1">
                        <input type="text" class="form-control" name="tempat_pkl">
                    </div>
                </div><br>
                <div class="form-group form-group-no-border">
                    <label  class="control-label col-sm-10 offset-sm-1" for="alamat_pkl">Alamat PKL:</label>
                    <div class="col-sm-10 offset-sm-1">
                        <textarea class="form-control" rows="5" name="alamat_pkl"></textarea>
                    </div>
                </div><br>
            </div>
        </div> 
    </div>
    <div class="space"></div>
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="form-group form-group-no-border">
                <button type="submit" class="btn btn-info">Print</button>
            </div>
        </div>
    </div>
</form> 