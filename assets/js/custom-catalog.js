var page = 2
jQuery(function ($) {
  $('body').on('click', '#loadmore-catalog', function () {
    var data = {
      action: 'load_posts_by_ajax',
      page: page,
      security: catalog.security
    }

    $.post(catalog.ajaxurl, data, function (response) {
      if ($.trim(response) != '') {
        $('.catalog-posts').append(response)
        page++
      } else {
        $('#loadmore-catalog').hide()
      }
    })
  })
})