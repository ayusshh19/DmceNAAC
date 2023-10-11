<?php
$content = "<div class='head-title my-5'>
    <h3>ENVIRONMENTAL PROMOTIONAL ACTIVITIES <span class='red'> BEYOND THE CAMPUS</span></h3>
</div>

<div id='environmental-activities-photos' class='owl-carousel owl-centered'>
    <div class='row mx-2 justify-content-center'>
        <img class='col-12' src='../images/naac/cleanliness-1.jpeg' />
    </div>
    <div class='row mx-2 justify-content-center item'>
        <img class='col-12' src='../images/naac/cleanliness-2.jpeg' />
    </div>
    <div class='row mx-2 justify-content-center item'>
        <img class='col-12' src='../images/naac/cleanliness-3.jpeg' />
    </div>
    <div class='row mx-2 justify-content-center item'>
        <img class='col-12' src='../images/naac/treeplantation-1.jpg' />
    </div>
    <div class='row mx-2 justify-content-center item'>
        <img class='col-12' src='../images/naac/treeplantation-2.jpg' />
    </div>
    <div class='row mx-2 justify-content-center item'>
        <img class='col-12' src='../images/naac/treeplantation-3.jpg' />
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#environmental-activities-photos').owlCarousel({
            items: 3, //items to be shown,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [980, 1],
            itemsTablet: [300, 1],
            pagination: true,
            autoPlay: true,
        });
    })
</script>";

require_once './index.php';