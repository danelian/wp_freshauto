var page = 2
jQuery(function ($) {

  $('body').on('click', '#loadmore-blog', function () {
    var data = {
      action: 'load_posts_by_ajax',
      page: page,
      security: blog.security
    }

    $.post(blog.ajaxurl, data, function (response) {
      if ($.trim(response) != '') {
        $('.blog-posts').append(response)
        page++
      } else {
        $('#loadmore-blog').hide()
      }
    })
  })

  ajax_filter_update( $(this) );

  $('#global-filter-section select').on('change', function(){

      ajax_filter_update( $(this) );

  })

  $('#global-filter-section input[type="number"]').on('change', function(){

      ajax_filter_update( $(this) );

  })

  $('#global-filter-section').on('submit', function(){

      ajax_filter_update( $(this) );

      return false;

  })

  $('#select-orderby').on('change', function(){

      ajax_filter_update( $(this) );

      return false;

  })

  $('#loadmore-blog').on('click', function(){

      $('#loadmore-blog').hide();
      $('.acard.acard_type_hidden').removeClass('acard_type_hidden');

      return false;

  })

  $('#button_reset_form').on('click', function(){

      $('#select-marka').val(null).trigger('change');
      $('#select-model').val(null).trigger('change');

      $('#global-filter-section input').each( function( index ) {

          $( this ).val( '' );
          ajax_filter_update( $(this) );

      });

      $('#global-filter-section select').each( function( index ) {

          ajax_filter_update( $(this) );


      });

      return false;

  })  

})

/**
 * 
 * 
 * 
 * 
 */ 

function ajax_filter_update( elem ) {

  url_site  = $('#global-filter-section').data('url');
  
  brand     = document.getElementById("select-marka");
  model     = document.getElementById("select-model");
  mileage1  = document.getElementById("km_age-from");
  mileage2  = document.getElementById("km_age-to");
  price1    = document.getElementById("price-from");
  price2    = document.getElementById("price-to");
  year1     = document.getElementById("year-from");
  year2     = document.getElementById("year-to");
  sort      = document.getElementById("select-orderby");

  if ( brand.value || model.value ) {

  $.ajax({

      url:  'https://test-wp2.webmolot.pro/wp-admin/admin-ajax.php',
      type: 'POST',
      data: 'action=filter_update&sort='+sort.value+'&brand='+brand.value+'&model='+model.value+'&mileage1='+mileage1.value+'&mileage2='+mileage2.value+'&price1='+price1.value+'&price2='+price2.value+'&year1='+year1.value+'&year2='+year2.value,

      beforeSend: function( xhr ) {

        $('#latesta-cards').addClass('hover');
        $('#catalog-filter-model option').attr('style', 'display: none; ');
        $('#select-model option').attr('style', 'display: none; ');

      },

      success: function( data ) {

        $('#catalog-filter-model').attr('style', 'display: block; ');
        $('#catalog-filter-model option').attr('style', 'display: none; ');

        $('#latesta-cards').removeClass('hover');
        $('#latesta-cards').html(data);


        if ( $('#latesta-cards .acard').length > 12)
           $('#loadmore-blog').show();
        else
           $('#loadmore-blog').hide();

        if (window.innerWidth > 1024) {
          $(".acard__thumb").brazzersCarousel();
        }

        if (window.innerWidth <= 1024) {
          if ($('.acardSwiper').length > 0) { //some-slider-wrap-in
            let swiperInstances = [];
            $(".acardSwiper").each(function (index, element) { //some-slider-wrap-in
              const $this = $(this);
              $this.addClass("instance-" + index); //instance need to be unique (ex: some-slider)
              $this.parent().find(".swiper-pagination").addClass("pagination-" + index);
              swiperInstances[index] = new Swiper(".instance-" + index, { //instance need to be unique (ex: some-slider)
                spaceBetween: 10,
                pagination: {
                  el: '.pagination-' + index,
                  clickable: true
                },
              });
            });
        
            // Now you can call the update on a specific instance in the "swiperInstances" object
            // e.g.
            swiperInstances[3].update();
            //or all of them
            setTimeout(function () {
              for (const slider of swiperInstances) {
                slider.update();
              }
            }, 50);
          }
        }

      }

    });

  } 

}