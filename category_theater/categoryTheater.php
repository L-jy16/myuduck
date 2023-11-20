<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons.css">

    <title>MYUDUCK</title>
    <style>
    </style>
</head>

<body>
    <?php include "../include/header.php"?>
    <!-- //header -->


    <main>
        <div class="theater__ineer container">
            <h1>공연장</h1>
            <div class="theater__info">
                <div class="theater__map">
                    <img src="../assets/img/map.png" alt="서울 지도">
                    <div class="pin"></div>
                </div>
                <div class="theater__link">
                    <ul>
                        <li><a href="#"><img src="../assets/img/theater/theater01.jpg" alt="샬롯롯데시어티"></a></li>
                        <li><a href="#"><img src="../assets/img/theater/theater02.jpg" alt="세종문화회관"></a></li>
                        <li><a href="#"><img src="../assets/img/theater/theater03.jpg" alt="예술의전당"></a></li>
                        <li><a href="#"><img src="../assets/img/theater/theater04.jpg" alt="블루스퀘어"></a></li>
                        <li><a href="#"><img src="../assets/img/theater/theater05.jpg" alt="LG아트센터 서울"></a></li>
                        <li><a href="#"><img src="../assets/img/theater/theater06.jpg" alt="충무아트센터"></a></li>
                        <li><a href="#"><img src="../assets/img/theater/theater07.jpg" alt="디큐브 링크아트센터"></a></li>
                        <li><a href="#"><img src="../assets/img/theater/theater08.jpg" alt="국립극장(해오름극장)"></a></li>
                        <li><a href="#"><img src="../assets/img/theater/theater09.jpg" alt="유니버설아트센터"></a></li>
                        <li><a href="#"><img src="../assets/img/theater/theater10.jpg" alt="한전아트센터"></a></li>
                        <li><a href="#"><img src="../assets/img/theater/theater11.jpg" alt="우리금융아트홀"></a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="theater__list">
                    <table class="list__cont">
                        <tr class="list_cont_header">
                            <th class="rounded-left"><span>공연장</span></th>
                            <th class="rounded-center"><span>장소</span></th>
                            <th class="rounded-right"><span>최근 주요 작품</span></th>
                        </tr>
                        <tr class="th_info ca1">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater01.jpg" alt="샬롯롯데시어티">
                                </a>
                                <a href="#"><span>샤롯롯데시어티</span></a>
                            </td>
                            <td class="theater__location">
                                <span>잠실</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>드라큘라(2023)</li>
                                    <li>오페라의 유령(2023)</li>
                                    <li>데스노트(2023)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca1 -->

                        <tr class="th_info ca2">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater02.jpg" alt="세종문화회관">
                                </a>
                                <a href="#"><span>세종문화회관</span></a>
                            </td>
                            <td class="theater__location">
                                <span>종로구</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>모차르트(2023)</li>
                                    <li>베토벤2(2023)</li>
                                    <li>적벽(2023)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca2 -->

                        <tr class="th_info ca3">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater03.jpg" alt="예술의전당">
                                </a>
                                <a href="#"><span>예술의전당</span></a>
                            </td>
                            <td class="theater__location">
                                <span>서초구</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>순신(2023)</li>
                                    <li>베토벤 (2023)</li>
                                    <li>브로드웨이 42번가(2022)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca3 -->

                        <tr class="th_info ca4">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater04.jpg" alt="블루스퀘어">
                                </a>
                                <a href="#"><span>블루스퀘어</span></a>
                            </td>
                            <td class="theater__location">
                                <span>용산구</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>래배커(2023)</li>
                                    <li>레미제라블(2023)</li>
                                    <li>시카고(2023)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca4 -->

                        <tr class="th_info ca5">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater05.jpg" alt="LG아트센터 서울">
                                </a>
                                <a href="#"><span>LG아트센터 서울</span></a>
                            </td>
                            <td class="theater__location">
                                <span>강서구</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>벤허(2023)</li>
                                    <li>영웅(2022)</li>
                                    <li>하데스타운(2022)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca5 -->

                        <tr class="th_info ca6">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater06.jpg" alt="충무아트센터">
                                </a>
                                <a href="#"><span>충무아트센터</span></a>
                            </td>
                            <td class="theater__location">
                                <span>중구</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>멤피스(2023)</li>
                                    <li>리진 : 빛의 연인(2023)</li>
                                    <li>몬테크리스토(2023)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca6 -->

                        <tr class="th_info ca7">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater07.jpg" alt="디큐브 링크아트센터">
                                </a>
                                <a href="#"><span>디큐브 링크아트센터</span></a>
                            </td>
                            <td class="theater__location">
                                <span>구로구</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>번개맨(2023)</li>
                                    <li>시스터 엑터(2023)</li>
                                    <li>신비한 상자를 열어라!(2023)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca7 -->

                        <tr class="th_info ca8">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater08.jpg" alt="국립극장(해오름극장)">
                                </a>
                                <a href="#"><span>국립극장(해오름극장)</span></a>
                            </td>
                            <td class="theater__location">
                                <span>중구</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>패왕별희(2023)</li>
                                    <li>알로하(2023)</li>
                                    <li>베니스의 상인들(2023)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca8 -->

                        <tr class="th_info ca9">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater09.jpg" alt="유니버설아트센터">
                                </a>
                                <a href="#"><span>유니버설아트센터</span></a>
                            </td>
                            <td class="theater__location">
                                <span>광진구</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>마리 쿼리(2023)</li>
                                    <li>붉은 눈의 저주(2023)</li>
                                    <li>캐리와 슈퍼걸스(2023)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca9 -->

                        <tr class="th_info ca10">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater10.jpg" alt="한전아트센터">
                                </a>
                                <a href="#"><span>한전아트센터</span></a>
                            </td>
                            <td class="theater__location">
                                <span>서초구</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>삼총사(2023)</li>
                                    <li>할란카운티(2023)</li>
                                    <li>용의자X의 헌신(2023)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca10 -->

                        <tr class="th_info ca11">
                            <td class="img_name">
                                <a href="#">
                                    <img src="../assets/img/theater/theater11.jpg" alt="우리금융아트홀">
                                </a>
                                <a href="#"><span>우리금융아트홀</span></a>
                            </td>
                            <td class="theater__location">
                                <span>송파구</span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li>캐리tv쇼 뮤지컬(2023)</li>
                                    <li>앤서니 브라운의 우리가족(2023)</li>
                                    <li>산타의 빈양말(2023)</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca11 -->
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- //main-->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script>
        
    </script>
</body>
</html>