$(window).on({
  scroll: function () {
    const scrollTop = $(window).scrollTop();
    const scrollHeight = $(document).height() - $(window).height();
    const scrollPercentage = (scrollTop / scrollHeight) * 100;

    $(":root").css("--page-progress", scrollPercentage + "%");
    $(":root").css("--grey-progress-start", scrollPercentage + 1 + "%");
  },
  load: function () {
    $.ajax({
      url: "/php/my_projects.php",
      method: "GET",
      success: (response) => {
        $("#my_projects").html(response);
      },
    });
    $(".menu").toggle();
  },
  resize: function () {
    if ($(".menu").is(":visible") && $(window).width() > 580) {
      $(".container1").removeClass("change");
      $(".menu").toggle();
    }
  },
});

function open_menu(button) {
  button.classList.toggle("change");
  $(".menu").toggle();
}

$(document).ready(() => {
  $("#contact-form-send").on("click", () => {
    let form_data = {
      name: $("#name").val(),
      email: $("#email").val(),
      subject: $("#subject").val(),
      message: $("#message").val(),
    };
    $.ajax({
      url: "/php/mail_sending.php",
      method: "POST",
      data: form_data,
      success: (response) => {
        $(".contact-form").html(response);
      },
    });
  });
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      console.log(entry);
      if (entry.isIntersecting) {
        $(entry.target).addClass("show");
      } else {
        $(entry.target).removeClass("show");
      }
    });
  });

  $(".hidden").each(function (index, el) {
    observer.observe(el);
  });
});

function updateProjectView(project_Id) {
  $.ajax({
    url: "/php/project_details.php",
    method: "POST",
    data: {
      id: project_Id,
    },
    success: (response) => {
      $(".project-view").html(response);
    },
  });
}
