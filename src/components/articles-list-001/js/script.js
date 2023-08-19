function articlesList001()
{

    jQuery(function($) {

        // Abri o menu
        $('.articles-list-001').find('.articles-list-001--button-mobile').click(function(e) {
            e.preventDefault();
            $('html').css('overflow-y', 'hidden')
            $('.articles-list-001').find('.articles-list-001--categories').toggleClass('articles-list-001--categories-none')
        })

        // fecha o menu
        $('.articles-list-001').find('.articles-list-001--categories-close').click(function(e) {
            e.preventDefault()
            $('html').css('overflow-y', 'auto')
            $('.articles-list-001').find('.articles-list-001--categories').addClass('articles-list-001--categories-none')
        })


    })

}

articlesList001()

