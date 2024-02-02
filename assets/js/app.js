document.addEventListener('DOMContentLoaded', function(){

  // ------------------- BURGER MENU ---------------------
  const body = document.querySelector('body'),
        burgerMenu = document.querySelector('#burger-menu'),
        burgerOpen = document.querySelector('#burger-open'),
        burgerClose = document.querySelector('#burger-close'),
        burgerLinks = document.querySelectorAll('.header__menu>li>a, .header__bar a');
  burgerOpen.addEventListener('click', () => {
    burgerMenu.classList.add('show');
    body.classList.add('dis-scroll');
  })
  burgerClose.addEventListener('click', () => {
    burgerMenu.classList.remove('show');
    body.classList.remove('dis-scroll')
  })
  burgerLinks.forEach(n => n.addEventListener('click', () => {
    burgerMenu.classList.remove('show');
    body.classList.remove('dis-scroll')
  }))
  document.addEventListener('click', (event) => {
    if (!event.target.matches("#burger-menu, #burger-open, #burger-open img")) {
      burgerMenu.classList.remove('show');
      body.classList.remove('dis-scroll')
    }
  })


  // ---------------------- SWIPER ------------------------
  var acardSwiper = new Swiper(".acardSwiper", {
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
    },
  });
  var whoareweSwiper = new Swiper(".whoareweSwiper", {
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
    },
  });

  var swiper = new Swiper(".productSecondSwiper", {
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
  });
  var swiper2 = new Swiper(".productMainSwiper", {
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });


  // --------------- CATALOG FILTERS FORM ----------------
  const catalogLeft = document.querySelector('.catalog__left'),
        catalogLeftHead = document.querySelector('.catalog__left-head'),
        catalogLeftForm = document.querySelector('.catalog__left-content');
  catalogLeftHead.addEventListener('click', () => {
  if (catalogLeft.classList.contains('open')) {
    catalogLeft.classList.remove('open');
    catalogLeftForm.removeAttribute('style');
  } else {
    catalogLeft.classList.add('open');
    catalogLeftForm.style.height = catalogLeftForm.scrollHeight + 'px';
  }
  })


  // ---------------------- SELECT2 ------------------------
  $(".js-select2").select2({
    dropdownPosition: 'below',
    closeOnSelect: true,
    language: {
      noResults: function () {
        return "Ничего не найдено";
      },
    }
  });
  $("#select-marka").select2({
    placeholder: "Марка"
  });
  $("#select-model").select2({
    placeholder: "Модель"
  });
  $('.js-select2').one('select2:open', function(e) {
    $('input.select2-search__field').prop('placeholder', "Поиск");
  });
  $("#select-orderby").select2({
    placeholder: "Выберите очередность",
    minimumResultsForSearch: -1
  });

})
