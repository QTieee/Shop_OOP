<?php include "./AdditionalPHP/checkAccess.php"; ?>

<head>

</head>

<div id="contact-submission" class="contact-section">
    <div class="contact-us">
        <div class="subtitle">
            <h2>Liên hệ</h2>
            <p>Để công ty bánh kem ABC đạt nhiều thành công thì cần có những đóng góp ý kiến của các bạn rất nhiều.</p>
            <span class="send-input-message"></span>
            <span id="sendError" class="input-error"></span>
        </div>

        <form id="contactForm" method="POST" >
            <label for="customerName">Tên <em>&#x2a;</em></label>
            <span id="nameError"class="input-error"></span>
            <input id="customerName" name="customerName" required type="text" />

            <label for="customerEmail">Email <em>&#x2a;</em></label>
            <span id="emailError" class="input-error"></span>
            <input id="customerEmail" name="customerEmail" required type="email" />

            <label for="customerPhone">Số điện thoại</label>
            <span id="phoneError" class="input-error"></span>
            <input id="customerPhone" name="customerPhone" type="tel"/>
            
            <label for="orderNumber">Mã đặt bánh</label>
            <input id="orderNumber" name="orderNumber" type="text" />
            
            <label for="customerNote">Lời nhắn<em>&#x2a;</em></label>
            <span class="input-error"></span>
            <textarea id="customerNote" name="customerMessage" required rows="4"></textarea>
            <br>

            <div class="push-button">
                <span><button id="submit" name="submit">Gửi lời nhắn đến chúng tôi</button></span>
            </div>
        </form>
    </div>
</div>