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
          <h6 class="fw-bold">Boost, Balance, Energize</h6>
          <h4  class="fw-bold">Take a moment to revitalize with the best IV therapy in Reno, Nevada</h4>
          <p class="text-secondary mt-2 fw-bold">At IV Home Care, we deliver the benefits of IV therapy right to your doorstep. We prioritize convenience and comfort, which is why our team of qualified medical professionals is ready to provide personalized IV drip treatments in the familiar surroundings of your own home. Say goodbye to the hassle of traveling to a clinic and enjoy a rejuvenating IV therapy session tailored to your specific needs, all within the privacy and relaxation of your personal space.</p>
          <div>
            <button class="m-2 btn p-3 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">BOOK AN APPOINTMENT</button>
          </div>
        </div>
      </div>

      <div class="row m-0 mt-5 p-2 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center fw-bold p-2" style="color:#003c46;">Types Of IV Therapies We Offer in Reno, Nevada</h2>
        <p class="col-md-6 text-center text-secondary p-2 fw-bold">We provide a comprehensive selection of IV drip treatments tailored to your unique health and wellness needs. Our expert medical team will collaborate with you to identify the most suitable IV therapy for your specific requirements. Our at-home IV therapy options include:</p>
      </div>

      <div class="row d-flex flex-wrap justify-content-center align-items-stretch p-5  m-0 mt-5">
        <!-- card 01 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">Hangover IV Drip</p>
          <p>Packed with essential fluids, electrolytes, vitamins, and anti-nausea medication, this drip is designed to quickly alleviate hangover symptoms, rehydrate your body, and restore your energy levels. </p>
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
          <p>Infused with a blend of pain-relieving and anti-inflammatory medications, alongside essential vitamins and minerals, this therapy targets the root causes of your discomfort.</p>
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
          <p>This powerful infusion combines antioxidants, vitamins, and hydration to help flush out toxins, boost your liver function, and promote overall wellness.  Ideal for those looking to reset their system.</p>
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
          <p>This classic infusion includes a potent mix of vitamins, minerals, and antioxidants, such as Vitamin C, B vitamins, magnesium, and calcium. Designed to combat fatigue.</p>
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
          <p>This robust blend of high-dose Vitamin C, zinc, and other immune-boosting nutrients is designed to enhance your body's natural defenses. This drip keeps you protected and healthy.</p>
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
          <p>Vitamin C, and glutathione, this infusion promotes collagen production, reduces oxidative stress, and supports healthy hair, skin, and nails. Reveal a more radiant, youthful appearance with this beauty-boosting therapy.</p>
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
          <p>This specialized formula includes amino acids, electrolytes, and hydration to repair muscle tissue, reduce inflammation, and replenish essential nutrients. Perfect for athletes and fitness enthusiasts. </p>
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
          <p>This moderate dose helps to improve cognitive function, increase energy levels, and support anti-aging processes. Ideal for those new to NAD+ therapy or seeking maintenance dosing. Essential for energy production and cellular repair.</p>
          <ul>Ingredients:
            <li>NAD+ 250 mg</li>
          </ul>
          <button class="m-2 btn p-2 px-5 fw-bold border text-light rounded-pill" style="background:#0e996a;">Book Now</button>
        </div>
        <!-- card 09 -->
        <div class="pcard d-flex flex-column">
          <p class="p-3 px-5 fw-bold" style="background: #ebfcf6;">NAD+ 1000 mg IV Drip</p>
          <p>This high-dose infusion is designed to provide profound benefits for brain function, energy production, and overall vitality. Ideal for those seeking significant anti-aging effects, enhanced mental clarity, and peak physical performance.</p>
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
          <p class="fw-bold">Schedule an Appointment</p>
          <p class="text-secondary">Start by contacting us to schedule your initial consultation. Our friendly staff will help you find a convenient date and time that fits your schedule.</p>
        </div>
        <!-- card 02 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Step 02</h6>
          <p class="fw-bold p-2">Health Assessment and Consultation</p>
          <p class="text-secondary">During your consultation, we'll discuss your medical history and answer any questions you have about our IV therapy services. </p>
        </div>
        <!-- card 03 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Step 03</h6>
          <p class="fw-bold">Customized Treatment Plan</p>
          <p class="text-secondary">Our medical team will design a personalized IV therapy treatment plan which includes selecting the right vitamins, minerals, and nutrients, as well as the right dosage.</p>
        </div>
        <!-- card 04 -->
        <div class="prcard d-flex flex-column row">
          <h6 class="p-3 px-5 fw-bold">Step 04</h6>
          <p class="fw-bold">At-Home IV Administration</p>
          <p class="text-secondary">On the day of your appointment, a qualified medical professional will arrive at your home with all necessary equipment and supplies. They will carefully set up and administer your IV drip. </p>
        </div>
      </div>


      <div class="row m-0 p-5 d-block justify-content-center align-items-center mt-5" style="background:#0e996a;">
        <h4 class="text-center text-light">After Effects of IV Therapy: Reaping the Benefits </h4>
        <p class=" p-5 text-center text-light">At IV Home Care, our IV therapy treatments are designed to provide you with a multitude of benefits that can significantly enhance your overall well-being. Here are some of the positive after-effects you can expect from our IV therapy services:</p>
      </div>
      <div class="row m-0 p-5 d-flex flex-wrap justify-content-center align-items-stretch">
          <div class="efcard">
            <p class="fw-bold">Immediate Hydration and Nutrient Absorption</p>
            <p class="text-secondary">By delivering fluids directly into your bloodstream, IV therapy ensures that your body quickly absorbs essential nutrients and electrolytes, bypassing the digestive system. This leads to instant revitalization and rehydration, which can be particularly beneficial after intense physical activity, illness, or dehydration.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Enhanced Energy Levels</p>
            <p class="text-secondary">This is due to the high concentration of vitamins and minerals that are directly infused into the bloodstream, helping to combat fatigue and improve overall vitality. Whether you’re looking to enhance your daily energy or recover from a demanding event, IV therapy can provide the rejuvenation you need.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Strengthened Immune System</p>
            <p class="text-secondary">IV therapy can significantly bolster your immune system by delivering a potent mix of vitamins, such as Vitamin C and zinc, directly into your bloodstream. This immediate absorption enhances your body’s ability to fight off infections and illnesses. </p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Enhanced Athletic Performance</p>
            <p class="text-secondary">The infusion of amino acids, vitamins, and electrolytes can enhance athletic performance by promoting faster muscle recovery, reducing cramps and soreness, and improving overall endurance. This allows you to train harder and recover quicker.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Long-Lasting Wellness</p>
            <p class="text-secondary">While some benefits of IV therapy are immediate, others contribute to long-term wellness. Regular sessions can help maintain optimal levels of vitamins and minerals, supporting your overall health and preventing deficiencies. This ongoing support can lead to a more balanced, healthier lifestyle.</p>
          </div>
          <div class="efcard">
            <p class="fw-bold">Detoxification and Cleansing</p>
            <p class="text-secondary">IV therapy can help your body detoxify more efficiently. By delivering antioxidants and hydration directly to your cells, it aids in flushing out toxins and supporting liver function. This cleansing effect can leave you feeling refreshed and rejuvenated, with a clearer mind and body.</p>
          </div>
      </div>

      <div class="row m-0 p-5 d-flex flex-column justify-content-center align-items-center mt-5" style="background:#fa7c5b;">
        <h4 class="text-center text-light">Ready to Experience the Benefits of IV Therapy in Reno? </h4>
        <p class="col-md-9 p-4 text-center text-light">If you're ready to enjoy the convenience and transformative effects of our at-home IV drip services, our dedicated team at IV Home Care is here to assist you. Whether you need to book an appointment, discuss your health needs, or inquire about our various treatments and packages, we are just a call or click away.</p>
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
              Is it safe to receive an IV drip at home?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Absolutely. Our at-home IV therapy service is designed with your safety in mind. We prioritize patient safety and hygiene by using sterile equipment and ensuring that all treatments are administered by qualified and experienced medical professionals. During the treatment, we closely monitor patients to ensure their comfort and safety.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              How do I know if I'm a suitable candidate for at-home IV therapy?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>To determine your suitability for IV therapy, our medical team will conduct an initial consultation to assess your health needs and goals. If you have any pre-existing medical conditions or concerns, please share them with our team to help us devise the safest and most effective treatment plan for you.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              What is the duration of an IV therapy session? 
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>An IV therapy session typically lasts between 30 minutes to an hour, depending on the specific treatment and individual needs. Some treatments may require additional time for administration or monitoring. Our medical team will provide you with an accurate estimate during your consultation.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              What should I do to prepare for my IV therapy appointment?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Before your IV therapy appointment, make sure you are well-hydrated and have eaten a light meal. Prepare a comfortable space in your home where the treatment can be administered, and have a comfortable chair or recliner available for the duration of the session.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              How soon can I expect to see results from my at-home IV therapy treatment?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Many patients experience the benefits of their IV therapy treatment immediately or within a few hours of administration. However, individual results may vary depending on your specific health needs and the type of treatment received. Our medical team will discuss the expected results and timeline with you during your consultation.</p>
            </div>
          </div>
        </div>
         <div class="accordion-item m-2">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Can I receive at-home IV therapy if I am pregnant or breastfeeding?
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>If you are pregnant or breastfeeding, it is crucial to discuss your specific needs with our medical team during the consultation. We will work with you to determine the safest and most appropriate treatment plan tailored to your condition and requirements.</p>
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