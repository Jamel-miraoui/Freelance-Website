-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2023 at 03:12 PM
-- Server version: 8.0.33-0ubuntu0.23.04.2
-- PHP Version: 8.1.12-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FreeLance`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `cover_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prix` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'free'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `categorie`, `description`, `cover_path`, `user_id`, `created_at`, `prix`) VALUES
(11222247, 'Residential HVAC System Installation', 'Climatisation', 'We are seeking a skilled and experienced freelance HVAC technician specializing in residential climatisation (air conditioning) systems. As a freelance contractor, you will be responsible for installing, maintaining, and troubleshooting HVAC systems in residential properties. Your expertise in assessing and addressing climatisation needs will ensure optimal performance, energy efficiency, and client satisfaction. Assess climatisation needs and recommend appropriate HVAC systems for residential properties Install and configure residential HVAC systems, including air conditioners, heat pumps, ductwork, thermostats, and related components Perform regular maintenance, inspections, and cleaning to ensure proper functioning Diagnose and troubleshoot issues, resolving malfunctions or defects Provide advice on energy-efficient practices and suggest system upgrades or replacements Deliver exceptional customer service, addressing inquiries and ensuring a positive experience', 'uploads/central_ac-1-scaled.jpg.optimal.jpg', 35, '2023-06-25 17:15:32', '500-1,000 dt'),
(11222248, 'Electrician for Residential and Commercial Projects', 'Électricité', 'We are seeking a skilled and reliable freelance electrician to join our platform. As an electrician, you will be responsible for installing, maintaining, and repairing electrical systems in residential and commercial properties. Your expertise in electrical wiring, circuitry, and troubleshooting will ensure the safe and efficient operation of electrical systems. Perform electrical installations, including wiring, lighting fixtures, outlets, and switches. Conduct routine maintenance to identify and resolve electrical issues. Diagnose and troubleshoot electrical problems, ensuring timely and accurate repairs. Collaborate with clients to understand their electrical needs and provide expert advice. Adhere to safety protocols and electrical codes to ensure compliance and prevent hazards. Keep updated on industry trends and advancements in electrical technology.', 'uploads/How-to-Start-an-Electrician-Business.png', 21, '2023-06-25 17:28:07', '1800 dt'),
(11222249, 'Interior Wall Painting for Residential Renovation Project', 'Peinture', 'We are looking for a skilled freelance painter to assist with an interior wall painting project for a residential renovation. As a painter, your task will involve preparing and painting interior walls to enhance the aesthetics of the space. Your attention to detail and ability to work efficiently will ensure a high-quality finish and client satisfaction. Prepare the surfaces by cleaning, sanding, and patching any imperfections. Apply primer to promote better adhesion and ensure an even base. Paint the interior walls using the chosen color and finish, following client specifications. Ensure clean lines and smooth coverage, taking care to avoid drips or streaks. Touch up any areas as needed and perform quality checks to ensure a flawless finish. Clean up the work area and dispose of any painting-related materials properly.', 'uploads/CcFJzZJUAAAOP7X.jpg', 21, '2023-06-25 17:28:08', '1200 dt'),
(11222250, 'Custom Iron Gate Fabrication for Residential Property', 'Forgeron', 'We are in need of a skilled freelance blacksmith to undertake a specific task of custom iron gate fabrication for a residential property. As a blacksmith, your task will involve creating a unique and visually appealing iron gate that complements the architectural style of the property while providing security and functionality. Your expertise in forging and working with iron will be crucial in delivering a high-quality and durable gate. Collaborate with the client to understand their design preferences and requirements for the iron gate. Create a detailed design plan, considering both aesthetics and functionality. Select appropriate iron materials and prepare them for forging and shaping. Utilize traditional blacksmithing techniques to forge and shape the iron into the desired gate design. Incorporate decorative elements, such as scrollwork or custom patterns, as specified by the client. Ensure proper fitting and installation of the gate, including hinges and latch mechanisms.', 'uploads/dsc_1076-2.jpg', 24, '2023-06-25 17:44:01', '2400 dt'),
(11222251, 'Hand-Forged Decorative Fireplace Screen Creation', 'Forgeron', 'We are seeking a skilled freelance blacksmith to take on a specific task of hand-forging a decorative fireplace screen. As a blacksmith, your task will involve creating a unique and visually stunning fireplace screen that enhances the aesthetics of the space while providing a functional barrier. Your expertise in forging and working with metals will be instrumental in producing a high-quality and beautifully crafted fireplace screen.Collaborate with the client to understand their design preferences and specific requirements for the fireplace screen. Create a detailed design plan, considering both the overall style and the dimensions of the fireplace. Select suitable metals, such as wrought iron or steel, and prepare them for forging. Utilize traditional blacksmithing techniques to forge and shape the metal into intricate patterns and designs for the fireplace screen. Incorporate decorative elements, such as scrolls, twists, or custom motifs, as specified by the client. Ensure proper finishing and treatment of the metal to enhance its durability and visual appeal.', 'uploads/3-Panel-Gold-Fireplace-Screen-Metal-Herringbone-Decorative-Tin-Metal-600x600.jpg', 24, '2023-06-25 17:44:02', '500 dt'),
(11222252, 'Custom Metal Sign Fabrication for Commercial Business', 'Forgeron', 'We are in need of a skilled freelance blacksmith to undertake a specific task of custom iron gate fabrication for a residential property. As a blacksmith, your task will involve creating a unique and visually appealing iron gate that complements the architectural style of the property while providing security and functionality. Your expertise in forging and working with iron will be crucial in delivering a high-quality and durable gate.Collaborate with the client to understand their design preferences and requirements for the iron gate. Create a detailed design plan, considering both aesthetics and functionality. Select appropriate iron materials and prepare them for forging and shaping. Utilize traditional blacksmithing techniques to forge and shape the iron into the desired gate design. Incorporate decorative elements, such as scrollwork or custom patterns, as specified by the client. Ensure proper fitting and installation of the gate, including hinges and latch mechanisms.', 'uploads/Lasercut_sign1.jpeg', 24, '2023-06-25 17:44:03', '800 dt'),
(11222253, 'HVAC Specialist Offering Commercial HVAC System Maintenance and Repair', 'Climatisation', 'Is your commercial HVAC system in need of maintenance or repair? Our dedicated freelance HVAC specialist is here to assist you. With a deep understanding of complex commercial HVAC systems, we offer comprehensive maintenance and repair services to ensure your system operates at peak performance. Our specialist will conduct thorough inspections, identify any issues, and provide efficient solutions to maximize energy efficiency and reduce downtime. From routine maintenance tasks to troubleshooting and repairing complex HVAC components, we have the expertise to keep your commercial space comfortable and productive. Contact us now to schedule an appointment with our experienced HVAC specialist.', 'uploads/HVAC-Systems-Maintenance.jpg', 23, '2023-06-25 18:38:07', '200 dt'),
(11222254, 'Skilled Carpenter Available for Outdoor Deck Repair and Restoration', 'Menuisier', 'Does your outdoor deck need some attention? Our skilled freelance carpenter is here to help! We offer comprehensive deck repair and restoration services to ensure your deck is safe, sturdy, and aesthetically pleasing. From replacing damaged boards to reinforcing the structure and refinishing the deck surface, our carpenter has the expertise to bring your deck back to life. Enjoy your outdoor space to the fullest with a revitalized and well-maintained deck. Contact us now to schedule an inspection and discuss your deck repair and restoration needs.', 'uploads/download.jpeg', 22, '2023-06-25 18:38:13', '400 dt'),
(11222255, 'Skilled HVAC Technician Providing Air Duct Cleaning and Indoor Air Quality Services', 'Climatisation', 'Do you want to improve the indoor air quality of your home or office? Our skilled freelance HVAC technician specializes in air duct cleaning and indoor air quality services. Over time, air ducts accumulate dust, allergens, and contaminants that can negatively impact the air you breathe. Our technician will thoroughly clean and sanitize your air ducts, removing pollutants and improving overall indoor air quality. Additionally, we offer comprehensive indoor air quality solutions, such as installing air purifiers or humidifiers, to create a healthier and more comfortable living or working environment. Breathe easier and enjoy cleaner air with our professional HVAC services. Contact us today to schedule an air duct cleaning or discuss your indoor air quality needs.', 'uploads/what-does-hvac-technician-do.jpg', 23, '2023-06-25 18:38:16', '160 dt'),
(11222256, 'Professional HVAC Technician Available for Residential Air Conditioning Installation', 'Climatisation', 'Are you in search of a professional HVAC technician to handle your residential air conditioning installation? Look no further! Our skilled freelance technician specializes in providing top-notch air conditioning installation services tailored to meet your specific needs. With extensive knowledge of HVAC systems and years of experience, our technician will ensure a smooth and efficient installation process. From selecting the right equipment to proper placement and precise installation, we guarantee optimal cooling performance and energy efficiency. Contact us today to discuss your project and schedule a consultation with our HVAC expert.', 'uploads/How-to-be-HVAC-Technician-scaled.jpg', 23, '2023-06-25 18:38:18', '100 dt'),
(11222258, 'Professional Painter for Interior Painting Projects', 'Peinture', 'Are you looking for a skilled and reliable painter to transform the interiors of your residential or commercial space? Our freelance painter specializes in interior painting projects and is ready to bring a fresh new look to your walls. With a keen eye for detail and a commitment to quality, our painter will prepare the surfaces, select the right paint colors, and apply smooth and even coats to achieve a flawless finish. From small rooms to entire properties, we offer professional painting services tailored to your specific needs. Contact us today to discuss your project and request a consultation with our expert painter.', 'uploads/professional-house-painters.jpeg', 30, '2023-06-25 18:48:19', '600 dt'),
(11222259, 'Title: Exterior Painting Specialist for Residential and Commercial Properties', 'Peinture', 'Enhance the curb appeal of your property with the help of our skilled freelance painter specializing in exterior painting. Whether you need to refresh the façade of your home or revitalize the look of your commercial building, our painter has the expertise to handle the job. Using high-quality paints and professional techniques, we will transform your exteriors, protecting them from the elements while delivering a visually appealing result. From surface preparation to meticulous painting application, our painter will ensure a durable and long-lasting finish. Contact us now to schedule an appointment and discuss your exterior painting project.', 'uploads/commercial-painting-services-image3.jpg', 30, '2023-06-25 18:48:20', '3500 dt'),
(11222260, 'Decorative Painting and Faux Finishes for Unique Interior Design', 'Peinture', 'Looking to add a touch of artistic flair to your interiors? Our freelance painter specializes in decorative painting and faux finishes to create unique and stunning designs. Whether you desire a faux marble finish, decorative patterns, or textured effects, our painter has the skill and creativity to bring your vision to life. With meticulous attention to detail and a range of painting techniques, we will transform your walls, ceilings, or furniture into works of art. Elevate the aesthetics of your space and make a statement with our decorative painting services. Contact us today to discuss your project and schedule a consultation with our talented painter.', 'uploads/faux-finish-modern-wall-painting-ideas-14.jpg', 30, '2023-06-25 18:48:21', '500 dt'),
(11222261, 'Custom Furniture Design and Construction by Skilled Carpenter', 'Menuisier', 'Are you in need of custom furniture that perfectly suits your space and style? Our skilled freelance carpenter specializes in custom furniture design and construction. From elegant dining tables to functional built-in shelves, our carpenter will work closely with you to bring your vision to life. With meticulous attention to detail and a deep understanding of woodworking techniques, we will create unique and high-quality pieces that reflect your personal taste and meet your specific needs. Contact us today to discuss your custom furniture project and schedule a consultation with our talented carpenter.', 'uploads/furniture.jpg', 25, '2023-06-25 18:48:22', '190 dt'),
(11222262, 'Electrical Wiring and Installation for Residential Properties', 'Électricité', 'Are you renovating or constructing a residential property and in need of professional electrical wiring and installation services? Our skilled freelance electrician specializes in residential electrical work, ensuring safe and efficient electrical systems for your home. From wiring new constructions to rewiring existing homes, our electrician will handle the installation of outlets, switches, lighting fixtures, and other electrical components with precision and adherence to safety codes. With a focus on quality craftsmanship and attention to detail, we guarantee reliable electrical solutions that meet your specific needs. Contact us today to discuss your project and schedule a consultation with our experienced electrician.', 'uploads/Electrical-Plans.jpg', 26, '2023-06-25 19:01:26', '150 dt'),
(11222263, 'Electrical Panel Upgrade and Maintenance', 'Électricité', 'Is your electrical panel outdated or unable to meet the demands of your electrical system? Our skilled freelance electrician specializes in electrical panel upgrades and maintenance. We will assess your current electrical panel, identify its limitations, and recommend the appropriate upgrades to ensure optimal electrical performance and safety. Our electrician will handle the installation of a new panel, upgrade circuit breakers, and ensure proper grounding and wiring connections. Additionally, we offer routine maintenance services to keep your electrical panel in top condition, preventing potential issues and prolonging its lifespan. Contact us now to schedule an assessment and discuss your electrical panel needs.', 'uploads/download (3).jpeg', 26, '2023-06-25 19:01:30', '480 dt'),
(11222264, 'Wood Floor Installation and Refinishing', 'Climatisation', 'Want to add warmth and elegance to your space with wood flooring? Our freelance carpenter specializes in wood floor installation and refinishing. Whether you prefer solid hardwood, engineered wood, or laminate flooring, our carpenter will handle the installation process with precision and expertise. From preparing the subfloor to expertly laying the planks and ensuring a seamless finish, we will transform your space with beautiful wood flooring. If you have existing wood floors that have lost their luster, we also offer refinishing services to restore their natural beauty and durability. Contact us now to discuss your flooring project and schedule an appointment with our experienced carpenter.', 'uploads/download (5).jpeg', 33, '2023-06-25 19:01:32', '170 dt'),
(11222265, 'Custom Door and Window Installation', 'Menuisier', 'Looking for custom doors and windows that add both functionality and style to your space? Our skilled freelance carpenter specializes in custom door and window installation. We understand the importance of proper fit, security, and energy efficiency when it comes to doors and windows. Our carpenter will work closely with you to design and install custom doors and windows that not only enhance the aesthetics of your space but also provide superior functionality and insulation. From selecting the right materials to precise installation, we guarantee high-quality craftsmanship and attention to detail. Contact us today to discuss your project and schedule a consultation with our expert carpenter.', 'uploads/download (6).jpeg', 33, '2023-06-25 19:01:33', '80 dt'),
(11222266, 'Precision Woodworking for Home Renovation Projects', 'Menuisier', 'Planning a home renovation project that involves woodworking? Our freelance carpenter offers precision woodworking services to help transform your space. Whether you re looking to install new cabinets, upgrade your staircase, or add custom trim work, our carpenter has the expertise to handle the job. We pride ourselves on delivering exceptional craftsmanship, ensuring precise measurements, seamless installations and superior finishing. With a keen eye for detail and a commitment to quality we will enhance the aesthetics and functionality of your home. Contact us now to discuss your woodworking needs and schedule a consultation with our skilled carpenter.', 'uploads/prepare-wood-projects-3dbyme-1220x671.jpg', 25, '2023-06-25 19:03:46', '130 dt'),
(11222267, 'Professional Door and Window Installation Services', 'Menuisier', 'Are you in need of professional door and window installation services? Our experienced freelance carpenter specializes in installing doors and windows with precision and efficiency. We understand the importance of proper installation to ensure security, energy efficiency, and aesthetic appeal. Whether you re replacing outdated doors and windows or installing new ones, our carpenter will ensure a seamless fit, proper alignment, and smooth operation. With attention to detail and adherence to industry standards, we guarantee a professional installation that exceeds your expectations. Contact us today to discuss your project and schedule an appointment with our expert carpenter. ', 'uploads/download (1).jpeg', 25, '2023-06-25 19:06:00', '230 dt'),
(11222268, 'Electrical Troubleshooting and Repair Services', 'Électricité', 'Experiencing electrical issues in your home or office? Our freelance electrician offers comprehensive troubleshooting and repair services. Whether its flickering lights, power surges, or faulty outlets, our electrician has the expertise to diagnose and resolve electrical problems efficiently and effectively. We use state-of-the-art equipment to identify the root cause of the issue and provide reliable solutions to ensure the safety and proper functioning of your electrical system. With a focus on customer satisfaction, we aim to minimize downtime and disruptions. Dont let electrical issues compromise your comfort and productivity—contact us today for prompt and reliable electrical troubleshooting and repair services.', 'uploads/download (2).jpeg', 26, '2023-06-25 19:06:01', '180 dt'),
(11222269, 'Custom Cabinetry Design and Construction', 'Menuisier', 'Looking for custom cabinetry to enhance your living space? Our freelance carpenter specializes in designing and constructing custom cabinetry that perfectly fits your needs and style. Whether its a functional built-in bookshelf, a sleek entertainment center, or a stylish kitchen island, our carpenter will work closely with you to bring your vision to life. From selecting high-quality materials to precise measurements and expert craftsmanship, we will create custom cabinetry that not only meets your storage requirements but also adds beauty and value to your home. Contact us today to discuss your project and schedule a consultation with our skilled carpenter.', 'uploads/download (4).jpeg', 33, '2023-06-25 19:06:01', '360 dt');

-- --------------------------------------------------------

--
-- Table structure for table `jobspending`
--

CREATE TABLE `jobspending` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `cover_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prix` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'free'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'not declared',
  `phone_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT 'not declared',
  `additional_info` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'not declared',
  `profile_pic` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'Profile-Icon-SVG-09856789.png',
  `cv` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `address`, `phone_number`, `additional_info`, `profile_pic`, `cv`) VALUES
(1, 'admin', 'admin', 'hydersebri@gmail.com', '2023-04-29 12:17:20', 'not declared', 'not declared', 'not declared', 'Profile-Icon-SVG-09856789.png', NULL),
(21, 'Rhimi Aziz', 'aziz', 'azizrhimi@gmail.com', '2023-06-25 16:31:18', 'kairouan', '26 514 895', '24 512 643', 'uploads/320791431_624378979691862_7147739048562730471_n.jpg', '../uploads/cv/test_engineer_CV_template.pdf'),
(22, 'Nebti Khairi', 'khairi', 'khairinebti@gmail.com', '2023-06-25 16:34:02', 'khairouan', '21 521 456', '44 652 849', 'uploads/347240325_224788467009716_6823342678479516722_n.jpg', '../uploads/cv/test_engineer_CV_template.pdf'),
(23, 'Mofhammed Fatnassi', 'fanta', 'mohammedfatnsai@gmail.com', '2023-06-25 16:36:05', 'benzaret', '96 524 861', '59 624 854', 'uploads/301594780_1050452915656244_7823145345165975469_n.jpg', '../uploads/cv/test_engineer_CV_template.pdf'),
(24, 'islem hammami', 'selem', 'islemhammami@gmail.com', '2023-06-25 16:40:12', 'tunis', '54 856 952', '23 695 874', 'uploads/1607374036861.jpeg', '../uploads/cv/test_engineer_CV_template.pdf'),
(25, 'fatma khadhraoui', 'fatma', 'fatma@gmail.com', '2023-06-25 16:42:06', 'Hammamet, Nabeul, Tunisia', '26 954 123', '45 625 984', 'uploads/1685445377044.jpeg', '../uploads/cv/test_engineer_CV_template.pdf'),
(26, 'ghasssen kachroudi ', 'ghassen', 'ghassen@gmail.com', '2023-06-25 16:44:40', 'sousse', '23 651 426', '46 952 621', 'uploads/305141113_1962914407235813_3085371474788547798_n.jpg', '../uploads/cv/test_engineer_CV_template.pdf'),
(27, 'maissa kilani', 'maissa', 'maissa@gmail.com', '2023-06-25 16:46:02', 'tunis ', '52 625 423', '56 958 625', 'uploads/1590067593446.jpeg', '../uploads/cv/test_engineer_CV_template.pdf'),
(28, 'ryadh arrak ', 'ryadh', 'ryadh@gmail.com', '2023-06-25 16:56:27', 'sousse', '78 652 165', '98 652 321', 'uploads/347249673_806025937904083_3236812978913170102_n.jpg', '../uploads/cv/test_engineer_CV_template.pdf'),
(29, 'housem massaabi', 'houssem', 'houssem@gmail.com', '2023-06-25 17:00:37', 'tunis', '78 652 154', '23 625 142', 'uploads/1680775334703.jpeg', '../uploads/cv/test_engineer_CV_template.pdf'),
(30, 'oumaima ferchichi', 'oumaima', 'oumaima@gmail.com', '2023-06-25 17:01:33', 'tunis', '23 652 248', '39 865 145', 'uploads/1684143729498.jpeg', '../uploads/cv/test_engineer_CV_template.pdf'),
(31, 'helmi bouabsa', 'helmi', 'helmi@gmail.com', '2023-06-25 17:03:03', 'nabeul', '36 256 325', '26 456 985', 'uploads/1559925790682.jpeg', '../uploads/cv/test_engineer_CV_template.pdf'),
(32, 'aymen jhidri', 'aymen', 'aymen@gmail.com', '2023-06-25 17:04:05', 'canada', '25 652 321 ', '24 956 845', 'uploads/1664781732547.jpeg', '../uploads/cv/test_engineer_CV_template.pdf'),
(33, 'emna wazzaa', 'emna', 'emna@gmail.com', '2023-06-25 17:05:10', 'tunis', '23 652 152', '96 854 156', 'uploads/1685030103817.jpeg', '../uploads/cv/test_engineer_CV_template.pdf'),
(34, 'sarah arfaoui', 'sarah', 'sarah@gmail.com', '2023-06-25 17:06:46', 'tunis', '28 951 753', '96 521 632', 'uploads/1675780813359.jpeg', '../uploads/cv/test_engineer_CV_template.pdf'),
(35, 'ghada zgar', 'ghada', 'ghada@gmail.com', '2023-06-25 17:08:23', 'sousse', '23 620 514', '21 362 548', 'uploads/1681558117952.jpeg', '../uploads/cv/test_engineer_CV_template.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_ibfk_1` (`user_id`);

--
-- Indexes for table `jobspending`
--
ALTER TABLE `jobspending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11222270;

--
-- AUTO_INCREMENT for table `jobspending`
--
ALTER TABLE `jobspending`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
