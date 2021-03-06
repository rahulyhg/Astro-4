CREATE TABLE `#__freepaypal_transactions` (
  id int(11) NOT NULL auto_increment,
  payer_id varchar(60) default NULL,
  payment_date varchar(50) default NULL,
  payment_date_mysql datetime default NULL,
  transaction_id varchar(50) default NULL,
  first_name varchar(50) default NULL,
  last_name varchar(50) default NULL,
  payer_email varchar(75) default NULL,
  payer_status varchar(50) default NULL,
  payment_type varchar(50) default NULL,
  memo tinytext,
  item_name varchar(127) default NULL,
  item_number varchar(127) default NULL,
  option_name1 varchar(64) NOT NULL default '',
  option_selection1 varchar(200) NOT NULL default '',
  option_name2 varchar(64) NOT NULL default '',
  option_selection2 varchar(200) NOT NULL default '',
  option_name3 varchar(64) NOT NULL default '',
  option_selection3 varchar(200) NOT NULL default '',
  option_name4 varchar(64) NOT NULL default '',
  option_selection4 varchar(200) NOT NULL default '',
  option_name5 varchar(64) NOT NULL default '',
  option_selection5 varchar(200) NOT NULL default '',
  quantity int(11) NOT NULL default '0',
  mc_gross decimal(9,2) default NULL,
  mc_currency char(3) default NULL,
  mc_fee decimal(9,2) default NULL,
  payment_fee decimal(9,2) default NULL,
  tax decimal(9,2) default NULL,
  address_name varchar(255) NOT NULL default '',
  address_street varchar(255) NOT NULL default '',
  address_city varchar(255) NOT NULL default '',
  address_state varchar(255) NOT NULL default '',
  address_zip varchar(255) NOT NULL default '',
  address_country varchar(255) NOT NULL default '',
  address_status varchar(255) NOT NULL default '',
  payer_business_name varchar(255) NOT NULL default '',
  payment_status varchar(255) NOT NULL default '',
  pending_reason varchar(255) NOT NULL default '',
  reason_code varchar(255) NOT NULL default '',
  txn_type varchar(255) NOT NULL default '',
  anonymous_name tinyint(1) NOT NULL,
  anonymous_amount tinyint(1) NOT NULL,
  published tinyint(1) NOT NULL,
  PRIMARY KEY  (id),
  UNIQUE KEY transaction_id (transaction_id)
);

CREATE TABLE `#__freepaypal_items` (
  id int(11) NOT NULL auto_increment,
  item_number varchar(11) NOT NULL default '0',
  mc_gross decimal(9,2) NOT NULL default '0.00',
  mc_currency enum('USD','CAD','EUR','GBP','JPY','CAD') NOT NULL default 'USD',
  date_created datetime NOT NULL,
  published tinyint(1) NOT NULL,
  PRIMARY KEY  (id),
  UNIQUE KEY item_number (item_number)
);
