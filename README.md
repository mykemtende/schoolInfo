# schoolInfo

Students JSON REST API

Open terminal enter command:

 $ curl http://127.0.0.1:8000/api/students

{"current_page":1,"data":[{"id":1,"name":"Ritah Wafula","gender":"Female","age":21,"address":"989-30200","created_at":"2017-12-14 13:02:07","updated_at":"2018-02-03 12:30:19","classroom_id":1,"level_id":1},{"id":3,"name":"Fortune Nekesa","gender":"Female","age":2,"address":"989","created_at":"2018-02-09 06:51:11","updated_at":"2018-02-14 11:51:54","classroom_id":6,"level_id":4},{"id":5,"name":"Peter Keino","gender":"Male","age":20,"address":"989","created_at":"2018-02-14 12:01:42","updated_at":"2018-02-14 12:01:42","classroom_id":5,"level_id":3},{"id":6,"name":"John Kamau","gender":"Male","age":16,"address":"890-30400","created_at":"2018-02-14 12:02:53","updated_at":"2018-02-14 12:02:53","classroom_id":1,"level_id":1}],"first_page_url":"http:\/\/127.0.0.1:8000\/api\/students?page=1","from":1,"last_page":1,"last_page_url":"http:\/\/127.0.0.1:8000\/api\/students?page=1","next_page_url":null,"path":"http:\/\/127.0.0.1:8000\/api\/students","per_page":10,"prev_page_url":null,"to":4,"total":4}

for a specific student:

 $ http://127.0.0.1:8000/api/students/1

{"id":1,"name":"Ritah Wafula","gender":"Female","age":21,"address":"989-30200","created_at":"2017-12-14 13:02:07","updated_at":"2018-02-03 12:30:19","classroom_id":1,"level_id":1}


App Tests

$ composer test
