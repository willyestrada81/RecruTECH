

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Business '),
(2, 'Technology'),
(3, 'Retail'),
(4, 'Construction');



CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(4, 4, 'Realogy', 'Real Estate Agents – License Required at Realogy', 'Coldwell Banker NRT is seeking both new and experienced real estate agents who are looking to boost their career up a notch. We offer innovative tools and programs specifically designed to help you succeed in real estate, all in support of our Core 4 Values – Production Power, Coaching to Confidence, Wealth Builder and a Culture of Awesomeness.', '100K', 'Palm Beach Gardens, FL 33418', '', '', '2020-01-26 21:01:30'),
(5, 4, 'The Hartford ', 'Customer Service Representative', 'As a Customer Service Representative on the Group Benefits team, your primary role is to provide excellent customer service by answering customer questions about disability and leave management claims. In this role, you’ll help our customers rebuild their lives and get back to work as soon as reasonably possible after an unexpected event happens. The Hartford will provide you with 6 weeks of paid training, as well as ongoing coaching and development to ensure your success.', '8.50 hr', 'Plantation, FL', '', '', '2020-01-26 21:01:30'),
(6, 2, 'Odyssey Systems', 'IT System Administrator', 'RESPONSIBILITIES AND DUTIES\r\nThe candidate will be part of a small team responsible for management, administration, and support of a few hundred physical and virtual workstations, laptops, and servers in direct support of administrative and engineering staff. \r\nThe candidate should be an experienced IT professional who is comfortable with both Windows and Linux operating systems with an emphasis on Linux. In addition, the candidate should have a strong working knowledge of computer networks and experience with networking and security appliances. The candidate must be a motivated self-starter with a strong ability to quickly learn new technologies and techniques on the job. The candidate will be supporting end-users as well as building high-performance systems to support research and development projects.', '55k', 'Lexington, MA', 'example@example.com', 'example@example.com', '2020-01-27 13:17:45'),
(7, 2, 'Univar Solutions', 'Lead IT Auditor', 'The position is responsible for facilitating the organization’s global risk management approach by leading or participating in audit projects in support of the annual audit plan and management’s requests. The Lead Senior IT Auditor takes the lead in executing all phases (planning, fieldwork, reporting, and follow-up) of Univar’s Technology Audit projects, including SOX IT General Control audits.  Additionally, the Lead Senior IT Auditor participates in the execution of Univar’s SOX program.\r\n', '22hr', 'Downers Grove, IL 60515', 'example@example.com', 'example@example.com', '2020-01-27 13:17:45'),
(8, 4, '1-800-Plumber + Air Pacific NW ', 'Licensed Plumber', 'FAST CAREER GROWTH AND ADVANCEMENT OPPORTUNITY! \r\n      \r\n1-800-Plumber + Air Pacific NW is opening a locally owned and operated location in the Portland Region. We have an extensive client list and are seeking Oregon licensed journeymen plumbers to help us build a company known for excellent customer service. We care about our team and about creating a positive, friendly culture! If you are a growth minded person looking to help build something amazing from the ground up, we want to speak with you.  \r\n      \r\n Apply Today! Evening and weekend interviews available.', '$40 to $45 per hour', 'Portland, OR', 'Peter Smith', '1-800-Plumber@plumber.com', '2020-01-28 22:56:23'),
(9, 1, 'Cornerstone Healthcare Group ', 'Director of Business Development', 'The Director of Business Development manages the clinical liaisons and admissions personnel.  This position’s primary responsibility is the supervision of staff for the management of the patient intake process and the coordination of admissions.  This position’s primary objective is to assist the hospital in attaining its budgeted goals within the hospital’s patient service area by analyzing changes and making appropriate recommendations.\r\n\r\n \r\nMain goals are to increase referral volumes by cultivating relationships with key physicians, office staff, and hospital administrations, building physician to physician and physician to administration relationships, fostering relationships with providers, and improving awareness of hospital patient care services.', 'Based on Experience', 'Harlingen, TX', 'Andy Lopez', 'andylopez@company.com', '2020-01-28 22:59:01'),
(10, 3, 'GOODYEAR', 'Retail Development Specialist', 'Support our established customer’s retail efforts at the store level by helping the person behind the counter sell more tires\r\nExecute strategies for priority customers to improve the business performance of Goodyear products based upon specific market requirements and category plans.\r\nCustomers include a mix of corporate accounts, multi category retailers and car dealerships.\r\nConvey product, program and relevant marketing information and training support to the customer that will enable them to more effectively sell Goodyear products. Coordinate with other regional associates to maximize business opportunities.\r\nBecome the sales/business consultant of choice among customers in assigned territory.\r\nAchieve sales objective within the designated geographic territory.\r\nEvaluate and assess competitor products, position and price within stores. Assess the compliance and effective execution of Goodyear promotional programs.', '', 'Tampa, FL', 'GoodYear', 'goodyear@goodyear.com', '2020-01-29 00:11:34'),
(11, 2, 'Delaware North', 'IT Administrator', 'At Delaware North, you’ll love where you work, who you work with, and how your day unfolds. Whether it’s in sporting venues, casinos, airports, national parks, iconic hotels, or premier restaurants, there’s no telling where your career can ultimately take you. We empower you to do great work in a company with 100 years of success, stability and growth. If you have drive and enjoy the thrill of making things happen - share our vision, grow with us.\r\n\r\nDelaware North is one of the largest and most admired, privately-held hospitality companies in the world.  Founded and owned by the Jacobs family for nearly 100 years, it is a global leader in hospitality and food service with operations in the sports, travel hospitality, restaurants and catering, parks, resorts, gaming and specialty retail industries.  Delaware North has annual revenue exceeding $3 billion with 60,000 employee associates. To learn more, visit www.delawarenorth.com.', '120K', 'Atlanta, GA 30349', 'Ana Garcia', 'anagarcia@company.com', '2020-01-29 00:50:59'),
(12, 0, '', '', '', '', '', '', '', '2020-02-25 14:58:36'),
(13, 2, 'Confidential company ', 'Senior Developer (GIS Python)', 'G2 Integrated Solutions, LLC is seeking a full-time Senior Developer\r\n(GIS Python) in Houston, TX, responsible for the development and\r\nmaintenance of geoprocessing applications in both the desktop and\r\nserver environment. The position requires a bachelor\'s degree in\r\nComputer Science, GIS or related field plus five (5) years of\r\nexperience developing GIS geoprocessing applications; authoring\r\nESRI python toolboxes as Python site packages; deployment of\r\nESRI REST geoprocessing services via ARCGIS enterprise; and\r\nminimum two (2) years of experience executing ESRI GIS linear\r\nreferencing technology. Must also have at least 2 years\' experience\r\nworking with the following programming languages and framework:\r\nPython, JavaScript, TSQL, and ARCPY', '120k', '', '', 'g2@g2.com', '2020-04-11 16:56:59'),
(14, 0, '', '', '', '', '', '', 'willy.estrada81@gmail.com', '2020-04-21 13:24:12'),
(15, 2, 'Advantage Resourcing', 'Sr. IT System Analyst', 'Full Time Permanent opportunity with a thriving Biotech firm for a Sr. IT Systems Analyst.  The qualified candidate has pharmaceutical or clinical industry background working with large Data sets (think Data Warehouse) working with Analytic/Informatic tools such as JMP, TIBCO, Tableau.\r\n\r\nNo sponsorship or H1 Visa transfer available.\r\n\r\nOur client is seeking a technical Sr. Systems Analyst, to work within R&D Applications.  This person would work closely with our Discovery, Development, and Clinical organizations to evaluate and enhance current solutions.  They will assist in optimizing data capture, data aggregation, and data analysis.  The preferred candidate will utilize their experience to implement key functionality within these groups to help facilitate the drug discovery/development/clinical process.  Their role will include but not be limited to working with the various scientific areas to identify key data sets, facilitating the implementation of required infrastructure/solution where necessary, and working closely with the scientists to create targeted templates for data analysis and other users to understand their business needs.      \r\n\r\nAll work of the Sr. Systems Analyst is conducted within regulatory guidelines and industry best practices.', '110K', 'Waltham, MA 02451', 'Carlos Palacio', 'carlos.palacio09@carlos.com', '2020-04-21 18:43:55'),
(16, 0, '', '', '', '', '', 'Maday Moya', 'maday.moya@maday.com', '2020-04-21 22:00:08'),
(17, 0, '', '', '', '', '', 'Maday Moya', 'maday.moya@maday.com', '2020-04-22 01:30:40');


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_company` varchar(25) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);


ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
