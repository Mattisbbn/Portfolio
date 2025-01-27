<section class="full-h">
    <h1 class="text-center fw-semibold mt-4 pt-2 page-title">Me contacter</h1>

    <form class="d-flex flex-column col-10 m-auto" method="post">
        <div class="d-flex flex-column w-50 gray-footer p-4 rounded-3">
            <label for="family-name"><p>Votre nom</p></label>
            <input class="rounded-3 p-2 mb-3 border-0" type="text" name="family-name" id="family-name">

            <label for="name"><p>Votre prénom</p></label>
            <input class="rounded-3 p-2 mb-3 border-0" type="text" name="name" id="name">

            <label for="email"><p>Votre email</p></label>
            <input class="rounded-3 p-2 mb-3 border-0" type="text" name="email" id="email">

            <label for="message"><p>Votre message</p></label>
            <textarea class="rounded-3 mb-3 border-0" rows="4" name="message" id="message"></textarea>

            <button class="rounded-3 p-3 mb-3 border-0" type="submit">Envoyer</button>
        </div>

        <div class="w-50">
            
        </div>
    </form>


</section>  


<?php 

require_once 'controller/contact-handler.php';