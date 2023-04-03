<?php include 'header.php';?>
<main>
   <section class="box-banner">
       <div class="container">
           <div class="content-banner text-center">
               <div class="logo"><img src="images/logo.png" class="img-fluid" alt=""></div>
               <div class="desc">
                   <h1>Bereken de prijs van <span>uw keuring.</span></h1>
                   <p>Uw prijs zal onderaan deze pagina worden gegenereerd.</p>
               </div>
           </div>
       </div>
   </section>
    <section class="box-type box-section">
        <div class="container">
            <div class="title text-center">
                <h2>Type <span>pand.</span></h2>
            </div>
            <div class="list-type">
                <ul>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/type-1.png" class="img-fluid" alt=""></div>
                            <div class="desc">Huis</div>
                            <input type="radio" id="type-1" class="choose-radio" name="type">
                            <label for="type-1" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/type-2.png" class="img-fluid" alt=""></div>
                            <div class="desc">Appartement</div>
                            <input type="radio" id="type-2" class="choose-radio" name="type">
                            <label for="type-2" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/type-3.png" class="img-fluid" alt=""></div>
                            <div class="desc">Niet-residentieel</div>
                            <input type="radio" id="type-3" class="choose-radio" name="type">
                            <label for="type-3" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/type-4.png" class="img-fluid" alt=""></div>
                            <div class="desc">Marktwagen of foodtruck</div>
                            <input type="radio" id="type-4" class="choose-radio" name="type">
                            <label for="type-4" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="box-type box-section">
        <div class="container">
            <div class="title text-center">
                <h2>Kies uw <span>regio.</span></h2>
            </div>
            <div class="list-type">
                <ul>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/map-1.png" class="img-fluid" alt=""></div>
                            <div class="desc">Huis</div>
                            <input type="radio" id="type-2-1" class="choose-radio" name="type2">
                            <label for="type-2-1" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/map-2.png" class="img-fluid" alt=""></div>
                            <div class="desc">Appartement</div>
                            <input type="radio" id="type-2-2" class="choose-radio" name="type2">
                            <label for="type-2-2" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/map-3.png" class="img-fluid" alt=""></div>
                            <div class="desc">Niet-residentieel</div>
                            <input type="radio" id="type-2-3" class="choose-radio" name="type2">
                            <label for="type-2-3" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="box-type box-section">
        <div class="container">
            <div class="title text-center">
                <h2>Type <span>keuring.</span></h2>
            </div>
            <div class="list-type">
                <ul>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/keu-1.png" class="img-fluid" alt=""></div>
                            <div class="desc">Elektrische keuring</div>
                            <input type="radio" id="type-3-1" class="choose-radio" name="type3">
                            <label for="type-3-1" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/keu-2.png" class="img-fluid" alt=""></div>
                            <div class="desc">Gaskeuring</div>
                            <input type="radio" id="type-3-2" class="choose-radio" name="type3">
                            <label for="type-3-2" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/keu-3.png" class="img-fluid" alt=""></div>
                            <div class="desc">EPC </div>
                            <input type="radio" id="type-3-3" class="choose-radio" name="type3">
                            <label for="type-3-3" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                    <li>
                        <div class="item-type">
                            <div class="icon"><img src="images/keu-4.png" class="img-fluid" alt=""></div>
                            <div class="desc">Tankkeuring</div>
                            <input type="radio" id="type-3-3" class="choose-radio" name="type3">
                            <label for="type-3-3" class="label-radio"><img src="images/check.png" class="img-fluid" alt=""></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php';?>