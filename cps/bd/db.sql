SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+09:00";

--
-- Database: `post_board`
--
CREATE DATABASE IF NOT EXISTS `post_board` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `post_board`;

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`idx`, `name`, `pw`, `title`, `content`, `date`, `hit`) VALUES
(1, 'S Writer', '', '자유게시판입니다.', '자유게시판입니다.', '2016-07-02', 0),
(2, 'S Writer', '', '자유게시판입니다.', '자유게시판입니다.', '2016-07-02', 0),
(3, 'S Writer', '', '자유게시판입니다.', '자유게시판입니다.', '2016-07-02', 0),
(4, 'S Writer', '', '자유게시판입니다.', '자유게시판입니다.', '2016-07-02', 0),
(5, 'S Writer', '', '자유게시판입니다.', '자유게시판입니다.', '2016-07-02', 0);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
