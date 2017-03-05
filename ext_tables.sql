CREATE TABLE tx_inventory_domain_model_category (
    uid int unsigned NOT NULL auto_increment,
    pid int DEFAULT 0 NOT NULL,
    name varchar(255) DEFAULT '' NOT NULL,
    PRIMARY KEY (uid), KEY parent (pid)
);

CREATE TABLE tx_inventory_domain_model_product (
    uid int unsigned NOT NULL auto_increment,
    pid int DEFAULT 0 NOT NULL,
    name varchar(255) DEFAULT '' NOT NULL,
    description text NOT NULL,
    quantity int DEFAULT 0 NOT NULL,
    category int unsigned not null,
    PRIMARY KEY (uid), KEY parent (pid),
    FOREIGN KEY (category) REFERENCES tx_inventory_domain_model_category(uid)
);