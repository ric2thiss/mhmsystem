-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 03:29 AM
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
(1, 'Ambago', 'Butuan City', 'Caraga'),
(2, 'Amparo', 'Butuan City', 'Caraga'),
(3, 'Ampayon', 'Butuan City', 'Caraga'),
(4, 'Baan Riverside', 'Butuan City', 'Caraga'),
(5, 'Bading', 'Butuan City', 'Caraga'),
(6, 'Bancasi', 'Butuan City', 'Caraga'),
(7, 'Baobaoan', 'Butuan City', 'Caraga'),
(8, 'Bitan-agan', 'Butuan City', 'Caraga'),
(9, 'Bonbon', 'Butuan City', 'Caraga'),
(10, 'Bugabos', 'Butuan City', 'Caraga'),
(11, 'Cabcabon', 'Butuan City', 'Caraga'),
(12, 'Camayahan', 'Butuan City', 'Caraga'),
(13, 'De Oro', 'Butuan City', 'Caraga'),
(14, 'Dulag', 'Butuan City', 'Caraga'),
(15, 'Florida', 'Butuan City', 'Caraga'),
(16, 'Golden Ribbon', 'Butuan City', 'Caraga'),
(17, 'Holy Redeemer', 'Butuan City', 'Caraga'),
(18, 'Humabon', 'Butuan City', 'Caraga'),
(19, 'Imadejas', 'Butuan City', 'Caraga'),
(20, 'Kinamlutan', 'Butuan City', 'Caraga'),
(21, 'Lapu-Lapu', 'Butuan City', 'Caraga'),
(22, 'Lemon', 'Butuan City', 'Caraga'),
(23, 'Libertad', 'Butuan City', 'Caraga'),
(24, 'Limaha', 'Butuan City', 'Caraga'),
(25, 'Los Angeles', 'Butuan City', 'Caraga'),
(26, 'Lumbocan', 'Butuan City', 'Caraga'),
(27, 'Mahogany', 'Butuan City', 'Caraga'),
(28, 'Mahay', 'Butuan City', 'Caraga'),
(29, 'Maidang', 'Butuan City', 'Caraga'),
(30, 'Mandamo', 'Butuan City', 'Caraga'),
(31, 'Masao', 'Butuan City', 'Caraga'),
(32, 'Maug', 'Butuan City', 'Caraga'),
(33, 'New Society Village', 'Butuan City', 'Caraga'),
(34, 'Nongnong', 'Butuan City', 'Caraga'),
(35, 'Obrero', 'Butuan City', 'Caraga'),
(36, 'Ong Yiu', 'Butuan City', 'Caraga'),
(37, 'Pagatpatan', 'Butuan City', 'Caraga'),
(38, 'Pangabugan', 'Butuan City', 'Caraga'),
(39, 'Pianing', 'Butuan City', 'Caraga'),
(40, 'Pinamanculan', 'Butuan City', 'Caraga'),
(41, 'Port Poyohon', 'Butuan City', 'Caraga'),
(42, 'Quezon', 'Butuan City', 'Caraga'),
(43, 'San Ignacio', 'Butuan City', 'Caraga'),
(44, 'San Mateo', 'Butuan City', 'Caraga'),
(45, 'San Vicente', 'Butuan City', 'Caraga'),
(46, 'Santo Niño', 'Butuan City', 'Caraga'),
(47, 'Sikatuna', 'Butuan City', 'Caraga'),
(48, 'Silongan', 'Butuan City', 'Caraga'),
(49, 'Sumile', 'Butuan City', 'Caraga'),
(50, 'Tagabaca', 'Butuan City', 'Caraga'),
(51, 'Taguibo', 'Butuan City', 'Caraga'),
(52, 'Taligaman', 'Butuan City', 'Caraga'),
(53, 'Tandang Sora', 'Butuan City', 'Caraga'),
(54, 'Tiniwisan', 'Butuan City', 'Caraga'),
(55, 'Tungao', 'Butuan City', 'Caraga'),
(56, 'Villa Kananga', 'Butuan City', 'Caraga'),
(57, 'Villa Matilde', 'Butuan City', 'Caraga'),
(58, 'Zamora', 'Butuan City', 'Caraga'),
(59, 'Doongan', 'Butuan City', 'Caraga'),
(60, 'Jose Rizal', 'Butuan City', 'Caraga'),
(61, 'Poblacion', 'Butuan City', 'Caraga'),
(62, 'Diego Silang', 'Butuan City', 'Caraga'),
(63, 'Agusan Pequeño', 'Butuan City', 'Caraga'),
(64, 'Agusan Gida', 'Butuan City', 'Caraga'),
(65, 'Buliok', 'Butuan City', 'Caraga'),
(66, 'Kalawitan', 'Butuan City', 'Caraga'),
(67, 'Camaligan', 'Butuan City', 'Caraga'),
(68, 'Riverside', 'Butuan City', 'Caraga'),
(69, 'Cabayan', 'Butuan City', 'Caraga'),
(70, 'Tiniwisan', 'Butuan City', 'Caraga'),
(71, 'Balulang', 'Butuan City', 'Caraga'),
(72, 'Kinawisan', 'Butuan City', 'Caraga'),
(73, 'Matabao', 'Butuan City', 'Caraga'),
(74, 'Roxas', 'Butuan City', 'Caraga'),
(75, 'Laurel', 'Butuan City', 'Caraga'),
(76, 'Tagapua', 'Butuan City', 'Caraga'),
(77, 'Dagohoy', 'Butuan City', 'Caraga'),
(78, 'Dagani', 'Butuan City', 'Caraga'),
(79, 'Villa Bernadette', 'Butuan City', 'Caraga'),
(80, 'Cabawan', 'Butuan City', 'Caraga'),
(81, 'Tabon-tabon', 'Butuan City', 'Caraga'),
(82, 'Carmen', 'Butuan City', 'Caraga'),
(83, 'Bagong Silang', 'Butuan City', 'Caraga'),
(84, 'Buenavista', 'Butuan City', 'Caraga'),
(85, 'Marcos', 'Butuan City', 'Caraga'),
(86, 'Mabuhay', 'Butuan City', 'Caraga');

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
(1, 'Department1', 'Company1'),
(2, 'Mental Health', 'Health Department'),
(3, 'Social Work', 'Community Services');

-- --------------------------------------------------------

--
-- Table structure for table `mental_health_case`
--

CREATE TABLE `mental_health_case` (
  `case_id` int(11) NOT NULL,
  `case_title` varchar(255) NOT NULL,
  `case_description` text NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `purok_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `case_severity_id` int(11) NOT NULL,
  `status` enum('Open','Closed','Pending') DEFAULT 'Open',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mental_health_case`
--

INSERT INTO `mental_health_case` (`case_id`, `case_title`, `case_description`, `barangay_id`, `purok_id`, `user_id`, `case_severity_id`, `status`, `created_at`) VALUES
(1, 'Anxiety Disorder', 'A case of severe anxiety attacks', 1, 0, 1, 2, 'Open', '2024-11-19 07:32:50'),
(2, 'Depression', 'Symptoms of major depression observed', 2, 0, 1, 3, 'Pending', '2024-11-19 07:32:50'),
(3, 'Psychosis', 'Delusions and hallucinations reported', 3, 0, 1, 4, 'Closed', '2024-11-19 07:32:50'),
(4, 'PTSD', 'Post-traumatic stress disorder symptoms', 1, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(5, 'OCD', 'Obsessive-compulsive disorder symptoms', 2, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(6, 'Bipolar Disorder', 'Bipolar disorder symptoms observed', 3, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(7, 'Panic Attacks', 'Recurring panic attacks reported', 4, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(8, 'Insomnia', 'Chronic insomnia reported', 5, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(9, 'Eating Disorder', 'Symptoms of eating disorder observed', 1, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(10, 'Generalized Anxiety Disorder', 'Symptoms of GAD observed', 2, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(11, 'Schizophrenia', 'Signs of schizophrenia reported', 3, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(12, 'Adjustment Disorder', 'Symptoms of adjustment disorder', 4, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(13, 'OCD with Compulsions', 'Obsessions and compulsions reported', 5, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(14, 'Depressive Episode', 'Depressive episode symptoms', 1, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(15, 'Panic Disorder with Agoraphobia', 'Symptoms of panic disorder and agoraphobia', 2, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(16, 'Bipolar Disorder Type II', 'Symptoms of bipolar disorder type II', 3, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(17, 'Social Anxiety Disorder', 'Symptoms of social anxiety', 4, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(18, 'Eating Disorder - Binge Eating', 'Episodes of binge eating observed', 5, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(19, 'Insomnia with Sleep Apnea', 'Insomnia and sleep apnea symptoms', 1, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(20, 'Postpartum Depression', 'Symptoms of postpartum depression observed', 2, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(21, 'Seasonal Affective Disorder', 'Symptoms of SAD observed', 3, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(22, 'Obsessive Compulsive Personality Disorder', 'OCPD symptoms', 4, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(23, 'Panic Attacks at Night', 'Night panic attacks reported', 5, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(24, 'Dissociative Identity Disorder', 'Symptoms of DID observed', 1, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(25, 'Bipolar Disorder Type I', 'Bipolar disorder type I symptoms', 2, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(26, 'Adjustment Disorder with Anxiety', 'Symptoms of anxiety related to adjustment disorder', 3, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(27, 'Generalized Anxiety Disorder with Agoraphobia', 'Symptoms of GAD and agoraphobia', 4, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(28, 'Eating Disorder - Anorexia', 'Symptoms of anorexia nervosa', 5, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(29, 'Bipolar Disorder Rapid Cycling', 'Rapid cycling bipolar disorder', 1, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(30, 'Insomnia with Nightmares', 'Insomnia combined with nightmares', 2, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(31, 'Postpartum Anxiety', 'Anxiety symptoms postpartum', 3, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(32, 'Social Anxiety Disorder with Avoidance', 'Avoidance symptoms of social anxiety', 4, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(33, 'Psychiatric Disorder NOS', 'Symptoms of psychiatric disorder not otherwise specified', 5, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(34, 'Mood Disorder NOS', 'Mood disorder symptoms not otherwise specified', 1, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(35, 'Adjustment Disorder with Depression', 'Symptoms of depression due to adjustment disorder', 2, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(36, 'Insomnia with Depression', 'Insomnia combined with depression symptoms', 3, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(37, 'Bipolar Depression', 'Symptoms of bipolar depression', 4, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(38, 'Eating Disorder - Bulimia', 'Symptoms of bulimia nervosa', 5, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(39, 'Generalized Anxiety Disorder with PTSD', 'GAD symptoms with PTSD', 1, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(40, 'Panic Disorder Only', 'Panic disorder symptoms only', 2, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(41, 'Postpartum Psychosis', 'Psychosis symptoms postpartum', 3, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(42, 'Insomnia with Night Sweats', 'Insomnia and night sweats symptoms', 4, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(43, 'Bipolar with Rapid Cycling and Psychosis', 'Rapid cycling and psychosis symptoms of bipolar disorder', 5, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(44, 'Seasonal Affective Disorder with Anxiety', 'Symptoms of SAD and anxiety', 1, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(45, 'Adjustment Disorder with Panic Attacks', 'Panic attacks due to adjustment disorder', 2, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(46, 'Postpartum Anxiety with Panic Attacks', 'Postpartum panic attacks with anxiety', 3, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(47, 'Dissociative Disorder NOS', 'Symptoms of dissociative disorder not otherwise specified', 4, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(48, 'Mood Disorder with Anxiety', 'Mood disorder combined with anxiety symptoms', 5, 0, 1, 4, 'Closed', '2024-11-19 09:48:17'),
(49, 'Eating Disorder with OCD', 'Symptoms of eating disorder and OCD', 1, 0, 1, 2, 'Open', '2024-11-19 09:48:17'),
(50, 'Adjustment Disorder with Psychosis', 'Psychosis symptoms related to adjustment disorder', 2, 0, 1, 3, 'Pending', '2024-11-19 09:48:17'),
(51, 'Borderline Personality Disorder', 'Symptoms of borderline personality disorder', 1, 0, 1, 2, 'Open', '2024-03-05 04:45:00'),
(52, 'Schizoaffective Disorder', 'Symptoms of schizoaffective disorder', 2, 0, 1, 3, 'Pending', '2024-04-10 00:30:00'),
(53, 'Narcolepsy', 'Episodes of extreme drowsiness and sudden sleep attacks', 3, 0, 1, 4, 'Closed', '2024-05-01 02:15:00'),
(54, 'Psychotic Depression', 'Depression with psychotic features', 4, 0, 1, 2, 'Open', '2024-06-15 08:50:00'),
(55, 'Anorexia Nervosa', 'Severe restriction of food intake and extreme weight loss', 5, 0, 1, 3, 'Pending', '2024-07-25 03:20:00'),
(56, 'Chronic Stress', 'Chronic stress and its impact on mental health', 1, 0, 1, 4, 'Closed', '2024-08-10 06:05:00'),
(57, 'Fetal Alcohol Syndrome', 'Symptoms related to fetal alcohol syndrome', 2, 0, 1, 2, 'Open', '2024-01-15 01:00:00'),
(58, 'Drug-induced Psychosis', 'Psychosis caused by prolonged drug use', 3, 0, 1, 3, 'Pending', '2024-02-05 10:35:00'),
(59, 'Selective Mutism', 'A disorder where an individual is unable to speak in certain social situations', 4, 0, 1, 4, 'Closed', '2024-03-18 05:25:00'),
(60, 'Agoraphobia', 'Fear of situations where escape is difficult or help unavailable', 5, 0, 1, 2, 'Open', '2024-04-20 09:40:00'),
(61, 'Cyclothymic Disorder', 'Hypomanic and depressive episodes not severe enough for bipolar diagnosis', 1, 0, 1, 3, 'Pending', '2024-05-30 04:00:00'),
(62, 'Sleep Paralysis', 'Episodes of being unable to move upon waking or falling asleep', 2, 0, 1, 4, 'Closed', '2024-06-07 23:30:00'),
(63, 'Hoarding Disorder', 'Difficulty discarding or parting with possessions', 3, 0, 1, 2, 'Open', '2024-07-12 02:10:00'),
(64, 'Trichotillomania', 'Hair-pulling disorder', 4, 0, 1, 3, 'Pending', '2024-08-22 07:50:00'),
(65, 'Post-Traumatic Stress Disorder (Child)', 'PTSD symptoms in a child due to trauma', 5, 0, 1, 4, 'Closed', '2024-09-01 00:25:00'),
(66, 'Substance Use Disorder', 'Addiction or dependence on drugs or alcohol', 1, 0, 1, 2, 'Open', '2024-10-03 06:40:00'),
(67, 'Antisocial Personality Disorder', 'Persistent patterns of disregard for the rights of others', 2, 0, 1, 3, 'Pending', '2024-11-10 04:55:00'),
(68, 'Social Anxiety Disorder with Agoraphobia', 'Social anxiety disorder with elements of agoraphobia', 3, 0, 1, 4, 'Closed', '2024-12-10 08:20:00'),
(69, 'Impostor Syndrome', 'Feeling like a fraud or imposter despite evidence of success', 4, 0, 1, 2, 'Open', '2024-01-02 03:50:00'),
(70, 'Body Dysmorphic Disorder', 'Preoccupation with perceived flaws or defects in physical appearance', 5, 0, 1, 3, 'Pending', '2024-02-20 10:00:00'),
(71, 'Delusional Disorder', 'Presence of persistent delusions', 1, 0, 1, 4, 'Closed', '2024-03-07 04:30:00'),
(72, 'Conduct Disorder', 'Patterns of aggressive or antisocial behavior in children or adolescents', 2, 0, 1, 2, 'Open', '2024-04-12 01:45:00'),
(73, 'Cognitive Disorder', 'Issues with memory, learning, or problem-solving abilities', 3, 0, 1, 3, 'Pending', '2024-05-03 09:10:00'),
(74, 'Mental Retardation', 'Intellectual disability or developmental delay', 4, 0, 1, 4, 'Closed', '2024-06-21 08:00:00'),
(75, 'Personality Disorder NOS', 'Symptoms of a personality disorder not otherwise specified', 5, 0, 1, 2, 'Open', '2024-07-29 06:30:00'),
(76, 'Schizophrenia Spectrum', 'Conditions that involve delusions, hallucinations, or disorganized thinking', 1, 0, 1, 3, 'Pending', '2024-08-13 05:00:00'),
(77, 'Psychosomatic Disorder', 'Physical symptoms with no identifiable medical cause', 2, 0, 1, 4, 'Closed', '2024-09-14 07:35:00'),
(78, 'Generalized Anxiety with Depression', 'Combination of generalized anxiety and depression symptoms', 3, 0, 1, 2, 'Open', '2024-10-02 03:10:00'),
(79, 'Malingering', 'Deliberate exaggeration of symptoms for secondary gain', 4, 0, 1, 3, 'Pending', '2024-11-03 01:20:00'),
(80, 'Mental Exhaustion', 'Extreme tiredness caused by prolonged stress or mental strain', 5, 0, 1, 4, 'Closed', '2024-12-11 06:50:00'),
(81, 'Somatic Symptom Disorder', 'Excessive focus on physical symptoms causing distress', 1, 0, 1, 2, 'Open', '2024-01-17 00:40:00'),
(82, 'Post-Traumatic Growth', 'Positive psychological changes after experiencing trauma', 2, 0, 1, 3, 'Pending', '2024-02-08 05:55:00'),
(83, 'Insomnia with Anxiety', 'Difficulty sleeping due to anxiety symptoms', 3, 0, 1, 4, 'Closed', '2024-03-12 08:00:00'),
(84, 'Hyperactivity Disorder', 'Symptoms of excessive energy and impulsivity', 4, 0, 1, 2, 'Open', '2024-04-17 03:05:00'),
(85, 'Trauma Bonding', 'Strong emotional attachment to an abuser', 5, 0, 1, 3, 'Pending', '2024-05-23 02:45:00'),
(86, 'Self-harm', 'Deliberate injury to oneself without suicidal intent', 1, 0, 1, 4, 'Closed', '2024-06-30 01:30:00'),
(87, 'Psychotic Break', 'Sudden onset of psychotic symptoms', 2, 0, 1, 2, 'Open', '2024-07-05 09:30:00'),
(88, 'Chronic Fatigue Syndrome', 'Severe fatigue that is not relieved by sleep', 3, 0, 1, 3, 'Pending', '2024-08-08 06:20:00'),
(89, 'Obsessive Compulsive Spectrum', 'Range of compulsive disorders related to OCD', 4, 0, 1, 4, 'Closed', '2024-09-21 04:25:00'),
(90, 'Rational Delusions', 'False beliefs that are based on distorted reality', 5, 0, 1, 2, 'Open', '2024-10-15 08:50:00'),
(91, 'Phobias', 'Intense fear of specific objects or situations', 1, 0, 1, 3, 'Pending', '2024-11-18 06:10:00'),
(92, 'Personality Disorder with Narcissism', 'Exaggerated sense of self-importance and need for admiration', 2, 0, 1, 4, 'Closed', '2024-12-07 09:30:00'),
(93, 'Adjustment Disorder with Mood Symptoms', 'Adjustment disorder with mood disturbances', 3, 0, 1, 2, 'Open', '2024-01-25 04:30:00'),
(94, 'Psychological Trauma', 'Emotional and mental trauma due to significant stress', 4, 0, 1, 3, 'Pending', '2024-02-14 00:25:00'),
(95, 'Mood Disorder NOS', 'Symptoms of a mood disorder not specified', 5, 0, 1, 4, 'Closed', '2024-03-09 03:50:00'),
(96, 'Cognitive Impairment', 'Deterioration of cognitive functions like memory and attention', 1, 0, 1, 2, 'Open', '2024-04-23 07:00:00'),
(97, 'Fear of Failure', 'Paralyzing fear of failure and its consequences', 2, 0, 1, 3, 'Pending', '2024-05-18 05:40:00'),
(98, 'Eating Disorder NOS', 'Eating disorder symptoms that do not fit specific diagnoses', 3, 0, 1, 4, 'Closed', '2024-06-02 01:25:00'),
(99, 'Burnout Syndrome', 'State of physical and mental exhaustion caused by overwork', 4, 0, 1, 2, 'Open', '2024-07-01 04:15:00'),
(100, 'Psychosocial Stress', 'Stress due to environmental and social factors', 5, 0, 1, 3, 'Pending', '2024-08-19 08:45:00'),
(101, 'Obsessive Compulsive Disorder', 'Recurring obsessive thoughts and compulsive actions', 1, 0, 1, 2, 'Open', '2024-02-01 02:30:00'),
(102, 'Panic Disorder', 'Sudden and repeated episodes of intense fear', 2, 0, 1, 3, 'Pending', '2024-02-04 05:45:00'),
(103, 'Bipolar II Disorder', 'Recurrent depressive episodes with hypomanic episodes', 3, 0, 1, 4, 'Closed', '2024-02-08 07:00:00'),
(104, 'Hypochondriasis', 'Excessive fear of having a serious illness', 4, 0, 1, 2, 'Open', '2024-02-12 03:20:00'),
(105, 'Dissociative Identity Disorder', 'Presence of two or more distinct personality states', 5, 0, 1, 3, 'Pending', '2024-02-17 06:10:00'),
(106, 'Attention Deficit Hyperactivity Disorder', 'Excessive activity and inability to focus', 1, 0, 1, 4, 'Closed', '2024-02-21 01:00:00'),
(107, 'Postpartum Depression', 'Depression following childbirth', 2, 0, 1, 2, 'Open', '2024-02-26 02:40:00'),
(108, 'Sexual Dysfunction', 'Problems with sexual performance and desire', 3, 0, 1, 3, 'Pending', '2024-02-28 04:05:00'),
(109, 'Psychotic Spectrum Disorder', 'A range of conditions involving symptoms like delusions or hallucinations', 4, 0, 1, 4, 'Closed', '2024-02-15 09:15:00'),
(110, 'Complicated Grief', 'Grief that does not improve and worsens over time', 5, 0, 1, 2, 'Open', '2024-02-20 05:30:00'),
(111, 'Sexual Abuse Trauma', 'Emotional trauma from sexual abuse or assault', 1, 0, 1, 3, 'Pending', '2024-06-02 03:15:00'),
(112, 'Generalized Anxiety with Panic Attacks', 'General anxiety with intermittent panic attacks', 2, 0, 1, 4, 'Closed', '2024-06-04 06:25:00'),
(113, 'Suicidal Thoughts', 'Ongoing thoughts of self-harm and death', 3, 0, 1, 2, 'Open', '2024-06-06 04:30:00'),
(114, 'Bulimia Nervosa', 'Binge eating followed by purging behaviors', 4, 0, 1, 3, 'Pending', '2024-06-08 09:05:00'),
(115, 'Antisocial Personality Disorder', 'A disregard for others\' rights and social norms', 5, 0, 1, 4, 'Closed', '2024-06-11 05:50:00'),
(116, 'Mood Disorder', 'A general disturbance in mood leading to sadness or elevated mood', 1, 0, 1, 2, 'Open', '2024-06-13 02:00:00'),
(117, 'Delusional Disorder', 'Strong beliefs of something that is not true', 2, 0, 1, 3, 'Pending', '2024-06-16 04:00:00'),
(118, 'Seasonal Affective Disorder', 'Depression that occurs during certain seasons, usually winter', 3, 0, 1, 4, 'Closed', '2024-06-18 01:45:00'),
(119, 'Trigeminal Neuralgia', 'Severe facial pain often mistaken for other causes', 4, 0, 1, 2, 'Open', '2024-06-20 06:15:00'),
(120, 'Addiction to Gaming', 'Excessive video gaming impacting daily life and responsibilities', 5, 0, 1, 3, 'Pending', '2024-06-22 03:30:00');

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
(1, 'View Cases', 1, 0, 0),
(2, 'Edit Cases', 1, 1, 0),
(3, 'Manage Programs', 1, 1, 1);

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
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`program_id`, `program_title`, `program_description`, `barangay_id`, `date_held`, `participants_number`) VALUES
(1, 'Mental Health Awareness', 'Raising awareness about mental health', 1, '2024-11-10', 50),
(2, 'Stress Management Workshop', 'Teaching stress management techniques', 2, '2024-11-12', 30),
(3, 'Community Support Training', 'Training barangay leaders for community mental health support', 3, '2024-11-15', 40);

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
-- Table structure for table `purok_tbl`
--

CREATE TABLE `purok_tbl` (
  `purok_id` int(11) NOT NULL,
  `brgy_id` int(11) NOT NULL,
  `purok_name` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'Auto Resource for Case 1', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 07:32:50'),
(3, 'Auto Resource for Case 2', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 07:32:50'),
(4, 'Auto Resource for Case 3', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 07:32:50'),
(5, 'Permission Assigned: Role ID 1', 'Permission Log', 'Auto-generated', NULL, NULL, '2024-11-19 07:35:38'),
(6, 'Permission Assigned: Role ID 1', 'Permission Log', 'Auto-generated', NULL, NULL, '2024-11-19 07:35:38'),
(7, 'Permission Assigned: Role ID 2', 'Permission Log', 'Auto-generated', NULL, NULL, '2024-11-19 07:35:38'),
(8, 'Permission Assigned: Role ID 2', 'Permission Log', 'Auto-generated', NULL, NULL, '2024-11-19 07:35:38'),
(9, 'Permission Assigned: Role ID 3', 'Permission Log', 'Auto-generated', NULL, NULL, '2024-11-19 07:35:38'),
(10, 'Auto Resource for Case 4', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(11, 'Auto Resource for Case 5', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(12, 'Auto Resource for Case 6', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(13, 'Auto Resource for Case 7', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(14, 'Auto Resource for Case 8', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(15, 'Auto Resource for Case 9', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(16, 'Auto Resource for Case 10', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(17, 'Auto Resource for Case 11', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(18, 'Auto Resource for Case 12', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(19, 'Auto Resource for Case 13', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(20, 'Auto Resource for Case 14', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(21, 'Auto Resource for Case 15', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(22, 'Auto Resource for Case 16', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(23, 'Auto Resource for Case 17', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(24, 'Auto Resource for Case 18', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(25, 'Auto Resource for Case 19', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(26, 'Auto Resource for Case 20', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(27, 'Auto Resource for Case 21', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(28, 'Auto Resource for Case 22', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(29, 'Auto Resource for Case 23', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(30, 'Auto Resource for Case 24', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(31, 'Auto Resource for Case 25', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(32, 'Auto Resource for Case 26', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(33, 'Auto Resource for Case 27', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(34, 'Auto Resource for Case 28', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(35, 'Auto Resource for Case 29', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(36, 'Auto Resource for Case 30', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(37, 'Auto Resource for Case 31', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(38, 'Auto Resource for Case 32', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(39, 'Auto Resource for Case 33', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(40, 'Auto Resource for Case 34', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(41, 'Auto Resource for Case 35', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(42, 'Auto Resource for Case 36', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(43, 'Auto Resource for Case 37', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(44, 'Auto Resource for Case 38', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(45, 'Auto Resource for Case 39', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(46, 'Auto Resource for Case 40', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(47, 'Auto Resource for Case 41', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(48, 'Auto Resource for Case 42', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(49, 'Auto Resource for Case 43', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(50, 'Auto Resource for Case 44', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(51, 'Auto Resource for Case 45', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(52, 'Auto Resource for Case 46', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(53, 'Auto Resource for Case 47', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(54, 'Auto Resource for Case 48', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(55, 'Auto Resource for Case 49', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(56, 'Auto Resource for Case 50', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:48:17'),
(57, 'Auto Resource for Case 51', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(58, 'Auto Resource for Case 52', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(59, 'Auto Resource for Case 53', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(60, 'Auto Resource for Case 54', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(61, 'Auto Resource for Case 55', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(62, 'Auto Resource for Case 56', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(63, 'Auto Resource for Case 57', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(64, 'Auto Resource for Case 58', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(65, 'Auto Resource for Case 59', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(66, 'Auto Resource for Case 60', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(67, 'Auto Resource for Case 61', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(68, 'Auto Resource for Case 62', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(69, 'Auto Resource for Case 63', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(70, 'Auto Resource for Case 64', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(71, 'Auto Resource for Case 65', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(72, 'Auto Resource for Case 66', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(73, 'Auto Resource for Case 67', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(74, 'Auto Resource for Case 68', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(75, 'Auto Resource for Case 69', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(76, 'Auto Resource for Case 70', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(77, 'Auto Resource for Case 71', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(78, 'Auto Resource for Case 72', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(79, 'Auto Resource for Case 73', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(80, 'Auto Resource for Case 74', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(81, 'Auto Resource for Case 75', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(82, 'Auto Resource for Case 76', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(83, 'Auto Resource for Case 77', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(84, 'Auto Resource for Case 78', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(85, 'Auto Resource for Case 79', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(86, 'Auto Resource for Case 80', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(87, 'Auto Resource for Case 81', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(88, 'Auto Resource for Case 82', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(89, 'Auto Resource for Case 83', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(90, 'Auto Resource for Case 84', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(91, 'Auto Resource for Case 85', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(92, 'Auto Resource for Case 86', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(93, 'Auto Resource for Case 87', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(94, 'Auto Resource for Case 88', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(95, 'Auto Resource for Case 89', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(96, 'Auto Resource for Case 90', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(97, 'Auto Resource for Case 91', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(98, 'Auto Resource for Case 92', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(99, 'Auto Resource for Case 93', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 09:50:57'),
(100, 'Auto Resource for Case 94', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:37:31'),
(101, 'Auto Resource for Case 95', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:37:31'),
(102, 'Auto Resource for Case 96', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:37:31'),
(103, 'Auto Resource for Case 97', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:37:31'),
(104, 'Auto Resource for Case 98', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:37:31'),
(105, 'Auto Resource for Case 99', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:37:31'),
(106, 'Auto Resource for Case 100', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:37:31'),
(107, 'Auto Resource for Case 101', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(108, 'Auto Resource for Case 102', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(109, 'Auto Resource for Case 103', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(110, 'Auto Resource for Case 104', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(111, 'Auto Resource for Case 105', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(112, 'Auto Resource for Case 106', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(113, 'Auto Resource for Case 107', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(114, 'Auto Resource for Case 108', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(115, 'Auto Resource for Case 109', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(116, 'Auto Resource for Case 110', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(117, 'Auto Resource for Case 111', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(118, 'Auto Resource for Case 112', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(119, 'Auto Resource for Case 113', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(120, 'Auto Resource for Case 114', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(121, 'Auto Resource for Case 115', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(122, 'Auto Resource for Case 116', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(123, 'Auto Resource for Case 117', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(124, 'Auto Resource for Case 118', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(125, 'Auto Resource for Case 119', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45'),
(126, 'Auto Resource for Case 120', 'Case Log', 'Auto-generated', NULL, NULL, '2024-11-19 10:53:45');

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
(1, 'Ric Charles', 'Lucar', 'Paquibot', 'Male', 'admin@admin.com', 'Purok-2A, Ampayon Butuan City', '2014-11-10', '2020-1197', 1, 1, '2024-11-17 18:16:01');

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
  ADD KEY `purok_id` (`purok_id`);

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
-- Indexes for table `purok_tbl`
--
ALTER TABLE `purok_tbl`
  ADD PRIMARY KEY (`purok_id`);

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
  MODIFY `barangay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

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
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mental_health_case`
--
ALTER TABLE `mental_health_case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purok_tbl`
--
ALTER TABLE `purok_tbl`
  MODIFY `purok_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

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
  ADD CONSTRAINT `mental_health_case_ibfk_3` FOREIGN KEY (`case_severity_id`) REFERENCES `case_severity` (`case_severity_id`);

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`);

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
