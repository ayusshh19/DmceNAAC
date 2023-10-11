<?php
$content = "<div class='head-title my-5'>
    <h3>DISABLED FRIENDLY<span class='red'> CAMPUS</span></h3>
</div>

<div id='disabled-friendly-campus-photos' class='owl-centered owl-carousel'>
    <div class='row mx-2 justify-content-center'>
        <img class='col-12' src='../images/naac/lift.jpeg' />
    </div>
    <div class='row mx-2 justify-content-center'>
        <img class='col-12' src='../images/naac/wheelchair.jpeg' />
    </div>
    <div class='row mx-2 justify-content-center'>
        <img class='col-12' src='../images/naac/wheelchair-2.jpeg' />
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#disabled-friendly-campus-photos').owlCarousel({
            items: 3, //items to be shown,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [980, 3],
            itemsTablet: [300, 2],
            pagination: true,
            autoPlay: true,
        });
    })
</script>";

require_once './index.php';