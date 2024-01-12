# MYUDUCK 
뮤지컬 관련하여 리뷰 및 정보를 공유하는 사이트를 만들었습니다.<br />
팀원으로는 강서현, 정해연, 이지영 으로 구성되어 있습니다.<br />

<img width="500" src="./assets/img/MainPage.png">

## 사이트 바로가기
사이트 바로가기 : [MYUDUCK](http://ljy16.dothome.co.kr/myuduck/main/main.php)


## 사용 스택
- Front-end : <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white"/> <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=CSS3&logoColor=white"/> <img alt="JavaScript" src="https://img.shields.io/badge/JavaScript-0769AD?style=flat&logo=JavaScript&logoColor=white"> <img src="https://img.shields.io/badge/jQuery-1572B6?style=flat&logo=jQuery&logoColor=white"/> <img src="https://img.shields.io/badge/swiper-3498DB?style=flat&logo=swiper&logoColor=white"/>
- Back-end : <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white"/>
- Databse : <img src="https://img.shields.io/badge/MySQL-00000F?style=flat&logo=MySQL&logoColor=white"/>

## 프로젝트 소개

저희 사이트는 뮤지컬에 대한 리뷰와 정보를 공유하는 플랫폼으로, 뮤지컬 팬들이 다양한 작품과 배우에 대한 소식을 즐기고 공유할 수 있는 공간입니다. 주요 기능으로는 검색과 찜 기능이 제공되어 사용자들이 원하는 콘텐츠를 쉽게 찾아볼 수 있습니다.

검색 기능을 통해 사용자는 원하는 뮤지컬이나 배우를 빠르게 찾을 수 있습니다. 전체적인 검색 또는 특정 카테고리 선택을 통해 선호하는 내용을 쉽게 발견할 수 있는 검색페이지가 제공됩니다.

또한, 찜 기능을 통해 사용자들은 마이페이지에서 자신이 좋아하는 뮤지컬이나 배우를 관리할 수 있습니다. 두 페이지에 따로 위치한 찜 목록을 통해 사용자는 간편하게 찜한 내용들을 확인할 수 있으며, 마이페이지에서는 찜한 항목을 클릭하면 해당 배우나 뮤지컬의 상세페이지로 이동할 수 있습니다.



## 주요 페이지
### 메인 페이지
데이터베이스에서 뮤지컬 정보, QA 게시물, 그리고 공지사항을 가져오기 위해 각각의 테이블에 대한 SQL 쿼리를 실행합니다. 결과는 각각의 배열인 $musicalMainInfo, $QAInfo, $noticeInfo에 저장됩니다. 이 정보들은 메인 화면에 다양한 섹션에서 활용되어 사용자에게 다양한 콘텐츠를 제공합니다.

슬라이더를 위한 Swiper 라이브러리와 부드러운 스크롤 효과를 위한 Lenis가 도입되어 웹 페이지에 풍부한 시각적 효과를 더하고 있습니다. 또한, 메인 화면에는 최신 뮤지컬 소개, 개봉 예정 뮤지컬 목록, 각 카테고리로 이동하는 링크, 최근 QA 게시물, 최근 공지사항 게시물, 티켓 예약 사이트로 이동하는 링크 등 다양한 섹션이 구성되어 사용자에게 풍부한 정보와 편리한 이용 경험을 제공합니다.
### 회원 페이지
- 회원가입 페이지
    - 회원가입 약관 페이지 <br />
    HTML 및 PHP 코드는 사용자에게 이용약관 동의를 받는 페이지입니다. 페이지 상단에는 MYUDUCK 서비스의 기본적인 스타일 및 타이틀이 정의되어 있습니다. 이용약관에 동의하기 위한 체크박스 및 관련 내용들이 섹션으로 구성되어 있습니다. "가입하기" 버튼을 통해 동의 여부를 확인할 수 있습니다. <br /><br />
    이용약관 동의 여부를 확인하기 위하여 JavaScript를 이용하여 동의 여부를 확인한 경우에 회원 정보 입력 페이지로 이동하도록하였습니다.전체 동의 체크 박스를 클릭하였을 경우에는 agreeCheck1 체크박스의 변경 이벤트를 감지하여, 해당 체크박스가 체크되면 나머지 체크박스들도 모두 체크되도록 처리되도록 하였고, 체크 박스들을 개별로 눌렀을 경우에는 agreeCheck2, agreeCheck3, agreeCheck4 중 하나라도 체크가 해제되면 agreeCheck1도 자동으로 체크 해제되도록 하였습니다.<br/>
    가입 버튼 클릭 시에는 agreeCheck1가 체크가 되었거나 agreeCheck2, agreeCheck3, agreeCheck4가 모두 체크가 되어 있을 경우에만 회원 정보 입력 페이지롤 넘어가게 하였습니다.<br />
    <br />
    
  - 회원정보 입력 페이지 <br />
    아이디, 비밀번호, 이름, 주소, 이메일, 연락처 등 다양한 필드를 가진 회원가입 양식으록 구성되어 있으며 아이디, 이메일 중복검사 기능과 Daum 우편번호 API를 사용하여 주소를 검색하는 기능을 제공하고 있습니다.<br />
    아이디 및 이메일 유효성 검사를 하기 위하여 Jquery를 이용하여 idChecking()와 emailChecking() 함수를 사용하여 아이디와 이메일이 유효성 검사와 중복 여부를 서버에서 확인하는 Ajax 요청을 수행하였습니다. <br />
    아이디와 이메일의 유효성 검사와 중복 검사 여부를 기반으로 하여 비밀번호, 이름, 휴대폰 번호, 우편번호 등을 joinChecks() 함수를 사용하여 입력 필드의 유효성을 검사하였습니다. <br />
    Daum 우편번호 API를 사용하여 우편번호를 검색하였습니다. searchBtnClick() 함수가 호출되면 Daum 우편번호 서비스 창이 열려 사용자가 선택한 주소가 입력 필드를 채우는 형식으로 하였습니다. <br />
    
  - 로그인 페이지 <br />
    로그인 페이지는 아이디와 비밀번호를 입력받는 양식과 로그인 버튼이 구성되어 있습니다. 또한, 로그인 상태를 유지할지 선택할 수 있는 체크박스와 함께 회원가입, 아이디 찾기, 비밀번호 찾기에 대한 링크도 제공되어 있습니다. 사용자가 아이디와 비밀번호를 입력하고 로그인 버튼을 클릭하면, 입력된 정보를 데이터베이스에서 확인하여 로그인 여부를 결정하고, 성공 시 세션에 사용자 정보를 저장한 후 메인 페이지로 이동합니다.<br />
    JavaScript를 사용하여 로그인 버튼(#loginBtn)에 클릭하면 이벤트가 발생하여 사용자가 입력한 아이디(#youId)와 비밀번호(#youPass)를 가져와서 두 값이 모두 비어있는지 확인해주고 비어있지 않으면 데이터베이스를 연결하여 입력한 값이 데이터베이스 안에 들어있는 값과 비교하는 PHP로 넘겨주어 로그인 여부를 확인하고 성공 시 세션에 사용자 정보를 저장한 후 메인 페이지로 이동합니다.<br />
  - 로그아웃 페이지<br />
    로그아웃을 누르면 세션에 저장되어 있던 사용자의 정보를 전부 지워지게 만든 후 메인 페이지로 이동하게 하였습니다.<br />
### 게시판
- 후기 게시판
    - 후기 목록 페이지
        게시글 목록을 표시하고, 검색 기능, 페이징 기능이 구현하였습니다.<br />
        connect.php와 session.php 파일을 인크루드하여 데이터베이스 연결과 세션 관리를 초기화한 후 데이터베이스 안에 있는 후기관련 테이블의 내용을 변수에 저장하여 글의 총 갯수를 구하였습니다.<br />
        제목과 작성자, 작성 날짜, 조회수 등의 정보를 데이터베이스 안에 있는 후기 테이블과 회원 테이블을 합쳐 불러온 뒤 if문과 for문을 사용하여 게시글 수만큼 반복하여 뿌려주었습니다.<br />
        전체적인 검색 또는 특정 카테고리르 선택하여 검색할 수 있는 기능도 구현하였습니다. GET을 사용하여 페이지 정보를 가져 온 후 검색어와 검색옵션의 공백을 제거하여 SQL 인젝션 방지를 위해 real_escape_string을 사용하여 처리하였습니다. 데이터베이스에서 게시글 정보를 불러 올 때 'WHERE' 절을 추가하여 제목, 내용, 등록자로 검색할 수 있는 쿼리문을 동적으로 생성하여 검색 결과값을 반영하여 출력하였습니다. <br />
    - 후기 작성 페이지
    - 후기 상세 페이지
- 공지사항 게시판
    - 공지사항 목록 페이지
        게시글 목록을 표시하고, 검색 기능, 페이징 기능이 구현하였습니다.<br />
        connect.php와 session.php 파일을 인크루드하여 데이터베이스 연결과 세션 관리를 초기화한 후 데이터베이스 안에 있는 후기관련 테이블의 내용을 변수에 저장하여 글의 총 갯수를 구하였습니다.<br />
        제목과 작성자, 작성 날짜, 조회수 등의 정보를 데이터베이스 안에 있는 공지사항 테이블과 회원 테이블을 합쳐 불러온 뒤 if문과 for문을 사용하여 게시글 수만큼 반복하여 뿌려주었습니다.<br />
        전체적인 검색 또는 특정 카테고리르 선택하여 검색할 수 있는 기능도 구현하였습니다. GET을 사용하여 페이지 정보를 가져 온 후 검색어와 검색옵션의 공백을 제거하여 SQL 인젝션 방지를 위해 real_escape_string을 사용하여 처리하였습니다. 데이터베이스에서 게시글 정보를 불러 올 때 'WHERE' 절을 추가하여 제목, 내용, 등록자로 검색할 수 있는 쿼리문을 동적으로 생성하여 검색 결과값을 반영하여 출력하였습니다. <br />
    - 공지사항 작성 페이지
    - 공지사항 상세 페이지
### 검색 페이지 
- 검색 메인 페이지
- 검색 상세 페이지
### 뮤지컬
- 뮤지컬 메인 페이지
- 뮤지컬 상세 페이지
### 배우
- 배우 메인 페이지
- 배우 상세 페이지
### 극장
- 극장 메인 페이지
- 극장 상세 페이지
### 마이페이지
- 마이페이지
- 회원 정보 수정 페이지
- Password 변경 페이지
- 찜 페이지
