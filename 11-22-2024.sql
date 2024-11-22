-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2024 at 06:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhmsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `user_id`, `password`) VALUES
(1, 1, 'Admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangay_id` int(11) NOT NULL,
  `barangay_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`, `city`, `region`) VALUES
(1, 'Agusan Pequeño', 'Butuan City', 'Caraga Region'),
(2, 'Agusan Village', 'Butuan City', 'Caraga Region'),
(3, 'Ambago', 'Butuan City', 'Caraga Region'),
(4, 'Ampayon', 'Butuan City', 'Caraga Region'),
(5, 'Amparo', 'Butuan City', 'Caraga Region'),
(6, 'Antongalon', 'Butuan City', 'Caraga Region'),
(7, 'Aupagan', 'Butuan City', 'Caraga Region'),
(8, 'Baan Riverside', 'Butuan City', 'Caraga Region'),
(9, 'Bading', 'Butuan City', 'Caraga Region'),
(10, 'Bancasi', 'Butuan City', 'Caraga Region'),
(11, 'Banza', 'Butuan City', 'Caraga Region'),
(12, 'Baobaoan', 'Butuan City', 'Caraga Region'),
(13, 'Bilay', 'Butuan City', 'Caraga Region'),
(14, 'Bit-os', 'Butuan City', 'Caraga Region'),
(15, 'Bitan-agan', 'Butuan City', 'Caraga Region'),
(16, 'Bonbon', 'Butuan City', 'Caraga Region'),
(17, 'Bugabus', 'Butuan City', 'Caraga Region'),
(18, 'Cabcabon', 'Butuan City', 'Caraga Region'),
(19, 'Datu Silongan', 'Butuan City', 'Caraga Region'),
(20, 'De Oro', 'Butuan City', 'Caraga Region'),
(21, 'Dulag', 'Butuan City', 'Caraga Region'),
(22, 'Florida', 'Butuan City', 'Caraga Region'),
(23, 'Golden Ribbon', 'Butuan City', 'Caraga Region'),
(24, 'Holy Redeemer', 'Butuan City', 'Caraga Region'),
(25, 'Humabon', 'Butuan City', 'Caraga Region'),
(26, 'Imadejas', 'Butuan City', 'Caraga Region'),
(27, 'J.P. Rizal', 'Butuan City', 'Caraga Region'),
(28, 'Kinamlutan', 'Butuan City', 'Caraga Region'),
(29, 'Lapu-Lapu', 'Butuan City', 'Caraga Region'),
(30, 'Lemon', 'Butuan City', 'Caraga Region'),
(31, 'Libertad', 'Butuan City', 'Caraga Region'),
(32, 'Limaha', 'Butuan City', 'Caraga Region'),
(33, 'Los Angeles', 'Butuan City', 'Caraga Region'),
(34, 'Lumbocan', 'Butuan City', 'Caraga Region'),
(35, 'Mabuhay', 'Butuan City', 'Caraga Region'),
(36, 'Maon', 'Butuan City', 'Caraga Region'),
(37, 'Montalban', 'Butuan City', 'Caraga Region'),
(38, 'New Society Village', 'Butuan City', 'Caraga Region'),
(39, 'Obrero', 'Butuan City', 'Caraga Region'),
(40, 'Ong Yiu', 'Butuan City', 'Caraga Region'),
(41, 'Pagatpatan', 'Butuan City', 'Caraga Region'),
(42, 'Pangabugan', 'Butuan City', 'Caraga Region'),
(43, 'Pianing', 'Butuan City', 'Caraga Region'),
(44, 'Pinamanculan', 'Butuan City', 'Caraga Region'),
(45, 'San Ignacio', 'Butuan City', 'Caraga Region'),
(46, 'San Mateo', 'Butuan City', 'Caraga Region'),
(47, 'Santo Niño', 'Butuan City', 'Caraga Region'),
(48, 'Sumilihon', 'Butuan City', 'Caraga Region'),
(49, 'Tagabaca', 'Butuan City', 'Caraga Region'),
(50, 'Taguibo', 'Butuan City', 'Caraga Region'),
(51, 'Taligaman', 'Butuan City', 'Caraga Region'),
(52, 'Tiniwisan', 'Butuan City', 'Caraga Region'),
(53, 'Tungao', 'Butuan City', 'Caraga Region'),
(54, 'Villa Kananga', 'Butuan City', 'Caraga Region'),
(55, 'Villa Verde', 'Butuan City', 'Caraga Region'),
(56, 'Zamora', 'Butuan City', 'Caraga Region');

-- --------------------------------------------------------

--
-- Table structure for table `case_category`
--

CREATE TABLE `case_category` (
  `case_category_id` int(11) NOT NULL,
  `case_category_name` varchar(255) NOT NULL,
  `case_category_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case_category`
--

INSERT INTO `case_category` (`case_category_id`, `case_category_name`, `case_category_description`) VALUES
(1, 'Mental Illness', 'Severe conditions affecting mental health'),
(2, 'Mental Problem', 'Moderate mental health concerns'),
(3, 'Mental Disorder', 'Diagnosable mental health conditions');

-- --------------------------------------------------------

--
-- Table structure for table `case_resource_utilization`
--

CREATE TABLE `case_resource_utilization` (
  `utilization_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `date_used` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case_resource_utilization`
--

INSERT INTO `case_resource_utilization` (`utilization_id`, `case_id`, `resource_id`, `date_used`) VALUES
(1, 1, 2, '2024-11-01'),
(2, 2, 3, '2024-11-03'),
(3, 3, 4, '2024-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `case_severity`
--

CREATE TABLE `case_severity` (
  `case_severity_id` int(11) NOT NULL,
  `name` enum('Minor','Moderate','Major','Critical') NOT NULL,
  `case_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case_severity`
--

INSERT INTO `case_severity` (`case_severity_id`, `name`, `case_description`) VALUES
(1, 'Minor', 'Minor cases requiring minimal intervention'),
(2, 'Moderate', 'Moderate cases needing regular follow-ups'),
(3, 'Major', 'Major cases involving critical issues'),
(4, 'Critical', 'Critical cases requiring immediate action and resources');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_fname` varchar(255) NOT NULL,
  `client_lname` varchar(255) NOT NULL,
  `client_address` text NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_fname`, `client_lname`, `client_address`, `gender`, `age`) VALUES
(1, 'John', 'Doe', '123 J.C. Aquino Avenue, Butuan City, Agusan del Norte', 'Male', 35),
(2, 'Jane', 'Smith', '456 Montilla Boulevard, Butuan City, Agusan del Norte', 'Female', 29),
(3, 'Michael', 'Johnson', '789 T. Calo Street, Butuan City, Agusan del Norte', 'Male', 42),
(4, 'Maria', 'Lopez', '100 Roxas Boulevard, Manila, NCR', 'Female', 34),
(5, 'John', 'Cruz', '200 Ayala Avenue, Makati, NCR', 'Male', 28),
(6, 'Anna', 'Garcia', '300 Bonifacio Drive, Taguig, NCR', 'Female', 22),
(10, 'Trixxie Nicole', 'Petalcorin', 'San Vicente, Butuan City, Philippines', 'Female', 22),
(11, 'Trixxie Nicole', 'Petalcorin', 'San Vicente, Butuan City, Philippines', 'Female', 22),
(12, 'Trixxie Nicole', 'Petalcorin', 'San Vicente, Butuan City, Philippines', 'Female', 22),
(13, 'Trixxie Nicole', 'Petalcorin', 'San Vicente, Butuan City, Philippines', 'Female', 22),
(14, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 23),
(15, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 23),
(16, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 23),
(17, 'Pacholo', 'Lugpatan', 'San Vicente, Butuan City, Philippines', 'Male', 27),
(18, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 15),
(19, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 15),
(20, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 28),
(21, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 28),
(22, 'Pacholo', 'Lugpatan', 'San Vicente, Butuan City, Philippines', 'Male', 24),
(23, 'Ric Charles', 'Paquibot', 'asaasdadsadd', 'Male', 13),
(24, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 22),
(25, 'Pacholo', 'Lugpatan', 'San Vicente, Butuan City, Philippines', 'Male', 20),
(26, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 36),
(27, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 35),
(28, 'Ric Charles', 'Paquibot', 'Ampayon, Butuan City, Philippines', 'Male', 19);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `company_name`) VALUES
(1, 'Department1', 'Company1');

-- --------------------------------------------------------

--
-- Table structure for table `mental_health_case`
--

CREATE TABLE `mental_health_case` (
  `case_id` int(11) NOT NULL,
  `case_title` varchar(255) NOT NULL,
  `case_description` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `purok_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `case_category_id` int(11) NOT NULL,
  `case_severity_id` int(11) NOT NULL,
  `status` enum('Open','Closed','Pending') DEFAULT 'Open',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mental_health_case`
--

INSERT INTO `mental_health_case` (`case_id`, `case_title`, `case_description`, `client_id`, `barangay_id`, `purok_id`, `user_id`, `case_category_id`, `case_severity_id`, `status`, `created_at`) VALUES
(1, 'Generalized Anxiety', 'The client reports excessive worry and restlessness for the past six months.', 1, 1, 1, 1, 2, 2, 'Open', '2024-11-10 06:30:00'),
(2, 'Major Depressive Episode', 'Persistent feelings of hopelessness and lack of interest in daily activities.', 2, 1, 1, 1, 1, 3, 'Pending', '2024-11-15 01:45:00'),
(3, 'Panic Disorder', 'The client experiences sudden and intense episodes of fear without an apparent cause.', 3, 1, 1, 1, 3, 4, 'Open', '2024-11-18 00:00:00'),
(4, 'Obsessive-Compulsive Disorder', 'Recurrent intrusive thoughts and compulsive behaviors to alleviate distress.', 1, 1, 1, 1, 2, 3, 'Pending', '2024-11-19 02:30:00'),
(5, 'Post-Traumatic Stress Disorder', 'The client reports nightmares and flashbacks after a traumatic event.', 2, 1, 1, 1, 1, 2, 'Open', '2024-11-20 06:15:00'),
(6, 'Social Anxiety Disorder', 'Avoidance of social interactions due to intense fear of judgment or embarrassment.', 3, 1, 1, 1, 2, 1, 'Pending', '2024-11-21 08:45:00'),
(7, 'Adjustment Disorder', 'Difficulty coping with a significant life change or stressful event.', 1, 1, 1, 1, 1, 4, 'Open', '2024-11-22 01:00:00'),
(8, 'Bipolar Disorder', 'Periods of depressive lows followed by episodes of high energy and impulsive behaviors.', 2, 1, 1, 1, 3, 3, 'Pending', '2024-11-23 10:30:00'),
(9, 'Acute Stress Disorder', 'Short-term stress response following a traumatic experience.', 3, 1, 1, 1, 1, 2, 'Open', '2024-11-24 12:15:00'),
(10, 'Specific Phobia', 'Extreme fear of specific objects or situations causing avoidance behavior.', 1, 1, 1, 1, 2, 1, 'Open', '2024-11-25 04:00:00'),
(11, 'Dysthymia', 'Chronic low mood and mild depression lasting for years.', 2, 1, 1, 1, 3, 4, 'Pending', '2024-11-26 07:30:00'),
(12, 'Separation Anxiety', 'Excessive fear or distress about being apart from loved ones.', 3, 1, 1, 1, 1, 1, 'Open', '2024-11-27 09:00:00'),
(16, 'Substance Abuse', 'Dependence on a specific substance leading to daily functional issues.', 4, 2, 4, 1, 2, 3, 'Open', '2024-11-22 02:15:00'),
(17, 'Sleep Disorder', 'Difficulty initiating or maintaining sleep, causing daytime impairment.', 5, 3, 5, 1, 1, 2, 'Pending', '2024-11-23 04:30:00'),
(18, 'Eating Disorder', 'Extreme concern with body weight and unhealthy eating behaviors.', 6, 4, 6, 1, 3, 4, 'Open', '2024-11-24 06:45:00'),
(19, 'Panic Disorder', 'Sudden and repeated attacks of intense fear or discomfort.', 4, 1, 4, 1, 1, 2, 'Open', '2024-01-15 01:00:00'),
(20, 'Obsessive-Compulsive Disorder', 'Recurring unwanted thoughts and repetitive behaviors.', 5, 2, 5, 1, 2, 3, 'Pending', '2024-02-10 06:30:00'),
(21, 'Post-Traumatic Stress Disorder', 'Severe anxiety caused by exposure to a traumatic event.', 6, 3, 6, 1, 3, 4, 'Open', '2024-03-20 00:45:00'),
(22, 'Bipolar Disorder', 'Mood swings that range from depressive lows to manic highs.', 4, 2, 4, 1, 2, 3, '', '2024-04-25 03:15:00'),
(23, 'Social Anxiety', 'Intense fear of social interactions or being judged by others.', 5, 3, 5, 1, 1, 2, 'Open', '2024-05-18 05:00:00'),
(24, 'Borderline Personality Disorder', 'Intense emotional instability and difficulty in relationships.', 6, 4, 6, 1, 3, 4, 'Pending', '2024-06-30 02:30:00'),
(25, 'Schizophrenia', 'Distorted thinking, perception, and emotions.', 4, 1, 4, 1, 2, 3, 'Open', '2024-07-04 23:45:00'),
(26, 'Panic Disorder', 'Repeated and unexpected panic attacks.', 5, 2, 5, 1, 1, 2, '', '2024-08-12 07:20:00'),
(27, 'Generalized Anxiety Disorder', 'Excessive worry about everyday things.', 6, 3, 6, 1, 3, 4, 'Open', '2024-09-18 08:10:00'),
(28, 'Depression', 'Persistent sadness and lack of interest in activities.', 4, 2, 4, 1, 2, 3, 'Open', '2024-10-22 09:45:00'),
(29, 'Seasonal Affective Disorder', 'Depression occurring at the same time each year.', 5, 3, 5, 1, 1, 2, 'Pending', '2024-11-02 11:30:00'),
(30, 'Panic Disorder', 'Sudden and repeated attacks of intense fear or discomfort.', 4, 1, 4, 1, 1, 2, 'Open', '2024-01-15 01:00:00'),
(31, 'Obsessive-Compulsive Disorder', 'Recurring unwanted thoughts and repetitive behaviors.', 5, 2, 5, 1, 2, 3, 'Pending', '2024-02-10 06:30:00'),
(32, 'Post-Traumatic Stress Disorder', 'Severe anxiety caused by exposure to a traumatic event.', 6, 3, 6, 1, 3, 4, 'Open', '2024-03-20 00:45:00'),
(33, 'Bipolar Disorder', 'Mood swings that range from depressive lows to manic highs.', 4, 2, 4, 1, 2, 3, '', '2024-04-25 03:15:00'),
(34, 'Social Anxiety', 'Intense fear of social interactions or being judged by others.', 5, 3, 5, 1, 1, 2, 'Open', '2024-05-18 05:00:00'),
(35, 'Borderline Personality Disorder', 'Intense emotional instability and difficulty in relationships.', 6, 4, 6, 1, 3, 4, 'Pending', '2024-06-30 02:30:00'),
(36, 'Schizophrenia', 'Distorted thinking, perception, and emotions.', 4, 1, 4, 1, 2, 3, 'Open', '2024-07-04 23:45:00'),
(37, 'Panic Disorder', 'Repeated and unexpected panic attacks.', 5, 2, 5, 1, 1, 2, '', '2024-08-12 07:20:00'),
(38, 'Generalized Anxiety Disorder', 'Excessive worry about everyday things.', 6, 3, 6, 1, 3, 4, 'Open', '2024-09-18 08:10:00'),
(39, 'Depression', 'Persistent sadness and lack of interest in activities.', 4, 2, 4, 1, 2, 3, 'Open', '2024-10-22 09:45:00'),
(40, 'Seasonal Affective Disorder', 'Depression occurring at the same time each year.', 5, 3, 5, 1, 1, 2, 'Pending', '2024-11-02 11:30:00'),
(41, 'Adjustment Disorder', 'Emotional or behavioral symptoms in response to a stressful event.', 4, 1, 4, 1, 1, 2, 'Open', '2024-01-25 02:15:00'),
(42, 'Acute Stress Reaction', 'A temporary reaction to an overwhelming stressful situation.', 5, 2, 5, 1, 2, 3, '', '2024-01-29 03:20:00'),
(43, 'Phobia', 'Intense fear triggered by specific objects or situations.', 6, 3, 6, 1, 3, 4, 'Pending', '2024-02-07 00:30:00'),
(44, 'Hoarding Disorder', 'Difficulty discarding possessions, regardless of value.', 4, 2, 4, 1, 1, 2, 'Open', '2024-02-28 01:45:00'),
(45, 'Acute Psychosis', 'A severe episode of distorted reality and hallucinations.', 5, 3, 5, 1, 2, 3, 'Open', '2024-03-11 04:10:00'),
(46, 'Separation Anxiety', 'Excessive fear of separation from loved ones.', 6, 4, 6, 1, 3, 4, '', '2024-03-22 06:35:00'),
(47, 'Somatic Symptom Disorder', 'Preoccupation with physical symptoms causing significant distress.', 4, 1, 4, 1, 1, 2, 'Pending', '2024-04-05 07:25:00'),
(48, 'Postpartum Depression', 'Severe mood swings after childbirth.', 5, 2, 5, 1, 2, 3, 'Open', '2024-04-18 08:50:00'),
(49, 'Dissociative Identity Disorder', 'Presence of two or more distinct personality states.', 6, 3, 6, 1, 3, 4, '', '2024-05-09 09:15:00'),
(50, 'Hypochondria', 'Excessive worry about having a serious illness.', 4, 2, 4, 1, 1, 2, 'Pending', '2024-05-28 10:30:00'),
(51, 'Panic Disorder', 'Recurring unexpected episodes of intense fear.', 5, 3, 5, 1, 2, 3, 'Open', '2024-06-14 01:20:00'),
(52, 'Body Dysmorphic Disorder', 'Obsessive focus on a perceived flaw in appearance.', 6, 4, 6, 1, 3, 4, '', '2024-06-25 03:45:00'),
(53, 'Chronic Insomnia', 'Difficulty sleeping for three or more months.', 4, 1, 4, 1, 1, 2, 'Open', '2024-07-08 04:30:00'),
(54, 'Mood Disorder', 'Significant changes in mood that impair daily life.', 5, 2, 5, 1, 2, 3, 'Pending', '2024-07-20 06:50:00'),
(55, 'Complicated Grief', 'Intense and prolonged mourning of a loss.', 6, 3, 6, 1, 3, 4, 'Open', '2024-08-05 07:30:00'),
(56, 'Selective Mutism', 'Inability to speak in specific social situations.', 4, 2, 4, 1, 1, 2, '', '2024-08-15 08:10:00'),
(57, 'Paranoia', 'Persistent mistrust and suspicion of others.', 5, 3, 5, 1, 2, 3, 'Open', '2024-09-11 10:20:00'),
(58, 'Derealization', 'Feelings of detachment from one’s surroundings.', 6, 4, 6, 1, 3, 4, 'Pending', '2024-09-27 11:40:00'),
(59, 'Conversion Disorder', 'Neurological symptoms that cannot be medically explained.', 4, 1, 4, 1, 1, 2, 'Open', '2024-10-03 12:10:00'),
(60, 'Intermittent Explosive Disorder', 'Recurrent outbursts of aggression.', 5, 2, 5, 1, 2, 3, 'Pending', '2024-10-16 14:00:00'),
(61, 'Seasonal Depression', 'Mood changes associated with seasonal patterns.', 6, 3, 6, 1, 3, 4, 'Open', '2024-11-06 23:00:00'),
(62, 'Obsessive Thoughts', 'Repetitive and intrusive distressing thoughts.', 4, 2, 4, 1, 1, 2, '', '2024-11-15 01:20:00'),
(63, 'Emotional Stress', 'Due to excessive using phone, family problem, and finincial problem', 22, 2, 4, 1, 1, 1, 'Open', '2024-11-21 12:43:48'),
(64, 'Emotional Stress', 'Due to excessive using phone, family problem, and finincial problem', 23, 2, 4, 1, 1, 1, 'Open', '2024-11-21 12:54:12'),
(65, 'Emotional Stress', 'Due to excessive using phone, family problem, and finincial problem', 24, 1, 1, 1, 1, 1, 'Open', '2024-11-21 12:58:40'),
(66, 'Emotional Stress', 'Due to excessive using phone, family problem, and finincial problem', 25, 1, 1, 1, 1, 2, 'Open', '2024-11-21 13:02:15'),
(67, 'Emotional Stress', 'Due to excessive using phone, family problem, and finincial problem', 26, 2, 4, 1, 1, 1, 'Open', '2024-11-21 13:05:35'),
(68, 'Emotional Stress', 'Due to excessive using phone, family problem, and finincial problem', 27, 4, 6, 1, 1, 3, 'Open', '2024-11-21 15:12:02'),
(69, 'Emotional Stress', 'Due to excessive using phone, family problem, and finincial problem', 28, 3, 5, 1, 2, 2, 'Open', '2024-11-21 22:48:21');

--
-- Triggers `mental_health_case`
--
DELIMITER $$
CREATE TRIGGER `after_insert_case` AFTER INSERT ON `mental_health_case` FOR EACH ROW BEGIN
    -- Log the insertion in the resources table for tracking
    INSERT INTO resources (name, type, address, created_at)
    VALUES (CONCAT('Auto Resource for Case ', NEW.case_id), 'Case Log', 'Auto-generated', NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `permission_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `can_read` tinyint(1) DEFAULT 0,
  `can_write` tinyint(1) DEFAULT 0,
  `can_execute` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`permission_id`, `title`, `can_read`, `can_write`, `can_execute`) VALUES
(1, 'View', 1, 0, 0),
(2, 'Edit', 1, 1, 0),
(3, 'Manage', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(11) NOT NULL,
  `program_title` varchar(255) NOT NULL,
  `program_description` text DEFAULT NULL,
  `barangay_id` int(11) NOT NULL,
  `date_held` date NOT NULL,
  `participants_number` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `programs`
--
DELIMITER $$
CREATE TRIGGER `before_insert_program` BEFORE INSERT ON `programs` FOR EACH ROW BEGIN
    IF NEW.participants_number < 0 THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Participants number must be a positive value';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `purok`
--

CREATE TABLE `purok` (
  `purok_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `purok_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purok`
--

INSERT INTO `purok` (`purok_id`, `barangay_id`, `purok_name`) VALUES
(1, 1, 'Purok-2A'),
(4, 2, 'Purok 4'),
(5, 3, 'Purok 5'),
(6, 4, 'Purok 6');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resource_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resource_id`, `name`, `type`, `address`, `contact_name`, `contact_number`, `created_at`) VALUES
(1, 'Auto Resource for Case 1', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 13:11:44'),
(2, 'Auto Resource for Case 2', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 13:11:44'),
(3, 'Auto Resource for Case 3', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:11:01'),
(4, 'Auto Resource for Case 4', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:11:01'),
(5, 'Auto Resource for Case 5', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:11:01'),
(6, 'Auto Resource for Case 6', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:11:01'),
(7, 'Auto Resource for Case 7', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:11:01'),
(8, 'Auto Resource for Case 8', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:11:01'),
(9, 'Auto Resource for Case 9', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:11:01'),
(10, 'Auto Resource for Case 10', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:11:01'),
(11, 'Auto Resource for Case 11', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:11:01'),
(12, 'Auto Resource for Case 12', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:11:01'),
(14, 'Auto Resource for Case 16', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:39:41'),
(15, 'Auto Resource for Case 17', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:39:41'),
(16, 'Auto Resource for Case 18', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:39:41'),
(17, 'Auto Resource for Case 19', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(18, 'Auto Resource for Case 20', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(19, 'Auto Resource for Case 21', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(20, 'Auto Resource for Case 22', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(21, 'Auto Resource for Case 23', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(22, 'Auto Resource for Case 24', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(23, 'Auto Resource for Case 25', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(24, 'Auto Resource for Case 26', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(25, 'Auto Resource for Case 27', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(26, 'Auto Resource for Case 28', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(27, 'Auto Resource for Case 29', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(28, 'Auto Resource for Case 30', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(29, 'Auto Resource for Case 31', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(30, 'Auto Resource for Case 32', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(31, 'Auto Resource for Case 33', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(32, 'Auto Resource for Case 34', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(33, 'Auto Resource for Case 35', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(34, 'Auto Resource for Case 36', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(35, 'Auto Resource for Case 37', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(36, 'Auto Resource for Case 38', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(37, 'Auto Resource for Case 39', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(38, 'Auto Resource for Case 40', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:41:49'),
(39, 'Auto Resource for Case 41', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(40, 'Auto Resource for Case 42', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(41, 'Auto Resource for Case 43', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(42, 'Auto Resource for Case 44', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(43, 'Auto Resource for Case 45', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(44, 'Auto Resource for Case 46', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(45, 'Auto Resource for Case 47', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(46, 'Auto Resource for Case 48', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(47, 'Auto Resource for Case 49', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(48, 'Auto Resource for Case 50', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(49, 'Auto Resource for Case 51', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(50, 'Auto Resource for Case 52', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(51, 'Auto Resource for Case 53', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(52, 'Auto Resource for Case 54', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(53, 'Auto Resource for Case 55', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(54, 'Auto Resource for Case 56', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(55, 'Auto Resource for Case 57', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(56, 'Auto Resource for Case 58', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(57, 'Auto Resource for Case 59', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(58, 'Auto Resource for Case 60', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(59, 'Auto Resource for Case 61', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(60, 'Auto Resource for Case 62', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-20 23:54:17'),
(61, 'Permission Assigned: Role ID 1', 'Permission Log', 'Auto-generated', NULL, NULL, '2024-11-21 02:01:34'),
(62, 'Permission Assigned: Role ID 1', 'Permission Log', 'Auto-generated', NULL, NULL, '2024-11-21 02:01:34'),
(63, 'Permission Assigned: Role ID 2', 'Permission Log', 'Auto-generated', NULL, NULL, '2024-11-21 02:01:34'),
(64, 'Permission Assigned: Role ID 2', 'Permission Log', 'Auto-generated', NULL, NULL, '2024-11-21 02:01:34'),
(65, 'Permission Assigned: Role ID 3', 'Permission Log', 'Auto-generated', NULL, NULL, '2024-11-21 02:01:34'),
(66, 'Auto Resource for Case 63', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-21 12:43:48'),
(67, 'Auto Resource for Case 64', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-21 12:54:12'),
(68, 'Auto Resource for Case 65', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-21 12:58:40'),
(69, 'Auto Resource for Case 66', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-21 13:02:15'),
(70, 'Auto Resource for Case 67', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-21 13:05:35'),
(71, 'Auto Resource for Case 68', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-21 15:12:02'),
(72, 'Auto Resource for Case 69', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-21 22:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Officer1'),
(2, 'Officer2'),
(3, 'Administrator'),
(4, 'Counselor'),
(5, 'Case Manager');

-- --------------------------------------------------------

--
-- Table structure for table `role_permission`
--

CREATE TABLE `role_permission` (
  `role_permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role_permission`
--

INSERT INTO `role_permission` (`role_permission_id`, `role_id`, `permission_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 3, 3);

--
-- Triggers `role_permission`
--
DELIMITER $$
CREATE TRIGGER `after_insert_role_permission` AFTER INSERT ON `role_permission` FOR EACH ROW BEGIN
    INSERT INTO resources (name, type, address, created_at)
    VALUES (CONCAT('Permission Assigned: Role ID ', NEW.role_id), 'Permission Log', 'Auto-generated', NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `middle_name`, `last_name`, `sex`, `email`, `address`, `birthday`, `id_number`, `role_id`, `department_id`, `created_at`) VALUES
(1, 'Ric Charles', 'Lucar', 'Paquibot', 'Male', 'admin@admin.com', 'Purok-2A, Ampayon Butuan City', '2014-11-10', '2020-1197', 3, 1, '2024-11-17 18:16:01');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `before_insert_user` BEFORE INSERT ON `user` FOR EACH ROW BEGIN
    IF NEW.email IS NULL OR NEW.email = '' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Email cannot be NULL or empty';
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `case_category`
--
ALTER TABLE `case_category`
  ADD PRIMARY KEY (`case_category_id`);

--
-- Indexes for table `case_resource_utilization`
--
ALTER TABLE `case_resource_utilization`
  ADD PRIMARY KEY (`utilization_id`),
  ADD KEY `case_id` (`case_id`),
  ADD KEY `resource_id` (`resource_id`);

--
-- Indexes for table `case_severity`
--
ALTER TABLE `case_severity`
  ADD PRIMARY KEY (`case_severity_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `mental_health_case`
--
ALTER TABLE `mental_health_case`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `barangay_id` (`barangay_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `case_severity_id` (`case_severity_id`),
  ADD KEY `purok_id` (`purok_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `case_category_id` (`case_category_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `purok`
--
ALTER TABLE `purok`
  ADD PRIMARY KEY (`purok_id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resource_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`role_permission_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id_number` (`id_number`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `case_category`
--
ALTER TABLE `case_category`
  MODIFY `case_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_resource_utilization`
--
ALTER TABLE `case_resource_utilization`
  MODIFY `utilization_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_severity`
--
ALTER TABLE `case_severity`
  MODIFY `case_severity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mental_health_case`
--
ALTER TABLE `mental_health_case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purok`
--
ALTER TABLE `purok`
  MODIFY `purok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_permission`
--
ALTER TABLE `role_permission`
  MODIFY `role_permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `case_resource_utilization`
--
ALTER TABLE `case_resource_utilization`
  ADD CONSTRAINT `case_resource_utilization_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `mental_health_case` (`case_id`),
  ADD CONSTRAINT `case_resource_utilization_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`resource_id`);

--
-- Constraints for table `mental_health_case`
--
ALTER TABLE `mental_health_case`
  ADD CONSTRAINT `mental_health_case_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`),
  ADD CONSTRAINT `mental_health_case_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `mental_health_case_ibfk_3` FOREIGN KEY (`case_severity_id`) REFERENCES `case_severity` (`case_severity_id`),
  ADD CONSTRAINT `mental_health_case_ibfk_4` FOREIGN KEY (`purok_id`) REFERENCES `purok` (`purok_id`),
  ADD CONSTRAINT `mental_health_case_ibfk_5` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `mental_health_case_ibfk_6` FOREIGN KEY (`case_category_id`) REFERENCES `case_category` (`case_category_id`);

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`);

--
-- Constraints for table `purok`
--
ALTER TABLE `purok`
  ADD CONSTRAINT `purok_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`);

--
-- Constraints for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD CONSTRAINT `role_permission_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  ADD CONSTRAINT `role_permission_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`permission_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
