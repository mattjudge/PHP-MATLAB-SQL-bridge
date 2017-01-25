function data = dbquery( query )
%DBQUERY returns results from database

% THIS SHOULD ONLY BE USED ON A LOCAL MACHINE
hostname='localhost:3306';               % hostname of the sql database
username='root';                         % the database username
password='';                             % the database password
dbname='mydatabase';                     % the database name
url='http://localhost/sql_to_json.php';  % url to the php script

jsondata = webread(url,'hostname',hostname, ...
    'username',username, ...
    'password',password,'dbname',dbname, ...
    'querystr',query);

if jsondata{1} == 1  % check for success flag
    data = jsondata{2};
else
    % relay errors encountered by php script to user
    bEx = MException('DBQUERY:DatabaseError','Database error occured');
    cEx = MException('DBQUERY:DatabaseErrorCause',jsondata{2});
    throw(addCause(bEx, cEx))
end    
end
