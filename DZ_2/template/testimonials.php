<!-- Testimonials -->
<div class="content-lg container">
    <div class="row">
        <div class="col-sm-9">
            <h2>Customer Reviews</h2>

            <!-- Swiper Testimonials -->
            <div class="swiper-slider swiper-testimonials">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <?php require_once ("../lib/buildTestimonialItem.php"); buildTestimonialItem();?>
                </div>
                <!-- End Swiper Wrapper -->

                <!-- Pagination -->
                <div class="swiper-testimonials-pagination"></div>
            </div>
            <!-- End Swiper Testimonials -->
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End Testimonials -->
