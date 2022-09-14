-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 05:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectapollo`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `dateop` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `ipaddress`, `name`, `batch`, `image`, `department`, `dateop`, `comment`, `status`) VALUES
(1, '127.0.0.1', 'V C AMHESH KUMAR', '2019-2022', 'IMG-6315f7558774c6.14493648.jpg', 'B.B.A', '2022-09-05', 'nice', '1');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `candidatename` varchar(255) NOT NULL,
  `candidateemail` varchar(255) NOT NULL,
  `candidaterollno` varchar(255) NOT NULL,
  `candidatephonenumber` varchar(255) NOT NULL,
  `candidategender` varchar(255) NOT NULL,
  `candidatebg` varchar(255) NOT NULL,
  `candidatedepartment` varchar(255) NOT NULL,
  `candidateclass` varchar(255) NOT NULL,
  `candidateadmityear` varchar(255) NOT NULL,
  `candidateaddress` varchar(255) NOT NULL,
  `candidatenationality` varchar(255) NOT NULL,
  `candidatemt` varchar(255) NOT NULL,
  `candidatelt` varchar(255) NOT NULL,
  `candidateim` varchar(255) NOT NULL,
  `candidateparentsname` varchar(255) NOT NULL,
  `candidateparentphonenumber` varchar(255) NOT NULL,
  `candidatecommunitynumber` varchar(255) NOT NULL,
  `candidatetcnumaber` varchar(255) NOT NULL,
  `candidateAdmitcardnumber` varchar(255) NOT NULL,
  `candidatesslcno` varchar(255) NOT NULL,
  `candidatesslcmark` varchar(255) NOT NULL,
  `candidatehsconeno` varchar(255) NOT NULL,
  `candidatehsconemark` varchar(255) NOT NULL,
  `candidatehsctwono` varchar(255) NOT NULL,
  `candidatehsctwomark` varchar(255) NOT NULL,
  `candidateicno` varchar(255) NOT NULL,
  `candidateaadhar` varchar(255) NOT NULL,
  `candidatepan` varchar(255) NOT NULL,
  `candidatevote` varchar(255) NOT NULL,
  `candidateexamrollno` varchar(255) NOT NULL,
  `candidateonesemno` varchar(255) NOT NULL,
  `candidateonesemmark` varchar(255) NOT NULL,
  `candidatetwosemno` varchar(255) NOT NULL,
  `candidatetwosemmark` varchar(255) NOT NULL,
  `candidatethreesemno` varchar(255) NOT NULL,
  `candidatethreesemmark` varchar(255) NOT NULL,
  `candidatetfoursemno` varchar(255) NOT NULL,
  `candidatefoursemmark` varchar(255) NOT NULL,
  `candidatetfivesemno` varchar(255) NOT NULL,
  `candidatetfivesemmark` varchar(255) NOT NULL,
  `candidatesixsemno` varchar(255) NOT NULL,
  `candidatesixsemmark` varchar(55) NOT NULL,
  `candidateremark` varchar(255) NOT NULL,
  `candidateotherone` varchar(255) NOT NULL,
  `candidateothertwo` varchar(255) NOT NULL,
  `candidateotherthree` varchar(255) NOT NULL,
  `dateop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `candidatename`, `candidateemail`, `candidaterollno`, `candidatephonenumber`, `candidategender`, `candidatebg`, `candidatedepartment`, `candidateclass`, `candidateadmityear`, `candidateaddress`, `candidatenationality`, `candidatemt`, `candidatelt`, `candidateim`, `candidateparentsname`, `candidateparentphonenumber`, `candidatecommunitynumber`, `candidatetcnumaber`, `candidateAdmitcardnumber`, `candidatesslcno`, `candidatesslcmark`, `candidatehsconeno`, `candidatehsconemark`, `candidatehsctwono`, `candidatehsctwomark`, `candidateicno`, `candidateaadhar`, `candidatepan`, `candidatevote`, `candidateexamrollno`, `candidateonesemno`, `candidateonesemmark`, `candidatetwosemno`, `candidatetwosemmark`, `candidatethreesemno`, `candidatethreesemmark`, `candidatetfoursemno`, `candidatefoursemmark`, `candidatetfivesemno`, `candidatetfivesemmark`, `candidatesixsemno`, `candidatesixsemmark`, `candidateremark`, `candidateotherone`, `candidateothertwo`, `candidateotherthree`, `dateop`) VALUES
(6, 'Sri Kanth', 'email@email.com', '255435453', '1234567890', 'male', 'O+', 'B.B.A 3', '3', '2019-2022', 'CHENNAI', 'INDIAN', 'Mother Tongue', 'TAMIL/ENGLISH', 'SCARE ON FOREHEAD', 'Unknown', '+917550181658', '789451', '6543218751', '323123', '78945664', '323', '45451231', '414', '45612317', '333', '', '132445677890', '323213213', '3232232', '123451321', '411904525', '687', '12344567', '691', '12344567', '675', '12344567', '642', '12344567', '624', '12344567', '591', 'NONE', '', '', '', '2022-09-07'),
(9, 'vcmaheshkumar', 'vcmk@vcmk.com', '422904513', '1234567890', 'male', 'B+', 'B.B.A', '3', '2019-2022', 'unkown', 'indian', '', '', '', 'chandru', '4567891321', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_attendance`
--

CREATE TABLE `candidate_attendance` (
  `id` int(11) NOT NULL,
  `candidateParentPhoneNumber` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rollnumber` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_attendance`
--

INSERT INTO `candidate_attendance` (`id`, `candidateParentPhoneNumber`, `name`, `rollnumber`, `subject`, `class`, `attendance`, `date`) VALUES
(1, '', 'sri kanth', '25', 'Principal of management', 'B.B.A 3', 'present', '2022-09-05'),
(2, '', 'V C Mahesh Kumar', '411904513', 'Tamil', 'B.B.A 3', 'absent', '2022-09-04'),
(3, '', '', '', '', '', 'Absent', ''),
(4, '', '', '', '', '', 'Absent', ''),
(5, '', 'V C MAHESH KUMAR', '411904513', '', '', 'On Duty', '08-09-2022'),
(6, '', 'V C MAHESH KUMAR', '411904513', '', '', 'On Duty', '08-09-2022'),
(7, '', 'V C MAHESH KUMAR', '411904513', 'POM', 'B.C.A 3', 'present', '08-09-2022'),
(8, '', 'Sri Kanth', '25', 'POM', 'B.B.A 3', 'On Duty', '08-09-2022'),
(9, '', 'Sri Kanth', '255435453', '', 'B.B.A 3', 'Absent', '09-09-2022'),
(10, '', 'vcmaheshkumar', '422904513', '', 'B.B.A', 'Absent', '09-09-2022'),
(11, '', 'vcmaheshkumar', '422904513', 'CSA1Q', 'B.B.A', 'Absent', '09-09-2022'),
(12, '', 'vcmaheshkumar', '422904513', '', 'B.B.A', 'Absent', '09-09-2022'),
(13, '', 'Sri Kanth', '255435453', '', 'B.B.A 3', 'Absent', '09-09-2022'),
(14, '', 'vcmaheshkumar', '422904513', '', 'B.B.A', 'On Duty', '09-09-2022'),
(15, '', 'vcmaheshkumar', '422904513', '', 'B.B.A', 'present', '09-09-2022'),
(16, '+917550181658', 'Sri Kanth', '255435453', '', 'B.B.A 3', 'present', '09-09-2022'),
(17, '4567891321', 'vcmaheshkumar', '422904513', 'tamil', 'B.B.A', 'Absent', '09-09-2022');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_marks`
--

CREATE TABLE `candidate_marks` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `examName` varchar(255) NOT NULL,
  `markObtained` varchar(255) NOT NULL,
  `totalMarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_marks`
--

INSERT INTO `candidate_marks` (`id`, `department`, `class`, `name`, `rollno`, `subject`, `examName`, `markObtained`, `totalMarks`) VALUES
(2, 'B.B.A', '3', 'vcmaheshkumar', '422904513', 'CSA1Q', 'CIA 1', '65', '75'),
(3, 'B.B.A 3', '3', 'Sri Kanth', '255435453', 'Eng', 'CIA 1', '65', '75');

-- --------------------------------------------------------

--
-- Table structure for table `circulars`
--

CREATE TABLE `circulars` (
  `id` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `dateposted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circulars`
--

INSERT INTO `circulars` (`id`, `adminName`, `title`, `date`, `details`, `department`, `dateposted`) VALUES
(2, 'apollo', 'fefwefew', '2022-09-30', 'efewfewfwecdcdvsd', 'fewfefewvdsvdv', 'fewfefewvdsvdv'),
(3, 'apollo', 'efefewf', '2022-09-28', 'efewfwefe', 'efefewf', '2022-09-04'),
(4, 'apollo', 'Circular', '2022-09-05', 'Circular', 'Circular', '2022-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `ipaddress` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `ipaddress`, `name`, `email`, `message`, `date`) VALUES
(1, '127.0.0.1', 'vcmk', 'vcmk@vcmk.com', 'h', '2022-09-03'),
(2, '127.0.0.1', 'vcmk', 'apollo@apollo.com', 'holla text', '2022-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `dateposted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `adminName`, `title`, `date`, `details`, `department`, `dateposted`) VALUES
(14, 'retro', 'fefewfe', '2022-09-05', 'efefefefefe', 'BBA', 'fefefef'),
(15, 'apollo', 'efefe', '2022-09-29', 'fewfefewfwdwd', 'BBA', 'efewfewf'),
(16, 'apollo', 'Event', '2022-09-05', 'Event', 'BBA', '2022-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `facultyname` varchar(255) NOT NULL,
  `facultyemail` varchar(255) NOT NULL,
  `facultyimage` varchar(255) NOT NULL,
  `facultyexperience` varchar(255) NOT NULL,
  `facultyappointfrom` varchar(255) NOT NULL,
  `facultyidnumber` varchar(255) NOT NULL,
  `facultyphonenumber` varchar(255) NOT NULL,
  `facultydesignation` varchar(255) NOT NULL,
  `facultydepartment` varchar(255) NOT NULL,
  `facultyqualification` varchar(255) NOT NULL,
  `facultygender` varchar(255) NOT NULL,
  `facultyaddress` varchar(255) NOT NULL,
  `facultysociallink1` varchar(255) NOT NULL,
  `facultysociallink2` varchar(255) NOT NULL,
  `facultysociallink3` varchar(255) NOT NULL,
  `facultysociallink4` varchar(255) NOT NULL,
  `datecreated` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `facultyname`, `facultyemail`, `facultyimage`, `facultyexperience`, `facultyappointfrom`, `facultyidnumber`, `facultyphonenumber`, `facultydesignation`, `facultydepartment`, `facultyqualification`, `facultygender`, `facultyaddress`, `facultysociallink1`, `facultysociallink2`, `facultysociallink3`, `facultysociallink4`, `datecreated`, `attendance`) VALUES
(18, 'Sri Nidhi', 'srinidhi@gmail.com', 'IMG-63173104c81df3.73877659.jpg', '5 Years', '2022-09-05', 'AAASCC000001', '+91 1234567890', 'Assistant Professor', 'Management', 'B.B.A., M.B.A., M.Phil., Ph.d.', 'Female', 'Chennai', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', '2022-09-06', '2'),
(19, 'Lukman Murali', 'lufmanp70xy@gmail.com', 'IMG-63188e55b5a899.69196928.jpg', '25 Years', '2022-09-08', 'AAASCC88887777', '7895612345', 'Professor', 'English', 'B.A., M.A., M.Phil., Ph.D', 'Male', 'Chennai', 'https://stackoverflow.com/questions/37580221/fatal-error-uncaught-error-call-to-a-member-function-fetch-object-on-string', 'https://stackoverflow.com/questions/37580221/fatal-error-uncaught-error-call-to-a-member-function-fetch-object-on-string', 'https://stackoverflow.com/questions/37580221/fatal-error-uncaught-error-call-to-a-member-function-fetch-object-on-string', 'https://stackoverflow.com/questions/37580221/fatal-error-uncaught-error-call-to-a-member-function-fetch-object-on-string', '2022-09-07', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `attribute` varchar(255) NOT NULL,
  `imgTag` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `adminName`, `title`, `image`, `attribute`, `imgTag`, `date`) VALUES
(4, 'apollo', 'galleries', 'IMG-6315e6ff948247.89508938.jpg', 'galleries', 'rcb', '2022-09-05'),
(5, 'apollo', 'gallery', 'IMG-6316f49f17f320.02717027.jpg', 'gallery', 'csk', '2022-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `librarianName` varchar(255) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `NameOp` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `DateOt` varchar(255) NOT NULL,
  `LastCall` varchar(255) NOT NULL,
  `SubDate` varchar(255) NOT NULL,
  `Fine` varchar(255) NOT NULL,
  `LibInChar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `librarianName`, `BookName`, `status`, `NameOp`, `class`, `DateOt`, `LastCall`, `SubDate`, `Fine`, `LibInChar`) VALUES
(1, 'librarian', 'God Father', 'taken', 'Mukesh', 'BBA 3', '2022-09-05', '2022-09-12', '2022-09-09', '0', 'librarian'),
(2, 'librarian', 'God Father', 'taken', 'Mukesh', 'BBA 3', '2022-09-05', '2022-09-12', '2022-09-14', '15', 'librarian'),
(3, 'librarian', 'God Father', 'taken', 'Mukesh', 'BBA 3', '2022-09-05', '2022-09-12', '', '', 'librarian');

-- --------------------------------------------------------

--
-- Table structure for table `libupbooks`
--

CREATE TABLE `libupbooks` (
  `id` int(11) NOT NULL,
  `upBooks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libupbooks`
--

INSERT INTO `libupbooks` (`id`, `upBooks`) VALUES
(2, '100');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `msgname` varchar(255) NOT NULL,
  `msgfrom` varchar(255) NOT NULL,
  `msgmessage` varchar(255) NOT NULL,
  `msgto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `msgname`, `msgfrom`, `msgmessage`, `msgto`) VALUES
(3, 'wipro', 'admin', 'holla', 'user'),
(6, 'apollo', 'admin', 'dwdw', 'user'),
(9, 'Gokul', 'user', 'hello computer', 'student'),
(10, 'Gokul', 'user', 'hello sir', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `dateposted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `adminName`, `title`, `date`, `details`, `department`, `dateposted`) VALUES
(2, 'apollo', 'efefrewf', '2022-09-29', 'egwefgewrfe', 'fvcbfbfd', '2022-09-04'),
(3, 'apollo', 'News', '2022-09-05', 'News', 'News', '2022-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `ipaddress`, `date`) VALUES
(1, 'vcmk@vcmk.com', '127.0.0.1', '2022-09-03'),
(2, 'parents@parents.com', '127.0.0.1', '2022-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `dateposted` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`id`, `adminName`, `title`, `author`, `type`, `tag`, `dateposted`, `link`) VALUES
(3, 'apollo', 'Publication1', 'Publication1', 'book', 'publication1', '2022-09-04', 'http://localhost/projectApollo/system/admin/pages/updates/add-publication.php');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `postText` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `name`, `postText`, `image`, `date`) VALUES
(1, 'apollo', 'hthth', 'IMG-631b437a43cb26.69022401.png', '2022-09-09'),
(2, 'apollo', 'hello', 'IMG-631b4447e3b715.72845159.jpg', '2022-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `studymaterial`
--

CREATE TABLE `studymaterial` (
  `id` int(11) NOT NULL,
  `uploadedBy` varchar(255) NOT NULL,
  `nameOfTheStudyMaterial` varchar(255) NOT NULL,
  `pdfStudyMaterial` varchar(255) NOT NULL,
  `subjectName` varchar(255) NOT NULL,
  `classBelongsTo` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studymaterial`
--

INSERT INTO `studymaterial` (`id`, `uploadedBy`, `nameOfTheStudyMaterial`, `pdfStudyMaterial`, `subjectName`, `classBelongsTo`, `date`) VALUES
(3, 'Gokul', 'Principal Of Managemnet', 'FILE-631a0930995f52.55549217.pdf', 'Principal Of Managemnet', 'B.B.A 3', '2022-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(11) NOT NULL,
  `IdNumber` varchar(255) NOT NULL,
  `TimeIn` varchar(255) NOT NULL,
  `TimeOut` varchar(255) NOT NULL,
  `LogDate` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `IdNumber`, `TimeIn`, `TimeOut`, `LogDate`, `Status`) VALUES
(21, 'AAASCC88887777', '7:36:51 PM', '', '2022-09-09', '0'),
(22, 'AAASCC000001', '7:37:22 PM', '', '2022-09-09', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','parents','student','librarian','atendencemaintainer','studentsleader') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'apollo', 'apollo@apollo.com', '21232f297a57a5a743894a0e4a801fc3 ', 'admin'),
(2, 'Gokul', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee ', 'user'),
(3, 'librarian', 'library@lib.com', '35fa1bcb6fbfa7aa343aa7f253507176', 'librarian'),
(4, 'attendance', 'attendance@email.com', '64c62c92ac064500d60a7f3624e35ad7', 'atendencemaintainer'),
(5, 'parents', 'parents@parents.com', 'c68ad910ed49ac65f21f1bf2c5dbf912 ', 'parents'),
(6, 'V C AMHESH KUMAR', 'vcmk@gmail.com', 'c1df00b5621747980f1e7f5f11a30a9a', 'admin'),
(7, 'vcmaheshkumar', '422904513', 'edd441cd2bcceaa1325632b9aa73768e', 'parents'),
(8, 'studentcoordinator', 'studentc@ccc.com', '81dc9bdb52d04dc20036dbd8313ed055', 'studentsleader'),
(9, 'vcmaheshkumar', 'vcmk@vcmk.com', 'edd441cd2bcceaa1325632b9aa73768e', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `visitorscounter`
--

CREATE TABLE `visitorscounter` (
  `id` int(11) NOT NULL,
  `visitorCounter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitorscounter`
--

INSERT INTO `visitorscounter` (`id`, `visitorCounter`) VALUES
(2, 1270),
(3, 1270),
(4, 1270),
(5, 1270),
(6, 1270),
(7, 1270),
(8, 1270),
(9, 1270),
(10, 1270),
(11, 1270),
(12, 1270),
(13, 1270),
(14, 1270),
(15, 1270),
(16, 1270),
(17, 1270),
(18, 1270),
(19, 1270),
(20, 1270),
(21, 1270),
(22, 1270),
(23, 1270),
(24, 1270),
(25, 1270),
(26, 1270),
(27, 1270),
(28, 1270),
(29, 1270),
(30, 1270),
(31, 1270),
(32, 1270),
(33, 1270),
(34, 1270),
(35, 1270),
(36, 1270),
(37, 1270),
(38, 1270),
(39, 1270),
(40, 1270),
(41, 1270),
(42, 1270),
(43, 1270),
(44, 1270),
(45, 1270),
(46, 1270),
(47, 1270),
(48, 1270),
(49, 1270),
(50, 1270),
(51, 1270),
(52, 1270),
(53, 1270),
(54, 1270),
(55, 1270),
(56, 1270),
(57, 1270),
(58, 1270),
(59, 1270),
(60, 1270),
(61, 1270),
(62, 1270),
(63, 1270),
(64, 1270),
(65, 1270),
(66, 1270),
(67, 1270),
(68, 1270),
(69, 1270),
(70, 1270),
(71, 1270),
(72, 1270),
(73, 1270),
(74, 1270),
(75, 1270),
(76, 1270),
(77, 1270),
(78, 1270),
(79, 1270),
(80, 1270),
(81, 1270),
(82, 1270),
(83, 1270),
(84, 1270),
(85, 1270),
(86, 1270),
(87, 1270),
(88, 1270),
(89, 1270),
(90, 1270),
(91, 1270),
(92, 1270),
(93, 1270),
(94, 1270),
(95, 1270),
(96, 1270),
(97, 1270),
(98, 1270),
(99, 1270),
(100, 1270),
(101, 1270),
(102, 1270),
(103, 1270),
(104, 1270),
(105, 1270),
(106, 1270),
(107, 1270),
(108, 1270),
(109, 1270),
(110, 1270),
(111, 1270),
(112, 1270),
(113, 1270),
(114, 1270),
(115, 1270),
(116, 1270),
(117, 1270),
(118, 1270),
(119, 1270),
(120, 1270),
(121, 1270),
(122, 1270),
(123, 1270),
(124, 1270),
(125, 1270),
(126, 1270),
(127, 1270),
(128, 1270),
(129, 1270),
(130, 1270),
(131, 1270),
(132, 1270),
(133, 1270),
(134, 1270),
(135, 1270),
(136, 1270),
(137, 1270),
(138, 1270),
(139, 1270),
(140, 1270),
(141, 1270),
(142, 1270),
(143, 1270),
(144, 1270),
(145, 1270),
(146, 1270),
(147, 1270),
(148, 1270),
(149, 1270),
(150, 1270),
(151, 1270),
(152, 1270),
(153, 1270);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_attendance`
--
ALTER TABLE `candidate_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_marks`
--
ALTER TABLE `candidate_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `circulars`
--
ALTER TABLE `circulars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libupbooks`
--
ALTER TABLE `libupbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studymaterial`
--
ALTER TABLE `studymaterial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitorscounter`
--
ALTER TABLE `visitorscounter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `candidate_attendance`
--
ALTER TABLE `candidate_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `candidate_marks`
--
ALTER TABLE `candidate_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `circulars`
--
ALTER TABLE `circulars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `libupbooks`
--
ALTER TABLE `libupbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studymaterial`
--
ALTER TABLE `studymaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visitorscounter`
--
ALTER TABLE `visitorscounter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
