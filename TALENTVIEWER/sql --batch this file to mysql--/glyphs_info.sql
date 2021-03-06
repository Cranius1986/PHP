/*
Navicat MySQL Data Transfer

Source Server         : Mysql-Server
Source Server Version : 50505
Source Host           : craniusprojects.no-ip.org
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-09 14:06:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `glyphs_info`
-- ----------------------------
DROP TABLE IF EXISTS `glyphs_info`;
CREATE TABLE `glyphs_info` (
  `glyphID` int(4) NOT NULL DEFAULT '0',
  `itemID` int(6) DEFAULT NULL,
  `GlyphName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`glyphID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of glyphs_info
-- ----------------------------
INSERT INTO `glyphs_info` VALUES ('2', '0', null);
INSERT INTO `glyphs_info` VALUES ('21', '0', null);
INSERT INTO `glyphs_info` VALUES ('22', '0', null);
INSERT INTO `glyphs_info` VALUES ('61', '0', null);
INSERT INTO `glyphs_info` VALUES ('81', '0', null);
INSERT INTO `glyphs_info` VALUES ('82', '0', null);
INSERT INTO `glyphs_info` VALUES ('101', '0', null);
INSERT INTO `glyphs_info` VALUES ('121', '0', null);
INSERT INTO `glyphs_info` VALUES ('141', '0', null);
INSERT INTO `glyphs_info` VALUES ('161', '40896', 'Glyphe \'Rasende Regeneration\'');
INSERT INTO `glyphs_info` VALUES ('162', '40897', 'Glyphe \'Zermalmen\'');
INSERT INTO `glyphs_info` VALUES ('163', '40899', 'Glyphe \'Knurren\'');
INSERT INTO `glyphs_info` VALUES ('164', '40900', 'Glyphe \'Zerfleischen\'');
INSERT INTO `glyphs_info` VALUES ('165', '40901', 'Glyphe \'Schreddern\'');
INSERT INTO `glyphs_info` VALUES ('166', '40902', 'Glyphe \'Zerfetzen\'');
INSERT INTO `glyphs_info` VALUES ('167', '40903', 'Glyphe \'Krallenhieb\'');
INSERT INTO `glyphs_info` VALUES ('168', '40906', 'Glyphe \'Rasche Heilung\'');
INSERT INTO `glyphs_info` VALUES ('169', '40908', 'Glyphe \'Anregen\'');
INSERT INTO `glyphs_info` VALUES ('170', '40909', 'Glyphe \'Wiedergeburt\'');
INSERT INTO `glyphs_info` VALUES ('171', '40912', 'Glyphe \'Nachwachsen\'');
INSERT INTO `glyphs_info` VALUES ('172', '40913', 'Glyphe \'Verjüngung\'');
INSERT INTO `glyphs_info` VALUES ('173', '40914', 'Glyphe \'Heilende Berührung\'');
INSERT INTO `glyphs_info` VALUES ('174', '40915', 'Glyphe \'Blühendes Leben\'');
INSERT INTO `glyphs_info` VALUES ('175', '40916', 'Glyphe \'Sternenfeuer\'');
INSERT INTO `glyphs_info` VALUES ('176', '40919', 'Glyphe \'Insektenschwarm\'');
INSERT INTO `glyphs_info` VALUES ('177', '40920', 'Glyphe \'Hurrikan\'');
INSERT INTO `glyphs_info` VALUES ('178', '40921', 'Glyphe \'Sternenregen\'');
INSERT INTO `glyphs_info` VALUES ('179', '40922', 'Glyphe \'Zorn\'');
INSERT INTO `glyphs_info` VALUES ('180', '40923', 'Glyphe \'Mondfeuer\'');
INSERT INTO `glyphs_info` VALUES ('181', '40924', 'Glyphe \'Wucherwurzeln\'');
INSERT INTO `glyphs_info` VALUES ('182', '0', null);
INSERT INTO `glyphs_info` VALUES ('183', '41092', 'Glyphe \'Richturteil\'');
INSERT INTO `glyphs_info` VALUES ('184', '41094', 'Glyphe \'Siegel des Befehls\'');
INSERT INTO `glyphs_info` VALUES ('185', '41095', 'Glyphe \'Hammer der Gerechtigkeit\'');
INSERT INTO `glyphs_info` VALUES ('186', '41096', 'Glyphe \'Einklang des Geistes\'');
INSERT INTO `glyphs_info` VALUES ('187', '41097', 'Glyphe \'Hammer des Zorns\'');
INSERT INTO `glyphs_info` VALUES ('188', '41098', 'Glyphe \'Kreuzfahrerstoß\'');
INSERT INTO `glyphs_info` VALUES ('189', '41099', 'Glyphe \'Weihe\'');
INSERT INTO `glyphs_info` VALUES ('190', '41100', 'Glyphe \'Rechtschaffene Verteidigung\'');
INSERT INTO `glyphs_info` VALUES ('191', '41101', 'Glyphe \'Schild des Rächers\'');
INSERT INTO `glyphs_info` VALUES ('192', '41102', 'Glyphe \'Böses vertreiben\'');
INSERT INTO `glyphs_info` VALUES ('193', '41103', 'Glyphe \'Exorzismus\'');
INSERT INTO `glyphs_info` VALUES ('194', '41104', 'Glyphe \'Läuterung\'');
INSERT INTO `glyphs_info` VALUES ('195', '41105', 'Glyphe \'Lichtblitz\'');
INSERT INTO `glyphs_info` VALUES ('196', '41106', 'Glyphe \'Heiliges Licht\'');
INSERT INTO `glyphs_info` VALUES ('197', '41107', 'Glyphe \'Zornige Vergeltung\'');
INSERT INTO `glyphs_info` VALUES ('198', '41108', 'Glyphe \'Göttlichkeit\'');
INSERT INTO `glyphs_info` VALUES ('199', '41109', 'Glyphe \'Siegel der Weisheit\'');
INSERT INTO `glyphs_info` VALUES ('200', '41110', 'Glyphe \'Siegel des Lichts\'');
INSERT INTO `glyphs_info` VALUES ('211', '41541', 'Glyphe \'Wasserbeherrschung\'');
INSERT INTO `glyphs_info` VALUES ('212', '41517', 'Glyphe \'Kettenheilung\'');
INSERT INTO `glyphs_info` VALUES ('213', '41518', 'Glyphe \'Kettenblitzschlag\'');
INSERT INTO `glyphs_info` VALUES ('214', '41524', 'Glyphe \'Lava\'');
INSERT INTO `glyphs_info` VALUES ('215', '41526', 'Glyphe \'Schock\'');
INSERT INTO `glyphs_info` VALUES ('216', '41527', 'Glyphe \'Waffe der Lebensgeister\'');
INSERT INTO `glyphs_info` VALUES ('217', '41529', 'Glyphe \'Totem des Feuerelementars\'');
INSERT INTO `glyphs_info` VALUES ('218', '41530', 'Glyphe \'Feuernova\'');
INSERT INTO `glyphs_info` VALUES ('219', '41531', 'Glyphe \'Flammenschock\'');
INSERT INTO `glyphs_info` VALUES ('220', '41532', 'Glyphe \'Waffe der Flammenzunge\'');
INSERT INTO `glyphs_info` VALUES ('221', '41547', 'Glyphe \'Frostschock\'');
INSERT INTO `glyphs_info` VALUES ('222', '41533', 'Glyphe \'Totem des heilenden Flusses\'');
INSERT INTO `glyphs_info` VALUES ('223', '41534', 'Glyphe \'Welle der Heilung\'');
INSERT INTO `glyphs_info` VALUES ('224', '41535', 'Glyphe \'Geringe Welle der Heilung\'');
INSERT INTO `glyphs_info` VALUES ('225', '41537', 'Glyphe \'Blitzschlagschild\'');
INSERT INTO `glyphs_info` VALUES ('226', '41536', 'Glyphe \'Blitzschlag\'');
INSERT INTO `glyphs_info` VALUES ('227', '41538', 'Glyphe \'Totem der Manaflut\'');
INSERT INTO `glyphs_info` VALUES ('228', '41539', 'Glyphe \'Sturmschlag\'');
INSERT INTO `glyphs_info` VALUES ('229', '41540', 'Glyphe \'Lavapeitsche\'');
INSERT INTO `glyphs_info` VALUES ('230', '41552', 'Glyphe \'Elementarbeherrschung\'');
INSERT INTO `glyphs_info` VALUES ('231', '41542', 'Glyphe \'Waffe des Windzorns\'');
INSERT INTO `glyphs_info` VALUES ('251', '42396', 'Glyphe \'Kreis der Heilung\'');
INSERT INTO `glyphs_info` VALUES ('252', '42397', 'Glyphe \'Magie bannen\'');
INSERT INTO `glyphs_info` VALUES ('253', '42398', 'Glyphe \'Schleier\'');
INSERT INTO `glyphs_info` VALUES ('254', '42399', 'Glyphe \'Furchtzauberschutz\'');
INSERT INTO `glyphs_info` VALUES ('255', '42400', 'Glyphe \'Blitzheilung\'');
INSERT INTO `glyphs_info` VALUES ('256', '42401', 'Glyphe \'Heilige Nova\'');
INSERT INTO `glyphs_info` VALUES ('257', '42402', 'Glyphe \'Inneres Feuer\'');
INSERT INTO `glyphs_info` VALUES ('258', '42403', 'Glyphe \'Brunnen des Lichts\'');
INSERT INTO `glyphs_info` VALUES ('259', '42404', 'Glyphe \'Massenbannung\'');
INSERT INTO `glyphs_info` VALUES ('260', '42405', 'Glyphe \'Gedankenkontrolle\'');
INSERT INTO `glyphs_info` VALUES ('261', '42406', 'Glyphe \'Schattenwort: Schmerz\'');
INSERT INTO `glyphs_info` VALUES ('262', '42407', 'Glyphe \'Schatten\'');
INSERT INTO `glyphs_info` VALUES ('263', '42408', 'Glyphe \'Machtwort: Schild\'');
INSERT INTO `glyphs_info` VALUES ('264', '42409', 'Glyphe \'Gebet der Heilung\'');
INSERT INTO `glyphs_info` VALUES ('265', '42410', 'Glyphe \'Psychischer Schrei\'');
INSERT INTO `glyphs_info` VALUES ('266', '42411', 'Glyphe \'Erneuerung\'');
INSERT INTO `glyphs_info` VALUES ('267', '42412', 'Glyphe \'Geißelgefangennahme\'');
INSERT INTO `glyphs_info` VALUES ('268', '42414', 'Glyphe \'Schattenwort: Tod\'');
INSERT INTO `glyphs_info` VALUES ('269', '42415', 'Glyphe \'Gedankenschinden\'');
INSERT INTO `glyphs_info` VALUES ('270', '42416', 'Glyphe \'Göttliche Pein\'');
INSERT INTO `glyphs_info` VALUES ('271', '42417', 'Glyphe \'Geist der Erlösung\'');
INSERT INTO `glyphs_info` VALUES ('272', '42453', 'Glyphe \'Verbrennen\'');
INSERT INTO `glyphs_info` VALUES ('273', '42454', 'Glyphe \'Feuersbrunst\'');
INSERT INTO `glyphs_info` VALUES ('274', '42455', 'Glyphe \'Verderbnis\'');
INSERT INTO `glyphs_info` VALUES ('275', '42456', 'Glyphe \'Fluch der Pein\'');
INSERT INTO `glyphs_info` VALUES ('276', '42457', 'Glyphe \'Todesmantel\'');
INSERT INTO `glyphs_info` VALUES ('277', '42458', 'Glyphe \'Furcht\'');
INSERT INTO `glyphs_info` VALUES ('278', '42459', 'Glyphe \'Teufelswache\'');
INSERT INTO `glyphs_info` VALUES ('279', '42460', 'Glyphe \'Teufelsjäger\'');
INSERT INTO `glyphs_info` VALUES ('280', '42461', 'Glyphe \'Lebenslinie\'');
INSERT INTO `glyphs_info` VALUES ('281', '42462', 'Glyphe \'Gesundheitsstein\'');
INSERT INTO `glyphs_info` VALUES ('282', '42463', 'Glyphe \'Schreckensgeheul\'');
INSERT INTO `glyphs_info` VALUES ('283', '42464', 'Glyphe \'Feuerbrand\'');
INSERT INTO `glyphs_info` VALUES ('284', '42465', 'Glyphe \'Wichtel\'');
INSERT INTO `glyphs_info` VALUES ('285', '42466', 'Glyphe \'Sengender Schmerz\'');
INSERT INTO `glyphs_info` VALUES ('286', '42467', 'Glyphe \'Schattenblitz\'');
INSERT INTO `glyphs_info` VALUES ('287', '42468', 'Glyphe \'Schattenbrand\'');
INSERT INTO `glyphs_info` VALUES ('288', '42469', 'Glyphe \'Lebensentzug\'');
INSERT INTO `glyphs_info` VALUES ('289', '42470', 'Glyphe \'Seelenstein\'');
INSERT INTO `glyphs_info` VALUES ('290', '42471', 'Glyphe \'Sukkubus\'');
INSERT INTO `glyphs_info` VALUES ('291', '42472', 'Glyphe \'Instabiles Gebrechen\'');
INSERT INTO `glyphs_info` VALUES ('292', '42473', 'Glyphe \'Leerwandler\'');
INSERT INTO `glyphs_info` VALUES ('311', '42734', 'Glyphe \'Arkane Explosion\'');
INSERT INTO `glyphs_info` VALUES ('312', '42735', 'Glyphe \'Arkane Geschosse\'');
INSERT INTO `glyphs_info` VALUES ('313', '42736', 'Glyphe \'Arkane Macht\'');
INSERT INTO `glyphs_info` VALUES ('314', '42737', 'Glyphe \'Blinzeln\'');
INSERT INTO `glyphs_info` VALUES ('315', '42738', 'Glyphe \'Hervorrufung\'');
INSERT INTO `glyphs_info` VALUES ('316', '42739', 'Glyphe \'Feuerball\'');
INSERT INTO `glyphs_info` VALUES ('317', '42740', 'Glyphe \'Feuerschlag\'');
INSERT INTO `glyphs_info` VALUES ('318', '42741', 'Glyphe \'Frostnova\'');
INSERT INTO `glyphs_info` VALUES ('319', '42742', 'Glyphe \'Frostblitz\'');
INSERT INTO `glyphs_info` VALUES ('320', '42743', 'Glyphe \'Eisrüstung\'');
INSERT INTO `glyphs_info` VALUES ('321', '42744', 'Glyphe \'Eisblock\'');
INSERT INTO `glyphs_info` VALUES ('322', '42745', 'Glyphe \'Eislanze\'');
INSERT INTO `glyphs_info` VALUES ('323', '42746', 'Glyphe \'Eisige Adern\'');
INSERT INTO `glyphs_info` VALUES ('324', '42747', 'Glyphe \'Versengen\'');
INSERT INTO `glyphs_info` VALUES ('325', '42748', 'Glyphe \'Unsichtbarkeit\'');
INSERT INTO `glyphs_info` VALUES ('326', '42749', 'Glyphe \'Magische Rüstung\'');
INSERT INTO `glyphs_info` VALUES ('327', '42750', 'Glyphe \'Manaedelstein\'');
INSERT INTO `glyphs_info` VALUES ('328', '42751', 'Glyphe \'Glühende Rüstung\'');
INSERT INTO `glyphs_info` VALUES ('329', '42752', 'Glyphe \'Verwandlung\'');
INSERT INTO `glyphs_info` VALUES ('330', '42753', 'Glyphe \'Fluch aufheben\'');
INSERT INTO `glyphs_info` VALUES ('331', '42754', 'Glyphe \'Wasserelementar\'');
INSERT INTO `glyphs_info` VALUES ('351', '42897', 'Glyphe \'Gezielter Schuss\'');
INSERT INTO `glyphs_info` VALUES ('352', '42898', 'Glyphe \'Arkaner Schuss\'');
INSERT INTO `glyphs_info` VALUES ('353', '42899', 'Glyphe \'Wildtier\'');
INSERT INTO `glyphs_info` VALUES ('354', '42900', 'Glyphe \'Besserung\'');
INSERT INTO `glyphs_info` VALUES ('355', '42901', 'Glyphe \'Aspekt der Viper\'');
INSERT INTO `glyphs_info` VALUES ('356', '42902', 'Glyphe \'Zorn des Wildtiers\'');
INSERT INTO `glyphs_info` VALUES ('357', '42903', 'Glyphe \'Abschreckung\'');
INSERT INTO `glyphs_info` VALUES ('358', '42904', 'Glyphe \'Rückzug\'');
INSERT INTO `glyphs_info` VALUES ('359', '42905', 'Glyphe \'Eiskältefalle\'');
INSERT INTO `glyphs_info` VALUES ('360', '42906', 'Glyphe \'Frostfalle\'');
INSERT INTO `glyphs_info` VALUES ('361', '42907', 'Glyphe \'Mal des Jägers\'');
INSERT INTO `glyphs_info` VALUES ('362', '42908', 'Glyphe \'Feuerbrandfalle\'');
INSERT INTO `glyphs_info` VALUES ('363', '42909', 'Glyphe \'Falke\'');
INSERT INTO `glyphs_info` VALUES ('364', '42910', 'Glyphe \'Mehrfachschuss\'');
INSERT INTO `glyphs_info` VALUES ('365', '42911', 'Glyphe \'Schnellfeuer\'');
INSERT INTO `glyphs_info` VALUES ('366', '42912', 'Glyphe \'Schlangenbiss\'');
INSERT INTO `glyphs_info` VALUES ('367', '42913', 'Glyphe \'Schlangenfalle\'');
INSERT INTO `glyphs_info` VALUES ('368', '42914', 'Glyphe \'Zuverlässiger Schuss\'');
INSERT INTO `glyphs_info` VALUES ('369', '42915', 'Glyphe \'Aura des Volltreffers\'');
INSERT INTO `glyphs_info` VALUES ('370', '42916', 'Glyphe \'Salve\'');
INSERT INTO `glyphs_info` VALUES ('371', '42917', 'Glyphe \'Stich des Flügeldrachen\'');
INSERT INTO `glyphs_info` VALUES ('391', '42954', 'Glyphe \'Adrenalinrausch\'');
INSERT INTO `glyphs_info` VALUES ('392', '42955', 'Glyphe \'Hinterhalt\'');
INSERT INTO `glyphs_info` VALUES ('393', '42956', 'Glyphe \'Meucheln\'');
INSERT INTO `glyphs_info` VALUES ('394', '42957', 'Glyphe \'Klingenwirbel\'');
INSERT INTO `glyphs_info` VALUES ('395', '42958', 'Glyphe \'Verkrüppelndes Gift\'');
INSERT INTO `glyphs_info` VALUES ('396', '42959', 'Glyphe \'Tödlicher Wurf\'');
INSERT INTO `glyphs_info` VALUES ('397', '42960', 'Glyphe \'Entrinnen\'');
INSERT INTO `glyphs_info` VALUES ('398', '42961', 'Glyphe \'Ausweiden\'');
INSERT INTO `glyphs_info` VALUES ('399', '42962', 'Glyphe \'Rüstung schwächen\'');
INSERT INTO `glyphs_info` VALUES ('400', '42963', 'Glyphe \'Finte\'');
INSERT INTO `glyphs_info` VALUES ('401', '42964', 'Glyphe \'Erdrosseln\'');
INSERT INTO `glyphs_info` VALUES ('402', '42965', 'Glyphe \'Geisterhafter Stoß\'');
INSERT INTO `glyphs_info` VALUES ('403', '42966', 'Glyphe \'Solarplexus\'');
INSERT INTO `glyphs_info` VALUES ('404', '42967', 'Glyphe \'Blutsturz\'');
INSERT INTO `glyphs_info` VALUES ('405', '42968', 'Glyphe \'Vorbereitung\'');
INSERT INTO `glyphs_info` VALUES ('406', '42969', 'Glyphe \'Blutung\'');
INSERT INTO `glyphs_info` VALUES ('407', '42970', 'Glyphe \'Kopfnuss\'');
INSERT INTO `glyphs_info` VALUES ('408', '42971', 'Glyphe \'Lebenskraft\'');
INSERT INTO `glyphs_info` VALUES ('409', '42972', 'Glyphe \'Finsterer Stoß\'');
INSERT INTO `glyphs_info` VALUES ('410', '42973', 'Glyphe \'Zerhäckseln\'');
INSERT INTO `glyphs_info` VALUES ('411', '42974', 'Glyphe \'Sprinten\'');
INSERT INTO `glyphs_info` VALUES ('431', '43316', 'Glyphe \'Wassergestalt\'');
INSERT INTO `glyphs_info` VALUES ('432', '43334', 'Glyphe \'Herausforderndes Gebrüll\'');
INSERT INTO `glyphs_info` VALUES ('433', '43335', 'Glyphe \'Gabe der Wildnis\'');
INSERT INTO `glyphs_info` VALUES ('434', '43331', 'Glyphe \'Sorglose Wiedergeburt\'');
INSERT INTO `glyphs_info` VALUES ('435', '43332', 'Glyphe \'Dornen\'');
INSERT INTO `glyphs_info` VALUES ('436', '0', null);
INSERT INTO `glyphs_info` VALUES ('438', '0', null);
INSERT INTO `glyphs_info` VALUES ('439', '43338', 'Glyphe \'Tier wiederbeleben\'');
INSERT INTO `glyphs_info` VALUES ('440', '43350', 'Glyphe \'Tier heilen\'');
INSERT INTO `glyphs_info` VALUES ('441', '43351', 'Glyphe \'Totstellen\'');
INSERT INTO `glyphs_info` VALUES ('442', '43356', 'Glyphe \'Wildtier Ängstigen\'');
INSERT INTO `glyphs_info` VALUES ('443', '43355', 'Glyphe \'Aspekt des Rudels\'');
INSERT INTO `glyphs_info` VALUES ('444', '43354', 'Glyphe \'Besessene Stärke\'');
INSERT INTO `glyphs_info` VALUES ('445', '43339', 'Glyphe \'Arkane Intelligenz\'');
INSERT INTO `glyphs_info` VALUES ('446', '43357', 'Glyphe \'Feuerzauberschutz\'');
INSERT INTO `glyphs_info` VALUES ('447', '43360', 'Glyphe \'Frostzauberschutz\'');
INSERT INTO `glyphs_info` VALUES ('448', '43359', 'Glyphe \'Frostrüstung\'');
INSERT INTO `glyphs_info` VALUES ('449', '0', null);
INSERT INTO `glyphs_info` VALUES ('450', '43361', 'Glyphe \'Pinguin\'');
INSERT INTO `glyphs_info` VALUES ('451', '43364', 'Glyphe \'Langsamer Fall\'');
INSERT INTO `glyphs_info` VALUES ('452', '43365', 'Glyphe \'Segen der Könige\'');
INSERT INTO `glyphs_info` VALUES ('453', '43340', 'Glyphe \'Segen der Macht\'');
INSERT INTO `glyphs_info` VALUES ('454', '43366', 'Glyphe \'Segen der Weisheit\'');
INSERT INTO `glyphs_info` VALUES ('455', '43367', 'Glyphe \'Handauflegung\'');
INSERT INTO `glyphs_info` VALUES ('456', '43368', 'Glyphe \'Untote spüren\'');
INSERT INTO `glyphs_info` VALUES ('457', '43369', 'Glyphe \'Der Weise\'');
INSERT INTO `glyphs_info` VALUES ('458', '43342', 'Glyphe \'Verblassen\'');
INSERT INTO `glyphs_info` VALUES ('459', '43370', 'Glyphe \'Levitieren\'');
INSERT INTO `glyphs_info` VALUES ('460', '43371', 'Glyphe \'Seelenstärke\'');
INSERT INTO `glyphs_info` VALUES ('461', '43373', 'Glyphe \'Untote fesseln\'');
INSERT INTO `glyphs_info` VALUES ('462', '43372', 'Glyphe \'Schattenschutz\'');
INSERT INTO `glyphs_info` VALUES ('463', '43374', 'Glyphe \'Schattengeist\'');
INSERT INTO `glyphs_info` VALUES ('464', '43376', 'Glyphe \'Ablenken\'');
INSERT INTO `glyphs_info` VALUES ('465', '43377', 'Glyphe \'Schloss knacken\'');
INSERT INTO `glyphs_info` VALUES ('466', '43343', 'Glyphe \'Taschendiebstahl\'');
INSERT INTO `glyphs_info` VALUES ('467', '43378', 'Glyphe \'Sicheres Fallen\'');
INSERT INTO `glyphs_info` VALUES ('468', '43379', 'Glyphe \'Verschwimmen\'');
INSERT INTO `glyphs_info` VALUES ('469', '43380', 'Glyphe \'Verschwinden\'');
INSERT INTO `glyphs_info` VALUES ('470', '43381', 'Glyphe \'Astraler Rückruf\'');
INSERT INTO `glyphs_info` VALUES ('471', '0', null);
INSERT INTO `glyphs_info` VALUES ('472', '0', null);
INSERT INTO `glyphs_info` VALUES ('473', '43385', 'Glyphe \'Erneuertes Leben\'');
INSERT INTO `glyphs_info` VALUES ('474', '43344', 'Glyphe \'Wasseratmung\'');
INSERT INTO `glyphs_info` VALUES ('475', '43386', 'Glyphe \'Wasserschild\'');
INSERT INTO `glyphs_info` VALUES ('476', '43388', 'Glyphe \'Wasserwandeln\'');
INSERT INTO `glyphs_info` VALUES ('477', '43389', 'Glyphe \'Unendlicher Atem\'');
INSERT INTO `glyphs_info` VALUES ('478', '43390', 'Glyphe \'Seelendieb\'');
INSERT INTO `glyphs_info` VALUES ('479', '43391', 'Glyphe \'Auge von Kilrogg\'');
INSERT INTO `glyphs_info` VALUES ('480', '43392', 'Glyphe \'Fluch der Erschöpfung\'');
INSERT INTO `glyphs_info` VALUES ('481', '43393', 'Glyphe \'Dämonensklave\'');
INSERT INTO `glyphs_info` VALUES ('482', '43394', 'Glyphe \'Ritual der Seelen\'');
INSERT INTO `glyphs_info` VALUES ('483', '43395', 'Glyphe \'Schlachtruf\'');
INSERT INTO `glyphs_info` VALUES ('484', '43396', 'Glyphe \'Blutrausch\'');
INSERT INTO `glyphs_info` VALUES ('485', '43397', 'Glyphe \'Sturmangriff\'');
INSERT INTO `glyphs_info` VALUES ('486', '43398', 'Glyphe \'Spöttischer Schlag\'');
INSERT INTO `glyphs_info` VALUES ('487', '43399', 'Glyphe \'Donnerknall\'');
INSERT INTO `glyphs_info` VALUES ('488', '43400', 'Glyphe \'Beständiger Sieg\'');
INSERT INTO `glyphs_info` VALUES ('489', '43421', 'Glyphe \'Tödlicher Stoß\'');
INSERT INTO `glyphs_info` VALUES ('490', '43412', 'Glyphe \'Blutdurst\'');
INSERT INTO `glyphs_info` VALUES ('491', '43413', 'Glyphe \'Schneller Sturmangriff\'');
INSERT INTO `glyphs_info` VALUES ('492', '43414', 'Glyphe \'Spalten\'');
INSERT INTO `glyphs_info` VALUES ('493', '43415', 'Glyphe \'Verwüsten\'');
INSERT INTO `glyphs_info` VALUES ('494', '43416', 'Glyphe \'Hinrichten\'');
INSERT INTO `glyphs_info` VALUES ('495', '43417', 'Glyphe \'Kniesehne\'');
INSERT INTO `glyphs_info` VALUES ('496', '43418', 'Glyphe \'Heldenhafter Stoß\'');
INSERT INTO `glyphs_info` VALUES ('497', '43419', 'Glyphe \'Einschreiten\'');
INSERT INTO `glyphs_info` VALUES ('498', '43420', 'Glyphe \'Barbarische Beleidigungen\'');
INSERT INTO `glyphs_info` VALUES ('499', '43422', 'Glyphe \'Überwältigen\'');
INSERT INTO `glyphs_info` VALUES ('500', '43423', 'Glyphe \'Verwunden\'');
INSERT INTO `glyphs_info` VALUES ('501', '43424', 'Glyphe \'Rache\'');
INSERT INTO `glyphs_info` VALUES ('502', '43425', 'Glyphe \'Blocken\'');
INSERT INTO `glyphs_info` VALUES ('503', '43426', 'Glyphe \'Letztes Gefecht\'');
INSERT INTO `glyphs_info` VALUES ('504', '43427', 'Glyphe \'Rüstung zerreißen\'');
INSERT INTO `glyphs_info` VALUES ('505', '43428', 'Glyphe \'Weitreichende Stöße\'');
INSERT INTO `glyphs_info` VALUES ('506', '43429', 'Glyphe \'Spott\'');
INSERT INTO `glyphs_info` VALUES ('507', '43430', 'Glyphe \'Nachhallende Kraft\'');
INSERT INTO `glyphs_info` VALUES ('508', '43431', 'Glyphe \'Siegesrausch\'');
INSERT INTO `glyphs_info` VALUES ('509', '43432', 'Glyphe \'Wirbelwind\'');
INSERT INTO `glyphs_info` VALUES ('511', '43538', 'Glyphe \'Dunkler Befehl\'');
INSERT INTO `glyphs_info` VALUES ('512', '43533', 'Glyphe \'Antimagische Hülle\'');
INSERT INTO `glyphs_info` VALUES ('513', '43534', 'Glyphe \'Herzstoß\'');
INSERT INTO `glyphs_info` VALUES ('514', '43535', 'Glyphe \'Blutwandlung\'');
INSERT INTO `glyphs_info` VALUES ('515', '43536', 'Glyphe \'Knochenschild\'');
INSERT INTO `glyphs_info` VALUES ('516', '43537', 'Glyphe \'Eisketten\'');
INSERT INTO `glyphs_info` VALUES ('518', '43539', 'Glyphe \'Umarmung des Todes\'');
INSERT INTO `glyphs_info` VALUES ('519', '43541', 'Glyphe \'Todesgriff\'');
INSERT INTO `glyphs_info` VALUES ('520', '43542', 'Glyphe \'Tod und Verfall\'');
INSERT INTO `glyphs_info` VALUES ('521', '43543', 'Glyphe \'Froststoß\'');
INSERT INTO `glyphs_info` VALUES ('522', '43544', 'Glyphe \'Horn des Winters\'');
INSERT INTO `glyphs_info` VALUES ('523', '43545', 'Glyphe \'Eisige Gegenwehr\'');
INSERT INTO `glyphs_info` VALUES ('524', '43546', 'Glyphe \'Eisige Berührung\'');
INSERT INTO `glyphs_info` VALUES ('525', '43547', 'Glyphe \'Auslöschen\'');
INSERT INTO `glyphs_info` VALUES ('526', '43548', 'Glyphe \'Seuchenstoß\'');
INSERT INTO `glyphs_info` VALUES ('527', '43549', 'Glyphe \'Ghul\'');
INSERT INTO `glyphs_info` VALUES ('528', '43550', 'Glyphe \'Runenstoß\'');
INSERT INTO `glyphs_info` VALUES ('529', '43551', 'Glyphe \'Geißelstoß\'');
INSERT INTO `glyphs_info` VALUES ('530', '43552', 'Glyphe \'Strangulieren\'');
INSERT INTO `glyphs_info` VALUES ('531', '43553', 'Glyphe \'Undurchdringliche Rüstung\'');
INSERT INTO `glyphs_info` VALUES ('532', '43554', 'Glyphe \'Vampirblut\'');
INSERT INTO `glyphs_info` VALUES ('551', '43674', 'Glyphe \'Spurt\'');
INSERT INTO `glyphs_info` VALUES ('552', '43725', 'Glyphe \'Geisterwolf\'');
INSERT INTO `glyphs_info` VALUES ('553', '43672', 'Glyphe \'Pestilenz\'');
INSERT INTO `glyphs_info` VALUES ('554', '43671', 'Glyphe \'Leichenexplosion\'');
INSERT INTO `glyphs_info` VALUES ('555', '43673', 'Glyphe \'Totenerweckung\'');
INSERT INTO `glyphs_info` VALUES ('556', '43825', 'Glyphe \'Runenheilung\'');
INSERT INTO `glyphs_info` VALUES ('557', '43826', 'Glyphe \'Blutstoß\'');
INSERT INTO `glyphs_info` VALUES ('558', '43827', 'Glyphe \'Todesstoß\'');
INSERT INTO `glyphs_info` VALUES ('559', '43867', 'Glyphe \'Heiliger Zorn\'');
INSERT INTO `glyphs_info` VALUES ('560', '43868', 'Glyphe \'Siegel der Rechtschaffenheit\'');
INSERT INTO `glyphs_info` VALUES ('561', '43869', 'Glyphe \'Siegel der Vergeltung\'');
INSERT INTO `glyphs_info` VALUES ('571', '0', null);
INSERT INTO `glyphs_info` VALUES ('591', '44684', 'Glyphe \'Frostfeuer\'');
INSERT INTO `glyphs_info` VALUES ('611', '44920', 'Glyphe \'Druckwelle\'');
INSERT INTO `glyphs_info` VALUES ('612', '44923', 'Glyphe \'Gewitter\'');
INSERT INTO `glyphs_info` VALUES ('613', '44922', 'Glyphe \'Taifun\'');
INSERT INTO `glyphs_info` VALUES ('631', '44928', 'Glyphe \'Fokus\'');
INSERT INTO `glyphs_info` VALUES ('651', '44955', 'Glyphe \'Arkanschlag\'');
INSERT INTO `glyphs_info` VALUES ('671', '45601', 'Glyphe \'Berserker\'');
INSERT INTO `glyphs_info` VALUES ('672', '45602', 'Glyphe \'Wildwuchs\'');
INSERT INTO `glyphs_info` VALUES ('673', '45603', 'Glyphe \'Pflege\'');
INSERT INTO `glyphs_info` VALUES ('674', '45604', 'Glyphe \'Wildes Brüllen\'');
INSERT INTO `glyphs_info` VALUES ('675', '45622', 'Glyphe \'Monsun\'');
INSERT INTO `glyphs_info` VALUES ('676', '45623', 'Glyphe \'Baumrinde\'');
INSERT INTO `glyphs_info` VALUES ('677', '45625', 'Glyphe \'Schimärenschuss\'');
INSERT INTO `glyphs_info` VALUES ('691', '45731', 'Glyphe \'Explosivschuss\'');
INSERT INTO `glyphs_info` VALUES ('692', '45732', 'Glyphe \'Tödlicher Schuss\'');
INSERT INTO `glyphs_info` VALUES ('693', '45733', 'Glyphe \'Sprengfalle\'');
INSERT INTO `glyphs_info` VALUES ('694', '45734', 'Glyphe \'Streuschuss\'');
INSERT INTO `glyphs_info` VALUES ('695', '45735', 'Glyphe \'Raptorstoß\'');
INSERT INTO `glyphs_info` VALUES ('696', '45736', 'Glyphe \'Tieffrieren\'');
INSERT INTO `glyphs_info` VALUES ('697', '45737', 'Glyphe \'Lebende Bombe\'');
INSERT INTO `glyphs_info` VALUES ('698', '45738', 'Glyphe \'Arkanbeschuss\'');
INSERT INTO `glyphs_info` VALUES ('699', '45739', 'Glyphe \'Spiegelbild\'');
INSERT INTO `glyphs_info` VALUES ('700', '45740', 'Glyphe \'Eisbarriere\'');
INSERT INTO `glyphs_info` VALUES ('701', '45741', 'Glyphe \'Flamme des Glaubens\'');
INSERT INTO `glyphs_info` VALUES ('702', '45742', 'Glyphe \'Hammer der Rechtschaffenen\'');
INSERT INTO `glyphs_info` VALUES ('703', '45743', 'Glyphe \'Göttlicher Sturm\'');
INSERT INTO `glyphs_info` VALUES ('704', '45744', 'Glyphe \'Schild der Rechtschaffenheit\'');
INSERT INTO `glyphs_info` VALUES ('705', '45745', 'Glyphe \'Göttliche Bitte\'');
INSERT INTO `glyphs_info` VALUES ('706', '45746', 'Glyphe \'Heiliger Schock\'');
INSERT INTO `glyphs_info` VALUES ('707', '45747', 'Glyphe \'Erlösung\'');
INSERT INTO `glyphs_info` VALUES ('708', '45753', 'Glyphe \'Dispersion\'');
INSERT INTO `glyphs_info` VALUES ('709', '45755', 'Glyphe \'Schutzgeist\'');
INSERT INTO `glyphs_info` VALUES ('710', '45756', 'Glyphe \'Sühne\'');
INSERT INTO `glyphs_info` VALUES ('711', '45757', 'Glyphe \'Gedankenexplosion\'');
INSERT INTO `glyphs_info` VALUES ('712', '45758', 'Glyphe \'Hymne der Hoffnung\'');
INSERT INTO `glyphs_info` VALUES ('713', '45760', 'Glyphe \'Schmerzunterdrückung\'');
INSERT INTO `glyphs_info` VALUES ('714', '45761', 'Glyphe \'Blutgier\'');
INSERT INTO `glyphs_info` VALUES ('715', '45762', 'Glyphe \'Mordlust\'');
INSERT INTO `glyphs_info` VALUES ('716', '45764', 'Glyphe \'Schattentanz\'');
INSERT INTO `glyphs_info` VALUES ('731', '45766', 'Glyphe \'Dolchfächer\'');
INSERT INTO `glyphs_info` VALUES ('732', '45767', 'Glyphe \'Schurkenhandel\'');
INSERT INTO `glyphs_info` VALUES ('733', '45768', 'Glyphe \'Verstümmeln\'');
INSERT INTO `glyphs_info` VALUES ('734', '45769', 'Glyphe \'Mantel der Schatten\'');
INSERT INTO `glyphs_info` VALUES ('735', '45770', 'Glyphe \'Donner\'');
INSERT INTO `glyphs_info` VALUES ('736', '45771', 'Glyphe \'Wildgeist\'');
INSERT INTO `glyphs_info` VALUES ('737', '45772', 'Glyphe \'Springflut\'');
INSERT INTO `glyphs_info` VALUES ('751', '45775', 'Glyphe \'Erdschild\'');
INSERT INTO `glyphs_info` VALUES ('752', '45776', 'Glyphe \'Totem des Ingrimms\'');
INSERT INTO `glyphs_info` VALUES ('753', '45777', 'Glyphe \'Verhexen\'');
INSERT INTO `glyphs_info` VALUES ('754', '45778', 'Glyphe \'Totem der Steinklaue\'');
INSERT INTO `glyphs_info` VALUES ('755', '45779', 'Glyphe \'Heimsuchung\'');
INSERT INTO `glyphs_info` VALUES ('756', '45780', 'Glyphe \'Metamorphose\'');
INSERT INTO `glyphs_info` VALUES ('757', '45781', 'Glyphe \'Chaosblitz\'');
INSERT INTO `glyphs_info` VALUES ('758', '45782', 'Glyphe \'Dämonischer Zirkel\'');
INSERT INTO `glyphs_info` VALUES ('759', '45783', 'Glyphe \'Schattenflamme\'');
INSERT INTO `glyphs_info` VALUES ('760', '45785', 'Glyphe \'Aderlass\'');
INSERT INTO `glyphs_info` VALUES ('761', '45789', 'Glyphe \'Seelenverbindung\'');
INSERT INTO `glyphs_info` VALUES ('762', '45790', 'Glyphe \'Klingensturm\'');
INSERT INTO `glyphs_info` VALUES ('763', '45792', 'Glyphe \'Schockwelle\'');
INSERT INTO `glyphs_info` VALUES ('764', '45793', 'Glyphe \'Wachsamkeit\'');
INSERT INTO `glyphs_info` VALUES ('765', '45794', 'Glyphe \'Wütende Regeneration\'');
INSERT INTO `glyphs_info` VALUES ('766', '45795', 'Glyphe \'Zauberreflexion\'');
INSERT INTO `glyphs_info` VALUES ('767', '45797', 'Glyphe \'Schildwall\'');
INSERT INTO `glyphs_info` VALUES ('768', '45799', 'Glyphe \'Tanzende Runenwaffe\'');
INSERT INTO `glyphs_info` VALUES ('769', '45800', 'Glyphe \'Zehrende Kälte\'');
INSERT INTO `glyphs_info` VALUES ('770', '45803', 'Glyphe \'Unheilige Verseuchung\'');
INSERT INTO `glyphs_info` VALUES ('771', '45804', 'Glyphe \'Dunkler Tod\'');
INSERT INTO `glyphs_info` VALUES ('772', '45805', 'Glyphe \'Krankheit\'');
INSERT INTO `glyphs_info` VALUES ('773', '45806', 'Glyphe \'Heulende Böe\'');
INSERT INTO `glyphs_info` VALUES ('791', '0', null);
INSERT INTO `glyphs_info` VALUES ('811', '46372', 'Glyphe \'Überlebensinstinkt\'');
INSERT INTO `glyphs_info` VALUES ('831', '48720', 'Glyphe \'Klaue\'');
INSERT INTO `glyphs_info` VALUES ('851', '49084', 'Glyphe \'Befehl\'');
INSERT INTO `glyphs_info` VALUES ('871', '50045', 'Glyphe \'Ewiges Wasser\'');
INSERT INTO `glyphs_info` VALUES ('891', '50125', 'Glyphe \'Hastige Verjüngung\'');
INSERT INTO `glyphs_info` VALUES ('911', '50077', 'Glyphe \'Schneller Verfall\'');
