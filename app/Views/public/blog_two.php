<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit to Saram Water Supply in Kampong Speu Province</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            margin-bottom: 1rem;
        }
        .image-container img {
            width: 100%;
            transition: transform 0.3s ease;
        }
        .hover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            color: white;
            display: flex;
            align-items: flex-end;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .hover-overlay div {
            padding: 10px;
            text-align: center;
            width: 100%;
        }
        .image-container:hover img {
            transform: scale(0.95);
        }
        .image-container:hover .hover-overlay {
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Visit to Saram Water Supply in Kampong Speu Province</h1>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="image-container">
                    <img src="images/client/blog2.JPG" alt="Discussion with Water Operator" class="img-fluid">
                    <div class="hover-overlay">
                        <div>Our discussion on potential cooperation with water operator</div>
                    </div>
                </div>
                <div class="col-12">
                  <div class="text-content"><br><br>
                  <p style="text-align: justify;" class="mb-0"><b>W</b>ater Innovation Lab's team and AMO Greentech business management, South Korea 
                    conducted a site visit to Saram water supply station in Kampong Speu with the support of 
                    Cambodian Water Supply Association (CWA) on the 18th of July 2024. This visit aimed to learn 
                    about how clean water is produced in rural area and how to incorporate our water solution to 
                    improve the quality and quantity of water production.</p><br>

                    <p style="text-align: justify;" class="mb-0">During this visit, we had discussed with water operator on how to improve their water quality 
                    using our water solution. We planned to conduct a pilot study using our GDM solution to 
                    improve the quality of this water supply station.</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="image-container">
                    <img src="images/client/blog2_1.PNG" alt="Saram Water Supply Station" class="img-fluid">
                    <div class="hover-overlay">
                        <div>Saram Water Supply Station in Kampong Speu Province</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>