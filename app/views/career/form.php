<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
<link rel="stylesheet" href="<?=BASE_URL?>public/assets/css/form1.css" />
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
                            <a data-toggle="tab" href="#menu2" id="tab2" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <i class="fa fa-address-book px-1"></i> Kontak dan Alamat
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu3" id="tab3" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <i class="fa fa-id-card px-1"></i> Kartu Identitas 
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu4" id="tab4" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <i class="fa fa-user-graduate px-1"></i> Riwayat Pendidikan
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu5" id="tab5" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <i class="fa fa-briefcase px-1"></i> Riwayat Pekerjaan
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu6" id="tab6" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <i class="fa fa-home"></i> Informasi Keluarga
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu7" id="tab7" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-address-card px-1"></div> Kontak Darurat
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu8" id="tab8" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-sitemap px-1"></div> Daftar Kegiatan Keorganisasian
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu9" id="tab9" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-question-circle px-1"></div> Pertanyaan
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu10" id="tab10" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-paperclip px-1"></div> Lampiran
                                </div>
                            </a>

                            
                        </div>
                    </div> <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <div class="row pt-3" id="border-btm">
                            <div class="col-4"> <button class="btn btn-success mt-4 ml-3 mb-3" id="menu-toggle">
                                    <div class="bar4"></div>
                                    <div class="bar4"></div>
                                    <div class="bar4"></div>
                                </button> </div>
                            <div class="col-8">
                                <div class="row justify-content-right">
                                    <div class="col-6">
                                        <p class="mb-0 mt-4 text-right font-weight-bold">Position Applied</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0 mt-4 font-weight-bold">: 
                                            <?php foreach($data['model'] as $row): ?><?=$row['title']?>
                                        <?php endforeach;?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-right">
                                    <div class="col-6">
                                        <p class="mb-0 text-right font-weight-bold">Submitte Date</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0">: <?=date('d/m/Y')?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center" id="test"></div>
                        </div>
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane active">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pribadi</h3>
                                            <form onsubmit="event.preventDefault()">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label for="inputName">Nama Lengkap </label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label for="inputSex">Jenis Kelamin</label>  
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inputSex" value="option1">
                                                            <label class="form-check-label" for="inputSex">Pria</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inputSex" value="option1">
                                                            <label class="form-check-label" for="inputSex">Wanita</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label for="inputBirthcity">Tempat Kelahiran</label>
                                                    <input type="text" class="form-control" id="inputBirthcity" placeholder="Tempat Kelahiran">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label for="inputBirthdate">Tanggal Kelahiran</label>
                                                    <input type="date" class="form-control" id="inputBirthdate" placeholder="Tanggal Kelahiran">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label for="inputMarital">Status Pernikahan</label>
                                                    <input type="text" class="form-control" id="inputMarital" name="status" placeholder="Status Pernikahan">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label for="inputNationally">Kewarganegaraan</label>
                                                    <input type="text" class="form-control" id="inputNationally" placeholder="Kewarganegaraan">
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
                                                        <option>Pilih</option>
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
                                                    <select id="inputReligion" class="custom-select">
                                                        <option>Pilih</option>
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
                                                    <button type="button" class="btn btn-secondary mr-5" onclick="next(1)">Next <i class="fa fa-arrow-right"></i></button>
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
                                            <form onsubmit="event.preventDefault()">
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
                                                    <button type="button" class="btn btn-secondary mr-5" onclick="next(2)">Next <i class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                    <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pribadi</h3>
                                        <div class="form-row" id="srcIdentity" style="display: none">
                                            <div class="col-1"><button class="btn btn-danger btn-sm" style="margin-top:2.34rem" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="fa fa-trash text-end"></i></button>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputIdentity1">Kartu Identitas </label>
                                                <select id="inputIdentity1" class="custom-select">
                                                        <option>Pilih</option>
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
                                            <div class="form-group col-md-2">
                                                <label for="inputExpired1">Tanggal Kadaluarsa </label>
                                                <input type="date" class="form-control" id="inputExpired1" placeholder="Tanggal Kadaluarsa">
                                            </div>
                                        </div>
                                        <div id="dstIdentity"></div>
                                        <div><button class="btn btn-outline-primary btn-sm" id="addfrmIdentity"><i class="fa fa-plus"></i> Add More</button> </div>
                                        <div class="separator"></div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary mr-5" onclick="prev(2)"><i class="fa fa-arrow-left"></i> Prev</button>
                                            <button type="button" class="btn btn-secondary mr-5" onclick="next(3)">Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu4" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pendidikan</h3>
                                        <div class="form-row" id="srcEducation" style="display: none">
                                            <div class="col-1"><button class="btn btn-danger btn-sm" style="margin-top:2.34rem" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="fa fa-trash text-end"></i></button>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputIdentity1">Gelar </label>
                                                <select id="inputIdentity1" class="custom-select">
                                                        <option>Pilih</option>
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
                                                <input type="text" class="form-control" id="inputMajor1" placeholder="Jurusan">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputInstitute1">Nama Institusi </label>
                                                <input type="text" class="form-control" id="inputInstitute" placeholder="Nama Institusi">
                                            </div>
                                            <div class="col-1"></div>
                                            <div class="form-group col-md-3">
                                                <label for="inputIdentity1">Tahun Masuk </label>
                                                <input type="number" class="form-control" data-maxlength="4" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" />
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputIdentity1">Tahun Keluar </label>
                                                <input type="number" class="form-control" data-maxlength="4" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" />
                                            </div>
                                        </div>
                                        <div id="dstEducation"></div>
                                        <div><button class="btn btn-outline-primary btn-sm" id="addfrmEducation"><i class="fa fa-plus"></i> Add More</button> </div>
                                        <div class="separator"></div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary mr-5" onclick="prev(3)"><i class="fa fa-arrow-left"></i> Prev</button>
                                            <button type="button" class="btn btn-secondary mr-5" onclick="next(4)">Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu5" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h3 class="mt-0 mb-5 text-center content-title d-none d-none">Silahkan lengkapi data Pengalaman Kerja</h3>
                                        <div class="form-row" id="srcJob" style="display: none">
                                            <div class="col-1"><button class="btn btn-danger btn-sm" style="margin-top:2.34rem" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="fa fa-trash text-end"></i></button>
                                            </div>
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
                                            <div class="form-group col-md-3">
                                                <label for="inputLengthWork">Lama Bekerja (Tahun) </label>
                                                <input type="number" class="form-control" data-maxlength="2" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" />
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-11">
                                                <label for="inputJobDesc">Tugas & Tanggung Jawab </label>
                                                <textarea class="form-control" id="inputJobDesc" placeholder="Tugas & Tanggung Jawab Pekerjaan"></textarea>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-11">
                                                <label for="inputReason">Alasan Berhenti </label>
                                                <textarea class="form-control" id="inputReason" placeholder="Alasan Berhenti"></textarea>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-3">
                                                <label for="inputLastWage">Penghasilan Terakhir </label>
                                                <input type="number" class="form-control number-separator" id="inputLastWage"  data-maxlength="9" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" placeholder="Penghasilan Terakhir" />
                                            </div>
                                        </div>
                                        <div id="dstJob"></div>
                                        <div><button class="btn btn-outline-primary btn-sm" id="addfrmJob"><i class="fa fa-plus"></i> Add More</button> </div>
                                        <div class="separator"></div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary mr-5" onclick="prev(4)"><i class="fa fa-arrow-left"></i> Prev</button>
                                            <button type="button" class="btn btn-secondary mr-5" onclick="next(5)">Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu6" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h3 class="mt-0 mb-5 text-center content-title d-none">Silahkan lengkapi data Pribadi</h3>
                                        <div class="form-row" id="srcFamily" style="display: none">
                                            <div class="col-1"><button class="btn btn-danger btn-sm" style="margin-top:2.34rem" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="fa fa-trash text-end"></i></button>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputRelationFam1">Hubungan Keluarga </label>
                                                <select id="inputRelationFam1" class="custom-select">
                                                        <option>Pilih</option>
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
                                            <div class="col-md-3">
                                            <label for="inputFamilyName1">Gender </label>
                                                <select id="inputGender1" class="custom-select">
                                                        <option>Pilih</option>
                                                        <option value="Pria">Pria</option> 
                                                        <option value="Wanita">Wanita</option>
                                                </select>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-3">
                                                <label for="inputFamilyEducation1">Pendidikan Terakhir </label>
                                                <select id="inputFamilyEducation1" class="custom-select">
                                                        <option>Pilih</option>
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
                                                <label for="inputFamilyJobs">Pekerjaan </label>
                                                <input type="text" class="form-control" id="inputFamilyJobs" placeholder="Pekerjaan">
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-3">
                                                <label for="inputFamilyBirth">Tempat Lahir </label>
                                                <input type="text" class="form-control" id="inputFamilyBirth" placeholder="Tempat Lahir">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputFamilyBirthdate">Tanggal Lahir </label>
                                                <input type="text" class="form-control" id="inputFamilyBirthdate" placeholder="Tanggal Lahir">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputFamilyStatus">Almarhum </label>
                                                <select id="inputFamilyStatus" class="custom-select">
                                                        <option>Pilih</option>
                                                        <option value="Yes">Yes</option> 
                                                        <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-5">
                                                <label for="inputFamilyComp">Perusahaan </label>
                                                <input type="text" class="form-control" id="inputFamilyComp" placeholder="Perusahaan">
                                            </div>
                                            <div class="col-md-6"></div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-11">
                                                <label for="inputFamilyCompAddress">Alamat Perusahaan </label>
                                                <textarea class="form-control" id="inputFamilyCompAddress" placeholder="Alamat Perusahaan"></textarea>
                                            </div>
                                        </div>
                                        <div id="dstFamily"></div>
                                        <div><button class="btn btn-outline-primary btn-sm" id="addfrmFamily"><i class="fa fa-plus"></i> Add More</button> </div>
                                        <div class="separator"></div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-secondary mr-5" onclick="prev(5)"><i class="fa fa-arrow-left"></i> Prev</button>
                                            <button type="button" class="btn btn-secondary mr-5" onclick="next(6)">Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
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
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?=BASE_URL?>public/assets/js/easy-number-separator-master/easy-number-separator.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
        if(sessionStorage.getItem('fotoprofile')!=null)
        {
            document.querySelector('#fotouser').src = '<?=BASE_URL?>public/assets/img/career/jobseeker/'+sessionStorage.getItem('fotoprofile')

            document.querySelector('.editphotobtn').classList.remove('d-none')
            document.querySelector('#photopersonal').classList.add('d-none')
        }

        cloneClickHandler();
        cloneClickEducation();
        document.querySelector('#test').innerText = 'Personal Identity'
        // cloneClickJob();
        // Menu Toggle Script
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $('#addfrmIdentity').click(function() {
            cloneClickHandler();
        })

        $('#addfrmEducation').click(function() {
            cloneClickEducation();
        })
        $('#addfrmJob').click(function() {
            cloneClickJob();
        })
        $('#addfrmFamily').click(function() {
            cloneClickFamily();
        })
        $('#addfrmContactEm').click(function() {
            cloneClickContact();
        })
        $('#addfrmOrg').click(function() {
            cloneClickOrg();
        })
    })

    const tabpane = document.querySelectorAll('.tabs.list-group-item')
    let arr = [
        'Personal Identity',
        'Contact & Address',
        'Identity Card',
        'Education History',
        'Work Experience',
        'Family',
        'Emergency Contact',
        'Organization',
        'Question',
        'Attachment',
    ]
    for(let i=0; i<tabpane.length; i++)
    {
        tabpane[i].addEventListener('click', (e) => {
            document.querySelector('#test').innerText = arr[i]
        })
    }

    let counterIdentity = 1;
    let counterEducation = 1;
    let counterJob = 1;
    function cloneClickHandler() {
        // console.log($('.headfrmIdentity .frmIdentity'))
        counterIdentity++
        let newFields = document.querySelector('#srcIdentity').cloneNode(true)
        newFields.id = '';
        newFields.style.display = 'flex'
        let newField = newFields.childNodes
        for(let i=0; i<newField.length; i++) {
            let theName = newField[i].namespace
            if(theName) newField[i].name = theName + counter
        }
        let insertHere = document.querySelector('#dstIdentity')
        insertHere.parentNode.insertBefore(newFields,insertHere)
        // $('.headfrmIdentity .frmIdentity').clone(true).appendTo('.dstfrmIdentity')
    }
    function cloneClickEducation() {
        // console.log($('.headfrmIdentity .frmIdentity'))
        counterEducation++
        let newFields = document.querySelector('#srcEducation').cloneNode(true)
        newFields.id = '';
        newFields.style.display = 'flex'
        let newField = newFields.childNodes
        for(let i=0; i<newField.length; i++) {
            let theName = newField[i].namespace
            if(theName) newField[i].name = theName + counter
        }
        let insertHere = document.querySelector('#dstEducation')
        insertHere.parentNode.insertBefore(newFields,insertHere)
        // $('.headfrmIdentity .frmIdentity').clone(true).appendTo('.dstfrmIdentity')
    }
    function cloneClickJob() {
        // console.log($('.headfrmIdentity .frmIdentity'))
        counterJob++
        let newFields = document.querySelector('#srcJob').cloneNode(true)
        newFields.id = '';
        newFields.style.display = 'flex'
        let newField = newFields.childNodes
        for(let i=0; i<newField.length; i++) {
            let theName = newField[i].namespace
            if(theName) newField[i].name = theName + counter
        }
        let insertHere = document.querySelector('#dstJob')
        insertHere.parentNode.insertBefore(newFields,insertHere)
        // $('.headfrmIdentity .frmIdentity').clone(true).appendTo('.dstfrmIdentity')
    }
    function cloneClickFamily() {
        // console.log($('.headfrmIdentity .frmIdentity'))
        counterJob++
        let newFields = document.querySelector('#srcFamily').cloneNode(true)
        newFields.id = '';
        newFields.style.display = 'flex'
        let newField = newFields.childNodes
        for(let i=0; i<newField.length; i++) {
            let theName = newField[i].namespace
            if(theName) newField[i].name = theName + counter
        }
        let insertHere = document.querySelector('#dstFamily')
        insertHere.parentNode.insertBefore(newFields,insertHere)
        // $('.headfrmIdentity .frmIdentity').clone(true).appendTo('.dstfrmIdentity')
    }
    function cloneClickContact() {
        // console.log($('.headfrmIdentity .frmIdentity'))
        counterJob++
        let newFields = document.querySelector('#srcContactEm').cloneNode(true)
        newFields.id = '';
        newFields.style.display = 'flex'
        let newField = newFields.childNodes
        for(let i=0; i<newField.length; i++) {
            let theName = newField[i].namespace
            if(theName) newField[i].name = theName + counter
        }
        let insertHere = document.querySelector('#dstContactEm')
        insertHere.parentNode.insertBefore(newFields,insertHere)
        // $('.headfrmIdentity .frmIdentity').clone(true).appendTo('.dstfrmIdentity')
    }
    function cloneClickOrg() {
        // console.log($('.headfrmIdentity .frmIdentity'))
        counterJob++
        let newFields = document.querySelector('#srcOrg').cloneNode(true)
        newFields.id = '';
        newFields.style.display = 'flex'
        let newField = newFields.childNodes
        for(let i=0; i<newField.length; i++) {
            let theName = newField[i].namespace
            if(theName) newField[i].name = theName + counter
        }
        let insertHere = document.querySelector('#dstOrg')
        insertHere.parentNode.insertBefore(newFields,insertHere)
        // $('.headfrmIdentity .frmIdentity').clone(true).appendTo('.dstfrmIdentity')
    }
</script>
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
<script type="text/javascript">
    const input = document.getElementById('photopersonal');
    const upload = (file) => {
        const namafile = file.name
        const formData = new FormData()
        formData.append('file',file)

        try {
            console.log('uploading...')
            $.ajax({
                url: '<?=BASE_URL?>home/uploadfile',
                enctype: 'multipart/form-data',
                type: 'POST',
                data: formData,
                dataType: 'json',
                async: false,
                success: function(resp) {
                    sessionStorage.setItem('fotoprofile',resp.nama_file)
                    document.querySelector('#fotouser').src = '<?=BASE_URL?>public/assets/img/career/jobseeker/'+resp.nama_file
                    document.querySelector('#photopersonal').value=''
                    document.querySelector('#photopersonal').classList.add('d-none');
                    document.querySelector('.editphotobtn').classList.remove('d-none');
                },
                cache: false,
                contentType:false,
                processData: false
            });
        }
        catch(e) {
            console.log('Err: ',e)
        }
    };
    const onSelectFile = () => upload(input.files[0]);

    input.addEventListener('change', onSelectFile, false);

    const editphotobtn = document.querySelector('.editphotobtn')
    hiddenBtn = () => {
        document.querySelector('.editphotobtn').classList.add('d-none')
        document.querySelector('#photopersonal').classList.remove('d-none')
    }
    editphotobtn.addEventListener('click',hiddenBtn, false);
</script>
</body>
</html>