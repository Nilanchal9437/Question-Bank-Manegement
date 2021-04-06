-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 04:05 AM
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
-- Database: `question_bank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('nilanchal@1234', 'Null1234@');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL,
  `seen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `c_name`, `c_email`, `c_phone`, `massage`, `seen`) VALUES
(2, 'Bikash Sahoo', 'Bikash@4563gmail.com', '4563675785', 'I need to join in you web services as a teacher. I will help student for examination time and show you the Level of question in your manegement ', '1'),
(3, 'Aditya Samal', 'aditya1234@gmail.com', '6785948433', 'Please help me i could not register in you portal. In this week i have many time register in your portal but not get anything', '0'),
(4, 'Nilanchal Patra', 'nilanchal.patra1234@gmail.com', '9437658928', 'I need more mcq question regarding in my b-tech subject in mechanical', '0'),
(5, 'NIKHIL SHARMA', 'nikhil1234@gmail.com', '7895355334', 'Hi I am nikhil I need to join as teacher and develop you question upload type so please contact me as it is poassible', '0'),
(6, 'ROHIT SHETHI', 'rohit4576@gmail.com', '9089043455', 'Hi am Rohit please upload in your web regarding my college question because I need previous year batch question.', '1'),
(7, 'NILANCHAL PATRA', 'nilanchal.patra1234@gmail.com', '9437658928', 'Hi please update you system please give me accurate question.', '1'),
(8, 'BIKAS DAS', 'bikash78978@gmail.com', '9878757845', 'Please Provide a better Question You need some improvement so please help Us ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `c_subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `course`, `branch`, `c_subject`) VALUES
(1, 'B-TECH', 'CSE', 'JAVA'),
(2, 'B-TECH', 'CSE', 'PYTHON'),
(3, 'B-TECH', 'CSE', 'PHP'),
(4, 'B-TECH', 'CSE', 'DATA ANALYTICS'),
(5, 'B-TECH', 'CSE', 'AI'),
(6, 'B-TECH', 'CSE', 'DATA BASE SYSTEM'),
(7, 'B-TECH', 'CSE', 'ADVANCE JAVA'),
(8, 'B-TECH', 'CSE', 'CLOUD COMPUTING'),
(9, 'B-TECH', 'CSE', 'MOBILE COMPUTING'),
(10, 'B-TECH', 'CSE', 'IOT'),
(11, 'B-TECH', 'CSE', 'SOFTWARE TESTING'),
(12, 'B-TECH', 'CSE', 'DESIGN AND ANLYSIS OF ALGORITHM'),
(13, 'B-TECH', 'ENTC', 'AEC'),
(14, 'B-TECH', 'CSE', 'NT'),
(15, 'B-TECH', 'ENTC', 'CS'),
(16, 'B-TECH', 'ENTC', 'DSP'),
(17, 'B-TECH', 'ENTC', 'DEC'),
(18, 'B-TECH', 'ENTC', 'MPMC'),
(19, 'B-TECH', 'ENTC', 'DVLSI'),
(20, 'B-TECH', 'ENTC', 'DIGITAL COMMUNICATION'),
(21, 'B-TECH', 'ENTC', 'EEC'),
(22, 'B-TECH', 'ENTC', 'OE'),
(23, 'B-TECH', 'CIVIL', 'CONSTRUCTION TECHNOLOGY'),
(24, 'B-TECH', 'CIVIL', 'ENERGY CONSERVATION TECHNIQUE'),
(25, 'B-TECH', 'CIVIL', 'GEO-TECHNICAL ENGINEERING'),
(26, 'B-TECH', 'CIVIL', 'HIGHWAY-AND-TRAFFIC-ENGINEERING'),
(27, 'B-TECH', 'CIVIL', 'OB'),
(28, 'B-TECH', 'CIVIL', 'STRACTURAL ANALYSIS'),
(29, 'B-TECH', 'CIVIL', 'HUMAN RESOURCE MANAGEMENT'),
(30, 'B-TECH', 'CIVIL', 'WATER-RESOURCE-ENGINEERING'),
(31, 'B-TECH', 'MECHANICAL', 'C++'),
(32, 'B-TECH', 'MECHANICAL', 'MATH'),
(33, 'B-TECH', 'MECHANICAL', 'INTRODUCTION-TO-PHYSICAL-METALLURGY-AND-ENGINEERING-MATERIALS'),
(34, 'B-TECH', 'MECHANICAL', 'KINEMATICS-AND-DYNAMICS-OF-MACHINES'),
(35, 'B-TECH', 'MECHANICAL', 'MECHANICS-OF-SOLID'),
(36, 'B-TECH', 'MECHANICAL', 'BASIC-MANUTURING-PROCESS'),
(37, 'B-TECH', 'MECHANICAL', 'RAPID-MANUTURING-PROCESS'),
(38, 'B-TECH', 'MECHANICAL', 'STATISTICAL-QUALITY-CONTROL'),
(39, 'B-TECH', 'MECHANICAL', 'ENGINEERING-THERMODYNAMICS'),
(40, 'B-TECH', 'CSE', 'C#');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_email` varchar(255) NOT NULL,
  `f_rate` varchar(255) NOT NULL,
  `f_massage` varchar(255) NOT NULL,
  `seen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_email`, `f_rate`, `f_massage`, `seen`) VALUES
(2, 'nilanchal.patar3777@gmail.com', '5', 'Nice Question are Explained in MCQ', '0'),
(3, 'Akash1234@gmail.com', '2', 'Try to get more question in your services', '1'),
(4, 'shubham9879@gmail.com', '4', 'Nice Work but you should takes question from out side India', '1'),
(5, 'barsha1234@gmail.com', '5', 'Try to get most university question that could be better for you', '1'),
(6, 'abhikesh1234@gmail.com', '5', 'Thank for helping in my exam\r\n', '1'),
(7, 'nikhil1234@gmail.com', '5', 'Thank you for you service', '0'),
(8, 'sup@gmail.com', '5', 'Thanks', '0'),
(9, 'Akash1234@gmail.com', '5', ' ', '0'),
(10, 'barsha1234@gmail.com', '5', ' ', '0'),
(11, 'shubham9879@gmail.com', '5', ' ', '0'),
(12, 'Anuj1234@gmail.com', '5', ' ', '1'),
(13, 'nilanchal.patar3777@gmail.com', '5', ' ', '1'),
(14, 'Biki@12367gmail.com', '5', 'Your web site is amaizing ', '0'),
(15, 'robort@9878gmail.com', '5', 'Nice ', '0'),
(16, 'ram1234@gmail.com', '5', 'Try to get outside the india university question', '0'),
(17, 'Hitesh1256@gmail.com', '4', 'Your service is good but you need to upload maximum mcq question', '0'),
(18, 'somen@467gmail.com', '1', 'Very bad becuause some mcq have no option', '0'),
(19, 'ankit1278$@gmail.com', '3', 'Try to get more question and your seraching operation was not working properly', '1'),
(20, 'sambitpattanaik52@gmail.com', '5', 'Very good job', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_question`
--

CREATE TABLE `mcq_question` (
  `m_id` int(11) NOT NULL,
  `m_subject` varchar(255) NOT NULL,
  `m_question` varchar(255) NOT NULL,
  `op1` varchar(255) NOT NULL,
  `op2` varchar(255) NOT NULL,
  `op3` varchar(255) NOT NULL,
  `op4` varchar(255) NOT NULL,
  `correct_option` varchar(255) NOT NULL,
  `explantion` varchar(255) NOT NULL,
  `uploded_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcq_question`
--

INSERT INTO `mcq_question` (`m_id`, `m_subject`, `m_question`, `op1`, `op2`, `op3`, `op4`, `correct_option`, `explantion`, `uploded_by`) VALUES
(1, 'C++', 'Wrapping data and its related functionality into a single entity is known as _____________', 'Abstraction', 'Encapsulation', 'Polymorphism', 'Modularity', '2', ' In OOPs, the property of enclosing data and its related functions into a single entity(in C++ we call them classes) is called encapsulation.', '5'),
(2, 'C++', 'In C++, what is the sign of character data type by default?', 'Signed', 'Unsigned', 'Implementation dependent', ' Unsigned Implementation', '3', 'The standard does not specify if plain char is signed or unsigned. There are three distinct character types according to the standard: char, signed char and unsigned char.', '5'),
(3, 'C++', ' How many characters are specified in the ASCII scheme?', '64', '128', '256', '24', '1', 'There are 128 characters defined in the C++ ASCII list.', '5'),
(4, 'C++', ' Which of the following belongs to the set of character types?', 'char', 'wchar_t', 'only a', 'both wchar_t and char', '4', 'wchar_t and char are used to represent wide character and character.', '5'),
(5, 'C++', ' In C++, what is the sign of character data type by default?', ' Signed', 'Unsigned', 'Implementation dependent', 'Unsigned Implementation', '3', 'The standard does not specify if plain char is signed or unsigned. There are three distinct character types according to the standard: char, signed char and unsigned char.', '5'),
(6, 'C++', 'Is the size of character literals different in C and C++?', ' Implementation defined', 'Can’t say', ' Yes, they are different', 'No, they are not different ', '3', ' In C++, sizeof(‘a’) == sizeof(char) == 1. In C however, sizeof(‘a’) == sizeof(int).', '5'),
(7, 'C++', 'Suppose in a hypothetical machine, the size of char is 32 bits. What would sizeof(char) return?', '4', '1', 'Implementation dependent', 'Machine dependent', '2', 'The standard does NOT require a char to be 8-bits, but does require that sizeof(char) return 1.', '5'),
(8, 'C++', 'What constant defined in <climits> header returns the number of bits in a char?', 'CHAR_SIZE', 'SIZE_CHAR', 'BIT_CHAR', 'CHAR_BIT', '4', 'CHAR_BIT is a macro constant defined in <climits> header file which expresses the number of bits in a character object in bytes.', '5'),
(10, 'C++', ' How structures and classes in C++ differ?', ' In Structures, members are public by default whereas, in Classes, they are private by default', 'In Structures, members are private by default whereas, in Classes, they are public by default', 'Structures by default hide every member whereas classes do not', ' Structures cannot have private members whereas classes can have', '1', 'Structure members are public by default whereas, class members are private by default. Both of them can have private and public members.', '5'),
(11, 'C++', 'What does polymorphism in OOPs mean?', 'Concept of allowing overiding of functions', 'Concept of hiding data', ' Concept of keeping things in differnt modules/files', 'Concept of wrapping things into a single unit', '1', 'In OOPs, Polymorphism is the concept of allowing a user to override functions either by changing the types or number of parameters passed.', '5'),
(12, 'C++', 'Which concept allows you to reuse the written code?', 'Encapsulation', 'Abstraction', 'Inheritance', 'Polymorphism', '4', 'Inheritance allows you to reuse your already written code by inheriting the properties of written code into other parts of the code, hence allowing you to reuse the already written code.', '5'),
(13, 'C++', ' How access specifiers in Class helps in Abstraction?', 'They does not helps in any way', 'They allows us to show only required things to outer world', 'They help in keeping things together', ' Abstraction concept is not used in classes', '2', 'Abstraction is the concept of hiding things from the outer world and showing only the required things to the world, which is where access specifiers private, protected and public helps in keeping our knowledge hidden from the world.', '5'),
(14, 'C++', 'C++ is ______________', 'procedural programming language', ' object oriented programming language', 'functional programming language', ' both procedural and object oriented programming language', '4', 'C++ supports both procedural(step by step instruction) and object oriented programming(using concept of classes and objects).', '5'),
(15, 'C++', 'What does modularity mean?', 'Hiding part of program', 'Subdividing program into small independent parts', 'Overriding parts of program', 'Wrapping things into single unit', '2', 'Modularity means dividing a program into independent sub programs so that it can be invoked from other parts of the same program or any other program.', '5'),
(16, 'C#', 'Select a convenient declaration and initialization of a floating point number:', 'float somevariable = 12.502D', 'float somevariable = (Double) 12.502D', 'float somevariable = (float) 12.502D', 'float somevariable = (Decimal)12.502D', '3', 'We cannot implicitly convert a “double” number directly to any other data type. Here, its float we have to add the required data type to number as :', '5'),
(17, 'C#', 'Number of digits upto which precision value of float data type is valid?', ' Upto 6 digit', ' Upto 8 digit', 'Upto 9 digit', ' Upto 7 digit', '4', 'By definition.', '5'),
(18, 'C#', 'Valid Size of float data type is?', ' 10 Bytes', '6 Bytes', '4 Bytes', '8 Bytes', '3', 'By definition.', '5'),
(19, 'C#', ' A float occupies 4 bytes. If the hexadecimal equivalent of these 4 bytes are A, B, C and D, then when this float is stored in memory in which of the following order do these bytes gets stored?', 'ABCD', 'DCBA', '0 * ABCD', 'Depends on big endian or little endian architecture', '2', '“Little Endian” means that the lower-order byte of the number is stored in memory at the lowest address, and the high order byte at the highest address. For example, a 4 byte Integer ABCD will be arranged in memory as follows: Base Address + 0 Byte 0. Bas', '5'),
(20, 'C#', 'The Default value of Boolean Data Type is?', '0', 'True', 'False', '1', '3', 'By Definition.', '5'),
(21, 'C#', 'Which of the following format specifiers is used to print hexadecimal values and return value of output as Octal equivalent in C#?', '%hx for small case letters and %HX for capital letters', '%x for small case letters and %X for capital letters', 'No ease of doing it. C# don’t provides specifier like %x or %O to be used with ReadLine() OR WriteLine(). We have to write our own function', ' %Ox for small case letters and %OX for capital letters', '3', 'No ease of doing it. C# don’t provides specifier like %x or %O to be used with ReadLine() OR WriteLine(). We have to write our own function.', '5'),
(22, 'C#', 'How many values does a function return?', '0', '2', '1', 'any number of values', '3', ' A method can return only either single value or no value if no then it’s declared as void method();', '5'),
(23, 'DIGITAL COMMUNICATION', 'Which circuit is called as regenerative repeaters?', 'Analog circuits', 'Digital circuits', ' Amplifiers', 'A/D converters', '2', 'The main advantage of digital communication is that the signals can be reproduced easily. Thus digital circuits are called as regenerative repeaters.', '1'),
(24, 'DIGITAL COMMUNICATION', 'What are the advantages of digital circuits?', 'Less noise', 'Less interference', 'More flexible', 'All of the mentioned', '4', 'Digital circuits are less subject to noise, distortion and interference as it works on digital pulses and also the pulses can be regenerated.', '1'),
(25, 'DIGITAL COMMUNICATION', 'How many different combinations can be made from a n bit value?', '2(n+1)', '2(n)', '2(n)+1', ' None of the mentioned', '2', '2(n) different combinations can be made from n bit value. For example, from 2 bit value 22 different combinations-00,01,10,11 can be made.', '1'),
(26, 'DIGITAL COMMUNICATION', 'How many bytes does a gigabyte have?', '1 million bytes', '10 million bytes', '1 billion bytes', '10 billion bytes', '3', 'One gigabyte has 1 billion bytes.', '1'),
(27, 'DIGITAL COMMUNICATION', 'What is the ASCII value of space?', '32', ' 48', ' 96', '65', '1', 'The ASCII value of space is 32 and ASCII value of 0 is 48.', '1'),
(28, 'DIGITAL COMMUNICATION', 'Which block or device does the data compression?', 'Channel encoder', 'Source encoder', 'Modulator', 'None of the mentioned', '2', ' Source encoder converts the digital or analog signal to a sequence of binary digits. This process is called as source encoding or compression.', '1'),
(29, 'DIGITAL COMMUNICATION', 'What is the code rate?', ' k/n', ' n/k', 'All of the mentioned', 'None of the mentioned', '1', 'Here n is the total bits of sequence and k bits are mapped. Amount of redundancy introduced is given by n/k and its reciprocal is the code rate.', '1'),
(30, 'DIGITAL COMMUNICATION', ' Pulse shaping is done by which block or system?', 'Encoder', 'Baseband modulator', 'Pulse code modulator', 'Demodulator', '3', 'Pulse code modulator does filtering process to build pulses that occupy more than one bit time.', '1'),
(31, 'DIGITAL COMMUNICATION', 'Equalizer is used for?', 'Filtering', 'Diminish distortion', 'All of the mentioned', ' None of the mentioned', '3', ' Equalizer is used as a filtering option and also diminishes or reduces the distortion.', '1'),
(32, 'DIGITAL COMMUNICATION', 'Source coding block is used for?', 'Compressing', 'Digitizing', 'A/D conversion', ' All of the mentioned', '4', 'Source encoding does all these processes-compression, digitizing the signal and performs analog to digital conversion.', '1'),
(33, 'DIGITAL COMMUNICATION', 'Which measurement considers phase as an important parameter?', 'Coherent', 'Non-coherent', 'All of the mentioned', ' None of the mentioned', '1', 'Coherent measurement considers phase as an important parameter.', '1'),
(34, 'DIGITAL COMMUNICATION', 'The size of the alphabet M in symbol is calculated as?', '2(k+1)', ' 2k', '2(k-1)', '1+2k', '2', 'The size of the alphabet is calculated using 2^k where k is the number of bits in the symbol.', '1'),
(35, 'DIGITAL COMMUNICATION', 'Random variables give relationship between _____', 'Two random events', 'Probability of occurence of two random events', 'Random event and a real number', 'Random event and its probability of occurrence', '3', 'A random variable gives a functional relationship between a random event and a real number.', '1'),
(36, 'CLOUD COMPUTING', ' _________ computing refers to applications and services that run on a distributed network using virtualized resources.', 'Distributed', 'Cloud', 'Soft', 'Parallel', '2', 'Cloud Computing applications are accessed by common Internet protocols and networking standards.', '1'),
(37, 'CLOUD COMPUTING', 'Point out the wrong statement.', 'The massive scale of cloud computing systems was enabled by the popularization of the Internet', 'Soft computing represents a real paradigm shift in the way in which systems are deployed', 'Cloud computing makes the long-held dream of utility computing possible with a pay-as-you-go, infinitely scalable, universally available system', 'All of the mentioned', '2', 'Cloud Computing is distinguished by the notion that resources are virtual and limitless and that details of the physical systems on which software runs are abstracted from the user.', '1'),
(38, 'CLOUD COMPUTING', '________ as a utility is a dream that dates from the beginning of the computing industry itself.', 'Model', 'Computing', 'Software', 'All of the mentioned', '2', ' Cloud computing takes the technology, services, and applications that are similar to those on the Internet and turns them into a self-service utility.', '1'),
(39, 'CLOUD COMPUTING', 'Which of the following is essential concept related to Cloud?', 'Reliability', 'Productivity', ' Abstraction', 'All of the mentioned', '3', 'Cloud computing abstracts the details of system implementation from users and developers.', '1'),
(40, 'CLOUD COMPUTING', ' Point out the wrong statement.', 'All applications benefit from deployment in the cloud', ' With cloud computing, you can start very small and become big very fast', ' Cloud computing is revolutionary, even if the technology it is built on is evolutionary', ' None of the mentioned', '1', 'Issues with latency, transaction control, and in particular security and regulatory compliance are of particular concern.', '1'),
(41, 'CLOUD COMPUTING', 'Which of the following cloud concept is related to pooling and sharing of resources?', 'Polymorphism', ' Abstraction', 'Virtualization', 'None of the mentioned', '3', ' Applications run on physical systems that aren’t specified, data is stored in locations that are unknown, administration of systems is outsourced to others, and access by users is ubiquitous.', '1'),
(42, 'CLOUD COMPUTING', '________ has many of the characteristics of what is now being called cloud computing.', ' Internet', 'Softwares', 'Web Service', ' All of the mentioned', '1', 'The Internet offers abstraction, runs using the same set of protocols and standards, and uses the same applications and operating systems.', '1'),
(43, 'CLOUD COMPUTING', ' Which of the following can be identified as cloud?', ' Web Applications', ' Intranet', ' Hadoop', 'All of the mentioned', '3', 'When an intranet becomes large enough that a diagram no longer wishes to differentiate between individual physical systems, the intranet too becomes identified as a cloud.', '1'),
(44, 'CLOUD COMPUTING', 'Cloud computing is an abstraction based on the notion of pooling physical resources and presenting them as a ________ resource.', 'real', ' virtual', 'cloud', 'none of the mentioned', '2', 'Cloud Computing is a new model for provisioning resources, for staging applications, and for platform-independent user access to services.', '1'),
(45, 'CLOUD COMPUTING', 'Which of the following is Cloud Platform by Amazon?', ' Azure', 'AWS', 'Cloudera', ' All of the mentioned', '2', 'One of the most successful cloud-based businesses is Amazon Web Services, which is an Infrastructure as a Service offering that lets you rent virtual computers on Amazon’s own infrastructure.', '1'),
(46, 'HUMAN RESOURCE MANAGEMENT', 'Human Resource departments are______________', ' line departments', 'authority department', 'service department', 'functional department', '3', ' ', '1'),
(47, 'HUMAN RESOURCE MANAGEMENT', 'What is human factor?', 'Micro and macro issues of socio­economic factor.', 'Interrelated Physiological, Psychological and Socio-ethical aspects of human being.', ' The entire concept of human behaviour', 'None of the above.', '2', ' ', '1'),
(48, 'HUMAN RESOURCE MANAGEMENT', 'Job Analysis is a systematic procedure for securing and reporting information defining a ______________.', ' specific job', 'specific product', 'specific service', 'all of these', '1', ' ', '1'),
(49, 'HUMAN RESOURCE MANAGEMENT', 'What are the factors responsible for the growth of HRM?', 'Development of scientific management and awakened sense of social responsibility.', 'The problem of how the available human resource could effectively minimise the cost and maximise the production', 'Technical factors, awakening amongst workers, attitude of the government, cultural and social system.', 'All the above.', '3', ' ', '1'),
(50, 'HUMAN RESOURCE MANAGEMENT', 'Which among the followings describe the skills that are available within the company?', 'Human Resource inventory', 'HRIS', 'Skills inventory', ' Management inventories', '1', ' ', '1'),
(51, 'DATA BASE SYSTEM', 'Which one of the following is used to define the structure of the relation, deleting relations and relating schemas?', ' DML(Data Manipulation Langauge)', 'DDL(Data Definition Langauge)', 'Query', ' Relational Schema', '2', 'Data Definition language is the language which performs all the operation in defining structure of relation.', '1'),
(52, 'DATA BASE SYSTEM', 'Which one of the following provides the ability to query information from the database and to insert tuples into, delete tuples from, and modify tuples in the database?', ' DML(Data Manipulation Langauge)', 'DDL(Data Definition Langauge)', 'Query', 'Relational Schema', '1', 'DML performs the change in the values of the relation.', '1'),
(53, 'DATA BASE SYSTEM', ' The basic data type char(n) is a _____ length character string and varchar(n) is _____ length character.', ' Fixed, equal', 'Equal, variable', 'Fixed, variable', 'Variable, equal', '3', 'Varchar changes its length accordingly whereas char has a specific length which has to be filled by either letters or spaces.', '1'),
(54, 'DATA BASE SYSTEM', 'An attribute A of datatype varchar(20) has the value “Avi”. The attribute B of datatype char(20) has value ”Reed”. Here attribute A has ____ spaces and attribute B has ____ spaces.', ' 3, 20', '20, 4', '20, 20', '3, 4', '1', 'Varchar changes its length accordingly whereas char has a specific length which has to be filled by either letters or spaces.', '1'),
(55, 'DATA BASE SYSTEM', 'To remove a relation from an SQL database, we use the ______ command.', 'Delete', ' Purge', 'Remove', 'Drop table', '4', ' Drop table deletes the whole structure of the relation .purge removes the table which cannot be obtained again.', '1'),
(56, 'DATA BASE SYSTEM', 'Updates that violate __________ are disallowed.', ' Integrity constraints', ' Transaction control', 'Authorization', 'DDL constraints', '1', 'Integrity constraint has to be maintained in the entries of the relation.', '1'),
(57, 'PHP', ' PHP files have a default file extension of_______', ' .html', '.xml', '.php', ' .ph', '3', 'To run a php file on the server, it should be saved as AnyName.php', '2'),
(58, 'PHP', 'What should be the correct syntax to write a PHP code?', ' < php >', ' < ? php ?>', '<? ?>', ' <?php ?>', '3', 'Every section of PHP code starts and ends by turning on and off PHP tags to let the server know that it needs to execute the PHP in between them.', '2'),
(59, 'PHP', ' Which version of PHP introduced Try/catch Exception?', 'PHP 4', 'PHP 5', 'PHP 6', 'PHP 5 and later', '4', 'PHP 5 version and later versions added support for Exception Handling.', '2'),
(60, 'PHP', ' How to define a function in PHP?', 'function {function body}', 'data type functionName(parameters) {function body}', 'functionName(parameters) {function body}', 'function functionName(parameters) {function body}', '4', 'PHP allows us to create our own user-defined functions. Any name ending with an open and closed parenthesis is a function. The keyword function is always used to begin a function.', '2'),
(61, 'PHP', 'Type Hinting was introduced in which version of PHP?', 'PHP 4', 'PHP 5', 'PHP 5.3', ' PHP 6', '2', 'PHP 5 introduced the feature of type hinting. With the help of type hinting, we can specify the expected data type of an argument in a function declaration. First valid types can be the class names for arguments that receive objects and the other are arra', '2'),
(62, 'PHP', 'A function in PHP which starts with __ (double underscore) is known as __________', ' Magic Function', ' Inbuilt Function', ' Default Function', 'User Defined Function', '1', 'PHP functions that start with a double underscore – a “__” – are called magic functions in PHP. They are functions that are always defined inside classes, and are not stand-alone functions.', '2'),
(63, 'PHP', 'Which of the following PHP functions accepts any number of parameters?', 'func_get_argv()', 'func_get_args()', 'get_argv()', 'get_argc()', '2', 'func_get_args() returns an array of arguments provided. One can use func_get_args() inside the function to parse any number of passed parameters. Here is an example:', '2'),
(64, 'PHP', 'Which one of the following PHP functions can be used to find files?', 'glob()', ' file()', 'fold()', 'get_file()', '1', 'The function glob() returns an array of filenames or directories which matches a specified pattern. The function returns an array of files/directories, or it will return FALSE on failure. Here is an example-', '2'),
(65, 'PHP', ' Which of the following PHP functions can be used to get the current memory usage?', 'get_usage()', ' get_peak_usage()', 'memory_get_usage()', 'memory_get_peak_usage()', '3', 'memory_get_usage() returns the amount of memory, in bytes, that’s currently being allocated to the PHP script. We can set the parameter ‘real_usage’ to TRUE to get total memory allocated from system, including unused pages. If it is not set or FALSE then ', '2'),
(66, 'PHP', 'Which of the following PHP functions can be used for generating unique ids?', 'uniqueid()', 'id()', ' md5()', 'mdid()', '1', 'The function uniqueid() is used to generate a unique ID based on the microtime (current time in microseconds). The ID generated from the function uniqueid() is not optimal, as it is based on the system time. To generate an ID which is extremely difficult ', '2'),
(67, 'PHP', 'Which one of the following functions can be used to compress a string?', 'zip_compress()', 'zip()', 'compress()', ' gzcompress()', '4', ' The function gzcompress() compresses the string using the ZLIB data format. One can achieve upto 50% size reduction using this function. The gzuncompress() function is used to uncompress the string.', '2'),
(68, 'PHP', 'Which of the below symbols is a newline character?', '</r>', '</n>', '/n', '/r', '2', ' PHP treats  as a newline character.', '2'),
(69, 'PHP', 'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?', '12', '1', 'Error', ' 5', '4', '?: is known as ternary operator. If condition is true then the part just after the ? is executed else the part after : .', '2'),
(70, 'AEC', 'The abbreviation PIV in the case of a diode stands for ____________', 'Peak Inferior Voltage', 'Problematic Inverse Voltage', 'Peak Inverse Voltage', ' Peak Internal Voltage', '3', 'PIV stands for Peak Inverse Voltage. It is the maximum reverse bias voltage which a diode can bear without breakdown.', '2'),
(71, 'AEC', 'What is meant by the PIV rating of a diode?', 'Maximum reverse bias potential which can be applied across a diode without breakdown', 'Maximum forward bias potential which can be applied across a diode without breakdown', 'Minimum potential required by a diode to reach conduction state', 'Maximum power allowable to a diode', '1', 'PIV rating indicates the maximum allowable reverse bias voltage which can be safely applied to a diode. If a reverse potential is greater than PIV rating then the diode will enter reverse breakdown region.', '2'),
(72, 'AEC', 'The voltage after which the diode current exponentially increases with forward bias is NOT known as ________', 'Offset voltage', 'Threshold potential', ' Firing potential', 'Peak forward voltage', '4', 'The voltage after which a diode increases rapidly is known as the offset voltage, threshold voltage, firing potential and cut-in voltage. Beyond this voltage, the forward bias voltage overcomes the potential barrier and rapid conduction occurs.', '2'),
(73, 'AEC', 'The diode current equation is not applicable in ____________', ' Forward biased state', 'Reverse biased state', 'Unbiased state', ' It is applicable in all bias states', '4', 'Diode equation is I=IO(eqV/kT – 1). It is applicable in all bias condition that is forward, reverse and unbiased states.', '2'),
(74, 'AEC', 'Emission coefficient of Germanium is ___________', '1', '1.1', '1.5', '2', '1', 'Emission coefficient or ideality factor accounts the effect of recombination taking place in the depletion region. The range of factor is from 1 to 2. For Germanium it is 1.', '2'),
(75, 'AEC', 'The ideality factor of Silicon is ___________', '1', '2', '1.3', '1.7', '2', ' Emission coefficient or ideality factor accounts the effect of recombination taking place in the depletion region. The range of factor is from 1 to 2. For silicon it is 2.', '2'),
(76, 'AEC', 'What is the value of the voltage equivalent of temperature at room temperature (27oC)?', '26mV', '36mV', '0.26mV', '260mV', '1', ' Voltage equivalent of temperature VT is equal to the product of Boltzman constant (J.K-1) and temperature in Kelvin. At a temperature of 27°C, it’s value is VT=KT/q=26mV.', '2'),
(77, 'AEC', 'What happens to cut-in voltage when the temperature increases?', ' Cut-in voltage increases', 'Cut-in voltage decreases', 'Cut-in voltage either increases or decreases', ' Cut-in voltage doesn’t depend on temperature', '2', 'As temperature increases the conductivity of a semiconductor increases. The diode conducts smaller voltage at larger temperature. Therefore, cut-in voltage decreases.', '2'),
(78, 'AEC', ' When temperature increases, reverse saturation current _________', 'Increases', 'Decreases', ' Doesn’t depend on temperature', ' Either increases or decreases', '1', 'As temperature increases the conductivity of a semiconductor increases. Reverse saturation current increases as temperature increases.', '2'),
(79, 'IOT', ' _________ allows us to control electronic components', 'RETful API', 'RESTful API', 'HTTP', 'MQTT', '1', 'RETful API that allows us to control electronic components connected to our Intel Galileo Gen 2 board through HTTP requests.', '2'),
(80, 'IOT', 'MQTT stands for _____________', 'MQ Telemetry Things', 'MQ Transport Telemetry', ' MQ Transport Things', ' MQ Telemetry Transport', '4', 'MQTT was known as MQ Telemetry Transport protocol. MQTT is a lightweight protocol that runs on top of the TCP/IP protocol.', '2'),
(81, 'IOT', ' MQTT is better than HTTP for sending and receiving data.', 'True', 'False', 'Non', 'No of them', '1', ' We want to send and receive data in real time through internet and RESTful API is not the most appropriate option to do this. Instead, we will work on MQTT which is lighter than HTTP.', '2'),
(82, 'IOT', 'MQTT is _________ protocol.', 'Machine to Machine', ' Internet of Things', 'Machine to Machine and Internet of Things', 'Machine Things', '3', 'The MQTT protocol is a machine to machine and Internet of thing connectivity protocol.', '2'),
(83, 'IOT', 'Which protocol is lightweight?', 'MQTT', 'HTTP', 'CoAP', 'SPI', '1', 'MQTT is a lightweight protocol that runs on top of the TCP/IP protocol and works with publish subscribe mechanism.', '2'),
(84, 'IOT', 'PubNub publishes and subscribes _________ in order to send and receive messages.', 'Network', 'Account', 'Portal', 'Keys', '4', 'It is necessary to generate our PubNub publishes and subscribes keys in order to send and receive messages in the network.', '2'),
(85, 'IOT', 'By clicking which key the PubNub will display public, subscribe, and secret keys.', ' Pane', ' Demo Keyset', 'Portal', 'Network', '2', 'Click on Demo keyset pane and PubNub will display public, subscribe, and secret keys. We must copy and paste each of these keys to use them in our code that will publish messages and subscribe to them.', '2'),
(86, 'IOT', 'The messageChannel class declares the _________ class attribute that defines the key string.', 'command_key', 'command-key', ' commandkey', 'Key_command', '1', ' The messageChannel class declares the command_key class attribute that defines the key string that defines what the code will understand as the command.', '2'),
(87, 'IOT', '_________ method saves the received arguments in three attributes.', '__Init', 'Init__', '__Init__', '_init_', '3', '__Init__ method saves the received arguments in three attributes with the same names.', '2');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `email`, `mobile`, `gender`, `dob`, `s_address`, `s_password`) VALUES
(1, 'NILANCHAL PATRA', 'nilanchal.patra3777@gmail.com', '9437658928', 'MALE', '2000-07-28', 'JAGATPUR,CUTTACK,ODISHA', 'Null1234@'),
(2, 'ANKIT MALLICK', 'ankitmallick004@gmail.com', '9938959561', 'MALE', '1999-08-31', 'KENDRAPARA', 'Ankit@123'),
(6, 'SOMYA SAHOO', 'somya1234@gmail.com', '7008654939', 'MALE', '1981-06-24', 'Cuttack', 'Soumya1234@');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `t_address` varchar(255) NOT NULL,
  `t_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `email`, `mobile`, `gender`, `dob`, `t_address`, `t_password`) VALUES
(1, 'SUPRAVA PADHI', 'sup@gmail.com', '6756743456', 'FEMALE', '1993-06-11', 'BBSR,ODISHA', 'Sup1234@'),
(2, 'AKASH GOUTAM', 'akash.1254@gmail.com', '4567689045', 'MALE', '1995-06-14', 'BANGLORE', 'Ask1234@'),
(3, 'SOROJ BHAIG', 'soroj123@gmail.com', '6875948403', 'MALE', '1994-06-15', 'CUTTACK,ODISHA', 'Soroj1234@'),
(4, 'PRATEEK SAHOO', 'prateek1234@gmail.com', '7890646756', 'MALE', '1990-06-09', 'JAGATPUR,CUTTACK,ODISHA', 'Pat1234@'),
(5, 'JYOTI PARIDA', 'jyoti@1234gmail.com', '6795840304', 'FEMALE', '1991-07-10', 'CUTTACK,ODISHA', 'Jyoti1234@');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `uni_id` int(11) NOT NULL,
  `uni_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`uni_id`, `uni_name`, `city`, `state`) VALUES
(1, 'BERHAMPUR UNIVERSITY', 'BERHAMPUR', 'ODISHA'),
(2, 'BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY', 'ROULKELA', 'ODISHA'),
(3, 'UTKAL UNIVERSITY', 'BHUBANESWAR', 'ODISHA'),
(4, 'SAMBALPUR UNIVERSITY', 'BURLA', 'ODISHA'),
(5, 'SRI SRI UNIVERSITY', 'CUTTACK', 'ODISHA'),
(6, 'RAVENSHAW UNIVERSITY', 'CUTTACK', 'ODISHA'),
(7, 'CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT', 'BHUBANESWAR', 'ODISHA'),
(8, 'CENTRAL UNIVERSITY OF ODISHA', 'KORAPUT', 'ODISHA'),
(9, 'NATIONAL LAW UNIVERSITY ODISHA', 'CUTTACK', 'ODISHA'),
(10, 'NORTH ORISSA UNIVERSITY', 'KORAPUT', 'ODISHA'),
(11, 'KIIT UNIVERSITY', 'BHUBANESWAR', 'ODISHA'),
(12, 'KHALILIKOTE UNIVERSITY BERHAMPUR', 'ROULKELA', 'ODISHA'),
(13, 'INDIAN INSTITUTE OF TECHNOLOGY', 'BHUBANESWAR', 'ODISHA'),
(14, 'FAKIR MOHAN UNIVERSITY', 'BERHAMPUR', 'ODISHA');

-- --------------------------------------------------------

--
-- Table structure for table `university_questions`
--

CREATE TABLE `university_questions` (
  `q_id` int(11) NOT NULL,
  `uni_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `file_location` varchar(255) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL,
  `approved` varchar(255) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university_questions`
--

INSERT INTO `university_questions` (`q_id`, `uni_name`, `course`, `branch`, `subject`, `semester`, `year`, `file_location`, `uploaded_by`, `approved`, `date_uploaded`) VALUES
(1, 'BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY', 'B-TECH', 'CSE', 'JAVA', '3', '2013', 'Question_Bank/BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY/B-TECH/CSE/JAVA/3/2021-03-02/btech-cse-3-sem-object-oriented-programming-using-java-pcs3i102-2018.pdf', '1', '1', '2021-03-02'),
(2, 'SAMBALPUR UNIVERSITY', 'B-TECH', 'CSE', 'DATA BASE SYSTEM', '3', '2015', 'Question_Bank/SAMBALPUR UNIVERSITY/B-TECH/CSE/DATA BASE SYSTEM/3/2021-03-03/btech-cse-4-sem-database-system-pcs4g001-2018.pdf', '1', '1', '2021-03-03'),
(3, 'CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT', 'B-TECH', 'CSE', 'DATA ANALYTICS', '3', '2013', 'Question_Bank/CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT/B-TECH/CSE/DATA ANALYTICS/3/2021-03-04/btech-cse-4-sem-data-analytics-pcs4d001-2018.pdf', '1', '0', '2021-03-04'),
(4, 'KIIT UNIVERSITY', 'B-TECH', 'CSE', 'MOBILE COMPUTING', '5', '2014', 'Question_Bank/KIIT UNIVERSITY/B-TECH/CSE/MOBILE COMPUTING/5/2021-03-05/btech-cse-5-sem-mobile-computing-pecs5301-2018.pdf', '1', '1', '2021-03-05'),
(5, 'NORTH ORISSA UNIVERSITY', 'B-TECH', 'CSE', 'SOFTWARE TESTING', '3', '2015', 'Question_Bank/NORTH ORISSA UNIVERSITY/B-TECH/CSE/SOFTWARE TESTING/3/2021-03-10/btech-cse-5-sem-software-testing-pcs5j103-2018.pdf', '1', '1', '2021-03-10'),
(6, 'BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY', 'B-TECH', 'CSE', 'CLOUD COMPUTING', '5', '2012', 'Question_Bank/BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY/B-TECH/CSE/CLOUD COMPUTING/5/2021-03-06/btech-cse-5-sem-cloud-computing-pcs5h001-2018.pdf', '2', '0', '2021-03-06'),
(7, 'INDIAN INSTITUTE OF TECHNOLOGY', 'B-TECH', 'CSE', 'DESIGN AND ANLYSIS OF ALGORITHM', '4', '2016', 'Question_Bank/INDIAN INSTITUTE OF TECHNOLOGY/B-TECH/CSE/DESIGN AND ANLYSIS OF ALGORITHM/4/2021-03-09/btech-cse-4-sem-design-and-analysis-of-algorithms-pcs4i102-2018.pdf', '2', '1', '2021-03-09'),
(8, 'FAKIR MOHAN UNIVERSITY', 'B-TECH', 'CSE', 'IOT', '7', '2017', 'Question_Bank/FAKIR MOHAN UNIVERSITY/B-TECH/CSE/IOT/7/2021-03-12/btech-cse-5-sem-internet-of-things-pcs5j102-2018.pdf', '2', '0', '2021-03-12'),
(9, 'CENTRAL UNIVERSITY OF ODISHA', 'B-TECH', 'CSE', 'AI', '5', '2016', 'Question_Bank/CENTRAL UNIVERSITY OF ODISHA/B-TECH/CSE/AI/5/2021-03-10/btech-cse-3-sem-artificial-intelligence-pcs3d001-2018.pdf', '2', '1', '2021-03-10'),
(10, 'NORTH ORISSA UNIVERSITY', 'B-TECH', 'CSE', 'ADVANCE JAVA', '4', '2016', 'Question_Bank/NORTH ORISSA UNIVERSITY/B-TECH/CSE/ADVANCE JAVA/4/2021-03-11/btech-cse-5-sem-advance-java-programming-pcs5j101-2018.pdf', '2', '0', '2021-03-11'),
(11, 'BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY', 'B-TECH', 'ENTC', 'AEC', '3', '2014', 'Question_Bank/BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY/B-TECH/ENTC/AEC/3/2021-03-11/btech-aeie-eie-iee-3-sem-analog-electronic-circuits-pei3i101-2018.pdf', '2', '0', '2021-03-11'),
(12, 'SAMBALPUR UNIVERSITY', 'B-TECH', 'ENTC', 'NT', '4', '2017', 'Question_Bank/SAMBALPUR UNIVERSITY/B-TECH/ENTC/NT/4/2021-03-13/btech-aeie-eie-iee-3-sem-network-theory-pei3i104-2018.pdf', '2', '1', '2021-03-13'),
(13, 'NORTH ORISSA UNIVERSITY', 'B-TECH', 'ENTC', 'CS', '4', '2016', 'Question_Bank/NORTH ORISSA UNIVERSITY/B-TECH/ENTC/CS/4/2021-03-13/btech-aeie-eie-iee-4-sem-control-system-engineering-pei4i102-2019.pdf', '2', '0', '2021-03-13'),
(14, 'NORTH ORISSA UNIVERSITY', 'B-TECH', 'ENTC', 'DSP', '5', '2014', 'Question_Bank/NORTH ORISSA UNIVERSITY/B-TECH/ENTC/DSP/5/2021-03-15/btech-aeie-eie-iee-5-sem-digital-signal-processing-pei5i103-2018.pdf', '2', '0', '2021-03-15'),
(15, 'CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT', 'B-TECH', 'ENTC', 'MPMC', '1', '2018', 'Question_Bank/CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT/B-TECH/ENTC/MPMC/1/2021-03-15/btech-ece-etc-4-sem-microprocessor-and-microcontroller-pet4i104-2018.pdf', '2', '1', '2021-03-15'),
(16, 'CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT', 'B-TECH', 'ENTC', 'DVLSI', '5', '2016', 'Question_Bank/CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT/B-TECH/ENTC/DVLSI/5/2021-03-17/btech-ece-etc-5-sem-digital-vlsi-design-pet5h002-2018.pdf', '3', '0', '2021-03-17'),
(17, 'CENTRAL UNIVERSITY OF ODISHA', 'B-TECH', 'ENTC', 'DIGITAL COMMUNICATION', '4', '2016', 'Question_Bank/CENTRAL UNIVERSITY OF ODISHA/B-TECH/ENTC/DIGITAL COMMUNICATION/4/2021-03-17/btech-ece-etc-6-sem-digital-communication-pet6i101-2019.pdf', '3', '0', '2021-03-17'),
(18, 'NORTH ORISSA UNIVERSITY', 'B-TECH', 'ENTC', 'EEC', '1', '2016', 'Question_Bank/NORTH ORISSA UNIVERSITY/B-TECH/ENTC/EEC/1/2021-03-17/btech-eee-3-sem-electrical-and-electronics-measurement-pel3g001-2018.pdf', '3', '0', '2021-03-17'),
(19, 'BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY', 'B-TECH', 'ENTC', 'OE', '5', '2016', 'Question_Bank/BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY/B-TECH/ENTC/OE/5/2021-03-18/btech-eee-5-sem-optimization-in-engineering-pel5h001-2018.pdf', '3', '1', '2021-03-18'),
(20, 'BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY', 'B-TECH', 'ENTC', 'DEC', '1', '2018', 'Question_Bank/BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY/B-TECH/ENTC/DEC/1/2021-03-18/btech-electrical-4-sem-digital-electronics-circuit-pcec4202-2019.pdf', '3', '0', '2021-03-18'),
(21, 'CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT', 'B-TECH', 'CIVIL', 'CONSTRUCTION TECHNOLOGY', '5', '2014', 'Question_Bank/CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT/B-TECH/CIVIL/CONSTRUCTION TECHNOLOGY/5/2021-03-18/btech-civil-3-sem-construction-technology-pci3i002-2018.pdf', '3', '0', '2021-03-18'),
(22, 'CENTRAL UNIVERSITY OF ODISHA', 'B-TECH', 'CIVIL', 'ENERGY CONSERVATION TECHNIQUE', '5', '2017', 'Question_Bank/CENTRAL UNIVERSITY OF ODISHA/B-TECH/CIVIL/ENERGY CONSERVATION TECHNIQUE/5/2021-03-11/btech-civil-4-sem-energy-conversion-techniques-feee2215-2018.pdf', '3', '1', '2021-03-11'),
(23, 'BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY', 'B-TECH', 'CIVIL', 'GEO-TECHNICAL ENGINEERING', '7', '2015', 'Question_Bank/BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY/B-TECH/CIVIL/GEO-TECHNICAL ENGINEERING/7/2021-03-19/btech-civil-4-sem-geo-technical-engineering-pcce4206-2018.pdf', '3', '0', '2021-03-19'),
(24, 'KIIT UNIVERSITY', 'B-TECH', 'CIVIL', 'HIGHWAY-AND-TRAFFIC-ENGINEERING', '1', '2016', 'Question_Bank/KIIT UNIVERSITY/B-TECH/CIVIL/HIGHWAY-AND-TRAFFIC-ENGINEERING/1/2021-03-19/btech-civil-4-sem-highway-and-traffic-engineering-pci4i102-2019.pdf', '3', '1', '2021-03-19'),
(25, 'NORTH ORISSA UNIVERSITY', 'B-TECH', 'CIVIL', 'OB', '5', '2016', 'Question_Bank/NORTH ORISSA UNIVERSITY/B-TECH/CIVIL/OB/5/2021-03-20/btech-civil-4-sem-organisational-behaviour-hssm3205-2019.pdf', '3', '0', '2021-03-20'),
(26, 'BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY', 'B-TECH', 'CIVIL', 'STRACTURAL ANALYSIS', '4', '2018', 'Question_Bank/BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY/B-TECH/CIVIL/STRACTURAL ANALYSIS/4/2021-03-20/btech-civil-4-sem-structural-analysis-1-pcce4204-2018.pdf', '4', '0', '2021-03-20'),
(27, 'CENTRAL UNIVERSITY OF ODISHA', 'B-TECH', 'CIVIL', 'HUMAN RESOURCE MANAGEMENT', '7', '2018', 'Question_Bank/CENTRAL UNIVERSITY OF ODISHA/B-TECH/CIVIL/HUMAN RESOURCE MANAGEMENT/7/2021-03-21/btech-civil-5-sem-human-resource-management-pci5h001-2018.pdf', '4', '0', '2021-03-21'),
(28, 'NORTH ORISSA UNIVERSITY', 'choose the option', 'CIVIL', 'WATER-RESOURCE-ENGINEERING', '5', '2013', 'Question_Bank/NORTH ORISSA UNIVERSITY/choose the option/CIVIL/WATER-RESOURCE-ENGINEERING/5/2021-03-21/btech-civil-5-sem-water-resources-engineering-pci5j001-2018.pdf', '4', '0', '2021-03-21'),
(29, 'BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY', 'B-TECH', 'MECHANICAL', 'C++', '6', '2016', 'Question_Bank/BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY/B-TECH/MECHANICAL/C++/6/2021-03-19/btech-manu-mech-4-sem-cpp-and-object-oriented-programming-becs2212-2018.pdf', '4', '0', '2021-03-19'),
(30, 'CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT', 'B-TECH', 'MECHANICAL', 'MATH', '4', '2018', 'Question_Bank/CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT/B-TECH/MECHANICAL/MATH/4/2021-03-20/btech-mech-3-sem-applied-mathematics-pme3d001-2018.pdf', '4', '0', '2021-03-20'),
(31, 'KIIT UNIVERSITY', 'B-TECH', 'MECHANICAL', 'INTRODUCTION-TO-PHYSICAL-METALLURGY-AND-ENGINEERING-MATERIALS', '5', '2017', 'Question_Bank/KIIT UNIVERSITY/B-TECH/MECHANICAL/INTRODUCTION-TO-PHYSICAL-METALLURGY-AND-ENGINEERING-MATERIALS/5/2021-03-20/btech-mech-3-sem-introduction-to-physical-metallurgy-and-engineering-materials-pme3i001-2018.pdf', '4', '1', '2021-03-20'),
(32, 'NORTH ORISSA UNIVERSITY', 'B-TECH', 'MECHANICAL', 'KINEMATICS-AND-DYNAMICS-OF-MACHINES', '5', '2017', 'Question_Bank/NORTH ORISSA UNIVERSITY/B-TECH/MECHANICAL/KINEMATICS-AND-DYNAMICS-OF-MACHINES/5/2021-03-21/btech-mech-3-sem-kinematics-and-dynamics-of-machines-pme3i104-2018.pdf', '4', '0', '2021-03-21'),
(33, 'CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT', 'B-TECH', 'MECHANICAL', 'MECHANICS-OF-SOLID', '4', '2017', 'Question_Bank/CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT/B-TECH/MECHANICAL/MECHANICS-OF-SOLID/4/2021-03-20/btech-mech-3-sem-mechanics-of-solid-pme3i101-2018.pdf', '5', '1', '2021-03-20'),
(34, 'BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY', 'B-TECH', 'MECHANICAL', 'BASIC-MANUTURING-PROCESS', '4', '2018', 'Question_Bank/BIJU PATNAYAK UNIVERSITY OF TECHNOLOGY/B-TECH/MECHANICAL/BASIC-MANUTURING-PROCESS/4/2021-03-20/btech-mech-4-sem-basic-manuturing-process-pme4i102-2018.pdf', '5', '0', '2021-03-20'),
(35, 'INDIAN INSTITUTE OF TECHNOLOGY', 'B-TECH', 'MECHANICAL', 'RAPID-MANUTURING-PROCESS', '4', '2016', 'Question_Bank/INDIAN INSTITUTE OF TECHNOLOGY/B-TECH/MECHANICAL/RAPID-MANUTURING-PROCESS/4/2021-03-21/btech-mech-4-sem-rapid-manuturing-process-pme4d003-2018.pdf', '5', '0', '2021-03-21'),
(36, 'KIIT UNIVERSITY', 'B-TECH', 'MECHANICAL', 'STATISTICAL-QUALITY-CONTROL', '5', '2019', 'Question_Bank/KIIT UNIVERSITY/B-TECH/MECHANICAL/STATISTICAL-QUALITY-CONTROL/5/2021-03-19/btech-mech-4-sem-statistical-quality-control-pme4d001-2018.pdf', '5', '1', '2021-03-19'),
(37, 'CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT', 'B-TECH', 'MECHANICAL', 'ENGINEERING-THERMODYNAMICS', '4', '2017', 'Question_Bank/CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT/B-TECH/MECHANICAL/ENGINEERING-THERMODYNAMICS/4/2021-03-21/btech-mech-pt-3-sem-engineering-thermodynamics-pme3i103-2018.pdf', '5', '0', '2021-03-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `contact_id` (`contact_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `mcq_question`
--
ALTER TABLE `mcq_question`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`uni_id`);

--
-- Indexes for table `university_questions`
--
ALTER TABLE `university_questions`
  ADD PRIMARY KEY (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mcq_question`
--
ALTER TABLE `mcq_question`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `uni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `university_questions`
--
ALTER TABLE `university_questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
