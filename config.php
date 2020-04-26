<?php

config();

function config(){

    print "Config server dev by Kisuke OzerCorp";
    sleep(2);

    print "Config server starded...";
    sleep(5);

    print "install apache..";
    sleep(2);
    system("yum install -y wget");
    system("yum -y firewalld");
    system("yum -y install firewalld");
    system("yum clean all");
    system("yum install -y update");
    system("yum install -y httpd");
    print "install apache finish";


    print "php7 install started...";
    sleep(2);
    system("rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm");
    system("rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm");
    system("yum install -y mod_php71w php71w-cli php71w-common php71w-gd php71w-mbstring php71w-mcrypt php71w-mysqlnd php71w-xml");
    system("cp /etc/php.ini /etc/php.ini.bak");
    system("systemctl restart httpd.service");
    system("systemctl status nginx.service php-fpm.service");
    system("yum -y install epel-release");
    system("yum -y update");
    system("yum install -y php");
    system("yum install -y epel-release");
    system("yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm");
    system("yum install -y yum-utils");
    system("yum-config-manager --enable remi-php72");
    system("yum update");
    system("yum search php72 | more");
    system("yum search php72 | egrep 'fpm|gd|mysql|memcache'");
    system("yum install -y php72");
    system("yum install php72-php-fpm php72-php-gd php72-php-json php72-php-mbstring php72-php-mysqlnd php72-php-xml php72-php-xmlrpc php72-php-opcache");
    print "php7 install finish";

    print "pecl install started..";
    sleep(2);
    system("yum install php-pear");
    print "pecl install finish";

    print "Install SSH2 started..";
    sleep(3);
    system("yum install gcc php71w-devel libssh2 libssh2-devel");
    system("wget https://github.com/Sean-Der/pecl-networking-ssh2/archive/php7.zip");
    system("yum install -y unzip");
    system("unzip php7.zip");
    system("cd pecl-networking-ssh2-php7 && phpize && ./configure && make && make install && echo extension=ssh2.so");
    system("systemctl restart httpd");
    print "Install SSH2 finish";


    print "Screen Install started.. ";
    sleep(3);
    system("yum install -y screen");
    print "Screen install finish";

    print "Install extra started";
    sleep(3);
    system("yum install -y nano");
    system("yum install -y cpan");
    system("yum install -y vnstat");
    system("yum install -y dstat");
    system("yum install -y hping3");
    system("yum install -y htop");
    print "Install extra finish";

    print "install firewall started..";
    sleep("3");
    system("systemctl start firewalld");
    system("systemctl enable firewalld");
    system("firewall-cmd --permanent --add-service=http");
    system("firewall-cmd  --permanent --add-port={80,22}/tcp ");
    system("firewall-cmd --complete-reload");
    system("firewall-cmd  --list-all");
    print "\nport/80/22/tcp open !\n";

    print "Install js started..";
    system("yum install -y upgrade");
    system("curl -sL https://deb.nodesource.com/setup_11.x | bash -");
    system("yum install -y nodejs");
    system("yum install -y node");
    system("yum install -y npm");
    system("npm install ws");
    system("npm install request");
    system("npm install fs");
    system("npm install https-proxy-agent");
    print "Install js finish";

    print "Install mysql started..";
    sleep(2);
    system("wget http://repo.mysql.com/mysql-community-release-el7-5.noarch.rpm");
    system("sudo rpm -ivh mysql-community-release-el7-5.noarch.rpm");
    system("sudo yum install mysql-server");
    system("sudo systemctl start mysqld");
    print "Install mysql finish";
    print "your server is configured and ready to use";







}
