<?php require_once("sendmail.php") ?>
<?php include_once("headerrr.php"); ?>
    <section id="formulaire-contact">
        <div class="container">
        <fieldset>
              <form action="contact.php" method="POST">
                    <h1 id="titre-contact">Contact</h1>
                    <p style="color:red;"><?php echo $greska ?></p>
                    <p style="color:green;"><?php echo $konfirmacija ?></p>
                <div class="form-group row">

                    <label for="inlineFormInputName" class="col-sm-2 col-form-label">Nom *:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="inlineFormInputName">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Tél *:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tel" id="phone" pattern="[0-9]{10}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail4" class="col-sm-2 col-form-label">Email *:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="inputEmail4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message *:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                </form>
                </fieldset>

        </div>
        <div class="container">
            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.8773310194797!2d6.126604616619462!3d46.19299969253617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c7b2e1299827b%3A0x6058f3a4660b6a0b!2sRue%20Viguet%208%2C%201227%20Gen%C3%A8ve!5e0!3m2!1sfr!2sch!4v1605703114904!5m2!1sfr!2sch" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <?php include_once("footerrr.php"); ?>
