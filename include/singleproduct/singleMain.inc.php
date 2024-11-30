<div class="single_breadcrumb pt-25 space">
          <div class="container">
            
            <?php include 'singleTitle.inc.php' ?>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="single_product_tab">
                                <div class="single_prodct">
                                    <ul class="nav nav-tabs justify-content-center mb-55" id="dfde" role="tablist">
                                        <?php SingleProductSide() ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="single_preview_product">
                            <?php SingleProductPhoto() ?>
                        </div>
                    </div>
                </div>
            </div>
                
                <?php SingleProductDescription() ?>
            </div>
          </div>
      </div>