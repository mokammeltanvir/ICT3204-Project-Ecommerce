        <section class="category__area pt-105 pb-135">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mb-60">
                            <h2 class="section__title">
                                Browse <br />
                                Popular Categories
                            </h2>
                            <p>Find over 7000 website templates and themes.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
                            <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp"
                                data-wow-delay=".3s">
                                <div class="category__icon mb-25">
                                    <a href="#"><img
                                            src="{{ asset('uploads/category') }}/{{ $category->category_image }}"
                                            alt="" /></a>
                                </div>
                                <div class="category__content">
                                    <h3 class="category__title">
                                        <a href="{{ route('shop.page') }}">{{ $category->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="category__more mt-30 text-center">
                            <a href="product.html" class="m-btn m-btn-2">
                                <span></span> View all categories</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
