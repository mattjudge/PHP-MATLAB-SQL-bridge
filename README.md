# PHP-MATLAB-SQL-bridge
A tool for allowing MATLAB scripts to communicate with an SQL database via PHP (using JSON)

This is a tool for development purposes only! It should ideally only be used on the local machine which hosts the SQL database. If that's not possible, SSL *must* be implemented, since database credentials are sent in the query string as GET parameters to the PHP script.


This tool is to allow MATLAB scripts to communicate with SQL databases via a PHP script. This is occasionally neccessary in development, if you do not have access to the MATLAB [Database Toolbox](https://www.mathworks.com/products/database.html). Obviously, the Database Toolbox should be used in preference to this tool if available.

## To Install

- Copy the PHP script to a locally accessible web directory, ensuring all neccessary requirements are implemented for PHP excecution (e.g. under an Apache server).
- Edit `dbquery.m` with the correct url to the PHP script, and database credentials
- Any SQL statements can be executed using the `dbquery` function in MATLAB, e.g. `data = dbquery('SELECT * FROM mytable')`



## Available under the MIT license.

Copyright (c) 2017 Matt Judge

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
