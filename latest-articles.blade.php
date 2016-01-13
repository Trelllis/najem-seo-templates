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
    <meta property="og:title" content="الأحدث"> <!-- latest articles page title -->
    <meta property="og:type" content="article">
    <meta property="og:description" content="يُقدم  موقع نجم الفني آخر أخبار فنانين ومشاهير العرب والعالم بنكهة مميزة ومُختلفة. يخصُكَ نجم بلقاءات حصرية، كما يكشف جوانب وتفاصيل جديدة وكُل ما تريد معرفته عن النجوم الأحب إلى قلبكَ."> <!-- latest articles page description -->
    <meta property="og:image:url" content="https://s3-eu-west-1.amazonaws.com/fontfaces/sharingimages/najem-1200x1200.jpg"> <!-- sharing image url -->
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:site" content="{!! @AkhbarNajem !!}"> <!-- twitter handle -->
    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="الأحدث"> <!-- home page title -->
    <meta name="twitter:description" content="يُقدم  موقع نجم الفني آخر أخبار فنانين ومشاهير العرب والعالم بنكهة مميزة ومُختلفة. يخصُكَ نجم بلقاءات حصرية، كما يكشف جوانب وتفاصيل جديدة وكُل ما تريد معرفته عن النجوم الأحب إلى قلبكَ."> <!-- latest articles page description -->
    <meta name="twitter:image:src" content="https://s3-eu-west-1.amazonaws.com/fontfaces/sharingimages/najem-1200x1200.jpg"> <!-- sharing image url -->
    <!-- Google+ Open Graph Meta Tags -->
    <meta property="og:type" content="article">
    <meta itemprop="og:title" content="الأحدث"> <!-- home page title -->
    <meta itemprop="og:description" content="يُقدم  موقع نجم الفني آخر أخبار فنانين ومشاهير العرب والعالم بنكهة مميزة ومُختلفة. يخصُكَ نجم بلقاءات حصرية، كما يكشف جوانب وتفاصيل جديدة وكُل ما تريد معرفته عن النجوم الأحب إلى قلبكَ."> <!-- latest articles page desciption -->
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
              <a class="latest-link" href="/latest">أحدث</a>
            </div>
            <div class="explore-tab col-xs-4">
              <a class="explore-link" href="/">إستكشف</a>
            </div>
            <div class="main-tab col-sm-6">
              <a class="main-link" href="/">الرئيسية</a>
            </div>
            <div class="celebrities-tab col-xs-4 col-sm-6">
              <a class="celebrities-link" href="/influencers" >المشاهير</a>
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
        <div class="all-articles-view all-articles-wrapper row center-sm" >
          <div class="row center-sm col-xs-12 col-sm-9">
            <div class="col-xs-12 col-sm-9">
              <!-- single artilce -->
              @foreach ($content['articles'] as $article)
                <div class="all-articles-article col-xs-12">
                  <!-- article slug in the href -->
                  <a class="row" href="/articles/{{$article['slug']}}">
                    <div class="inner-articles-wrapper row col-xs-12">
                      <div class="col-sm-4 col-xs-12 desktop-tiny-pic">
                        <span class="article-cover">
                          <span>
                            <!-- cover image url in the src -->
                            <!-- artilce title in the alt -->
                            <img src="{{ $article['cover']['url'] }}" alt="{{ $article['title'] }}">
                          </span>
                        </span>
                      </div>
                      <div class="article-details col-sm-8 col-xs-12">
                        <h1 class="article-title">
                        <!-- article title here -->
                        <span class="article-title-span">{{ $article['title'] }}</span>
                        </h1>
                        <!-- article date here -->
                        <h2 class="article-date">{{ $article['rule']['published_at'] }}</h2>
                      </div>
                    </div>
                  </a>
                </div>
              @endforeach
              <!-- end single article -->

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
          <p>شروط الإستخدام</p>
          <p>سياسة الخصوصية</p>
          <p>إتصل بنا</p>
        </div>
      </footer>
    </div>
  </body>
</html>
