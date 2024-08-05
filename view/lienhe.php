<?php include "menu.php"; ?>
<style>
header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
}



.contact {
    background-color: #fff;
    padding: 50px 0;
}

.contact-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}



#map {
    width: 100%%;
    height: 400px;
    border-radius: 8px;
}

</style>

<header>
        <h1>Liên Hệ Chúng Tôi</h1>
    </header>
    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.972760691093!2d105.81479337500055!3d21.03377588760684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d55535ff5%3A0x15ddb336afe4ea7c!2zNjUgUC4gVuG6oW4gQuG6o28sIExp4buFdSBHaWFpLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1702229571221!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <section class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Thông Tin Liên Hệ</h2>
                    <p>Email: hentai@email.com</p>
                    <p>Điện thoại: 0123 456 789</p>
                    <p>Địa chỉ: Số 123, Đường Nguyễn công chánh, Thành phố Hà Nội</p>
                </div>
                <div id="map"></div>
            </div>
        </div>
    </section>



