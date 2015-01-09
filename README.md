# 배운점

[Misfits.kr](http://misfits.kr/) 웹사이트를 따라하면서 학습한 내용을 정리한 글이다.

### 상단 이미지 슬라이더

[flexslider](http://www.woothemes.com/flexslider/) 라이브러리를 사용한다. 부트스트립 Carousel과 다른점은 화면 크기
변화에도 이쁘게 나온다는 점. 포스트의 [특성 이미지](http://stackoverflow.com/questions/11261883/how-to-get-wordpress-post-featured-image-url)
만을 가져와 슬라이더로 구성한다. 이미지의 위의 카테고리명은 [the_category()](http://codex.wordpress.org/Function_Reference/the_category) 
함수를 이용한다.  

### 우측 이미지 슬라이더

상단 이미지 슬라이더와 달리 별도의 플러그인을 사용한다.([Master Slider](https://wordpress.org/plugins/master-slider/))
이미지 파일을 로딩하고 이를 슬라이드 하는 방법이 쉽다. 이미지를 이용한 컨텐츠 구성시 유용하게 쓰일 수 있다.

### 사이드바 및 메인 페이지

[Shortcode Ultimate](https://wordpress.org/plugins/shortcodes-ultimate/)는 굉장한 플러그인이다. 블로그의 어떤 
 컨텐츠든지 커스텀 템플릿으로 보여줄 수 있다. 이건 코드를 직접봐야 실감할 수 있다. ```/templates``` 폴더를 확인하자.
 
### 메뉴 네비게이터

원래 블로그에서는 직접 구현했지만 [Dropdown Menu Widget](https://wordpress.org/plugins/dropdown-menu-widget/) 
플러그인을 사용했다. 부족한 면이 있다.
