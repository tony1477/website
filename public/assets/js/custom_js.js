$(window).on('scroll', function () {

    let currentPosition = window.pageYOffset;

    if(currentPosition <= 10 ) {
        console.log('<10')
        $('.navigation-area').removeClass('hideEl')
        $('.navigation-area').addClass('showEl')
        const pageHeaderTitle = document.querySelector('.page-header-content')
        const h2Title = pageHeaderTitle.querySelector('h2')
        h2Title.classList.remove('hideEl')
        h2Title.classList.add('showEl')
    }
    if(currentPosition >= 79.2 && currentPosition < 158) {
        console.log('m')
        const pageHeaderTitle = document.querySelector('.page-header-content')
        const h2Title = pageHeaderTitle.querySelector('h2')
        h2Title.classList.remove('hideEl')
        h2Title.classList.add('showEl')
        $('.navigation-area').addClass('hideEl')
        $('.navigation-area').removeClass('showEl')
    }

    if(currentPosition >= 158.4) {
        console.log('t')
        const pageHeaderTitle = document.querySelector('.page-header-content')
        const h2Title = pageHeaderTitle.querySelector('h2')
        h2Title.classList.add('hideEl')
        h2Title.classList.remove('showEl')
    }

});