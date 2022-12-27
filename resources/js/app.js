import "./main.js";

import Swiper, { Navigation, Pagination, Autoplay, Thumbs, Controller } from 'swiper';

Swiper.use([Navigation, Pagination, Autoplay, Thumbs, Controller]);

document.addEventListener('DOMContentLoaded', function() {

    new Swiper('.swiper-main', {
        slidesPerView: 1,
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        autoplay: {
            delay: 5000,
          },
    });

  
  Array.from(document.querySelectorAll('.carousel')).forEach(carousel => {
    
      //   const deafultOptions = {
      //     slidesPerView: 4,
      //     spaceBetween: 10,
      //     navigation: {
      //         nextEl: '.swiper-button-next',
      //         prevEl: '.swiper-button-prev',
      //       },
      //     autoplay: {
      //         autoplay: true,
      //         delay: 5000,
      //         stopOnLastSlide: false,
      //         disableOnInteraction: false,
      //     },
      // };

      // const customOptions = JSON.parse(carousel.dataset.options);

      // const options = Object.assign(deafultOptions, customOptions);

      // new Swiper(carousel, options);

      const storeSliderSwiper = new Swiper(".storeSlider-swiper", {
        slidesPerView: 1,
        pagination: "true",
        loop: "true",
        navigation: {
          nextEl: '.main-btnNext',
          prevEl: '.main-btnPrev'
        }
      });

      const smallSwiper = new Swiper(".smallSwiper", {
        spaceBetween: 10,
        direction: "vertical",
        slidesPerView: 2,
        loop: "true",
        mousewheel: true,
        grabCursor: true,
        forceToAxis: true,
        navigation: {
          nextEl: ".smallSwiper-btnNext",
          prevEl: ".smallSwiper-btnPrev"
        },
        autoplay: {
          delay: 5000
        },
        breakpoints: {
          1920: {
            slidesPerView: 2,
            direction: 'vertical'
          },
          1024: {
            slidesPerView: 2,
            direction: 'vertical'
          },
          768: {
            slidesPerView: 3,
            direction: 'horizontal'
          },
          550: {
            slidesPerView: 3,
            direction: 'horizontal'
          },
          320: {
            slidesPerView: 2,
            direction: 'horizontal'
          }
        }
      });

      const swiperProducts = new Swiper(".swiper-products", {
        slidesPerView: 3,
        sapceBetween: 10,
        navigation: {
          nextEl: ".products-btnNext",
          prevEl: ".products-btnPrev"
        },
        breakpoints: {
          1024: {
            slidesPerView: 4,
            spaceBetween: 10
          },
          768: {
            slidesPerView: 3,
            sapceBetween: 10,
          },
          550: {
            slidesPerView: 2,
            spaceBetween: 0
          },
          320: {
            slidesPerView: 2,
            spaceBetween: 0
          }
        }
      });

      const popularProdsSwiper = new Swiper(".popularProds-swiper", {
        slidesPerView: 4,
        spaceBetween: 10,
        loop: true,
        navigation: {
          nextEl: ".popularProds-btnNext",
          prevEl: ".popularProds-btnPrev"
        },
        autoplay: {
          delay: 5000
        },
        breakpoints: {
          1024: {
            slidesPerView: 4,
            spaceBetween: 10
          },
          768: {
            slidesPerView: 3,
            sapceBetween: 10,
          },
          550: {
            slidesPerView: 2,
            spaceBetween: 0
          },
          320: {
            slidesPerView: 2,
            spaceBetween: 0
          }
        }
      });

  });

  const productSwiperThumbs = new Swiper(".product-swiper-thumbs", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true
  });
  const productSwiper = new Swiper(".product-swiper", {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".product-btnNext",
      prevEl: ".product-btnPrev"
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    thumbs: {
      swiper: productSwiperThumbs,
    }
  });



  const btnClose = document.querySelector('.btn-close-block');
  const hiddenHeaderTop = document.querySelector('.header__top');

  if(btnClose) {
    btnClose.addEventListener("click", function() {
      hiddenHeaderTop.classList.add('hide_header_top');
    });
  };

  const menuLinks = document.querySelectorAll('.menu-link');
  const showMenu = document.querySelector('.modal_menu');
  const bodyOpacity = document.querySelector(".body-opacity");

  for(let links of menuLinks) {
    links.addEventListener("click", function() {
      showMenu.classList.add('show_menu');
      bodyOpacity.classList.add('active');
    });
  };

  const btnClose2 = document.querySelector('#btn_close_icon');
  const asideMenuList = document.querySelectorAll(".aside-menu-list");

  if(btnClose2) {
    btnClose2.addEventListener("click", function() {
      showMenu.classList.remove('show_menu');
      [...asideMenuList].forEach(item => {
        item.classList.remove('active');
        bodyOpacity.classList.remove('active');
      });
    });
  
    bodyOpacity.addEventListener("click", function() {
      showMenu.classList.remove('show_menu');
      bodyOpacity.classList.remove('active');
      [...asideSubmenuList].forEach(item => {
        item.classList.remove('active');
        bodyOpacity.classList.remove('active');
      });
    });
  
    bodyOpacity.addEventListener("click", function() {
      [...asideMenuList].forEach(item => {
        item.classList.remove('active');
        bodyOpacity.classList.remove('active');
      });
    });
  }



  const btnAsideMenu = document.querySelectorAll(".btn-aside-menu");

  btnAsideMenu.forEach(OnTabClick);

  function OnTabClick(item) {
    item.addEventListener("click", function() {
      let currentBtn = item;
      let tabId = currentBtn.getAttribute("data-tab");
      let currentTab = document.querySelector(tabId);

      if(!currentBtn.classList.contains('active')) {
        btnAsideMenu.forEach(function(item) {
          item.classList.remove('active');
        });
        asideMenuList.forEach(function(item) {
          item.classList.remove('active');
        });
        currentBtn.classList.add('active');
        currentTab.classList.add('active');
      }
    });
  };

  const btnAsideSubmenu = document.querySelectorAll(".btn-aside-submenu");
  const asideSubmenuList = document.querySelectorAll(".aside-submenu-list");

  btnAsideSubmenu.forEach(OnTabSubClick);

  function OnTabSubClick(subItem) {
    subItem.addEventListener("click", function() {
      let currentSubBtn = subItem;
      let tabSubId = currentSubBtn.getAttribute("data-subtab");
      let currentSubTab = document.querySelector(tabSubId);

      if(!currentSubBtn.classList.contains('active')) {
        btnAsideSubmenu.forEach(function(subItem) {
          subItem.classList.remove('active');
        });
        asideSubmenuList.forEach(function(subItem) {
          subItem.classList.remove('active');
        });
        currentSubBtn.classList.add('active');
        currentSubTab.classList.add('active');
      }
    });
  };



  const searchBtn = document.querySelector("#searchBtn");
  const btnCloseSearch = document.querySelector(".btn-close-search");
  const searchModalWindow = document.querySelector(".search-modal");
  const loginBtn = document.querySelector("#loginBtn");
  const loginModal = document.querySelector("#login__modal");
  const btnCloseLogin = document.querySelector(".btn-close-login");
  const mobileLoginBtn = document.querySelector("#mobileLoginBtn");
  const mobileLoginModal = document.querySelector("#mobile__login__modal");
  const burgerMenuLink = document.querySelector(".burger__menu__link");
  const btnCloseMobile = document.querySelector(".btn-close-mobile");
  const mobileSearchModal = document.querySelector("#mobile__search__modal");
  const mobileSearchBtn = document.querySelector("#mobileSearchBtn");

  if(searchBtn) {
    searchBtn.addEventListener("click", function() {
      searchModalWindow.classList.add('active');
      searchModalWindow.classList.remove('hide_menu');
      hiddenHeaderTop.classList.add('hide_header_top');
      document.body.classList.add('no-scroll');
    });
    btnCloseSearch.addEventListener("click", function() {
      searchModalWindow.classList.remove('active');
      searchModalWindow.classList.add('hide_menu');
      document.body.classList.remove('no-scroll');
    });
    mobileSearchBtn.addEventListener("click", function() {
      mobileSearchModal.classList.add('active');
      mobileSearchModal.classList.remove('hide_menu');
      burgerMenuLink.classList.add('hide_menu');
      btnCloseMobile.classList.add('active');
      hiddenHeaderTop.classList.add('hide_header_top');
      document.body.classList.add('no-scroll');
    });
  }


  if(loginBtn) {
    loginBtn.addEventListener("click", function() {
      loginModal.classList.add('active');
      loginModal.classList.remove('hide_menu');
      hiddenHeaderTop.classList.add('hide_header_top');
      document.body.classList.add('no-scroll');
    });
    btnCloseLogin.addEventListener("click", function() {
      loginModal.classList.remove('active');
      loginModal.classList.add('hide_menu');
      document.body.classList.remove('no-scroll');
    });
    mobileLoginBtn.addEventListener("click", function() {
      mobileLoginModal.classList.add('active');
      mobileLoginModal.classList.remove('hide_menu');
      burgerMenuLink.classList.add('hide_menu');
      btnCloseMobile.classList.add('active');
      hiddenHeaderTop.classList.add('hide_header_top');
      document.body.classList.add('no-scroll');
    });
    btnCloseMobile.addEventListener("click", function() {
      mobileLoginModal.classList.remove('active');
      mobileLoginModal.classList.add('hide_menu');
      mobileSearchModal.classList.remove('active');
      mobileSearchModal.classList.add('hide_menu');
      burgerMenuLink.classList.remove('hide_menu');
      btnCloseMobile.classList.remove('active');
      document.body.classList.remove('no-scroll');
    });
  }

  const menuBackIcon = document.querySelectorAll(".menu-back-icon");
  const submenuBackIcon = document.querySelectorAll(".submenu-back-icon");

  for (let backIcons of menuBackIcon) {
    backIcons.addEventListener("click", function() {
      [...asideMenuList].forEach(item => {
        item.classList.remove('active');
      });
    });
  };

  for (let subBackIcons of submenuBackIcon) {
    subBackIcons.addEventListener("click", function() {
      [...asideSubmenuList].forEach(item => {
        item.classList.remove('active');
      });
    });
  };




  let lastScroll = 0;
  const deafultOffset = 200;
  const headerMobileScroll = document.querySelector('.header__bottom__mobile');

  if(headerMobileScroll) {
    const scrollPosition = () => window.pageYOffset || document.documentElement.scrollTop;
    const containHide = () => headerMobileScroll.classList.contains('hide__headerScroll');

    window.addEventListener('scroll', () => {
      if(scrollPosition() > lastScroll && !containHide()) {
        headerMobileScroll.classList.add('hide__headerScroll');
      } else if (scrollPosition() < lastScroll && containHide) {
        headerMobileScroll.classList.remove('hide__headerScroll');
      }
      lastScroll = scrollPosition();
    });
  }

  const headerScroll = document.querySelector('.headerStore');

  if(headerScroll) {
    const scrollPosition = () => window.pageYOffset || document.documentElement.scrollTop;
    const containTight = () => headerScroll.classList.contains('tight__header');
    
    window.addEventListener('scroll', () => {
      if(scrollPosition() > lastScroll && !containTight()) {
        headerScroll.classList.add('tight__header');
      } else if(scrollPosition() < 10 && containTight) {
        headerScroll.classList.remove('tight__header');
      }
      lastScroll = scrollPosition();
    });
  }

  


  document.addEventListener('keydown', function(e) {
    if( e.keyCode == 27 ){

      if(hiddenHeaderTop) {
        hiddenHeaderTop.classList.add('hide_header_top');

        [...asideMenuList].forEach(item => {
          item.classList.remove('active');
        });

        [...asideSubmenuList].forEach(item => {
          item.classList.remove('active');
        });
        
        showMenu.classList.remove('show_menu');
        [...asideMenuList].forEach(item => {
          item.classList.remove('active');
          bodyOpacity.classList.remove('active');
        });

        loginModal.classList.remove('active');
        loginModal.classList.add('hide_menu');
        document.body.classList.remove('no-scroll');

        searchModalWindow.classList.remove('active');
        searchModalWindow.classList.add('hide_menu');
        document.body.classList.remove('no-scroll');
      }

      // STORE

      if(document.querySelector('.btn-close-modal')) {
        
        document.getElementById('modal__search').classList.add('hidden');
        document.body.classList.remove('no-scroll');

        document.getElementById('sub__menu2').classList.add('hidden');
      }
    }

  });


  // STORE


  if(document.querySelector('.btn-close-modal')) {

    document.querySelector('.btn-personalArea').addEventListener("click", function() {
      document.getElementById('sub__menu2').classList.toggle('hidden');
    });
    
    document.querySelector('.btn-search').addEventListener("click", function() {
      document.querySelector('.modalSearch-main').classList.remove('hidden-search');
      document.querySelector('.header-bottom-left-nav').classList.add('hidden-search');
    });

    document.querySelector('.btn-close-modal').addEventListener("click", function() {
      document.querySelector('.modalSearch-main').classList.add('hidden-search');
      document.querySelector('.header-bottom-left-nav').classList.remove('hidden-search');
      document.querySelector('.modalSearch-list').classList.remove('show');
    });

    document.querySelector('.btnBurgerMenu').addEventListener("click", function() {
      this.classList.toggle('opened');
      this.setAttribute('aria-expanded', this.classList.contains('opened'));
      document.querySelector('.burgerMenu').classList.toggle('showBurgerMenu');
      document.body.classList.toggle('no-scroll');
    });

    document.querySelector('.modalSearch-form-inpt').addEventListener("click", function() {
      document.querySelector('.modalSearch-list').classList.add('show');
    });

  };

  [...document.querySelectorAll('.tabs')].forEach($item => {

    [...$item.querySelectorAll('[data-tab]')].forEach($toggle => {
       $toggle.addEventListener('click', event => {
         event.preventDefault();

         const tabId = $toggle.dataset.tab;
         const $tab = $item.querySelector(tabId);

         $item.querySelector('.tab.show').classList.remove('show');
         $item.querySelector('[data-tab].selected').classList.remove('selected');

         $tab.classList.add('show');
         $toggle.classList.add('selected');

       })
    })

  });

  if(document.querySelector('.checkoutPage')) {

    document.querySelector('.order-item-button').addEventListener("click", function() {
      document.querySelector('.order-list').classList.toggle('show-flex');
      document.querySelector('.order-item-button').classList.toggle('rotate-icon');
    });

  };

  if(document.querySelector('.close-whatsApp')) {

    document.querySelector('.close-whatsApp').addEventListener("click", function() {
      document.querySelector('.whatsApp').classList.add('close');
    });

  };

  if (document.querySelector('.loginPage')) {

    document.querySelector('.forgot-pswrd').addEventListener("click", function() {
      document.querySelector('.restore').classList.add('show');
      document.querySelector('.signIn-form').classList.add('hide');
    })

    document.querySelector('.checked-code').onfocus = function() {
      document.querySelector('.check-code').classList.add('show');
    }

    document.querySelector('.checked-code').onblur = function() {
      document.querySelector('.check-code').classList.remove('show');
    }

    document.querySelector('.new-password').onfocus = function() {
      document.querySelector('.new-pswrd').classList.add('show');
    }

    document.querySelector('.new-password').onblur = function() {
      document.querySelector('.new-pswrd').classList.remove('show');
    }

  };
  
});