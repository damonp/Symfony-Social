ATTENTION: This operation should not be executed in a production environment.

CREATE TABLE config_local (id INT AUTO_INCREMENT NOT NULL, conf_key VARCHAR(50) NOT NULL, conf_val VARCHAR(255) NOT NULL, conf_val_type VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = InnoDB;
CREATE TABLE user_accounts (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, algorithm VARCHAR(255) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT '(DC2Type:array)', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, facebook_uid VARCHAR(255) DEFAULT NULL, twitter_uid VARCHAR(255) DEFAULT NULL, twitter_username VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_2A457AAC92FC23A8 (username_canonical), UNIQUE INDEX UNIQ_2A457AACA0D96FBF (email_canonical), PRIMARY KEY(id)) ENGINE = InnoDB;
CREATE TABLE content (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(100) NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = InnoDB