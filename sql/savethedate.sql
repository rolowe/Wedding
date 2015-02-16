-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: mysql.robandrachwedding.com
-- Generation Time: Jan 13, 2014 at 06:20 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `savethedate`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `location` varchar(600) NOT NULL,
  `description` varchar(800) NOT NULL,
  `beds` varchar(20) NOT NULL,
  `extra_beds` varchar(500) NOT NULL,
  `price` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;


--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `photo`, `floor`, `location`, `description`, `beds`, `extra_beds`, `price`) VALUES
(1, 'The Beech Room', 'Beech.jpg', 'G', '', 'A room specially designed for those guests who are unable to manage stairs easily or for those requiring disabled facilities, complete with two single beds and an en-suite shower and toilet.', '2 singles', 'With Disabled Facilities', '95'),
(2, 'Newbolt', 'Newbolt.jpg', '1', '', 'Named after the Poet Laureate Sir Henry Newbolt who lived at Orchardleigh House. This 24 x 21 room is south-facing with a king-size sled bed and it''s own adjoining Victorian bathroom.', '1 double', 'Space for 2 extra single beds', '156'),
(3, 'The Bonita Suite', 'Bonita-Suite-5.jpg', '1', '', 'This 27'' x 24'' room is south-facing with a king-size 4-poster bed and a beautiful en-suite bathroom incorporating a bath and very large shower.', '1 Double', 'Space for 2 extra single beds', '156'),
(4, 'The Vine room', 'Vine-2.jpg', '1', '', 'Situated next to Lord Byron''s room, with south-facing views of the Estate. A queen-sized bed with an en-suite shower, wash basin and toilet.', '1 Double', '', '140'),
(5, 'Oriel', 'Oriel-1.jpg', '1', '', 'A beautiful large 26 x 24 family room with a semi-circular Oriel window, this room has a king-size double bed, with a superb large en suite incorporating a bath and large shower.', '1 Double', 'Space for 4 extra single beds', '156'),
(6, 'Coronation', 'Corination-1.jpg', '1', '', 'With views over the Golf Course and the Oak tree planted for the Coronation, this 15'' x 15'' room has a king-size sled bed and an en- suite shower, wash basin and toilet.', '1 Double', '', '130'),
(7, 'Guest Room 1', 'Guest-Room-1.jpg', '1', '', 'This 15'' x 20'' room has beautiful views over the Golf Course and the front gardens of the House, with a king-size bed and an en- suite bathroom.', '1 Double', 'Space for 1 extra single bed', '125'),
(8, 'Little Rose', 'Little-Rose-1.jpg', '1', '', 'With views over the East Rose Garden, this cosy 12'' x 14'' room has a four poster bed, with a Victorian en-suite bathroom.', '1 Double', '', '130'),
(9, 'Lord Byrons', 'Lord-Byron-2.jpg', '1', '', 'This large 30'' x 27'' room was the Master''s bedroom and has an enormous 7'' x 6''6" Rococo bed, with a beautiful en-suite bath and large shower.', '1 Double', 'Space for 3 extra single beds', '156'),
(10, 'Miss Ds South', 'Miss-Ds-South-2.jpg', '2', '', 'Named after the Master''s daughter, this 15'' x 21'', South-facing room has one king-size bed and a bathroom which is shared only with Miss D''s North.', '1 Double', '', '120'),
(11, 'Miss Ds North', 'Miss-Ds-North.jpg', '2', '', 'This 15'' x 15'', East-facing room has two single beds and a bathroom which is shared only with Miss D''s South.', '2 Singles', '', '90'),
(12, 'Foxholes', 'Foxholes-2.jpg', '2', '', 'Overlooking the Golf Course and Foxholes Wood, this 21'' x 15'' room has one king-size bed and an en suite bathroom.', '1 Double', '', '130'),
(13, 'The Tower', 'Tower-1.jpg', '2', '', 'As the name suggests, this suite is situated in the main tower, the en-suite bathroom has a massive 4'' x 6'' bath with a separate walk-in shower and the upstairs bedroom is 18'' x 15'' with a 4-poster bed.', '1 Double', '', '156'),
(14, 'Guest Room 2', 'Guest-Room-2.jpg', '2', '', 'With beautiful views over the Golf Course and the front of the House, this 15'' x 20'' room has a double bed and an en-suite bathroom.', '1 Double', '', '120'),
(15, 'Ily', 'Ily-Room-2.jpg', '2', '', 'The beautiful East-facing 24'' x 24'' room has a 4-Poster bed, with an en-suite bathroom which has a sunken 4'' x 6'' bath.', '1 Double', 'Space for 3 extra single beds', '156'),
(16, 'Reid', 'Reid-1.jpg', '2', '', 'This 18'' x 18'' room has beautiful views over the Eastern formal gardens and has a king-size bed with an en suite bath wash basin and toilet.', '1 Double', '', '130'),
(17, 'Ford', 'Ford-Room-1.jpg', '2', '', 'With views over the Formal Gardens and the Lake, this room 20'' x 17'' has one 4- Poster bed with an en suite bath, wash basin and toilet.', '1 Double', '', '130'),
(18, 'Clanville', 'Clanville.jpg', '1', 'East Wing', 'With views over the Eastern Formal Gardens, this newly-restored room has a double bed and an en-suite shower room wash basin and toilet.', '1 Double', 'Space for 1 extra single bed', '125'),
(19, 'Topiary', 'Topiary.jpg', '1', 'East Wing', 'With views over the Eastern Formal Gardens, this newly-restored room has two single beds and an en-suite shower room wash basin and toilet.', '2 Single', '', '60'),
(20, 'Elmhay', 'Elmhay-1.jpg', '1', 'East Wing', 'This large, newly-restored room has stunning views over the Gardens and the Lake and has a king-size 4-poster bed with en-suite shower, wash basin and toilet.', '1 Double', '', '130'),
(21, 'Elsies', 'Elsies.jpg', '1', 'East Wing', 'An original Housekeeper''s bedroom, this large room has views over the front of the House with one double bed and one single bed with an en-suite shower room wash basin and toilet.', '1 Double & 1 Single', 'Space for 1 extra single bed', '145'),
(22, 'Jessies', 'Jessies.jpg', '1', 'East Wing', 'This lovely, newly-restored room has views towards the Golf Course, with one double bed and an en-suite shower wash basin and toilet.', '1 Double', '', '140'),
(23, 'Boot Boy', 'Bootboy.jpg', '1', 'East Wing: Mezzanine floor', 'Located in the original Gentlemens'' servant''s quarters and with views towards the Golf Course, this panelled room has two single beds and an en-suite shower room wash basin and toilet.', '2 Single', '', '70'),
(24, 'Stable Lad', 'Stable-lad.jpg', '1', 'East Wing: Mezzanine floor', 'Located in the original Gentlemens'' servant''s quarters overlooking the Victorian Kitchen Yard, this panelled room has two single beds and an en-suite shower room wash basin and toilet.', '2 Single', '', '70'),
(25, 'Footman', 'Footman.jpg', '1', 'East Wing: Mezzanine floor', 'Located in the original Gentlemens'' servant''s quarters overlooking the Victorian Kitchen Yard, this panelled room has two single beds and an en-suite shower room wash basin and toilet.', '2 Single', '', '70'),
(26, 'Coachman', 'Coachman.jpg', '1', 'East Wing: Mezzanine floor', 'Located in the original Gentlemens'' servant''s quarters overlooking the Victorian Kitchen Yard, this panelled room has two single beds and an en-suite shower room wash basin and toilet.', '2 Single', '', '70'),
(27, 'Ladies East', 'Ladies-East.jpg', '2', 'East Wing', 'Located in the original Ladies'' servant''s quarters overlooking the Golf Course, this panelled room has one double bed and with an en- suite shower wash basin and toilet.', '1 Double', '', '115'),
(28, 'Ladies West', 'Ladies-West.jpg', '2', 'East Wing', 'Located in the original Ladies'' servant''s quarters and with views towards the Golf Course, this panelled room has one double bed and an en-suite shower wash basin and toilet.', '1 Double', '', '115'),
(29, 'Housekeepers', 'Housekeeper.jpg', '2', 'East Wing', 'Newly-restored, this room has views across the Golf course and has one double bed with an en-suite bath wash basin and toilet.', '1 Double', '', '130'),
(30, 'Butlers', 'Butler.jpg', '2', 'East Wing', 'The cosy Butler''s bedroom has a stunning view of the Lake and surrounding parkland and has one double bed with an en-suite shower room wash basin and toilet.', '1 Double', '', '60'),
(31, 'Head Butlers', 'Head-Butler.jpg', '2', 'East Wing', 'The Head Butlers bedroom has views across the Park towards the Lake and has one double bed and one single bed with a beautifully created en-suite bathroom.', '1 Double & 1 Single', '', '125'),
(32, 'Horseshoe Room', 'Horseshoe.jpg', '2', 'East Wing', 'This quirky timber-beamed loft room, built into the roof of the House, has lots of natural light from above, as well as one double bed with an en-suite shower wash basin and toilet.', '1 Double', '', '125'),
(33, 'Rosies Cottage - Room 1', 'Rosies-room1.JPG', 'C', 'Courtyard', 'Originally being part of the Laundry for the main house, this cottage has a very ornate ceiling in the sitting room, and access to the gardens. Two double en suite bedrooms, and a dining room,  with access to Bumblinos cottage if required.', '1 Double', '', '90'),
(34, 'Rosies Cottage - Room 2 - Basement', 'Rosies-Room2.JPG', 'C', 'Courtyard', 'Originally being part of the Laundry for the main house, this cottage has a very ornate ceiling in the sitting room, and access to the gardens. Two double en suite bedrooms, and a dining room, with access to Bumblinos cottage if required.', '1 Double', '', '70'),
(35, 'Bumbelinos - Room 1', 'Bumbolinos-room1.JPG', 'C', 'Courtyard', 'Access gained through Rosies Cottage. This accommodation comprises of two double en suite bedrooms and one twin en suite bedroom, all having beautiful views of the east garden.', '2 Singles', '', '90'),
(36, 'Bumbelinos - Room 2', 'Bumbelinos-room2.JPG', 'C', 'Courtyard', 'Access gained through Rosies Cottage. This accommodation comprises of two double en suite bedrooms and one twin en suite bedroom, all having beautiful views of the east garden.', '1 Double', '', '90'),
(37, 'Bumbelinos - Room 3', 'Bumbelinos-room3.JPG', 'C', 'Courtyard', 'Access gained through Rosies Cottage. This accommodation comprises of two double en suite bedrooms and one twin en suite bedroom, all having beautiful views of the east garden.', '1 Double', '', '110'),
(38, 'Master Bens - Room 1', 'MasterBens-room1.JPG', 'C', 'Courtyard', 'This is part of our recent converted accommodation, comprising of one double en suite room downstairs, and upstairs there is two twin rooms above sharing a bathroom. One twin en suite and one double en suite.', '1 Double', '', '110'),
(39, 'Master Bens - Room 2', 'Masterbens-room2.JPG', 'C', 'Courtyard', 'This is part of our recent converted accommodation, comprising of one double en suite room downstairs, and upstairs there is two twin rooms above sharing a bathroom. One twin en suite and one double en suite.', '2 Singles', '', '60'),
(40, 'Master Bens - Room 3', 'Courtyard_Plan.jpg', 'C', 'Courtyard', 'This is part of our recent converted accommodation, comprising of one double en suite room downstairs, and upstairs there is two twin rooms above sharing a bathroom. One twin en suite and one double en suite.', '2 Singles', '', '60'),
(41, 'Master Bens - Room 4', 'Courtyard_Plan.jpg', 'C', 'Courtyard', 'This is part of our recent converted accommodation, comprising of one double en suite room downstairs, and upstairs there is two twin rooms above sharing a bathroom. One twin en suite and one double en suite.', '1 Double', '', '110'),
(42, 'Master Bens - Room 5', 'Courtyard_Plan.jpg', 'C', 'Courtyard', 'This is part of our recent converted accommodation, comprising of one double en suite room downstairs, and upstairs there is two twin rooms above sharing a bathroom. One twin en suite and one double en suite.', '2 Singles', '', '110'),
(43, 'Jumping Jacks - Room 1', 'JumpingJacks-room1.JPG', 'C', 'Courtyard', 'Our latest conversion, comprises of two rooms. Downstairs there is a comfortable family room with one double and one single bed, en suite shower room. Upstairs is a double room, with a shower over bath en suite.', '1 Double & 1 Single', '', '110'),
(44, 'Jumping Jacks - Room 2', 'Courtyard_Plan.jpg', 'C', 'Courtyard', 'Our latest conversion, comprises of two rooms. Downstairs there is a comfortable family room with one double and one single bed, en suite shower room. Upstairs is a double room, with a shower over bath en suite.', '1 Double', '', '90');

-- --------------------------------------------------------

--
-- Table structure for table `room_booking`
--

CREATE TABLE IF NOT EXISTS `room_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wedding_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `names` varchar(900) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `extra_beds` varchar(20) NOT NULL,
  `payment_method` varchar(200) NOT NULL,
  `payment_recieved` varchar(155) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

-- --------------------------------------------------------

--
-- Table structure for table `wedding_info`
--

CREATE TABLE IF NOT EXISTS `wedding_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` varchar(155) NOT NULL,
  `bride` varchar(300) NOT NULL,
  `bride_photo` varchar(200) NOT NULL,
  `groom` varchar(300) NOT NULL,
  `groom_photo` varchar(300) NOT NULL,
  `date` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `description` varchar(600) NOT NULL,
  `address` varchar(500) NOT NULL,
  `acc_number` varchar(50) NOT NULL,
  `acc_sort` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
