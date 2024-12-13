@extends('layout.main')

@section('title', 'home')
@push('home_active')
    active
@endpush

@section('main-section')

    <!-- main slider start -->
    {{-- <div id="carouselDark" data-aos="zoom-in" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            @foreach ($slides as $index => $slide)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $slide->image) }}" class="d-block w-100"
                        style="height: 600px; object-fit: cover; object-position: center;" alt="{{ $slide->title }}">
                    <div class="carousel-caption d-none d-md-block rounded">
                        <h5>{{ $slide->title }}</h5>
                        <p>{{ $slide->description }}</p>
                    </div>
                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}
    <div class="slider  ">
        <div class="container homeslider ">
      
      <div class="logoimg  ">
        <img src= "{{ asset('theme_1/images/parshuram-vibrant-gradient-pb7phe6ac8w3xnnq-removebg-preview.png') }}" class="logoimg1" alt="">
      </div>
      <div class="content  ">
        <h1 class="auto">श्री कन्याकुब्ज ब्राह्मण समिति जोधपुर</h1>
        <p>स्वागत है आपके कान्यकुब्ज ब्राह्मणों के जीवंत समुदाय में! हमारा समूह समृद्ध सांस्कृतिक विरासत, परंपराओं और मूल्यों से परिपूर्ण है। कान्यकुब्ज ब्राह्मण समाज एक ऐसा मंच है जो हमारे समुदाय की विविधता, ज्ञान और योगदान को एकजुट करता है और उसका जश्न मनाता है।
        </p>
        <p>कान्यकुब्ज ब्राह्मणों ने अपनी विद्वतापूर्ण गतिविधियों, आध्यात्मिक मार्गदर्शन और सांस्कृतिक नेतृत्व के माध्यम से समाज को आकार देने में महत्वपूर्ण भूमिका निभाई है। हमारा समाज सौहार्द्र को बढ़ावा देने, विरासत को संरक्षित करने और सदियों से चले आ रहे ज्ञान और शिक्षाओं से भावी पीढ़ियों को सशक्त बनाने का प्रयास करता है।
        </p>
        <p>
          कान्यकुब्ज ब्राह्मण समाज सामाजिक, शैक्षणिक और सांस्कृतिक पहलों के माध्यम से आपसी सहयोग और धर्म, सेवा और समरसता (धार्मिकता, सेवा और एकता) के पोषित मूल्यों को बनाए रखने का प्रयास करता है।
        </p>
        <p>
          हमारे साथ जुड़ें क्योंकि हम वर्तमान के अवसरों और भविष्य के वादे को अपनाते हुए अपने अतीत का सम्मान कर रहे हैं। आइए, हम सब मिलकर अपने समुदाय के संबंधों को मजबूत करें और इसके सभी सदस्यों की समृद्धि और भलाई के लिए प्रयास करें।
        </p>
      </div>
      </div>
      </div>
    <!-- main slider end -->

    <!-- sunrise/sunset widget start -->
    <div class="container mt-5" data-aos="zoom-in">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center bg-light border-0 shadow">
                    <div class="card-body widget">
                        <h5 class="card-title mb-4">सूर्योदय & सूर्योदय</h5>
                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <div class="sunrise">
                                <i class="fa-solid fa-sun fa-3x text-warning"></i>
                                <h6 class="mt-2">सूर्योदय</h6>
                                <p id="sunrise-time" class="mb-0">06:00 पूर्वाह्न</p>
                            </div>
                            <div class="sunset">
                                <i class="fa-solid fa-moon fa-3x text-danger"></i>
                                <h6 class="mt-2">सूर्यास्त</h6>
                                <p id="sunset-time" class="mb-0">07:00 अपराह्न</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sunrise/sunset widget end -->
  
    <!-- About Section start -->
    <section class="my-5 py-4 about ">
        <div class="container-fluid px-2 ">
          <h4 class="text-center heading playfair-display-heading mb-4">उद्देश्य
        </h4>
          <h5 class="lead text-center mx-auto">धार्मिक, नैतिक और आध्यात्मिक विकास</h5>
          <div class="row align-items-center  Objective">
            <div class="" data-aos="fade-right">
             
              <p class="fs-6 text-center ">
                कान्यकुब्ज ब्राह्मणों की सांस्कृतिक और धार्मिक धरोहर अद्वितीय है, जो वैदिक परंपराओं और विद्वानों की गतिविधियों से गहराई से जुड़ी हुई है। 
                सदियों से, वे भारत के विभिन्न क्षेत्रों में पुजारियों, विद्वानों और सलाहकारों की भूमिका निभाते आ रहे हैं। उनके योगदान का दायरा दर्शन, खगोल विज्ञान, भाषा विज्ञान और धार्मिक ग्रंथों के अध्ययन तक फैला हुआ है।
              </p>
              <p class="fs-6 text-center ">
                प्राचीन काल में, कान्यकुब्ज शहर शिक्षा और संस्कृति का एक प्रमुख केंद्र था। यह अपने विद्वानों और बुद्धिजीवियों के लिए प्रसिद्ध था,
                 जो भारतीय उपमहाद्वीप के कोने-कोने से छात्रों और शिक्षकों को आकर्षित करता था। कान्यकुब्ज ब्राह्मणों ने ज्ञान के संरक्षण और प्रसार में महत्वपूर्ण भूमिका निभाते हुए, इन बौद्धिक गतिविधियों से गहरा संबंध बनाया।
              </p>
              
                <p class="fs-6 text-center">
                  कई अन्य ब्राह्मण समुदायों की तरह, कान्यकुब्ज ब्राह्मणों ने समय के साथ रीति-रिवाजों और प्रथाओं में क्षेत्रीय विविधताओं को अपनाते हुए एक अद्वितीय सांस्कृतिक पहचान विकसित की है।
                   वे धार्मिक और सामाजिक क्षेत्रों में प्रभावशाली बने हुए हैं, पारंपरिक अनुष्ठानों का पालन करते हैं और शैक्षणिक संस्थानों में सक्रिय भूमिका निभाते हैं।
                </p>
                <p class="fs-6 text-center ">
                  यह महत्वपूर्ण है कि हम समझें कि कान्यकुब्ज ब्राह्मणों का इतिहास और योगदान भारतीय इतिहास की विस्तृत कथा का एक अभिन्न हिस्सा है, जो उपमहाद्वीप की सांस्कृतिक और बौद्धिक विविधता को उजागर करता है।
               </p>
            </div>
            <!-- <div class="col-md-6" data-aos="zoom-in">
              <div class="image-wrapper">
                <img src="images/about-home.png" class="img-fluid rounded shadow-sm" alt="About Image">
              </div>
            </div> -->
          </div>
        </div>
      </section>
    <!-- About Section end -->

    <!-- daily quote section start -->
    <section class="quote-widget mt-5 mb-5">
        <div class="container-fluid px-2 px-lg-5" data-aos="flip-right">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0 text-center bg-light">
                        <div class="card-body widget">
                            <!-- Added heading with icon -->
                            <h4 class="card-title playfair-display-heading mb-4">आज का विचार</h4>
                            <blockquote class="blockquote mb-4">
                                <p class="mb-0 text-secondary">"{{ $quote->quote }}"</p>
                            </blockquote>
                            <footer class="blockquote-footer text-muted">{{ $quote->author }}</footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- daily quote section end -->

    <!-- our mission section start -->
    <section class="my-5 py-4 about">
        <div class="container px-2 px-lg-5">
            <h4 class="text-center heading playfair-display-heading mb-4">हमारा विशेष कार्य</h4>
            <p class="lead text-center mx-auto">हमारा मिशन नवीन समाधानों को लागू करके, समुदायों को सशक्त बनाकर, तथा आने वाली पीढ़ियों के लिए हमारे ग्रह को संरक्षित करके एक टिकाऊ और समावेशी भविष्य का निर्माण करना है।</p>
            <div class="row align-items-center mt-5">
                <!-- Image Column -->
                <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-4 pt-2" data-aos="zoom-in">
                                    <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                        <img src="{{ asset('theme_1/images/Mission-1.png') }}" class="img-fluid"
                                            alt="Image" />
                                        <div class="img-overlay bg-dark"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12" data-aos="zoom-in">
                                    <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                        <img src="{{ asset('theme_1/images/Mission-2.png') }}" class="img-fluid"
                                            alt="Image" />
                                        <div class="img-overlay bg-dark"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mt-4 pt-2" data-aos="zoom-in">
                                    <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                        <img src="{{ asset('theme_1/images/Mission-3.png') }}" class="img-fluid"
                                            alt="Image" />
                                        <div class="img-overlay bg-dark"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-md-6">
                    <!-- Mission Point 1 -->
                    <div class="d-flex align-items-start mb-4" data-aos="fade-right">
                        <div class="me-3">
                            <img src="{{ asset('theme_1/images/enviornment.png') }}" width="40px"
                                alt="Environment Icon" class="icon-img">
                        </div>
                        <div>
                            <h5>पर्यावरण बचाएँ</h5>
                                <p>हम अपने पूर्वजों की विद्वता का सम्मान करते हुए, पर्यावरण की रक्षा, ऊर्जा संरक्षण, और जैव विविधता को सुरक्षित करने के लिए पर्यावरण-अनुकूल उपायों को लागू करने के लिए प्रतिबद्ध हैं, ताकि आने वाली पीढ़ियों के लिए एक स्थायी और सुरक्षित भविष्य सुनिश्चित किया जा सके।</p>
                        </div>
                    </div>
                    <!-- Mission Point 2 -->
                    <div class="d-flex align-items-start mb-4" data-aos="fade-right">
                        <div class="me-3">
                            <img src="{{ asset('theme_1/images/empower.png') }}" width="40px" alt="Community Icon"
                                class="icon-img">
                        </div>
                        <div>
                            <h5>समुदायों को सशक्त बनाना</h5>
                            <p>इसके साथ ही, हम समुदायों को सशक्त करने और उन्हें शिक्षा, संसाधनों और पहल का समर्थन प्रदान करने के लिए कार्यरत हैं, ताकि लोग अपने पूर्ण क्षमता तक पहुंच सकें और समृद्ध जीवन जी सकें। नवाचार हमारे मिशन का केंद्र है, हम रचनात्मक समाधान और नई प्रौद्योगिकियों को अपनाकर सभी के लिए एक उज्जवल और अधिक जुड़ा हुआ भविष्य बनाने की दिशा में काम कर रहे हैं।</p>
                        </div>
                    </div>
                    <!-- Mission Point 3 -->
                    <div class="d-flex align-items-start mb-4" data-aos="fade-right">
                        <div class="me-3">
                            <img src="{{ asset('theme_1/images/innovation.png') }}" width="40px" alt="Innovation Icon"
                                class="icon-img">
                        </div>
                        <div>
                            <h5>इनोवेशन को बढ़ावा दो</h5>
                            <p>हमारा मिशन धार्मिक, नैतिक, आध्यात्मिक विकास और पर्यावरण संरक्षण को बढ़ावा देना है। हम कान्यकुब्ज ब्राह्मणों की समृद्ध सांस्कृतिक धरोहर को संरक्षित करने के साथ-साथ वेदिक परंपराओं से जुड़ाव को मजबूत करना चाहते हैं। 
                                साथ ही, हम दर्शनशास्त्र, खगोल विज्ञान, भाषा विज्ञान और धार्मिक ग्रंथों के अध्ययन को प्रोत्साहित करते हुए, एक ऐसे समुदाय का निर्माण कर रहे हैं जो पारंपरिक ज्ञान और नवाचार को अपनाता है।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- our mission section end -->

    <!-- Testimonials Section Start -->
    <section class="pb-5">
        <div class="container">
            <h4 class="text-center mb-4 heading playfair-display-heading">प्रशंसापत्र</h4>
            <div class="row d-flex testimonial-slider">

                @foreach ($testimonials as $testimonial)
                <div class="col-md-4 ms-2 ms-md-0  mb-3" data-aos="fade-right">
                  <div class="card h-100 text-center">
                      <img src="{{ asset('storage/' . $testimonial->image) }}"
                          class="card-img-top rounded-circle mx-auto mt-4" alt="Client Photo"
                          style="width: 100px; height: 100px;">
                      <div class="card-body d-flex flex-column">
                          <h5 class="card-title">{{$testimonial->name}}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{$testimonial->post}}</h6>
                          <p class="card-text flex-grow-1">"{{$testimonial->message}}"
                          </p>
                      </div>
                  </div>
              </div>
                @endforeach
                

            </div>
        </div>

    </section>


    <!-- Testimonials Section End -->
    <!-- Donate Now Section -->
    <section id="donate-now" class="py-5 text-center">
        <div class="container">
            <h4 class="heading playfair-display-heading">हमारे उद्देश्य का समर्थन करें</h2>
                <p class="mb-4">
                    सहयोग करें 
                    "हमारे प्रिय समुदाय के सदस्यों के रूप में, हम आपको हमारी पवित्र पहलों का समर्थन करने के लिए उदारतापूर्वक योगदान करने के लिए आमंत्रित करते हैं।
                     आपका दान आध्यात्मिक विकास को बढ़ावा देने, पवित्र स्थानों को बनाए रखने और हमारे प्रिय मूल्यों को आगे बढ़ाने में महत्वपूर्ण भूमिका निभाता है।
                      आइए हम मिलकर परंपराओं को बनाए रखें जो हमें बांधता है और हमारे समुदाय के लिए एक जीवंत भविष्य सुनिश्चित करता है। आपका हार्दिक योगदान सार्थक प्रभाव डालता है,
                       एकता, करुणा और हमारे विश्वास के प्रति साझा प्रतिबद्धता को बढ़ावा देता है। हम आपकी उदारता के लिए अपना आभार व्यक्त करते हैं,
                        यह स्वीकार करते हुए कि यह उस नींव को मजबूत करता है जिस पर हमारा समुदाय फलता-फूलता है। 
                        आपका समर्थन हमें निरंतर आध्यात्मिक संवर्धन और सांप्रदायिक कल्याण की दिशा में मार्गदर्शन करते हुए प्रकाश की किरण बने।"</p>

                <span class="{{setting('theme.button_styles')}}"><button type="button" class="button button--pan" data-bs-toggle="modal" data-bs-target="#donateModal">
                    <span>अभी दान करें</span>
                </button></span>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="donateModalLabel">आपके समर्थन के लिए धन्यवाद!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('storage/' . setting('community.payment')) }}" class="img-fluid mb-3" alt="Donation Image">
                        <p>{{ setting('community.donation_text') }}</p>
                        
                        <!-- Bank Details -->
                        <h6>दान के लिए बैंक विवरण :</h6>
                        <ul>
                            <li><strong>बैंक का नाम :</strong> Jodhpur Central District Co-op Bank Ltd</li>
                            <li><strong>खाता संख्या: </strong> 26001101120007842</li>
                            <li><strong>आईएफएससी कोड: </strong> RSCB0026001</li>
                            <li><strong>शाखा कोड:</strong> 26001</li>
                            <li><strong>खाताधारक:</strong> Kanya Kubj Brahman Samaj Jodhpur</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <span class="{{ setting('theme.button_styles') }}">
                            <button type="button" class="button button_header button--pan" data-bs-dismiss="modal">
                                <span>Close</span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        

    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.testimonial-slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 3,
                arrows: false,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sunriseElement = document.getElementById('sunrise-time');
            const sunsetElement = document.getElementById('sunset-time');

            function updateTimes() {
                fetch('https://api.sunrise-sunset.org/json?lat=36.7201600&lng=-4.4203400&date=today')
                    .then(response => response.json())
                    .then(data => {
                        const sunrise = data.results.sunrise;
                        const sunset = data.results.sunset;
                        sunriseElement.textContent = sunrise;
                        sunsetElement.textContent = sunset;
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }

            updateTimes();

        });
    </script>
@endsection
