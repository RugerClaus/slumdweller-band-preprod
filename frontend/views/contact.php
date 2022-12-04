<section class="section main contact">
    <h1>Contact Us</h1>
    <div class="error"></div>
    <div class="contactformbox">
        <form action="../backend/Controller/mail.php" method="post" id="contactForm">
            <input type="text" name="name" placeholder="Name: " class="name">
            <input type="text" name="email" placeholder="Email: " class="email">
            <input type="text" name="subject" placeholder="Subject: " class="subject">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message: " class="message" style="font-family:helvetica;"></textarea>
            <input class="btn" type="submit" name="send-email" value="Send Email!"> 
        </form>
    </div>
</section>
<script src="../js/contact.js"></script>