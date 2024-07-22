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

      <div class="row d-flex flex-wrap justify-content-center align-items-stretch  m-0 mt-5">
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
      <?php 
        include '../include/footer.php';
      ?>
    </div>
  </body>
</html>