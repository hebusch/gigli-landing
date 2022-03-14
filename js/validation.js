(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          if (form.checkValidity()) {
            event.preventDefault();

            let name = $("#name").val();
            let mail = $("#mail").val();
            let phone = $("#phone").val();
            let restaurant = $("#restaurant").val();
            let msg = $("#msg").val();

            form.classList.remove('was-validated');
            $.ajax({
              url : 'mailer/mailer.php',
              type : 'post',
              data : {name:name, mail:mail, phone:phone, restaurant:restaurant, msg:msg},
              cache: false,
              success: function (data) {
                  console.log(data);
                }
            });
            document.getElementById("notif").style.display="block";
          }
        }, false)
      })
  })()