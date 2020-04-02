# Random Name Generator
## http://boiling-sea-95267.herokuapp.com/api/

### Endpoints:
* first_name
* last_name

Each endpoint can either be queried as a number (between 1 and 30,000) or as a string.

**Queried as a number**

If an endpoint is queried as a number, the number corresponds to the id of the name in the database. The names are loosely ordered by popularity, although there are some discrepancies in the first name ranks as the original data was sorted by gender. In general, the lower the number, the more popular the name.

*Example output:*

##### http://boiling-sea-95267.herokuapp.com/api/?first_name=1&last_name=1
returns `[{"id": "1","name": "Mary"},{"id":"1","name": "SMITH"}]`

##### http://boiling-sea-95267.herokuapp.com/api/?first_name=1234&last_name=4321
returns `[{"id":"1234","name":"Chauncey"},{"id":"4321","name":"MOWERY"}]`

**Queried as a string**

If an endpoint is queried as a string, the result will match that query, if available.

*Example output:*

##### http://boiling-sea-95267.herokuapp.com/api/?first_name=hunter&last_name=thompson
returns `[{"id":"5802","name":"Hunter"},{"id":"23","name":"THOMPSON"}]`

**Operators**

Strings are read as SQL **LIKE** queries, which means you have access to the following operators:
- % (zero, one, or multiple characters)
- _ (a single character)

If more than one result is returned, the API will return a random one from amongst them. For example, if both first_name and last_name are equal to %, the API will return a completely random name.
