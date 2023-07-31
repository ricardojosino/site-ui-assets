function testimony001()
{

    jQuery(function($) {

        $('.testimony-001').each(function(e) {

            let id = $(this).attr('id')

            if(id) {

                $('#' + id).find('.testimony-001--slides').slick({
                    nextArrow : $('#' + id).find('.testimony-001--button-right'),
                    prevArrow : $('#' + id).find('.testimony-001--button-left'),
                    infinite: true,
                    lazyLoad: 'ondemand',
                    centerMode: false,
                    dots: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: false,
                    arrows : true

                });

            }

        })

    })

}

testimony001()


