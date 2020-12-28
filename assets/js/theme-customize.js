    (function($) {
        // description web
        wp.customize('dttl_about[description-web]', function(value) {
            value.bind(function(newValue) {
                $('.description-web').text(newValue)
            })
        })

        // slogan
        wp.customize('dttl_about[Address]', function(value) {
            value.bind(function(newValue) {
                $('.dttlAddress').text(newValue)
            })
        })

        // hotline
        wp.customize('dttl_about[hotline]', function(value) {
                value.bind(function(newValue) {
                    $('.dttlHotline a').html(newValue)
                    var linka = 'tel:' + newValue;
                    $('.dttlHotline a').attr("href", linka);
                })
            })
            // email
        wp.customize('dttl_about[email]', function(value) {
            value.bind(function(newValue) {
                $('.dttlEmail').text(newValue)
            })
        })

        // address
        wp.customize('dttl_about[address]', function(value) {
            value.bind(function(newValue) {
                $('.dttlAddress').text(newValue)
            })
        })

        // copyright
        wp.customize('dttl_about[copyright]', function(value) {
            value.bind(function(newValue) {
                $('.dttlCopyright').text(newValue)
            })
        })

        // logo
        wp.customize('dttl_logo[logo]', function(value) {
            value.bind(function(newValue) {
                $('.dttllogo').attr("src", newValue)
            })
        })

        // facebook
        wp.customize('dttl_social_links[facebook]', function(value) {
            value.bind(function(newValue) {
                $('.dttlfacebook').attr("href", newValue)
            })
        })

        // youtube
        wp.customize('dttl_social_links[youtube]', function(value) {
                value.bind(function(newValue) {
                    $('.dttlyoutube').attr("href", newValue)
                })
            })
            // instagram
        wp.customize('dttl_social_links[instagram]', function(value) {
                value.bind(function(newValue) {
                    $('.dttlinstagram').attr("href", newValue)
                })
            })
            // background
        wp.customize('dttl_background[img_1]', function(value) {
            value.bind(function(newValue) {
                $('.dttlimg_1').attr("src", newValue)
            })
        })
        wp.customize('dttl_background[mb_img_1]', function(value) {
            value.bind(function(newValue) {
                $('.dttlmbimg_1').attr("src", newValue)
            })
        })
        wp.customize('dttl_background[img_2]', function(value) {
            value.bind(function(newValue) {
                $('.dttlimg_2').attr("src", newValue)
            })
        })
        wp.customize('dttl_background[mb_img_2]', function(value) {
            value.bind(function(newValue) {
                $('.dttlmbimg_2').attr("src", newValue)
            })
        })
        wp.customize('dttl_background[img_3]', function(value) {
            value.bind(function(newValue) {
                $('.dttlimg_3').attr("src", newValue)
            })
        })
        wp.customize('dttl_background[mb_img_3]', function(value) {
            value.bind(function(newValue) {
                $('.dttlmbimg_3').attr("src", newValue)
            })
        })

    }(jQuery))