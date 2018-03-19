<!DOCTYPE html>
<html lang="en">
<head>
    <title>TTFT</title>

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<link rel="stylesheet" type="text/css" href="CSS/custom.css">

<?php if (isset($_POST['submit']))

    $name = $_POST['Name'];

    $visitor_email = $_POST['Email'];

    $message = $_POST['Message'];

    $email_subject = $_POST['Subject'];
    
    $to = "plhgh118@hotmail.com";

    $headers = "From: $name \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$message,$headers);

?>


</head>
<body>
<div id="nav">
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="Logo "><img src ="Images/ShibiFin.png" alt = "Logo" height = "100%"/></a>           
                <a data-activates="Snav" class="right button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">                          
                        <li><a class ="toscroll" href="#AboutmeBookmark">About Me</a></li>
                        <li><a class ="toscroll" href="#OfferBookmark">What I Offer</a></li>
                        <li><a class ="toscroll" href="#ContactBookmark">Contact Us</a></li>
                        <li><a class="toscroll" href="#DogWalkingBookmark">Testimonials</a></li>
                    </ul> 
                <h1 class ="titletext hide-on-small-and-down font-effect-outline ">Tails From the Trails</h1>
                <h1 class ="titletext hide-on-med-and-up font-effect-outline ">Tails From the Trails</h1>                                    
            </div>
        </nav>
    </div>
</div>
    <ul id="Snav" class="side-nav" >
        <li><a href="#AboutmeBookmark">About Me</a></li>
        <li><a href="#OfferBookmark">What I Offer</a></li>
        <li><a href="#ContactBookmark">Contact Us</a></li>
        <li><a href="#DogWalkingBookmark">Testimonials</a></li>
    </ul>

<!-- main content -->
<div id="BigImage">
    <div id = "floatingtext" class ="hide-on-small-and-down">
        <h1 class="welcometitle">Welcome</h1>
        <p class="welcometext"> Dog Walking & Pet Sitting  Services</p>
    </div>
    <div class="intro">
        <p>Tails from the trails is a professional and reliable dog walking and pet sitting service that you can trust. I offer a tailored and bespoke service to suit your needs, whether it be a run in the hills or cuddles and company whilst you’re away. Every pet I see is treated like one of my own. Our services include; dog walking & sitting, cat sitting, small animal care and exotic animal care.
 
       It is very important to me that your animals feel happy and safe and I will contact you giving you little updates, pictures and texts to let you know how your pet is getting on.
       </p>
    </div>
</div>               
<div id ="AboutmeBookmark">
      &nbsp;
</div>
    <div class ="Aboutme">
        <div class="row valign-wrapper">
            <div class="col s4 m3 l2 offset-l5 Selfie hide-on-small-only">
                <img src="images/test.jpg" alt="" class=" center circle responsive-img valign-wrapper" height="100%">
            </div>
        </div>
        <div class="row valign-wrapper">
            <div class="col s12 m12 l12 aboutinfo">
                Hi, I’m Didi I am a very friendly and enthusiastic individual who is very passionate about dogs and animal care, I have years of experience working with all kinds of pets, I am a qualified groomer and I have a BscHons in Animal Behaviour. I am a genuine, caring and professional person. I have been taking care of pets as a profession for over 10 years, and have developed a way of understanding, and relating to them. I am passionate about animals of every kind and they seem to love me as much as I love them. I am also fully insured!
                I always strive to provide the best, most loving service to every pet. Don’t just take my word for it, browse some reviews and testimonials from happy pet owners here.
            </div>         
        </div>      
    </div>
    <div class="row">
           <div id ="OfferBookmark" class="center col s12 m12 l12 offertitle">
                <b><u>What I Offer</u></b>
           </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card">           
                <div class="card-content">
                    <p class= "introtext">I have experience with lots of different breeds of dog, I am very confident walking anything from strong Rottweilers to the smallest of chihuahuas. I can take your dog on short or longer walks depending on what and where you prefer. I would be also willing to check up on your dog to feed it if you are away for any length of time. We have a number of <a class="modal-trigger" href="#modal1">OFFERS</a> for those seeking regular services.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="pupimg">
                    &nbsp;
                </div>
                <div class="card-content">
                    <h2 class= "breedtitle">Puppy walks</h2>
                    <h5><b>£8 per hour</b></h5>
                    <p class ="cardinfo">Getting a new puppy is a wonderful experience and we are puppy care experts. Prior to the conclusion of the vaccination process, we will care for your puppy with regular visits. Visits include feeding, initial in-home lead training, playtime and of course lots of love and attention. When your veterinarian approves your puppy to be walked outside, we will take your pup for safe, fun-filled walks and can help reinforce any training issues you and your pup are working on. A tired pup is a happy and well-behaved pup! </p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="SMbreeds">
                &nbsp;    
                </div>
                <div class="card-content">
                    <h2 class= "breedtitle">Small - Medium Breeds</h2>
                    <h5><b>£10 per hour</b></h5>
                    <p class ="cardinfo">Getting a new puppy is a wonderful experience and we are puppy care experts. Prior to the conclusion of the vaccination process, we will care for your puppy with regular visits. Visits include feeding, initial in-home lead training, playtime and of course lots of love and attention. When your veterinarian approves your puppy to be walked outside, we will take your pup for safe, fun-filled walks and can help reinforce any training issues you and your pup are working on. A tired pup is a happy and well-behaved pup!</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="lEXBreeds">
                    &nbsp;
                </div>
                <div class="card-content">
                    <h2 class= "breedtitle">Large - Extra Large Breeds</h2>
                    <h5><b>£12 per hour</b></h5>
                    <p class ="cardinfo">Getting a new puppy is a wonderful experience and we are puppy care experts. Prior to the conclusion of the vaccination process, we will care for your puppy with regular visits. Visits include feeding, initial in-home lead training, playtime and of course lots of love and attention. When your veterinarian approves your puppy to be walked outside, we will take your pup for safe, fun-filled walks and can help reinforce any training issues you and your pup are working on. A tired pup is a happy and well-behaved pup!</p>
                </div>
            </div>
        </div>
        
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <p class= "introtext">Our pet home visit service provides peace of mind for you whilst you're away knowing that your pet is being looked after in the safety and comfort of their own home.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="exoticimg">
                    &nbsp;
                </div>
                <div class="card-content">
                    <h2 class= "breedtitle">Exotic Pets</h2>
                    <h5><b>£3 - £10 per day</b></h5>
                    <p class ="cardinfo">Every bird and exotic animal is different, and we understand that quality exotic animal care is especially hard to come by. Therefore, we provide rarely offered services including; Fish Tank cleaning and maintenance (including marine set ups), amphibian care, exotic mammal care, Parrot and parakeet care and much more!</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="reptileimg">
                    &nbsp;
                </div>
                <div class="card-content">
                    <h2 class= "breedtitle">Reptiles</h2>
                    <h5><b>£5 - £10 per day</b></h5>
                    <p class ="cardinfo">Our reptile sitting services are available for one-off emergencies and for longer-term care. We can either come to your house and do some reptile-sitting, or we occasionally board them if they are housed correctly & easily transportable. We offer regular visits for your pet, this includes heat, light and humidity checks, feeding and cleaning per your instructions.
                    Regular customers include; snakes, lizards, dragons, skinks, monitors, iguanas, tortoises, terrapins, turtles and geckos.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="spetimg">
                    &nbsp;
                </div>
                <div class="card-content">
                    <h2 class= "breedtitle">Small Pets</h2>
                    <h5><b>£5 per day</b></h5>
                    <p class ="cardinfo">This service is great for smaller pets e.g. rabbits and guinea pigs or cats who find the upheaval of a trip to the cattery too unsettling. 
                    Home visits include litter tray, feeding, changing water in addition to much enjoyed one to one time with your pets.
                    As part of the service and for added peace of mind, I am happy to turn lights on and off, open and close curtains water plants and put bins out.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="card">
                <div class="adventureimg">
                    &nbsp;
                </div>
                <div class="card-content">
                    <h2 class= "breedtitle">Adventure Days</h2>
                       <h5><b>Starting at £15+</b></h5>
                        <p class ="cardinfo">The best kind of Doggy daycare! Previous adventures have been walks on the beach and hikes in the hills. We take a picnic for us and your pup and fill the day with doggy activities.</br></br>
                        I ask that you ensure your dog is security chipped, wormed and has been treated for fleas and ticks before they come into my care.

                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="card">
                <div class="catimg">
                    &nbsp;
                </div>
                <div class="card-content">
                    <h2 class= "breedtitle">Cats</h2>
                       <h5><b>£8 per day</b></h5>
                        <p class ="cardinfo">Our pet home visit service provides peace of mind for you whilst you're away knowing that your pet is being looked after in the safety and comfort of their own home. This service is perfect for cats who find the upheaval of a trip to the cattery too unsettling 
                        Home visits include litter tray, feeding, changing water in addition to much enjoyed one to one time with your pets.
                    </p>
                </div>
            </div>
        </div>
    </div> 
    <div id="modal1" class="modal ">
        <div class="modal-content">
            <h4>Offers</h4>
            <p>This is still being updated but feel free to contact us about our offers</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
        </div>
    </div>
    <div id ="ContactBookmark" class="col s12 m12 l12 moreinfo">
        <p class= "introtext">  If you require a service for your pet that is not listed here please do not hesitate to CONTACT US We offer a flexible service to suit your needs and will do our best to accommodate you. We also offer a consultation visit in your home (without obligation). This consultation is FREE of charge. During this visit, we can discuss the level of care you need and answer any questions you may have.</p>
    </div>
    <div class="ContactUs">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Do I cover your area?</h5>
                    <div id="map"></div>
                </div>
                <div class="col l4 offset-l2 s12 contactInfo">
                    <h5>Contact Info</h5>
                    <ul>
                        <li>Mobile: 07549199439</li>
                        <li>Email: <a href="mailto:tailsfromthetrails@outlook.com" target ="_top">tailsfromthetrails@outlook.com</a></li>
                        <li>Facebook:<a href="https://www.facebook.com/Tails-From-The-Trails-553648148344678/"> www.facebook.com/Tails-From-The-Trails/</a></li>
                        <li>Tailster:</li>
                    </ul>
                    <form method="post" action="pushpintest.php">
                        <div class="row contactForm">
                            <div class="col-md-4">
                                <div class="input-field">
                                    <input id="Name" type="text" class="validate" name = "Name" required>
                                    <label for="Name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-field ">
                                    <input id="email" type="email" class="validate" name ="Email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-field ">
                                    <input id="last_name" type="text" class="validate" name ="Subject" required>
                                    <label for="last_name">Subject</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="input-field ">
                                    <textarea id="textarea1" rows="5" class="materialize-textarea" name="Message"  required></textarea>
                                    <label for="textarea1">Your Message</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="captcha">
                                        <div class="g-recaptcha" data-sitekey="6LdUTE0UAAAAAIth3yY2GBsXd3VLVjXCs5kLrG1B" data-theme="dark"></div>
                                    </div>
                                </div> 
                                <button type="submit" class="btn btn-default" value = "Send Form" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>         
                </div>
            </div>
        </div>
    </div>
<div id ="DogWalkingBookmark">
&nbsp;                
</div>
    <div class ="Dogwalking">
        <div class="row valign-wrapper">
            <div class="col s2 m2 l2 DogImg hide-on-small-only"> 
                <img src="images/staffie.jpg" alt="" class="circle responsive-img valign-wrapper " height="100%">
            </div>
            <div class="col s12 m10 l10 DogWalkinginfoO">
                <p class= "introtext">
                <img src="images/rating5.png" alt="" height="30px"/>
                We have used Tails from the tails for the 2nd time  for our staffie lacey and we was really impressed  she seemed to have a good time and was clearly loved we will use them again in a heartbeat!
                </p>
            </div>
        </div>
    </div>
    <div class ="Dogwalking">
        <div class=" row valign-wrapper">
            <div class="col s12 m10 l10 DogWalkinginfoE">
                The Puppies seem to still be writing these!
            </div>
            <div class="col s2 DogImg hide-on-small-only">
                <img src="images/test.jpg" alt="" class="circle responsive-img valign-wrapper " height="100%">
            </div>
        </div>      
    </div>  
    <div class ="DogwalkingEnd">
        <div class="row valign-wrapper">
            <div class="col s2 m2 l2 DogImg hide-on-small-only">
                <img src="images/test.jpg" alt="" class="circle responsive-img valign-wrapper" height="100%">
            </div>
            <div class="col s12 m10 l10 DogWalkinginfoO">
                The Puppies seem to still be writing these!
            </div>
        </div>      
    </div>
    <footer class="page-footer">
        <!--<div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 >Footer Content</h5>
                    <p >You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 >Links</h5>
                    <ul>
                        <li><a  href="#!">Link 4</a></li>
                        <li><a  href="#!">Link 4</a></li>
                        <li><a  href="#!">Link 4</a></li>
                        <li><a  href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">-->
            <div class="container footertext">
                © 2018 TFTT
                <a class="right footertext" href="http://materializecss.com/">Created with materialize</a>
            </div>
        <!--</div>-->
        <a href="#" class="go-top "> <b>Top</b> </a>
    </footer>
<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


<!--
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHS6phPa41pkyovKkilZtwPH22PyimUQc&callback=initMap"
  type="text/javascript"></script>

 Google capcha 

<script src='https://www.google.com/recaptcha/api.js'></script>
-->
<script src="JS/JScript.js"></script>
</body>
</html>