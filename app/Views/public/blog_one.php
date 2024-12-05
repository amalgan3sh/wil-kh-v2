<html>
  <body>

<!--body content start-->

<div class="page-content">

<section>
  <div class="container">
    <center><h3 class="title">Joining the Regional Meeting of Cambodian Water Supply Association (C.W.A)</h3></center><br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-12 pe-md-6">
        <div class="image-container" 
             onmouseover="toggleImageDetails(1, true)" 
             onmouseout="toggleImageDetails(1, false)"
             style="position: relative; width: 100%;">
            <!-- Original Image -->
            <img id="image1-base" 
               src="images/client/blog1.JPG" 
               alt="Base Image" 
               style="width: 100%; position: relative; z-index: 1; transition: transform 0.3s ease;">
          
            <!-- Hover Image with Description -->
            <div id="image1-hover" 
               style="position: absolute; top: 50%; left: 50%; 
                      transform: translate(-50%, -50%) scale(0);
                      width: 50%; 
                      opacity: 0; 
                      transition: opacity 0.3s ease, transform 0.3s ease; 
                      z-index: 2;">
              <div style="position: absolute; bottom: 0; left: 0; width: 100%; 
                        background: rgba(0,0,0,0.7); color: white; 
                        padding: 10px; text-align: center;">
                Opening ceremony of the meeting
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12 pe-md-6">
          <div class="image-container" 
             onmouseover="toggleImageDetails(2, true)" 
             onmouseout="toggleImageDetails(2, false)"
             style="position: relative; width: 100%;">
            <!-- Original Image -->
            <img id="image2-base" 
               src="images/client/blog1_1.JPG" 
               alt="Base Image" 
               style="width: 100%; position: relative; z-index: 1; transition: transform 0.3s ease;">
          
            <!-- Hover Image with Description -->
            <div id="image2-hover" 
               style="position: absolute; top: 50%; left: 50%; 
                      transform: translate(-50%, -50%) scale(0);
                      width: 50%; 
                      opacity: 0; 
                      transition: opacity 0.3s ease, transform 0.3s ease; 
                      z-index: 2;">
              <div style="position: absolute; bottom: 0; left: 0; width: 100%; 
                        background: rgba(0,0,0,0.7); color: white; 
                        padding: 10px; text-align: center;">
                  Presentation activities in the meeting
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12 mt-6 mt-lg-0"><br>
          <div class="section-title">
            <p style="text-align: justify;" class="mb-0"><b>W</b>ater Innovation Lab with its partner AMO Greentech, South Korea participated in the regional 
              meeting of Cambodian Water Supply Association (CWA) held on the 16th of July 2024 at the 
              Serey Mongkul Restaurant of the Kampong Speu Province. The objectives of this regional 
              meeting was to (1) listen to the member’s voice and find solutions for the member; (2) 
              disseminate "Small and Medium Enterprise Bank of Cambodia (SME Bank)" and selection 
              PWOs for the project "Improving the financial access of private water operators in Cambodia for 
              expanding water supply;  (3) increase relations with DISTI, CWA members, and development 
              partners; and (4) updated about CWA, regulations related to clean water supply, and sharing new 
              knowledge, experience, and technology. </p>
          </div>
        </div>
        <div class="col-lg-6 col-12 mt-6 mt-lg-0">
          <div class="section-title">

            <p style="text-align: justify;" class="mb-0">This regional meeting was presided by the Director of the Kampong Speu Department of 
            Industry, Science, Technology and Innovation, the management team of CWA and private water 
            operators from Takeo, Kampot, Kep, Preah Sihanouk, Koh Kong and Kampong Speu province. </p><br>

            <p style="text-align: justify;" class="mb-0">AMO and Water Innovation Lab team presented a proposal entitled “Safety drinking water and 
            carbon net-zero policy by a non-powered water treatment system”. Our proposal was to 
            introduce gravity-driven membrane filter for rural drinking water supply in Cambodia.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<script>
function toggleImageDetails(imageNum, isHover) {
    const baseImg = document.getElementById(`image${imageNum}-base`);
    const hoverImg = document.getElementById(`image${imageNum}-hover`);
    
    if (isHover) {
        baseImg.style.transform = 'scale(0.9)';
        hoverImg.style.opacity = '1';
        hoverImg.style.transform = 'translate(-50%, -50%) scale(1)';
    } else {
        baseImg.style.transform = 'scale(1)';
        hoverImg.style.opacity = '0';
        hoverImg.style.transform = 'translate(-50%, -50%) scale(0)';
    }
}
</script>


<!--about end-->

</div>

<!--body content end--> 