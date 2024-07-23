-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 01 ธ.ค. 2013  น.
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `coffeedb`
-- 

-- 
-- dump ตาราง `tbcategory`
-- 

INSERT INTO `tbcategory` VALUES ('03', 'อิตาลี');
INSERT INTO `tbcategory` VALUES ('02', 'จีน');
INSERT INTO `tbcategory` VALUES ('01', 'ไทย');

-- 
-- dump ตาราง `tbtype`
-- 

INSERT INTO `tbtype` VALUES ('02', 'หวาน');
INSERT INTO `tbtype` VALUES ('01', 'คาว');

-- 
-- dump ตาราง `tbproduct`
-- 

INSERT INTO `tbproduct` VALUES ('01', '01', '01', 'อาหารไทยอร่อยๆ', 60, 'item_01.jpg', 'พริกแกงมัสมั่น');
INSERT INTO `tbproduct` VALUES ('02', '01', '01', 'อาหารไทยอร่อยๆ', 60, 'item_02.jpg', 'พริกแกงเผ็ด');
INSERT INTO `tbproduct` VALUES ('03', '01', '01', 'อาหารไทยอร่อยๆ', 60, 'item_03.jpg', 'พริกแกงคั่ว');
INSERT INTO `tbproduct` VALUES ('04', '01', '01', 'อาหารไทยอร่อยๆ', 60, 'item_04.jpg', 'พริกแกงเขียวหวาน');
INSERT INTO `tbproduct` VALUES ('05', '02', '01', 'อาหารไทยอร่อยๆ', 20, 'item_05.jpg', 'ขนมชั้น');
INSERT INTO `tbproduct` VALUES ('06', '02', '01', 'อาหารไทยอร่อยๆ', 20, 'item_06.jpg', 'ขนมตาล');
INSERT INTO `tbproduct` VALUES ('07', '01', '02', 'อาหารจีนสุดๆ', 50, 'item_07.jpg', 'เต้าหู้ยัดไส้นึ่งซีอิ๊ว');
INSERT INTO `tbproduct` VALUES ('08', '01', '02', 'อาหารจีนสุดๆ', 30, 'item_08.jpg', 'บ๊ะจ่าง');
INSERT INTO `tbproduct` VALUES ('09', '01', '02', 'อาหารจีนสุดๆ', 80, 'item_09.jpg', 'กุ้งอบวุ้นเส้น');
INSERT INTO `tbproduct` VALUES ('10', '01', '02', 'อาหารจีนสุดๆ', 130, 'item_10.jpg', 'ไก่ตุ๋นซีอิ๊ว');
INSERT INTO `tbproduct` VALUES ('11', '02', '02', 'อาหารจีนสุดๆ', 15, 'item_11.jpg', 'ขนมเข่ง');
INSERT INTO `tbproduct` VALUES ('12', '02', '02', 'อาหารจีนสุดๆ', 15, 'item_12.jpg', 'ขนมเทียน');
INSERT INTO `tbproduct` VALUES ('13', '01', '03', 'อาหารอิตาลีฟินๆ', 90, 'item_13.jpg', 'บรูเชตตา');
INSERT INTO `tbproduct` VALUES ('14', '01', '03', 'อาหารอิตาลีฟินๆ', 90, 'item_14.jpg', 'ลาซานญา');
INSERT INTO `tbproduct` VALUES ('15', '01', '03', 'อาหารอิตาลีฟินๆ', 90, 'item_15.jpg', 'พาสต้า คาโบนาร่า');
INSERT INTO `tbproduct` VALUES ('16', '01', '03', 'อาหารอิตาลีฟินๆ', 130, 'item_16.jpg', 'พิซซ่า');
INSERT INTO `tbproduct` VALUES ('17', '02', '03', 'อาหารอิตาลีฟินๆ', 40, 'item_17.jpg', 'เพนนา คอตตา');
INSERT INTO `tbproduct` VALUES ('18', '02', '03', 'อาหารอิตาลีฟินๆ', 10, 'item_18.jpg', 'คุกกี');

INSERT INTO `login` VALUES ('pat', 'pat');

-- 
-- dump ตาราง `tbsell`
-- 
/*
INSERT INTO `tbsell` VALUES ('00010', '2013-10-30', 30.00);
INSERT INTO `tbsell` VALUES ('00009', '2013-10-29', 35.00);
INSERT INTO `tbsell` VALUES ('00008', '2013-10-29', 60.00);
INSERT INTO `tbsell` VALUES ('00007', '2013-10-29', 100.00);
INSERT INTO `tbsell` VALUES ('00006', '2013-10-28', 75.00);
INSERT INTO `tbsell` VALUES ('00005', '2013-10-27', 105.00);
INSERT INTO `tbsell` VALUES ('00004', '2013-10-27', 30.00);
INSERT INTO `tbsell` VALUES ('00003', '2013-10-26', 70.00);
INSERT INTO `tbsell` VALUES ('00002', '2013-10-24', 30.00);
INSERT INTO `tbsell` VALUES ('00001', '2013-10-24', 80.00);
INSERT INTO `tbsell` VALUES ('00015', '2013-12-01', 0.00);
INSERT INTO `tbsell` VALUES ('00014', '2013-12-01', 120.00);
INSERT INTO `tbsell` VALUES ('00013', '2013-11-28', 80.00);
INSERT INTO `tbsell` VALUES ('00012', '2013-11-28', 0.00);
INSERT INTO `tbsell` VALUES ('00011', '2013-11-28', 105.00);
INSERT INTO `tbsell` VALUES ('00016', '2013-12-01', 75.00);
INSERT INTO `tbsell` VALUES ('00017', '2013-12-01', 150.00);
INSERT INTO `tbsell` VALUES ('00018', '2013-12-01', 60.00);
*/
-- 
-- dump ตาราง `tbselldetail`
-- 
/*
INSERT INTO `tbselldetail` VALUES ('00010', '05', 30, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00009', '03', 35, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00008', '07', 30, 2, 2, 2);
INSERT INTO `tbselldetail` VALUES ('00007', '05', 30, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00007', '04', 40, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00007', '01', 30, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00006', '08', 35, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00006', '04', 40, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00005', '06', 30, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00005', '03', 35, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00005', '02', 40, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00004', '05', 30, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00003', '08', 35, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00003', '03', 35, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00002', '05', 30, 2, 2, 2);
INSERT INTO `tbselldetail` VALUES ('00001', '04', 40, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00001', '02', 40, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00013', '07', 30, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00013', '13', 20, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00013', '19', 30, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00012', '12', 40, 1, 0, 1);
INSERT INTO `tbselldetail` VALUES ('00012', '09', 35, 1, 0, 1);
INSERT INTO `tbselldetail` VALUES ('00011', '08', 35, 0, 0, 0);
INSERT INTO `tbselldetail` VALUES ('00011', '12', 40, 0, 0, 0);
INSERT INTO `tbselldetail` VALUES ('00011', '01', 30, 0, 0, 0);
INSERT INTO `tbselldetail` VALUES ('00015', '11', 35, 1, 0, 1);
INSERT INTO `tbselldetail` VALUES ('00015', '08', 35, 1, 0, 1);
INSERT INTO `tbselldetail` VALUES ('00016', '11', 35, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00016', '10', 40, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00017', '13', 20, 1, 2, 1);
INSERT INTO `tbselldetail` VALUES ('00017', '16', 30, 2, 2, 2);
INSERT INTO `tbselldetail` VALUES ('00017', '20', 35, 2, 2, 2);
INSERT INTO `tbselldetail` VALUES ('00018', '19', 30, 1, 1, 1);
INSERT INTO `tbselldetail` VALUES ('00018', '01', 30, 1, 1, 1);
*/
