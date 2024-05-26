@extends('layouts.master')
@section('title','about')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>About Us</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>About Us</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">

                <div class="col-lg-7 about-img" style="background-image: url(assets/img/about.jpg);"></div>

                <div class="col-lg-7">
                    <h2>Rhema Salvation City</h2>
                    <div class="our-story">

                        <h3>Our Story</h3>
                        <p>The history of the church Rhema Salvation City worldwide started on October 3-2017 in Kaduna South Sabo Nigeria and the vision and mission of the church are to preach holiness and righteousness to bring freedom and liberation to the sinners go out and win souls for Christ the gospel said in mark 15:16 Go ye into all the world, and preach the gospel to every creature, and also to bring deliverance to does who are in captivity, in Obedia 1:17 But upon mount zion shall be deliverance and there shall be holiness and the House of Jacob shall possess their possessions, and also in Hebrews 11:6 without holiness, no one shall see God.</p>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- End About Section -->
    <section id="stats-counter" class="stats-counter section-bg">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="732" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Live stream</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Bible Study</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="512" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Audio Clip</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-people color-pink flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="44" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Weekly prayer request</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Our Current Branches</h3>
                    <p><p>God has been faithful to the church with revival miracles prophetic signs and wonders that follow and to the glory of God we have Four Branches one In Abuja.
                        Three in kaduna, to the glory of God and by the power of God I was commissioned to be the General overseer of the branches. Glory be to God almighty from God's servant pastor Johnson Philip.</p>
                    </p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Fasting</a></h4>
                            <p>Draw closer to the Lord, fast and humble yourself</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Prayers</a></h4>
                            <p>Pray all seasons without ceasing</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Crusade</a></h4>
                            <p>Go ye into the world and preach the gospel</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Prayer request with pastor</a></h4>
                            <p>Jesus is the only way to heaven [John 14:6]</p>
                        </div>
                    </div><!-- End Icon Box -->

                </div>
            </div>

        </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Worship with Us</h3>
                    <p>Jesus is the only way to heaven [John 14:6]<br>
                    The Bible says: Casting all your care upon him; for he careth for you [1pet.5:7]</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Praises and Worship</a></h4>
                            <p>Sing praises to the Lord your God</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Choir Rehearsals</a></h4>
                            <p>No one can serve two masters. Either he will hate the one and love the other, or he will be devoted to the one and despise the other. You cannot serve both God and Money.
                                [Matthew 6:24]</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Fasting</a></h4>
                            <p>There is no fear in love. But perfect love drives out fear, because fear has to do with punishment. The one who fears is not made perfect in love. We love because he first loved us.
                                [1 John 4:18-19]</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Prayer request</a></h4>
                            <p>But love your enemies, do good to them, and lend to them without expecting to get anything back. Then your reward will be great, and you will be sons of the Most High, because he is kind to the ungrateful and wicked.
                                [Luke 6:35]</p>
                        </div>
                    </div><!-- End Icon Box -->
                </div>

                <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services-2.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
            </div>

        </div>
    </section><!-- End Alt Services Section 2 -->

@endsection
