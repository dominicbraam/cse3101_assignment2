## users
		PK userid	int
		username	varchar(30)
		password	varchar(30)
		date_created datetime

## posts
		PK postid	int
		date_created datetime
		body		tinytext
		SK userid	int

## comments
		PK commentid	int
		date_created	datetime
		body			tinytext
		SK postid		int
