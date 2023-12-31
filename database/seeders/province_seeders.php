<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class province_seeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("DROP TABLE IF EXISTS `refprovince`;");
        DB::statement("CREATE TABLE `refprovince` (`id` int(11) NOT NULL AUTO_INCREMENT, `psgcCode` varchar(255) DEFAULT NULL, `provDesc` text, `regCode` varchar(255) DEFAULT NULL, `provCode` varchar(255) DEFAULT NULL, PRIMARY KEY (`id`) );");

        DB::statement("INSERT INTO `refprovince` VALUES ('1', '012800000', 'ILOCOS NORTE', '01', '0128');");
        DB::statement("INSERT INTO `refprovince` VALUES ('2', '012900000', 'ILOCOS SUR', '01', '0129');");
        DB::statement("INSERT INTO `refprovince` VALUES ('3', '013300000', 'LA UNION', '01', '0133');");
        DB::statement("INSERT INTO `refprovince` VALUES ('4', '015500000', 'PANGASINAN', '01', '0155');");
        DB::statement("INSERT INTO `refprovince` VALUES ('5', '020900000', 'BATANES', '02', '0209');");
        DB::statement("INSERT INTO `refprovince` VALUES ('6', '021500000', 'CAGAYAN', '02', '0215');");
        DB::statement("INSERT INTO `refprovince` VALUES ('7', '023100000', 'ISABELA', '02', '0231');");
        DB::statement("INSERT INTO `refprovince` VALUES ('8', '025000000', 'NUEVA VIZCAYA', '02', '0250');");
        DB::statement("INSERT INTO `refprovince` VALUES ('9', '025700000', 'QUIRINO', '02', '0257');");
        DB::statement("INSERT INTO `refprovince` VALUES ('10', '030800000', 'BATAAN', '03', '0308');");
        DB::statement("INSERT INTO `refprovince` VALUES ('11', '031400000', 'BULACAN', '03', '0314');");
        DB::statement("INSERT INTO `refprovince` VALUES ('12', '034900000', 'NUEVA ECIJA', '03', '0349');");
        DB::statement("INSERT INTO `refprovince` VALUES ('13', '035400000', 'PAMPANGA', '03', '0354');");
        DB::statement("INSERT INTO `refprovince` VALUES ('14', '036900000', 'TARLAC', '03', '0369');");
        DB::statement("INSERT INTO `refprovince` VALUES ('15', '037100000', 'ZAMBALES', '03', '0371');");
        DB::statement("INSERT INTO `refprovince` VALUES ('16', '037700000', 'AURORA', '03', '0377');");
        DB::statement("INSERT INTO `refprovince` VALUES ('17', '041000000', 'BATANGAS', '04', '0410');");
        DB::statement("INSERT INTO `refprovince` VALUES ('18', '042100000', 'CAVITE', '04', '0421');");
        DB::statement("INSERT INTO `refprovince` VALUES ('19', '043400000', 'LAGUNA', '04', '0434');");
        DB::statement("INSERT INTO `refprovince` VALUES ('20', '045600000', 'QUEZON', '04', '0456');");
        DB::statement("INSERT INTO `refprovince` VALUES ('21', '045800000', 'RIZAL', '04', '0458');");
        DB::statement("INSERT INTO `refprovince` VALUES ('22', '174000000', 'MARINDUQUE', '17', '1740');");
        DB::statement("INSERT INTO `refprovince` VALUES ('23', '175100000', 'OCCIDENTAL MINDORO', '17', '1751');");
        DB::statement("INSERT INTO `refprovince` VALUES ('24', '175200000', 'ORIENTAL MINDORO', '17', '1752');");
        DB::statement("INSERT INTO `refprovince` VALUES ('25', '175300000', 'PALAWAN', '17', '1753');");
        DB::statement("INSERT INTO `refprovince` VALUES ('26', '175900000', 'ROMBLON', '17', '1759');");
        DB::statement("INSERT INTO `refprovince` VALUES ('27', '050500000', 'ALBAY', '05', '0505');");
        DB::statement("INSERT INTO `refprovince` VALUES ('28', '051600000', 'CAMARINES NORTE', '05', '0516');");
        DB::statement("INSERT INTO `refprovince` VALUES ('29', '051700000', 'CAMARINES SUR', '05', '0517');");
        DB::statement("INSERT INTO `refprovince` VALUES ('30', '052000000', 'CATANDUANES', '05', '0520');");
        DB::statement("INSERT INTO `refprovince` VALUES ('31', '054100000', 'MASBATE', '05', '0541');");
        DB::statement("INSERT INTO `refprovince` VALUES ('32', '056200000', 'SORSOGON', '05', '0562');");
        DB::statement("INSERT INTO `refprovince` VALUES ('33', '060400000', 'AKLAN', '06', '0604');");
        DB::statement("INSERT INTO `refprovince` VALUES ('34', '060600000', 'ANTIQUE', '06', '0606');");
        DB::statement("INSERT INTO `refprovince` VALUES ('35', '061900000', 'CAPIZ', '06', '0619');");
        DB::statement("INSERT INTO `refprovince` VALUES ('36', '063000000', 'ILOILO', '06', '0630');");
        DB::statement("INSERT INTO `refprovince` VALUES ('37', '064500000', 'NEGROS OCCIDENTAL', '06', '0645');");
        DB::statement("INSERT INTO `refprovince` VALUES ('38', '067900000', 'GUIMARAS', '06', '0679');");
        DB::statement("INSERT INTO `refprovince` VALUES ('39', '071200000', 'BOHOL', '07', '0712');");
        DB::statement("INSERT INTO `refprovince` VALUES ('40', '072200000', 'CEBU', '07', '0722');");
        DB::statement("INSERT INTO `refprovince` VALUES ('41', '074600000', 'NEGROS ORIENTAL', '07', '0746');");
        DB::statement("INSERT INTO `refprovince` VALUES ('42', '076100000', 'SIQUIJOR', '07', '0761');");
        DB::statement("INSERT INTO `refprovince` VALUES ('43', '082600000', 'EASTERN SAMAR', '08', '0826');");
        DB::statement("INSERT INTO `refprovince` VALUES ('44', '083700000', 'LEYTE', '08', '0837');");
        DB::statement("INSERT INTO `refprovince` VALUES ('45', '084800000', 'NORTHERN SAMAR', '08', '0848');");
        DB::statement("INSERT INTO `refprovince` VALUES ('46', '086000000', 'SAMAR (WESTERN SAMAR)', '08', '0860');");
        DB::statement("INSERT INTO `refprovince` VALUES ('47', '086400000', 'SOUTHERN LEYTE', '08', '0864');");
        DB::statement("INSERT INTO `refprovince` VALUES ('48', '087800000', 'BILIRAN', '08', '0878');");
        DB::statement("INSERT INTO `refprovince` VALUES ('49', '097200000', 'ZAMBOANGA DEL NORTE', '09', '0972');");
        DB::statement("INSERT INTO `refprovince` VALUES ('50', '097300000', 'ZAMBOANGA DEL SUR', '09', '0973');");
        DB::statement("INSERT INTO `refprovince` VALUES ('51', '098300000', 'ZAMBOANGA SIBUGAY', '09', '0983');");
        DB::statement("INSERT INTO `refprovince` VALUES ('52', '099700000', 'CITY OF ISABELA', '09', '0997');");
        DB::statement("INSERT INTO `refprovince` VALUES ('53', '101300000', 'BUKIDNON', '10', '1013');");
        DB::statement("INSERT INTO `refprovince` VALUES ('54', '101800000', 'CAMIGUIN', '10', '1018');");
        DB::statement("INSERT INTO `refprovince` VALUES ('55', '103500000', 'LANAO DEL NORTE', '10', '1035');");
        DB::statement("INSERT INTO `refprovince` VALUES ('56', '104200000', 'MISAMIS OCCIDENTAL', '10', '1042');");
        DB::statement("INSERT INTO `refprovince` VALUES ('57', '104300000', 'MISAMIS ORIENTAL', '10', '1043');");
        DB::statement("INSERT INTO `refprovince` VALUES ('58', '112300000', 'DAVAO DEL NORTE', '11', '1123');");
        DB::statement("INSERT INTO `refprovince` VALUES ('59', '112400000', 'DAVAO DEL SUR', '11', '1124');");
        DB::statement("INSERT INTO `refprovince` VALUES ('60', '112500000', 'DAVAO ORIENTAL', '11', '1125');");
        DB::statement("INSERT INTO `refprovince` VALUES ('61', '118200000', 'COMPOSTELA VALLEY', '11', '1182');");
        DB::statement("INSERT INTO `refprovince` VALUES ('62', '118600000', 'DAVAO OCCIDENTAL', '11', '1186');");
        DB::statement("INSERT INTO `refprovince` VALUES ('63', '124700000', 'COTABATO (NORTH COTABATO)', '12', '1247');");
        DB::statement("INSERT INTO `refprovince` VALUES ('64', '126300000', 'SOUTH COTABATO', '12', '1263');");
        DB::statement("INSERT INTO `refprovince` VALUES ('65', '126500000', 'SULTAN KUDARAT', '12', '1265');");
        DB::statement("INSERT INTO `refprovince` VALUES ('66', '128000000', 'SARANGANI', '12', '1280');");
        DB::statement("INSERT INTO `refprovince` VALUES ('67', '129800000', 'COTABATO CITY', '12', '1298');");
        DB::statement("INSERT INTO `refprovince` VALUES ('68', '133900000', 'NCR, CITY OF MANILA, FIRST DISTRICT', '13', '1339');");
        DB::statement("INSERT INTO `refprovince` VALUES ('69', '133900000', 'CITY OF MANILA', '13', '1339');");
        DB::statement("INSERT INTO `refprovince` VALUES ('70', '137400000', 'NCR, SECOND DISTRICT', '13', '1374');");
        DB::statement("INSERT INTO `refprovince` VALUES ('71', '137500000', 'NCR, THIRD DISTRICT', '13', '1375');");
        DB::statement("INSERT INTO `refprovince` VALUES ('72', '137600000', 'NCR, FOURTH DISTRICT', '13', '1376');");
        DB::statement("INSERT INTO `refprovince` VALUES ('73', '140100000', 'ABRA', '14', '1401');");
        DB::statement("INSERT INTO `refprovince` VALUES ('74', '141100000', 'BENGUET', '14', '1411');");
        DB::statement("INSERT INTO `refprovince` VALUES ('75', '142700000', 'IFUGAO', '14', '1427');");
        DB::statement("INSERT INTO `refprovince` VALUES ('76', '143200000', 'KALINGA', '14', '1432');");
        DB::statement("INSERT INTO `refprovince` VALUES ('77', '144400000', 'MOUNTAIN PROVINCE', '14', '1444');");
        DB::statement("INSERT INTO `refprovince` VALUES ('78', '148100000', 'APAYAO', '14', '1481');");
        DB::statement("INSERT INTO `refprovince` VALUES ('79', '150700000', 'BASILAN', '15', '1507');");
        DB::statement("INSERT INTO `refprovince` VALUES ('80', '153600000', 'LANAO DEL SUR', '15', '1536');");
        DB::statement("INSERT INTO `refprovince` VALUES ('81', '153800000', 'MAGUINDANAO', '15', '1538');");
        DB::statement("INSERT INTO `refprovince` VALUES ('82', '156600000', 'SULU', '15', '1566');");
        DB::statement("INSERT INTO `refprovince` VALUES ('83', '157000000', 'TAWI-TAWI', '15', '1570');");
        DB::statement("INSERT INTO `refprovince` VALUES ('84', '160200000', 'AGUSAN DEL NORTE', '16', '1602');");
        DB::statement("INSERT INTO `refprovince` VALUES ('85', '160300000', 'AGUSAN DEL SUR', '16', '1603');");
        DB::statement("INSERT INTO `refprovince` VALUES ('86', '166700000', 'SURIGAO DEL NORTE', '16', '1667');");
        DB::statement("INSERT INTO `refprovince` VALUES ('87', '166800000', 'SURIGAO DEL SUR', '16', '1668');");
        DB::statement("INSERT INTO `refprovince` VALUES ('88', '168500000', 'DINAGAT ISLANDS', '16', '1685');");

    }
}
