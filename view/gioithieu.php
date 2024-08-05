<?php include "menu.php"; ?>
<style>
header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.introduction {
    background-color: #fff;
    padding: 50px 0;
}

.intro-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.intro-content img {
    width: 40%;
    border-radius: 8px;
}

.text {
    width: 55%;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
}
</style>
    <header>
        <h1>Về chúng tôi</h1>
    </header>

    <section class="introduction">
        <div class="container">
            <div class="intro-content">
                <img src="./image/gioithieu.jpg" alt="Your Image">
                <div class="text">
                    <p>Xin chào, tôi là <span id="name">[Tên của bạn]</span>. Tôi là một người sáng tạo và đam mê trong lĩnh vực [Lĩnh vực của bạn].</p>
                </div>
            </div>
        </div>
    </section>


