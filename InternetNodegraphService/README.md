# Internet Nodegraph Service (request by proxy)
+ By: *Christopher Reilly*
+ Production URL: <http://internetnodegraphservice.loc>

## Outline
+ Nodegraph
  - view: internet as a graph of many nodes
  - model: database of component parts of public requests
  - controller: a launch controller creates requests
+ Proxy
  - a proxy web application forwards requests as an intermediary system
  - proxy clients may use a standard URL pattern to initiate requests
  - proxy clients may recieve requests from the URL
+ Requests
  - a client creates new requests manually or by use of a URL string
  - proxy generates a unique identifier for each request, stored in a database
  - a standard route with a pattern /hX4da3?sender=address-a&receiver=address-b
  - the receiver must only respond with addresses reversed
  - extra: requests have a timeout feature, which automatically destroys the request
+ Other considerations
  - issues
  - extra features

## PathIDX
The PathIDX table is a cross-referenced list for all paths to exist in the system.
 + id / INTEGER
 + path / VARCHAR

## QueryIDX
The QueryIDX table is a cross-referenced list for all queries to exist in the system.
 + id / INTEGER
 + path / VARCHAR

## ServerIDX
The ServerIDX table is a cross-referenced list of all servers to exist in the system.
 + id / INTEGER
 + path / VARCHAR

## Path table
Request data is small enough to avoid overwhelming the system. Consider the following parts:
 + tag / VARCHAR
 + path / INTEGER
 + query / INTEGER
 + port / NUMBER
 + destroy on / DATETIME


### Tag
 The tag field is the unique identifier for the record. The word 'tag' is used in lieu of the common 'id' column. The
 tag field is passed around publicly in plain text.

### Path and Query
 The path field is a directory path on the system. The query field is a typical query to the system. In a standard HTTP
 example, it is displayed as such: [address]:[port][path][query]. In this example we could have
 [http://iot.christopherreilly.me]:[80][/industry-classification][#industry-classification.civil].

### Example
 Take an example of a smartphone app developer who wants to control hundreds of robots with touchscreen gestures. The
 app developer can *create* a new URL on the proxy system and *reuse* it for the hundreds of different robot addresses.
 Then all the developer needs to do is program the touchscreen gesture system to initiate the same request with those
 addresses. The app, deployed to other users, is an immediate multi-user control environment.

#### Create
  The creator enters the full request with a POST form. It is separated by parts. The system creates three records:
  + A PathIDX record with a unique identifier and a path string.
  + A QueryIDX record with a unique identifier and a query string.
  + A Path record with the tag string, the PathIDX index, the QueryIDX index, the port number, and an optional
  destroy_on record.
  
  The initial tag string is I=[ServerIDX.id]:[Path.port]:[PathIDX.id]:[QueryIDX.id].

  The information density is increased with lookup tables ServerIDX, PathIDX, and QueryIDX. An example for the first
  record is I="1:80:1:1". Maximum length is expected for 5-digit hosts, 5-digit ports, 6-digit paths, and 6-digit
  queries.

  If the creator attempts to create a tag that already exists, the existing tag is returned without creating a new
  record. The creator receives the tag upon creating one. If there is an error, the creator receives an error message
  and no tag.

  Interfaces:
  + /path/create

#### Reuse
  The reuser submits a GET request in one of several different ways. Each request should be considered as an efficient
  interface for requesting the resource.
  Interfaces:
  + /[tag]
  + /path/reuse/[tag]

  The reuser must know and supply the tag. There is no option to recover a tag if it is lost.

#### Delete
  The deleter must know and supply the tag. Upon supplying a tag to the delete blade, the system removes the record.
  Interfaces:
  + /path/delete/[tag]


## Automation

The automation goal set for this project is to maintain an operational development environment that can be fully
maintained and tested by one developer. The automation goal expedites development on team environments as well by
reducing merge conflicts. The team model is slightly more complex that what is proposed here - mostly due to increase in
scope, especially if each developer can not wait for a full test battery to complete on each code change.

### Cron maintenance
This project implements cron jobs for maintenance in addition to automated tests. The main reason being to enhance fluid
development. The cron jobs are intended to supplement feature and regression testing.

+ CronPurge - purge stale database records according to feature design. This implements the cache rotation feature.
+ CronTest - run automated dusk tests.

All cron jobs rely on host system resources. They are not installed automatically. Use `crontab -e` on Linux and Mac to
edit the system cron file. Use `tail -f storage/logs/laravel.log` to follow the log file.

Here is an example job that runs Laravel jobs every minute:

`
MAILTO="CJReilly@gmail.com"
* * * * * /bin/bash -c "cd /opt/lampp/htdocs/e15/InternetNodegraphService && /opt/lampp/bin/php artisan schedule:run >> /dev/null" 2>&1
`

## Other considerations

### Issues
 + The URL, if intercepted, is easily reproducible.
 + There is no guarantee that the proxy system can reach the destination, for example, non-public addresses.
 + Constraint on index column when artifical limit imposed by tag algorithm is reached

### Extra Features
 + Set tag expiration instead of using the system default
 + Update expiration date by 10 days after reuse
 + Manual expiration update
 + Metadata table to include use count, author



## Outside resources
+ Laravel Documentation <https://laravel.com/docs>
+ PHP Common Documentation <https://www.php.net>
+ W3 HTML Documentation <https://www.w3.org/TR/html52/>
+ W3 CSS Documentation <https://www.w3.org/TR/css-2018/>
+ CSCI E-15 Web Server Frameworks with Laravel/PHP <https://hesweb.dev/e15/>
+ W3 How to copy with Javascript <https://www.w3schools.com/howto/howto_js_copy_clipboard.asp>
+ Scheduling with Cron Job <https://www.mynotepaper.com/laravel-62-task-scheduling-with-cron-job-tutorial>
+ Cron How-to <https://help.ubuntu.com/community/CronHowto>

## Notes for instructor
