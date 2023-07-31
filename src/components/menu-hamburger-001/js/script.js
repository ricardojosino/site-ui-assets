function menuHamburger001()
{
    jQuery(function($) {

        // Abre o menu
        $('.menu-hamburger-001--button-open').click(function(e){
            e.preventDefault()
            $('.menu-hamburger-001--overlay').show()
            $(this).parents('.menu-hamburger-001').find('.menu-hamburger-001--box').addClass('menu-hamburger-001--box-show')

        })

        // Fecha menu clicando no botão
        $('.menu-hamburger-001--box-button-close-link').click(function(e) {
            e.preventDefault()
            $('.menu-hamburger-001--overlay').hide()
            $(this).parents('.menu-hamburger-001--box').removeClass('menu-hamburger-001--box-show')

        })

        // fecha menu clicando no overlay
        $('.menu-hamburger-001--overlay').click(function(e) {
            e.preventDefault()
            $(this).hide();
            $(this).parents('.menu-hamburger-001').find('.menu-hamburger-001--box').removeClass('menu-hamburger-001--box-show')
        })

        // Abre submenu
        $('.menu-hamburger-001--has-submenu').find('.menu-hamburger-001--box-items-item-link').click(function(e) {
            e.preventDefault()

            $(this).parent('.menu-hamburger-001--box-items-item').find('.menu-hamburger-001--box-subitems').toggleClass('menu-hamburger-001--box-subitems-none')

        })

    })
}

menuHamburger001()