# RESTful API ( Representational State Transfer )

1. 어떤 방식으로 A가 요청하고 어떤 방식으로 B를 응답해줄지 정해놓은 것
2. 보통 CRUD로 정리해놓음
> ex url<br/>
post	https://pi.yalcobooks.com/vi1/books<br/>
get 	https://pi.yalcobooks.com/vi1/books<br/>	
get 	https://pi.yalcobooks.com/vi1/books/1<br/>
put 	https://pi.yalcobooks.com/vi1/books/20<br/>
patch 	https://pi.yalcobooks.com/vi1/books/7<br/>
delete 	https://pi.yalcobooks.com/vi1/books/123<br/>

--> 이렇게 주소로만 표현을 하기 때문에 하나의 클래스마다 CRUD를 다 해두는 것

캐싱 : 이미 불러온 데이터를 client가 들고 있어서 Server쪽에 다시 부르는 게 아님
1. get delete / post put patch

에러코드
2XX Success
4XX Client Error
5xx Server Error