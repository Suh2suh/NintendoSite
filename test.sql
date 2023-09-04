-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-06-13 09:02
-- 서버 버전: 10.4.22-MariaDB
-- PHP 버전: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE `members` (
  `pass` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(80) CHARACTER SET utf8mb4 DEFAULT NULL,
  `registdate` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `members`
--

INSERT INTO `members` (`pass`, `name`, `email`, `registdate`, `num`) VALUES
('rlarksk', '김가나', 'gana@gana.com', '2022-06-08 (13:19)', 1),
('gkswlehf', '한지돌', 'jidol@jidol.com', '2022-06-08 (14:34)', 2),
('rkskek', '가나다', 'ganada@ganada.com', '2022-06-13 (08:57)', 7);

-- --------------------------------------------------------

--
-- 테이블 구조 `newsboard`
--

CREATE TABLE `newsboard` (
  `num` int(11) NOT NULL,
  `title` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `imageurl` varchar(512) CHARACTER SET utf8mb4 NOT NULL,
  `pagelink` varchar(512) CHARACTER SET utf8mb4 NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `newsboard`
--

INSERT INTO `newsboard` (`num`, `title`, `category`, `imageurl`, `pagelink`, `date`) VALUES
(1, '「모여봐요 동물의 숲을 처음 시작하시는 분들께」 책자 배포 중! 디지털 버전도 소개합니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/956/f3c1b3002cfa8f0a5d1e4623b4d75911.jpg', '', ''),
(2, '『Nintendo Switch Sports』가 오늘 발매되었습니다. 소개 페이지도 업데이트되었습니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/957/bb6157d7040c28777ee1e659d6da9ff7.jpg', '', ''),
(3, '『마리오 스트라이커즈 배틀 리그』 6월 10일 발매! 동료를 날리는 새로운 기술 「팀 태클」 등 새로운 정보를 공개합니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/958/e1edc8571a23764f3e90467a43ec19c2.jpg', '', ''),
(4, '『스플래툰 3』의 티저 페이지가 공개되었습니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/959/1aadb33537fe68c4ae13e6752710219d.jpg', '', ''),
(5, '『MONSTER HUNTER RISE』를 기간 한정으로 마음껏 즐기자! Nintendo Switch Online 가입자 한정 이벤트 「게임 트라이얼」개최!', '뉴스', 'https://www.nintendo.co.kr/front_images/news/960/5503bfe501b6b67f68cdac2c84272167.jpg', '', ''),
(6, '『MONSTER HUNTER RISE: SUNBREAK』 6월 30일 발매! 새로운 정보가 공개되었습니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/963/4d7b8700a2d483c620030cf76f5c369a.jpg', '', ''),
(7, 'Nintendo Switch로 발매되는 10개의 인디 게임 타이틀을 소개!', '보도자료', 'https://www.nintendo.co.kr/front_images/news/964/4007d9bbccd78b4a6cf924b1a1d865ff.jpg', '', ''),
(8, '『파이어 엠블렘 무쌍 풍화설월』 캐릭터 소개 영상 ~왕국편~이 공개되었습니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/965/cd52530bdb1e32e91e012c51afcce84b.jpg', '', ''),
(9, '「닌텐도 3DS 다운로드 번호」의 판매 종료에 관한 안내', '알림', 'https://www.nintendo.co.kr/front_images/news/966/a960bba229d70cdbcb44ac9d51e42edf.jpeg', '', '2022.05.09'),
(10, '『파이어 엠블렘 무쌍 풍화설월』 캐릭터 소개 영상 ~제국편~이 공개되었습니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/967/091d05ff7b3cd9e6df2263b91bd62d5e.jpg', '', '2022.05.12'),
(11, '「포켓몬스터 브릴리언트 다이아몬드・샤이닝 펄」, 「Pokémon LEGENDS 아르세우스」를 「Pokémon HOME」과 연동 가능. 「Pokémon LEGENDS 아르세우스」의 오리지널 애니메이션도 공개 중.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/971/dfbf982b89488a41a7234507e63ef119.jpg', '', '2022.05.26'),
(12, '『Nintendo Switch Sports』의 새로운 CM이 공개되었습니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/972/69c439444de6bae36627678f342b78c8.jpg', '', '2022.05.26'),
(13, '『마리오 스트라이커즈 배틀 리그』 개막 직전 온라인 체험 이벤트 「퍼스트 킥」을 개최! 공식 홈페이지도 공개되었습니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/973/3eb99af11975a2740909f7993aab6ac6.jpg', '', '2022.05.27'),
(14, '『파이어 엠블렘 무쌍 풍화설월』 캐릭터 소개 영상 ~동맹편~이 공개되었습니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/975/bfd4f129946732b2c9901f57e599b944.jpg', '', '2022.05.27'),
(15, '『마리오 스트라이커즈 배틀 리그』의 CM과 소개 영상이 공개되었습니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/976/99c8402aea8a251f98637dd1e60bd4a2.jpg', '', '2022.05.30'),
(16, '「포켓몬스터스칼렛・바이올렛」이 11월 18일 발매 결정! 새로운 정보도 공개되었습니다.', '뉴스', 'https://www.nintendo.co.kr/front_images/news/977/c2003add9e6c9c27badaab2917ce9f28.png', '', '2022.06.02');

-- --------------------------------------------------------

--
-- 테이블 구조 `qnaboard`
--

CREATE TABLE `qnaboard` (
  `num` int(100) NOT NULL,
  `category` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `content` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `writer` varchar(11) CHARACTER SET utf8mb4 DEFAULT NULL,
  `registerday` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `qnaboard`
--

INSERT INTO `qnaboard` (`num`, `category`, `title`, `content`, `writer`, `registerday`) VALUES
(21, 'Nintendo Switch', 'ㄴㄱㄷㅎ', 'ㄴㄷㅎ', '김가나', '2022-06-04'),
(23, '기타', '다시 수정', '다시 수정', '한지돌', '2022-06-06'),
(25, '', '제목', '수정', '한지돌', '2022-06-08');

-- --------------------------------------------------------

--
-- 테이블 구조 `softwareboard`
--

CREATE TABLE `softwareboard` (
  `num` int(11) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `title` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `imageurl` varchar(512) CHARACTER SET utf8mb4 NOT NULL,
  `date` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `company` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `pagelink` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `softwareboard`
--

INSERT INTO `softwareboard` (`num`, `category`, `title`, `imageurl`, `date`, `company`, `pagelink`) VALUES
(1, 'Nintendo Switch', '링 피트 어드벤처', 'https://www.nintendo.co.kr/front_images/sw/switch/427/427.jpg', '2019.10.18', '한국닌텐도', ''),
(2, 'Nintendo Switch', '마리오 파티 슈퍼스타즈', 'https://www.nintendo.co.kr/front_images/sw/switch/1889/f3c065ea9b91b100acfda486d9c2531d.jpeg', '2021.10.29', '한국닌텐도', ''),
(3, 'Nintendo Switch', '포켓몬스터 브릴리언트 다이아몬드・샤이닝 펄', 'https://www.nintendo.co.kr/front_images/sw/switch/1923/cd752be9c313c9e4dbb750fb310424ab.jpg', '2021.11.19', '한국닌텐도', ''),
(4, 'Nintendo Switch', '말랑말랑 두뇌학원', 'https://www.nintendo.co.kr/front_images/sw/switch/1958/5de6fe508b752fc173218b42ed8e7255.png', '2021.12.03', '한국닌텐도', ''),
(5, 'Nintendo Switch', 'Pokémon LEGENDS 아르세우스', 'https://www.nintendo.co.kr/front_images/sw/switch/2106/6b8396ab4aa39cb6160cb37ac0ab88ad.jpg', '2022.01.28', '한국닌텐도', ''),
(6, 'Nintendo Switch', '별의 커비 디스커버리', 'https://www.nintendo.co.kr/front_images/sw/switch/2218/146074fcb32b408c590de59e155c0b2d.jpg', '2022.03.25', '한국닌텐도', ''),
(7, 'Nintendo Switch', 'Nintendo Switch Sports', 'https://www.nintendo.co.kr/front_images/sw/switch/2332/36f0a4b7ad2227383e60dc4d22713ed4.jpg', '2022.04.29', '한국닌텐도', ''),
(8, 'Nintendo Switch', '마리오 스트라이커즈 배틀 리그', 'https://www.nintendo.co.kr/front_images/sw/switch/2398/8f1a83a18a50ba0b4e99c0a977e184a4.jpg', '2022.06.10', '한국닌텐도', '');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `newsboard`
--
ALTER TABLE `newsboard`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `qnaboard`
--
ALTER TABLE `qnaboard`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `softwareboard`
--
ALTER TABLE `softwareboard`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 테이블의 AUTO_INCREMENT `newsboard`
--
ALTER TABLE `newsboard`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 테이블의 AUTO_INCREMENT `qnaboard`
--
ALTER TABLE `qnaboard`
  MODIFY `num` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 테이블의 AUTO_INCREMENT `softwareboard`
--
ALTER TABLE `softwareboard`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
