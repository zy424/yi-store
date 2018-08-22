@extends("layout.main")
@section("content")
<aside id="colorlib-hero" class="breadcrumbs">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(images/cover-img-1.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>About Us</h1>
                                <h2 class="bread"><span><a href="index.html">Home</a></span> <span>About</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="colorlib-about">
    <div class="container">
        <div class="row">
            <div class="about-flex">
                <div class="col-one-forth">
                    <div class="row">
                        <div class="col-md-12 about">
                            <h2>About</h2>

                            <ul>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Staff</a></li>
                                <li><a href="#">Connect with us</a></li>
                                <li><a href="#">Faqs</a></li>
                                <li><a href="#">Career</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-three-forth">
                    <h2>History</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>

                            <div class="row row-pb-sm">
                                <div class="col-md-6">
                                    <img class="img-responsive" src="images/about.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                </div>
                            </div>


                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                            <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

end
<div id="colorlib-subscribe">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-6 text-center">
                    <h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
                </div>
                <div class="col-md-6">
                    <form class="form-inline qbstp-header-subscribe">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection("content")
