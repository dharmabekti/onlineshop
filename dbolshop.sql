/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - dbonlineshop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbonlineshop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbonlineshop`;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values 
('ao2ef8ij52cotan2uqhia1k4lo','::1',1556982167,'__ci_last_regenerate|i:1556982167;'),
('o0ci2nk3de8m9c7kirv9to5coj','::1',1556982233,'__ci_last_regenerate|i:1556982232;'),
('nam1uvaia54l3nflfes6t2jk46','::1',1556982256,'__ci_last_regenerate|i:1556982256;'),
('lh8ln4f3eba52pvlcist70ru3u','::1',1556982258,'__ci_last_regenerate|i:1556982258;'),
('lntcg9mftmficqqti70nlshh6q','::1',1556982259,'__ci_last_regenerate|i:1556982259;'),
('rr8hdbvrru3p31edjtjpb4gvig','::1',1556982261,'__ci_last_regenerate|i:1556982261;'),
('sh893hkd5k9l3qkqagqlqoiepa','::1',1556982262,'__ci_last_regenerate|i:1556982262;'),
('kop13tks9i8n8emqcs8gi3fvik','::1',1556982264,'__ci_last_regenerate|i:1556982264;'),
('7h0lcme7nai0dbh2c1ppkeu50k','::1',1556982464,'__ci_last_regenerate|i:1556982464;'),
('k7hvjmj2ld5hdtcdil3ho4funl','::1',1556982465,'__ci_last_regenerate|i:1556982465;'),
('5obp4qii4c04v7pd31tp14oju4','::1',1556982466,'__ci_last_regenerate|i:1556982466;'),
('k9l7jub0tuq4qpq2num5t426jv','::1',1556982481,'__ci_last_regenerate|i:1556982481;'),
('jc43bvs39dj8cb8msp9rki9u0a','::1',1556982484,'__ci_last_regenerate|i:1556982484;'),
('5iebrbl5dq0jkvgpt329lr58g2','::1',1556982596,'__ci_last_regenerate|i:1556982596;'),
('eekpl7pahmk3f7m4ak2cqi77pc','::1',1556982597,'__ci_last_regenerate|i:1556982597;'),
('r6eereiem89877hs8u9onn18h2','::1',1556982598,'__ci_last_regenerate|i:1556982598;'),
('t6befu6l7jrat9i9h3uv7ul0go','::1',1556982629,'__ci_last_regenerate|i:1556982629;'),
('u0se135jkrpcc0rb5l6sjbc396','::1',1556982630,'__ci_last_regenerate|i:1556982630;'),
('ntu6lavg8o8hnbmen2esdv099c','::1',1556982631,'__ci_last_regenerate|i:1556982631;'),
('2eeg0inb20sf58uquh9laqmri7','::1',1556982673,'__ci_last_regenerate|i:1556982672;'),
('fmd9kqfj2r3i1gogf9tprn5svt','::1',1556983080,'__ci_last_regenerate|i:1556983080;'),
('kq0e1c1hj2rg5qp0jaqi2g6e6j','::1',1556983124,'__ci_last_regenerate|i:1556983124;'),
('vfgi1dg97d0ecif1irselg1n3m','::1',1556983132,'__ci_last_regenerate|i:1556983132;'),
('om4unff6alv8fdar4kqbf12ae9','::1',1556983133,'__ci_last_regenerate|i:1556983133;'),
('22u7gbf44lcpkd3h4oli979eac','::1',1556983134,'__ci_last_regenerate|i:1556983134;'),
('1nr5cebkk2267v5269c4ejj2uk','::1',1556983202,'__ci_last_regenerate|i:1556983202;'),
('a4hk8mo4brfdf75jqdvf9mih96','::1',1556983203,'__ci_last_regenerate|i:1556983203;'),
('lpn041rok26tpce0606abb4uir','::1',1556983247,'__ci_last_regenerate|i:1556983247;'),
('u6di5qmhfvev8g27puq604gseu','::1',1556983249,'__ci_last_regenerate|i:1556983249;'),
('irsf08ejamjnp7a73kq8oit844','::1',1556983250,'__ci_last_regenerate|i:1556983250;'),
('ss5t9id44o0dfojj3mjugaia4u','::1',1556983260,'__ci_last_regenerate|i:1556983260;'),
('3h9v7nguagqjv4n6oldais9vo9','::1',1556983260,'__ci_last_regenerate|i:1556983260;'),
('mkse76oldapptfp13a9ou74g2q','::1',1556983261,'__ci_last_regenerate|i:1556983261;'),
('1iufe0eacfmq54p3e8k2h4601v','::1',1556983316,'__ci_last_regenerate|i:1556983316;'),
('1smuhop6v8snmhmt5esq03lo1a','::1',1556983318,'__ci_last_regenerate|i:1556983318;'),
('66b07dup9ic1p9k6u512p9gokd','::1',1556983385,'__ci_last_regenerate|i:1556983385;'),
('54scb7r19o0r0qf6d6hglavv3h','::1',1556983386,'__ci_last_regenerate|i:1556983386;'),
('dc4536cjbf43mu1km1ogjo24sq','::1',1556983389,'__ci_last_regenerate|i:1556983389;'),
('vijg8dbugkjso920t2c54euie3','::1',1556983390,'__ci_last_regenerate|i:1556983390;'),
('1da4d2pvpde076jd8l1csd7at9','::1',1556983391,'__ci_last_regenerate|i:1556983391;'),
('kbcl7semtmmvcjf2oitbnvgtf1','::1',1556983391,'__ci_last_regenerate|i:1556983391;'),
('9pdlv00i5lqb555e1ck4bruqdm','::1',1556983392,'__ci_last_regenerate|i:1556983392;'),
('mujkn19kvu4b1huotsbm7k7opf','::1',1556983393,'__ci_last_regenerate|i:1556983393;'),
('edv8shvjl5cpc4a20fne5qm7ha','::1',1556983423,'__ci_last_regenerate|i:1556983423;'),
('dj6ng5h58c42sgnc8q9mbos5bo','::1',1556983424,'__ci_last_regenerate|i:1556983424;'),
('5cm4aev1a150rg8a020q2kvtc9','::1',1556983424,'__ci_last_regenerate|i:1556983424;'),
('vhq22kfpglbiug52ihijaac0sp','::1',1556983425,'__ci_last_regenerate|i:1556983425;'),
('is31ki34ef8p4phhb024f3prtv','::1',1556983425,'__ci_last_regenerate|i:1556983425;'),
('b3q8sa0mlctqm7128su00a5hlr','::1',1556983425,'__ci_last_regenerate|i:1556983425;'),
('vrqasfj6unqpor6124jmm4er11','::1',1556983425,'__ci_last_regenerate|i:1556983425;'),
('lk26su65eqjuc313cfe09n4j5l','::1',1556983425,'__ci_last_regenerate|i:1556983425;'),
('fjpqjkpq96ot1gl7hgutv7t6i3','::1',1556983426,'__ci_last_regenerate|i:1556983426;'),
('qvck6itdqna6ctq51f5m8b9r3s','::1',1556983426,'__ci_last_regenerate|i:1556983426;'),
('t895mvcj39kr792es7e5l7e4kv','::1',1556983426,'__ci_last_regenerate|i:1556983426;'),
('c4npned38esfsvfq19hjtc6453','::1',1556983426,'__ci_last_regenerate|i:1556983426;'),
('9tns4hamt1m5vc81q565tkrlt5','::1',1556983426,'__ci_last_regenerate|i:1556983426;'),
('r9l1svpq4gcrvtbrtoo3f14dsu','::1',1556983438,'__ci_last_regenerate|i:1556983438;'),
('3irhc3c62kj3j1l71h52j8bipq','::1',1556983440,'__ci_last_regenerate|i:1556983440;'),
('2rn1u8k0834fggn5jqft981sib','::1',1556983441,'__ci_last_regenerate|i:1556983441;'),
('0oauudu2ikhsskg8jg9ftpk0di','::1',1556983442,'__ci_last_regenerate|i:1556983442;'),
('u4tvhooe542no7sl4s5d08j7j0','::1',1556983442,'__ci_last_regenerate|i:1556983442;'),
('soeagfua7tv2g22gjq0dq4pkqp','::1',1556983447,'__ci_last_regenerate|i:1556983447;'),
('gqkkeo9bvfnirg0g13mnm1lmkc','::1',1556983457,'__ci_last_regenerate|i:1556983457;'),
('0mno2g155v86sbn8k0vfrl7emm','::1',1556983560,'__ci_last_regenerate|i:1556983560;'),
('c0c8cprt4bk7jk3vfooais1mj6','::1',1556983563,'__ci_last_regenerate|i:1556983563;'),
('2ifmnauueup5l7a6li4jme68kg','::1',1556983564,'__ci_last_regenerate|i:1556983564;'),
('a70osupuh71elmjp2h2m6ms0c3','::1',1556983565,'__ci_last_regenerate|i:1556983565;'),
('m7vlighnbse40489mr0fr7bbcf','::1',1556983565,'__ci_last_regenerate|i:1556983565;'),
('lucil305tqj82ho7rrlbnniba7','::1',1556983566,'__ci_last_regenerate|i:1556983566;'),
('gntpt6o2aj8r4j3v5ef0jv0b2d','::1',1556983632,'__ci_last_regenerate|i:1556983632;'),
('9npv6q00kcg1ua3kjadkeu8v08','::1',1556983633,'__ci_last_regenerate|i:1556983633;'),
('ubp4epmpvj71omjieitk0n9ajt','::1',1556983634,'__ci_last_regenerate|i:1556983634;'),
('o7pcjfdf5u7il2dehjo0cn4hc6','::1',1556983634,'__ci_last_regenerate|i:1556983634;'),
('n3ob24k0vegmiaoaporci7flt6','::1',1556983634,'__ci_last_regenerate|i:1556983634;'),
('sktmsk7j9i3buhioib82v7abmc','::1',1556983679,'__ci_last_regenerate|i:1556983679;'),
('rlacg1ib7ui2pclj0tjlqo7103','::1',1556983680,'__ci_last_regenerate|i:1556983680;'),
('ivedekb9facmimqms61j0rv8el','::1',1556983684,'__ci_last_regenerate|i:1556983684;'),
('5pv3f0gsb4nrdj8ljc0ri50hem','::1',1556983693,'__ci_last_regenerate|i:1556983693;'),
('qs2cde87t21tfc50bouc47gj6f','::1',1556983729,'__ci_last_regenerate|i:1556983729;'),
('8i9nlshm8fm3c4g4b0lv95p1m3','::1',1556983900,'__ci_last_regenerate|i:1556983900;'),
('u7gia9gaun3qeev2uehjgeen79','::1',1556984474,'__ci_last_regenerate|i:1556984474;'),
('jah22k23avagknrocgisbnjvbc','::1',1556984517,'__ci_last_regenerate|i:1556984517;'),
('s17f3ob2tptk7ndofc9029ftei','::1',1556984785,'__ci_last_regenerate|i:1556984785;'),
('kmg5e6b0sc18obcq650mon25gh','::1',1556984803,'__ci_last_regenerate|i:1556984803;'),
('m4up7fqlt1a4h0s58dt2i4r4a6','::1',1556984806,'__ci_last_regenerate|i:1556984806;'),
('08kgmb024shu4a852n4mhgnsop','::1',1556984807,'__ci_last_regenerate|i:1556984807;'),
('s9ik3b7vpj5cq4ggt23tg2rcs3','::1',1556984829,'__ci_last_regenerate|i:1556984829;'),
('2p6reg4dmngkgbj82pbf6b8vqm','::1',1556984866,'__ci_last_regenerate|i:1556984866;'),
('avj3k9meh06qk3n4uskqbdqmnu','::1',1556985002,'__ci_last_regenerate|i:1556985002;'),
('t0fcrbqrtspqbm0vqhaa5p1tkk','::1',1556985065,'__ci_last_regenerate|i:1556985065;'),
('hkt55mlc39k08peiej1rsgchnt','::1',1556985250,'__ci_last_regenerate|i:1556985250;'),
('1q7cr4vavbato28kv826ij5t33','::1',1556985253,'__ci_last_regenerate|i:1556985253;'),
('7jdup9b7f2i6au46b2mqsoa26t','::1',1556985349,'__ci_last_regenerate|i:1556985349;'),
('0lmvoobf0uc6lmi2v655oq46tf','::1',1556985350,'__ci_last_regenerate|i:1556985350;'),
('8jj2p3fen3ma3u7mlnj0heubs6','::1',1556985352,'__ci_last_regenerate|i:1556985352;'),
('ll691ddeh1voleihbq2h1f6ddc','::1',1556985372,'__ci_last_regenerate|i:1556985372;'),
('68o1df7dmlnr98ijkpegfutpku','::1',1556985383,'__ci_last_regenerate|i:1556985383;'),
('rtsbrvjbqsv9q5oa6sitavqhlt','::1',1556985384,'__ci_last_regenerate|i:1556985384;'),
('tll68qvfs8t9b9tv16djddcb3n','::1',1556985386,'__ci_last_regenerate|i:1556985386;'),
('t2asujho1g2kfer2bj7so09cpp','::1',1556985397,'__ci_last_regenerate|i:1556985397;'),
('u0grrrqt5vd7d35o48u55l2boj','::1',1556985406,'__ci_last_regenerate|i:1556985406;'),
('mrc0q49hcg6qe7vj3eksjlht0h','::1',1556985463,'__ci_last_regenerate|i:1556985463;'),
('nrad7uf3p1h08c02psedovn1p4','::1',1556985556,'__ci_last_regenerate|i:1556985556;'),
('m9rerve6lni3g3lb1ifsp0ns6h','::1',1556985562,'__ci_last_regenerate|i:1556985562;'),
('cnn0eqppqcutpk1v88tkmv6gj0','::1',1556985564,'__ci_last_regenerate|i:1556985564;'),
('92k6id61uvhkco1an23ognfe0h','::1',1556985574,'__ci_last_regenerate|i:1556985574;'),
('92bk8olrfd1epk6kkl0h5hc95d','::1',1556985660,'__ci_last_regenerate|i:1556985660;'),
('3abutlrslcujos409aiqbokja6','::1',1556985661,'__ci_last_regenerate|i:1556985661;'),
('t5867spaqdr6j5h4no7dkfh5ab','::1',1556985663,'__ci_last_regenerate|i:1556985663;'),
('mrkiaqd4tckvvgb8k6hvdg4g21','::1',1556985690,'__ci_last_regenerate|i:1556985690;'),
('6np3qhoeg3ub8fr3ne8ipjrool','::1',1556985691,'__ci_last_regenerate|i:1556985691;'),
('ukdcrav8d13vdpqskfb1tvrnl4','::1',1556985692,'__ci_last_regenerate|i:1556985692;'),
('3iccls8e31484du7au6k366t2j','::1',1556985694,'__ci_last_regenerate|i:1556985694;'),
('lnau670c9bsmqctr4jd9h008bs','::1',1556985712,'__ci_last_regenerate|i:1556985712;'),
('a43v17gi3g8hhhbf29ljusk8i3','::1',1556985714,'__ci_last_regenerate|i:1556985714;'),
('9aeimv7drfm4orbffde5fpj157','::1',1556985715,'__ci_last_regenerate|i:1556985715;'),
('fglpr3vgj6thg4nctlgi228uck','::1',1556985744,'__ci_last_regenerate|i:1556985744;'),
('oqh5jc7jrfonvrnsfb1lahqou5','::1',1556985745,'__ci_last_regenerate|i:1556985745;'),
('ov2e344rc2nomnesds97vd07p8','::1',1556985746,'__ci_last_regenerate|i:1556985746;'),
('5lsq20g3mnkg0o6beogtu897r1','::1',1556986101,'__ci_last_regenerate|i:1556986101;'),
('hqdfv7t973vqup6ivudiagbas1','::1',1556986113,'__ci_last_regenerate|i:1556986113;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:4:\"role\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('378lp7hv6t85cervje7prk5813','::1',1556986113,'__ci_last_regenerate|i:1556986113;'),
('1b83dj1q6mf39ioeqg5ljtspjc','::1',1556986154,'__ci_last_regenerate|i:1556986154;'),
('r1grjqsrjh5peg8sp4835btuai','::1',1556986155,'__ci_last_regenerate|i:1556986155;'),
('g2btdmec0upoch9nu3q1e1jl5k','::1',1556986205,'__ci_last_regenerate|i:1556986205;'),
('mee73rrkfv41bu92sf6aea631u','::1',1556986208,'__ci_last_regenerate|i:1556986208;'),
('00uodpaisv869r2andl2ajn690','::1',1556986244,'__ci_last_regenerate|i:1556986244;'),
('j5ocmo5v057a652ek3t069arks','::1',1556986252,'__ci_last_regenerate|i:1556986252;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:4:\"role\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('vk911kd43uoms681ann07516f1','::1',1556986253,'__ci_last_regenerate|i:1556986253;'),
('fti66bj0i6kipor8656otv8eo8','::1',1556986256,'__ci_last_regenerate|i:1556986256;'),
('m9njejui4sddfkjiceknlosrb8','::1',1556986261,'__ci_last_regenerate|i:1556986261;error|s:28:\"Username atau Password Salah\";__ci_vars|a:1:{s:5:\"error\";s:3:\"new\";}'),
('c7m42hodt2vmrequ5ohtlcbs93','::1',1556986263,'__ci_last_regenerate|i:1556986263;'),
('2gsi0hbafuhpfbv717m0savru3','::1',1556986277,'__ci_last_regenerate|i:1556986277;'),
('fh5hoidhusbbfhgn2mu1pkttft','::1',1556986296,'__ci_last_regenerate|i:1556986296;'),
('tmttlqk0l2ldg6knbpe7u7gsma','::1',1556986296,'__ci_last_regenerate|i:1556986296;'),
('upo2vkfskt7jr5posfl51tbfnc','::1',1556986303,'__ci_last_regenerate|i:1556986303;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:4:\"role\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('nm6ne43ua9rvg7i38lgv5i48r1','::1',1556986303,'__ci_last_regenerate|i:1556986303;'),
('jhtcldbosg1vu8vb5p2ikhperb','::1',1556986303,'__ci_last_regenerate|i:1556986303;'),
('5vn885u3ed2tcsrl5q48o0dqon','::1',1556986331,'__ci_last_regenerate|i:1556986331;'),
('btljd4b37v83uist05pc9niqha','::1',1556986335,'__ci_last_regenerate|i:1556986335;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:4:\"role\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('fvgod7kit1r0eis5vn0lqm4nav','::1',1556986336,'__ci_last_regenerate|i:1556986335;'),
('fm0m7ao9600j80bpr78v2hpe55','::1',1556986336,'__ci_last_regenerate|i:1556986336;'),
('2c527dnr94c3dusi9lhe1mhabn','::1',1556986575,'__ci_last_regenerate|i:1556986575;'),
('m3h2q9h1co7bu1imhoddbj0hpm','::1',1556986581,'__ci_last_regenerate|i:1556986581;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:4:\"role\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('02bsg4fj6each2hth0tsu1cbka','::1',1556986581,'__ci_last_regenerate|i:1556986581;'),
('ner34hj3gi48839ufrt540q86b','::1',1556986581,'__ci_last_regenerate|i:1556986581;'),
('8pdbkqo1vdue5dvupf5mhi8067','::1',1556986676,'__ci_last_regenerate|i:1556986676;'),
('f2cas1allt7t3ike1nrvhqhmg5','::1',1556986681,'__ci_last_regenerate|i:1556986681;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:4:\"role\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('ek2gkg7qt7dln85jc8g6n9ie69','::1',1556986681,'__ci_last_regenerate|i:1556986681;'),
('kf1ilginaaf2u4u2g3sh2n1m8d','::1',1556986681,'__ci_last_regenerate|i:1556986681;'),
('5l2kg77p3nisunnsjuoo7ed8bg','::1',1556986702,'__ci_last_regenerate|i:1556986702;'),
('bjgmjcjcvfnqdu0750i668c6v1','::1',1556986702,'__ci_last_regenerate|i:1556986702;'),
('ilesqlt8tjbkp4q9luprnupm9o','::1',1556986731,'__ci_last_regenerate|i:1556986731;'),
('rgtsr5q1tumrhhduk638ur782p','::1',1556986737,'__ci_last_regenerate|i:1556986737;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:4:\"role\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('qa1s1mjb1bu3vle085hptj3t4e','::1',1556986737,'__ci_last_regenerate|i:1556986737;'),
('ngccn5mljnu0r4s569sca328m5','::1',1556987390,'__ci_last_regenerate|i:1556987390;'),
('dtj3jdr5i4ngtc9jr6adci6435','::1',1556987397,'__ci_last_regenerate|i:1556987397;'),
('0k6umeevlm3en6ebt0heaihbtr','::1',1556987399,'__ci_last_regenerate|i:1556987399;'),
('m1bnbevkb7805pak91ce7qedad','::1',1556987665,'__ci_last_regenerate|i:1556987665;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:6:\"kontak\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('r7ggtj04quh86h0gm5pcl4qr15','::1',1556987667,'__ci_last_regenerate|i:1556987667;'),
('9mt4m16e8tcjuqmfsf1q6ujsia','::1',1556987766,'__ci_last_regenerate|i:1556987766;'),
('p3v8pvgsoqj4drb4fgjto8ssec','::1',1556987767,'__ci_last_regenerate|i:1556987767;'),
('5abs9r5m1nb22ed6vavl3v7dau','::1',1556987776,'__ci_last_regenerate|i:1556987776;'),
('es62pb0spcqcindqlbdvrg2fm3','::1',1556987778,'__ci_last_regenerate|i:1556987778;'),
('f06mhk89l6e4uf2dr6prcp98jp','::1',1556987780,'__ci_last_regenerate|i:1556987780;'),
('ap7fqg7ptdaa3rohf6ll1e7pc6','::1',1556987780,'__ci_last_regenerate|i:1556987780;'),
('j138q1dot8so3js2j2n3a8ca6q','::1',1556987785,'__ci_last_regenerate|i:1556987785;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:6:\"kontak\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('5om44ho2qlgc1l5folj1p5vsj0','::1',1556987785,'__ci_last_regenerate|i:1556987785;'),
('sc9eui4taaqldmma3cu844a1qd','::1',1556987785,'__ci_last_regenerate|i:1556987785;'),
('u5em14eom8vq5865nusg606the','::1',1556987856,'__ci_last_regenerate|i:1556987856;'),
('mqe66kk3tfre98hmaf5ghk73rv','::1',1556987858,'__ci_last_regenerate|i:1556987858;'),
('06dm4rkv51oupmpdvanhmgpn4a','::1',1556987859,'__ci_last_regenerate|i:1556987859;'),
('2t61u9si880rfke51ouanb5orf','::1',1556987862,'__ci_last_regenerate|i:1556987862;'),
('9kbvav4bcgis6hprv9ddjpcq48','::1',1556987866,'__ci_last_regenerate|i:1556987866;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:6:\"kontak\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('24stdifvmmoqo6e3ka8hbrsent','::1',1556987907,'__ci_last_regenerate|i:1556987907;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:6:\"kontak\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('ic9fb5nto52onoffpim2rfs0oc','::1',1556987907,'__ci_last_regenerate|i:1556987907;'),
('ojk45lmd0kbn6nn43kuu23ih9c','::1',1556987926,'__ci_last_regenerate|i:1556987926;'),
('1qeasiaphcq6btsk6me30vd9i3','::1',1556987927,'__ci_last_regenerate|i:1556987927;'),
('2h32b4d3262uhmaasv2v0cpmlt','::1',1556987927,'__ci_last_regenerate|i:1556987927;'),
('npa3obe364ibs62qdiavgcav0h','::1',1556988266,'__ci_last_regenerate|i:1556988266;'),
('p4vbad0v6i6l5pnsku9h4k55fh','::1',1556988267,'__ci_last_regenerate|i:1556988267;'),
('ovm493ntnbeeqpqrb2igmjj7ji','::1',1556988267,'__ci_last_regenerate|i:1556988267;'),
('1d7vvbfn34q700daov9rn6oo8l','::1',1556988267,'__ci_last_regenerate|i:1556988267;'),
('b1gqhl1sejdod2nv2gr4f9uu2l','::1',1556988267,'__ci_last_regenerate|i:1556988267;'),
('kj06blhu03gqh502sg85ktge2j','::1',1556988267,'__ci_last_regenerate|i:1556988267;'),
('5sos3btovhc696l6o2dibep4hj','::1',1556988268,'__ci_last_regenerate|i:1556988268;'),
('4snqefdocgbjanu03ohj137ir6','::1',1556988270,'__ci_last_regenerate|i:1556988270;'),
('v06h9ighvhp4k1tukrkaea59nh','::1',1556988489,'__ci_last_regenerate|i:1556988489;'),
('738h4v8sidednh58qibsu9i989','::1',1556988492,'__ci_last_regenerate|i:1556988492;error|s:28:\"Username atau Password Salah\";__ci_vars|a:1:{s:5:\"error\";s:3:\"new\";}'),
('s2qleu1fpdeu7a654i0lu1s6lu','::1',1556988496,'__ci_last_regenerate|i:1556988496;'),
('enj90r4jaug5179vn93i7fvvgs','::1',1556988500,'__ci_last_regenerate|i:1556988500;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:6:\"kontak\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('a2m8rhlr7vqu87jc3ln6j73np5','::1',1556988500,'__ci_last_regenerate|i:1556988500;'),
('g14avni0ulsuekd1bk5hmmk4nv','::1',1557151271,'__ci_last_regenerate|i:1557151271;'),
('fgmevnafolcn7nc5up8kskndan','::1',1557151278,'__ci_last_regenerate|i:1557151278;'),
('qee7cvhg88vrgj6bdqfr9opujk','::1',1557151291,'__ci_last_regenerate|i:1557151291;'),
('ksmmqi1c4217gejtmqejgn9076','::1',1557151293,'__ci_last_regenerate|i:1557151293;'),
('nkuckkqtmlok8q3uhffkqnc366','::1',1557151298,'__ci_last_regenerate|i:1557151298;logged_in_pengguna|a:6:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:21:\"dharmabekti@gmail.com\";s:6:\"kontak\";s:12:\"085728418120\";s:9:\"instagram\";s:8:\"@kianom_\";}'),
('rb5ci0j5mptoqf6ajr7qsgcj8n','::1',1557151298,'__ci_last_regenerate|i:1557151298;'),
('ckk7ud5lgcc8srtli2hdhtc6bj','::1',1557152281,'__ci_last_regenerate|i:1557152281;'),
('sijr55h8rsmevi2186371gio4l','::1',1557152286,'__ci_last_regenerate|i:1557152286;'),
('35brp38ptslh30vmuvm1d64rr0','::1',1557152288,'__ci_last_regenerate|i:1557152288;');

/*Table structure for table `invoices` */

DROP TABLE IF EXISTS `invoices`;

CREATE TABLE `invoices` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nope` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kota_tujuan` int(3) NOT NULL,
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `kurir` varchar(10) NOT NULL,
  `status` enum('PAID','UNPAID','CENCELED','EXPIRED') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `invoices` */

insert  into `invoices`(`id`,`nama`,`nope`,`email`,`alamat`,`kota_tujuan`,`date`,`due_date`,`kurir`,`status`) values 
(1,'Bekti','21212','dharmabekti@gmail.com','Jrakah Village 002/004, Bayan',0,'2019-05-09 17:05:30','2019-05-10 17:05:30','','PAID'),
(2,'anom','212198291829','dharma.bekti16696@gmail.com','jkdksdjksjd',0,'2019-06-25 17:56:53','2019-06-26 17:56:53','','UNPAID'),
(3,'dharma','2112121','dharma.bekti16696@gmail.com','21212121',377,'2019-06-25 19:26:06','2019-06-26 19:26:06','pos','UNPAID');

/*Table structure for table `kategori_produk` */

DROP TABLE IF EXISTS `kategori_produk`;

CREATE TABLE `kategori_produk` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `kategori_produk` */

insert  into `kategori_produk`(`id_kategori`,`nama_kategori`) values 
(1,'Camera'),
(2,'Handphone'),
(3,'Computer');

/*Table structure for table `konfirmasi` */

DROP TABLE IF EXISTS `konfirmasi`;

CREATE TABLE `konfirmasi` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(5) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `konfirmasi` */

insert  into `konfirmasi`(`id`,`invoice_id`,`tanggal`,`gambar`) values 
(1,1,'2019-05-09 22:28:25','WhatsApp_Image_2019-04-26_at_10_23_26.jpeg'),
(2,1,'2019-05-09 22:34:14','34.jpg');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `weight` int(3) DEFAULT NULL,
  `price` int(9) NOT NULL,
  `options` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `orders` */

insert  into `orders`(`id`,`invoice_id`,`product_id`,`product_name`,`qty`,`weight`,`price`,`options`) values 
(1,1,1,'Samsung',2,NULL,6000000,''),
(2,1,2,'Nikon',1,NULL,5199999,''),
(3,1,3,'Lenovo',1,NULL,1600000,''),
(4,2,8,'Kripik Manggleng',1,NULL,15000,''),
(5,3,8,'Kripik Manggleng',2,NULL,15000,''),
(6,3,6,'Nyamnyung',2,NULL,4000000,'');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kategori` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `berat` int(3) NOT NULL,
  `harga` int(8) NOT NULL,
  `gambar` text NOT NULL,
  `ishapus` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`id`,`kategori`,`nama_produk`,`ukuran`,`keterangan`,`berat`,`harga`,`gambar`,`ishapus`) values 
(1,2,'Samsung','Layar 8.0','<h5>Features Samsung Tab S2</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',1,6000000,'samsungs22.jpg',0),
(2,1,'Nikon','3.0 921k-Dot LCD Monitor','<h5>Features Nikon</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',1,5199999,'Nikon-D3300-700x5255.png',0),
(3,2,'Lenovo','141 x 70 x 8.2 mm (5.55 x 2.76 x 0.32 in) ','<h5>Features Lenovo A6000</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',1,1600000,'samsungs23.jpg',0),
(4,1,'Asus','16x16','<h5>Features Asus Zenfone 2</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',1,4000000,'Nikon-D3300-700x5256.png',0),
(6,2,'Nyamnyung','23x56','Ini adalah hp nyamyung...<br>Murah meriah hp nya...<br><br><br>',1,4000000,'samsungs24.jpg',0),
(7,2,'Xiami Readme 5A','32x32','<h5>Features Samsung Tab S2</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',1,1700000,'WhatsApp_Image_2019-04-26_at_16_43_19_(1).jpeg',1),
(8,1,'Kripik Manggleng','1 porsi 10 buah','<h5>Features Samsung Tab S2</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',10,15000,'WhatsApp_Image_2019-05-08_at_10_07_07.jpeg',0);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `nope` int(14) NOT NULL,
  `alamat` text NOT NULL,
  `status` int(1) NOT NULL,
  `bukti` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`username`,`password`,`email`,`kontak`,`instagram`,`facebook`,`twitter`) values 
(1,'Administrator','admin','21232f297a57a5a743894a0e4a801fc3','dharmabekti@gmail.com','085728418120','@kianom_',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
