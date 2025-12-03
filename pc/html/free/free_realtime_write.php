<!DOCTYPE html><html lang="ko"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>법무사 오승훈 사무소 - 무료상담</title>

  <!-- Remember to include jQuery :) -->
  <script src="../../../ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="../../../ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <script src="..//pc/js/jquery-partial.js"></script>
  <script src="..//pc/js/jquery-ellipsis.js"></script>
  <script src="..//pc/js/swipe.js"></script>

  <link rel="stylesheet" href="../../../ajax/libs/meyer-reset/2.0/reset.css">
  <link rel="stylesheet" href="../../../ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">
  <link rel="stylesheet" href="..//pc/css/05_free.css">

  <script type="text/javascript">

	    function del(){
	        if (confirm("삭제하시겠습니까?") == true){    //확인
	            location.href="realtime_del.php?id=";
	        }else{   //취소
	            return;
	        }
	    }

		function addCheck() {
		var form = document.boardForm;

		if(!form.subject.value) {
		    alert("제목을 입력해주세요");
		    form.subject.focus();
		    return;
		}

		if(!form.pw.value) {
		    alert("비밀번호를 입력해주세요");
		    form.pw.focus();
		    return;
		}

		if(!form.category.value) {
		    alert("분류를 선택해 주세요");
		    form.category.focus();
		    return;
		}

		if(form.category.value == "상담 유형을 선택해 주세요") {
		    alert("분류를 선택해 주세요");
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

		if(!form.q.value) {
		    alert("상담내용을 입력해주세요");
		    form.q.focus();
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
  <header class="header">
  <div class="top-box">
    <div class="wrap">
      <a class="logo-icon" href="../main.php">
        <img src="../../images/header/logo.png" alt="logo">
      </a>
  
      <div class="global">
        <a href="free_consulting.php">
          <img src="../../images/header/free-icon.png">
          1:1 무료 상담신청
        </a>
        <a href="free_realtime.php">
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
          <a href="free_consulting.php">무료상담</a>
        </li>
        <li class="item item-5">
          <a href="../service/service_notice.php">고객센터</a>
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
            <a href="free_consulting.php">1:1 무료상담</a>
            <a href="free_realtime.php">실시간 질문 답변</a>
          </li>
          <li class="sub-item item-5">
            <a href="../service/service_notice.php">공지사항</a>
            <a href="../service/service_success.php">성공사례</a>
            <a href="../service/reference.php">자료실</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

  <div class="page">
    <div class="main-img">
      <h1>무료상담</h1>
    </div>

    <div class="tabs-wrap">
      <ul class="clearfix">
        <li class="tab">
          <a href="free_consulting.php">1:1 무료상담</a>
        </li>
        <li class="tab active">
          <a href="free_realtime.php">실시간 질문답변</a>
        </li>
      </ul>
    </div>

    <div class="content">
      <h1 class="title">실시간 질문답변</h1>

      <div class="write">
        <h1 class="agree-title">개인정보 처리방침 동의</h1>
        <div>
          <div class="agree-wrap">당사는 고객님의 개인정보를 보호하고, 적절한 서비스를 제공하기 위하여 기본방침을 가지고 정보를 수집하고 있습니다.
문의하신 사항에 대한 답변을 받고자 하시면, 아래의 개인정보취급방침에 동의하셔야 합니다.
수집된 고객님의 개인정보는 제3자에게 제공되지 않으며, 고객님이 입력하신 정보는 문의에 대한 답변 발송 용도로만 사용됩니다.
당사는 고객님의 개인정보를 보호하고, 적절한 서비스를 제공하기 위하여 기본방침을 가지고 정보를 수집하고 있습니다.
문의하신 사항에 대한 답변을 받고자 하시면, 아래의 개인정보취급방침에 동의하셔야 합니다.
수집된 고객님의 개인정보는 제3자에게 제공되지 않으며, 고객님이 입력하신 정보는 문의에 대한 답변 발송 용도로만 사용됩니다.</div>
        </div>

        <div class="free-agree clearfix">
          <label class="checkbox-label clearfix">
            <input type="checkbox" class="form-checkbox" name="termsAgree">
            <span class="checkbox-icon checkbox-border"></span>
            <span class="label-name write-label-name">개인정보 취급방침에 동의합니다.</span>
          </label>
        </div>


        <form method="post" action="realtime_proc.php" name="boardForm" class="write">
          <ul class="write-form">
            <li class="item clearfix">
              <p class="item-title">제목</p>
              <input type="text" class="input write-long-input" placeholder="제목을 입력해 주세요." value="" name="subject">
            </li>
                         <li class="item clearfix">
              <p class="item-title">비밀번호 설정</p>
              <input type="password" class="input write-input" placeholder="비밀번호를 입력해 주세요." value="" name="pw">
            </li>
                        <li class="item clearfix">
              <p class="item-title">분류</p>
               <select class="write-select" name="category">
              	 <option>상담 유형을 선택해 주세요</option>
              	 <option>개인회생</option>
              	 <option>개인파산</option>
			   </select>
            </li>
            <li class="item clearfix">
              <p class="item-title">고객명</p>
              <input type="text" class="input write-input" placeholder="고객명을 입력해 주세요." name="userName" value="">
            </li>
            <li class="item clearfix">
              <p class="item-title">휴대전화번호</p>
              <input type="number" class="input phone-1" name="tel1" value="">
			  <span class="space">-</span>
			  <input type="number" class="input phone-2" name="tel2" value="">
			  <span class="space">-</span>
			  <input type="number" class="input phone-2" name="tel3" value="">
            </li>
            <li class="item clearfix">
              <p class="item-title">이메일 주소</p>
              <input type="text" class="input email-1" name="email1" value="">
              <span class="space">@</span>
              <input type="text" class="input email-2" name="email2" value="">
            </li>
            <li class="item clearfix">
              <p class="item-title">상담 내용</p>
              <textarea class="textarea" placeholder="상담내용을 입력해주세요." name="q"></textarea>
            </li>
          </ul>

          	
          <div class="btn-wrap">
	                      <button type="button" onclick="javascript:addCheck(); return false;">상담하기</button>
                      </div>
        </form>
      </div>
    </div>
  </div>

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
  </script>

  <script>
    $("#header").partial('../partial/header.html');
    $("#footer").partial('../partial/footer.html');
  </script>

</body></html>