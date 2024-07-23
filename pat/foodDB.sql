CREATE TABLE tbsell (
  sellid VARCHAR(5)   NOT NULL ,
  selldate DATE    ,
  total DECIMAL(8,2)      ,
PRIMARY KEY(sellid));

CREATE TABLE login (
  un VARCHAR(250)   NOT NULL ,
  pw varchar(250) ,
PRIMARY KEY(un));


CREATE TABLE tbtype (
  typeid VARCHAR(2)   NOT NULL ,
  typename VARCHAR(20)      ,
PRIMARY KEY(typeid));




CREATE TABLE tbcategory (
  catid VARCHAR(2)   NOT NULL ,
  catname VARCHAR(20)      ,
PRIMARY KEY(catid));




CREATE TABLE tbproduct (
  itemid VARCHAR(2)   NOT NULL ,
  tbtype_typeid VARCHAR(2)   NOT NULL ,
  tbcategory_catid VARCHAR(2)   NOT NULL ,
  itemname VARCHAR(30)    ,
  unitprice INTEGER    ,
  picture VARCHAR(50)    ,
  detail VARCHAR(255)      ,
PRIMARY KEY(itemid)    ,
  FOREIGN KEY(tbcategory_catid)
    REFERENCES tbcategory(catid)
      ON UPDATE CASCADE,
  FOREIGN KEY(tbtype_typeid)
    REFERENCES tbtype(typeid)
      ON UPDATE CASCADE);


CREATE INDEX tbproduct_FKIndex1 ON tbproduct (tbcategory_catid);
CREATE INDEX tbproduct_FKIndex2 ON tbproduct (tbtype_typeid);


CREATE INDEX IFK_cat_prod ON tbproduct (tbcategory_catid);
CREATE INDEX IFK_type_prod ON tbproduct (tbtype_typeid);


CREATE TABLE tbselldetail (
  tbsell_sellid VARCHAR(5)   NOT NULL ,
  tbproduct_itemid VARCHAR(2)   NOT NULL ,
  unitprice INTEGER    ,
  qty INTEGER    ,
  sellstatus INTEGER(1)    ,
  donum INTEGER(1)      ,
PRIMARY KEY(tbsell_sellid, tbproduct_itemid)    ,
  FOREIGN KEY(tbsell_sellid)
    REFERENCES tbsell(sellid)
      ON UPDATE CASCADE,
  FOREIGN KEY(tbproduct_itemid)
    REFERENCES tbproduct(itemid)
      ON UPDATE CASCADE);


CREATE INDEX tbsell_has_tbproduct_FKIndex1 ON tbselldetail (tbsell_sellid);
CREATE INDEX tbsell_has_tbproduct_FKIndex2 ON tbselldetail (tbproduct_itemid);


CREATE INDEX IFK_sell_detail ON tbselldetail (tbsell_sellid);
CREATE INDEX IFK_deltail_prod ON tbselldetail (tbproduct_itemid);



