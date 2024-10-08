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
  width: 220px;
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
          <h6 class="fw-bold">Rejuvenate, Revitalize, Replenish</h6>
          <h4  class="fw-bold">Experience the transformative power of IV therapy San Francisco.</h4>
          <p class="text-secondary mt-2 fw-bold">Experience the revitalizing benefits of IV drips without stepping out of your home! At IV Home Care, we bring our top-notch services directly to you. Our concierge services are crafted to make your health and wellness routines seamless and convenient. With our mobile IV drips, you can relax and rejuvenate in the comfort and privacy of your home. </p>
          <div>
            <button class="m-2 btn p-3 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">BOOK AN APPOINTMENT</button>
          </div>
        </div>
      </div>

      <div class="row m-0 mt-5 p-2 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center fw-bold p-2" style="color:#003c46;">Types Of IV Therapies We Offer in San Francisco, CA</h2>
        <p class="col-md-6 text-center text-secondary p-2 fw-bold">IV Home Therapy delivers high-quality intravenous (IV) therapy directly to your home, ensuring comfort, convenience, and top-notch care. Whether you require hydration therapy, vitamin infusions, or medical IV treatments, our experienced professionals are here to provide personalized and efficient service.</p>
      </div>

      <div class="row d-flex flex-wrap justify-content-center align-items-stretch p-5  m-0 mt-5">
        <!-- card 01 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">Hangover IV Drip</p>
          <p>Overindulged in alcohol? Our Hangover IV Drip rehydrates and replenishes vital nutrients to alleviate nausea, dehydration, and hangover symptoms quickly.</p>
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
          <p>Alleviate migraine and headache symptoms with our specialized infusion that combines vitamins and anti-inflammatory medications to provide rapid relief and restore balance</p>
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
          <p>Enhance your body's natural detoxification with our Detox Drip. This powerful blend of antioxidants, vitamins, and minerals helps cleanse your body of toxins, rejuvenate your cells, and boost your immune system.</p>
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
          <p>Experience the original IV therapy designed to bring balance, focus, and clarity. The Myers Cocktail IV Drip is a comprehensive mix of essential vitamins and minerals.</p>
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
          <p>Strengthen your immune system rapidly with our Super Immune IV Drip. This powerful infusion is formulated to boost your body's natural defenses.</p>
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
          <p>Enhance your natural beauty and glow with our Bio Beauty Drip. This formula supports skin health, improves elasticity, and promotes a radiant complexion.</p>
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
          <p>Tailored for athletes, this IV drip supports faster recovery, improves performance, and reduces fatigue with a blend of essential nutrients and amino acids.</p>
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
          <p>Boost cellular repair and energy production with NAD+ therapy. This treatment improves mood, cognitive function, and overall well-being, providing a quick way to enhance mental clarity and support anti-aging.</p>
          <ul>Ingredients:
            <li>NAD+ 250 mg</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
        <!-- card 09 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">NAD+ 1000 mg IV Drip</p>
          <p>Experience the advanced benefits of high-dose NAD+ therapy. This powerful infusion promotes cellular repair, increases energy, enhances mental clarity, and supports anti-aging.</p>
          <ul>Ingredients:
            <li>NAD+ 1000 mg</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
      </div>
      <!-- Process Card  -->
      <div class="row m-0 mt-5 p-2 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center fw-bold p-2" style="color:#003c46;">Our Process</h2>
      </div>
      <div class="row d-flex flex-wrap justify-content-center align-items-stretch p-2 m-0 mt-2" >
        <!-- card 01 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Step 01</h6>
          <p class="fw-bold">Select Your IV Therapy Package</p>
          <p class="text-secondary">Click on the “Book Now” button to explore and choose the IV therapy package that best fits your needs.</p>
        </div>
        <!-- card 02 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Step 02</h6>
          <p class="fw-bold p-2">Schedule Your Appointment</p>
          <p class="text-secondary">Choose a convenient date and time for your IV therapy session and provide your home address for our mobile service.</p>
        </div>
        <!-- card 03 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Step 03</h6>
          <p class="fw-bold">Home Visit by Medical Professional</p>
          <p class="text-secondary">On the day of your appointment, a licensed medical professional will arrive at your home equipped with all necessary supplies.</p>
        </div>
        <!-- card 04 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Step 04</h6>
          <p class="fw-bold">Relax During Your Treatment</p>
          <p class="text-secondary">The medical professional will administer the IV infusion therapy as per your treatment plan while you relax in the comfort of your home.</p>
        </div>
        <!-- card 05 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Step 05</h6>
          <p class="fw-bold">Post-Treatment Cleanup</p>
          <p class="text-secondary">After the session, the medical professional will tidy up and safely dispose of all equipment and supplies, ensuring your home remains as it was.</p>
        </div>
      </div>


      <div class="row m-0 p-5 d-block justify-content-center align-items-center mt-5" style="background:#0e996a;">
        <h4 class="text-center text-light">After Effects of IV Drip Therapy </h4>
        <p class=" p-5 text-center text-light">IV therapy offers a wide range of health benefits, from immediate rehydration and nutrient absorption to enhanced energy, immune function, and recovery. Whether you're looking to improve your overall wellness, recover from an illness, or enhance your athletic performance, our personalized IV therapy treatments can help you achieve your health goals.</p>
      </div>
      <div class="row m-0 p-5 d-flex flex-wrap justify-content-center align-items-stretch">
          <div class="efcard">
            <p class="fw-bold">Immediate Hydration and Nutrient Absorption</p>
            <p class="text-secondary">Unlike oral supplements, which need to pass through the digestive system, IV therapy delivers vitamins, minerals, and hydration directly into your bloodstream. This means your body can use these essential nutrients right away, providing rapid relief from dehydration, fatigue, and nutrient deficiencies.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Enhanced Energy Levels</p>
            <p class="text-secondary">Many clients report a noticeable boost in energy levels shortly after an IV therapy session. The infusion of vitamins like B12 and other essential nutrients can help combat fatigue and improve overall energy. This makes IV therapy an excellent choice for those with busy lifestyles, athletes needing a quick recovery boost, or anyone feeling run down and needing a rapid energy lift.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Faster Recovery from Illness</p>
            <p class="text-secondary">If you're recovering from an illness, IV therapy can accelerate the healing process. The targeted delivery of essential nutrients supports your body's natural recovery mechanisms, helping you bounce back faster. This is especially useful for individuals recovering from colds, flu, or even more serious health conditions.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Detoxification and Cellular Repair</p>
            <p class="text-secondary">Our detox IV therapies are designed to help your body eliminate toxins and support cellular repair. Infusions rich in antioxidants like glutathione help neutralize harmful free radicals and promote detoxification processes in your liver. This not only improves your overall health but also supports clearer skin and a more vibrant appearance.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Relief from Hangovers and Migraines</p>
            <p class="text-secondary">IV therapy is highly effective for providing relief from hangovers and migraines. Hangover IV drips rehydrate your body, replenish lost nutrients, and alleviate symptoms like nausea and headache. Similarly, migraine IV drips deliver a blend of medications and nutrients that can reduce the severity and duration of migraines, providing fast and effective relief.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Anti-Aging and Beauty Benefits</p>
            <p class="text-secondary">IV therapy isn't just about feeling better—it's about looking better too. Infusions containing biotin, vitamin C, and other beauty-enhancing nutrients can improve skin elasticity, reduce the appearance of wrinkles, and promote healthier hair and nails. Regular treatments can help you maintain a youthful, radiant appearance.</p>
          </div>
      </div>

      <div class="row m-0 p-5 d-flex flex-column justify-content-center align-items-center mt-5" style="background:#fa7c5b;">
        <h4 class="text-center text-light">Ready to Transform Your Health? </h4>
        <p class="col-md-9 p-4 text-center text-light">Don’t wait any longer to experience the benefits of Liquid IV Therapy. Whether you’re looking to boost your energy, enhance your immune system, or recover quickly, IV Home Care in San Francisco is here to help you achieve optimal health.</p>
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
              What is IV therapy? 
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Intravenous (IV) therapy involves the administration of fluids, medications, or nutrients directly into a vein. This allows for rapid absorption and effectiveness compared to oral administration.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              What conditions can be treated with IV therapy at home? 
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Conditions that can be treated with IV therapy at home include dehydration, infections requiring antibiotics, chronic illnesses requiring regular infusions, nutritional deficiencies, and pain management.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              How often will a healthcare provider visit during home IV therapy? 
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>The frequency of visits will depend on your specific treatment plan. Some patients may require daily visits, while others may need only weekly check-ins. Your healthcare provider will determine the appropriate schedule.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              What should I do in case of an allergic reaction to the IV medication? 
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>If you experience symptoms of an allergic reaction, such as rash, itching, swelling, or difficulty breathing, stop the infusion immediately and seek emergency medical attention.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              How do I dispose of used IV supplies? 
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Follow your healthcare provider’s instructions for disposing of used IV supplies. Typically, sharps should be placed in a designated sharps container, and other materials should be disposed of in a manner that prevents contamination.</p>
            </div>
          </div>
        </div>
         <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Can I travel while receiving home IV therapy? 
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Travel may be possible, but it requires careful planning and coordination with your healthcare provider. You’ll need to ensure that you have all the necessary supplies and access to medical support if needed.</p>
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