# Algo php

## Đề bài

- ...
- Thực hiện bởi: **Nguyễn Gia Hào**

## Các plugins, libraries, package đã sử dụng
- symfony/var-dumper
- ...
- ...

## Cài đặt
```
composer install
```

## Test

## Kết quả
- parse file question.md
```injectablephp
$path = 'question.md';
$questions = \App\QuestionList::fromMdFile($path);
dd($questions);
//kết quả
//...
//...
```

- duyệt questions
```injectablephp
foreach ($questions as $question) {
    dump($question)
}
//kết quả
//...
//...
```

- hàm first()
```injectablephp
$first_question = $question->first()
dd($first_question);
//kết quả
//...
//...
```

- hàm end()
- hàm filter
