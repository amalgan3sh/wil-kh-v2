<html>
  <body>

<!--body content start-->

<div class="page-content">

<section>
  <div class="container">
    <center><h3 class="title">A pilot study of gravity-driven membrane (GDM) solution at Sotr Nikum Water Supply Station</h3></center><br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-12 pe-md-6">
        <div class="image-container" 
             onmouseover="toggleImageDetails(1, true)" 
             onmouseout="toggleImageDetails(1, false)"
             style="position: relative; width: 100%;">
            <!-- Original Image -->
            <img id="image1-base" 
               src="images/client/blog3.png" 
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
                A container type GDM filtration system.
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
               src="images/client/blog3_1.png" 
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
                  A view inside the container type GDM filtration system.
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12 mt-6 mt-lg-0"><br>
          <div class="section-title">
            <p style="text-align: justify;" class="mb-0"><b>W</b>ith the strong supply of Sotr Nikum Water Operator, Water Innovation Lab (WIL) and its 
              partner AMO Greentech, South Korea have conducted a pilot study on gravity-driven membrane 
              (GDM) filtration at Sotr Nikum Water Supply Station in Siem Reap since the 1st of September 
              2024.</p>
          </div>
        </div>
        <div class="col-lg-6 col-12 mt-6 mt-lg-0">
          <div class="section-title"><br><br><br>
            <p style="text-align: justify;" class="mb-0">This pilot aimed to improve the quality of water supply production by using a hybrid container 
              type GDM filtration system. This container type GDM system could produce more 20m3/d of 
              microbiologically-safe drinking water. This pilot study is run till to the end of the year. It is 
              expected that GDM solution is more convenient for production of safe drinking water in the rural 
              area of Cambodia. </p><br>
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