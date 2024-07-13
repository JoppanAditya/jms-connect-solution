$(window).on("load", () => {
  // Page Loader
  $(".js-page-loader").addClass("fade-out");
  setTimeout(() => {
    $(".js-page-loader").css("display", "none");
  }, 300);
});

$(document).ready(() => {
  $(window).scroll(() => {
    var sectionHeight = $("#page-header").outerHeight();

    // sticky navbar on scroll script
    if ($(this).scrollTop() > sectionHeight) {
      $(".section-nav").addClass("sticky");
    } else {
      $(".section-nav").removeClass("sticky");
    }

    var top = $(window).scrollTop();

    $("section").each(function () {
      var offset = $(this).offset().top - 150;
      var height = $(this).outerHeight();
      var id = $(this).attr("id");

      if (top >= offset && top < offset + height) {
        $("#navigation_bar li a").removeClass("active");
        $('#navigation_bar li a[data-target="#' + id + '"]').addClass("active");
      }
    });

    // scroll-up button show/hide script
    if ($(this).scrollTop() > 500) {
      $(".scroll-up-btn").addClass("show");
    } else {
      $(".scroll-up-btn").removeClass("show");
    }
  });

  // slide-up script
  $(".scroll-up-btn").click(() => {
    $("html, body").animate({ scrollTop: 0 }, 400);
  });

  // Dropdown script
  $(".dropdown").each(function () {
    const $dropdown = $(this);
    const $select = $dropdown.find(".select");
    const $caret = $dropdown.find(".caret");
    const $menu = $dropdown.find(".dropdown-menu");
    const $options = $dropdown.find(".dropdown-menu li");
    const $selected = $dropdown.find(".selected");

    $select.on("click", function () {
      $select.toggleClass("select-clicked");
      $caret.toggleClass("caret-rotate");
      $menu.toggleClass("dropdown-menu-open");
    });

    $options.on("click", function () {
      const $option = $(this);
      $selected.text($option.text());
      $("#input-service").val($option.text());
      $selected.attr("data-value", $option.attr("data-value"));
      $select.removeClass("default");
      $select.removeClass("select-clicked");
      $caret.removeClass("caret-rotate");
      $menu.removeClass("dropdown-menu-open");
      $options.removeClass("dropdown-active");
      $option.addClass("dropdown-active");
    });

    $(document).on("click", function (event) {
      if (!$dropdown.is(event.target) && $dropdown.has(event.target).length === 0) {
        $select.removeClass("select-clicked");
        $caret.removeClass("caret-rotate");
        $menu.removeClass("dropdown-menu-open");
      }
    });

    $(".button").on("click", function () {
      const $button = $(this).closest(".button");
      const value = $button.data("value");
      const $dropdown = $(".dropdown");
      const $selected = $dropdown.find(".selected");
      const $inputService = $("#input-service");

      $selected.text(value);
      $inputService.val(value);

      const $options = $dropdown.find(".dropdown-menu li");
      $options.removeClass("dropdown-active");
      $select.removeClass("default");
      $options.each(function () {
        const $option = $(this);
        if ($option.text() === value) {
          $option.addClass("dropdown-active");
        }
      });
    });
  });

  // Show password
  $(".show-password").on("mousedown", function() {
    $(this).siblings(".input-area").find("input").attr("type", "text");
  }).on("mouseup", function() {
    $(this).siblings(".input-area").find("input").attr("type", "password");
  });

  $(".show-password.change").on("mousedown", function() {
    $(this).siblings("input").attr("type", "text");
  }).on("mouseup mouseleave", function() {
    $(this).siblings("input").attr("type", "password");
  });

  // Smooth scrolling for section links
  $(".section-nav #navigation_bar li a").on("click", function (e) {
    e.preventDefault();
    const target = $(this).data("target");
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 400);
  });

   // Smooth scrolling for scroll down button
   $(".scroll-down").on("click", function (e) {
    e.preventDefault();
    const target = $(this).data("target");
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 400);
  });

  // Show edit popup
  $('.show-edit').on('click', function() {
    let title = $(this).data('title');
    let value = $(this).siblings('p').text();

    $('#popup-title').text(title);
    $('#field-name').val(title);
    $('#field-value').val(value);
    $('#edit-section').show();
    $('#password-section').hide();
    $('body').toggleClass("show-popup");
  });

  // Show change password popup
  $('.show-change').on('click', function() {
      $('#edit-section').hide();
      $('#password-section').show();
      $('body').toggleClass("show-popup");
  });

  // Hide popup
  $('.close-btn').on('click', function() {
      $('body').toggleClass("show-popup");
  });
});
