-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 28, 2020 at 06:33 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `jobListing`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(4, 4, 'Realogy', 'Real Estate Agents – License Required at Realogy', 'Coldwell Banker NRT is seeking both new and experienced real estate agents who are looking to boost their career up a notch. We offer innovative tools and programs specifically designed to help you succeed in real estate, all in support of our Core 4 Values – Production Power, Coaching to Confidence, Wealth Builder and a Culture of Awesomeness.', '100K', 'Palm Beach Gardens, FL 33418', '', '', '2020-01-26 21:01:30'),
(5, 4, 'The Hartford ', 'Customer Service Representative', 'As a Customer Service Representative on the Group Benefits team, your primary role is to provide excellent customer service by answering customer questions about disability and leave management claims. In this role, you’ll help our customers rebuild their lives and get back to work as soon as reasonably possible after an unexpected event happens. The Hartford will provide you with 6 weeks of paid training, as well as ongoing coaching and development to ensure your success.', '8.50 hr', 'Plantation, FL', '', '', '2020-01-26 21:01:30'),
(6, 2, 'Odyssey Systems', 'IT System Administrator', 'RESPONSIBILITIES AND DUTIES\r\nThe candidate will be part of a small team responsible for management, administration, and support of a few hundred physical and virtual workstations, laptops, and servers in direct support of administrative and engineering staff. \r\nThe candidate should be an experienced IT professional who is comfortable with both Windows and Linux operating systems with an emphasis on Linux. In addition, the candidate should have a strong working knowledge of computer networks and experience with networking and security appliances. The candidate must be a motivated self-starter with a strong ability to quickly learn new technologies and techniques on the job. The candidate will be supporting end-users as well as building high-performance systems to support research and development projects.', '55k', 'Lexington, MA', 'example@example.com', 'example@example.com', '2020-01-27 13:17:45'),
(7, 2, 'Univar Solutions', 'Lead IT Auditor', 'The position is responsible for facilitating the organization’s global risk management approach by leading or participating in audit projects in support of the annual audit plan and management’s requests. The Lead Senior IT Auditor takes the lead in executing all phases (planning, fieldwork, reporting, and follow-up) of Univar’s Technology Audit projects, including SOX IT General Control audits.  Additionally, the Lead Senior IT Auditor participates in the execution of Univar’s SOX program.\r\n', '22hr', 'Downers Grove, IL 60515', 'example@example.com', 'example@example.com', '2020-01-27 13:17:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
