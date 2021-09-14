
create table userlist(username varchar(230), password varchar(100));
insert into userlist VALUES("admin","123@admin");

create table orders(
    orderid int AUTO_INCREMENT,
    name varchar(100),
    email varchar(100),
    mobno varchar(10),
    addline1 varchar(100),
    addline2 varchar(100),
    state varchar(100),
    city varchar(50),
    pincode int(10),
    service varchar(100),
    datereq date,
    labour int,
    square char(15),
    description varchar(250),
    PRIMARY key(orderid)
    );
   
    create table accepted(
    orderid int AUTO_INCREMENT,
    name varchar(100),
    email varchar(100),
    mobno varchar(10),
    addline1 varchar(100),
    addline2 varchar(100),
    state varchar(100),
    city varchar(50),
    pincode int(10),
    service varchar(100),
    datereq date,
    labour int,
    square char(15),
    description varchar(250),
    PRIMARY key(orderid)
    );
    create table completed(
    orderid int AUTO_INCREMENT,
    name varchar(100),
    email varchar(100),
    mobno varchar(10),
    addline1 varchar(100),
    addline2 varchar(100),
    state varchar(100),
    city varchar(50),
    pincode int(10),
    service varchar(100),
    datereq date,
    labour int,
    square char(15),
    description varchar(250),
    PRIMARY key(orderid)
    );
    INSERT INTO `orders`( `name`, `email`, `mobno`, `addline1`,addline2, `state`, `city`, `pincode`, `service`, `datereq`, `labour`, `square`, `description`) VALUES ('john','john@gmail.com','9898989898','1230/colony','pandiyan  nagar','tamilnadu','tirupur',641602,'kitchen','2021-04-12',4,'100-200','i need to clean my house compleetly');

   