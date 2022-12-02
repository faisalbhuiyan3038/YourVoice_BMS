-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 02:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `author`, `datetime`) VALUES
(2, 'Technology', 'Faisal', '2022-11-30 18:10:15'),
(3, 'News', 'Faisal', '2022-11-30 18:11:29'),
(4, 'Fitness', 'Faisal', '2022-11-30 18:12:07'),
(5, 'Sports', 'Faisal', '2022-11-30 18:12:11'),
(6, 'University Life', 'Faisal', '2022-12-02 12:37:34'),
(7, 'Career', 'Faisal', '2022-12-02 12:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `number`, `email`, `message`) VALUES
(1, 'John Albert', 1871577195, 'iubislife@gmail.com', 'Please take down the second post. It is copyrighted material. You can contact me for more information.');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `post` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `datetime`, `title`, `category`, `author`, `post`) VALUES
(4, '2022-12-01 13:11:45', 'Second Post', 'Fitness', 'Faisal', 'Praesent porta eget quam eu sollicitudin. Pellentesque turpis nisl, pulvinar imperdiet faucibus vitae, pretium vitae odio. Nam egestas vulputate magna at venenatis. Etiam a quam mollis nulla scelerisque tristique. Nulla facilisi. Nunc commodo libero non magna mattis placerat. Integer sit amet enim et arcu imperdiet sollicitudin. Duis imperdiet, leo eget porttitor pretium, est mauris varius lacus, id mattis lorem lacus vehicula eros. Etiam eu posuere sem. Sed volutpat augue sed nibh lobortis, quis viverra felis fermentum. Ut ac tortor enim. Integer ultrices odio magna, vel blandit nulla rhoncus a. Cras pulvinar, metus nec laoreet ullamcorper, tellus lectus tincidunt elit, et porta sapien urna eu nulla.'),
(5, '2022-12-01 14:15:49', '3 Ways To Get Fit [2022]', 'Fitness', 'Faisal', 'Morbi feugiat iaculis cursus. Proin id risus sit amet purus tempor imperdiet sit amet eget dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum mollis ipsum, quis pharetra lorem condimentum in. Nullam ut ultrices nibh, sit amet scelerisque nisi. Sed imperdiet nunc eu nibh tincidunt, id ornare lectus auctor. Mauris aliquet, libero egestas suscipit lobortis, purus nisi cursus risus, eget consectetur ex tellus et enim. Nulla sagittis vestibulum nisl, sit amet vehicula magna iaculis vel. Suspendisse eget urna nisl. Duis id justo ultricies, tincidunt libero at, tristique tellus. Pellentesque vel aliquet metus, at blandit neque. Nam non dui tempus, semper arcu bibendum, lobortis ipsum. Fusce non scelerisque ligula. Curabitur nec ultrices velit, a pellentesque quam. Etiam eleifend est finibus gravida cursus.'),
(6, '2022-12-01 14:16:31', 'How to Fix Windows Perfomance [2022 Guide]', 'Technology', 'Faisal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultricies maximus tellus non finibus. Vivamus faucibus tristique urna, vitae imperdiet nulla finibus sit amet. Mauris finibus odio ac lobortis tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec eu congue mauris. Vivamus eget orci enim. Nam at justo ultrices, aliquam ante ut, tempor diam. Vestibulum tincidunt leo at mauris blandit, a fringilla lectus porta. Nulla nec velit ex. Curabitur pharetra, mauris vitae tincidunt convallis, sapien ante luctus magna, vel auctor magna ex vel libero. Maecenas interdum consectetur velit. Sed id elit laoreet, facilisis nibh ac, ornare sem. Donec id nibh quis nulla luctus feugiat vel ac dui.'),
(7, '2022-12-01 14:18:32', 'Argentina VS Poland 2-0: Messi Wins!', 'Sports', 'Faisal', 'Ut cursus sagittis gravida. Maecenas congue consequat erat, quis pellentesque orci vulputate ultrices. In luctus nisl augue, a feugiat felis eleifend a. In hac habitasse platea dictumst. Vivamus eu dignissim turpis, et tincidunt nisl. Duis augue libero, gravida sit amet lacus nec, volutpat feugiat diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed in nunc nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ullamcorper semper quam, sit amet varius tellus facilisis fringilla. Sed tempus posuere purus, sed venenatis ex laoreet sit amet. Ut et bibendum orci, nec aliquam nisi. Integer faucibus maximus libero, non bibendum justo facilisis maximus. Donec commodo rutrum scelerisque. Curabitur ut interdum tortor.'),
(8, '2022-12-01 14:20:13', 'Brazil Advances at World Cup with 1-0 Win Over Switzerland', 'Sports', 'Faisal', 'Nam dui elit, imperdiet a justo in, commodo varius quam. Cras semper libero ut leo imperdiet accumsan. In a nisi eu velit eleifend auctor. Mauris id consectetur dolor, id congue purus. Etiam eu odio massa. Nullam hendrerit quis ex eget rhoncus. Nulla ac turpis blandit, facilisis mi ac, cursus tellus. Vivamus lectus metus, blandit ullamcorper accumsan sit amet, vehicula et mauris. Vivamus sit amet magna egestas, bibendum nibh non, ultricies nisi. Mauris vel purus tincidunt, lobortis ipsum ut, accumsan risus. Nullam efficitur libero in nunc elementum scelerisque. Nam sit amet lectus et nunc sagittis tincidunt. Vestibulum neque ipsum, imperdiet eu blandit nec, aliquam nec nisi. In in mi a lacus vulputate sagittis. Donec malesuada eu turpis vitae hendrerit.'),
(11, '2022-12-02 12:54:03', 'Career Options If You Have Basic Computer Skills', 'Career', 'Sergio Albert', '\"Proficient at using Microsoft Office.\" Being able to add just this one line to your CV can open up a host of career options for you. With this one requirement in common, said options do need a couple of additional skills specific to each, such as communication and organisation skills. But having the essential tech down makes it very likely for you to easily find a match. <br />\r\n<br />\r\nHere are a few career options if you have basic computing skills.<br />\r\n<br />\r\nCustomer service representative<br />\r\n<br />\r\nCustomer service representatives work for businesses that require customer engagement, including retail stores, banks, and insurance companies. Therefore, if you meet the requirements, you are likely to be able to choose which industry, and what kind of environment you want to work in.<br />\r\n<br />\r\nCustomer service representatives work directly with customers to provide assistance, resolve complaints, answer questions, and process orders. For this, you will need typing and data entry skills, as well as familiarity with programs like MS Word and Excel. Good communication skills are absolutely necessary, as you will have to interact with customers with a positive attitude and empathy to resolve their problems. <br />\r\n<br />\r\nData entry clerk<br />\r\n<br />\r\nA data entry clerk is a professional responsible for transferring paper formats into computer files or database systems. Like customer service, this position is available in a wide range of fields. <br />\r\n<br />\r\nThey handle typing in customer information provided directly into an electronic format, creating spreadsheets with large numbers of figures, verifying data by comparing it to source documents, updating existing data, etc. This requires fast typing and a good grasp of word processing tools like MS Word and Excel. Additionally, this job requires the ability to concentrate and be precise. <br />\r\n<br />\r\nTravel agent<br />\r\n<br />\r\nThere\'s quite a lot of demand for travel agency services in Bangladesh. Your success as a travel agent depends on your record of being able to find out the best deals for your customers. It\'s a pretty interesting and rewarding job, with a variety in the kind of information you are dealing with.<br />\r\n<br />\r\nThis job requires good browsing and navigation skills, and knowledge of computer reservations systems, global distribution systems (GDS), and e-travelling. You will also need to communicate with customers and help them find transport and accommodation suited to their needs, and communicate with hotels, airlines, etc to make reservations and payments. Therefore, multilingualism, most commonly proficiency in Bangla and English, is a big advantage. <br />\r\n<br />\r\nCashier <br />\r\n<br />\r\nA cashier is a retail professional who scans items to ensure prices and quantities are correct, assists those who need help or advice on products, and handles returns and exchanges when necessary.<br />\r\n<br />\r\nTo be a cashier you simply need to know how to use a PC, and have the will to learn how to handle electronic equipment such as cash registers and card readers. You might also need to know some basic math and the use of a calculator. Small talk and smiling at customers might also be asked of you. <br />\r\n<br />\r\nThese are by no means the only options available to you when you have basic computer skills, but they are a few of the most commonly available ones. The range and scope of career options are quite large if you look out for them and are smart with how you present and market yourself.'),
(12, '2022-12-02 12:55:26', '11 Tips for First-Year University Students', 'University Life', 'Professor Benjamin', 'Starting college is an exciting step in one’s life, but it can definitely be stressful or scary at times, especially if you had decided to study abroad. For those awaiting your freshman year this fall, here are some tips on how to make the most out of your first year at university. Keep these tips in mind once you start classes, but more importantly don’t forget to have fun along the way!<br />\r\n<br />\r\n1. Remember that every person you meet in college has something to offer you.<br />\r\nYou will meet hundreds new people at college – classmates, professors, advisors, recruiters, staff at campus, etc. Naturally, you won’t become friends with everyone, but we recommend networking with as many people as possible, especially when you’re new at the university.<br />\r\n<br />\r\n2. Be organized and make deadlines your priority.<br />\r\nGet a calendar, whether an online app or good old paper diary, and write down all your deadlines, exams, group meetings and school events. You will have dozens of different assignments during your college years and the sooner you find a routine that fits you, the better. Make it your priority to never hand in an assignment late. Being diligent and dependable is always a plus!<br />\r\n<br />\r\n3. Never. Ever. Plagiarize.<br />\r\nDon’t even come close to plagiarizing. Learning how to write is one of the core skills you will be developing at university. Don’t ruin the learning process with copying and pasting words from a different source. Instead, find enough various resources, learn how to cite sources properly, and develop your own writing routine. You can also make use of one of the many programs and apps that detect plagiarism in your work.<br />\r\n<br />\r\n4. Find a note-taking system that works well for you.<br />\r\nTaking notes with a laptop might be faster and easier than writing notes by hand, but writing down notes with good old pen might help you remember the content of the lecture better than if you typed them. Find out what works best for you in each class so you can make the most out of your notes once revising or studying. Read more about when you should take notes by hand in our previous article.<br />\r\n<br />\r\n5. Always back up your files.<br />\r\nThere is nothing worse than having your laptop broke down in the middle of finishing your unsaved essay or losing a whole file of documents.<br />\r\n<br />\r\n6. Meet with your academic advisor on a regular basis.<br />\r\nConnect with your school’s academic advisor as well as a career center. Both your career advisor and academic advisor might play a valuable role in your college years and in your future decisions. Also, go to most career fairs in the campus or the city you live in, whether you are looking for a job or just want to network with recruiters.<br />\r\n<br />\r\n7. Actively participate in activities organized by your university/faculty.<br />\r\nWhether it is extra-curriculum lecture or a Christmas party organized by the faculty, these events are a great opportunity to get to know your classmates, professors and professionals better, but also to learn interesting things.<br />\r\n<br />\r\n8. Don’t be afraid to drop a class you don’t like.<br />\r\nFeel no obligation to take every single class you register for. If you don’t like them, drop them and spend your time in a more meaningful class for you. At the end of the day, college is about finding out what you want to do.<br />\r\n<br />\r\n9. Take good care of your health.<br />\r\nTaking good care of your body and mind is essential every day of your life, but even more when you get to start a brand new chapter at a university, often miles away from your family and home. You will likely face a frequent temptation to eat unhealthy food, cook low-cost meals and miss out on physical exercise due to lack of time. Nevertheless, it is important to keep a healthy lifestyle, eat enough fruits and veggies, drink enough water, sleep well and exercise often. Especially in the times of global pandemic. Bottom line: Your health is the foundation for everything else, so don’t neglect it.<br />\r\n<br />\r\n10. Get to know your professors.<br />\r\nCollege is as much about networking as it is about taking classes. Plus, most of professors will be very happy to get to know you, share their experience and guide you through your college path.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'Faisal', '1921298'),
(2, 'Chandan', '1921592');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
