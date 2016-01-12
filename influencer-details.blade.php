<!DOCTYPE html>
<html>
  <head>
    <title>Najem</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <base href="/">
    <link rel="stylesheet" href="_public/styles/main.css">
    <!-- Facebook Open Graph Meta Tags -->
    <meta property="fb:app_id" content="1517491731884075"> <!-- facebook app id-->
    <meta property="og:locale" content="ar_LB"> <!-- language -->
    <meta property="og:title" content="المشاهير"> <!-- influencers page title -->
    <meta property="og:type" content="article">
    <meta property="og:description" content="يُقدم  موقع نجم الفني آخر أخبار فنانين ومشاهير العرب والعالم بنكهة مميزة ومُختلفة. يخصُكَ نجم بلقاءات حصرية، كما يكشف  جوانب وتفاصيل جديدة وكُل ما تريد معرفته عن النجوم الأحب إلى قلبكَ."> <!-- influencers page description -->
    <meta property="og:image:url" content="https://s3-eu-west-1.amazonaws.com/fontfaces/sharingimages/najem-1200x1200.jpg"> <!-- sharing image url -->
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:site" content="{!! @AudienceNajem !!}"> <!-- twitter handle -->
    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="آخر أخبار فنانين ومشاهير العرب والعالم"> <!-- home page title -->
    <meta name="twitter:description" content="يُقدم  موقع نجم الفني آخر أخبار فنانين ومشاهير العرب والعالم بنكهة مميزة ومُختلفة. يخصُكَ نجم بلقاءات حصرية، كما يكشف جوانب وتفاصيل جديدة وكُل ما تريد معرفته عن النجوم الأحب إلى قلبكَ."> <!-- influencers page description -->
    <meta name="twitter:image:src" content="https://s3-eu-west-1.amazonaws.com/fontfaces/sharingimages/najem-1200x1200.jpg"> <!-- sharing image url -->
    <!-- Google+ Open Graph Meta Tags -->
    <meta property="og:type" content="article">
    <meta itemprop="og:title" content="آخر أخبار فنانين ومشاهير العرب والعالم"> <!-- home page title -->
    <meta itemprop="og:description" content="يُقدم  موقع نجم الفني آخر أخبار فنانين ومشاهير العرب والعالم بنكهة مميزة ومُختلفة. يخصُكَ نجم بلقاءات حصرية، كما يكشف جوانب وتفاصيل جديدة وكُل ما تريد معرفته عن النجوم الأحب إلى قلبكَ."> <!-- influencers page desciption -->
    <meta itemprop="og:image:url" content="https://s3-eu-west-1.amazonaws.com/fontfaces/sharingimages/najem-1200x1200.jpg"> <!-- sharing image url -->
  </head>
  <body dir="rtl">
    <div class="mother-ship">
      <!-- Navbar -->
      <nav class="navbar row between-xs middle-xs nav-relative" navbardirective>
        <div class="login-profile col-xs-2 col-sm-4">
          <a href="/login">
            <div class="login-icon"></div>
            <p class="logout-text">تسجيل الدخول</p>
          </a>
        </div>
        <div class="col-xs-8 col-sm-4 col-md-4 col-lg-2">
          <div class="row nav-pills">
            <div class="latest-tab col-xs-4">
              <a class="latest-link" href="/latest-articles.html">أحدث</a>
            </div>
            <div class="explore-tab col-xs-4">
              <a class="explore-link" href="/index.html">إستكشف</a>
            </div>
            <div class="main-tab col-sm-6">
              <a class="main-link" href="/index.html">الرئيسية</a>
            </div>
            <div class="celebrities-tab col-xs-4 col-sm-6">
              <a class="celebrities-link" href="/influencers.html" >المشاهير</a>
            </div>
          </div>
        </div>
        <div class="logo col-xs-2 col-sm-4">
          <a class="najem-link" href="/">
            <div class="logo"></div>
          </a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div>
        <div class="influencer-cover-photo row center-sm">
          <div class="row col-xs-12 col-sm-9 center-sm influencer-header-wrapper">
            <div class="row col-xs-12 col-sm-9 influencer-header">
              <div class="col-xs-5 col-sm-2">
                <!-- influencer image in the src -->
                <img src="{{ $content['influencer']['avatar'] }}">
              </div>
              <div class="row middle-xs center-xs col-xs-7 influencer">
                <!-- influencer name here -->
                <h2 class="influencer-name">{{ $content['influencer']['name'] }}</h2>
              </div>
            </div>
          </div>
        </div>

        <!-- influencer related articles limit 3 -->
        <div class="influencers-view influencers-wrapper row center-sm">
          <div class="row center-sm col-xs-12 col-sm-9">
            <div class="row col-xs-12 col-sm-9">
              @foreach ($content['articles'] as $article)
          <!-- single artilce -->
          <!-- you need to loop on this article only the rest can be deleted they are for demo purposes -->
              <div class="influencers-article col-xs-12">
              <!-- article slug in the href -->
                <a class="row" href="/-/articles/{{ $article['slug'] }}">
                  <div class="inner-articles-wrapper row col-xs-12">
                    <div class="col-sm-4 col-xs-12 desktop-tiny-pic">
                      <span class="article-cover">
                        <span>
                        <!-- cover image url in the src -->
                        <!-- article title in alt -->
                          <img src="https://s3-eu-west-1.amazonaws.com/trellis-content-stage/media/images/45e5809db0ba086386b03db99d56e3bd_tiny.jpeg" alt="">
                        </span>
                      </span>
                    </div>
                    <div class="article-details col-sm-8 col-xs-12">
                      <h1 class="article-title">
                      <!-- article title here -->
                      <span class="article-title-span">{{ $article['title'] }}</span></h1>
                      <!-- article date here -->
                      <h2 class="article-date">{{ $article['rule']['published_at'] }}</h2>
                    </div>
                  </div>
                </a>
              </div>
            <!-- end single article -->
            @endforeach

            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="najem-grey"></div>
        <div class="social row center-xs">
          <div class="small-youtube"></div>
          <div class="small-insta"></div>
          <div class="small-fb"></div>
          <div class="small-twt"></div>
        </div>
        <div class="organisation-info row center-xs">
          <!--<div class="col-xs-12 row center-xs">
            <div class="col-xs-12 row center-xs">-->
              <p>شروط الإستخدام</p>
              <p>سياسة الخصوصية</p>
              <p>إتصل بنا</p>
            <!--</div>
          </div>-->
        </div>
      </footer>
    </div>
  </body>
</html>
