<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Unifycoin</title>
    <link href="assets/main.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/icons/favicon.png" />
    <script defer type="text/javascript" src="assets/main.js"></script>
  </head>
  <body>
    <?php include 'assets/navbar.php' ?>
      <main class="application__main_content-structure">
        <section class="application__portfolio_content-structure">
            <h1 class="application__portfolio_title-content" id="presentation"></h1>
        </section>
        <section class="application__advantages_content-structure">
            <div class="application__presentation_title-container">
                <div class="application__presentation_illustration-structure" style="background-color: #757575;">
                    <img class="application__presentation_illustration-network" alt="" src="assets/icons/private-relay.png">
                </div>
                <h1 class="application__presentation_title-content" style="color: #757575;" id="title-first"></h1>
            </div>
            <div class="application__presentation_description-structure">
                <img class="application__presentation_illustation-glob" alt="" src="assets/icons/glob.svg"/>
                <div class="application__presentation_container-structure">
                    <p class="application__presentation_description_content" id="p-first"></p>
                </div>
            </div>
        </section>
        <section class="application__advantages_multi-container" data-grid-columns="2">
            <div class="application__advantages_content-structure">
                <div class="application__presentation_title-container">
                    <div class="application__presentation_illustration-structure" style="background-color:#47deae;">
                        <svg viewBox="0 0 24 24" class="application__presentation_illustration-network">
                            <path fill="none" stroke="#fff" strokelinecap="round" strokelinejoin="round" strokewidth="5" d="M7 17L17 7M7 7h10v10"></path>
                        </svg>
                    </div>
                    <h1 class="application__presentation_title-content" style="color:#47deae;" id="title-second"></h1>
                </div>
                <div class="application__presentation_container-structure">
                    <p class="application__presentation_description_content" id="p-second"></p>
                    <div class="application__progressbar_container-structure">
                        <div class="application__progressbar_content-personalized"></div>
                    </div>
                    <h2 class="application__progressbar_content-legend" id="block-second"></h2>
                    <span id="sync-second"></span>
                </div>
            </div>
            <div class="application__advantages_content-structure" >
                <div class="application__presentation_title-container" >
                    <h1 class="application__presentation_title-content" style="color:#757575;" id="title-third"></h1>
                </div>
                <div class="application__presentation_container-structure" >
                    <p class="application__presentation_description_content" id="p-third"></p>
                </div>
            </div>
        </section>
        <section class="application__advantages_content-structure">
            <div class="application__presentation_title-container">
                <h1 class="application__presentation_title-content" style="color:#47deae;" id="title-fourth"></h1>
            </div>
            <div class="application__presentation_container-structure">
                <p class="application__presentation_description_content" id="p-fourth"></p>
            </div>
        </section>
        <section class="application__advantages_content-structure">
            <div class="application__presentation_title-container">
                <h1 class="application__presentation_title-content" style="color:#757575;" id="title-fifth">A low fee rate.</h1>
            </div>
            <div class="application__presentation_container-structure">
                <p class="application__presentation_description_content" id="p-fifth"></p>
            </div>
        </section>
      </main>
    </body>
    <?php include 'assets/footer.php' ?>
</html>
