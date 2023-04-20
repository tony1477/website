$(document).ready(function(){
        
    if(sessionStorage.getItem('fotoprofile')!=null)
    {
        document.querySelector('#fotouser').src = base_url()+'public/assets/img/career/jobseeker/'+sessionStorage.getItem('fotoprofile')

        document.querySelector('.editphotobtn').classList.remove('d-none')
        document.querySelector('#photopersonal').classList.add('d-none')
    }

    // cloneClickHandler();
    // cloneClickEducation();
    document.querySelector('#test').innerText = 'Personal Identity'
    // cloneClickJob();
    // Menu Toggle Script
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $('#addfrmIdentity').click(function() {
        // cloneClickHandler();
        console.log('here')
    })

    $('#addfrmEducation').click(function() {
        // cloneClickEducation();
    })
    $('#addfrmJob').click(function() {
        // cloneClickJob();
    })
    $('#addfrmFamily').click(function() {
        // cloneClickFamily();
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