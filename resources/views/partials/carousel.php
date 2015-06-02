<style>
    .carousel{
        width:500px;
        height: 425px;

    }

</style>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" width="500" data-interval="3000">

    <!-- Indicators -->
<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->

    <style>
        .carousel-inner{
            vertical-align: "center";
        }
        .carousel-caption{
            color: greenyellow;
        }

    </style>



<div class="carousel-inner" role="listbox"  width="10%">

    <div class="item active">
        <img src="/img/michoui_1.jpg" alt="..." width="500">
        <div class="carousel-caption">
           <h3>Un cochon qui tourne sur une broche</h3>
        </div>
    </div>


    <div class="item">
        <img src="/img/michoui_3.jpg" alt="..." width="500">
        <div class="carousel-caption">
            <h3>Des Patates</h3>
        </div>
    </div>

    <div class="item">
        <img src="/img/michoui_5.jpg" alt="..." width="500">
        <div class="carousel-caption">
            <h3>Un potlock hipster</h3>
        </div>
    </div>


    <div class="item">
        <img src="/img/michoui_4.jpg" alt="..." width="500">
        <div class="carousel-caption">
            <h3>Des gaulois</h3>
        </div>
    </div>


</div>

<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>