<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="<?=BASE_URL?>public/assets/img/favicon.png" type="image/x-icon"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
<link rel="stylesheet" href="<?=BASE_URL?>public/assets/css/form1.css" />
<title>Wilian Perkasa <?=($data['title'] != '' ? '| '.$data['title'] : '')?></title>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7/dist/sweetalert2.min.css" rel="stylesheet">
<style>
    a.disabled {
        pointer-events: none;
        cursor: default;
    }
</style>
</head>
<body>
<div class="container-fluid px-0" id="bg-div">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-12">
            <div class="card card0" style="border-radius: .55rem">
                <div class="d-flex" id="wrapper">
                    <!-- Sidebar -->
                    <div class="bg-light border-right" id="sidebar-wrapper">
                        <div class="sidebar-heading pt-5 pb-4 d-flex flex-column align-items-center">
                            <img src="<?=BASE_URL?>public/assets/img/unknown-user.png" alt="..." class="img-thumbnail" style="width: 125px" id="fotouser">
                            <div class="upload-foto">
                                <input type="file" name="photo" id="photopersonal" class="form-control mt-3 border-0 p-0" />
                                <button type="button" class="editphotobtn btn btn-sm btn-outline-secondary mt-3 d-none"><i class="fa fa-pencil-alt"></i>  Ubah Foto</button>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <a data-toggle="tab" href="#menu1" id="tab1" class="tabs list-group-item active">
                                <div class="list-div my-2">
                                    <i class="fa fa-user px-1"></i>  Data Pribadi
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu2" id="tab2" class="tabs list-group-item bg-light disabled">
                                <div class="list-div my-2">
                                    <i class="fa fa-address-book px-1"></i> Kontak dan Alamat
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu3" id="tab3" class="tabs list-group-item bg-light disabled">
                                <div class="list-div my-2">
                                    <i class="fa fa-id-card px-1"></i> Kartu Identitas 
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu4" id="tab4" class="tabs list-group-item bg-light disabled">
                                <div class="list-div my-2">
                                    <i class="fa fa-user-graduate px-1"></i> Riwayat Pendidikan
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu5" id="tab5" class="tabs list-group-item bg-light disabled">
                                <div class="list-div my-2">
                                    <i class="fa fa-briefcase px-1"></i> Riwayat Pekerjaan
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu6" id="tab6" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <i class="fa fa-home"></i> Informasi Keluarga
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu7" id="tab7" class="tabs list-group-item bg-light disabled">
                                <div class="list-div my-2">
                                    <div class="fa fa-address-card px-1"></div> Kontak Darurat
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu8" id="tab8" class="tabs list-group-item bg-light disabled">
                                <div class="list-div my-2">
                                    <div class="fa fa-sitemap px-1"></div> Daftar Kegiatan Keorganisasian
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu9" id="tab9" class="tabs list-group-item bg-light disabled">
                                <div class="list-div my-2">
                                    <div class="fa fa-question-circle px-1"></div> Pertanyaan
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu10" id="tab10" class="tabs list-group-item bg-light disabled">
                                <div class="list-div my-2">
                                    <div class="fa fa-paperclip px-1"></div> Lampiran
                                </div>
                            </a>

                            
                        </div>
                    </div> <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <div class="row pt-3" id="border-btm">
                            <div class="col-8">
                                <div class="row justify-content-start">
                                    <div class="col-3">
                                        <p class="mb-0 mt-4 text-start font-weight-bold">Position Applied</p>
                                    </div>
                                    <div class="col-6">
                                    <p class="mb-0 mt-4 font-weight-bold">: 
                                            <?php foreach($data['model'] as $row): ?><?=$row['title']?>
                                        <?php endforeach;?>
                                    </p>
                                    </div>
                                </div>
                                <div class="row justify-content-right">
                                    <div class="col-3">
                                        <p class="mb-0 text-start font-weight-bold">Submitte Date</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0">: <?=date('d/m/Y')?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4"> 
                                <button class="d-none btn btn-success mt-4 ml-3 mb-3" id="menu-toggle">
                                    <div class="bar4"></div>
                                    <div class="bar4"></div>
                                    <div class="bar4"></div>
                                </button>
                                <img src="http://localhost/webs/public/assets/img/WPG_logo_gold1.png" class="w-25 float-right mr-5">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center" id="test"></div>
                        </div>
                        <h6 class="text-center pb-5 text-danger" style="margin-top:-1.5rem">* Harap lengkapi form ini terlebih dahulu , untuk bisa lanjut ke proses berikutnya : </h6>
                        <div class="tab-content pb-5">
                            <div id="menu1" class="tab-pane active">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pribadi</h3>
                                            <form onsubmit="event.preventDefault()" id="identityform">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label for="inputName">Nama Lengkap <span class="font-weight-bold text-danger">*</span></label>
                                                    <input type="hidden" name="careerid" value="<?=$data['careerid']?>" />
                                                    <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label for="inputSex">Jenis Kelamin</label>  
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inputSex" value="Pria" required>
                                                            <label class="form-check-label" for="inputSex">Pria</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inputSex" value="Wanita">
                                                            <label class="form-check-label" for="inputSex">Wanita</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label for="inputBirthcity">Tempat Kelahiran</label>
                                                    <input type="text" class="form-control" id="inputBirthcity" placeholder="Tempat Kelahiran" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label for="inputBirthdate">Tanggal Kelahiran</label>
                                                    <input type="date" class="form-control" id="inputBirthdate" placeholder="Tanggal Kelahiran" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label for="inputMarital">Status Pernikahan</label>
                                                    <select id="inputMarital" class="custom-select" required>
                                                        <option value="">Pilih</option>
                                                        <option value="Belum Menikah">Belum Menikah</option> 
                                                        <option value="Menikah">Menikah</option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label for="inputNationally">Kewarganegaraan</label>
                                                    <select id="inputNationally" class="custom-select" required>
                                                        <option value="">Pilih</option>
                                                        <option value="WNI">WNI</option> 
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputNPWP">No NPWP</label>
                                                    <input type="text" class="form-control" id="inputNPWP" placeholder="No NPWP">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label for="inputFresh">Lulusan Terbaru</label>
                                                    <select id="inputFresh" class="custom-select">
                                                        <option value="">Pilih</option>
                                                        <option value="Ya">Ya</option> 
                                                        <option value="Tidak">Tidak</option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label for="inputEmail">Alamat Email</label>
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="Alamat Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputReligion">Agama</label>
                                                    <select id="inputReligion" class="custom-select" required>
                                                        <option value="">Pilih</option>
                                                        <option value="Budha">Budha</option> 
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Katholik">Katholik</option>
                                                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                        <option value="Others">Others</option>
                                                        <option value="Protestan">Protestan</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-secondary first-step mr-5 checkverify">Next <i class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data kontak dan alamat</h3>
                                            <form onsubmit="event.preventDefault()" id="identitycontact">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                        <label for="inputAddress1">Alamat KTP</label>
                                                        <input type="text" class="form-control" id="inputAddress1" placeholder="Alamat KTP">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                        <label for="inputAddress2">Alamat Saat Ini</label>
                                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Alamat Saat Ini">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                        <label for="inputMobile">No HP</label>
                                                        <input type="text" class="form-control" id="inputMobile" placeholder="No HP yang Dapat Dihubungi">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary mr-5" onclick="prev(1)"><i class="fa fa-arrow-left"></i> Prev</button>
                                                    <button type="button" class="btn page2 btn-secondary mr-5">Next <i class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane">
                                <form onsubmit="event.preventDefault()" id="identitycard">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                    <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pribadi</h3>
                                        <div class="form-row" id="srcIdentity">
                                            <div class="col-1 d-none"><button class="btn btn-danger btn-sm" style="margin-top:2.34rem" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="fa fa-trash text-end"></i></button>
                                            </div>
                                            <input type="hidden" name="identityid" value=""/>
                                            <div class="form-group col-md-3">
                                                <label for="inputIdentity1">Kartu Identitas </label>
                                                <select id="inputIdentity1" class="custom-select">
                                                        <option value="">Pilih</option>
                                                        <option value="BPJS">BPJS Kesehatan</option> 
                                                        <option value="KK">Kartu Keluarga</option>
                                                        <option value="KPJ">KPJ</option>
                                                        <option value="KTP">KTP</option>
                                                        <option value="Passport">Passport</option>
                                                        <option value="SIM A">SIM A</option>
                                                        <option value="SIM B">SIM B</option>
                                                        <option value="SIM C">SIM C</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputCardNo1">No Identitas </label>
                                                <input type="text" class="form-control" id="inputCardNo1" placeholder="No Identitas">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputPublish1">Penerbit </label>
                                                <input type="text" class="form-control" id="inputPublish1" placeholder="Penerbit">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputExpired1">Tanggal Kadaluarsa </label>
                                                <input type="date" class="form-control" id="inputExpired1" placeholder="Tanggal Kadaluarsa">
                                            </div>
                                        </div>
                                        <div id="dstIdentity"></div>
                                        <div><button class="btn btn-outline-primary btn-sm" id="addfrmIdentity"><i class="fa fa-save"></i> Simpan</button> </div>
                                        <div class="separator"></div>
                                        <div class="table-identitycard table-responsive d-none">
                                            <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Jenis Identitas</th>
                                                <th scope="col">No Identitas</th>
                                                <th scope="col">Penerbit</th>
                                                <th scope="col">Tanggal Kadaluarsa</th>
                                                <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbidentitycard">
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary mr-5" onclick="prev(2)"><i class="fa fa-arrow-left"></i> Prev</button>
                                            <button type="button" class="btn btn-secondary mr-5 page3" >Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div id="menu4" class="tab-pane">
                                <form onsubmit="event.preventDefault()" id="educationhistory">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pendidikan</h3>
                                        <div class="form-row" id="srcEducation">
                                            <div class="col-1 d-none"><button class="btn btn-danger btn-sm" style="margin-top:2.34rem" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="fa fa-trash text-end"></i></button>
                                            </div>
                                            <input type="hidden" name="educationid" value=""/>
                                            <div class="form-group col-md-3">
                                                <label for="inputTitle1">Gelar </label>
                                                <select id="inputTitle1" class="custom-select">
                                                        <option value="">Pilih</option>
                                                        <option value="D1">D1</option> 
                                                        <option value="D2">D2</option>
                                                        <option value="D3">D3</option>
                                                        <option value="D4">D4</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMA">SMA/SLTA/SMK/MAN</option>
                                                        <option value="SMP">SMP/SLTP/MTSn</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputMajor1">Jurusan </label>
                                                <input type="text" class="form-control" id="inputMajor1" placeholder="Jurusan / Isi - jika tidak ada jurusan">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputInstitute1">Nama Institusi </label>
                                                <input type="text" class="form-control" id="inputInstitute1" placeholder="Nama Institusi">
                                            </div>
                                            <div class="col-1 d-none"></div>
                                            <div class="form-group col-md-3">
                                                <label for="inputStartEducation1">Tahun Masuk </label>
                                                <input type="number" class="form-control" data-maxlength="4" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" id="inputStartEducation1" />
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputEndEducation1">Tahun Selesai </label>
                                                <input type="number" class="form-control" data-maxlength="4" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" id="inputEndEducation1" />
                                            </div>
                                        </div>
                                        <div id="dstEducation"></div>
                                        <div><button class="btn btn-outline-primary btn-sm" id="addfrmEducation"><i class="fa fa-save"></i> Simpan</button> </div>
                                        <div class="separator"></div>
                                        <div class="table-educationhistory table-responsive d-none">
                                            <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Gelar</th>
                                                <th scope="col">Jurusan</th>
                                                <th scope="col">Institusi</th>
                                                <th scope="col">Tahun Masuk</th>
                                                <th scope="col">Tahun Selesai</th>
                                                <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbeducationhistory">
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary mr-5" onclick="prev(3)"><i class="fa fa-arrow-left"></i> Prev</button>
                                            <button type="button" class="btn btn-secondary mr-5 page4" >Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div id="menu5" class="tab-pane">
                                <form onsubmit="event.preventDefault()" id="workexperience">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h3 class="mt-0 mb-5 text-center content-title d-none d-none">Silahkan lengkapi data Pengalaman Kerja</h3>
                                        <div class="form-row" id="srcJob">
                                            <div class="col-1 d-none"><button class="btn btn-danger btn-sm" style="margin-top:2.34rem" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="fa fa-trash text-end"></i></button>
                                            </div>
                                            <input type="hidden" name="experienceid" value=""/>
                                            <div class="form-group col-md-4">
                                                <label for="inputCompany1">Nama Perusahaan </label>
                                                <input type="text" class="form-control" id="inputCompany1" placeholder="Nama Perusahaan">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputCardNo1">Jabatan </label>
                                                <input type="text" class="form-control" id="inputPosition1" placeholder="Jabatan">
                                            </div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-3">
                                                <label for="inputJoinDate1">Tanggal Bergabung </label>
                                                <input type="date" class="form-control" id="inputJoinDate1" placeholder="Tanggal Bergabung">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputResignDate1">Tanggal Berhenti </label>
                                                <input type="date" class="form-control" id="inputResignDate1" placeholder="Tanggal Berhenti">
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-11">
                                                <label for="inputJobDesc1">Tugas & Tanggung Jawab </label>
                                                <textarea class="form-control" id="inputJobDesc1" placeholder="Tugas & Tanggung Jawab Pekerjaan"></textarea>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-11">
                                                <label for="inputReason1">Alasan Berhenti </label>
                                                <textarea class="form-control" id="inputReason1" placeholder="Alasan Berhenti"></textarea>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-3">
                                                <label for="inputLastWage1">Penghasilan Terakhir </label>
                                                <input type="number" class="form-control number-separator" id="inputLastWage1"  data-maxlength="9" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" placeholder="Penghasilan Terakhir" />
                                            </div>
                                        </div>
                                        <div id="dstJob"></div>
                                        <div><button class="btn btn-outline-primary btn-sm" id="addfrmJob"><i class="fa fa-save"></i> Simpan</button> </div>
                                        <div class="separator"></div>
                                        <div class="table-workexperience table-responsive d-none">
                                            <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Perusahaan</th>
                                                <th scope="col">Jabatan</th>
                                                <th scope="col">Tanggal Bergabung</th>
                                                <th scope="col">Tanggal Berhenti</th>
                                                <th scope="col">Tugas</th>
                                                <th scope="col">Alasan Berhenti</th>
                                                <th scope="col">Penghasilan Terakhir</th>
                                                <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbworkexperience">
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary mr-5" onclick="prev(4)"><i class="fa fa-arrow-left"></i> Prev</button>
                                            <button type="button" class="btn btn-secondary mr-5 page-5" >Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div id="menu6" class="tab-pane">
                                <form onsubmit="event.preventDefault()" id="family">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pribadi</h3>
                                        <div class="form-row" id="srcFamily">
                                            <div class="col-1 d-none"><button class="btn btn-danger btn-sm" style="margin-top:2.34rem" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="fa fa-trash text-end"></i></button>
                                            </div>
                                            <input type="hidden" name="familyid" value=""/>
                                            <div class="form-group col-md-4">
                                                <label for="inputRelationFam1">Hubungan Keluarga </label>
                                                <select id="inputRelationFam1" class="custom-select">
                                                        <option value="">Pilih</option>
                                                        <option value="Adik">Adik</option> 
                                                        <option value="Anak">Anak</option>
                                                        <option value="Ayah">Ayah</option>
                                                        <option value="Abang">Abang</option>
                                                        <option value="Ibu">Ibu</option>
                                                        <option value="Istri">Istri</option>
                                                        <option value="Suami">Suami</option>
                                                        <option value="Kakak">Kakak</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputFamilyName1">Nama </label>
                                                <input type="text" class="form-control" id="inputFamilyName1" placeholder="Jabatan">
                                            </div>
                                            <div class="col-3"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-3">
                                                <label for="inputFamilyEducation1">Pendidikan Terakhir </label>
                                                <select id="inputFamilyEducation1" class="custom-select">
                                                        <option value="">Pilih</option>
                                                        <option value="D1">D1</option> 
                                                        <option value="D2">D2</option>
                                                        <option value="D3">D3</option>
                                                        <option value="D4">D4</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMA">SMA/SLTA/SMK/MAN</option>
                                                        <option value="SMP">SMP/SLTP/MTSn</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputFamilyJobs1">Pekerjaan </label>
                                                <input type="text" class="form-control" id="inputFamilyJobs1" placeholder="Pekerjaan">
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-3">
                                                <label for="inputFamilyBirth1">Tempat Lahir </label>
                                                <input type="text" class="form-control" id="inputFamilyBirth1" placeholder="Tempat Lahir">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputFamilyBirthdate1">Tanggal Lahir </label>
                                                <input type="date" class="form-control" id="inputFamilyBirthdate1" placeholder="Tanggal Lahir">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputFamilyStatus1">Almarhum </label>
                                                <select id="inputFamilyStatus1" class="custom-select">
                                                        <option>Pilih</option>
                                                        <option value="Yes">Yes</option> 
                                                        <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-5">
                                                <label for="inputFamilyComp1">Perusahaan </label>
                                                <input type="text" class="form-control" id="inputFamilyComp1" placeholder="Perusahaan">
                                            </div>
                                            <div class="col-md-6"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-11">
                                                <label for="inputFamilyCompAddress1">Alamat Perusahaan </label>
                                                <textarea class="form-control" id="inputFamilyCompAddress1" placeholder="Alamat Perusahaan"></textarea>
                                            </div>
                                        </div>
                                        <div id="dstFamily"></div>
                                        <div><button class="btn btn-outline-primary btn-sm" id="addfrmFamily"><i class="fa fa-save"></i> Simpan</button> </div>
                                        <div class="separator"></div>
                                        <div class="table-family table-responsive d-none">
                                            <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Hubungan</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Pendidikan</th>
                                                <th scope="col">Pekerjaan</th>
                                                <th scope="col">Tempat Lahir</th>
                                                <th scope="col">Tanggal Lahir</th>
                                                <th scope="col">Almarhum ?</th>
                                                <th scope="col">Perusahaan</th>
                                                <th scope="col">Alamat Perusahaan</th>
                                                <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbfamily">
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary mr-5" onclick="prev(5)"><i class="fa fa-arrow-left"></i> Prev</button>
                                            <button type="button" class="btn btn-secondary mr-5 page-6">Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div id="menu7" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pribadi</h3>
                                        <div class="form-row" id="srcContactEm" style="display: none">
                                            <div class="col-1"><button class="btn btn-danger btn-sm" style="margin-top:2.34rem" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="fa fa-trash text-end"></i></button>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputContactFam">Hubungan </label>
                                                <input type="text" class="form-control"  id="inputContactFam"  placeholder="Hubungan" />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputContactName">Nama </label>
                                                <input type="text" class="form-control" id="inputContactName" placeholder="Jabatan">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputContactTelp">No. Telepon </label>
                                                <input type="text" class="form-control" id="inputContactTelp" placeholder="Jabatan">
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-11">
                                                <label for="inputContactAddress">Alamat </label>
                                                <textarea class="form-control" id="inputContactAddress" placeholder="Alamat"></textarea>
                                            </div>
                                        </div>
                                        <div id="dstContactEm"></div>
                                        <div><button class="btn btn-outline-primary btn-sm" id="addfrmContactEm"><i class="fa fa-plus"></i> Add More</button> </div>
                                        <div class="separator"></div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary mr-5" onclick="prev(6)"><i class="fa fa-arrow-left"></i> Prev</button>
                                            <button type="button" class="btn btn-secondary mr-5" onclick="next(7)">Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu8" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pribadi</h3>
                                        <div class="form-row" id="srcOrg" style="display: none">
                                            <div class="col-1"><button class="btn btn-danger btn-sm" style="margin-top:2.34rem" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="fa fa-trash text-end"></i></button>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputOrgName">Nama Organisasi </label>
                                                <input type="text" class="form-control"  id="inputOrgName"  placeholder="Nama Organisasi" />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputOrgPosition">Jabatan </label>
                                                <input type="text" class="form-control" id="inputOrgPosition" placeholder="Jabatan">
                                            </div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-4">
                                                <label for="inputOrgStartPeriod">Periode Mulai </label>
                                                <input type="text" class="form-control" id="inputOrgStartPeriod" placeholder="Jabatan">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputOrgEndPeriod">Periode Selesai </label>
                                                <input type="text" class="form-control" id="inputOrgEndPeriod" placeholder="Jabatan">
                                            </div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-11">
                                                <label for="inputOrgJobs">Tugas / Kegiatan Organisasi </label>
                                                <textarea class="form-control" id="inputOrgJobs" placeholder="Tugas / Deskripsi Organisasi"></textarea>
                                            </div>
                                        </div>
                                        <div id="dstOrg"></div>
                                        <div><button class="btn btn-outline-primary btn-sm" id="addfrmOrg"><i class="fa fa-plus"></i> Add More</button> </div>
                                        <div class="separator"></div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary mr-5" onclick="prev(7)"><i class="fa fa-arrow-left"></i> Prev</button>
                                            <button type="button" class="btn btn-secondary mr-5" onclick="next(8)">Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu9" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pribadi</h3>
                                        <div class="form-row" id="question">
                                            <div class="form-group col-12">
                                                <label for="labelTitle"><span class="font-weight-bold">1. Question / Pertanyaan </span></label>
                                                <h6>How much notice are you required to give your current employer? Berapa lama waktu pemberitahuan pengunduran diri Anda yang perlu disampaikan ke pemberi kerja Anda?</h6>
                                                <input type="text" id="question1" class="form-control" placeholder="answer" />
                                                <div class="separator"></div>
                                                <h6>Are you willing to undergo a pre-employment background check? Apakah Anda bersedia menjalani pemeriksaan latar belakang sebelum diterima bekerja?</h6>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="question2" value="Yes">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="question2" value="No">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                                <div class="separator"></div>
                                                <h6>Are you willing to undergo a pre-employment medical check? Apakah Anda bersedia menjalani pemeriksaan kesehatan sebelum diterima bekerja?</h6>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="question3" value="Yes">
                                                    <label class="form-check-label" for="">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="question3" value="No">
                                                    <label class="form-check-label" for="">No</label>
                                                </div>
                                                <div class="separator"></div>
                                                <h6>Apakah Anda memiliki riwayat penyakit tertentu? Jika Ya, sebutkan nama penyakitnya.</h6>
                                                <input type="text" id="question4" class="form-control" placeholder="answer" />
                                                <div class="separator"></div>
                                                <h6>Apakah Anda memiliki buta warna ?</h6>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="question3" value="Yes">
                                                    <label class="form-check-label" for="">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="question3" value="No">
                                                    <label class="form-check-label" for="">No</label>
                                                </div>
                                                <div class="separator"></div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary mr-5" onclick="prev(8)"><i class="fa fa-arrow-left"></i> Prev</button>
                                                    <button type="button" class="btn btn-secondary mr-5" onclick="next(9)">Next <i class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu10" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="form-row" id="attachment">
                                            <div class="form-group col-12">
                                                <label for="labelTitle"><span class="font-weight-bold">Upload CV </span></label>
                                                <input type="file" id="attachcv" class="form-control" />
                                                <button class="btn btn-outline-primary mt-4 text-center" value="Upload">Upload Dokumen CV</button>
                                                <div class="separator"></div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary mr-5" onclick="prev(9)"><i class="fa fa-arrow-left"></i> Prev</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="submit my-5 d-flex justify-content-center gap-3">
                                    <button type="submit" class="btn btn-success mr-5">Kirim</button>
                                    <button type="button" class="btn btn-danger">Reset Form</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?=BASE_URL?>public/assets/js/easy-number-separator-master/easy-number-separator.js"></script>
<script src="<?=BASE_URL?>public/assets/js/career-button.js"></script>
<script type="text/javascript">
    // console.log(tabpane)
    function next(number) 
    {
        const tabpane = document.querySelector('.tab-pane.active')
        tabpane.classList.remove('active');
        document.querySelector(`#menu${number}`).classList.remove('active')
        document.querySelector('.tabs.list-group-item.active').classList.remove('active')
        number++;
        document.querySelector(`#menu${number}`).classList.add('active')
        document.querySelector(`#tab${number}`).classList.add('active')
        const tabpaneAll = document.querySelectorAll('.tabs.list-group-item')
        document.querySelector('#test').innerText = arr[number-1]
        
        
    }
    function prev(number) 
    {   
        const tabpane = document.querySelector('.tab-pane.active')
        const grouplist = document.querySelector('.tabs.list-group-item.active')
        tabpane.classList.remove('active');
        grouplist.classList.remove('active')
        tabpane.previousElementSibling.classList.add('active')
        grouplist.previousElementSibling.classList.add('active')
        document.querySelector('#test').innerText = arr[number-1]
    }
</script>
<script>
     easyNumberSeparator({
      selector: '.number-separator',
      separator: ',',
      decimalSeparator: '.',
      resultInput: '#result_input',
    })
</script>
<script src="<?=BASE_URL?>public/assets/js/career.js"></script>
</body>
</html>