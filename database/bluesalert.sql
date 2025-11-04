/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bluesalert

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2025-05-13 08:36:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `koppel`
-- ----------------------------
DROP TABLE IF EXISTS `koppel`;
CREATE TABLE `koppel` (
  `uid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  KEY `uid` (`uid`),
  KEY `sid` (`sid`),
  CONSTRAINT `koppel_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`),
  CONSTRAINT `koppel_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `songs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of koppel
-- ----------------------------
INSERT INTO `koppel` VALUES ('1', '108');
INSERT INTO `koppel` VALUES ('1', '263');
INSERT INTO `koppel` VALUES ('1', '2');
INSERT INTO `koppel` VALUES ('1', '313');
INSERT INTO `koppel` VALUES ('1', '314');
INSERT INTO `koppel` VALUES ('1', '315');

-- ----------------------------
-- Table structure for `songs`
-- ----------------------------
DROP TABLE IF EXISTS `songs`;
CREATE TABLE `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=316 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of songs
-- ----------------------------
INSERT INTO `songs` VALUES ('1', 'Andre Hazes & Kaz Lux', 'The Trill Is Gone');
INSERT INTO `songs` VALUES ('2', 'AJ Plug', 'Tears Ran Dry');
INSERT INTO `songs` VALUES ('3', 'Sean Webster Band', 'Till Summer Comes Around');
INSERT INTO `songs` VALUES ('4', 'Leif De Leeuw band', 'Mr Hangman');
INSERT INTO `songs` VALUES ('5', 'Flavium', 'Nightlife');
INSERT INTO `songs` VALUES ('6', 'Montoya', 'Five Long Years');
INSERT INTO `songs` VALUES ('7', 'Livin\' Blues', 'LB  Boogie');
INSERT INTO `songs` VALUES ('8', 'Captain Morgan Express', 'Ridin\' In The Moonlight');
INSERT INTO `songs` VALUES ('9', 'King Of The World', 'Bluesified');
INSERT INTO `songs` VALUES ('10', 'Twelve Bar Blues Band', 'Bluesman');
INSERT INTO `songs` VALUES ('11', 'The Rude Move', 'Blues Is My Only Friend');
INSERT INTO `songs` VALUES ('12', 'Basic Station', 'Brother Sam');
INSERT INTO `songs` VALUES ('13', 'Cuby & The Blizzards', 'Night Train');
INSERT INTO `songs` VALUES ('14', 'Cuby & The Blizzards', 'Back Home');
INSERT INTO `songs` VALUES ('15', 'Wildman Bluesband', 'Devil');
INSERT INTO `songs` VALUES ('16', 'AJ Plug And The Wildgrooves', 'Blues Village');
INSERT INTO `songs` VALUES ('17', 'Mo & The Stage Animals', 'Tore Down');
INSERT INTO `songs` VALUES ('18', 'Raymunda', 'Thats Enough');
INSERT INTO `songs` VALUES ('19', 'Robert Smith Bluesband', 'Cry Like A Baby');
INSERT INTO `songs` VALUES ('20', 'Gait Klein Kromhof', 'Another Man Has Done Gone');
INSERT INTO `songs` VALUES ('21', 'Cuby & The Blizzards', 'Crying Tears');
INSERT INTO `songs` VALUES ('22', 'Big Daddy\'s Breakfast Voodoo', 'Big Bad Wolf');
INSERT INTO `songs` VALUES ('23', 'Twelve Bar Blues Band', 'Can You Hear Me Howling');
INSERT INTO `songs` VALUES ('24', 'Bintangs', 'Fighting A Losing Battle');
INSERT INTO `songs` VALUES ('25', 'Julian Sas', 'Burning Bridges');
INSERT INTO `songs` VALUES ('26', 'Big Bo', 'Travelin\' Riverside Blues');
INSERT INTO `songs` VALUES ('27', 'John The Revelator', 'Wild Blues');
INSERT INTO `songs` VALUES ('28', 'Hans Teesink', 'Slow Train');
INSERT INTO `songs` VALUES ('29', 'Bintangs', 'St Louis Blues');
INSERT INTO `songs` VALUES ('30', 'Erin Java', 'I Putt A Spell On You');
INSERT INTO `songs` VALUES ('31', 'Dave Warmerdam Band', 'Our Fire Still Burns On');
INSERT INTO `songs` VALUES ('32', 'Michael De Jong', 'Grown Man Moan');
INSERT INTO `songs` VALUES ('33', 'Wildman Bluesband', 'Crying');
INSERT INTO `songs` VALUES ('34', 'Bintangs', 'Agnes Grey');
INSERT INTO `songs` VALUES ('35', 'Big Daddy\'s Breakfast Voodoo', 'Baba Yaga');
INSERT INTO `songs` VALUES ('36', 'Ralph De Jongh', 'Highway Man');
INSERT INTO `songs` VALUES ('37', 'Cuby & The Blizzards', 'Gin House Blues');
INSERT INTO `songs` VALUES ('38', 'Bintangs', 'Blues On The Ceiling');
INSERT INTO `songs` VALUES ('39', 'Barrelhouse', 'Tell Me More');
INSERT INTO `songs` VALUES ('40', 'AJ Plug And The Wildgrooves', 'Train Of Love');
INSERT INTO `songs` VALUES ('41', 'Brainbox', 'Summertime');
INSERT INTO `songs` VALUES ('42', 'Fossen & Struijk Band', 'Sinner\'s Prayer');
INSERT INTO `songs` VALUES ('43', 'Sweet D\'Buster', 'Still Believe');
INSERT INTO `songs` VALUES ('44', 'Cuby & The Blizzards', 'Somebody Will Know Someday');
INSERT INTO `songs` VALUES ('45', 'Jan Akkerman', 'Streetwalker');
INSERT INTO `songs` VALUES ('46', 'AJ Plug', 'Drown In My Sorrow');
INSERT INTO `songs` VALUES ('47', 'Dave Chavez Band', 'I\'ll Take Care Of You');
INSERT INTO `songs` VALUES ('48', 'Sean Webster Band', 'Slow dancing in a burning room');
INSERT INTO `songs` VALUES ('49', 'Livin Blues', 'I Came Home At Night');
INSERT INTO `songs` VALUES ('50', 'The Rob Hoeke Rhythm & Blues Group', 'Drinking On My Bed');
INSERT INTO `songs` VALUES ('51', 'Julian Sas', 'Blues For J');
INSERT INTO `songs` VALUES ('52', 'Vreemde Kostgangers', 'Ik Heb Een Hekel Aan De Blues');
INSERT INTO `songs` VALUES ('53', 'Captain Morgan Express', 'Juke Joint Woman');
INSERT INTO `songs` VALUES ('54', 'Phil Bee\'s Freedom', 'Sunday Morning');
INSERT INTO `songs` VALUES ('55', 'Route 61', 'I Tried');
INSERT INTO `songs` VALUES ('56', 'Mariella Tirotto &  The Blues Federation', 'Window Of My Eyes');
INSERT INTO `songs` VALUES ('57', 'Big Daddy\'s Breakfast Voodoo', 'The Torture Never Stops');
INSERT INTO `songs` VALUES ('58', 'Bad To The Bone', 'Black Tears');
INSERT INTO `songs` VALUES ('59', 'Captain Morgan Express', 'Hip Shake');
INSERT INTO `songs` VALUES ('60', 'Hendrikse', 'Ballad Of A Damned Man');
INSERT INTO `songs` VALUES ('61', 'Barrelhouse', 'Beware');
INSERT INTO `songs` VALUES ('62', 'Paardekooper', 'Lose The Blues');
INSERT INTO `songs` VALUES ('63', 'King Of The World', 'Can\'t Go Home');
INSERT INTO `songs` VALUES ('64', 'Jeroen Kant', 'Diesel');
INSERT INTO `songs` VALUES ('65', 'Basic Station', 'Hard Way Back');
INSERT INTO `songs` VALUES ('66', 'AJ Plug', 'Down On My Nees');
INSERT INTO `songs` VALUES ('67', 'Big Bo', 'Pick A Bale Of Cotton');
INSERT INTO `songs` VALUES ('68', 'Barrelhouse', 'Midnight Hour Blues');
INSERT INTO `songs` VALUES ('69', 'Shaky Sam Blues Band', 'Little Rooster');
INSERT INTO `songs` VALUES ('70', 'Bintangs', 'Met You On A Saturday');
INSERT INTO `songs` VALUES ('71', 'Eelco Gelling', 'Deep Elem Blues');
INSERT INTO `songs` VALUES ('72', 'Texan Dirt', 'Bluesin\' The Boogie');
INSERT INTO `songs` VALUES ('73', 'Julian Sas', 'Working Man Blues');
INSERT INTO `songs` VALUES ('74', 'Barrelhouse', 'I\'m In The Mood');
INSERT INTO `songs` VALUES ('75', 'Cuby & The Blizzards', 'The Sky Is Crying');
INSERT INTO `songs` VALUES ('76', 'Wildmen Bluesband', 'Love You More Than You Will Ever Know');
INSERT INTO `songs` VALUES ('77', 'AJ Plug', 'The Sun Shines Today');
INSERT INTO `songs` VALUES ('78', 'Barrelhouse', 'Oh Death');
INSERT INTO `songs` VALUES ('79', 'Brainbox', 'Down Man');
INSERT INTO `songs` VALUES ('80', 'Flavium', 'Southside Of The City');
INSERT INTO `songs` VALUES ('81', 'Dry Riverbed Trio', 'Sunset Boogy');
INSERT INTO `songs` VALUES ('82', 'King Of The World', 'Beating Like A Drum');
INSERT INTO `songs` VALUES ('83', 'Cuby & The Blizzards', 'Unknown Boy');
INSERT INTO `songs` VALUES ('84', 'Lefthand Freddy', 'Headache Blues');
INSERT INTO `songs` VALUES ('85', 'King Of The World', 'Let\'s Go Get Stoned');
INSERT INTO `songs` VALUES ('86', 'Wildmen Bluesband', 'Help Me Through The Day');
INSERT INTO `songs` VALUES ('87', 'Twelve Bar Blues Band', 'I Can\'t Get Enough Of That Girl');
INSERT INTO `songs` VALUES ('88', 'Brainbox', 'Woman Is Gone');
INSERT INTO `songs` VALUES ('89', 'Julian Sas', 'Anything');
INSERT INTO `songs` VALUES ('90', 'AJ Plug And The Wildgrooves', 'Better Of Without You');
INSERT INTO `songs` VALUES ('91', 'Harlem Lake', 'Guide Me Home');
INSERT INTO `songs` VALUES ('92', 'Bluesbreakers', 'Jena');
INSERT INTO `songs` VALUES ('93', 'Brainbox', 'Summertime');
INSERT INTO `songs` VALUES ('94', 'Bluesbreakers', 'Riverside Blues');
INSERT INTO `songs` VALUES ('95', 'Phil Bee Ft. Andre Hazes', 'Need Your Love So Bad');
INSERT INTO `songs` VALUES ('96', 'Q65', 'Spoonfull');
INSERT INTO `songs` VALUES ('97', 'Barrelhouse', 'Hard Feelings');
INSERT INTO `songs` VALUES ('98', 'Oscar Benton', 'Bensonhurst Blues');
INSERT INTO `songs` VALUES ('99', 'Basic Station', 'Many Roads');
INSERT INTO `songs` VALUES ('100', 'Easterfield', 'The Blues Is Back');
INSERT INTO `songs` VALUES ('101', 'Kees Dusink', 'Marian');
INSERT INTO `songs` VALUES ('102', 'The Rude Move', 'Broken');
INSERT INTO `songs` VALUES ('103', 'The Dynamite Blues Band', 'Dynamite Blues');
INSERT INTO `songs` VALUES ('104', 'Herman Brood', 'Never Be Clever');
INSERT INTO `songs` VALUES ('105', 'Bluesdog Ft.Cees Koldijk', 'Drunk Driving');
INSERT INTO `songs` VALUES ('106', 'Hendrikse', 'Fly Away');
INSERT INTO `songs` VALUES ('107', 'Bas Paardekooper And The Blew Crue', 'Green Eyed Girl');
INSERT INTO `songs` VALUES ('108', 'AJ Plug', 'Trouble');
INSERT INTO `songs` VALUES ('109', 'Sugadaddy & The Honeydrippers', 'They Don\'t Want Me To Rock');
INSERT INTO `songs` VALUES ('110', 'Cuby & The Blizzards', 'Go Down Sunshine');
INSERT INTO `songs` VALUES ('111', 'Gare Du Nord', 'Pablo\'s Blues');
INSERT INTO `songs` VALUES ('112', 'Erwin Java', 'I Put A Spell On You');
INSERT INTO `songs` VALUES ('113', 'Richard van Bergen', 'Nobody');
INSERT INTO `songs` VALUES ('114', 'Raymunda', 'Forever In My Heart');
INSERT INTO `songs` VALUES ('115', 'Farstreet', 'My Blues');
INSERT INTO `songs` VALUES ('116', 'Hendrikse', 'City Or A Ghost Town');
INSERT INTO `songs` VALUES ('117', 'André Hazes', 'Bloed Zweet en Tranen');
INSERT INTO `songs` VALUES ('118', 'Twelve Bar Bluesband', '12 Bar Blues');
INSERT INTO `songs` VALUES ('119', 'Barrelhouse', 'Loneley Together');
INSERT INTO `songs` VALUES ('120', 'Dave Chavez Band', 'Hard Times');
INSERT INTO `songs` VALUES ('121', 'Bluesbreakers', 'Monday Morning');
INSERT INTO `songs` VALUES ('122', 'BJ  Hegen', 'Greyhound Busstation');
INSERT INTO `songs` VALUES ('123', 'Acda & De Munnik', 'Zitten Voor De Blues');
INSERT INTO `songs` VALUES ('124', 'Bintangs Ridin On The L\'n', 'Barrelhouse Twenty Nine Ways');
INSERT INTO `songs` VALUES ('125', 'BluezzControl', 'Again');
INSERT INTO `songs` VALUES ('126', 'Cuby & The Blizzards feat Daniel Lohues', 'So Many Roads');
INSERT INTO `songs` VALUES ('127', 'De Dijk', 'De Blues Verlaat Je Nooit');
INSERT INTO `songs` VALUES ('128', 'Bintangs', 'Wang Dang Doodle');
INSERT INTO `songs` VALUES ('129', 'Brainbox', 'Down Man');
INSERT INTO `songs` VALUES ('130', 'Brainbox', 'Dark Rose');
INSERT INTO `songs` VALUES ('131', 'Brainbox Down Man', 'Focus Silvia');
INSERT INTO `songs` VALUES ('132', 'Van Dyck Inc.', 'Hey Girl');
INSERT INTO `songs` VALUES ('133', 'Cuby & The Blizzards', 'Window Of My Eyes');
INSERT INTO `songs` VALUES ('134', 'Cuban Heels', 'Motherless Child');
INSERT INTO `songs` VALUES ('135', 'Barrelhouse', 'Tell Me More');
INSERT INTO `songs` VALUES ('136', 'The Dynamite Blues Band', 'Reset');
INSERT INTO `songs` VALUES ('137', 'Flavium', 'Nobody Knows You When Youre Down And Out');
INSERT INTO `songs` VALUES ('138', 'Leif De Leeuw Band', 'Jessica');
INSERT INTO `songs` VALUES ('139', 'Twelve Bar Blues Band', 'Key To Your Heart');
INSERT INTO `songs` VALUES ('140', 'Cuby & the Blizzards', 'Five long years (live)');
INSERT INTO `songs` VALUES ('141', 'Livin\' Blues', 'Wang Dang Doodle');
INSERT INTO `songs` VALUES ('142', 'Meadow', 'Van 2 Tot 5');
INSERT INTO `songs` VALUES ('143', 'Route 61', 'So Many Lies');
INSERT INTO `songs` VALUES ('144', 'Route 61', 'Checking Up On My Baby');
INSERT INTO `songs` VALUES ('145', 'Living Blues', 'Wang Dang Doodle');
INSERT INTO `songs` VALUES ('146', 'Bas Paardekooper and The Blew Crue', 'You Don\\\'t Have To Beg No More');
INSERT INTO `songs` VALUES ('147', 'Dewolff', 'Evil Mothergrabber');
INSERT INTO `songs` VALUES ('148', 'Wildmen Bluesband', 'I\'ll Love You More Than You Will Ever Know');
INSERT INTO `songs` VALUES ('149', 'Fat Harry & Fuzzy Licks', 'Why Don\'t You Go Back To Your Mother');
INSERT INTO `songs` VALUES ('150', 'Mo & The Stage Animals', 'Missing With Kid');
INSERT INTO `songs` VALUES ('151', 'Raymunda', 'Pity The Fool');
INSERT INTO `songs` VALUES ('152', 'Bluesbreakers', 'Mr  Brown');
INSERT INTO `songs` VALUES ('153', 'Hollands Blauw', 'Poes is Dood');
INSERT INTO `songs` VALUES ('154', 'Duketown Dogs', 'Amsterdam Blues');
INSERT INTO `songs` VALUES ('155', 'The Veldman Brothers', 'One More Change');
INSERT INTO `songs` VALUES ('156', 'Brainbox', 'Down Man');
INSERT INTO `songs` VALUES ('157', 'Basic Station', 'Schoonmoeders Blues');
INSERT INTO `songs` VALUES ('158', 'Sandy Coast', 'In The Eyes Of Jenny');
INSERT INTO `songs` VALUES ('159', 'Armand', 'Weer Liefde Gevonden');
INSERT INTO `songs` VALUES ('160', 'Duketown Dogs', 'Shiver - Hilton');
INSERT INTO `songs` VALUES ('161', 'Twelve Bar Blues Band', 'Key To Your Heart');
INSERT INTO `songs` VALUES ('162', 'B.J. Hegen', 'Train Blues');
INSERT INTO `songs` VALUES ('163', 'Sean Webster Band', 'I D Rather Go Blind');
INSERT INTO `songs` VALUES ('164', 'Julian Sas', 'Bullfrog Blues');
INSERT INTO `songs` VALUES ('165', 'Brainbox', 'Dark Rose');
INSERT INTO `songs` VALUES ('166', 'Mo & The Stage Animals', 'Turquoise Trail');
INSERT INTO `songs` VALUES ('167', 'Wildmen Bluesband', 'Texas Rumble');
INSERT INTO `songs` VALUES ('168', 'Julian Sas', 'Blues For The Lost And Found');
INSERT INTO `songs` VALUES ('169', 'No Excuses', 'Could Irt Been The Whiskey');
INSERT INTO `songs` VALUES ('170', 'Oberg', 'Head Up High');
INSERT INTO `songs` VALUES ('171', 'Gundogs', 'Mean Wild Boy');
INSERT INTO `songs` VALUES ('172', 'Julian Sas', 'Still Cryin\'');
INSERT INTO `songs` VALUES ('173', 'Twelve Bar Blues Band', 'Life Is Hard');
INSERT INTO `songs` VALUES ('174', 'The Veldman Brothers', 'Leavin');
INSERT INTO `songs` VALUES ('175', 'The Damned And Dirty', 'Porchlight Light');
INSERT INTO `songs` VALUES ('176', 'Wildmen Bluesband', 'Got To Move');
INSERT INTO `songs` VALUES ('177', 'Shaky Sam Blues Band', 'To Busy To Be Bleu');
INSERT INTO `songs` VALUES ('178', 'Rootbag', 'Nobody');
INSERT INTO `songs` VALUES ('179', 'Wildmen Bluesband', 'It\'s Freezing In My Heart');
INSERT INTO `songs` VALUES ('180', 'Oberg', 'Blues As Blues Can Get');
INSERT INTO `songs` VALUES ('181', 'Little Hat', 'Gimme Me Back Wig');
INSERT INTO `songs` VALUES ('182', 'Oscar Benton', 'Bensonhurst Blues');
INSERT INTO `songs` VALUES ('183', 'Bluesdog', 'Walking Away');
INSERT INTO `songs` VALUES ('184', 'Bluesbreakers', 'Redheaded Women');
INSERT INTO `songs` VALUES ('185', 'The Damned And Dirty', 'Hoodoo Down');
INSERT INTO `songs` VALUES ('186', 'Hendrikse', 'A Good Day For The Blues');
INSERT INTO `songs` VALUES ('187', 'Cuby & The Blizzards', 'Time Passed Me By.');
INSERT INTO `songs` VALUES ('188', 'Cuban Heels', 'Devils Daughter');
INSERT INTO `songs` VALUES ('189', 'The Damned And Dirty', 'Bye Bye To Yah');
INSERT INTO `songs` VALUES ('190', 'Phil Bee\'s Freedom', 'One Last Kiss');
INSERT INTO `songs` VALUES ('191', 'The Rob Hoeke Rhythm & Blues Group', 'Margio');
INSERT INTO `songs` VALUES ('192', 'Bas Paardekooper and The Blew Crue', 'Broken Heart For Sale');
INSERT INTO `songs` VALUES ('193', 'De Scene', 'Blauw');
INSERT INTO `songs` VALUES ('194', 'Lefthand Freddy', 'Makes Me Mad');
INSERT INTO `songs` VALUES ('195', 'Cuby & the Blizzards + Tineke Schoemaker', 'Appelnockers Flophouse');
INSERT INTO `songs` VALUES ('196', 'Wildmen Bluesband', 'The Blues Ain\'t Here To Stay');
INSERT INTO `songs` VALUES ('197', 'Basic Station', 'Dream Castle');
INSERT INTO `songs` VALUES ('198', 'Fossen struijk Band', 'Gotta Love Somebody');
INSERT INTO `songs` VALUES ('199', 'Barrelhouse', 'If You Really Wanna Leave');
INSERT INTO `songs` VALUES ('200', 'Raymunda', 'Song For His Dad');
INSERT INTO `songs` VALUES ('201', 'Alquin', 'Nobody Cant Wait Forever');
INSERT INTO `songs` VALUES ('202', 'No Excuses', 'She Took All My Money');
INSERT INTO `songs` VALUES ('203', 'Erwin Java', 'High And Lonesome');
INSERT INTO `songs` VALUES ('204', 'Juulz (Julia Driessen)', 'Black Horses');
INSERT INTO `songs` VALUES ('205', 'John The Revelator', 'I can\'t stop loving you');
INSERT INTO `songs` VALUES ('206', 'Captain Morgan Express', 'Bones');
INSERT INTO `songs` VALUES ('207', 'Basic Station', 'The Listener');
INSERT INTO `songs` VALUES ('208', 'Dewolff', 'Once In A Blue Moon');
INSERT INTO `songs` VALUES ('209', 'Barrelhouse', 'Twenty Nine Ways');
INSERT INTO `songs` VALUES ('210', '12 Bar Blues Band', 'I\'m A Bluesman');
INSERT INTO `songs` VALUES ('211', 'GG And The Cruisers', 'Being Yourself');
INSERT INTO `songs` VALUES ('212', 'Route 61', 'So Many Lies');
INSERT INTO `songs` VALUES ('213', 'Guy Smeets Band', 'Dreams');
INSERT INTO `songs` VALUES ('214', 'Basic Station', 'Many Roads');
INSERT INTO `songs` VALUES ('215', 'The Juke Joints', 'Bad News On The Line');
INSERT INTO `songs` VALUES ('216', 'Cuby & The Blizzards', 'Window Of My Eyes');
INSERT INTO `songs` VALUES ('217', 'Julian Sas', 'Coming Home');
INSERT INTO `songs` VALUES ('218', 'Arti Kraaijeveld', 'The Dog & The Loon');
INSERT INTO `songs` VALUES ('219', 'Barrelhouse', 'Almost There');
INSERT INTO `songs` VALUES ('220', 'Hendrikse', 'Your Arms Will Keep Me Warm');
INSERT INTO `songs` VALUES ('221', 'Bintangs ', 'These Hands');
INSERT INTO `songs` VALUES ('222', 'Raymunda', 'It Doesn\'t Have To Be The Blues All The Time');
INSERT INTO `songs` VALUES ('223', 'Oscar Benton Blues Band', 'I Feel So Good');
INSERT INTO `songs` VALUES ('224', 'Ralph De Jongh', 'Love Is not A Friend');
INSERT INTO `songs` VALUES ('225', 'Livin\' Blues', 'Black Night');
INSERT INTO `songs` VALUES ('226', 'Raymunda', 'Four Roses And The Blues');
INSERT INTO `songs` VALUES ('227', 'Mo & The Stage Animals', 'Missing With Kid');
INSERT INTO `songs` VALUES ('228', 'Bluesdog ft Michelle', 'King Of The Blues');
INSERT INTO `songs` VALUES ('229', 'Captain Morgan Express', 'I\'m A Ram');
INSERT INTO `songs` VALUES ('230', 'Lefthand Freddy', 'Waterman');
INSERT INTO `songs` VALUES ('231', 'Bintangs', 'You Can\'t Judge A Book By The Cover');
INSERT INTO `songs` VALUES ('232', 'Tröckener Kecks', 'Achter Glas');
INSERT INTO `songs` VALUES ('233', 'Aj Plug', 'Blues Village');
INSERT INTO `songs` VALUES ('234', 'Hangin\' Judge', 'Double Trouble');
INSERT INTO `songs` VALUES ('235', 'B.J. Hegen', 'Greyhound Busstation');
INSERT INTO `songs` VALUES ('236', 'Herman Brood', 'My Way');
INSERT INTO `songs` VALUES ('237', 'Firehouse Mama', 'Took Me Once');
INSERT INTO `songs` VALUES ('238', 'Cuby & The Blizzards', 'Too Blind To See');
INSERT INTO `songs` VALUES ('239', 'Barrelhouse', 'Beware');
INSERT INTO `songs` VALUES ('240', 'GG And The Cruisers', 'Let It Be Reality');
INSERT INTO `songs` VALUES ('241', 'Bluesbreakers', 'Mercury Blues');
INSERT INTO `songs` VALUES ('242', 'Livin\' Blues', 'Shylina');
INSERT INTO `songs` VALUES ('243', 'Cuby & the Blizzards', 'Appleknockers Flophouse');
INSERT INTO `songs` VALUES ('244', 'Captain Morgan Express', 'Catfish Blues');
INSERT INTO `songs` VALUES ('245', 'Ralph De Jongh', 'Angel');
INSERT INTO `songs` VALUES ('246', 'Leif De Leeuw Band', 'Until Better Times');
INSERT INTO `songs` VALUES ('247', 'Cuby & The Blizzards', 'Just For Fun');
INSERT INTO `songs` VALUES ('248', 'Bas Paardekooper and the Blew Crue', 'Silent Cries');
INSERT INTO `songs` VALUES ('249', 'Too Much Blues Band', 'Livin Blues');
INSERT INTO `songs` VALUES ('250', 'Blues Bianco', 'Slippin\\\'');
INSERT INTO `songs` VALUES ('251', 'Ralph De Jongh', 'Harry');
INSERT INTO `songs` VALUES ('252', 'Q65', 'The Life I Live');
INSERT INTO `songs` VALUES ('253', 'Dave Chavez Band', 'Sharp Like A Knife');
INSERT INTO `songs` VALUES ('254', 'Dicky Greenwood Band', 'Sad Sad Sad');
INSERT INTO `songs` VALUES ('255', 'Livin\' Blues', 'Hell&rsquo;s Sessiom');
INSERT INTO `songs` VALUES ('256', 'De Dijk', 'Als Ze Er Niet Is');
INSERT INTO `songs` VALUES ('257', 'King Of The World', 'On My Way Back Home');
INSERT INTO `songs` VALUES ('258', 'Cuby & The Blizzards', 'Hobo Blues');
INSERT INTO `songs` VALUES ('259', 'Sean Webster Band', 'Give Me The Truth');
INSERT INTO `songs` VALUES ('260', 'Rob Hoeke', 'Drinking On My Bed');
INSERT INTO `songs` VALUES ('261', 'Brainbox', 'Down Man');
INSERT INTO `songs` VALUES ('262', 'Raymunda', 'I Don\'t Know');
INSERT INTO `songs` VALUES ('263', 'AJ Plug And The Wildgrooves', 'Calling You King');
INSERT INTO `songs` VALUES ('264', 'Twelve Bar Blues Band', 'E-mail From Heaven');
INSERT INTO `songs` VALUES ('265', 'Basic Station', 'Cuby');
INSERT INTO `songs` VALUES ('266', 'Dewolff', 'Nighttrain');
INSERT INTO `songs` VALUES ('267', 'Paardekooper', 'Why A Man Loves A Woman');
INSERT INTO `songs` VALUES ('268', 'Nobo\'s Bluesband', 'Bad Luck');
INSERT INTO `songs` VALUES ('269', 'Bintangs', 'Travellin\' in the USA');
INSERT INTO `songs` VALUES ('270', 'Sean Webster Band', 'I Don\'t Want To Talk About It');
INSERT INTO `songs` VALUES ('271', 'Bas Paardekooper', 'Broken Heart For Sale');
INSERT INTO `songs` VALUES ('272', 'Daniel Lohues And The Louisiana Bluesclub', 'Ik Heb Een Boggel In\'t Rad');
INSERT INTO `songs` VALUES ('273', 'Barrelhouse', 'Let Me Love You');
INSERT INTO `songs` VALUES ('274', 'AJ Plug', 'Dream');
INSERT INTO `songs` VALUES ('275', 'Bluezzcontrol', 'I Don\'t Wanna Die');
INSERT INTO `songs` VALUES ('276', 'Basic Station', 'Hard Way Back');
INSERT INTO `songs` VALUES ('277', 'Daniel Lohues', 'Tied Voor De Blues');
INSERT INTO `songs` VALUES ('278', 'Brainbox', 'Down Man');
INSERT INTO `songs` VALUES ('279', 'Fossen struijk Band', 'Gotta Love Somebody');
INSERT INTO `songs` VALUES ('280', 'Rob Hoeke Band', 'Margio');
INSERT INTO `songs` VALUES ('281', 'Hans Teesink & Terry Evans', 'Delta Time');
INSERT INTO `songs` VALUES ('282', 'Mo & The Stage Animals', 'Tore Down');
INSERT INTO `songs` VALUES ('283', 'Guy Smeets Band', 'Bluest Blues');
INSERT INTO `songs` VALUES ('284', 'Ralph De Jongh', 'Fly');
INSERT INTO `songs` VALUES ('285', 'Basic Station', 'The Listener');
INSERT INTO `songs` VALUES ('286', 'Ralph De Jongh', 'Worried Man Blues');
INSERT INTO `songs` VALUES ('287', 'Detonics', 'Bullet Through My Heart');
INSERT INTO `songs` VALUES ('288', 'King Of The World', 'Can\'t Go Home');
INSERT INTO `songs` VALUES ('289', 'AJ Plug And The Wildgrooves', 'Crazy For You');
INSERT INTO `songs` VALUES ('290', 'Sean Webster Band', 'Hear Me Now');
INSERT INTO `songs` VALUES ('291', 'Leif De Leeuw Band', 'Once And For All');
INSERT INTO `songs` VALUES ('292', 'Phil Bee', 'Memphis Moon');
INSERT INTO `songs` VALUES ('293', 'Herman Brood', 'Saturday Night');
INSERT INTO `songs` VALUES ('294', 'Bintangs', 'Ridin\' On The L & N');
INSERT INTO `songs` VALUES ('295', 'Wildmen Bluesband', 'Tinderman');
INSERT INTO `songs` VALUES ('296', 'Sean Webster Band', 'I D Rather Go Blind');
INSERT INTO `songs` VALUES ('297', 'Big Bo', 'Keep Your Lamp Trimmed And Burning');
INSERT INTO `songs` VALUES ('298', 'Duketown Dogs', 'Line Of Fire');
INSERT INTO `songs` VALUES ('299', 'Cuby & The Blizzards', 'Go Down Sushine');
INSERT INTO `songs` VALUES ('300', 'Bintangs', 'Fighting A Losing Battle');
INSERT INTO `songs` VALUES ('301', 'Mo & The Stage Animals', 'I\'d Rather Go Blind (Live)');
INSERT INTO `songs` VALUES ('302', 'Raymunda', 'Somebody Stole My Wings');
INSERT INTO `songs` VALUES ('303', 'Route 61', 'Playing In A Band');
INSERT INTO `songs` VALUES ('304', 'Fatal Flowers', 'Better Times');
INSERT INTO `songs` VALUES ('305', 'Daniel Lohues', 'Boggel In  \'t Trad');
INSERT INTO `songs` VALUES ('306', 'AJ Plug', 'Killer King');
INSERT INTO `songs` VALUES ('307', 'Basic Station', 'Zo Dood Als Een Pier');
INSERT INTO `songs` VALUES ('308', 'Rootbag', 'Tired Of Bein\' The Fool');
INSERT INTO `songs` VALUES ('309', 'Cuby & The Blizzards', 'Another Day, Another Road');
INSERT INTO `songs` VALUES ('310', 'King Mo', 'Make It Right');
INSERT INTO `songs` VALUES ('311', 'Raymunda', 'Rather Go Blind');
INSERT INTO `songs` VALUES ('312', 'King Of The World', 'Hurricane');
INSERT INTO `songs` VALUES ('313', 'Test', 'Asda');
INSERT INTO `songs` VALUES ('314', 'Ssf', 'Sadas');
INSERT INTO `songs` VALUES ('315', 'Erewr', 'Ewrwe');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hash` varchar(32) DEFAULT NULL,
  `active` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'test', 'Hanzala@gmail.com', '6c713ecee52214d8c9241f34709cbf4e', '1');
