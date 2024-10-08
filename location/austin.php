<!DOCTYPE html>
<html>
<head>
	<title>ivhomecare</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style/layout.css">
    <style>
      .main{
        background: url("../assets/images/hero.webp");
        background-attachment: scroll;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 150px;
        padding-bottom: 150px;
      }
  		.pcard {
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  margin: 5px;
  width: 320px;
  display: flex;
  flex-direction: column; /* Ensure content inside the card is arranged in a column */
  justify-content: start;
  align-items: start;
  padding: 20px;
}
.prcard {
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  margin: 5px;
  width: 300px;
  display: flex;
  flex-direction: column; /* Ensure content inside the card is arranged in a column */
  justify-content: start;
  align-items: start;
  padding: 0px;
}
.prcard h6{
  background: #fa7c5b;
  color: #dddddd;
}
.efcard {
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  margin: 10px;
  width: 350px;
  display: flex;
  flex-direction: column; /* Ensure content inside the card is arranged in a column */
  justify-content: start;
  align-items: start;
  padding: 15px;
}

  	</style>
</head>
  <body>
    <div class="container-fluid m-0 p-0">
      <!-- header  -->
      <?php 
        include '../include/header.php';
      ?>
      <!-- Main banner -->
      <div class="row main m-0 mt-5 d-flex align-items-center">
        <div class="col-md-1"></div>
        <div class="col-md-5 mt-2 p-5 d-flex flex-column">
          <h6 class="fw-bold">Invigorate, Energize, Recharge</h6>
          <h4  class="fw-bold">Austin’s Leading Mobile IV Therapy & Infusion Service.</h4>
          <p class="text-secondary mt-2 fw-bold">IV Home Care believes in addressing the root causes of health challenges to reach optimal well-being, empowering you to take control of your wellness and thrive. More than just an IV drip service, we are a community of like-minded individuals dedicated to supporting you on your health journey. </p>
          <div>
            <button class="m-2 btn p-3 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">BOOK AN APPOINTMENT</button>
          </div>
        </div>
      </div>

      <div class="row m-0 mt-5 p-2 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center fw-bold p-2" style="color:#003c46;">Types Of IV Therapies We Offer in Austin, TX</h2>
        <p class="col-md-6 text-center text-secondary p-2 fw-bold">We are the leading providers of Mobile and In-Clinic IV Vitamin Drips in Austin. Discover a wide range of IV therapy options, including B-Complex, Vitamin C, Magnesium, Zinc, NAD+, and more, all tailored to address various health concerns and deficiencies.</p>
      </div>

      <div class="row d-flex flex-wrap justify-content-center align-items-stretch p-5  m-0 mt-5">
        <!-- card 01 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">Hangover IV Drip</p>
          <p>Fast relief from hangover symptoms with a blend of hydration, vitamins, and minerals to rejuvenate and restore balance.</p>
          <ul>Ingredients
            <li>Ascorbic Acid</li>
            <li>Vita Complex</li>
            <li>Minerals</li>
            <li>Calcium</li>
            <li>B12</li>
            <li>Toradol</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
        <!-- card 02 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">Migraine/Headache Drip</p>
          <p>Targeted support to ease migraine or headache pain, combining fluids, electrolytes, and anti-inflammatory ingredients.</p>
          <ul>Ingredients
            <li>Toradol</li>
            <li>Magnesium</li>
            <li>Benadryl</li>
            <li>Ondansetron</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
        <!-- card 03 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">Detox Drip</p>
          <p>A powerful infusion designed to flush out toxins, enhance liver function, and promote overall detoxification.</p>
          <ul>Ingredients
            <li>Ascorbic Acid</li>
            <li>Vita Complex</li>
            <li>Minerals</li>
            <li>Calcium</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
        <!-- card 04 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">Myers Cocktail IV Drip</p>
          <p>A classic blend of essential vitamins and minerals to boost energy, improve mood, and support overall wellness.</p>
          <ul>Ingredients:
            <li>Ascorbic Acid</li>
            <li>Vita Complex</li>
            <li>Minerals</li>
            <li>Calcium</li>
            <li>B12</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
        <!-- card 05 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">Super Immune IV Drip</p>
          <p>Fortify your immune system with high-dose vitamin C, antioxidants, and essential nutrients to enhance your body’s defenses.</p>
          <ul>Ingredients:
            <li>Triimmune</li>
            <li>Vita Complex</li>
            <li>Minerals</li>
            <li>Glutathione</li>
            <li>Zinc</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
        <!-- card 06 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">Bio Beauty Drip</p>
          <p>Revitalize your skin, hair, and nails with a mix of beauty-enhancing vitamins and nutrients for a radiant glow.</p>
          <ul>Ingredients:
            <li>Glutathione</li>
            <li>Vita Complex</li>
            <li>Ascorbic Acid</li>
            <li>Biotin</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
        <!-- card 07 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">Athletic Recovery IV Drip</p>
          <p>Speed up recovery with an infusion of electrolytes, amino acids, and vitamins to replenish and repair after intense exercise.</p>
          <ul>Ingredients:
            <li>Ascorbic Acid</li>
            <li>Vita Complex</li>
            <li>Minerals</li>
            <li>Amino Blend</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
        <!-- card 08 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">NAD+ 250 mg IV Drip</p>
          <p>A rejuvenating boost with NAD+ to support cellular energy, cognitive function, and overall vitality.</p>
          <ul>Ingredients:
            <li>NAD+ 250 mg</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
        <!-- card 09 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">NAD+ 1000 mg IV Drip</p>
          <p>A high-dose infusion of NAD+ for advanced support of mental clarity, energy levels, and anti-aging benefits.</p>
          <ul>Ingredients:
            <li>NAD+ 1000 mg</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
      </div>
      <!-- Process Card  -->
      <div class="row m-0 mt-5 p-2 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center fw-bold p-2" style="color:#003c46;">How It Works </h2>
      </div>
      <div class="row d-flex flex-wrap justify-content-center align-items-stretch p-2 m-0 mt-2" >
        <!-- card 01 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Book Online  </h6>
          <p class="text-secondary">Use our online booking system to schedule your treatment, whether at our clinic, your home, office, or hotel.</p>
        </div>
        <!-- card 02 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Pre-Treatment Assessment</h6>
          <p class="text-secondary">We perform a pre-treatment screening to ensure you receive the best possible care.</p>
        </div>
        <!-- card 03 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Sit Back and Relax</h6>
          <p class="text-secondary">Our Registered Nurse will arrive at your chosen location—whether in-clinic or mobile—to administer your treatment.</p>
        </div>
      </div>


      <div class="row m-0 p-5 d-block justify-content-center align-items-center mt-5" style="background:#0e996a;">
        <h4 class="text-center text-light">After Effects of IV Drip Therapy </h4>
        <p class=" p-5 text-center text-light">Discover the transformative benefits of IV therapy and how it can rejuvenate and revitalize your body. Our customized treatments are designed to deliver immediate and lasting results, enhancing your overall well-being. Here’s what you can expect after your session:</p>
      </div>
      <div class="row m-0 p-5 d-flex flex-wrap justify-content-center align-items-stretch">
          <div class="efcard">
            <p class="fw-bold">Enhanced Energy Levels</p>
            <p class="text-secondary">Experience a significant boost in vitality as your body absorbs essential nutrients. The direct infusion of vitamins, minerals, and fluids revitalizes your cells, leaving you feeling more energetic and less fatigued. Many clients report an immediate increase in their daily energy levels, making it easier to tackle tasks and stay productive.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Improved Mental Clarity</p>
            <p class="text-secondary">After your IV therapy, you may notice enhanced cognitive function. The infusion of nutrients such as B vitamins and amino acids supports brain health, leading to improved focus, sharper thinking, and better memory. Say goodbye to brain fog and welcome a clearer, more alert mind.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Quicker Recovery</p>
            <p class="text-secondary">Whether recovering from intense exercise, illness, or general fatigue, our IV therapies can accelerate your recovery process. Essential nutrients and hydration work together to repair muscle tissue, boost immune function, and reduce recovery time, helping you get back to feeling your best more quickly.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Hydration Balance</p>
            <p class="text-secondary">IV therapy is an effective way to restore fluid balance in your body. By replenishing lost fluids and electrolytes, you’ll achieve optimal hydration levels, which can improve physical performance, prevent dehydration-related symptoms, and promote overall health.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Radiant Skin</p>
            <p class="text-secondary">Enjoy the benefits of improved skin health as our therapies deliver essential nutrients directly to your cells. Enhanced hydration and nutrient delivery can contribute to a healthier, more radiant complexion, reducing signs of dryness and dullness while promoting a natural, youthful glow.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Boosted Immune Function</p>
            <p class="text-secondary">Strengthen your body’s defenses with a tailored blend of vitamins and antioxidants designed to enhance your immune system. Post-treatment, you may feel more resilient against common illnesses and better equipped to handle daily stressors, supporting overall health and well-being.</p>
          </div>
      </div>

      <div class="row m-0 p-5 d-flex flex-column justify-content-center align-items-center mt-5" style="background:#fa7c5b;">
        <h4 class="text-center text-light">Unlock Your Potential with Mobile IV Therapy in Austin</h4>
        <p class="col-md-9 p-4 text-center text-light">At IV Home Care, we believe in your unique potential to flourish. Our dedicated healthcare team is here to support you every step of the way. Each of our treatments is carefully tailored to meet your specific needs and address any deficiencies. We start with a comprehensive consultation and assessment to craft a personalized treatment plan just for you.</p>
        <div class="text-center">
          <button style="border: none; padding: 10px 30px;"> Book Online</button>
        </div>
      </div>

        <!-- faq's -->
  <div class="row m-0 mt-4 p-2 bg-light d-flex justify-content-center align-items-start">
    <h2 class="text-center fw-bold p-5">Frequently Asked Questions</h2>
    <div class="col-md-7 m-0 p-2">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              How Does Your IV Drip Service Work?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>At IV Home Care, we strive to make your IV therapy experience both relaxing and efficient. Before beginning the therapy, you'll have a consultation with one of our experienced nurses. This consultation helps us understand your needs and determine if an IV infusion is right for you. We customize the intravenous drip to contain the perfect blend of vitamins, minerals, and fluids tailored to your specific needs. The entire process typically takes 30-60 minutes, during which we ensure a comfortable and communicative experience. Once completed, you can immediately resume your daily activities.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              How Do I Know If IV Vitamin Therapy Is for Me?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Our IV therapy in Austin is suitable for a diverse range of individuals. If you have concerns about the process, you can check our licenses and credentials. Rest assured, all our staff are qualified nurses who have completed specialized IV vitamin therapy training. Whether you need a quick health boost or ongoing wellness maintenance, our team is here to support you.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              How Often Does an IV Drip Need to Be Administered for Successful Results?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>The frequency of IV therapy depends entirely on your personal needs and health goals. Some clients benefit from occasional treatments, while others may require regular sessions for ongoing wellness maintenance or specific health conditions. Our personalized approach ensures that you receive the maximum benefit from each session.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              What Other Services Do You Provide?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>In addition to our standard IV drip sessions, we offer intramuscular and subcutaneous shots, micronutrient testing, and NAD+ therapy. We also provide mobile IV drips in Austin for those unable to travel. Whatever your needs, IV Home Care can deliver specialized treatments, vitamin injections, and intramuscular shots tailored to your specific requirements. You can learn more about these services from the dropdown menu at the top of our page.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
             Are There Any Adverse Effects from IV Drips?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>IV vitamin therapy is generally safe and performed by our fully trained healthcare professionals. While side effects are extremely rare, some individuals might experience minor bruising or discomfort at the injection site. During your consultation, our nursing team will conduct a thorough health assessment to minimize any potential risks. It is essential to disclose your medical history and any existing conditions to ensure a safe and effective therapy session.</p>
            </div>
          </div>
        </div>
         <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              What Benefits May I Notice After One IV Drip Treatment? 
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>The benefits of IV therapy can vary depending on the individual and their health goals. Many clients report feeling more energized, hydrated, and rejuvenated after a single session. The specific outcomes will depend on your health conditions and the nutrients infused during the treatment.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- faq's end -->


      <?php 
        include '../include/footer.php';
      ?>
    </div>
  </body>
</html>