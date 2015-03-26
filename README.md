TV challenge developed with Symfony2 using the MySql database and twitter bootstrap for some grey action
==========

1/ Initially you will need to set up your parameters.yml for the database connection in app/config , to your local database. 

2/ create database called listings

3/ in composer use the command 'php app/console doctrine:schema:update --force' to create tables

4/ use this sample data to populate your database 


INSERT INTO `Channels` (`id`, `channel_number`, `channel_name`, `region`, `package`) VALUES
(1, 1, 'Films', '', '2'),
(2, 2, 'Nature', '', '1'),
(3, 3, 'Extreme Tourism', '', '3'),
(4, 4, 'News', '', '1'),
(5, 5, 'Sport', '', '3');

INSERT INTO `Packages` (`id`, `package_name`) VALUES
(1, 'L'),
(2, 'M'),
(3, 'S');



INSERT INTO `Region` (`id`, `region_name`) VALUES
(1, 'North'),
(2, 'South'),
(3, 'East'),
(4, 'West');



INSERT INTO `RegionChannelName` (`id`, `region_id`, `channel_id`, `channel_name`) VALUES
(1, 1, 1, 'Films'),
(2, 1, 2, 'Nature'),
(3, 1, 3, 'Extreme Tourism'),
(4, 1, 4, 'News In The North'),
(5, 1, 5, 'Sport'),
(6, 2, 1, 'Films'),
(7, 2, 2, 'Nature'),
(8, 2, 3, 'Extreme Tourism'),
(9, 2, 4, 'News In The South'),
(10, 2, 5, 'Sport'),
(11, 3, 1, 'Films'),
(12, 3, 2, 'Nature'),
(13, 3, 3, 'Extreme Tourism'),
(14, 3, 4, 'News In The East'),
(15, 3, 5, 'Sport'),
(16, 4, 1, 'Films'),
(17, 4, 2, 'Nature'),
(18, 4, 3, 'Extreme Tourism'),
(19, 4, 4, 'News In The West'),
(20, 4, 5, 'Sport');


5/ To view the start page go to http://127.0.0.1/TVGuide/web/app_dev.php/listings locally

Things needed 
-----------------------------------------------------------

The region is currently hardcoded but in the future would need to add another menu, to post the region id from a drop down menu. 

An API needs to be created from the current data output. 



