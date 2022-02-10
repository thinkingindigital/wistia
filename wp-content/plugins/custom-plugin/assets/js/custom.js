
jQuery(function() {

    window._wq = window._wq || [];
    _wq.push({ id: 'yuh3trwkkl', onReady: function(video) {

        video.bind("crosstime", 60, function() {
            video.pause();
            jQuery('.wistia_responsive_padding').fadeOut();
            Swal.fire({
                title: 'Want to continue?',
                html: '<p>Please log in below to keep watching the video</p><input type="text" id="login" class="swal2-input" placeholder="Username" value="testuser"><input type="password" id="password" class="swal2-input" placeholder="Password" value="testpass">',
                confirmButtonText: 'Sign in',
                focusConfirm: false,
                allowOutsideClick: false,
                preConfirm: () => {
                    const login = Swal.getPopup().querySelector('#login').value
                    const password = Swal.getPopup().querySelector('#password').value
                    if (!login || !password) {
                        Swal.showValidationMessage(`Please enter username and password`)
                    }
                    return { login: login, password: password }
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    jQuery('.wistia_responsive_padding').fadeIn(function() {
                        video.play();
                    });
                    
                }
                else {
                    window.location.href = 'https://gg-demo.thinkingindigital.com/wistia/login';
                }
            })
            return video.unbind;
        });
    }});

})
