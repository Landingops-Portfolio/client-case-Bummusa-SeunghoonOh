<!DOCTYPE html><html lang="ko"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>법무사 오승훈 사무소</title>


  <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>

  <!-- Remember to include jQuery :) -->
  <script src="../../ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="../../ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <script src="/pc/js/jquery-partial.js"></script>
  <script src="/pc/js/jquery-ellipsis.js"></script>
  <script src="/pc/js/swipe.js"></script>

  <link rel="stylesheet" href="../../ajax/libs/meyer-reset/2.0/reset.css">
  <link rel="stylesheet" href="../../ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">
  <link rel="stylesheet" href="/pc/css/01_main.css">
  <script type="text/javascript">
	  

	function addCheck() {
	var form = document.boardForm;

	if(!form.category.value) {
	    alert("상담 유형을 선택해 주세요");
	    form.category.focus();
	    return;
	}

	if(form.category.value == "상담유형") {
	    alert("상담 유형을 선택해 주세요");
	    form.category.focus();
	    return;
	}

	if(!form.userName.value) {
	    alert("고객명을 입력해주세요");
	    form.userName.focus();
	    return;
	}
	if(!form.tel1.value) {
	    alert("휴대전화번호를 입력해주세요");
	    form.tel1.focus();
	    return;
	}
	if(!form.tel2.value) {
	    alert("휴대전화번호를 입력해주세요");
	    form.tel2.focus();
	    return;
	}
	if(!form.tel3.value) {
	    alert("휴대전화번호를 입력해주세요");
	    form.tel3.focus();
	    return;
	}

	if(!$('input:checkbox[name="termsAgree"]').is(":checked")){
    	alert("개인정보 처리방침에 동의해 주세요");
    	$('input:checkbox[name="termsAgree"]').focus();
            return;
    }

		form.submit();
	}
	</script>



</head>
<body>
  <div id="header"><header class="header">
  <div class="top-box">
    <div class="wrap">
      <a class="logo-icon" href="main.php">
        <img src="../images/header/logo.png" alt="logo">
      </a>
  
      <div class="global">
        <a href="free/free_consulting.php">
          <img src="../images/header/free-icon.png">
          1:1 무료 상담신청
        </a>
        <a href="free/free_realtime.php">
          <img src="../images/header/realtime-icon.png">
          실시간 질문답변
        </a>
      </div>
    </div>
  </div>

  <div class="bottom-box">
    <nav class="menu">
      <ul class="clearfix">
        <li class="item item-1">
          <a href="intro/intro.html">법무사 사무소 소개</a>
        </li>
        <li class="item item-2">
          <a href="bankruptcy/bankruptcy.html">개인파산</a>
        </li>
        <li class="item item-3">
          <a href="regeneration/regeneration.html">개인회생</a>
        </li>
        <li class="item item-4">
          <a href="free/free_consulting.php">무료상담</a>
        </li>
        <li class="item item-5">
          <a href="service/service_notice.php">고객센터</a>
        </li>
      </ul>

      <div class="sub-menu">
        <ul class="clearfix">
          <li class="sub-item item-1">
            <a href="intro/intro.html">인사말</a>
            <a href="intro/intro_road.html">오시는 길</a>
          </li>
          <li class="sub-item item-2">
            <a href="bankruptcy/bankruptcy.html">개인파산이란?</a>
            <a href="bankruptcy/bankruptcy_step.html">개인파산 절차</a>
            <a href="bankruptcy/bankruptcy_docs.html">필요서류</a>
          </li>
          <li class="sub-item item-3">
            <a href="regeneration/regeneration.html">개인회생이란?</a>
            <a href="regeneration/regeneration_step.html">개인회생 절차</a>
            <a href="regeneration/regeneration_docs.html">필요서류</a>
          </li>
          <li class="sub-item item-4">
            <a href="free/free_consulting.php">1:1 무료상담</a>
            <a href="free/free_realtime.php">실시간 질문 답변</a>
          </li>
          <li class="sub-item item-5">
            <a href="service/service_notice.php">공지사항</a>
            <a href="service/service_success.php">성공사례</a>
            <a href="service/reference.php">자료실</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header></div>

  <div id="mySwipe" class="swipe" style="visibility: visible;">
    <div class="swipe-wrap" style="width: 3840px;">
      <div class="img main-1" data-index="0" style="width: 1280px; left: 0px; transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);">
        <div class="desc">
          <p>감당하기 힘든 채무와 폭력적인 이자!</p>
          <h1><span class="gold">합법적으로 해결</span>할 수 있습니다.</h1>
        </div>
      </div>
      <div class="img main-2" data-index="1" style="width: 1280px; left: -1280px; transition-duration: 0ms; transform: translate(1280px, 0px) translateZ(0px);">
        <div class="desc">
          <p>전국 어디에서 편리한 무방문 상담</p>
          <h1><span class="gold">모든 상담</span>은 무료입니다.</h1>
        </div>
      </div>
      <div class="img main-3" data-index="2" style="width: 1280px; left: -2560px; transition-duration: 0ms; transform: translate(-1280px, 0px) translateZ(0px);">
        <div class="desc">
          <p>책임관리, 신청기각시</p>
          <h1><span class="gold">전액 환불</span>해 드립니다</h1>
        </div>
      </div>
    </div>

    <ul class="dot-wrap clearfix">
      <li class="dot active" onclick="onClick(0)"></li>
      <li class="dot" onclick="onClick(1)"></li>
      <li class="dot" onclick="onClick(2)"></li>
    </ul>
  </div>

  <div class="main">
    <div class="main-wrap">
      <div class="free-wrap">
        <div class="top">
          <img src="../images/main/free.png" alt="free-icon">
          <div class="free-desc">
            <h1>1:1 무료 상담신청</h1>
            <p>아래 정보를 입력해주시면 친절하고 빠르게 연락드리겠습니다.</p>
          </div>
          <div class="free-agree">
            <label class="checkbox-label clearfix">
              <input type="checkbox" class="form-checkbox" name="termsAgree">
              <span class="checkbox-icon"></span>
              <span class="label-name">개인정보취급방침에 동의합니다.</span>
            </label>
            <a href="modal/agreement.html" rel="modal:open">전문 보기</a>
          </div>
        </div>
        <form method="post" action="free_proc.php" name="boardForm" class="write">
        <div class="bottom clearfix">
          <div class="form-wrap">
            <p class="name">상담유형</p>
            <div class="select-wrap">
                <select class="form-select" name="category">
                <option>상담유형</option>
                <option>개인회생</option>
                <option>개인파산</option>
              </select>
            </div>
          </div>

          <div class="form-wrap">
            <p class="name">성명</p>
            <div class="input-wrap">
              <input placeholder="" name="userName">
            </div>
          </div>

          <div class="form-wrap">
            <p class="name">연락처</p>
            <div class="phone-wrap">
              <div class="phone phone-1">
                <input name="tel1">
              </div>
              <div class="phone phone-2">
                <input name="tel2">
              </div>
              <div class="phone phone-2">
                <input name="tel3">
              </div>
              <button onclick="javascript:addCheck(); return false;">신청하기</button>
            </div>
            
          </div>
        </div></form>
      </div>

      <div class="clearfix">
        <div class="services">
          <div class="services-top clearfix">
            <a href="04_regeneration.html">
              <div class="services-regeneration">
                <img src="../images/main/regeneration.png" alt="regeneration">
                <div>
                  <h1>개인회생</h1>
                  <p>Individual</p>
                  <p>Revival</p>
                </div>
              </div>
            </a>

            <a href="03_bankruptcy.html">
              <div class="services-bankruptcy">
                <img src="../images/main/bankruptcy.png" alt="bankruptcy">
                <div>
                  <h1>개인파산</h1>
                  <p>Individual</p>
                  <p>Bankruptcy</p>
                </div>
              </div>
            </a>
          </div>

          <div class="services-bottom clearfix">
            <div class="contect">
              <p class="desc">무료상담 전화 <span class="dash">ㅣ</span> CALL CENTER</p>
              <h1 class="number">053-753-2527</h1>
              <p class="time">업무시간 <span class="dash">ㅣ</span> 월~토 AM 9시~ PM 09시</p>
            </div>

             <a href="https://pf.kakao.com/_kxlKlj" target="_blank">
              <div class="kakao">
                <img src="../images/main/kakao.png" alt="kakao">
                <p>카카오톡 상담</p>
              </div>
            </a>
          </div>
        </div>

        <div class="status">
          <h1>빠른 상담신청 현황</h1>
          <a href="free/free_consulting.php" class="more">
            <img src="../images/main/more.png" alt="more">
          </a>

          <ul>
	          
            <li class="list-item clearfix">
              <a href="main.php">
                <p>개인회생 상담신청이 접수되었습니다.</p>
                            </a>
              <p>심○용</p>
            </li>
            
            <li class="list-item clearfix">
              <a href="main.php">
                <p>개인회생 상담신청이 접수되었습니다.</p>
                            </a>
              <p>원○호</p>
            </li>
            
            <li class="list-item clearfix">
              <a href="main.php">
                <p>개인회생 상담신청이 접수되었습니다.</p>
                            </a>
              <p>정○국</p>
            </li>
            
            <li class="list-item clearfix">
              <a href="main.php">
                <p>개인회생 상담신청이 접수되었습니다.</p>
                            </a>
              <p>장○준</p>
            </li>
                      </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="notice-wrap">
    <ul class="wrap">
      <li class="box">
        <h1>실시간 질문 답변</h1>
        <a href="free/free_realtime.php" class="more">
          <img src="../images/main/more.png" alt="more">
        </a>

        <ul>
	                  <li class="list-item clearfix">
            <a href="free/free_realtime.php">
              <p>▶출장샵 콜걸◀ </p>
              <img src="../images/main/new.png" alt="new">            </a>
          </li>
                    <li class="list-item clearfix">
            <a href="free/free_realtime.php">
              <p>개인회생 폐지</p>
                          </a>
          </li>
                    <li class="list-item clearfix">
            <a href="free/free_realtime.php">
              <p>담보대출 막는방법</p>
                          </a>
          </li>
                    <li class="list-item clearfix">
            <a href="free/free_realtime.php">
              <p>개인회생문의</p>
                          </a>
          </li>
                  </ul>
      </li>

      <li class="box">
        <h1>성공사례</h1>
        <a href="service/service_success.php" class="more">
          <img src="../images/main/more.png" alt="more">
        </a>

        <ul>
	                </ul>
      </li>

      <li class="box">
        <h1>공지사항</h1>
        <a href="service/service_notice.php" class="more">
          <img src="../images/main/more.png" alt="more">
        </a>
		        <a href="service/service_notice_view__q_id=&amp;page=1.php" class="notice-link">
          <h1 class="notice-title"></h1>
          <p class="notice-desc"><span class="ellip"><span style="white-space: nowrap;"></span></span></p>
          <p class="notice-date"></p>
        </a>
      </li>
    </ul>
  </div>

  <div id="footer">
	<footer class="footer">
  <div class="wrap">
    <a class="logo-icon" href="01_main.html">
      <img src="../images/header/logo.png" alt="logo">
    </a>

    <div class="desc-wrap">
      <p class="desc">대구 수성구 동대구로 359, 2층 202호(범어동, 대구법원앞)<span class="dash">|</span><a href="modal/agreement.html" rel="modal:open">개인정보취급방침</a></p>
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

  <script type="text/javascript">
    //<![CDATA[
    // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('646c15cda86454ef8e79321815d640dd');
    function plusFriendChat() {
      Kakao.PlusFriend.chat({
        plusFriendId: '_kxlKlj' // 플러스친구 홈 URL에 명시된 id로 설정합니다.
      });
    }
  //]]>

    var elem = document.getElementById('mySwipe');
    window.mySwipe = Swipe(elem, {
      startSlide: 0,
      auto: 4000,
      continuous: true,
      disableScroll: true,
      stopPropagation: true,
      callback: function(index, element) {
        $('.dot-wrap .dot').each(function (i) {
          if (index === i) {
            $(this).addClass('active');
          } else {
            $(this).removeClass('active')
          }
        })
      },
    });


    function onClick(i) {
      mySwipe.slide(i)
    }

  </script>

</body></html>