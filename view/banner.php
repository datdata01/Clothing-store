    <marquee style="margin-left:115px ;" width="80%"  behavior="scroll"  bgcolor="pink" direction=""><strong style="font-size: 30px; color: white;">SHOP HANTAI thương hiệu thời trang số một</strong></marquee>
<div  class="row banner">
    <div class="banner_left">
        <img src="image/Landing-page_1200px_KIDS-T11_FA.jpg" width="250px" height="400px" alt="">
    </div>
    <div class="slide">
        <img src="image/sl1.jpg" alt="" width="770px" height="400pc" id="anh">
    </div>
    <div class="banner_right">
        <img src="image/LANDING-PAGE_OPT1.jpg" width="250px" height="400px" alt="">
    </div>
</div>
<script>
    var anh = ['image/sl1.jpg', 'image/sl2.jpg','image/sl3.png', 'image/sl4.jpg'];
    var i = 0;

    function onshow() {
        if (i > 2) i = 0;
        document.getElementById('anh').src = anh[i];
        i++;
    }

    function play() {
        id = setInterval(function(

        ) {
            onshow();
        }, 4000)
    }
    play();

    function stop() {
        clearInterval(id)
    }
</script>