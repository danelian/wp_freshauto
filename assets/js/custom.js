var page = 2
jQuery(function ($) {

  ajax_filter_update( $(this) );
  
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

  $('#button_reset_form').on('click', function(){

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

  /**
   * 
   * elem_id  = elem.attr('id');
     elem_val = elem.val();
     console.log( elem_val );
   * 
   */

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
  /*console.log( brand.value );
  console.log( model.value );
  console.log( mileage1.value );
  console.log( mileage2.value );
  console.log( price1.value );
  console.log( price2.value );
  console.log( year1.value );
  console.log( year2.value );*/

   /**
    * 
    * 
    * 
    */ 

  $.ajax({

      url:  'https://test-wp2.webmolot.pro/wp-admin/admin-ajax.php',
      type: 'POST',
      data: 'action=filter_update&sort='+sort.value+'&brand='+brand.value+'&model='+model.value+'&mileage1='+mileage1.value+'&mileage2='+mileage2.value+'&price1='+price1.value+'&price2='+price2.value+'&year1='+year1.value+'&year2='+year2.value,

      beforeSend: function( xhr ) {

        $('#latesta-cards').addClass('hover');

      },

      success: function( data ) {

        $('#latesta-cards').removeClass('hover');
        $('#latesta-cards').html(data);

      }

    });

}