# CI/CD
정의 : 어플리케이션 개발단계부터 배포 때까지의 이 모든 단계들을 자동화를 통해서 효율적으로 사용자들에게 좀더 편안하게 배포하는 것

CI : Continuous Integration
CD : Continuous Delivery or Continuous Deployment --> 자동화가 되었는지 안되었는지의 대한 차이

Continuous Integration ( 지속적입 통합 )
 버그 수정이나 새로 만드는 코드들이 깃 혹은 한 코드에서 merge되는 것을 말한다.
 1. 코드 변경사항을 주기적으로 빈번하게 머지해야 한다.
 2. 통합을 위한 단계 (빌드, 테스트, 머지)의 자동화

Continuous Delivery ( 지속적인 제공 )
CI를 통해 코드가 다 만들어졌다면 release가 될 준비가 되었다는 뜻이고 배포까지 한다.

총 단계
code -> build -> test -> release -> deploy

tool : buildkite, jenkins, github actions
