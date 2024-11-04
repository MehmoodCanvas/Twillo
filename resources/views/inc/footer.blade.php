        <footer class="footer-wrapper">
            <div class="footer_copyright_flex justify-content-center">
                <div class="copyright_nav">
                    <ul>
                        <li><a href="#!">Privacy Policy</a></li>
                        <li><a href="#!">|</a></li>
                        <li><a href="#!">Terms Of Use</a></li>
                    </ul>
                </div>
            </div>
        </footer>


        <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery-3.6.3.min.js')}}"></script>
        <script src="{{asset('assets/front/js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset("assets/front/js/custom.js")}}"></script>

    <script>
        $(document).ready(function() {
            $('#pass_ico').on('click', function() {
                const passInput = $('#pass_input');
                const passIcon = $('#pass_ico');
        
                if (passInput.attr('type') === 'password') {
                    passInput.attr('type', 'text');
                    passIcon.removeClass('fa-eye-slash').addClass('fa-eye');
                } else {
                    passInput.attr('type', 'password');
                    passIcon.removeClass('fa-eye').addClass('fa-eye-slash');
                }
            });
        });
    </script>
<script>
    const video = document.getElementById('fourth_wrap_video');

function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function checkVideo() {
    if (isElementInViewport(video)) {
        video.play();
    } else {
        video.pause();
    }
}

document.addEventListener('scroll', checkVideo, false);
window.addEventListener('resize', checkVideo, false);
window.addEventListener('load', checkVideo, false);
</script>
<script>
    var swiper = new Swiper (".fifth_wrap_slider", 
    {
        slidesPerView: 1,
        spaceBetween: 30,
        effect: "fade",

        navigation: 
        {
            nextEl: ".s_next",
            prevEl: ".s_prev",
        },
        
    });
</script>


</body>
</html>