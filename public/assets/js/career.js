// uploading

const makeTable = (data,tableid,idfield) => {
    // console.log(data,tableid)
    let tr;
    let number=1
    let id=0;
    for(let i=0; i<data.length; i++) {
        tr += '<tr>'        
        // tr += `<td>${number}</td>`
        tr += `<td></td>`
        id = data[i][idfield]
        for(const [key,value] of Object.entries(data[i])) {
            if(key != idfield) tr += '<td>'+value+'</td>';
        }
        tr += `<td><a href="javascript:;" onclick="editRow${tableid}(this,'${idfield}')"><i class="fa fa-edit"></i> Edit </a> <a href="javascript:;" onclick="delRow${tableid}(this,'${idfield}')"><i class="fa fa-trash"></i> Hapus</td>`
        tr += `<input type="hidden" name="${idfield}" value="${id}" />`
        tr += '</tr>'
        number++
    }
    // console.log(tr)
    $('tbody#'+tableid).append(tr)
}
const input = document.getElementById('photopersonal');
const upload = (file) => {
    const namafile = file.name
    const formData = new FormData()
    formData.append('file',file)

    try {
        console.log('uploading...')
        $.ajax({
            url: base_url()+'career/uploadfile',
            enctype: 'multipart/form-data',
            type: 'POST',
            data: formData,
            dataType: 'json',
            async: false,
            success: function(resp) {
                sessionStorage.setItem('fotoprofile',resp.nama_file)
                document.querySelector('#fotouser').src = base_url()+'public/assets/img/career/jobseeker/'+resp.nama_file
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

const uploadDoc = (type,file) => {
    const employeeid = sessionStorage.getItem('employeeid')
    // const employeeid = 1
    const namafile = file.name
    const formData = new FormData()
    formData.append('file',file)
    formData.append('type',type)
    formData.append('employeeid',employeeid)
    const sr = document.querySelector('.sr-'+type)
    const btnUpload = sr.previousElementSibling
    btnUpload.classList.add('d-none')
    sr.classList.remove('d-none')
    try {
        console.log('uploading...')
        $.ajax({
            url: base_url()+'career/uploaddoc',
            enctype: 'multipart/form-data',
            type: 'POST',
            data: formData,
            dataType: 'json',
            async: false,
            success: function(resp) {
                btnUpload.classList.remove('d-none')
                sr.classList.add('d-none')
                const container = document.querySelector('.'+type+'-file')
                const linkfile = container.querySelector('.file')
                linkfile.innerHTML = '<i class="fa fa-file"></i> '+resp.type+' '+resp.nama;
                linkfile.href = '../viewfile/careerpath-'+resp.id+'/'+type
                container.classList.remove('d-none')
            },
            cache: false,
            contentType:false,
            processData: false
        });
    }
    catch(e) {
        console.log('Err: ',e)
    }
}

const checkverify = document.querySelector('.checkverify');
const page2 = document.querySelector('.page-2');
const addfrmIdentity = document.querySelector('#addfrmIdentity');
const addfrmEducation = document.querySelector('#addfrmEducation');
const addfrmJob = document.querySelector('#addfrmJob');
const addfrmFamily= document.querySelector('#addfrmFamily');
const addfrmContactEm= document.querySelector('#addfrmContactEm');
const addfrmOrg= document.querySelector('#addfrmOrg');
const page9 = document.querySelector('.page-9');
const uploadCV = document.querySelector('.up-cv');
const uploadIjazah = document.querySelector('.up-ijazah');
const inputfileIjazah = document.querySelector('#attachijazah');
const inputfileCV = document.querySelector('#attachcv');
const page03 = document.querySelector('.page-3');
const page04 = document.querySelector('.page-4');
const page05 = document.querySelector('.page-5');
const page06 = document.querySelector('.page-6');
const page07 = document.querySelector('.page-7');
const page08 = document.querySelector('.page-8');
const page09 = document.querySelector('.page-9');
const page10 = document.querySelector('.submitform');

// form 1
const checkForm = () => {
    let employeeid=0;
    if(sessionStorage.getItem('employeeid')!='')
        employeeid = sessionStorage.getItem('employeeid');

    const rules = {
        'nama':'required',
        'jenis':'required',
        'tempat':'required',
        'tanggal':'required',
        'status':'required',
        'nasional':'required',
        'fresh':'required',
        'email':'required',
        'agama':'required'
    }
    const form1 = document.forms['identityform'];
    const nama = form1.inputName.value
    const jenis = form1.inputSex.value
    const tempat = form1.inputBirthcity.value
    const tanggal = form1.inputBirthdate.value
    const status = form1.inputMarital.value
    const nasional = form1.inputNationally.value
    const npwp = form1.inputNPWP.value
    const fresh = form1.inputFresh.value
    const email = form1.inputEmail.value
    const agama = form1.inputReligion.value
    const careerid = form1.careerid.value

    const dataForm = {
        'nama':nama,
        'jenis':jenis,
        'tempat':tempat,
        'tanggal':tanggal,
        'status':status,
        'nasional':nasional,
        'npwp':npwp,
        'fresh':fresh,
        'email':email,
        'agama':agama,
        'careerid': careerid,
        'employeeid':employeeid
    }
    // console.log(dataForm)

    for(let i in rules) {   
        if(dataForm[i]=='') return Swal.fire({icon: 'error',title: 'Oops...',text: 'Harap Isi form yang kosong!'})
    }

    // save to db
    postData(base_url()+'career/saveprofile', { dataForm})
    .then((data) => {
        if(data.status == 'success') {
            sessionStorage.setItem('employeeid',data.id)
            $('#tab2').removeClass('disabled')
            $('.first-step').removeClass('checkverify')
            $('.first-step').attr('onclick','next(1)');
            next(1);
        }
        else {
            return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat simpan, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
            })
        }
    });
}

// form 2
const page2Form = () => {
    employeeid = sessionStorage.getItem('employeeid');

    const rules = {
        'alamat1':'required',
        'alamat2':'required',
        'nohp':'required',
    }
    const form2 = document.forms['identitycontact'];
    const alamat1 = form2.inputAddress1.value
    const alamat2 = form2.inputAddress2.value
    const nohp = form2.inputMobile.value
    // const careerid = form1.careerid.value

    const dataForm = {
        'alamat1':alamat1,
        'alamat2':alamat2,
        'nohp':nohp,
        'employeeid':employeeid
    }
    // console.log(dataForm)

    for(let i in rules) {   
        if(dataForm[i]=='') return Swal.fire({icon: 'error',title: 'Oops...',text: 'Harap Isi form yang kosong!'})
    }

    // save to db
    postData(base_url()+'career/saveidentitycontact', {dataForm})
    .then((data) => {
        if(data.status == 'success') {
            // sessionStorage.setItem('employeeid',data.id)
            $('#tab3').removeClass('disabled')
            // $('.first-step').removeClass('checkverify')
            // $('.first-step').attr('onclick','next(1)');
            next(2);
        }
        else {
            return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat simpan, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
            })
        }
    });
}

// form 3
const page3Form = () => {
    employeeid = sessionStorage.getItem('employeeid');

    const rules = {
        'jenisidentitas':'required',
        'noidentitas':'required',
        'penerbit':'required',
    }
    const form3 = document.forms['identitycard'];
    const jenisidentitas = form3.inputIdentity1.value
    const noidentitas = form3.inputCardNo1.value
    const penerbit = form3.inputPublish1.value
    const tglkadaluarsa = form3.inputExpired1.value
    const identityid = form3.querySelector('input[name="identityid"]').value
    // const careerid = form1.careerid.value

    const dataForm = {
        'jenisidentitas':jenisidentitas,
        'noidentitas':noidentitas,
        'penerbit':penerbit,
        'tglkadaluarsa':tglkadaluarsa,
        'employeeid':employeeid,
        'identityid':identityid
    }
    // console.log(dataForm)

    for(let i in rules) {   
        if(dataForm[i]=='') return Swal.fire({icon: 'error',title: 'Oops...',text: 'Harap Isi form yang kosong!'})
    }

    // save to db
    postData(base_url()+'career/saveidentitycard', {dataForm})
    .then((data) => {
        if(data.status == 'success') {
            let frmdata = JSON.stringify({'employeeid':employeeid})
            $.ajax({
                url: base_url()+'career/getdataidentitycard',
                type: 'POST',
                data: frmdata,
                dataType: 'json',
                async: false,
                success: function(res) {
                    $('tbody#tbidentitycard').empty();
                    Swal.fire(
                        'Success',
                        'Data berhasil di simpan',
                        'success'
                      )
                    makeTable(res.data,'tbidentitycard','identityid');
                    form3.querySelector('input[name="identityid"]').value=''
                },
                cache: false,
                contentType:false,
                processData: false
            });
            $('#identitycard')[0].reset();
            $('.table-identitycard').removeClass('d-none')
            // $('#tab4').removeClass('disabled')
            // $('.first-step').removeClass('checkverify')
            // $('.first-step').attr('onclick','next(1)');

        }
        else {
            return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat simpan, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
            })
        }
    });
}

// from 4
const page4Form = () => {
    employeeid = sessionStorage.getItem('employeeid');
    // let employeeid = 1;

    const rules = {
        'jenispendidikan':'required',
        'jurusan':'required',
        'institusi':'required',
        'thnmasuk':'required',
        'thnselesai':'required',
    }
    const form4 = document.forms['educationhistory'];
    const jenispendidikan = form4.inputTitle1.value
    const jurusan = form4.inputMajor1.value
    const institusi = form4.inputInstitute1.value
    const thnmasuk = form4.inputStartEducation1.value
    const thnselesai = form4.inputEndEducation1.value
    const educationid = form4.querySelector('input[name="educationid"]').value
    // const careerid = form1.careerid.value

    const dataForm = {
        'jenispendidikan':jenispendidikan,
        'jurusan':jurusan,
        'institusi':institusi,
        'thnmasuk':thnmasuk,
        'thnselesai':thnselesai,
        'employeeid':employeeid,
        'educationid':educationid
    }
    // console.log(dataForm)

    for(let i in rules) {   
        if(dataForm[i]=='') return Swal.fire({icon: 'error',title: 'Oops...',text: 'Harap Isi form yang kosong!'})
    }

    // save to db
    postData(base_url()+'career/saveeducationhistory', {dataForm})
    .then((data) => {
        if(data.status == 'success') {
            let frmdata = JSON.stringify({'employeeid':employeeid})
            $.ajax({
                url: base_url()+'career/getdataeducationhistory',
                type: 'POST',
                data: frmdata,
                dataType: 'json',
                async: false,
                success: function(res) {
                    $('tbody#tbeducationhistory').empty();
                    Swal.fire(
                        'Success',
                        'Data berhasil di simpan',
                        'success'
                      )
                    makeTable(res.data,'tbeducationhistory','educationid');
                    form4.querySelector('input[name="educationid"]').value=''
                },
                cache: false,
                contentType:false,
                processData: false
            });
            $('#educationhistory')[0].reset();
            $('.table-educationhistory').removeClass('d-none')
            // $('#tab4').removeClass('disabled')
            // $('.first-step').removeClass('checkverify')
            // $('.first-step').attr('onclick','next(1)');

        }
        else {
            return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat simpan, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
            })
        }
    });
}

// form 5
const page5Form = () => {
    employeeid = sessionStorage.getItem('employeeid');
    // let employeeid = 1;

    const rules = {
        'none':'none'
    }
    const form5 = document.forms['workexperience'];
    const perusahaan = form5.inputCompany1.value
    const jabatan = form5.inputPosition1.value
    const tglgabung = form5.inputJoinDate1.value
    const tglselesai = form5.inputResignDate1.value
    const tugas = form5.inputJobDesc1.value
    const alasankeluar = form5.inputReason1.value
    const gajiterakhir = form5.inputLastWage1.value
    const experienceid = form5.querySelector('input[name="experienceid"]').value
    // const careerid = form1.careerid.value

    const dataForm = {
        'perusahaan':perusahaan,
        'jabatan':jabatan,
        'tglgabung':tglgabung,
        'tglselesai':tglselesai,
        'tugas':tugas,
        'alasankeluar':alasankeluar,
        'gajiterakhir':gajiterakhir,
        'employeeid':employeeid,
        'experienceid':experienceid
    }
    // console.log(dataForm)

    for(let i in rules) {   
        if(dataForm[i]=='') return Swal.fire({icon: 'error',title: 'Oops...',text: 'Harap Isi form yang kosong!'})
    }

    // save to db
    postData(base_url()+'career/saveworkexperience', {dataForm})
    .then((data) => {
        if(data.status == 'success') {
            let frmdata = JSON.stringify({'employeeid':employeeid})
            $.ajax({
                url: base_url()+'career/getdataworkexperience',
                type: 'POST',
                data: frmdata,
                dataType: 'json',
                async: false,
                success: function(res) {
                    $('tbody#tbworkexperience').empty();
                    Swal.fire(
                        'Success',
                        'Data berhasil di simpan',
                        'success'
                      )
                    form5.querySelector('input[name="experienceid"]').value=''
                    makeTable(res.data,'tbworkexperience','experienceid');
                },
                cache: false,
                contentType:false,
                processData: false
            });
            $('#workexperience')[0].reset();
            $('.table-workexperience').removeClass('d-none')
            // $('#tab4').removeClass('disabled')
            // $('.first-step').removeClass('checkverify')
            // $('.first-step').attr('onclick','next(1)');

        }
        else {
            return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat simpan, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
            })
        }
    });
}

// form 6
const page6Form = () => {
    employeeid = sessionStorage.getItem('employeeid');
    // let employeeid = 1;

    const rules = {
        'none':'none'
    }
    const form6 = document.forms['family'];
    const hubungan = form6.inputRelationFam1.value
    const nama = form6.inputFamilyName1.value
    const pendidikan = form6.inputFamilyEducation1.value
    const pekerjaan = form6.inputFamilyJobs1.value
    const tempatlahir = form6.inputFamilyBirth1.value
    const tgllahir = form6.inputFamilyBirthdate1.value
    const isalmarhum = form6.inputFamilyStatus1.value
    const perusahaan = form6.inputFamilyComp1.value
    const alamatperusahaan = form6.inputFamilyCompAddress1.value
    const familyid = form6.querySelector('input[name="familyid"]').value
    // const careerid = form1.careerid.value

    const dataForm = {
        'hubungan':hubungan,
        'nama':nama,
        'pendidikan':pendidikan,
        'pekerjaan':pekerjaan,
        'tempatlahir':tempatlahir,
        'tgllahir':tgllahir,
        'isalmarhum':isalmarhum,
        'perusahaan':perusahaan,
        'alamatperusahaan':alamatperusahaan,
        'employeeid':employeeid,
        'familyid':familyid
    }
    // console.log(dataForm)

    for(let i in rules) {   
        if(dataForm[i]=='') return Swal.fire({icon: 'error',title: 'Oops...',text: 'Harap Isi form yang kosong!'})
    }

    // save to db
    postData(base_url()+'career/savefamily', {dataForm})
    .then((data) => {
        if(data.status == 'success') {
            let frmdata = JSON.stringify({'employeeid':employeeid})
            $.ajax({
                url: base_url()+'career/getdatafamily',
                type: 'POST',
                data: frmdata,
                dataType: 'json',
                async: false,
                success: function(res) {
                    $('tbody#tbfamily').empty();
                    Swal.fire(
                        'Success',
                        'Data berhasil di simpan',
                        'success'
                      )
                    form6.querySelector('input[name="familyid"]').value=''
                    makeTable(res.data,'tbfamily','familyid');
                },
                cache: false,
                contentType:false,
                processData: false
            });
            $('#family')[0].reset();
            $('.table-family').removeClass('d-none')
            // $('#tab4').removeClass('disabled')
            // $('.first-step').removeClass('checkverify')
            // $('.first-step').attr('onclick','next(1)');

        }
        else {
            return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat simpan, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
            })
        }
    });
}

// form 7
const page7Form = () => {
    employeeid = sessionStorage.getItem('employeeid');
    // let employeeid = 1;

    const rules = {
        'hubungan':'required',
        'nama':'required',
        'telp':'required',
        'alamat':'required'
    }
    const form7 = document.forms['emergencycontact'];
    const hubungan = form7.inputContactFam1.value
    const nama = form7.inputContactName1.value
    const telp = form7.inputContactTelp1.value
    const alamat = form7.inputContactAddress1.value
    const emergencyid = form7.querySelector('input[name="emergencyid"]').value
    // const careerid = form1.careerid.value

    const dataForm = {
        'hubungan':hubungan,
        'nama':nama,
        'telp':telp,
        'alamat':alamat,
        'employeeid':employeeid,
        'emergencyid':emergencyid
    }
    // console.log(dataForm)

    for(let i in rules) {   
        if(dataForm[i]=='') return Swal.fire({icon: 'error',title: 'Oops...',text: 'Harap Isi form yang kosong!'})
    }

    // save to db
    postData(base_url()+'career/saveemergencycontact', {dataForm})
    .then((data) => {
        if(data.status == 'success') {
            let frmdata = JSON.stringify({'employeeid':employeeid})
            $.ajax({
                url: base_url()+'career/getdataemergencycontact',
                type: 'POST',
                data: frmdata,
                dataType: 'json',
                async: false,
                success: function(res) {
                    $('tbody#tbemergencycontact').empty();
                    Swal.fire(
                        'Success',
                        'Data berhasil di simpan',
                        'success'
                      )
                    form7.querySelector('input[name="emergencyid"]').value=''
                    makeTable(res.data,'tbemergencycontact','emergencyid');
                },
                cache: false,
                contentType:false,
                processData: false
            });
            $('#emergencycontact')[0].reset();
            $('.table-emergencycontact').removeClass('d-none')
            // $('#tab4').removeClass('disabled')
            // $('.first-step').removeClass('checkverify')
            // $('.first-step').attr('onclick','next(1)');

        }
        else {
            return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat simpan, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
            })
        }
    });
}

// form 8
const page8Form = () => {
    employeeid = sessionStorage.getItem('employeeid');
    // let employeeid = 1;

    const rules = {
        'none':'none'
    }
    const form8 = document.forms['organization'];
    const nama = form8.inputOrgName1.value
    const posisi = form8.inputOrgPosition1.value
    const tglmulai = form8.inputOrgStartPeriod1.value
    const tglselesai = form8.inputOrgEndPeriod1.value
    const pekerjaan = form8.inputOrgJobs1.value
    const organizationid = form8.querySelector('input[name="organizationid"]').value
    // const careerid = form1.careerid.value

    const dataForm = {
        'nama':nama,
        'posisi':posisi,
        'tglmulai':tglmulai,
        'tglselesai':tglselesai,
        'pekerjaan':pekerjaan,
        'employeeid':employeeid,
        'organizationid':organizationid
    }
    // console.log(dataForm)

    for(let i in rules) {   
        if(dataForm[i]=='') return Swal.fire({icon: 'error',title: 'Oops...',text: 'Harap Isi form yang kosong!'})
    }

    // save to db
    postData(base_url()+'career/saveorganization', {dataForm})
    .then((data) => {
        if(data.status == 'success') {
            let frmdata = JSON.stringify({'employeeid':employeeid})
            $.ajax({
                url: base_url()+'career/getdataorganization',
                type: 'POST',
                data: frmdata,
                dataType: 'json',
                async: false,
                success: function(res) {
                    $('tbody#tborganization').empty();
                    Swal.fire(
                        'Success',
                        'Data berhasil di simpan',
                        'success'
                      )
                    form8.querySelector('input[name="organizationid"]').value=''
                    makeTable(res.data,'tborganization','organizationid');
                },
                cache: false,
                contentType:false,
                processData: false
            });
            $('#organization')[0].reset();
            $('.table-organization').removeClass('d-none')
            // $('#tab4').removeClass('disabled')
            // $('.first-step').removeClass('checkverify')
            // $('.first-step').attr('onclick','next(1)');

        }
        else {
            return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat simpan, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
            })
        }
    });
}

// form 9
const page9Form = () => {
    employeeid = sessionStorage.getItem('employeeid');
    // employeeid = 1;

    const rules = {
        'pertanyaan1':'required',
        'pertanyaan2':'required',
        'pertanyaan3':'required',
        'pertanyaan4':'required',
        'pertanyaan5':'required',
    }
    const form9 = document.forms['question'];
    const pertanyaan1 = form9.question1.value
    const pertanyaan2 = form9.question2.value
    const pertanyaan3 = form9.question3.value
    const pertanyaan4 = form9.question4.value
    const pertanyaan5 = form9.question5.value
    // const careerid = form1.careerid.value

    const dataForm = {
        'pertanyaan1':pertanyaan1,
        'pertanyaan2':pertanyaan2,
        'pertanyaan3':pertanyaan3,
        'pertanyaan4':pertanyaan4,
        'pertanyaan5':pertanyaan5,
        'employeeid':employeeid
    }

    for(let i in rules) {   
        if(dataForm[i]=='') return Swal.fire({icon: 'error',title: 'Oops...',text: 'Harap Isi form yang kosong!'})
    }

    // save to db
    postData(base_url()+'career/savequestion', {dataForm})
    .then((data) => {
        if(data.status == 'success') {
            // sessionStorage.setItem('employeeid',data.id)
            $('#tab9').removeClass('disabled')
            // $('.first-step').removeClass('checkverify')
            // $('.first-step').attr('onclick','next(1)');
            next(9);
        }
        else {
            return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat simpan, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
            })
        }
    });
}

function base_url() {
    var pathparts = location.pathname.split('/');
    if (location.host == 'localhost') {
        var url = location.origin+'/'+pathparts[1].trim('/')+'/'; 
    }else{
        var url = location.origin; 
    }
    return url;
}

async function postData(url = "", data = {}) {
    const response = await fetch(url, {
      method: "POST", 
      mode: "cors", 
      cache: "no-cache", 
    //   credentials: "same-origin", 
      headers: {
        "Content-Type": "application/json",
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      referrerPolicy: "no-referrer", 
      body: JSON.stringify(data), 
    });
    return response.json(); 
}

async function deleteData(url='', data={}) {
    const response = await fetch(url, {
        method: "POST", 
        mode: "cors", 
        cache: "no-cache", 
      //   credentials: "same-origin", 
        headers: {
          "Content-Type": "application/json",
          // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        referrerPolicy: "no-referrer", 
        body: JSON.stringify(data), 
      });
      return response.json();
}

async function getData(url='', data={}) {
    const response = await fetch(url, {
        method: "POST", 
        mode: "cors", 
        cache: "no-cache", 
      //   credentials: "same-origin", 
        headers: {
          "Content-Type": "application/json",
          // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        referrerPolicy: "no-referrer", 
        body: JSON.stringify(data), 
      });
      return response.json();
}


const delRowtbidentitycard = (el,id) => {
    let idfield = el.parentNode.nextSibling
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Data yang dipilih akan terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteData(base_url()+'career/delidentitycard', {'id':idfield.value})
            .then((data) => {
                if(data.status == 'success') {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    let tr = el.parentNode.parentNode
                    // console.log(id)
                    tr.parentNode.removeChild(tr);
                }
                else {
                    return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat hapus, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
                    })
                }
            });
        }
    })
}

const editRowtbidentitycard = (el,id) => {
    let idfield = el.parentNode.nextSibling
    let tr = el.parentNode.parentNode
    let cells = tr.getElementsByTagName("td");
    const form = document.forms['identitycard'];
    const idform = form.querySelector(`input[name="${id}"]`)
    form.inputIdentity1.value = cells[1].innerHTML
    form.inputCardNo1.value = cells[2].innerHTML
    form.inputPublish1.value = cells[3].innerHTML
    form.inputExpired1.value = cells[4].innerHTML
    idform.value = idfield.value
    

}

const delRowtbeducationhistory = (el,id) => {
    let idfield = el.parentNode.nextSibling
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Data yang dipilih akan terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteData(base_url()+'career/deleducationhistory', {'id':idfield.value})
            .then((data) => {
                if(data.status == 'success') {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    let tr = el.parentNode.parentNode
                    // console.log(id)
                    tr.parentNode.removeChild(tr);
                }
                else {
                    return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat hapus, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
                    })
                }
            });
        }
    })
}

const editRowtbeducationhistory = (el,id) => {
    let idfield = el.parentNode.nextSibling
    let tr = el.parentNode.parentNode
    let cells = tr.getElementsByTagName("td");
    const form = document.forms['educationhistory'];
    const idform = form.querySelector(`input[name="${id}"]`)
    form.inputTitle1.value = cells[1].innerHTML
    form.inputMajor1.value = cells[2].innerHTML
    form.inputInstitute1.value = cells[3].innerHTML
    form.inputStartEducation1.value = cells[4].innerHTML
    form.inputEndEducation1.value = cells[5].innerHTML
    idform.value = idfield.value
}

const delRowtbworkexperience = (el,id) => {
    let idfield = el.parentNode.nextSibling
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Data yang dipilih akan terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteData(base_url()+'career/delworkexperience', {'id':idfield.value})
            .then((data) => {
                if(data.status == 'success') {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    let tr = el.parentNode.parentNode
                    // console.log(id)
                    tr.parentNode.removeChild(tr);
                }
                else {
                    return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat hapus, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
                    })
                }
            });
        }
    })
}

const editRowtbworkexperience = (el,id) => {
    let idfield = el.parentNode.nextSibling
    let tr = el.parentNode.parentNode
    let cells = tr.getElementsByTagName("td");
    const form = document.forms['workexperience'];
    const idform = form.querySelector(`input[name="${id}"]`)
    form.inputCompany1.value = cells[1].innerHTML
    form.inputPosition1.value = cells[2].innerHTML
    form.inputJoinDate1.value = cells[3].innerHTML
    form.inputResignDate1.value = cells[4].innerHTML
    form.inputJobDesc1.value = cells[5].innerHTML
    form.inputReason1.value = cells[6].innerHTML
    form.inputLastWage1.value = cells[7].innerHTML
    idform.value = idfield.value
}

const delRowtbfamily = (el,id) => {
    let idfield = el.parentNode.nextSibling
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Data yang dipilih akan terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteData(base_url()+'career/delfamily', {'id':idfield.value})
            .then((data) => {
                if(data.status == 'success') {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    let tr = el.parentNode.parentNode
                    // console.log(id)
                    tr.parentNode.removeChild(tr);
                }
                else {
                    return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat hapus, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
                    })
                }
            });
        }
    })
}

const editRowtbfamily = (el,id) => {
    let idfield = el.parentNode.nextSibling
    let tr = el.parentNode.parentNode
    let cells = tr.getElementsByTagName("td");
    const form = document.forms['family'];
    const idform = form.querySelector(`input[name="${id}"]`)
    form.inputRelationFam1.value = cells[1].innerHTML
    form.inputFamilyName1.value = cells[2].innerHTML
    form.inputFamilyEducation1.value = cells[3].innerHTML
    form.inputFamilyJobs1.value = cells[4].innerHTML
    form.inputFamilyBirth1.value = cells[5].innerHTML
    form.inputFamilyBirthdate1.value = cells[6].innerHTML
    form.inputFamilyStatus1.value = cells[7].innerHTML
    form.inputFamilyComp1.value = cells[8].innerHTML
    form.inputFamilyCompAddress1.value = cells[9].innerHTML
    idform.value = idfield.value
}

const delRowtbemergencycontact = (el,id) => {
    let idfield = el.parentNode.nextSibling
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Data yang dipilih akan terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteData(base_url()+'career/delemergencycontact', {'id':idfield.value})
            .then((data) => {
                if(data.status == 'success') {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    let tr = el.parentNode.parentNode
                    // console.log(id)
                    tr.parentNode.removeChild(tr);
                }
                else {
                    return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat hapus, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
                    })
                }
            });
        }
    })
}

const editRowtbemergencycontact = (el,id) => {
    let idfield = el.parentNode.nextSibling
    let tr = el.parentNode.parentNode
    let cells = tr.getElementsByTagName("td");
    const form = document.forms['emergencycontact'];
    const idform = form.querySelector(`input[name="${id}"]`)
    form.inputContactFam1.value = cells[1].innerHTML
    form.inputContactName1.value = cells[2].innerHTML
    form.inputContactTelp1.value = cells[3].innerHTML
    form.inputContactAddress1.value = cells[4].innerHTML
    idform.value = idfield.value
}

const delRowtborganization = (el,id) => {
    let idfield = el.parentNode.nextSibling
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Data yang dipilih akan terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteData(base_url()+'career/delorganization', {'id':idfield.value})
            .then((data) => {
                if(data.status == 'success') {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    let tr = el.parentNode.parentNode
                    // console.log(id)
                    tr.parentNode.removeChild(tr);
                }
                else {
                    return Swal.fire({icon: 'error',title: 'Oops...',text: 'Ada kesalahan saat hapus, hubungi kami di halaman kontak , atau klik link dibawah ini',footer: '<a href="'+base_url()+'contact" target="_blank">Hubungi kesalahan ini</a>'
                    })
                }
            });
        }
    })
}

const editRowtborganization = (el,id) => {
    let idfield = el.parentNode.nextSibling
    let tr = el.parentNode.parentNode
    let cells = tr.getElementsByTagName("td");
    const form = document.forms['organization'];
    const idform = form.querySelector(`input[name="${id}"]`)
    form.inputOrgName1.value = cells[1].innerHTML
    form.inputOrgPosition1.value = cells[2].innerHTML
    form.inputOrgStartPeriod1.value = cells[3].innerHTML
    form.inputOrgEndPeriod1.value = cells[4].innerHTML
    form.inputOrgJobs1.value = cells[5].innerHTML
    idform.value = idfield.value
}
const verifyPage = (number) => {
    // console.log('here')
    let mandatory;
    const rules = {
        minimumRows1 : [
            'Minimum must have 1 row',
            'required'
        ],
        canBeNull: [
            'This page may empty if You dont have data',
            'null'
        ],
    }

    switch(number) {
        case 3:
            mandatory = rules.minimumRows1
            break;
        case 4:
            mandatory = rules.minimumRows1
            break;
        case 5:
            mandatory = rules.canBeNull
            break;
        case 6:
            mandatory = rules.minimumRows1
            break;
        case 7:
            mandatory = rules.minimumRows1
            break;
        case 8:
            mandatory = rules.canBeNull
            break;
        case 9:
            mandatory = rules.minimumRows1;
            break;
        case 10:
            mandatory = rules.canBeNull
            break;
        default:
            mandatory = rules.minimumRows1
    }
    if(mandatory[1]=='required')
    {
        getData(base_url()+'career/getformdata', {'number':number})
        .then((data) => {
            if(data.status == 'success') {
                return next(number);
            }
            else {
                return Swal.fire({icon: 'error',title: 'Oops...',text: mandatory[0]
                })
            }
        });
        // return Swal.fire({icon: 'error',title: 'Oops...',text: mandatory[0]})
    }

    if(mandatory[1]=='null') return next(number)
    
}

const getdatafromdb = (employeeid) => {
    const form1 = document.forms['identityform'];
    const form2 = document.forms['identitycontact'];
    const form3 = document.forms['identitycard'];
    const form4 = document.forms['educationhistory'];
    const form5 = document.forms['workexperience'];
    const form6 = document.forms['family'];
    const form7 = document.forms['emergencycontact'];
    const form8 = document.forms['organization'];
    const form9 = document.forms['question'];

    // getdatafromdb to form1
    getData(base_url()+'career/getDataEmployee', { 'employeeid':employeeid})
    .then((data1) => {
        if(data1.status == 'success') {
            form1.inputName.value = data1.data.realname
            form1.inputSex.value = data1.data.sex
            form1.inputBirthcity.value = data1.data.birthcity
            form1.inputBirthdate.value = data1.data.birthdate
            form1.inputMarital.value = data1.data.status
            form1.inputNationally.value = data1.data.nationally
            form1.inputNPWP.value = data1.data.npwp
            form1.inputFresh.value = data1.data.isfresh
            form1.inputEmail.value = data1.data.email
            form1.inputReligion.value = data1.data.religion
            form1.careerid.value = data1.data.careerid
            form2.inputAddress1.value = data1.data.address_ktp
            form2.inputAddress2.value = data1.data.address_real
            form2.inputMobile.value = data1.data.mobilephone
            form9.question1.value = data1.data.question1
            form9.question2.value = data1.data.question2
            form9.question3.value = data1.data.question3
            form9.question4.value = data1.data.question4
            form9.question5.value = data1.data.question5
            // console.log(data1.data)

            if(data1.data.cv!=null) 
            {
                const containercv = document.querySelector('.cv-file')
                const linkfilecv = containercv.querySelector('.file')
                linkfilecv.innerHTML = '<i class="fa fa-file"></i> CV '+data1.data.realname;
                linkfilecv.href = '../viewfile/careerpath-'+data1.data.careerid+'/cv'
                containercv.classList.remove('d-none')
            }

            if(data1.data.ijazah!=null) 
            {
                const containerijazah = document.querySelector('.ijazah-file')
                const linkfileijazah = containerijazah.querySelector('.file')
                linkfileijazah.innerHTML = '<i class="fa fa-file"></i> IJAZAH '+data1.data.realname;
                linkfileijazah.href = '../viewfile/careerpath-'+data1.data.careerid+'/ijazah'
                containerijazah.classList.remove('d-none')
            }
        }
    });

    getData(base_url()+'career/getDataIdentityCard', { 'employeeid':employeeid})
    .then((data2) => {
        if(data2.status == 'success') {
            makeTable(data2.data,'tbidentitycard','identityid');
            $('.table-identitycard').removeClass('d-none')
            form3.querySelector('input[name="identityid"]').value=''
        }
    });

    getData(base_url()+'career/getDataEducationHistory', { 'employeeid':employeeid})
    .then((data3) => {
        if(data3.status == 'success') {
            makeTable(data3.data,'tbeducationhistory','educationid');
            form4.querySelector('input[name="educationid"]').value=''
            $('.table-educationhistory').removeClass('d-none')
        }
    });

    getData(base_url()+'career/getDataWorkExperience', { 'employeeid':employeeid})
    .then((data4) => {
        if(data4.status == 'success') {
            form5.querySelector('input[name="experienceid"]').value=''
            makeTable(data4.data,'tbworkexperience','experienceid');
            $('.table-workexperience').removeClass('d-none')
        }
    });

    getData(base_url()+'career/getDataFamily', { 'employeeid':employeeid})
    .then((data5) => {
        if(data5.status == 'success') {
            makeTable(data5.data,'tbfamily','familyid');
            form6.querySelector('input[name="familyid"]').value=''
            $('.table-family').removeClass('d-none')
        }
    });

    getData(base_url()+'career/getDataEmergencyContact', { 'employeeid':employeeid})
    .then((data6) => {
        if(data6.status == 'success') {
            makeTable(data6.data,'tbemergencycontact','emergencyid');
            form7.querySelector('input[name="emergencyid"]').value=''
            $('.table-emergencycontact').removeClass('d-none')
        }
    });

    getData(base_url()+'career/getDataOrganization', { 'employeeid':employeeid})
    .then((data7) => {
        if(data7.status == 'success') {
            makeTable(data7.data,'tborganization','organizationid');
            form8.querySelector('input[name="organizationid"]').value=''
            $('.table-organization').removeClass('d-none')
        }
    });
}

const submitform = () => {
    if(sessionStorage.getItem('fotoprofile')==null) {
        return Swal.fire(
            'Photo Profile',
            'Anda belum unggah foto',
            'warning'
        )
    }
    const dataForm = {
        'photo':sessionStorage.getItem('fotoprofile'),
        'employeeid':sessionStorage.getItem('employeeid')
    }
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Saya menyatakan bahwa data-data yang saya masukkan sudah valid!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
    if (result.isConfirmed) {
        $('#myModal').modal()                      
        $('#myModal').modal({ keyboard: false })   
        $('#myModal').modal('show') 

        postData(base_url()+'career/submitData', {dataForm})
        .then((data) => {
            if(data.status == 'success') {
                $('#myModal').modal('hide') 
                sessionStorage.clear()
                Swal.fire(
                    'Success!',
                    'Data sudah tersimpan.',
                    'success'
                ).then(
                    setTimeout((e) => {
                        location.href = base_url()+'career';
                    }, 1000)
                )
            }
        });
    }
    })
}

checkverify.addEventListener('click',checkForm);
page2.addEventListener('click',page2Form);
page03.addEventListener('click',() => verifyPage(3));
page04.addEventListener('click',() => verifyPage(4));
page05.addEventListener('click',() => verifyPage(5));
page06.addEventListener('click',() => verifyPage(6));
page07.addEventListener('click',() => verifyPage(7));
page08.addEventListener('click',() => verifyPage(8));
page09.addEventListener('click',() => verifyPage(9));
page10.addEventListener('click',() => submitform());
// page09.addEventListener('click',() => verifyPage(5));

// trigger button save
addfrmIdentity.addEventListener('click',page3Form);
addfrmEducation.addEventListener('click',page4Form);
addfrmJob.addEventListener('click',page5Form);
addfrmFamily.addEventListener('click',page6Form);
addfrmContactEm.addEventListener('click',page7Form);
addfrmOrg.addEventListener('click',page8Form);
page9.addEventListener('click',page9Form);
uploadCV.addEventListener('click', () => uploadDoc('cv',inputfileCV.files[0]));
uploadIjazah.addEventListener('click', () => uploadDoc('ijazah',inputfileIjazah.files[0]));
