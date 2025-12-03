<!DOCTYPE html><html lang="ko"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>법무사 오승훈 사무소 - 고객센터</title>

  <!-- Remember to include jQuery :) -->
  <script src="../../../ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="../../../ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <script src="..//pc/js/jquery-partial.js"></script>
  <script src="..//pc/js/jquery-ellipsis.js"></script>
  <script src="..//pc/js/swipe.js"></script>

  <link rel="stylesheet" href="../../../ajax/libs/meyer-reset/2.0/reset.css">
  <link rel="stylesheet" href="../../../ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">
  <link rel="stylesheet" href="..//pc/css/06_service.css">
</head>
<body>
  <div id="header">
	  <header class="header">
  <div class="top-box">
    <div class="wrap">
      <a class="logo-icon" href="../main.php">
        <img src="../../images/header/logo.png" alt="logo">
      </a>
  
      <div class="global">
        <a href="../free/free_consulting.php">
          <img src="../../images/header/free-icon.png">
          1:1 무료 상담신청
        </a>
        <a href="../free/free_realtime.php">
          <img src="../../images/header/realtime-icon.png">
          실시간 질문답변
        </a>
      </div>
    </div>
  </div>

  <div class="bottom-box">
    <nav class="menu">
      <ul class="clearfix">
        <li class="item item-1">
          <a href="../intro/intro.html">법무사 사무소 소개</a>
        </li>
        <li class="item item-2">
          <a href="../bankruptcy/bankruptcy.html">개인파산</a>
        </li>
        <li class="item item-3">
          <a href="../regeneration/regeneration.html">개인회생</a>
        </li>
        <li class="item item-4">
          <a href="../free/free_consulting.php">무료상담</a>
        </li>
        <li class="item item-5">
          <a href="service_notice.php">고객센터</a>
        </li>
      </ul>

      <div class="sub-menu">
        <ul class="clearfix">
          <li class="sub-item item-1">
            <a href="../intro/intro.html">인사말</a>
            <a href="../intro/intro_road.html">오시는 길</a>
          </li>
          <li class="sub-item item-2">
            <a href="../bankruptcy/bankruptcy.html">개인파산이란?</a>
            <a href="../bankruptcy/bankruptcy_step.html">개인파산 절차</a>
            <a href="../bankruptcy/bankruptcy_docs.html">필요서류</a>
          </li>
          <li class="sub-item item-3">
            <a href="../regeneration/regeneration.html">개인회생이란?</a>
            <a href="../regeneration/regeneration_step.html">개인회생 절차</a>
            <a href="../regeneration/regeneration_docs.html">필요서류</a>
          </li>
          <li class="sub-item item-4">
            <a href="../free/free_consulting.php">1:1 무료상담</a>
            <a href="../free/free_realtime.php">실시간 질문 답변</a>
          </li>
          <li class="sub-item item-5">
            <a href="service_notice.php">공지사항</a>
            <a href="service_success.php">성공사례</a>
            <a href="reference.php">자료실</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>  </div>

  <div class="page">
    <div class="main-img">
      <h1>고객센터</h1>
    </div>

    <div class="tabs-wrap">
      <ul class="clearfix">
        <li class="tab">
          <a href="service_notice.php">공지사항</a>
        </li>
        <li class="tab active">
          <a href="service_success.php">성공사례</a>
        </li>
        <li class="tab">
          <a href="reference.php">자료실</a>
        </li>
      </ul>
    </div>

    <div class="content">
      <h1 class="title">성공사례</h1>

      <table class="table">
          <colgroup>
            <col width="100px">
            <col width="755px">
            <col width="145px">
          </colgroup>
          <thead>
            <tr>
              <th>번호</th>
              <th>제목</th>
              <th>등록일</th>
            </tr>
          </thead>
          <tbody>
                        </tbody>
        </table>

        <div class="pagination">
          <div>
                      </div>
        </div>
      </div>
    </div>
  

  <div id="footer">
	  <footer class="footer">
  <div class="wrap">
    <a class="logo-icon" href="01_main.html">
      <img src="../../images/header/logo.png" alt="logo">
    </a>

    <div class="desc-wrap">
      <p class="desc">대구 수성구 동대구로 359, 2층 202호(범어동, 대구법원앞)<span class="dash">|</span><a href="../modal/agreement.html" rel="modal:open">개인정보취급방침</a></p>
      <p class="desc">대표자 오승훈<span class="dash">|</span>사업자등록번호 638-35-00262<span class="dash">|</span>TEL 053 753 2527<span class="dash">|</span>FAX  053 753 2522</p>
      <p class="desc">COPYRIGHT ⓒ 법무사 오승훈 사무소. ALL RIGHT RESERVED</p>
    </div>
  </div>
</footer>

<script>
	    $.modal.defaults = {
      closeExisting: false,    // Close existing modals. Set this to false if you need to stack multiple modal instances.
      escapeClose: true,      // Allows the user to close the modal by pressing `ESC`
      clickClose: true,       // Allows the user to close the modal by clicking the overlay
      closeText: '',     // Text content for the close <a> tag.
      closeClass: 'icon-remove',         // Add additional class(es) to the close <a> tag.
      showClose: true,        // Shows a (X) icon/link in the top-right corner
      modalClass: "modal",    // CSS class added to the element being displayed in the modal.
      blockerClass: "jquery-modal",  // CSS class added to the overlay (blocker).

      // HTML appended to the default spinner during AJAX requests.
      spinnerHtml: '',

      showSpinner: false,      // Enable/disable the default spinner during AJAX requests.
      fadeDuration: null,     // Number of milliseconds the fade transition takes (null means no transition)
      fadeDelay: 1.0          // Point during the overlay's fade-in that the modal begins to fade in (.5 = 50%, 1.5 = 150%, etc.)
    };
    
	    $('.notice-desc').ellipsis({
      lines: 3,             // force ellipsis after a certain number of lines. Default is 'auto'
      ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
      responsive: false      // set to true if you want ellipsis to update on window resize. Default is false
    });
  </script>  </div>



</body></html>