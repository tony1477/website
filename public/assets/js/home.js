const lang = document.documentElement.lang

$('.arrow-button').click(function() {
    $('html, body').animate({
        scrollTop: $('#start-home').offset().top - 95
    }, 2000);

    $('.home-video').trigger('play');
    // video.classList.add('playing');
    $('.play-button').css('display','none');
});

function base_url() {
    var pathparts = location.pathname.split('/');
    if (location.host == 'localhost') {
        var url = location.origin+'/'+pathparts[1].trim('/')+'/'; 
    }else{
        var url = location.origin; 
    }
    return url;
}

const btnIcon = document.querySelectorAll('.w-100')
const iconSus = document.querySelectorAll('.icon-sus')
const imgdark = document.querySelectorAll('img.dark')
let imgArray = ['policy.jpg','certification.jpg','environment.jpg','gcg.jpg'];
let titleArray = {
    'id' : ['Kebijakan','Sertifikasi','Lingkungan','Tata Kelola Perusahaan'],
    'en' : ['Policy','Certification','Environment','Good Corporate Governance']
};
const subTitleArray = {
    'id' : [
        'Prinsip Keberlanjutan Dalam Menjalankan Bisnis Usaha',
        'Sistem Manajemen & Sertifikasi Untuk Aspek Ekonomi',
        'Wilian Perkasa Berkomitmen Untuk Mengelola Lingkungan',
        'Meningkatkan Nilai Perseroan yang Kompetitif dan Berkualitas.'
        ],
    'en' : [
        'The principle of sustainability in managing business needs',
        'Management System & Certification for Economic Aspects',
        'Wilian Perkasa is Committed to Managing the Environment',
        'Improving Competitive and Quality Company Value'
    ]
}
const contentArray = {
    'id':[
        'Transformasi bisnis yang baik dalam pandangan kami, adalah bisnis yang dilakukan secara berkelanjutan sesuai dengan tiga pilar utama.',
        'Kami mematuhi semua peraturan perundang-undangan tentang pengelolaan lingkungan.',
        'Wilian Perkasa berkomitmen untuk mengelola lingkungan dan berupaya untuk selalu menerapkan praktik bisnis yang meminimalkan dampak terhadap lingkungan.',
        'Wilian Perkasa tidak hanya berupaya dalam penaatan peraturan perundang-undangan yang berlaku saja, namun juga menerapkan prinsip-prinsip tata kelola perusahaan yang baik.'
    ],
    'en':[
        'A good business transformation in our view is a business that is carried out in a sustainable manner according to the three main pillars.',
        'We comply with all laws and regulations regarding environmental management.',
        'Wilian Perkasa is committed to managing the environment and strives to implement business practices that minimize the impact on the environment.',
        'We are not only trying to comply with the applicable laws and regulations, but also apply the principles of good corporate governance.'
    ]
}
const linkArray = [
    'policy','certification','environment','gcg'
]
const imgCaption = {
    'id':[
        'Berkomitmen untuk menghasilkan produk terbaik',
        'Perseroan menjalankan bisnis sesuai dengan peraturan perundang-undangan',
        'Membangun dan melestarikan alam adalah tanggung jawab kami',
        'Sumber daya manusia yang baik secara internal dan eksternal'
    ],
    'en':[
        'Committed to produce the best products',
        'The Company conducts business in accordance with laws and regulations',
        'Building and preserving nature is our responsibility',
        'A well developed human resource internally and externally'
    ]
}
for(let i of btnIcon) {
    i.addEventListener('click',e => {
        const img = e.target
        iconSus.forEach((el) => {
            el.classList.remove('active')
        });
        imgdark.forEach( i => {
            i.classList.remove('d-none')
            i.nextElementSibling.classList.add('d-none')
        })
        img.classList.add('d-none')
        img.nextElementSibling.classList.toggle('d-none')
        img.parentElement.classList.add('active')

        const imgThumb = document.querySelector('.img-thumb')
        const catTitle = document.querySelector('p.cat')
        const contentSum = document.querySelector('.sum p')
        const arraySum = document.querySelector('.link a')
        const linkTitle = document.querySelector('.detail .title')
        const imgTitle = document.querySelector('.detail-thumb')
        const displayImg = imgArray[(img.dataset.value)-1]
        catTitle.innerText = titleArray[lang][(img.dataset.value)-1]
        contentSum.innerText = contentArray[lang][(img.dataset.value)-1]
        arraySum.href = base_url()+'sustainability/'+linkArray[(img.dataset.value)-1]
        linkTitle.innerText = subTitleArray[lang][(img.dataset.value)-1]
        imgTitle.innerText = imgCaption[lang][(img.dataset.value)-1]
        imgThumb.src = base_url()+'public/assets/img/sustainability/'+displayImg
    });
}

window.addEventListener('load', function() {
    const video = document.querySelector('video');
    const cover = document.querySelector('.cover-image');
    const playButton = document.querySelector('.play-button');
    
    playButton.addEventListener('click', function() {
        video.play();
        // video.classList.add('playing');
        playButton.style.display = 'none';
    });
    
    video.addEventListener('play', function() {
        playButton.style.display = 'none';
        cover.style.display = 'none';
    });
    
    video.addEventListener('pause', function() {
        playButton.style.display = 'block';
        // video.classList.remove('playing');
        cover.style.display = 'flex';
    });
});