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
    <meta property="og:title" content="{{ $content['article']['title'] }}"> <!-- article title -->
    <meta property="og:type" content="article">
    <meta property="og:description" content="{{ $content['article']['description'] }}"> <!-- article description -->
    <meta property="og:image:url" content="{{ $content['article']['sharing_image'] }}"> <!-- sharing image url -->

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:site" content="{!! @AkhbarNajem !!}"> <!-- twitter handle -->
    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="{{ $content['article']['title'] }}"> <!-- artilcle title -->
    <meta name="twitter:description" content="{{ $content['article']['description'] }}"> <!-- article description -->
    <meta name="twitter:image:src" content="{{ $content['article']['sharing_image'] }}"> <!-- sharing image url -->

    <!-- Google+ Open Graph Meta Tags -->
    <meta property="og:type" content="article">
    <meta itemprop="og:title" content="{{ $content['article']['title'] }}"> <!-- article title -->
    <meta itemprop="og:description" content="{{ $content['article']['description'] }}"> <!-- article desciption -->
    <meta itemprop="og:image:url" content="{{ $content['article']['sharing_image'] }}"> <!-- sharing image url -->

  </head>
  <body dir="rtl">
    <div class="mother-ship">
      <!-- Navbar -->
      <!-- nothing to change here -->
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
        <div class="articleinfo-main-wrapper">
          <div class="col-xs-12 articleinfo-wrapper">
            <div class="row">
              <div class="articleinfo-main col-xs-12">
                <span class="article-details-cover">
                  <span>
                    <!-- cover image url in the src -->
                    <!-- article title in the alt -->
                    <img src="{{ $content['article']['cover']['url'] }}" alt="{{ $content['article']['title'] }}">
                  </span>
                </span>
                <div class="article-details">
                  <h1 class="article-title">
                    <!-- article title here -->
                    <span class="article-title-span"> {{ $content['article']['title'] }} </span>
                  </h1>
                  <!-- article date -->
                  <h2 class="article-date">{{ $content['article']['rule']['published_at'] }} </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row info-row center-sm">
            <div class="col-xs-12">
              <div class="row center-sm">
                <div class="col-xs-12 col-sm-9 col-md-9 article-details-big-wrapper">
                  <div class="row center-sm">
                    <div class="col-xs-12 col-sm-9 col-md-9">
                      <!-- article content here -->
                      <div class="info-wrapper">
                        <!-- article html content here -->
                        {{ $content['article']['content'] }}
                      </div>
                      <div class="article-speaks-about">
                        <div class="header">هذا المقال يتحدث عن</div>
                        <ul class="celebrities-pics">
                         <!-- related influencers here -->
                         @foreach ($content['article']['influencers'] as $influencer)
                          <li>
                            <!-- slug should be in the href -->
                            <a href="/influencers/{{ $influencer['alias'] }}">
                              <!-- influencer image in the src -->
                              <img src="{{ $influencer['avatar'] }}">
                            </a>
                          </li>
                          <!-- end related influencer loop here -->
                          @endforeach
                        </ul>
                      </div>
                      <!-- if we can add facebook comments here -->

                      <script>
                        window.fbAsyncInit = function() {
                          FB.init({
                            appId      : '1517491731884075',
                            xfbml      : true,
                            version    : 'v2.5'
                          });
                        };

                        (function(d, s, id){
                           var js, fjs = d.getElementsByTagName(s)[0];
                           if (d.getElementById(id)) {return;}
                           js = d.createElement(s); js.id = id;
                           js.src = "//connect.facebook.net/en_US/sdk.js";
                           fjs.parentNode.insertBefore(js, fjs);
                         }(document, 'script', 'facebook-jssdk'));
                      </script>

                      <div class="comments">
                        <div class="header"><span>التعليقات</span></div>
                        <!-- add the article url in the data-href -->
                        <div class="fb-comments" data-width="100%" data-href="{{ $content['article']['url'] }}" data-mobile="true" data-numposts="1"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- nothing to change in the footer -->
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
