

1. Upload all files to server.
2. Update php/connect.php to your server credentials. 
```
	$connection = mysqli_connect("localhost" , "username" , "password", "username") or die(mysql_error());
```
3. Log onto [PHPMyAdmin]
4. Navigate to the database and click on the SQL tab.
5. Run the following SQL command:
```
	CREATE TABLE `users_master` (
	  `id` int(11) NOT NULL,
	  `username` text NOT NULL,
	  `email` text NOT NULL,
	  `password` text NOT NULL,
	  `type` text NOT NULL
	) ENGINE=MyISAM DEFAULT CHARSET=latin1;

	ALTER TABLE `users_master`
	ADD PRIMARY KEY (`id`);

	ALTER TABLE `users_master`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

	CREATE TABLE `users_student` (
	  `id` int(10) NOT NULL,
	  `username` text NOT NULL,
	  `name` varchar(70) CHARACTER SET utf8 NOT NULL,
	  `picture` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `school_year` varchar(50) CHARACTER SET utf8 NOT NULL,
	  `major` varchar(50) CHARACTER SET utf8 NOT NULL,
	  `field_interests` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `bio` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `achievements` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `facebook` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `linkedin` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `behance` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `codepen` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `github` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `snapchat` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `instagram` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `tumblr` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `twitter` varchar(100) CHARACTER SET utf8 NOT NULL, 
	  `skills` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `software` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `languages` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `organizations` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `portfolio_link` varchar(350) CHARACTER SET utf8 NOT NULL,
	  `resume_upload` varchar(200) CHARACTER SET utf8 NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;
	COMMIT;


	CREATE TABLE `users_employer` (
	  `id` int(10) NOT NULL,
	  `username` text NOT NULL,
	  `company_name` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `picture` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `company_overview` varchar(1000) CHARACTER SET utf8 NOT NULL,
	  `company_address` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `requirements` varchar(1000) CHARACTER SET utf8 NOT NULL,
	  `achievements` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `facebook` varchar(250) CHARACTER SET utf8 NOT NULL,
	  `linkedin` varchar(250) CHARACTER SET utf8 NOT NULL,
	  `website` varchar(350) CHARACTER SET utf8 NOT NULL,
	  `career_link` varchar(500) CHARACTER SET utf8 NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;
	COMMIT;

	CREATE TABLE `users_alumni` (
	  `id` int(10) NOT NULL,
	  `username` text NOT NULL,
	  `name` varchar(170) CHARACTER SET utf8 NOT NULL,
	  `picture` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `graduate_year` varchar(4) CHARACTER SET utf8 NOT NULL,
	  `major` varchar(50) CHARACTER SET utf8 NOT NULL,
	  `field_interests` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `bio` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `achievements` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `facebook` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `linkedin` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `behance` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `codepen` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `github` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `snapchat` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `instagram` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `tumblr` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `twitter` varchar(100) CHARACTER SET utf8 NOT NULL, 
	  `skills` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `software` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `languages` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `portfolio_link` varchar(350) CHARACTER SET utf8 NOT NULL,
	  `resume_upload` varchar(200) CHARACTER SET utf8 NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;
	COMMIT;


	CREATE TABLE `users_professor` (
	  `id` int(10) NOT NULL,
	  `username` text NOT NULL,
	  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `picture` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `career_field` varchar(150) CHARACTER SET utf8 NOT NULL,
	  `committee` varchar(250) CHARACTER SET utf8 NOT NULL,
	  `research` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `bio` varchar(500) CHARACTER SET utf8 NOT NULL,
	  `achievements` varchar(300) CHARACTER SET utf8 NOT NULL,
	  `linkedin` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `facebook` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `behance` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `codepen` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `github` varchar(200) CHARACTER SET utf8 NOT NULL,
	  `snapchat` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `instagram` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `tumblr` varchar(100) CHARACTER SET utf8 NOT NULL,
	  `twitter` varchar(100) CHARACTER SET utf8 NOT NULL, 
	  `email` varchar(100) CHARACTER SET utf8 NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;
	COMMIT;

	CREATE TABLE `users_following` (
	  `followingID` int(11) NOT NULL,
	  `followerID` int(11) NOT NULL
	) ENGINE=MyISAM DEFAULT CHARSET=latin1;

	CREATE TABLE `post_master` (
	  `id` int(11) NOT NULL,
	  `user_id` int(11) NOT NULL,
	  `time_posted` text NOT NULL,
	  `type` text NOT NULL,
	  `picture` text NOT NULL,
	  `comment` varchar(280) NOT NULL
	) ENGINE=MyISAM DEFAULT CHARSET=latin1;
```


## Instructions for SASS Setup
If you would like to edit the CSS, we are using SASS. Many of you will likely never have to do this setup, and the CSS stylesheet in the .zip should be all you need for it to display correctly. However if you do edit the stylesheet, be sure to send me the SASS version of the changes you'd like implemented.

1. If you've never downloaded Node.js, first off feel bad about yourself, then download it at: https://nodejs.org/en/
	1. If you aren't sure whether or not you have it, you can open a terminal and enter:
```
	node --version
```
2. Once you have completed that install, open your terminal.
3. Enter this command, which will install SASS.
```
npm install -g sass
```
4. That's it, SASS is installed! When you want to start editting the stylesheet, navigate to it in your terminal. Example:
```
cd Users/Bob Ross/Documents/Project/css
```
5. The following command will allow SASS to begin watching your stylesheet and will compile it after you save. Be sure to keep your terminal window open.
```
sass --watch style.scss
```

## Session Variables for Reference
* $_SESSION['isLoggedIn'] = boolean; displays true if user is logged in
* $_SESSION['loggedInUsername'] = string; gives username of logged in user
* $_SESSION['loggedInUser'] = integer; gives ID of logged in user
* $_SESSION['latestProfileID'] = integer; gives ID of profile currently on/last visited
* $_SESSION['latestProfileUsername'] = string; gives username of profile currently on/last visited# Clusterizr
