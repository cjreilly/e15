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

## Details
Request data is small enough to avoid overwhelming the system. Consider the following parts:
 + tag / VARCHAR
 + path / VARCHAR
 + query / VARCHAR
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

### Issues
 + The URL, if intercepted, is easily reproducible.
 + There is no guarantee that the proxy system can reach the destination, for example, non-public addresses.

## Outside resources
+ Laravel Documentation <https://laravel.com/docs>
+ PHP Common Documentation <https://www.php.net>
+ W3 HTML Documentation <https://www.w3.org/TR/html52/>
+ W3 CSS Documentation <https://www.w3.org/TR/css-2018/>
+ CSCI E-15 Web Server Frameworks with Laravel/PHP <https://hesweb.dev/e15/>

## Notes for instructor
