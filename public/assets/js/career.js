// uploading

const input = document.getElementById('photopersonal');
const upload = (file) => {
    const namafile = file.name
    const formData = new FormData()
    formData.append('file',file)

    try {
        console.log('uploading...')
        $.ajax({
            url: base_url()+'home/uploadfile',
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

// form 1
const checkverify = document.querySelector('.checkverify');
const page2 = document.querySelector('.page2');
const page3 = document.querySelector('.page3');
const addfrmIdentity = document.querySelector('#addfrmIdentity');
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
            sessionStorage.setItem('employeeid',data.id)
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
    // const careerid = form1.careerid.value

    const dataForm = {
        'jenisidentitas':jenisidentitas,
        'noidentitas':noidentitas,
        'penerbit':penerbit,
        'tglkadaluarsa':tglkadaluarsa,
        'employeeid':employeeid
    }
    // console.log(dataForm)

    for(let i in rules) {   
        if(dataForm[i]=='') return Swal.fire({icon: 'error',title: 'Oops...',text: 'Harap Isi form yang kosong!'})
    }

    // save to db
    postData(base_url()+'career/saveidentitycard', {dataForm})
    .then((data) => {
        if(data.status == 'success') {
            
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


checkverify.addEventListener('click',checkForm);
page2.addEventListener('click',page2Form);
addfrmIdentity.addEventListener('click',page3Form);
// const formIdentity = document.querySelector('#identityform');
