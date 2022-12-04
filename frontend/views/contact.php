<section class="section main contact">
    <h1>Contact Us</h1>
    <div class="contactformbox">
        <form action="../backend/Controller/mail.php" method="post" id="contactForm">
            <input type="text" name="name" placeholder="Name: ">
            <input type="text" name="email" placeholder="Email: ">
            <input type="text" name="subject" placeholder="Subject: ">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message: " style="font-family:helvetica;"></textarea>
            <input class="btn" type="submit" name="send-email" value="Send Email!"> 
        </form>
    </div>
</section>