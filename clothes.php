<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet" />
    <link rel="stylesheet" href="assets/stylefonts.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <title>Wild Bazar</title>
</head>

<body>

    <div class="container-fluid p-0">
        <?php
            include 'header.php';
        ?>
    </div>


    <div class="container">
        <!-- Section Top Selling -->
        <section class="dr_section_color">

            <div class="row p-2">
                <!-- PRODUIT 1 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod01" data-prodtitle="Bag Wild" data-price="39.99 " data-descr="Bag Wild."
                        data-img="assets/img/clothes/b-wild.png" data-carac1="L" data-carac2="Black-Yellow"
                        data-carac3="" data-carac4="" data-carac5="" data-carac6="B041589">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod01">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/b-wild.png" class="card-img-top img-fluid art-image"
                                    alt="Bag Wild">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">39.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">Bag Wild</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 2 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod02" data-prodtitle="T-shirt Men Wild" data-price="24.99 "
                        data-descr="T-shirt Wild white for men." data-img="assets/img/clothes/t-m-wild.jpg"
                        data-carac1="S-M-L-XL" data-carac2="White" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="T023658">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod02">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/t-m-wild.jpg" class="card-img-top img-fluid art-image"
                                    alt="T-shirt Men Wild">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">24.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">T-shirt Men Wild</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 3 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod03" data-prodtitle="Cap Winter" data-price="19.99 "
                        data-descr="Cap Wild Winter black and grey." data-img="assets/img/clothes/c-wildjpg.jpg"
                        data-carac1="S-M-L" data-carac2="Black-Grey" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="C091740">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod03">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/c-wildjpg.jpg" class="card-img-top img-fluid art-image"
                                    alt="Cap Winter">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">19.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">Cap Winter</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 4 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod04" data-prodtitle="Sweat Men Wild Old" data-price="59.99 "
                        data-descr="Sweat Wild Old white for men." data-img="assets/img/clothes/s-m-wildold.png"
                        data-carac1="S-M-L-XL" data-carac2="White" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="S031278">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod04">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/s-m-wildold.png" class="card-img-top img-fluid art-image"
                                    alt="Sweat Men Wild Old">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">59.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">Sweat Men Wild Old</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 5 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod05" data-prodtitle="T-shirt Men Wild Red" data-price="24.99 "
                        data-descr="T-shirt Wild Red white for men." data-img="assets/img/clothes/t-m-wildred.jpg"
                        data-carac1="S-M-L-XL" data-carac2="White" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="T024119">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod05">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/t-m-wildred.jpg" class="card-img-top img-fluid art-image"
                                    alt="T-shirt Men Wild Red">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">24.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">T-shirt Men Wild Red</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 6 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod06" data-prodtitle="Cap Wild-Blue" data-price="19.99 "
                        data-descr="Shirt Wild-Blue black and orange." data-img="assets/img/clothes/c-wildblue.jpg"
                        data-carac1="S-M-L" data-carac2="Black-Orange" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="C091131">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod06">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/c-wildblue.jpg" class="card-img-top img-fluid art-image"
                                    alt="Cap Wild-Blue">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">19.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">Cap Wild-Blue</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 7 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod07" data-prodtitle="T-shirt Men Wild Deer" data-price="24.99 "
                        data-descr="T-shirt Wild deer white for men." data-img="assets/img/clothes/t-m-wildcerf.jpg"
                        data-carac1="S-M-L-XL" data-carac2="white" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="T023785">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod07">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/t-m-wildcerf.jpg" class="card-img-top img-fluid art-image"
                                    alt="T-shirt Men Wild Deer">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">24.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">T-shirt Men Wild Deer</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 8 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod08" data-prodtitle="Shirt Men Wild" data-price="89.99 "
                        data-descr="Shirt Wild white and black for men." data-img="assets/img/clothes/sh-m-wild.png"
                        data-carac1="S-M-L-XL" data-carac2="White-Black" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="M051739">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod08">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/sh-m-wild.png" class="card-img-top img-fluid art-image"
                                    alt="Shirt Men Wild">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">89.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">Shirt Men Wild</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 9 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod09" data-prodtitle="The French Orange Jacket" data-price="999.99 "
                        data-descr="The French Orange Jacket." data-img="assets/img/clothes/oj-wild.jpg"
                        data-carac1="S-M-L-XL" data-carac2="Orange" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="J025228">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod09">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/oj-wild.jpg" class="card-img-top img-fluid art-image"
                                    alt="The French Orange Jacket">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">999.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">The French Orange Jacket</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 10 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod10" data-prodtitle="T-shirt Women ACDC" data-price="24.99 "
                        data-descr="T-shirt ACDC white for women." data-img="assets/img/clothes/t-w-acdc.jpg"
                        data-carac1="XS-S-M-L" data-carac2="White" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="T024398">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod10">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/t-w-acdc.jpg" class="card-img-top img-fluid art-image"
                                    alt="T-shirt Women ACDC">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">24.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">T-shirt Women ACDC</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 11 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod11" data-prodtitle="T-shirt Women Wild Red Black" data-price="24.99 "
                        data-descr="T-shirt Wild Red black for women." data-img="assets/img/clothes/t-w-wildbl.png"
                        data-carac1="XS-S-M-L" data-carac2="Black" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="T027485">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod11">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/t-w-wildbl.png" class="card-img-top img-fluid art-image"
                                    alt="T-shirt Women Wild Red Black">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">24.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">T-shirt Women Wild Red Black</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 12 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod12" data-prodtitle="Sweat Women Unicorn " data-price="59.99 "
                        data-descr="Sweat Unicorn white for women." data-img="assets/img/clothes/s-w-licorne.jpg"
                        data-carac1="XS-S-M-L" data-carac2="White" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="S035678">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod12">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/s-w-licorne.jpg" class="card-img-top img-fluid art-image"
                                    alt="Sweat Women Unicorn">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">59.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">Sweat Women Unicorn</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 13 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod13" data-prodtitle="Sweat Men Wild b&w" data-price="59.99 "
                        data-descr="Sweat Wild white and black for men." data-img="assets/img/clothes/s-m-wildbw.jpg"
                        data-carac1="S-M-L-XL" data-carac2="White-Black" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="S031739">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod13">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/s-m-wildbw.jpg" class="card-img-top img-fluid art-image"
                                    alt="Sweat Men Wild b&w">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">59.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">Sweat Men Wild b&w</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 14 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod14" data-prodtitle="The French Yelow Jacket" data-price="999.99 "
                        data-descr="The French Yellow Jacket." data-img="assets/img/clothes/yj-wild.jpg"
                        data-carac1="S-M-L-XL" data-carac2="Yellow" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="J091451">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod14">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/yj-wild.jpg" class="card-img-top img-fluid art-image"
                                    alt="The French Yelow Jacket">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">999.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">The French Yelow Jacket</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 15 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod15" data-prodtitle="T-shirt Women Star Wars" data-price="24.99 "
                        data-descr="T-shirt Star Wars white for women." data-img="assets/img/clothes/t-w-starwars.jpg"
                        data-carac1="XS-S-M-L" data-carac2="White" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="T028237">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod15">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/t-w-starwars.jpg" class="card-img-top img-fluid art-image"
                                    alt="T-shirt Women Star Wars">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">24.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">T-shirt Women Star Wars</h4>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- PRODUIT 16 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="prod16" data-prodtitle="Cap Wild b&w" data-price="19.99 "
                        data-descr="Cap Wild black and white." data-img="assets/img/clothes/c-wildbw.jpg"
                        data-carac1="S-M-L" data-carac2="White-Black" data-carac3="" data-carac4="" data-carac5=""
                        data-carac6="C090012">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target="#modalDescrProduct"
                            data-whatever="prod16">
                            <div class="dr_wrapper text-center ">
                                <img src="assets/img/clothes/c-wildbw.jpg" class="card-img-top img-fluid art-image"
                                    alt="Cap Wild b&w">
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge">19.99 $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">Cap Wild b&w</h4>
                            </div>
                        </div>
                    </article>
                </div>

    <!-- END ROW -->
            </div>
        </section>
    </div>

       <!-- DEFINITION DE FENETRE MODALE LEGAL MENTIONS-->
       <div class="modal fade" id="modalLegalMention" tabindex="-1" role="dialog"
       aria-hidden="true">
       <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h4 class="modal-title" id="exampleModalLabel">Legal Mentions</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <div class="row no-gutters">
               <div class="col-xs-6 col-md-4 art-img-content">
                 <img class="card-img" src="assets/img/logo/yoshi.png" alt="Card image" />
               </div>
               <div class=" col-xs-6 col-md-8">
                 <div class="card-body wildbazar-titlemodal">
                   <h2>WILD BAZAR</h2>
                   <p class="card-text art-descr">Images and data on this site are subject to copyright.</p>
                   <p class="card-text art-descr">Some images used come from proprietary website and must be used after
                     acceptance of the owner.</p>
                   <h3>© Yoshi Corporate - Wild Code Scool 2019</h3>
                 </div>
               </div>
             </div>
           </div>
           <div class="modal-footer row  justify-content-end p-2 m-1 text-center">
             <div class="col-sm-6 col-md-4 col-lg-3 p-2">
               <button type="button" class="btn btn-danger  w-100" data-dismiss="modal">Close</button>
             </div>
           </div>
         </div>
       </div>
     </div>

    <div class="modal fade" id="modalDescrProduct" tabindex="-1" role="dialog" aria-labelledby="modalDescrProduct"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-xs-6 col-md-4 art-img-content">
                            <img class="card-img art-img" src="assets/img/slippers/no-image-icon-15.png" alt="Card image" />
                        </div>
                        <div class=" col-xs-6 col-md-8">
                            <div class="card-body">
                                <h4><span class="art-price"></span></h4>
                                <p class="card-text art-descr"></p>
                                <table class="table table-striped table-sm">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Size</th>
                                            <td><span class="art-carac1"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Color</th>
                                            <td><span class="art-carac2"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Reference</th>
                                            <td><span class="art-carac6"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer row  justify-content-end p-2 m-1 text-center">
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <button type="button" class="btn btn-danger  w-100" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-sm-6  col-md-4 col-lg-3 p-2">
                        <button type="button" class="btn btn-info w-100">+ Add to cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="assets/js/modal.js"></script>
    <!-- Script d'effet de texte de titre majeur -->
    <script src="assets/js/scroll.js"></script>


</body>

</html>