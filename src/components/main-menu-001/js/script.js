function mainMenu001()
{
    // start
    jQuery(function($) {

        // open menu
        $('.main-menu-001').find('.main-menu-001--button-open-menu-link').click(function(e) {

            e.preventDefault()

            $('.main-menu-001').find('.main-menu-001--content').removeClass('main-menu-001--mobile');

        })

        // close
        $('.main-menu-001').find('.main-menu-001--close').click(function(e) {
            e.preventDefault()
            $('.main-menu-001').find('.main-menu-001--content').addClass('main-menu-001--mobile');
        })


        // submenu
        $('.main-menu-001').find('.main-menu-001--subitems-has').find('.main-menu-001--items-item-link').click(function(e) {
            e.preventDefault()
            $(this).parent('.main-menu-001--subitems-has').find('.main-menu-001--overlay').toggleClass('main-menu-001--overlay-none')
            $(this).parent('.main-menu-001--subitems-has').find('.main-menu-001--subitems').toggleClass('main-menu-001--subitems-none')

            // overlay click
            $(this).parent('.main-menu-001--subitems-has').find('.main-menu-001--overlay').click(function(e) {
                e.preventDefault()
                $(this).removeClass('main-menu-001--overlay-none').removeClass('main-menu-001--overlay-none').addClass('main-menu-001--overlay-none')
                $(this).parent('.main-menu-001--subitems-has').find('.main-menu-001--subitems').removeClass('main-menu-001--subitems-none').addClass('main-menu-001--subitems-none')
            })

        })




    })
}

mainMenu001();

